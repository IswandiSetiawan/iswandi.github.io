<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JUMLAH</title>
    <link rel="shorcut icon" href="../logolg.png">
</head>
<body>

<center>
<form action="inputjumlah.php" method = "post">

  Jumlah
  <input type="number" name="jumlah" class="form-control"  >
  <input type="hidden" name="id" value="<?=$_GET['id'];?>">
  <input type="hidden" name="kode_barang" value="<?=$_GET['kode_barang'];?>">
  <input type="reset" class="btn btn-danger" value="Batal" >
  <input type="submit" class="btn btn-success" name="submit" value="Beli" >
</form>
<?php 
if( isset($_POST['submit']) ){
  include 'koneksi.php';
  $jml = $_POST['jumlah'];
  $iduser = $_POST['id'];
  $kode = $_POST['kode_barang'];
  $sql_jml = mysqli_query($koneksi,"SELECT harga,stok FROM tb_barang WHERE kode_barang='$kode'");
  $harga = mysqli_fetch_assoc($sql_jml);
  $stok_awal = $harga['stok'];
  $stok_baru = $stok_awal - $jml;
  $hrg = $harga['harga'];
  $total = $jml * $hrg;

  $simpan = mysqli_query($koneksi,"INSERT INTO keranjang VALUES('$iduser','$kode','$jml','$hrg','$total')");
  $update = mysqli_query($koneksi,"UPDATE tb_barang SET stok='$stok_baru' WHERE kode_barang='$kode'");
  if( !$simpan ){
    echo"Gagal Menyimpan";die;
  }else{
    echo"<script>alert('berhasil menyimpan');
    document.location.href='halamanuser.php';</script>";
  }
 // $sql = mysqli_query($koneksi,"SELECT * FROM tb_barang,keranjang WHERE tb_barang.kode_barang = keranjang.kode_barang");
}
?>
</center>
</body>
</html>