<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
$mail = new PHPMailer;

//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Set the hostname of the mail server
$mail->Host = 'outlook.prodapt.com';

//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;

//Whether to use SMTP authentication
$mail->SMTPAuth = true;

//Receive subject, message, toEmail and name
$subject = $_POST['subject'];
$message = $_POST['message'];
$toEmail = $_POST['toEmail'];


//Username to use for SMTP authentication - use full email address for gmail
$mail->Username = "prodapt\b1079";

//Password to use for SMTP authentication
$mail->Password = "R@jeshbca";

$mail->setFrom('rajesh.s@prodapt.com', 'Sales Tracker');
$mail->addAddress($toEmail, 'User of Salestracker');
$mail->Subject  =$subject;
$mail->Body     = $message;
$mail->IsHTML(true); 
if(!$mail->send()) {
   echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'true';  
}