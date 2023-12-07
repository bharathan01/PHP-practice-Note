<!-- functions are blocks of reusable code that perform a specific task. 
They play a crucial role in organizing code, making it more modular, readable, and maintainable.  -->


<!-- syntex
function functionName($parameter1, $parameter2, ...) {
    // Function body
} -->


<?php 
   function functionName() {
    echo "hello this from a function"
   }
   functionName();

//    Function Arguments and return :
 
 function sum( $a ,$b){
    $c = $a + $b
    return $c
 }
 echo sum(10,20);


 //Default Values for Parameters:
    function greet($name = "Guest") {
        echo "Hello, $name!";
    }
    greet();    // output : Hello, Guest
    greet("john") // output : Hello , john" 
?>

