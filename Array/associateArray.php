
<!-- an associative array is a type of array where each element is associated with a key,
rather than being indexed numerically. Each key-value pair in an associative array is separated by an arrow (=>). -->


<?php 
// Creating an associative array
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);
//or
// $person = [
//     "name" => "John",
//     "age" => 30,
//     "city" => "New York"
// ];


// Accessing elements using keys
echo $person["name"]; // Outputs: John
echo $person["age"];  // Outputs: 30
echo $person["city"]; // Outputs: New York

// Iterating Through an Indexed Array
foreach ($person as $key => $value) {
    echo "$key: $value <br>";
}



?>

