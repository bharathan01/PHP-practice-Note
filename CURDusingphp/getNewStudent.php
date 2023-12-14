<?php 
  require_once('connectDb.php')
?>

<?php 
  if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $coures =  $_POST['course'];
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
        $uploadImage =  "uploades/".$fileName;
         move_uploaded_file($fileTmpName, $uploadImage);
        
         $insertStudent = "insert into student (name,email,course,profile_pic) values ('$name','$email','$coures','$uploadImage')";
         $result = mysqli_query($connect,$insertStudent);
         if($result){
            echo "upload success";
            header("location: main.php");  
         }
         else{
            echo "error";
         }
     }
     else {
        session_start();
        $_SESSION['error'] = "Error: Invalid file format. Allowed formats:'jpg', 'jpeg', 'png' " ; 
        header("location: addStudent.php");
        exit();
     }
     }
  }
?>
<?php 

?>