<?php
class Person {

    public $personName;
    public $personAge;
    function __construct($name, $age) {
        $this->personName = $name;
        $this->personAge = $age;
    }

    function sayHai() {
        echo "Hai! My name is $this->personName and I am $this->personAge years old";
    }
}

$Arun = new Person('Arun', 22);
$Arun->sayHai();
?>
