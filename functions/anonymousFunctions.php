
<!-- Anonymous functions, also known as closures, allow you to create functions without giving them a name. 
They are particularly useful when you need to use a small, one-time function for a specific task. 
Anonymous functions can be assigned to variables,
 passed as arguments to other functions, or returned as values from other functions -->

 <!-- syntex
 $functionName = function($param1, $param2, ...) {
    // Function body
    return $result;
}; -->
<?php 
   $add = function($a, $b) {
       return $a + $b;
   };
   
   $result = $add(3, 5);
   echo $result;  // Outputs: 8
?>