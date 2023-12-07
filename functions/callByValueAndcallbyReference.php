<!-- Call by Value:
In call by value, the actual value of the variable is passed to the function. 
Any changes made to the parameter inside the function do not affect the original variable outside the function. -->



<?php 
  function increment($number) {
    $number++;
    echo "Inside function: $number <br>";
}

   $value = 5;
   increment($value);
   echo "Outside function: $value";

?>
<!-- Call by Reference:
In call by reference, a reference to the variable is passed to the function. 
Any changes made to the parameter inside the function directly affect the original variable outside the function. -->
<?php 
    function incrementByReference(&$number) {
        $number++;
        echo "Inside function: $number <br>";
    }
    
    $value = 5;
    incrementByReference($value);
    echo "Outside function: $value";
    
?>