<!-- $_REQUEST is a PHP superglobal variable that is used to collect data from HTML forms with both the GET and POST methods. 
It can also collect data sent in the URL or through cookies. Essentially, 
$_REQUEST merges the contents of $_GET, $_POST, and $_COOKIE into a single associative array. -->

// Assuming a form with method="post" and action="process_form.php"
<form method="post" action="process_form.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">

    <button type="submit">Submit</button>
</form>
