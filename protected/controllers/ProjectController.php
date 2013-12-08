<?php
/*
 * 用户必须登录
 */
class ProjectController extends UserController
{
	
	public function actionIndex()
	{
		echo "用户必须登录的功能";
	}
	public function actionApply($project_id=-1)
	{
		if(isset($_POST["projectid"])){
			$dApplyproject=new DApplyproject();
			//填充uuid
			$dApplyproject->id=VUuid::model()->find()->uuid;
			$dApplyproject->save();
		}else{
			$project_list=DProject::model()->FindByid($project_id);
			if(count($project_list)){
				$this->render("/project/apply",array("project_id"=>$project_list[0]['id']));
			}
		}
	}
}