
<!-- $GLOBALS:
$GLOBALS is a superglobal variable that is an associative array containing references 
to all variables which are currently defined in the global scope of the script. It allows you to access global variables directly -->

<?php 
$name = 'john';

function printName(){
    echo "Hello " . $GLOBALS['name'],"<br>"; 
}
printName();

$globalVar = 10;

function printGlobalVar() {
    echo $GLOBALS['globalVar'];
}

printGlobalVar(); // Outputs: 10


$x = 10;
$y = 20;

function add() {
    $GLOBALS['sum'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo $sum; // Outputs: 30

?>