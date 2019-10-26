<?php

include_once "Animal.php";

class Dog extends Animal {
	public function sayHello() {
		echo "Woof!<br>";
	}
	public function sayGoodbye() {
		echo "Woof Woof!<br>";
	}
}
/*
$doggie = new Dog("Bernie", 3);

$doggie->sayHello();
$doggie->walk(25);
$doggie->run(50);
$doggie->sayGoodbye();
*/