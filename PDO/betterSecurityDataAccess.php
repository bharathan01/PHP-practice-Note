
<!-- Using Prepared Statements for better security: -->
<?php 
require 'PDO.php';
echo "<br>";

try{
    $query = "SELECT * FROM userdata WHERE gender = :value1";
    $value1 = 'Male';
    $steatment  = $pdo->prepare($query);
    $steatment->bindParam(":value1", $value1);
    $steatment->execute();
    while($row = $steatment->fetch(PDO::FETCH_ASSOC)){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    };

}catch(PDOException $e){
   echo "Query Failed".$e->getMessage();
}
