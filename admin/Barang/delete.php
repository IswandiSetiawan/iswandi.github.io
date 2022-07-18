<?php

include '../../config.php';

if(isset($_GET['kode_barang'])){
	$kode_barang = $_GET['kode_barang'];

	$query = "DELETE FROM tb_barang WHERE kode_barang = '$kode_barang'";
    $sql = mysqli_query($koneksi, $query); 
    
	if($sql){ 
		header("location: barang.php"); 
	}else{
		echo "Maaf, Terjadi kesalahan saat mencoba untuk menghapus data dari database.";
		echo "<br><a href='input.php'>Kembali Ke Form</a>";
	}
}
?>