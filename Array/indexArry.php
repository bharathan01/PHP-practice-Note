<!-- //creating array -->
<?php 
    $arrayName = Array('hello',20,20.4,true)
    print_r($arrayName)

    $arrayTwo = [2,3,4,5,1,"string"]
    print_r($arrayTwo)

    echo $arrayTwo[0]; // 2

    // Creating an indexed array
    $colors = array("Red", "Green", "Blue");
    
    // Accessing elements using indices
    echo $colors[0]; // Outputs: Red
    echo $colors[1]; // Outputs: Green
    echo $colors[2]; // Outputs: Blue


    $numbers = [10, 20, 30, 40, 50];

   for ($i = 0; $i < count($numbers); $i++) { // count() or sizeof() method is used to get the length of array
    echo $numbers[$i] . " ";
  }
   // Outputs: 10 20 30 40 50

// Iterating Through an Indexed Array using foreach()

foreach($numbers as $value){
    echo "$value , <br>"
}
// ARRAY METHOD:
// length of an array is determain : sizeof($arr) or count(arr)
echo sizeof($numbers)
// search in an array  - in_arrya() and array_search()
//                     - in_array($element,$arr,true) - check weather the element is persent or not return 0 or 1 
//                     - array_serach($element,$arr,true)) - return the index or key 
echo in_array(10,$numbers,true) // the true is optional for strict mode it check the datatype of element by defualt flase
echo in_array(10,$numbers) //return the index
print_r(array_pop($numbers))//The array_pop() function deletes the last element of an array.
print_r(array_push($numbers , 4)) //insert an element to the last of the array
print_r(sort($numbers)) //sort an array in acending order
print_r(rsort($numbers)) //sort an array in decending order

list(a,b,c) = $numbers //-list(vaariables) which store the elements of array in varable (eg like deepstructuring in js)
$num = range(0,5) //- creating an array with element range 0-4
print_r($num)
//array_filter($array, "callback/condition")

function filter($value){
    return($value > 2)
}

print_r(array_filter($numbers,"filter")) 

// refer other method from - https://www.w3schools.com/php/php_ref_array.asp


?>