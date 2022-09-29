<?php
//get data from form  
$name = $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$message= $_POST['message'];
$to = "info@prowedding.az";
$subject = "Mail From website";


$txt ="Name = ". $name . "\r\n email = ". $email . "\r\n phone = " . $phone . "\r\n Message =" . $message;

$headers = "From: www.prowedding.az" . "\r\n" .
 "CC: Seymur@prowedding.az";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>