<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <?php //Mengecek apakah ada variabel pesan atau tidak 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            ?><script>alert("username /password salah ")</script><?php
        }else if($_GET['pesan'] == "logout"){
            ?><script>alert("Anda Berhasil Logout ")</script><?php
        }else if($_GET['pesan'] == "belum_login"){
            ?><script>alert("Maaf Anda Harus Login Dulu ")</script><?php
        }
    }
    ?>
    <div class="body">
        <div class="container">
            <div class="judul">
                <h2>Login Admin</h2>
                <p>Silahkan Isi Semua</p>
            </div>

            <div class="input">
                <form action="../login/cek_login.php" method="post">
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password" required>
                <a href=""><p>Forget Password</p></a>
            </div>
            <div class="btn">
                <input type="submit" value="LOGIN" name="submit">
                </form>
                <p><a href="../singin/singin.php">Registrasi</a> Jika Belum Punya Akun</p>
            </div>
        </div>
    </div>
</body>
</html>