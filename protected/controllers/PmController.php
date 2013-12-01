<?php
/*
 * 普通管理员必须登录
 */
class PmController extends Controller
{

	public function actionIndex()
	{
		if(isset($_POST["content"])){
			$project=new DProject();
			$project->content=$_POST["content"];
			$project->name=$_POST["title"];
			$project->save();
			
		}else{
			$this->render('publish');
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