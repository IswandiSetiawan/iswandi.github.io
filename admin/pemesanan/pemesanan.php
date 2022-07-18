<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
 <link rel="shorcut icon" href="../../logolg.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style_brg.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../../logods.png" alt="" width="300px" height="80px">
        </div>
        <div class="nav">
            <ul>
            <a href="../Home/Homeadmin.php">
                    <li>HOME</li>
                </a>
                <a href="pemesanan.php">
                    <li>PEMESANAN</li>
                </a>
                <a href="../Barang/barang.php">
                    <li>BARANG</li>
                </a>
            </ul>
        </div>
        <div class="logout">
        <a href="../index.php"><button>Logout</button></a>
        </div>
    </header>
    <main>
        <div class="head">
            <div class="judul">
                <H3>Data Pemesanan</H3>
            </div>
        </div>
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
                    include "../../config.php";
                    $query = "SELECT * FROM keranjang INNER JOIN login ON keranjang.id=login.id INNER JOIN tb_barang ON keranjang.kode_barang=tb_barang.kode_barang"; 
                    $sql = mysqli_query($koneksi, $query);
                    while($data = mysqli_fetch_array($sql)){ 
                echo"<tr>";
                    echo"<td>".$data['nama']."</td>";
                    echo"<td>".$data['nama_barang']."</td>";
                    echo"<td>".$data['jumlah']."</td>";
                    echo"<td>".$data['harga']."</td>";
                    echo"<td>".$data['total']."</td>";
                    echo'<td><a href="Edit.php?kd='.$data['kd'].'">Edit</a>
                        || <a href="delete.php?kd='.$data['kd'].'" onclick="return confirm(\'Yakin ingin menghapus data ini\')">Hapus</a>
                        || <a href="struk.php?kd='.$data['kd'].'">Struk</a></td>';
                echo"</tr>";
            } ?>

            </table>
        </div>
        <div class="input">
            <a href="input.php">Tambah Data</a>
        </div>
    </main>
    
    <div class="title"><img src="../../logolg.png" alt="" width="30px" height="30px"><span>&copy; Powered By butik store.com, All Rigts Reserved</span></div>
</body>
</html>