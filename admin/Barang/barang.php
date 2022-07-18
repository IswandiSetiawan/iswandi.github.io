<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <link rel="shorcut icon" href="../../logolg.png">
    <link rel="stylesheet" href="style_brg.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../../logods.png" alt="" width="400px" height="80px">
        </div>
        <div class="nav">
            <ul>
                <a href="../Home/Homeadmin.php"><li>HOME</li></a>
                <a href="../pemesanan/pemesanan.php"><li>PEMESANAN</li></a>
                <a href="#"><li>BARANG</li></a>
            </ul>
        </div>
        <div class="logout">
        <a href="../admin/index.php"><button>Logout</button></a>
        </div>
    </header>

    <main>
        <div class="head">
            <div class="judul">
                <H3>Data Baju</H3>
            </div>
        </div>
        <div id="customers">
            <table border="1">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Warna</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
                <?php  
                    include "../../config.php";
                    $query = "SELECT * FROM tb_barang"; 
                    $sql = mysqli_query($koneksi, $query);
                    while($data = mysqli_fetch_array($sql)){ 
                echo"<tr>";
                    echo"<td>".$data['kode_barang']."</td>";
                    echo"<td>".$data['nama_barang']."</td>";
                    echo"<td>".$data['ukuran']."</td>";
                    echo"<td>".$data['warna']."</td>";
                    echo"<td>".$data['stok']."</td>";
                    echo"<td>".$data['harga']."</td>";
                    echo"<td><img src='../../images/".$data['gambar']."' width='100px' height='100px' style='object-fit:cover;object-position:center;'></td>";
                    echo'<td><a href="edit.php?kode_barang='.$data['kode_barang'].'">Edit</a>
                        || <a href="delete.php?kode_barang='.$data['kode_barang'].'" onclick="return confirm(\'Yakin ingin menghapus data ini\')">Hapus</a></td>';
                echo"</tr>";
            } ?> 
            </table>
        </div>
        <div class="input">
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="input.php">Tambah Data</a>
        </div>
    </main>

    <div class="title"><img src="../../logods.png" alt="" width="100px" height="30px"><span>&copy;Copyright 2021-2022 Powered By ButikStore.com, All Rigts Reserved</span></div>

</body>
</html>