
<!-- creat a query using PDO methode to featch data from MYSQL DB -->

<?php 
require 'PDO.php';
 try{
   $steatment =  $pdo->query("SELECT * FROM userdata");
   while($row = $steatment->fetch($pdo::FETCH_ASSOC)){
     echo "<pre>";
     print_r($row);
     echo "</pre>";
   }
 }catch(PDOException $e){
    echo "Query failed: ".$e->getMessage();
 }


 // to inser a data using PDO methode 
try {
    $pdo->exec("INSERT INTO userdata (name,email,gender) VALUES ('value1', 'value2')");
    echo "Record inserted successfully";
} catch (PDOException $e) {
    // Handle query execution errors
    echo "Insert failed: " . $e->getMessage();
}

?>