<?php 

class Users{
	public $name; // need to be change 
	public $age;  // need to be change

	public static $minPassLen = 6; // can't be change 

	public static function validatePass($pass){
		if(strlen($pass) >= self::$minPassLen){
			return true;
		}else{
			return false;
		}
	}
}

$password = 'hello2';

if(Users::validatePass($password)){
	echo 'Password is valid';
}else{
	echo 'Password not valid';
}