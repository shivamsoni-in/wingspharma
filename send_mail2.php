<?php
if(isset($_FILES['resume']))
{


    $filename = $_FILES["resume"]["name"];
    $filesize = $_FILES["resume"]["size"];
    $filetmp = $_FILES["resume"]["tmp_name"];
    $filetype = $_FILES["resume"]["type"];
    
    $image = move_uploaded_file($filetmp, "uploaded-file/". $filename);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
}


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

if(isset($_FILES['resume']))

try {
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'painfreeindia1@gmail.com';                     //SMTP username
    $mail->Password   = 'pgvntszpghoaptwq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'WPPL Website Careers Form');
    // $mail->addAddress('care@wingspharma.com');    //Add a recipient
    // $mail->addAddress('magicalballoons.it@gmail.com');    //Add a recipient
    $mail->addAddress('hrdesk@wingspharma.co.in');    //Add a recipient
    $mail->addAddress('care@wingspharma.com');    //Add a recipient
    $mail->addAddress('varun.arora@wingspharma.com');     //Add a recipient
    $mail->addAttachment("uploaded-file/". $filename);

    $message="Name : ".$name."<br>" ."Email : ".$email."<br>"."Mobile Number : ".$mobile."<br>"."Subject : ".$subject."<br>"."Message : ".$message."<br>";

        //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'WPPL Website Careers Form';
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send())
    // echo 'Message has been sent';
    {
        echo '<script type ="text/JavaScript">
        
        window.location.href = "careers.php";
        </script>  
        ';  
    }
   
} 
catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>