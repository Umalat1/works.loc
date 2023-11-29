<?php
class Person{
    public $name;// Мурад
    public $age = "20 ";

    public function  sayHello($name) {
        echo "Hi I am " . $name;
    }

    public function setName($name){
        $this->name = $name;// Мурад
    }
}


$myPerson = new Person;
$myPerson2 = new Person;

//$myPerson->sayHello("Умалат");
//$myPerson->sayHello("Мурад");
$myPerson->setName("Мурад");
$myPerson2->setName("Умалат");
echo $myPerson->name;
echo $myPerson2->name;
//$myPerson->sayHello();
//$myPerson->sayHello();
//$myPerson->sayHello();