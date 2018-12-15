<?php 

class Users{
	private $name;
	private $age;

	public function __construct($name, $age){
		$this->name = $name;
		$this->age = $age;
	}

	// public function getName(){
	// 	return $this->name;
	// }

	// public function setName($name){
	// 	$this->name = $name;
	// }

	public function __get($property){
		if(property_exists($this, $property)){
			return $this->$property;
		}
	}

	public function __set($property, $value){
		if(property_exists($this, $property)){
			$this->$property = $value;
		}
		return $this;
	}

}

$user = new Users('john', 25);

//echo $user->name; // cant access private name propoerty
//echo $user->name = 'jeff'; // cant access private name propoerty

// $user->setName('Jeff');
// echo $user->getName();
$user->__set('name', 'Jeff');
echo $user->__get('name');

