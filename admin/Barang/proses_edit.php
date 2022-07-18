<?php
	include '../../config.php';
		$kode_barang = $_POST['kode_barang'];
		$nama_barang = $_POST['nama_barang'];
		$ukuran = $_POST['ukuran'];
		$harga = $_POST['harga'];
		$warna = $_POST['warna'];
		$stok = $_POST['stok'];

		$gambar = $_FILES['gambar']['name'];
		$tmp = $_FILES['gambar']['tmp_name'];

		$fotobaru = date('dmYHis').$gambar;

		$path = "C:/xampp/htdocs/tokobutik/images/".$fotobaru;

		$move = move_uploaded_file($tmp, $path);

		if(!$move){
			echo"Gagal Upload";
			die;
		} else {
			$sql = mysqli_query($koneksi,"UPDATE tb_barang SET nama_barang='$nama_barang', ukuran='$ukuran', harga='$harga', warna='$warna', stok='$stok', gambar='$fotobaru' WHERE kode_barang='$kode_barang'");
			if ($sql) {
				header("location: barang.php");
			} else {
				echo "Maaf, Terjadi kesalahan saat mencoba untuk mengedit data ke database.";
				echo "<br><a href='input.php'>Kembali Ke Form</a>";
			}
		}

?>