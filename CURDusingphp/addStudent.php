<?php
    session_start();
    $error = isset($_SESSION['error']) ? $_SESSION['error']:'';
//    unset($_SESSION['error']);

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center"style="height:100vh;">
    <form action="getNewStudent.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="disabledTextInput" class="form-label">NAME</label>
        <input type="text" id="disabledTextInput" name="name" class="form-control" placeholder="NAME">
        </div>
        <div class="mb-3">
        <label for="disabledTextInput" class="form-label">EMAIL</label>
        <input type="text" id="disabledTextInput" name="email" class="form-control" placeholder="EMAIL">
        </div>
        <div class="mb-3">
        <label for="disabledSelect" class="form-label">SELECT COURCE</label>
        <select id="disabledSelect" name="course" class = "form-select">
            <option value=" ">SELECT</option>
            <option value="BCA">BCA</option>
            <option value="BBA">BBA</option>
            <option value="B.TECH">B.TECH</option>
            <option value="B.COM">B.COM</option>
            <option value="BCA">BSC</option>
        </select>
        </div>
        <div class="mb-3">
        <label for="disabledTextInput" class="form-label">Disabled input</label>
        <input type="file" name="image" id="disabledTextInput" class="form-control"  placeholder="IMAGE SELECTED">
        <?php if ($error): ?>
            <div style="color: red;"><?php echo $error; ?></div>
        <?php endif; ?>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>