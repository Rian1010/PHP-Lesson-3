<?php

include_once "Vocal.php";
include_once "Locomotion.php";

abstract class Animal implements Vocal, Locomotion {
	protected $name;
	protected $moveSpeed;

	public function __construct($name, $moveSpeed) {
		$this->name = $name;
		$this->moveSpeed = $moveSpeed;
	}
	abstract public function sayHello();
	abstract public function sayGoodbye();
	public function makeAngryNoises() {
		echo "Grrrrrr...";
	}

	public function walk($distance) {
		echo $this->name ." has moved ". $distance . " metres, in " .$distance/$this->moveSpeed . " seconds.<br>";
	}
	public function run($distance) {
		echo $this->name ." has moved ".$distance . " metres, in " .$distance/($this->moveSpeed*2) . " seconds.<br>";
	}
}
/*
NOTE:

The gettype ensures that "$input" is of datatype string:

if(gettype($input) != "string") {
	die("input error");
}
*/