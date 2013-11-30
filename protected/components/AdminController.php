<?php
class AdminController extends UserController
{
	//只运行admin访问
	protected function  beforeAction($action){
		if(Yii::app()->user->role!="admin"){
			echo "access deny";
			return false;
		}
		return true;
	}
}