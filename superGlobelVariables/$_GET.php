
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }
    form {
      text-align: center;
    }
    input {
      margin-bottom: 10px;
    }
  </style>
  <title>User Information Form</title>
</head>
<body>
  <!-- using $GET vaiable to send the data -->
  <form action="displayData.php" method="GET">
    <label for="name">Name:</label>
    <br>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="age">Age:</label>
    <br>
    <input type="number" id="age" name="age" required>
    <br>
    <label for="gender">Gender:</label>
    <br>
    <select id="gender" name="gender" required>
      <option value="male">Male</option>
      <option value="female">Female</option>
      <option value="other">Other</option>
    </select>
    <br>
    <input type="submit" value="Submit">
  </form>

</body>
</html>
