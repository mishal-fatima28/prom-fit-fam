<?php 

header('Content-type: text/plain');


use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

if (isset($_POST['submit'])) {
	$name = $_POST['username'];
	$useremail = $_POST['email'];
	$message = $_POST['message'];

	try{

		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'promfitfam@gmail.com';
		$mail->Password = 'ftgjrhlfjvuxxdtz';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = 587;

		$mail->setFrom('promfitfam@gmail.com');
		$mail->addAddress('mugishamark.001rubaramira@gmail.com');

		$mail->isHTML(true);
		$mail->Subject = 'Prom Fit Fam Consultation';
		$mail->Body = 'Name : ' .$name.'<br />'  . 'Email : ' .$useremail. '<br />' . "Message : " . $message;

		$mail->send();
		header("Location: thanks.html");


	} catch(Exception $e){

		echo 'Email Not Sent';
	}

}


 ?>