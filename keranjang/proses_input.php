<?php

include "../../config.php";
	
	$id = $_POST['id'];
	$kd_barang = $_POST['kd_barang'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	$total = $_POST['total'];

	$query = "INSERT INTO keranjang VALUES(NULL,'$id','$kd_barang','$jumlah','$harga','$total')";
    $sql = mysqli_query($koneksi, $query); 
    
	if($sql){ 
		header("location: pemesanan.php"); 
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='input.php'>Kembali Ke Form</a>";
	}

?>
