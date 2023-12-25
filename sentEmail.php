<?php 

//sending message to email
// mail(to,subject,content,header)
ini_set('SMTP', 'bharathandileepb@gmail.com');
ini_set('smtp_port', 587);


$to = "bharathandileep01@gmail.com";
$subject = "Hai bharathan";
$message = "Dear Bharathan this is a test mail";
$header = "From:bharathandileepb@gmail.com";

if(mail($to,$subject,$message,$header)){
  echo "mail sent..";
}
else{
  echo "somthing went wrong...";
}


//note - need setting up a mail server or specifying mail server settings in the PHP configuration to work.