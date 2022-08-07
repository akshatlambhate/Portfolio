<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['desc'];
$phone= $_POST['contact'];
$to = "akshtlambhate@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message . "\r\n Message =" . $phone;
$headers = "From: noreply@akshatlambhate.com" . "\r\n" .
"CC: akshatlambhate@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>