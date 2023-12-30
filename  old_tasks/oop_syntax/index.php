<?php
class Person{
    public $name;
    public $age;
    const ID = 11;

    public function __construct($name, Int $age){//Int, String, bool
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

    public static function saySomething(){
        echo "Hello bla-bla";
    }
}

//public $student;
class University{

    public function __construct(array $student){
        var_dump($student);
    }
}

$myPerson = new Person('Umalat',18);
//new University([123, 222]);