<?php
//get data from form  
$email = $_POST['email'];
$to = "diekrupps777@gmail.com";
$subject = "subscribe";

$txt ="email = ". $email;

$headers = "From: www.glotec.az" . "\r\n" .
 "CC: nazim_aliyev@glotec.az";

if($email!=NULL){
    mail($to,$subject,$txt,$headers); 
    echo "Mail Sent.";
}
//redirect

else {
    echo "failed";
}

?>