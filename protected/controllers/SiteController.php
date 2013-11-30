<?php

class SiteController extends Controller
{


	public function actionIndex()
	{
		$this->render('index');
	}
	public function actionPlist()
	{
		$this->render('projectlist');
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
				$this->render('login');
			}
		}else{
			$this->layout='';
			$this->render('login');
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