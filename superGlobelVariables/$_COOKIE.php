<!-- $_COOKIE 
is a PHP superglobal variable that is used to access values sent to the server by the client's browser in the form of cookies.
 Cookies are small pieces of data that are stored on the client's machine and sent with every HTTP request to the server. -->

 <!-- setcookie(name, value, expire, path, domain, secure, httponly); -->

<?php 
echo "is a PHP superglobal variable that is used to access values sent to the server by the client's browser in the form of cookies.
Cookies are small pieces of data that are stored on the client's machine and sent with every HTTP request to the server";
  $COOKIE_name = "userDetails";
  $COOKIE_Data = "Bharathan Dileep";
  setcookie($COOKIE_name,$COOKIE_Data,time() + 3600, "/")


  //assessing the cookie data in displayData.php
//   $user = isset($_COOKIE["userDetails"]) ? $_COOKIE["userDetails"] : "Guest";
?>
