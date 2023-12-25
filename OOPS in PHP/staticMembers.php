<?php 
class A{
    public static $name = "Bharathan";
    public static function greet(){
        echo "hai bharathan";
    }
}

echo A::$name;
A::greet();

class B {
    public static $name;

    public function __construct($name) {
        // Use self::$name to access the static property
        self::$name = $name;
    }

    public static function greet() {
        // Use self::$name to access the static property
        echo self::$name;
    }
}

// Creating an instance of the class, which will set the static property
$instance = new B("Hello");
// Calling the static method to echo the static property
B::greet();



