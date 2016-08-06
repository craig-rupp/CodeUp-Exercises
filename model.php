<?php

class Model
{
	//Array to store key/value data

	private $attributes = [];
	protected $table;

	//Magic setter to populate $attributes array
	public function __set($name, $value)
	{
		//Set the $name key to hold $value in attributes
		$this->attributes[$name] = $value;
	}

	public function __get($name)
	{
		if(array_key_exists($name, $this->attributes)){
			return $this->attributes[$name];
		}
		return null;
	}

}

$testing = new Model();
$testing->name = 'Harvey Dent';
$testing->club = 'Arsenal';
$testing->finances = 105;

echo $testing->club . " is my favorite soccer club!" . PHP_EOL;

echo $testing->finances . " is how many pounds supposedly we have yet to spend" . PHP_EOL;


