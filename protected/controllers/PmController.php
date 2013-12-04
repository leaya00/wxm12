<?php
/*
 * 普通管理员必须登录
 */
class PmController extends UserController
{

	public function actionIndex()
	{

		if(isset($_POST["content"])){
			$dict=DDict::model()->find('dtype=:dtype', array(':dtype'=>'project_num'));
			$pnum=$dict->dcode+1;
			$dict->dcode=$pnum;
			$dict->save();
			$project=new DProject();
			//填充uuid
			$project->id=VUuid::model()->find()->uuid;
			//产生编号
			$project->number=str_pad($pnum,6,'0',STR_PAD_LEFT);
			$project->content=$_POST["content"];
			$project->name=$_POST["title"];
			$project->demand=$_POST["demand"];
			$project->promoter=Yii::app()->user->id;
			$project->personCount=$_POST["personCount"];
			$project->startdate=$_POST["startdate"];
			$project->lastdate=$_POST["lastdate"];
			$project->email=$_POST["email"];
			$project->promoterType=$_POST["promoterType"];
			$project->state=$_POST["state"];
			
			$project->save();

		}else{
			$stateDict=DDict::model()->findAll('dtype=:dtype', array(':dtype'=>'state'));
			$orgtypeDict=DDict::model()->findAll('dtype=:dtype', array(':dtype'=>'orgtype'));
			$this->render('/project/publish',array(
				'stateDict'=>$stateDict,
				'orgtypeDict'=>$orgtypeDict,
			));
		}
	}
	public function actionTest()
	{
		if(isset($_POST["content"])){
			//写入内容
		}
		$this->render('test');
	}


	public function actionckUpload()
	{

		$message = "";
		$formname="upload";
		$path="images/upload/";
		if ((($_FILES[$formname]["type"] == "image/gif")
		|| ($_FILES[$formname]["type"] == "image/jpeg")
		|| ($_FILES[$formname]["type"] == "image/jpg")
		|| ($_FILES[$formname]["type"] == "image/pjpeg"
		||$_FILES[$formname]["type"]=="application/x-shockwave-flash")
		)
		&& ($_FILES[$formname]["size"] < 1024*1024)){
			if ($_FILES[$formname]["error"] > 0){
				echo "上传错误: " . $_FILES["file"]["error"] . "<br />";
			}else{
				$destfile=$path . $_FILES[$formname]["name"];
				if (file_exists($destfile)){
					$newname='1_'.$_FILES[$formname]["name"];
					$message = "同名了,新文件名为:$newname";
					$destfile=$path .$newname;
				}
				//注意中文文件名乱码需要转换为gb2312
				move_uploaded_file($_FILES[$formname]["tmp_name"], iconv("UTF-8","gb2312", $destfile) );
				$funcNum = $_GET['CKEditorFuncNum'] ;

			}
		}else{
			$message = "无效的文件";
		}
		$funcNum = $_GET['CKEditorFuncNum'] ;
		$CKEditor = $_GET['CKEditor'] ;
		$langCode = $_GET['langCode'] ;
		$url = Yii::app()->baseUrl.'/'.$destfile;
		header("Content-type: text/html; charset=utf-8");
		echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
	}


}