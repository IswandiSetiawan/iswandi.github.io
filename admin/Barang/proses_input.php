<?php

include "../../config.php";

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$ukuran = $_POST['ukuran'];
$harga = $_POST['harga'];
$warna = $_POST['warna'];
$stok = $_POST['stok'];
$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];
	
$fotobaru = date('dmYHis').$gambar;

$path = "../../images/".$fotobaru;

$move = move_uploaded_file($tmp, $path);

if(!$move){
	echo"Gagal Upload";
	die;
}
else{

	$query = "INSERT INTO tb_barang VALUES('$kode_barang','$nama_barang','$stok','$ukuran','$harga','$warna','$fotobaru')";
    $sql = mysqli_query($koneksi, $query); 
    
	if($sql){ 
		header("location: barang.php"); 
	}else{
	
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
		echo "<br><a href='input.php'>Kembali Ke Form</a>";
	}
}


?>
