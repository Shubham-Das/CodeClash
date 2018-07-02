<?php
    error_reporting(0);
    session_start();
    if($_POST['otp'] == $_SESSION['otp']){
        session_destroy();
        header("location:login.php");
    }
    else{
        $msg = 1;
        header("location:forgot_pass.php?msg=$msg");
    }
?>