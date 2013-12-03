<?php
/*
 * 用户必须登录
 */
class ProjectController extends Controller
{
	
	public function actionIndex()
	{
		$this->render('index');
	}
}