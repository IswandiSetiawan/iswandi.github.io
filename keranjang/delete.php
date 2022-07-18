<?php

include '../config.php';

if(isset($_GET['kd'])){
	$kd = $_GET['kd'];

	$query = "DELETE FROM keranjang WHERE kd = '$kd'";
    $sql = mysqli_query($koneksi, $query); 
    
	if($sql){ 
		header("location: keranjang.php"); 
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menghapus data dari database.";
		echo "<br><a href='input.php'>Kembali Ke Form</a>";
	}
}
?>