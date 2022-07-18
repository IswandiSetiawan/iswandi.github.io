<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
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
                <H1>Penginputan Data Barang</H1>
            </div>
        </div>
        <div class="form-input">
            <form method="post" action="proses_input.php" enctype="multipart/form-data">
                <table cellpadding="8" border="0">
                    <tr>
                        <td class="nm">Kode barang</td>
                        <td class="inp"><input type="text" name="kode_barang"></td>
                    </tr>
                    <tr>
                        <td class="nm">Nama barang</td>
                        <td class="inp"><input type="text" name="nama_barang"></td>
                    </tr>
                    <tr>
                        <td class="nm">Ukuran</td>
                        <td class="inp"><input type="text" name="ukuran"></td>
                    </tr>
                    <tr>
                        <td class="nm">Harga</td>
                        <td class="inp"><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td class="nm">warna</td>
                        <td class="inp"><input type="text" name="warna"></td>
                    </tr>
                    <tr>
                        <td class="nm">Stok</td>
                        <td class="inp"><input type="text" name="stok"></td>
                    </tr>
                    <tr>
                        <td class="nm">Foto</td>
                        <td class="inp"><input type="file" name="gambar"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <a href="barang.php"></a><input type="submit" value="Simpan">
                            <a href="barang.php"></a><button>Batal</button>
                        </td>
                    </tr>
                </table>
        </div>
    </main>
    <div class="title"><img src="../../logolg.png" alt="" width="30px" height="30px"><span>&copy;Copyright
            2021-2022 Powered By ButikStore.com, All Rigts Reserved</span></div>
</body>

</html>