<?php
/*
 * Guest
 */
class SiteController extends Controller
{


	public function actionIndex()
	{

		$this->render('index');

	}
	public function actionProject_list()
	{
		$this->render('project_list');
	}
	public function actionProject_detail()
	{
		$this->render('project_detail');
	}
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
}