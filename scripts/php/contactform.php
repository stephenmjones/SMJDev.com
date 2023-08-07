<?php

date_default_timezone_set('Etc/UTC');
require 'PHPMailer/PHPMailerAutoload.php';

$ms = parse_ini_file("../../../config/config.ini");
$msuser = $ms['msuser'];
$mspass = $ms['mspass'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	if (!empty($_POST["pokemon"])) {
		exit;
	}

	$name = strip_tags(trim($_POST["name"]));
	$name = str_replace(array("\r", "\n"), array(" ", " "), $name);
	$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	$message = trim($_POST["message"]);

	if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		// Set a 400 (bad request) response code and exit.
		http_response_code(400);
		echo "Oops! There was a problem with your submission. Please complete the form and try again.";
		exit;
	}

	$content = "Name: $name" . "<br>" . "From: $email" . "<br><br>Message:" . "<br>" . $message;
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = $msuser;
	$mail->Password = $mspass;
	$mail->setFrom($email, $name);
	$mail->addReplyTo($email, $name);
	$mail->addAddress('stephen@smjdev.com', 'Stephen Jones');
	$mail->Subject = 'Message sent from SMJDev.com';
	$mail->Body = $content;
	$mail->AltBody = $content;

	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}
} else {
	http_response_code(403);
	echo "There was a problem with your submission, please try again.";
}

















