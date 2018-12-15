<?php 

class Users{
	public $name;
	public $age;

	public function __construct($name, $age){
		echo 'Class ' .__CLASS__. ' is instantiated <br>';
		$this->name = $name;
		$this->age = $age;
	}


	public function __destruct(){
		echo 'Class ' .__CLASS__. 'has destroyed';
	}
}


$user = new Users('john', 25);
echo $user->name . ' is ' .$user->age .' years old <br>';



