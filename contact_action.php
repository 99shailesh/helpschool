<?php
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';
session_start();


$mail = new PHPMailer(true);
$fname=$_POST["uname"];
$femail=$_POST["email"];
$comment=$_POST["comment"];

//$fname='shailesh';
//$femail='99shaileshu@gmail.com';
//$comment='test mail';

try {
    //Server settings
    $mail->SMTPDebug = 1;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                                   // Enable SMTP authentication
    $mail->Username = 'ushailesh40@gmail.com';                     // SMTP username
    $mail->Password = 'tdysuedkupnltkxh';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('ushailesh40@gmail.com');
    $mail->addAddress("ushailesh40@gmail.com");
    

  

        // Add a recipient

    // Attachments
    if (!empty($file_path)) {
        $mail->addAttachment($file_path);
    }     // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    //$var=$_POST['body'];
    //$var='Test';//$_POST['body'];
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Test Mail from '.$femail.'  '.$fname;
    $mail->Body = $comment;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    $_SESSION['msg']='Message has been sent';
    header('location:index.php');
} catch (Exception $e) {
    $_SESSION['msg']="Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    header('location:index.php');
}

?>