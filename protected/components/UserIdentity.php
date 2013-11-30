<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	public function getId()
	{
		return $this->_id;
	}
	public function findUserByUserName($username){
		$connection=Yii::app()->db;
		$command=$connection->createCommand("select * from d_user where username=:username");
		$command->bindParam(":username",$username,PDO::PARAM_STR);
		return $command->queryRow();
	}
	public function validatePassword($pwd,$newpwd){
		return $pwd==$newpwd;
	}
	public function authenticate()
	{
		$users=$this->findUserByUserName($this->username);
		if(!$users){
			return false;
		}else{
			if($this->validatePassword($users['password'],$this->password)){
				$this->_id=$users['id'];
				$this->errorCode=self::ERROR_NONE;
				return true;
			}
		}
		return false;

	}
}