<?php
class Person{
    public $name;
    public $age;

    public function __construct($name, $age){//конструктор вызывается автоматически при создании объекта
        $this->name = $name;
        $this->age = $age;
    }

//    public function test(){
//        return "Привет";
//    }

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


$myPerson = new Person("Умалат", 18);
$myPerson2 = new Person("Мурад", 19);

echo $myPerson->name;
echo $myPerson->age;

echo $myPerson2->name;
echo $myPerson2->age;

//echo $myPerson->test();
//echo $myPerson2->test();
