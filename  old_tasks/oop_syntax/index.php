<?php
class Person{
    public $name = "Умалат ";
    public $age = "20 ";

    public function  sayHello($name) {
        echo "Hi I am " . $name;
    }
}


$myPerson = new Person;
$myPerson2 = new Person;

$myPerson->sayHello("Умалат");
$myPerson->sayHello("Мурад");

//echo $myPerson->name = "Мурад";
//$myPerson->sayHello();
//$myPerson->sayHello();
//$myPerson->sayHello();