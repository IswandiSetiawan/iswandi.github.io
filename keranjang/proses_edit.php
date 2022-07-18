<?php

include "../config.php";
	$kd = $_POST['kd'];
	$id = $_POST['id'];
	$kode_barang = $_POST['kode_barang'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	$total = $_POST['total'];

	$sql = mysqli_query($koneksi,"UPDATE keranjang SET jumlah='$jumlah', total='$harga * $jumlah' WHERE kd='$kd'");
    
	if($sql){ 
		header("location: keranjang.php"); 
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='input.php'>Kembali Ke Form</a>";
	}

?>
