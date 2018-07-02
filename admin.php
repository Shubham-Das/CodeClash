<?php
	error_reporting(0);
	session_start();
	if($_SESSION['type'] != "admin")
		header("location:index.php");
?>
<html>
	<head>
		<title>Administrator</title>
	</head>
	<body>
		<a href="logout.php">Logout</a>
		<br/><br/>
		<a href="#">Practice</a>
		<br/><br/>
		<a href="placementPaper.php">Placement Paper Upload</a>
	</body>
</html>