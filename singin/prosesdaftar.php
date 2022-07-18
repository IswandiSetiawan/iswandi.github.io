<?php
if(isset($_POST['submit'])){
include "../config.php";
$username = $_POST['username'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$jkel = $_POST['jkel'];
$notelp = $_POST['notelp'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
if($_POST['jkel']==="kosong"){
    echo"<script>alert('Jenis Kelamin Anda Belum Diisi ".$nama."!!!!!!');document.location.href = 'singin.php';
    </script>";die;
}

$sql = mysqli_query($koneksi,"INSERT INTO login VALUES(null,'$username','$nama','$password','pelanggan','$jkel','$notelp','$email','$alamat')");
if(!$sql){
    echo "<script>alert('GAGAL DAFTAR');document.location.href = 'singin.php';
    </script>";

}
else {
    echo "<script>alert('Berhasil Mendaftar');document.location.href = '../login/login.php';
    </script>";
}
}
?>