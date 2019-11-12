<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username = 'saurabhkumar.t@somaiya.edu';                     // SMTP username
    $mail->Password = 'saurabh@807';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('noreply-helpschool@somaiya.edu');
    $mail->addAddress('sohil.l@somaiya.edu');
        // Add a recipient
    // Content
    //$var=$_POST['body'];
    //$var='Test';//$_POST['body'];
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Test Mail from helpschool';
    $mail->Body = 'scholarship for'.'Sohil'.'for amount of'.'1000'.'is granted by'.'Me ';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $_SESSION['msg']='Message has been sent';
    header('location:newtrust.php');
} catch (Exception $e) {
    $_SESSION['msg']="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('location:newtrust.php');
}

?>