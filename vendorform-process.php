<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
        
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $con = mysqli_connect("localhost","bagdsomy_wingspharma","wingspharma@11","bagdsomy_wingspharma") or die("Connection Failed");

    function get_safe_value($con,$str){
        if($str!=''){
            $str = trim($str);
            return strip_tags(mysqli_real_escape_string($con,$str));
        }
    }

    $company_name   = get_safe_value($con,$_POST['company_name']);
    $company_type   = get_safe_value($con,$_POST['company_type']);
    $contact_person = get_safe_value($con,$_POST['contact_person']);
    $email          = get_safe_value($con,$_POST['email']);
    $mobile_number  = get_safe_value($con,$_SESSION['mobile']);
    $street1        = get_safe_value($con,$_POST['street1']);
    $street2        = get_safe_value($con,$_POST['street2']);
    $street3        = get_safe_value($con,$_POST['street3']);
    $pincode        = get_safe_value($con,$_POST['pincode']);
    $city           = get_safe_value($con,$_POST['city']);
    $district       = get_safe_value($con,$_POST['district']);
    $state          = get_safe_value($con,$_POST['state']);
    $office_mobile_number = get_safe_value($con,$_POST['office_mobile_number']);
    $plant_address        = get_safe_value($con,$_POST['plant_address']);
    $plant_pincode        = get_safe_value($con,$_POST['plant_pincode']);
    $plant_city           = get_safe_value($con,$_POST['plant_city']);
    $plant_district       = get_safe_value($con,$_POST['plant_district']);
    $plant_state          = get_safe_value($con,$_POST['plant_state']);
    $vendor_type          = get_safe_value($con,$_POST['vendor_type']);
    $plant_mobile_number  = get_safe_value($con,$_POST['plant_mobile_number']);
    $gst_no               = get_safe_value($con,$_POST['gst_no']);
    $pan_no               = get_safe_value($con,$_POST['pan_no']);
    $cin_no               = get_safe_value($con,$_POST['cin_no']);
    $worked               = get_safe_value($con,$_POST['worked']);
    $contact_by           = get_safe_value($con,$_POST['contact_by']);
    $message              = get_safe_value($con,$_POST['message']);
    $reffered_by          = get_safe_value($con,$_POST['reffered_by']);
    $department_name      = get_safe_value($con,$_POST['department_name']);

    
        $query = "INSERT INTO vendor_data(company_name, company_type, name, email, mobile, billing_add_1, billing_add_2, billing_add_3, pincode, city, district, state, contact, plant_address, plant_pincode, plant_city, plant_district, plant_state, plant_contact, vendor_type, gst_no, pan_no, cin, previously_worked, source_contact, message, reference, department) VALUES ('$company_name' , '$company_type' , '$contact_person' , '$email' , '$mobile_number' , '$street1' , '$street2' , '$street3' , '$pincode' , '$city' , '$district' , '$state' , '$office_mobile_number' , '$plant_address' , '$plant_pincode' , '$plant_city' , '$plant_district' , '$plant_state' , '$plant_mobile_number', '$vendor_type' , '$gst_no' , '$pan_no' , '$cin_no' , '$worked' , '$contact_by' , '$message' , '$reffered_by' , '$department_name')";
    
        $result = mysqli_query($con,$query);
        
        if($result)
        {
            
            $mail = new PHPMailer(true);
            
            try {
                $mail->isSMTP();
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'painfreeindia1@gmail.com';                     //SMTP username
                $mail->Password   = 'pgvntszpghoaptwq';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set 'SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS'
            
                //Recipients
                $mail->setFrom($email, $company_name);
                $mail->addAddress('magicalballoons.it@gmail.com');     //Add a recipient
                // $mail->addAddress('painfreeindia1@gmail.com');     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                $mail->addCC('painfreeindia1@gmail.com');
                // $mail->addBCC('bcc@example.com');
            
                $mail_body = "Company Name : ".$company_name."<br>" ."Company Type : ".$company_type."<br>"."Name of contact person : ".$contact_person."<br>"."Email : ".$email."<br>"."Mobile Number : ".$mobile_number."<br>"."Address Line 1 : ".$street1."<br>"."Address Line 2 : ".$street2."<br>"."Address Line 3 : ".$street3."<br>" ."Pincode : ".$pincode."<br>" ."City : ".$city."<br>" ."District : ".$district."<br>"."State : ".$state."<br>"."Office Contact Number : ".$office_mobile_number."<br>"."Plant / HO Address : ".$plant_address."<br>"."Plant pincode : ".$plant_pincode."<br>" ."Plant City : ".$plant_city."<br>"."Plant District : ".$plant_district."<br>"."Plant District : ".$plant_district."<br>"."Plant State : ".$plant_state."<br>"."Plant Mobile Number : ".$plant_mobile_number."<br>"."Vendor type : ".$vendor_type."<br>"."GST Number : ".$gst_no."<br>" ."Pancard Number : ".$pan_no."<br>" ."CIN Number : ".$cin_no."<br>"."Previously worked with Wings Pharmaceuticals : ".$worked."<br>"."Source of Contact : ".$contact_by."<br>"."Message : ".$message."<br>"."Referred By : ".$reffered_by."<br>"."Name of Department : ".$department_name."<br>";
                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Vendor Portal Form Details';
                $mail->Body    = $mail_body;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                if($mail->send());
                {
                    echo "Message has been sent";
                }
                
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
        else
        {
            echo "failed";
        }
    


?>