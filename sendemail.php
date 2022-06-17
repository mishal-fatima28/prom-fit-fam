<?php 

	$to = "mishalfatima28@gmail.com";
	$subject = "test mail";
	$message = "hello";
	$from = "mishalfatima28@gmail.com";
	$headers = "From : $from";
	$headers =  'MIME-Version: 1.0' . "\r\n"; 
	$headers .= 'From: Your name <mishalfatima28@gmail.com>' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

	mail($to, $subject, $message, $headers);
	echo "mail sent";



 ?>