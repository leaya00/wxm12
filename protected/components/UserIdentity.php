<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;
	private $_role;
	public function getRole(){
		return $this->_role;
	}
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
		return strtolower($pwd)==strtolower(md5($newpwd));
	}
	public function authenticate()
	{
		$users=$this->findUserByUserName($this->username);
		if(!$users){
			return false;
		}else{
			if($this->validatePassword($users['password'],$this->password)){
				$this->_id=$users['id'];
				$this->setState('role', $users['role']);
				$this->errorCode=self::ERROR_NONE;
				return true;
			}
		}
		return false;

	}
}