<?php 
//Overriding involves providing a specific implementation for a method in a subclass that is already defined in its superclass.

class A{
    public $numOne;
    public $numTwo;

    function __construct($numOne,$numTwo)
    {
        $this->numOne = $numOne;
        $this->numTwo = $numTwo;
    }

    function sum(){
        echo $this->numOne + $this->numTwo;
    }
}

class B extends A{
    public $numOne;
    public $numTwo;

    function __construct($numOne,$numTwo)
    {
        $this->numOne = $numOne;
        $this->numTwo = $numTwo;
    }

    function sum(){
        echo $this->numOne + $this->numTwo;
    }
}

$A = new A(22 ,33);
$B = new A(10,20);
$A->sum();
$B->sum();


class Animal {
    public function makeSound() {
        echo "Generic animal sound.\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        // Call the makeSound method of the parent class
        parent::makeSound();
        // Add additional behavior specific to the Dog class
        echo "Bark! Bark!\n";
    }
}

// Create an instance of the Dog class
$dog = new Dog();

// Call the makeSound method of the Dog class
$dog->makeSound();

