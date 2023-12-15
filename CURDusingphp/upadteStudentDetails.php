<?php require('connectDb.php')?>
<?php 

 $id = $_GET['id'];

 if(isset($_POST['submit'])){
    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $coures =  $_POST['course'];
     if($_FILES['image']['error'] == 0){
        $uploadedFile = $_FILES['image'];
        $fileName = $uploadedFile['name'];
        $fileTmpName = $uploadedFile['tmp_name'];
        $fileSize = $uploadedFile['size'];
        $allowedFromat = array('jpg', 'jpeg', 'png');
        $imageFormate = pathinfo($fileName , PATHINFO_EXTENSION);
        if(in_array(strtolower($imageFormate),$allowedFromat)){
           $uploadImage =  "uploades/".$fileName;
            move_uploaded_file($fileTmpName, $uploadImage);
            $insertStudent = "UPDATE student SET name='{$name}',email='{$email}', course='{$coures}',profile_pic='{$uploadImage}' 
            WHERE id={$id};";
            echo $insertStudent;
            $result = mysqli_query($connect,$insertStudent);
            if($result){
               echo "upload success";
               header("location: main.php");  
            }
            else{
               echo "error";
            }
        }
     }else {
        $insertStudent = "UPDATE student SET name='{$name}',email='{$email}', course='{$coures}' WHERE id = {$id};";
            $result = mysqli_query($connect,$insertStudent);
            if($result){
               echo "upload success";
               header("location: main.php");  
            }
            else{
               echo "error";
            }
     }
 }
?>