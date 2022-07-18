<?php
    include '../../config.php';
    if(isset($_GET['kd'])){
        $kd = $_GET['kd'];
        $select = mysqli_query($koneksi, "SELECT * FROM keranjang WHERE kd = '$kd'");

        if(mysqli_num_rows($select) == 0){
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='input.php'>Kembali Ke Form</a>";
            exit();
        } else {
            $data = mysqli_fetch_assoc($select);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pemesanan</title>
    <link rel="shorcut icon" href="../logolg.png">
    <link rel="stylesheet" href="style_inp.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="../../logolg.png" alt="" width="80px" height="80px">
        </div>
        <div class="nav">
            <ul>
                <a href="../home/Homeadmin.php">
                    <li>HOME</li>
                </a>
                <a href="../pemesanan/pemesanan.php">
                    <li>PEMESANAN</li>
                </a>
                <a href="../barang/barang.php">
                    <li>BARANG</li>
                </a>
            </ul>
        </div>
        <div class="logout">
            <button>Logout</button>
        </div>
    </header>
    <main>
        <div class="head">
            <div class="judul">
                <H1>Penginputan Data Pemesanan</H1>
            </div>
        </div>
        <div class="form-input">
            <form method="post" action="proses_edit.php" enctype="multipart/form-data">
                <table cellpadding="8" border="0">
                    <tr>
                        <td class="nm">Kode Pemesanan</td>
                        <td class="inp"><input type="text" name="kd" value="<?php echo $data['kd'];?>"></td>
                    </tr>
                    <tr>
                        <td class="nm">ID User</td>
                        <td class="inp"><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
                    </tr>
                    <tr>
                        <td class="nm">Kode Barang</td>
                        <td class="inp"><input type="text" name="kode_barang" value="<?php echo $data['kode_barang'];?>"></td>
                    </tr>
                    <tr>
                        <td class="nm">Jumlah</td>
                        <td class="inp"><input type="text" name="jumlah" value="<?php echo $data['jumlah'];?>"></td>
                    </tr>
                    <tr>
                        <td class="nm">Harga</td>
                        <td class="inp"><input type="text" name="harga" value="<?php echo $data['harga'];?>"></td>
                    </tr>
                    <tr>
                        <td class="nm">Total</td>
                        <td class="inp"><input type="text" name="total" value="<?php echo $data['total'];?>"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="pemesanan.php"></a><input type="submit" value="Simpan">
                            <a href="pemesanan.php"></a><button>Batal</button>
                        </td>
                    </tr>
                </table>
        </div>
    </main>
    <div class="title"><img src="../../logolg.png" alt="" width="30px" height="30px"><span>&copy;Copyright
            2021-2022 Powered By ButikStore.com, All Rigts Reserved</span></div>
</body>

</html>