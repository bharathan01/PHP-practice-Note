
<?php
//if it a GET method we can also access the data using $_REQUEST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Access form data using $_REQUEST superglobal
    $username = isset($_REQUEST["username"]) ? $_REQUEST["username"] : "";
    $password = isset($_REQUEST["password"]) ? $_REQUEST["password"] : "";

    // Do something with the form data
    
    // For demonstration purposes, let's just echo the values
    echo "Username: $username<br>";
    echo "Password: $password";
}
?>
