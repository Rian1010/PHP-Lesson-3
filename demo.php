<?php

include_once "Dog.php";
include_once "Person.php";

$animals = array(new Dog("Sassie", 3),new Person("Sasha", 2));

foreach($animals as $animal) {
	$animal->sayHello();
	$animal->walk(50);
	$animal->sayGoodbye();
}