<!-- 
# Variable names in PHP are case-sensitive. $name and $Name are considered different variables.
# Variable names must start with a dollar sign ($) followed by a letter or underscore.
# After the first character, variable names can include letters, numbers, and underscores.
# Variable names cannot include spaces or special characters, except for the underscore (_). 
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL-->

<?php
 $variableName = "Hello, PHP!";
// Variables can store various data types

 $number = 42;           // Integer
 $floatNumber = 3.14;    // Float
 $isTrue = true;         // Boolean
 $myArray = array(1, 2, 3);  // Array
 $myAssocArray = array("name" => "John", "age" => 25);  // Associative Array


 echo $number, "<br>";
 echo $variableName, "<br>";
 echo $isTrue, "<br>";
 print_r($myArray);
 echo var_dump ($myAssocArray), "<br>";
 echo $floatNumber, "<br>";


 //create a constant variables
 //syntex
 // define(name, value, case_insensitive);
 //name: The name of the constant. It is case-sensitive by default.
 //value: The value assigned to the constant.
 //case_insensitive: Optional. If set to true, the constant becomes case-insensitive. Default is false.
 define("num1",20);
 echo num1;
 define("GREETING", "Hello, World!", true);
 echo GREETING;   // Outputs: Hello, World!
 echo greeting;    // Outputs: Hello, World! (due to case-insensitivity)

?>