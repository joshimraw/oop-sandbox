<?php 

// Define a class

Class Users{
	public $name = 'John'; // Properties (attribute)
	public $age;


	// Mathod (function)

	public function sayHello(){
		return $this->name . ' says hello';
	}
}

// Instantiate a user object form Users class

$user = new Users();
echo $user->sayHello();