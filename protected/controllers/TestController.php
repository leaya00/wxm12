<?php

class TestController extends Controller
{
	public $layout=false;//设置当前默认布局文件为假
	public function actionIndex()
	{
		if(isset($_POST["editor1"])){
			$this->redirect(array("login"=>"index"));
		}
		$this->render('index');
	}
	public function actionckb()
	{
		$this->render('ckbrowser');
	}
	
	public function actionckupload()
	{
		
		$message = "";
		$formname="upload";
		$path="images/upload/";
		if ((($_FILES[$formname]["type"] == "image/gif")
		|| ($_FILES[$formname]["type"] == "image/jpeg")
		|| ($_FILES[$formname]["type"] == "image/jpg")
		|| ($_FILES[$formname]["type"] == "image/pjpeg"))
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
					move_uploaded_file($_FILES[$formname]["tmp_name"],  $destfile);
					$funcNum = $_GET['CKEditorFuncNum'] ;
    
			}
		}else{
			$message = "无效的文件";
		}
		$funcNum = $_GET['CKEditorFuncNum'] ;
	    $CKEditor = $_GET['CKEditor'] ;
	    $langCode = $_GET['langCode'] ;
	    $url = $destfile;
	    header("Content-type: text/html; charset=utf-8");
	    echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
	}
	public function actionAuth()
	{
		if(Yii::app()->user->isGuest){
			echo "没有登录";
		}else{
			echo "已经登录";
		}

	}
	public function actionLogin()
	{
		$identity=new UserIdentity("demo","demo");
		if($identity->authenticate()){
			Yii::app()->user->login($identity);
			echo $identity->username;
		}
		else{
			echo $identity->errorCode;
		}

	}
	public function actionLogout()
	{
		Yii::app()->user->logout();

	}

	// Uncomment the following methods and override them if needed
	/*
	 public function filters()
	 {
	 // return the filter configuration for this controller, e.g.:
	 return array(
	 'inlineFilterName',
	 array(
	 'class'=>'path.to.FilterClass',
	 'propertyName'=>'propertyValue',
	 ),
	 );
	 }

	 public function actions()
	 {
	 // return external action classes, e.g.:
	 return array(
	 'action1'=>'path.to.ActionClass',
	 'action2'=>array(
	 'class'=>'path.to.AnotherActionClass',
	 'propertyName'=>'propertyValue',
	 ),
	 );
	 }
	 */
}