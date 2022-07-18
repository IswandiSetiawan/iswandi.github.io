<?php 
error_reporting(0);
    //KOndisi AKan Berjalan Jika User Belum Login
    session_start();
    if($_SESSION['status']!="login"){
        header("location:login.php?pesan=belum_login");
    }else{
        $id = $_SESSION['id'];
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja</title>
    <link rel="shorcut icon" href="../logolg.png">
    <link rel="stylesheet" href="style_leng_baju.css">
</head>
<body>
    <header>
        <div class="about">
            <div class="box">
                <ul>
                <li>Hp : 089-670-44818-9</li>
                <li>Wa : 089-618-970-448</li>
            </ul>
            </div>
        </div>
        <nav>
            <div class="box-logo">
                <img src="../logods.png" alt="" width="200px">
            </div>
            <div class="box-nav">
                <ul>
                    <li><a href="../login/halamanuser.php">HOME</a></li>
                </ul>
            </div>
            <div class="box-SingLog">
                <a href="../index.php"><button>Logout</button></a>
            </div>
        </nav>

        <div class="nm_baju">
            <h2>Nama Baju Yang Dipilih</h2>
        </div>
        <main>
            <div class="box_baju">
                <div class="img_baju">
                <?php
            include "../config.php";
            if(isset($_GET['kode_barang'])){
                $kode_barang    =$_GET['kode_barang'];
            }

            $query = "SELECT * FROM tb_barang WHERE kode_barang='$kode_barang'";
            $sql = mysqli_query($koneksi, $query);
            $data = mysqli_fetch_assoc($sql);
                    echo"<img src='../images/".$data['gambar']."' alt='' width='300px'>";
                    ?>
                </div>
                
                <div class="ket_baju">
                    <p style="font-size: 18px; font-weight: bold;">Keterangan </p>
        <?php  
            
                    echo"<p>Nama : ".$data['nama_barang'] ."</p>";
                    echo"<p>Stock : ".$data['stok']."</p>";
                    echo"<p>Warna : ".$data['warna']."</p>";
                    echo"<p>Ukuran : ".$data['ukuran']."</p>";
                    echo"<p>Harga : Rp. ".$data['harga']."</p>";
                
        ?>
        <form action="leng_baju.php" method = "post">
            <span>Jumlah Beli :</span>
        <input type="number" name="jumlah" class="form-control"  >
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="kode_barang" value="<?=$_GET['kode_barang'];?>">
        <div class="input">
            <input type="reset" class="btn btn-danger" value="Batal">
            <input type="submit" class="btn btn-success" name="submit" value="Beli" >
        </div>
        </form>
        <?php 
if( isset($_POST['submit']) ){
  include "../config.php";
  $jml = $_POST['jumlah'];
  $iduser = $_POST['id'];
  $kode = $_POST['kode_barang'];
  $sql_jml = mysqli_query($koneksi,"SELECT * FROM tb_barang WHERE kode_barang='$kode'");
  $harga = mysqli_fetch_assoc($sql_jml);
  $cek = mysqli_num_rows($sql_jml);
  $stok_awal = $harga['stok'];
  $stok_baru = $stok_awal - $jml;
  $hrg = $harga['harga'];
  $total = $jml * $hrg;

  if($stok_baru < 0) {
      echo "";
      echo "Stok Melebihi Batas";
      die;
  } else {
      $simpan = mysqli_query($koneksi,"INSERT INTO keranjang VALUES(NULL,'$iduser','$kode','$jml','$hrg','$total')");
      $update = mysqli_query($koneksi,"UPDATE tb_barang SET stok='$stok_baru' WHERE kode_barang='$kode'");
      if( $simpan ){
        echo"<script>alert('berhasil menyimpan');
        document.location.href='../login/halamanuser.php';</script>";
        
      }else{
        echo"Gagal Menyimpan";die;
      }
  }
 // $sql = mysqli_query($koneksi,"SELECT * FROM tb_barang,keranjang WHERE tb_barang.kode_barang = keranjang.kode_barang");
}
?>
                </div>
            </div>
        </main>
 
        <footer>
            <div class="box-footer">
                <div class="box">
                    <h3>Follow US</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Instagram</li>
                        <li>Twitter</li>
                    </ul>
                </div>
                <div class="box">
                    <h3>Address</h3>
                <ul>
                    <li>PERDOS UNHAS</li>
                    <li>butikSTORE@gmail.com</li>
                    <li>(0223)2804357</li>
                    <li>Hp : 082211724366</li>
                </ul>
                </div>
                <div class="box">
                    <h3>Layanan</h3>
                   <p>Tentang Kami</p>
                <p> Cara Pengiriman Paket Garansi Produk Seputar ButikStore</p>
                <p>Hp : 082211724366</p>
                <p>ButikStore@gmail.com</p>
                </div>
            </div>
        </footer>
        </header>
        <div class="title"><img src="../logolg.png" alt="" width="30px" height="30px"><span>&copy;Copyright 2022-2023 Powered By ButikStore.com, All Rigts Reserved</span></div>
    
</body>
</html>