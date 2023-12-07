<!-- //Recursion in programming refers to a technique where a function calls itself in order to solve a problem -->

<?php 
    function factorial($n) {
        if ($n <= 1) {
            return 1;
        } else {
            return $n * factorial($n - 1);
        }
    }
    echo factorial(10);
?>