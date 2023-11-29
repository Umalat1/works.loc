<?php
class Person{
    public $name;
    public $age;
    const ID = 11;

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

    public static function saySomething(){
        echo "Hello bla-bla";
    }
}

Person::saySomething();