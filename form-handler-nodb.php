<?php

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Kartike Sachdeva <sachdeva.kartike@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$msg = "Name: " . $name . "\nPhone: " . $phone . "\nEmail: " . $email . "\nMessage: " . $message;
$msg = wordwrap($msg,70);
$to = "sachdeva.kartike@gmail.com";
$subject = "Contact Submission";

mail($to, $subject, $msg, $headers);
echo 'Thank you for your submission.  Please <a href="/index.html">Click here to return to our homepage.';
?>
