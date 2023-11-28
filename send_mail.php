<?php

$selectone = $_POST['selectone'];
$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$city = $_POST['city'];
$pincode = $_POST['pincode'];
$comment = $_POST['comment'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'painfreeindia1@gmail.com';                     //SMTP username
    $mail->Password   = 'pgvntszpghoaptwq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Wingspharma Contact Form');
    $mail->addAddress('care@wingspharma.com');     //Add a recipient
    // $mail->addAddress('magicalballoons.it@gmail.com');     //Add a recipient
    $mail->addAddress('varun.arora@wingspharma.com');     //Add a recipient


    $message="I Am a : ".$selectone."<br>" ."Name : ".$name."<br>"."Mobile Number : ".$mobile."<br>"."Email Id : ".$email."<br>"."City : ".$city."<br>"."Pincode : ".$pincode."<br>"."Message : ".$comment."<br>";

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Wingspharma Contact Form';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send())
    // echo 'Message has been sent';
    {
        ?>
   <script>
    window.location.href='contact-us.php';
   </script>
   <?php
    }
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>