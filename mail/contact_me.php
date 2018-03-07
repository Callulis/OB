<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@optimizebay.com'; // ****PUT YOUR EMAIL ADDRESS HERE****
$email_subject = "Website Contact Form:  $name";
$email_body = "Thanks for contacting Optimize Bay $name!\n\n"."We will get back to you as soon as we possible can.";
$headers = "From: info@optimizebay.com\n"; // ****ENTER WHO YOU WANT THE MESSAGE TO BE FROM HERE****
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>