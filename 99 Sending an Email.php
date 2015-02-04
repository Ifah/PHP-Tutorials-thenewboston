<?php 
//test this on an actual web server
$to = 'example@example.com';
$subject = 'This is an email';
$body = 'This is a test email'."\n\n".'Hope you got it.';
$headers = 'From: phpacademy <someone@phpacademy.org>';

if(mail($to, $subject, $body, $headers))
{
	echo 'Email has been sent to '.$to;
}
else
{
	echo 'There was an error sending the email.';
}
?>