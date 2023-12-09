
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
// ARRAY METHOD:
// length of an array is determain : sizeof($arr) or count(arr)
echo sizeof($numbers)
// search in an array  - in_arrya() and array_search()
//                     - in_array($element,$arr,true) - check weather the element is persent or not return 0 or 1 
//                     - array_serach($element,$arr,true)) - return the index or key 
echo in_array(10,$numbers,true) // the true is optional for strict mode it check the datatype of element by defualt flase
echo in_array(10,$numbers) //return the index
//The array_column() function returns the values from a single column in the input array.
$a = array(
    array(
      'id' => 5698,
      'first_name' => 'Peter',
      'last_name' => 'Griffin',
    ),
    array(
      'id' => 4767,
      'first_name' => 'Ben',
      'last_name' => 'Smith',
    ),
    array(
      'id' => 3809,
      'first_name' => 'Joe',
      'last_name' => 'Doe',
    )
  );
  
  $last_names = array_column($a, 'last_name');
  print_r($last_names);
// refer other method from - https://www.w3schools.com/php/php_ref_array.asp
?>

