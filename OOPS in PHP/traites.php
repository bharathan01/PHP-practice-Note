<?php
//Traits are used to declare methods that can be used in multiple classes. 
//Traits can have methods and abstract methods that can be used in multiple classes, 
//and the methods can have any access modifier (public, private, or protected).
trait Greeting {
    public function sayHello() {
        echo "Hello, ";
    }

    public function sayGoodbye() {
        echo "Goodbye!";
    }
}

class MyClass {
    use Greeting; // Using the Greeting trait in MyClass

    public function welcome() {
        $this->sayHello();
        echo "welcome!";
    }
}

$obj = new MyClass();
$obj->welcome(); // Outputs: Hello, welcome!
$obj->sayGoodbye(); // Outputs: Goodbye!
