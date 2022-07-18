<?php 
session_start();

include '../config.php';


$username = mysqli_real_escape_string($koneksi,$_POST['username']);

$password = $_POST['password'];

$data = mysqli_query($koneksi,"SELECT * from login where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);
$cekuser = mysqli_fetch_assoc($data);
//Mengecek field kelas yang login
if($cek > 0){
	//Kondisi ini Berjalan Jika Kelasnya Adalah Admin
	if($cekuser['kelas']==="admin"){

	
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../admin/Home/Homeadmin.php");
	}
	else
	{
		//Kondisi Ini Berjalan Apabila Tidak Ditemukan Admin
		$id = $cekuser['id'];
		$_SESSION['id'] = $id;
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:halamanuser.php");
	}
}else{
	header("location:login.php?pesan=gagal");
}
?>