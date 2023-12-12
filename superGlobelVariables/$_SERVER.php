<!-- $_SERVER 
is a PHP superglobal variable that provides information about the server, request, and environment. 
It is an associative array containing various details such as headers, paths, and script locations.  -->

 <!-- $_SERVER['PHP_SELF'] - Returns the filename of the currently executing script, relative to the document root.
 $_SERVER['SERVER_NAME'] - Returns the name of the server host.
 $_SERVER['REQUEST_METHOD'] - Returns the request method used to access the page (e.g., 'GET', 'POST').
 $_SERVER['HTTP_USER_AGENT'] - Returns the user agent (browser) accessing the page.
 $_SERVER['REMOTE_ADDR'] - Returns the IP address from which the user is viewing the current page.
 $_SERVER['HTTP_REFERER'] - Returns the URL of the page from which a user came.
 $_SERVER['QUERY_STRING'] - Returns the query string portion of the URL.
 $_SERVER['HTTPS'] - Returns 'on' if the script is being called via a secure (HTTPS) connection. -->
 
 <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">

    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <input type="submit" name="save">
</form>
<?php 
  if(isset($_POST['save'])){
    $username = $_POST["username"];
    $email = $_POST["email"];

    echo "username : ".$username;
    echo "email :" . $email;

  }
?>