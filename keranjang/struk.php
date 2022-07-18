<?php
	include '../config.php';
	if(isset($_GET['kd'])){
		$kd = $_GET['kd'];
		$select = mysqli_query($koneksi, "SELECT * FROM keranjang INNER JOIN login ON keranjang.id=login.id INNER JOIN tb_barang ON keranjang.kode_barang=tb_barang.kode_barang WHERE kd='$kd'") or die(mysqli_error($konek));

		if(mysqli_num_rows($select) == 0){
			echo '<div class="alert alert-warning">kd tidak ada dalam database.</div>';
			exit();
		}else{
			$data = mysqli_fetch_assoc($select);
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="shorcut icon" href="logolg.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_brg.css">
</head>
<body onload="window.print()">
	<center>
		<h1>
			STRUK PEMESANAN PELANGGAN
		</h1>
    <br>
    <h2>
      BAWA STRUK INI KE OUTLET KAMI UNTUK MELAKUKAN TRANSAKSI LEBIH LANJUT,<br>
      JIKA ANDA BERADA DI LUAR DAERAH SILAHKAN TRANSFER DI NO REG KAMI<br>
    BRI A/N ISWANDI (495601017326531)
    </h2>
		<br>
    <br>
    <font size="5">
		<table align="center">
      <tr>
        <td width="300px">KODE PEMESANAN</td>
        <td>: <?php echo $data['kd']; ?></td>
      </tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr>
        <td>ID USER</td>
        <td>: <?php echo $data['id']; ?></td>
      </tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr>
        <td>NAMA USER</td>
        <td>: <?php echo $data['nama']; ?></td>
      </tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr>
        <td>NO TELP USER</td>
        <td>: <?php echo $data['notelp']; ?></td>
      </tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr>
        <td>EMAIL USER</td>
        <td>: <?php echo $data['email']; ?></td>
      </tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
     	<tr>
           <td>ALAMAT USER</td>
        <td>: <?php echo $data['alamat']; ?></td>
      </tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr>
      	<td>KODE BARANG</td>
        <td>: <?php echo $data['kode_barang']; ?></td>
    	</tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr>
        <td>NAMA BARANG</td>
        <td>: <?php echo $data['nama_barang']; ?></td>
      </tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
    	<tr>
      	<td>JUMLAH</td>
        <td>: <?php echo $data['jumlah']; ?></td>
    	</tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
    	<tr>
      	<td>HARGA</td>
        <td>: <?php echo $data['harga']; ?></td>
    	</tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
      <tr><td></td></tr>
    	<tr>
      	<td>TOTAL</td>
        <td>: <?php echo $data['total']; ?></td>
    	</tr>
            TERIMA KASIH TELAH BERKUNJUNG DI TOKO KAMI
    </tr>
    </table>
	</center>
</body>
</html>