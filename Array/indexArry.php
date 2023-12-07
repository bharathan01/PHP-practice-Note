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



?>