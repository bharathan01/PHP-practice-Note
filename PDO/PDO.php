
<!-- PDO stands for PHP Data Objects. 
It is a database access layer providing a uniform method of access to multiple databases. 
PDO is not a database itself; it is a database access layer providing a set of PHP extensions to interact with different database management systems. -->


<?php 
$host = "localhost";
$database = "poduse";
$username = 'root';
$password = '';


try{
   // connecting to MySql DB
    $pdo = new PDO("mysql:host=$host;dbname=$database",$username,$password);
    //if any error throw to the catch block
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    echo "Connected to MySQL successfully\n";

}catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
    exit;
}

?>