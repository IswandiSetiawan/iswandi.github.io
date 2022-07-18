<?php 
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member / User</title>
    <link rel="shorcut icon" href="../logolg.png">
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <header>
        <div class="about">
            <div class="box">
            </ul>
            </div>
        </div>
        <nav>
            <div class="box-logo">
                <img src="../logods.png" alt="" width="200px">
            </div>
            <div class="box-nav">
                <ul>
                    
                    <li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li>
                    <li><a href="halamanuser.php">HOME</a></li>
                    <li><a href="baju.php">BAJU</a></li>
                    <li><a href="../keranjang/keranjang.php">KERANJANG</a></li>
                </ul>
            </div>
            <div class="box-SingLog">
               <a href="../index.php"><button>Logout</button></a>
            </div>

        </nav>
        <div class="slider">
            <img class="mySlides" src="../web1.png" style="width:100%;height: 500px;object-fit: cover;">
            <img class="mySlides" src="../web2.png" style="width:100%;height: 500px;object-fit: cover;">
            <img class="mySlides" src="../web3.png" style="width:100%;height: 500px;object-fit: cover;">
        </div>
    <main>
        <section>
            <h3><span>SELAMAT BERBELANJA DI BUTIK STORE</span></h3>
            <p>KAMI BESAR DENGAN KEPERCAYAAN PELANGGAN DAN KAMI MEMILIKI VISI UNTUK MENGEMBANGKAN PRODUK KAMI</p>
            <hr>
            <h2>PILIHAN  <span>PRODUK KAMI</span></h2>
        </section>
        <?php 
            
            include "../config.php";
            $id = $_SESSION['id'];
            $query = "SELECT * FROM tb_barang"; 
            $sql = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($sql)){ //Menampilkan Semua Data Dari Table Barang
                echo "<a href='../member/leng_baju.php?kode_barang=".$data['kode_barang']."&id=".$id."'><div class='box_card'>";
                echo "<img src='../images/".$data['gambar']."' width='100%' height='300px' style='object-fit:cover;object-position:center;'>";
                echo "<div class='nama_brg'><p>".$data['nama_barang']."</p></div>";
                echo "<div class='harga_brg'><p>Rp. ".$data['harga']."(".$data['stok'].")</p></div>";
                // echo "<p><a href='inputjumlah.php?kode_barang=".$data['kode_barang']."'><button>Beli</button></a> <a href='proses_hapus.php?kode_barang=".$data['kode_barang']."'><button>Hapus</button></a>";
                echo "</div></a>";
            }
        ?>
    </main>
    
    <div class="clear" style="clear:both"></div>
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
    <div class="title"><img src="../logods.png" alt="" width="100px" height="30px"><span>&copy;Copyright 2022-2023 Powered By ButikStore.com, All Rigts Reserved</span></div>

    <script src="../slides.js"></script>
</body>
</html>