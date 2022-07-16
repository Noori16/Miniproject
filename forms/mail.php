<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$to = "tasleemrahim09@mail.com";
$subject = "Mail From NN ELECTRICALS AND WORKS";
$txt ="Name = ". $name . "\r\n  Email = " . $email ."\r\nSubject = " .$subject . "\r\n Message =" . $message;
$headers = "From: noreply@raelectrical.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
