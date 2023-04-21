<?php
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];

$to = "vaneet@ocode.co";
$subject = "This is the subject line";

$txt ="Name = ". $name . "\r\n Email = "
	. $email . "\r\n Message =" . $message;

$headers = "From: noreply@demosite.com" . "\r\n" .
			"CC: somebodyelse@example.com";
if($email != NULL) {
	mail($to, $subject, $txt, $headers);
}

header("Location:last.html");
?>
