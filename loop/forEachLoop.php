<!-- foreach Loop:
The foreach loop is specifically designed for iterating over arrays. It automatically traverses each element of an array. -->

<?php 
 $colors = array("red", "green", "blue");
 foreach ($colors as $color) {
     echo $color . "<br>";
 }
?>