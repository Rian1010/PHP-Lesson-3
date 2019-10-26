<?php

include_once "Animal.php";

class Person extends Animal {
	public function sayHello() {
		echo "Hello, my name is " . $this->name . ".<br>";
	}
	public function sayGoodbye() {
		echo "Goodbye, I'll see you later.<br>";
	}
}
/*
$dude = new Person("Ben", 2);

$dude->sayHello();

$dude->run(20);

$dude->walk(15);

$dude->makeAngryNoises();

$dude->sayGoodbye();
*/