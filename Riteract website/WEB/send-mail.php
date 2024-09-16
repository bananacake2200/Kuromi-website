<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);
 
   
    $mail->isSMTP();
    $mail->Host  = 'smtp.gmail.com';
    $mail->SMTPAuth  = true;
    $mail->Username  = 'russel3306@gmail.com'; 
    $mail->Password  = 'bthfpshxofzjnrjk'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port  = 587;

   
    $mail->setFrom($_POST['email']); 
    $mail->addAddress('russel3306@gmail.com'); 

  
    $mail->isHTML(true);
    $mail->Subject = "Subject: " .  $_POST["subject"];
    $mail->Body   = "Message: " . $_POST["message"];

    try {
      
        $mail->send();
        echo "
        <script> 
        alert('Message was sent successfully!');
        document.location.href = 'CONTACT.php';
        </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
