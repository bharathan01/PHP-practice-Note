<!-- variable functions allow you to dynamically call a function using a variable. 
This means that the function to be called is determined at runtime based on the value of a variable.
syntex:
$functionName = "someFunction";
$result = $functionName($arg1, $arg2, ...); -->

<?php
  function addNumber($x , $y){
    return $x + $y;
  } 

  $variableName = "addNumber";
  echo $variableName(30,20);


  
  function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

$operations = [
    "add" => "add",
    "subtract" => "subtract"
];

$result = $operations["add"](3, 5);
echo $result;
// Calls the add function with arguments 3 and 5
// Result: 8
?>