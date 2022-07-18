<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beli Baju</title>
    <link rel="shorcut icon" href="../logolg.png">
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <header>
        <div class="about">
            <div class="box">
                <ul>
                <li>Hp : 0822-1172-4366</li>
                <li>Wa : 0822-1172-4366</li>
            </ul>
            </div>
        </div>
        <nav>
            <div class="box-logo">
                <img src="../logods.png" alt="" width="200px">
            </div>
            <div class="box-nav">
                <ul>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li><a href="../index.php">HOME</a></li>
                </ul>
            </div>
            <div class="box-SingLog">
            <a href="/tokbutik/login/login.php"><button>Login</button></a><a href="/tokbutik/singin/singin.php"><button>Sing In</button></a>
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
            else {
                die ("Error. No ID Selected!");    
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
        <form action="alert.php" method = "post">
            <span>Jumlah Beli :</span>
        <input type="number" name="jumlah" class="form-control"  >
        <input type="hidden" name="id" value="<?=$_GET['id'];?>">
        <input type="hidden" name="kode_barang" value="<?=$_GET['kode_barang'];?>">
        <div class="input">
            <input type="reset" class="btn btn-danger" value="Batal">
            <input type="submit" class="btn btn-success" name="submit" value="Beli" >
        </div>
        </form>
                </div>
            </div>
        </main>
        <section>
            <h2>PILIHAN  <span>Produk Desain</span></h2>
        </section>
        <?php  
            include "../config.php";
            $query = "SELECT * FROM tb_barang"; 
            $sql = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($sql)){ //Menampilkan Semua Data Dari Table Barang
                echo "<a href='../leng-baju/leng_baju.php?kode_barang=".$data['kode_barang']."'><div class='box_card'>";
                echo "<img src='../images/".$data['gambar']."' width='100%' height='300px' style='object-fit:cover;object-position:center;'>";
                echo "<div class='nama_brg'><p>".$data['nama_barang']."</p></div>";
                echo "<div class='harga_brg'><p>Rp. ".$data['harga']."(".$data['stok'].")</p></div>";
                // echo "<p><a href='inputjumlah.php?kode_barang=".$data['kode_barang']."'><button>Beli</button></a> <a href='proses_hapus.php?kode_barang=".$data['kode_barang']."'><button>Hapus</button></a>";
                echo "</div>";
            }
        ?>
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
                        <li>ButikStore@gmail.com</li>
                        <li>(0223)2804357</li>
                        <li>Hp : 089618970448</li>
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
