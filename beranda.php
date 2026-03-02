<?php
	session_start();
	include "koneksi.php";

	if($_SESSION['status']== ""){
		header("location:login.php?pesan=belum_login");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Sistem SPP Online</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
</head>
<body>
	
</body>
</html>