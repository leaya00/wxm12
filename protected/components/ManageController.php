<?php
class ManageController extends UserController
{
	//不允许user访问
	protected function  beforeAction(CAction $action){
		if(Yii::app()->user->role=="user"){
			echo "access deny";
			return false;
		}
		return true;
	}
}