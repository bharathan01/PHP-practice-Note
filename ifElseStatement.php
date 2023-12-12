<!-- syntex
if (condition) {
    // Code to be executed if the condition is true
} -->

<?php 
$age = 25;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
   

//Multiple Conditions with elseif:

$grade = 75;

if ($grade >= 90) {
    echo "Excellent!";
} elseif ($grade >= 70) {
    echo "Good!";
} elseif ($grade >= 50) {
    echo "Pass!";
} else {
    echo "Fail!";
}
//Ternary Operator:
$weather = "sunny";

$activity = ($weather == "sunny") ? "Go outside" : "Stay indoors";

echo $activity;

?>



