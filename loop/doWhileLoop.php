<!-- do-while Loop:
The do-while loop is similar to the while loop, 
but it guarantees that the block of code is executed at least once, even if the condition is false from the beginning. -->


<?php 
    $i = 0;
    do {
        echo $i . "<br>";
        $i++;
    } while ($i < 5);    
?>