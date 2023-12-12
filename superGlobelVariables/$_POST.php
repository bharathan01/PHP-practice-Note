<!-- HTML form with method="post" -->

<!-- 
$_POST is a PHP superglobal variable used to collect form data after submitting an HTML form with the POST method.
 When a form is submitted with the POST method, the form data is encoded and sent to the server 
in the body of the HTTP request. PHP collects this data and makes it accessible through the $_POST superglobal. -->
<form method="post" action="displayData.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">

    <label for="password">Email</label>
    <input type="email" id="email" name="email">

    <button type="submit">Submit</button>
</form>
