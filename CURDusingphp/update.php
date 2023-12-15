
<?php require('connectDb.php')?>
<?php  
  // get the id from url
  if(isset($_GET['id'])){
    $userId = $_GET['id'];
     // get the data from db
   $getUpadteData = "SELECT * FROM STUDENT WHERE id =".$userId;
   $result = mysqli_query($connect,$getUpadteData);
   if($result){
    $data =  mysqli_fetch_assoc($result);
    $coursList = ['BCA','BBA','B.TECH','BCOM','BSC'];
   }
   else{
    die("somthing went wrong..");
   }
  }
  
 
?>

<!-- <?= '';?> use instead Of <?php echo ''; ?> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container d-flex flex-column align-items-center justify-content-center"style="height:100vh;">
    <div style="width:100px; height:100px">
      <img style="width:100px; height:100px; border-radius:50%;" src=<?= $data['profile_pic'] ?>>
    </div>
    <form action="upadteStudentDetails.php?id=<?php echo $data['id'] ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
        <label for="disabledTextInput" class="form-label">NAME</label>
        <input type="text" id="disabledTextInput" value="<?php echo $data['name'] ?>" name="name" class="form-control" placeholder="NAME">
        </div>
        <div class="mb-3">
        <label for="disabledTextInput" class="form-label">EMAIL</label>
        <input type="text" id="disabledTextInput" value="<?php echo $data['email'] ?>" name="email" class="form-control" placeholder="EMAIL">
        </div>
        <div class="mb-3">
        <label for="disabledSelect" class="form-label">SELECT COURCE</label>
        <select id="disabledSelect" name="course" class = "form-select">
            <?php foreach($coursList as $value){
             ?>
            <option 
                <?php echo $value == $data['course'] ? "selected":'';?>
                value="<?= $value?>"><?= $value?>
            </option>
             <?php } ?>
        </select>
        </div>
        <div class="mb-3">
        <label for="disabledTextInput" class="form-label">uploaded Image</label>
        <input type="file" name="image" value="<?php $data['profile_pic']; ?>" id="disabledTextInput" class="form-control"  placeholder="IMAGE SELECTED">
        <!-- <?php if ($error): ?>
            <div style="color: red;"><?php echo $error; ?></div>
        <?php endif; ?> -->
        </div>
        <button type="submit" name="submit" class="btn btn-primary">UPDATE</button>
</form>
</div>
</body>
</html>