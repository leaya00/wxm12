<?php
/**
 * Backup
 *
 * Yii module to backup, restore databse
 *
 * @version 1.0
 * @author Shiv Charan Panjeta <shiv@toxsl.com> <shivcharan.panjeta@outlook.com>
 */
class DefaultController extends AdminController
{

	public $layout='';




	public $tables = array();
	public $fp ;
	public $file_name;
	public $_path = null;
	public $back_temp_file = 'db_backup_';

	protected function getPath()
	{
		if ( isset ($this->module->path )) $this->_path = $this->module->path;
		else $this->_path = Yii::app()->basePath .'/_backup/';

		if ( !file_exists($this->_path ))
		{
			mkdir($this->_path );
			chmod($this->_path, '777');
		}
		return $this->_path;
	}
	public function execSqlFile($sqlFile)
	{
		$message = "ok";

		if ( file_exists($sqlFile))
		{
			$sqlArray = file_get_contents($sqlFile);

			$cmd = Yii::app()->db->createCommand($sqlArray);
			try	{
				$cmd->execute();
			}
			catch(CDbException $e)
			{
				$message = $e->getMessage();
			}

		}
		return $message;
	}
	
	public function actionCreate()
	{
		$dbManage=new DbManage('127.0.0.1','root','root','wxm','utf8');
		$dbManage->backup('',$this->path, 4000);
		$this->redirect(array('index'));
	}
	public function actionClean($redirect = true)
	{
		echo "close this aciton!";
		return ;
		$tables = $this->getTables();

		if(!$this->StartBackup())
		{
			//render error
			return;
		}

		foreach($tables as $tableName)
		{
			fwrite ( $this->fp, '-- -------------------------------------------'.PHP_EOL );
			fwrite ( $this->fp, 'DROP TABLE IF EXISTS ' .addslashes($tableName) . ';'.PHP_EOL );
			fwrite ( $this->fp, '-- -------------------------------------------'.PHP_EOL );

		}
		$this->EndBackup();

		// logout so there is no problme later .
		Yii::app()->user->logout();
		
		$this->execSqlFile($this->file_name);
		unlink($this->file_name);
		if ( $redirect == true) $this->redirect(array('index'));
	}
	public function actionDelete($file = null)
	{
		
		if ( isset($file))
		{
			$sqlFile = $this->path . basename($file);
			if ( file_exists($sqlFile))
			unlink($sqlFile);
		}
		else{
			throw new CHttpException(404, Yii::t('app', 'File not found'));
		}
		$this->run("index");
	}

	public function actionDownload($file = null)
	{
		if ( isset($file))
		{
			$sqlFile = $this->path . basename($file);
			if ( file_exists($sqlFile))
			{
				$request = Yii::app()->getRequest();
				$request->sendFile(basename($sqlFile),file_get_contents($sqlFile));
			}
		}
		throw new CHttpException(404, Yii::t('app', 'File not found'));
	}

	public function actionIndex()
	{
		$this->updateMenuItems();
		$path = $this->path;
		
		$dataArray = array();
		
		$list_files = glob($path .'*.sql');
		if ($list_files )
		{
			$list = array_map('basename',$list_files);
			sort($list);

	
			foreach ( $list as $id=>$filename )
			{
				$columns = array();
				$columns['id'] = $id;
				$columns['name'] = basename ( $filename);
				$columns['size'] = floor(filesize ( $path. $filename)/ 1024) .' KB';
				$columns['create_time'] = date( 'Y-m-d H:i:s', filectime($path .$filename) );
				$dataArray[] = $columns;
			}
		}
		$dataProvider = new CArrayDataProvider($dataArray);
		$this->render('index', array(
			'dataProvider' => $dataProvider,
		));
	}
	public function actionSyncdown()
	{
		$tables = $this->getTables();

		if(!$this->StartBackup())
		{
			//render error
			$this->render('create');
			return;
		}

		foreach($tables as $tableName)
		{
			$this->getColumns($tableName);
		}
		foreach($tables as $tableName)
		{
			$this->getData($tableName);
		}
		$this->EndBackup();
		$this->actionDownload(basename($this->file_name));
	}

	public function actionRestore($file = null)
	{
		$message = 'OK. Done';
		$sqlFile = $this->path . 'install.sql';
		if ( isset($file))
		{
			$sqlFile = $this->path . basename($file);
		}

		$this->execSqlFile($sqlFile);
		$this->render('restore',array('error'=>$message));
	}

	public function actionUpload()
	{
		$model= new UploadForm('upload');
		if(isset($_POST['UploadForm']))
		{
			$model->attributes = $_POST['UploadForm'];
			$model->upload_file = CUploadedFile::getInstance($model,'upload_file');
			if($model->upload_file->saveAs($this->path . $model->upload_file->name))
			{
				$this->redirect(array('index'));
			}
		}

		$this->render('upload',array('model'=>$model));
	}

	protected function updateMenuItems($model = null)
	{
		// create static model if model is null
		if ( $model == null ) $model=new UploadForm('install');

		switch( $this->action->id)
		{
			case 'restore':
				{
					$this->menu[] = array('label'=>Yii::t('app', 'View Site') , 'url'=>Yii::app()->HomeUrl);
				}
			case 'create':
				{
					$this->menu[] = array('label'=>Yii::t('app', 'List Backup') . ' ' . $model->label(2), 'url'=>array('index'));
				}
				break;
			case 'upload':
				{
					$this->menu[] = array('label'=>Yii::t('app', 'Create Backup') . ' ' . $model->label(), 'url'=>array('create'));
				}
				break;
			default:
				{
					$this->menu[] = array('label'=>Yii::t('app', '备份文件列表') , 'url'=>array('index'));
					$this->menu[] = array('label'=>Yii::t('app', '备份数据库'), 'url'=>array('create'));
					$this->menu[] = array('label'=>Yii::t('app', '上传备份文件') , 'url'=>array('upload'));
					$this->menu[] = array('label'=>Yii::t('app', '恢复备份') , 'url'=>array('restore'));
					$this->menu[] = array('label'=>Yii::t('app', '清空数据库') , 'url'=>array('clean'));
					$this->menu[] = array('label'=>Yii::t('app', '跳转主页') , 'url'=>Yii::app()->HomeUrl);
				}
				break;
		}
	}
}