<!-- switch (expression) {
    case value1:
        // Code to be executed if expression matches value1
        break;

    case value2:
        // Code to be executed if expression matches value2
        break;

    // Additional cases as needed

    default:
        // Code to be executed if none of the cases match
} -->



<?php 
   $day = "Monday";

   switch ($day) {
       case "Monday":
           echo "It's the beginning of the week.";
           break;
   
       case "Friday":
           echo "It's the end of the week.";
           break;
   
       default:
           echo "It's a regular day.";
   }
   
?>