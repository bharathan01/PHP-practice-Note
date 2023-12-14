<?php 
  $connect = mysqli_connect('localhost','root','','studentDetails');
  if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
  }
?>
