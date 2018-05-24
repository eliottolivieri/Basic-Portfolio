<?php $name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$message = $_POST['inputMessage'];
$formcontent="From: $name \n inputMessage: $message";
$recipient = "eliott.94@hotmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>