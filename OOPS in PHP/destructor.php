

<!-- In PHP, the __destruct method is a special method that is automatically called when an object is no longer referenced or 
when the script is about to terminate. It is part of the magic methods in PHP -->
<?php
class MyClass {
    public function __construct() {
        echo "Object created.\n";
    }

    public function someMethod() {
        echo "Doing something...\n";
    }

    public function __destruct() {
        echo "Object destroyed.\n";
        // Perform cleanup or resource release tasks here
    }
}

$obj = new MyClass();

// Calling a method of the object
$obj->someMethod();

// The object will be destroyed when it goes out of scope or explicitly unset
// The __destruct method will be automatically called
unset($obj);
