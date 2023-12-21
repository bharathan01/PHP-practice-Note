<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php 

  if($_SERVER["REQUEST_METHOD"] == 'POST'){
    if(isset($_POST['submit'])){
      $name = $_REQUEST['name'];
      $email = $_REQUEST['email'];
      $password = $_REQUEST['password'];
      $terms = $_REQUEST['terms'];
      echo $name, $password, $email,$terms;
    }
     
  }

?>



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
  input[type='button']{
    width: 100px;
    height: 40px;
    background-color: black;
    color: white;
    margin-top: 10px;
    border: none;
    border-radius: 10px;
  }

</style>
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
                <input name="name" type="text" id="name" placeholder="Name"/>
                <label for="Email">Email</label>
                <input name="email" type="email" id="Email" placeholder="Email"/>
                <label for="password">password</label>
                <input name="password" id="password" type="password" placeholder="password"/>
                <label for="terms">Privacy&policy</label>
                <input name="terms" type="checkbox" id="terms"/><br>
                <input type="button" name="submit" value="submit" /> 
            </form>
        </div>
    </section>
</body>
</html>