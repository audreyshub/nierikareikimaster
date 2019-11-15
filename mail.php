<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['field']))
//change message to field
$field = $_POST['field'];


$content="From: $name \n Email: $email \n Message: field";
$recipient = "audreydotwong@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>
