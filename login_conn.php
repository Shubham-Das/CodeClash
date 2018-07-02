<?php
	if($_POST['username'] && $_POST['pass']){
		$user = $_POST['username'];
		$password =$_POST['pass'];

		$client1 = array('user'=>'AMIT','pass'=>'amit123');
		$client2 = array('user'=>'SYED','pass'=>'SYED007');
		$client3 = array('user'=>'SAYAN','pass'=>'sayan969');

		if($user=='admin@codebuzz.com' && $password =='admin'){
			session_start();
			$_SESSION['type'] = "admin";
			header("location:admin.php");
		}
		else {
			if($client1['user'] == $user && $client1['pass'] == $password){
				session_start();
				$_SESSION['type'] = "client";
				header("location:index.php");
			}
			else if($client2['user'] == $user && $client2['pass'] == $password){
				session_start();
				$_SESSION['type'] = "client";
				header("location:index.php");
			}
			else if($client3['user'] == $user && $client3['pass'] == $password){
				session_start();
				$_SESSION['type'] = "client";
				header("location:index.php");
			}
			else{
				$message = 1;
				header("location:login.php? msg=$message");
			}
		}
	}
?>


