<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
  form{
    width: 300px;
    height: 300px;
  }
  input[type='text'],[type='email'],[type='password']{
    width: 250px;
    border: 1px solid black;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0 10px 0px;
  }
  input[type='submit']{
    width: 100px;
    height: 40px;
    background-color: black;
    color: white;
    margin-top: 10px;
    border: none;
    border-radius: 10px;
  }

</style>


<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  $error = [];
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
          if(empty($_POST['name'])){
            $error['nameEty'] = "Name is required";
          }
          if(empty($_POST['email'])){
            $error['emailEty'] = "Name is required";
          }
          elseif(filter_var('email',FILTER_VALIDATE_EMAIL)){
            $error['notEmail'] = "PEmail is required";
          }
          if(empty($_POST['password'])){
            $error['passEty'] = "password is required";
          }
          if(empty($_POST['terms'])){
            $error['checkTerms'] = "terams and conditions is required";
          }
        }
         else {
            $error['meassege'] = "Invalid form - some fields are empty";
        }


        if(count($error) === 0){
          $name = trim($_POST['name']) && filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
          $email = isset($_POST['email']) ? (trim($_POST['email']) && filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL)) : '';
          $password = isset($_POST['password']) ? trim($_POST['password']) : '';
          $name = isset($_POST['terms']);
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Password: " . $password . "<br>";
            echo "Terms: " . $terms . "<br>"; 
        }
}
?>
<body>
    <section style="width: 100%;
    height: 100vh;
    display:flex; align-items: center;
    justify-content: center; flex-direction: column;">
    <h3>FORM VALIDATION IN PHP</h3>
        <div style="background-color: aqua;
        height: 400px;width: 400px;  
        display:flex; align-items: center;
        justify-content: center;">
            <form method="POST" action="<?php  echo $_SERVER['PHP_SELF'] ?>" >
                <label for="Name">Name</label>
                <input name="name" type="text" id="name" placeholder="Name">
                <p style="color: red;"><?php echo isset($error['nameEty']) ? $error['nameEty']: ''; ?></p>
                <label for="Email">Email</label>
                <input name="email" type="email" id="Email" placeholder="Email">
                <p style="color: red;"><?php echo isset($error['emailEty']) ? $error['emailEty']: ''; ?></p>
                <p style="color: red;"><?php echo isset($error['notEmail']) ? $error['notEmail']: ''; ?></p>
                <label for="password">password</label>
                <input name="password" id="password" type="password" placeholder="password">
                <p style="color: red;"><?php echo isset($error['passEty']) ? $error['passEty']: ''; ?></p>
                <label for="terms">Privacy&policy</label>
                <input name="terms" type="checkbox" id="terms"/><br>
                <p style="color: red;"><?php echo isset($error['checkTerms']) ? $error['checkTerms']: ''; ?></p>
                <input type="submit" name="submit" value="submit" > 
                <p style="color: red;"><?php echo isset($error['meassege']) ? $error['meassege']: ''; ?></p>
            </form>
        </div>
    </section>
</body>
</html>