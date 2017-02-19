<?php

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'From: Kartike Sachdeva <sachdeva.kartike@gmail.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$name = $_POST['name'];
$email = $_POST['email'];
$author = $_POST['author'];
$book = $_POST['book'];
$msg = "Name: " . $name . "\nEmail: " . $email ."\nAuthor: " . $author .  "\nBook details: " . $book;
$msg = wordwrap($msg,70);
$to = "sachdeva.kartike@gmail.com";
$subject = "Book Request";

mail($to, $subject, $msg, $headers);
echo 'Thank you for your request. We will get back to you soon.  Please <a href="/index.html">Click here to return to our homepage.';
?>
