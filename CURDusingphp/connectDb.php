<?php 
  $connect = mysqli_connect('localhost','root','','studentDetails');
  if($connect){
    echo "connection success";
  }else{
    die("Connection failed: " . mysqli_connect_error());
  };
?>
