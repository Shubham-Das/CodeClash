<?php
    error_reporting(0);
    include_once './class.phpmailer.php';
    $from = "codeclash2018@gmail.com";
    $pass = "codeclash@2018";
    $to = "shivahazra@gmail.com";
    $subject = "CodeClash One Time Password";
    $random = rand(1, 999999);
    $msg = "Your One Time Password is ".$random."<br/>Dont't Share this Password to anyone.";
    
    $mail = new PHPMailer();
    $mail -> IsSMTP();
    $mail -> SMTPDebug = 1;
    $mail -> SMTPAuth = true;
    $mail -> SMTPSecure = 'ssl';
    $mail -> Host = "smtp.gmail.com";
    $mail -> Port = 465;
    $mail -> IsHTML(true);
    $mail -> Username = $from;
    $mail -> Password = $pass;
    $mail -> Subject = $subject;
    $mail -> Body = $msg;
    $mail -> AddAddress($to);
    $mail -> SetFrom($from, "CodeClash CEO");
    if(!$mail -> send())
        echo "<h2 style='color: red;'>Mail Error: ".$mail -> ErrorInfo."</h2>";
    else{
        session_start();
        $_SESSION['otp'] = $random;
        $message = 2;
        header("location:forgot_pass.php?msg=$message");
    }
?>