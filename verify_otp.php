<?php

    session_start();
    
    $otp = $_POST['otp'];

    if($otp ==  $_SESSION['otp'])
    {
        echo "done";
    }
    else
    {
        echo "failed";
    }
?>