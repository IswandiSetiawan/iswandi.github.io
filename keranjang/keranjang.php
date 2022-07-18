<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
    <link rel="shorcut icon" href="../logolg.png">
    <link rel="stylesheet" href="../login/styless.css">
</head>
<style>
    #customers {    
    width: 100%;
    margin-bottom: 30px;
  }
  table{
    width: 100%;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
  }
  
  #customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
  }
  
  #customers tr:nth-child(even){background-color: #f2f2f2;}
  
  #customers tr:hover {background-color: #ddd;}
  
  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #04AA6D;
    color: white;
  }
</style>
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
                    
                    <li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li>
                    <li><a href="../login/halamanuser.php">HOME</a></li>
                    <li><a href="../login/baju.php">BAJU</a></li>
                    <li><a href="../keranjang/keranjang.php">KERANJANG</a></li>
                </ul>
            </div>
            <div class="box-SingLog">
               <a href="../index.php"><button>Logout</button></a>
            </div>

</nav>
    <main>
        <section>
            <h3>LIST PRODUK DI KERANGJANG</span></h3>
            <hr>
            <h2>DAFTAR PRODUK DI BELI</span></h2>
        </section>
        <div id="customers">
            <table border="1">
                <tr>
                    <th>Nama User</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                    <th>Aksi</th>
                </tr>
                <?php  
                    include "../config.php";
                    $query = "SELECT * FROM keranjang INNER JOIN login ON keranjang.id=login.id INNER JOIN tb_barang ON keranjang.kode_barang=tb_barang.kode_barang";  
                    $sql = mysqli_query($koneksi, $query);
                    while($data = mysqli_fetch_array($sql)){ 
                echo"<tr>";
                    echo"<td>".$data['nama']."</td>";
                    echo"<td>".$data['nama_barang']."</td>";
                    echo"<td>".$data['jumlah']."</td>";
                    echo"<td>".$data['harga']."</td>";
                    echo"<td>".$data['total']."</td>";
                    echo'<td><a href="delete.php?kd='.$data['kd'].'" onclick="return confirm(\'Yakin ingin menghapus data ini\')">Hapus</a>
                    || <a href="struk.php?kd='.$data['kd'].'">Struk</a> || <a href="Edit.php?kd='.$data['kd'].'">Edit</a></td>';
                echo"</tr>";
            } ?>
            </table>
        </div>
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