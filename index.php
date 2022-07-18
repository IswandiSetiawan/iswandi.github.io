<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOKO BUTIK</title>
    <link rel="shorcut icon" href="logolg.png">
    <link rel="stylesheet" href="styless.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="slides.js"></script>
    <style>
.mySlides {display:none;}
</style>
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
                <img src="logods.png" alt="" width="200px">
            </div>
            <div class="box-nav">
                <ul>
                    <li>
                    <li>
                    <li>
                    <li>
                    <li>
                    <li>
                    <li>
                    <li>
                    <li>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="login/login.php">MASUK</a></li>
                </ul>
         

        </nav>
        <div class="slider">
            <img class="mySlides" src="web1.png" style="width:100%;height: 500px;object-fit: cover;">
            <img class="mySlides" src="web3.png" style="width:100%;height: 500px;object-fit: cover;">
            <img class="mySlides" src="web2.png" style="width:100%;height: 500px;object-fit: cover;">
        </div>
    <main> 
        <section>
            <h3><span>SELAMAT BERBELANJA DI BUTIK STORE</span></h3>
            <p>KAMI BESAR DENGAN KEPERCAYAAN PELANGGAN DAN KAMI MEMILIKI VISI UNTUK MENGEMBANGKAN PRODUK KAMI</p>
            <hr>
            <h2>PILIHAN <span>Produk Kami</span></h2>
        </section>
        <?php  
            include "config.php";
            $query = "SELECT * FROM tb_barang"; 
            $sql = mysqli_query($koneksi, $query);
            while($data = mysqli_fetch_array($sql)){ //Menampilkan Semua Data Dari Table Barang
                echo "<a href='leng-baju/leng_baju.php?kode_barang=".$data['kode_barang']."'><div class='box_card'>";
                echo "<img src='s/".$data['gambar']."' width='100%' height='300px' style='object-fit:cover;object-position:center;'>";
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
                    <li>PERUMNAS UNHAS</li>
                    <li>ButikStore@gmail.com</li>
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
    <div class="title"><img src="logods.png" alt="" width="100px" height="30px"><span>&copy;Copyright 2022-2023 Powered By ButikStore.com, All Rigts Reserved</span></div>

    <script src="slides.js"></script>
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change  every 2 seconds
}
</script>
</body>
</html>