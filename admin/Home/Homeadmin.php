<?php 
 session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ...login/login.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<link rel="shorcut icon" href="../../logolg.png">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="shorcut icon" href="../logolg.png">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <header>
        <div class="logo">
            <img src="../../logods.png" alt="" width="300px" height="80px">
        </div>
        <div class="nav">
            <ul>
                <a href="#">
                    <li>HOME</li>
                </a>
                <a href="../pemesanan/pemesanan.php">
                    <li>PEMESANAN</li>
                </a>
                <a href="../Barang/barang.php">
                    <li>BARANG</li>
                </a>
            </ul>
        </div>
        <div class="logout">
        <a href="../../login/login.php"><button>Logout</button></a>
        </div>
    </header>
    <div class="foto">
        <img src="../../web1.png" alt="" width="100%" height="600px">
    </div>

    <main>
        <div class="Penjualan">
            <p class="judul">Terjual</p>
            <?php

                include '../../config.php';
                
                $data_barang = mysqli_query($koneksi,"SELECT * FROM keranjang");
                
                $jumlah_barang = mysqli_num_rows($data_barang);
            ?>
            <p><?php echo $jumlah_barang; ?></p>
        </div>
        <div class="barang">
        <?php

                include '../../config.php';
                
                $d_barang = mysqli_query($koneksi,"SELECT * FROM tb_barang");
                
                $barang = mysqli_num_rows($d_barang);
            ?>
            <p class="judul">Barang</p>
            <p><?php echo $barang; ?></p>
        </div>
        <div class="user">
            <p class="judul">User</p>
            <?php

                include '../../config.php';
                
                $d_user = mysqli_query($koneksi,"SELECT * FROM login where kelas='pelanggan' ");

                $user = mysqli_num_rows($d_user);
            ?>
            <p><?php echo $user; ?></p>
        </div>
    </main>

    <div class="title"><img src="../../logolg.png" alt="" width="30px" height="30px"><span>&copy;Copyright
            2021-2022 Powered By ButikStore.com, All Rigts Reserved</span></div>

</body>

</html>