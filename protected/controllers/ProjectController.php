<?php
/*
 * 用户必须登录
 */
class ProjectController extends UserController
{
	
	public function actionIndex()
	{
		$this->layout="//layouts/bootstrap_layout";
		$this->render("/site/success",array("message"=>"用户必须登录的功能"));
	}
	public function actionApply($project_id=-1)
	{
		if(isset($_POST["projectid"])){
			//判断用户是否已经参加了
			if(DApplyproject::model()->checkApplyToCount(Yii::app()->user->id,$project_id)>0){
				$this->render("/site/error",array('message'=>"你已经参加过了","code"=>"10001")) ;
				return;
			}
			$dApplyproject=new DApplyproject();
			//填充uuid
			$dApplyproject->id=VUuid::model()->find()->uuid;
			$dApplyproject->projectid=$_POST["projectid"];
			$dApplyproject->name=$_POST["name"];
			$dApplyproject->telphone=$_POST["telphone"];
			$dApplyproject->email=$_POST["email"];
			$dApplyproject->describe=$_POST['describe'];
			$dApplyproject->userid=Yii::app()->user->id;
			//CDbExpression 类型的属性值会被直接投入相应的SQL语句 而不转义
			$dApplyproject->starttime=new CDbExpression('NOW()');
			$dApplyproject->save();
			//发送邮件
			$this->layout="//layouts/bootstrap_layout";
			$this->render("/site/success",array("message"=>"您成功参加了项目！"));
		}else{
			$project_list=DProject::model()->FindByid($project_id);
			//判断用户是否已经参加了
			if(DApplyproject::model()->checkApplyToCount(Yii::app()->user->id,$project_id)>0){
				$this->render("/site/error",array('message'=>"你已经参加过了","code"=>"10001")) ;
			}else{
				if(count($project_list)){
					$this->render("/project/apply",array("project_id"=>$project_list[0]['id']));
				}
			}
		}
	}

	private function ApplySendMail()
	{
		$formname="upload";		
		if ((($_FILES[$formname]["type"] == "image/gif") || true)
		&& ($_FILES[$formname]["size"] < 1024*1024)){
			if ($_FILES[$formname]["error"] > 0){
				echo "上传错误: " . $_FILES["file"]["error"] . "<br />";
			}else{
				//iconv("UTF-8","gb2312", $destfile)
				$destfile= $_FILES[$formname]["name"];				
				//注意中文文件名乱码需要转换为gb2312
				$attfilepath=$_FILES[$formname]["tmp_name"];

				
				
			}
		}else{
			echo "无效的文件";
		}
		
	}

}