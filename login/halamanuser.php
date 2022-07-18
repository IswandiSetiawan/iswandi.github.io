<!DOCTYPE html>
<html>
<head>
	<title>TOKO BUKTIK</title>
	<style>
	</style>
<head>
	    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Baju</title>
    <link rel="shorcut icon" href="../logolg.png">
    <link rel="stylesheet" href="styless.css">
</head>
<body>
	<br/>


	<?php 
	//KOndisi AKan Berjalan Jika User Belum Login
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}else{
		$id = $_SESSION['id'];
	}
	?>

    <?php 
		include 'member.php';
	?>
	<?php
	$i = 1;
	while( $i<=290 ){
		echo"&nbsp;";
		$i++;
	}
	?>
	<br/>


</body>
</html>