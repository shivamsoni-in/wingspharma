<?php

    session_start();
    $mobile_number = $_POST['mobile_number'];

    $_SESSION['mobile'] = $mobile_number;
    
    $otpno = rand(111111,999999);

    $_SESSION['otp'] = $otpno;

    // print_r($_SESSION);

    // Account details
	$apiKey = urlencode('3L8z2xmG/Do-CDYuL1jZ5WA8cnZQKLOK0680BUsDOa');
	
	// Message details
	$numbers = $mobile_number;
	$sender = urlencode('WINGSB');
	$message = rawurlencode("$otpno is the OTP for verifying your mobile number. Please Don't share with anyone. -Wings Pharma");
 
// 	$numbers = implode(',', $numbers);
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/send/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
    
    
    $json_response = json_decode($response, true);
	
	// Process your response here
// 	echo $json_response['status'];
	
    // echo $response;	
    if($json_response['status'] == "success")
    {
        echo "Message sent";
    }
    else
    {
        echo "failed";
    }

    /* store all responses for later consumption */
    // $data[]=$curl_response;

    // curl_close($ch);

    

?>