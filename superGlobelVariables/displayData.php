<?php 
   //$GET method to dispaly data
   //checking the methode wheater the method is GET
   if($_SERVER['REQUEST_METHOD'] == 'GET' ){
        $userName = $_GET['name'];
        $age  = $_GET['age'];
        $gender  = $_GET['gender'];

        echo "user name :". $userName,"<br>";
        echo "user age :". $age,"<br>";
        echo "user gender :". $gender,"<br>";
   };

   if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $userName = $_POST['username'];
    $email  = $_POST['email'];
    echo "user name :". $userName,"<br>";
    echo "user age :". $email,"<br>";
};

//access the Cookie data

$user = isset($_COOKIE["userDetails"]) ? $_COOKIE["userDetails"] : "Guest";
echo "Hello WELLCOM :".$user;

?>
