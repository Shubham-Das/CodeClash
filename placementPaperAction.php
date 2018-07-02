<?php
	error_reporting(0);
	session_start();
	if($_SESSION['type'] != "admin")
		header("location:index.php");
	
	mkdir("Bag");

	if($_FILES['code']['name']){
		$code = time()."_".$_FILES['code']['name'];
		$path1 = "Bag"."/".$code;
		move_uploaded_file($_FILES['code']['tmp_name'], $path1);
	}
	if($_FILES['mcq']['name']){
		$mcq = time()."_".$_FILES['mcq']['name'];
		$path2 = "Bag"."/".$mcq;
		move_uploaded_file($_FILES['mcq']['tmp_name'], $path2);
	}
?>