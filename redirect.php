<?php 
if(isset($_POST['submit'])){	


$name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['number'];
   $comment = $_POST['comment'];
$to = 'thefetallounge90@gmail.com';
$subject = 'TheFetalLounge Contact Form';
$message = "Name : ". $name ."\r\n Email :" . $email . "\r\n Phone :" . $phone.
"\r\n Services :" . $comment;

$headers = 'From: <ENQUIRY@thefetallounge.com>' . "\r\n";


//Sending email
if ( mail($to,$subject,$message,$headers))

 header("Location: https://www.thefetallounge.com/contact"); 



}
?>