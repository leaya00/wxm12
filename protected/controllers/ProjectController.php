<?php
/*
 * 用户必须登录
 */
class ProjectController extends Controller
{
	
	public function actionIndex()
	{
		echo "用户必须登录的功能";
	}
}