<?php
/*
 * Guest
 */
class SiteController extends Controller
{


	public function actionIndex()
	{
		$project_list=DProject::model()->pageingFind('1=1',0,10);
		$this->render('index',array('project_list' => $project_list));
		//Globals::sendMail();
	}
	





	public function actionProject_list($page=0)
	{
		$project_list=DProject::model()->pageingFind('1=1',$page,10);
		$this->render('/project/list',array('project_list' => $project_list));
	}

	public function actionProject_detail($project_id=null)
	{

		 if($project_id==null){
			$this->render('index');
		}else{
			$project=DProject::model()->FindByid($project_id);
			if(count($project)!=1){
				$this->render('index');
				return;
			}
			$this->render('/project/detail',array("item"=>$project[0]));
		}
	}

	public function actionNews_list(){

		$this->render('/news/list');		
	}
	public function actionStdio_list(){

		$this->render('/stdio/list');		
	}
	public function actionConactus(){

		$this->render('contactus');		
	}


	public function actionCenter(){
		$this->render("/manage/user_center");
	}

	public function actionSetting(){
			$this->render("/manage/setting");
	}






	/*
		登录
	*/

	public function actionLogin($type='default')
	{

		if(!empty($_POST["username"])){
			$identity=new UserIdentity($_POST["username"],$_POST["password"]);
			if($identity->authenticate()){
				Yii::app()->user->login($identity);
				if($type=='default'){
					$this->redirect(Yii::app()->user->returnUrl);
				}else{
					echo "<script> parent.location.reload();</script>";
				}
			}else{
				$this->layout='';
				$this->render('newlogin');
			}
		}else{
			$this->layout='';
			$this->render('newlogin');
		}

	}
	public function actionLogout($type='default')
	{

		Yii::app()->user->logout();
		if($type=='default'){
			$this->redirect();
		}else{
			echo "<script> parent.location.reload();</script>";
		}
	}
	
	/*
	错误页
	*/
	public function actionError()
	{
		$this->layout='';
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

}