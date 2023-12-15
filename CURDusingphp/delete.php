<?php

use LDAP\Result;

 require('connectDb.php');?>

<?php 
  $id = $_GET['id'];
  $deteteQuery = "DELETE FROM student WHERE id = {$id}";
  $result = mysqli_query($connect,$deteteQuery);
  $result ? $message = "Deleted data" : die("Error");
  echo $message;
  header("location: main.php"); 
?>