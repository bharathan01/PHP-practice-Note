<!-- die() and exit() 
those equivalent functions in PHP, and they are used to terminate the execution of a script. 
Both functions immediately stop the execution of the script and can be used to display a message or perform other actions before ending the script -->


<?php
for($i = 0; $i<=10; $i++){
    echo "$i, Hello world","\n";
    if($i === 5){
        // die("i reach 5 the die function called");
        //similar like die
        exit("i reach 5 the exit function called");
    }
}
?>