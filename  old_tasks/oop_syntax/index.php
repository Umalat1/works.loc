<?php
class Person{
    public $name;
    public $age = "31 ";

    public function sayHello() {
        return 'Hi I am ' . $this->name . ' and i am ' . $this->sayAge();
    }

    public function sayAge() {
        return $this->age;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function setAge($age){
        $this->age = $age;
    }
}


$myPerson = new Person;
$myPerson2 = new Person;

$myPerson->setName("Умалат");
$myPerson->setAge(18);
echo $myPerson->sayHello();
//$myPerson->setName("Мурад");
//$myPerson->setAge(20);
//echo $myPerson->name;
//echo $myPerson->age;
//$myPerson->sayHello("Умалат");
//$myPerson->sayHello("Мурад");
//$myPerson2->setName("Умалат");
//echo $myPerson->name;
//echo $myPerson2->name;
//$myPerson->sayHello();
//$myPerson->sayHello();
//$myPerson->sayHello();