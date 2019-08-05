<?php
$to = 'rowanreader1025@gmail.com';
$subject = 'Test Email';
$message = '<h1>Hi there.</h1><p>Thanks for testing</p>';
$headers = "From: The Sender Name <rowanreader1025@gmail.com>\r\n";
$headers .= "Replh-To:rowanreader1025@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";
if (mail($to, $subject, $message, $headers)){	
	echo "Message accepted";
}
else{
	echo "Error";
}


?>