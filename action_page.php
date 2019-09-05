<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$title = $_POST['title'];
$formcontent="From: $name \n Message: $message";
$recipient = "joseph.burutu@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent,$title, $mailheader) or die("Error!");
echo "Thank You!";
?>