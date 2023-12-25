<!-- interface is a contract that defines a set of methods that a class must implement. 
An interface specifies what methods a class should have, but it does not provide the implementation.
 A class that implements an interface must provide concrete implementations for all the methods declared in that interface. -->

<?php 
// -- interfaces have only methods no properties
// -- if a methode is deleard it must be initilized in class.
interface sum{
    function calulateSum();
}
interface sub{
    function calulateSub();
}

class calc implements sum,sub{
   public $numOne;
   public $numTwo;
   function __construct($numOne,$numTwo)
   {
    $this->numOne = $numOne;
    $this->numTwo = $numTwo;
   }
   function calulateSum(){
    echo $this->numOne + $this->numTwo;
   }
   function calulateSub(){
    echo $this->numOne - $this->numTwo;
   }
}

$calc = new calc(23,44);
$calc->calulateSum();
$calc->calulateSub();
