<?php 

	$to = "mishalfatima28@gmail.com";
	$subject = "test mail";
	$message = "hello";
	
	mail($to, $subject, $message);
	echo "mail sent";



 ?>