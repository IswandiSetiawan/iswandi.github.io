<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Pemesanan</title>
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
            <form method="post" action="proses_input.php" enctype="multipart/form-data">
                <table cellpadding="8" border="0">
                    <tr>
                        <td class="nm">ID User</td>
                        <td class="inp"><input type="text" name="id"></td>
                    </tr>
                    <tr>
                        <td class="nm">Kode Barang</td>
                        <td class="inp"><input type="text" name="kd_barang"></td>
                    </tr>
                    <tr>
                        <td class="nm">Jumlah</td>
                        <td class="inp"><input type="text" name="jumlah"></td>
                    </tr>
                    <tr>
                        <td class="nm">Harga</td>
                        <td class="inp"><input type="text" name="harga"></td>
                    </tr>
                    <tr>
                        <td class="nm">Total</td>
                        <td class="inp"><input type="text" name="total"></td>
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