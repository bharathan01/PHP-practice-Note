<?php 
  require_once('connectDb.php')
?>

<?php 
  if(isset($_POST['submit'])){
    $_name =  $_POST['name'];
    $_email =  $_POST['email'];
    $_couese =  $_POST['course'];
     if(isset($_FILES['image'])){
        $uploadedFile = $_FILES['image'];
        $fileName = $uploadedFile['name'];
        $fileTmpName = $uploadedFile['tmp_name'];
        $fileSize = $uploadedFile['size'];

      $allowedFromat = array('jpg', 'jpeg', 'png');
     //   $imageNameSplit = explode('.',$fileName);
    //   $imageFormate = strtolower($imageNameSplit[1]);
     $imageFormate = pathinfo($fileName , PATHINFO_EXTENSION);
     if(in_array(strtolower($imageFormate),$allowedFromat)){
         move_uploaded_file($fileTmpName, "uploades/".$fileName);
     }
     else {
        $_SESSION['error'] = "Error: Invalid file format. Allowed formats:'jpg', 'jpeg', 'png' " ; 
        header("location: addStudent.php");
        exit();
     }
     }
  }
?>
<?php 
// header("location: main.php")
?>