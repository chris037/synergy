<?php

require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Instantiate PHPMailer
$mail = new PHPMailer(true);

// Set mailer to use PHP's mail() function
$mail->isMail();

// Sender and recipient
$mail->setFrom('no-reply@synergyinvllc.com', 'No-Reply');
$mail->addAddress('info@synergyinvllc.com', 'Synergy Info');

$success = false;
$senderName = isset( $_POST['username'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['username'] ) : "";
$senderPhone = isset( $_POST['phone'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['phone'] ) : "";
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$subject = isset( $_POST['subject'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['subject'] ) : "";
$message = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

$mail->addBCC('chris037@gmail.com', 'BCC Chris Cortez');

$mail->Subject = 'Synergy Inquiry - ' . $subject;
$mail->Body = '<h2>New message from Synergy website</h2>' .
             '<p><strong>Name:</strong> ' . $senderName . '</p>' .
             '<p><strong>Phone:</strong> ' . $senderPhone . '</p>' .
             '<p><strong>Email:</strong> ' . $senderEmail . '</p>' .
             '<p><strong>Message:</strong></p>' .
             '<p>' . $message . '</p>';

// Enable HTML formatting
$mail->isHTML(true);

// Send the email
try {
    $mail->send();
    echo "<script>alert('Your message has been sucessfully submitted Thanks. 🙂');</script>";
    echo "<script>document.location.href='index.php'</script>";
} catch (Exception $e) {
   
    echo "<script>alert('Message could not be sent. Please try again.');</script>";
  echo "<script>document.location.href='contacts.php'</script>";
}
?>