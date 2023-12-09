<?php
// print the current date and time
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
echo "The time is " . date(" Y/m/d/D : h:i:sa");

//print any date 
// Syntax
// mktime(hour, minute, second, month, day, year, is_dst)
//Return the Unix timestamp for a date. Then use it to find the day of that date:
    echo "Oct 3, 1975 was on a ".date("l", mktime(0,0,0,10,3,1975));
    echo date("M-d-Y",mktime(0,0,0,12,36,2001)) . "<br>";
    echo date("M-d-Y",mktime(0,0,0,14,1,2001)) . "<br>";
    echo date("M-d-Y",mktime(0,0,0,1,1,2001)) . "<br>";
    echo date("M-d-Y",mktime(0,0,0,1,1,99)) . "<br>";
?>