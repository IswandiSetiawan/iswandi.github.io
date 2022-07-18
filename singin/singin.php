<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Member</title>
    <link rel="shorcut icon" href="../logolg.png">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <div id="container">
        <div class="box1"><img src="../kotak.png" alt=""width="200px" height="200px"></div>
        <div class="box2"><img src="../kotak.png" alt=""width="200px" height="200px"></div>
            <div class="form-singin">
                <div class="box-1">
                    <form action="prosesdaftar.php" method="POST">
                        <h2>Creat Account</h2>
                        <p>Isi Semua Form Yang Ada, Jika Ingin Sing In</p>
                        <div class="txt">
                            <span>Username</span>
                            <input type="text" name="username">
                        </div>
                        <div class="txt">
                            <span>Nama</span>
                            <input type="text" name="nama">
                        </div>
                        <div class="jk">
                        <span>Jenis Kelamin</span>
                            <select name="jkel" id="jk"><br>
                                <option value="#">Jenis Kelamin</option><br>
                                <option value="laki-laki">laki-laki</option><br>
                                <option value="perempuan">perempuan</option><br>
                            </select>
                        </div>
                        <div class="email">
                            <span>No Telpon</span>
                            <input type="text" name="notelp">
                            <span>Email Address</span>
                            <input type="text" name="email">
                            <span>Password</span>
                            <input type="password" name="password">
                            <span>Alamat</span>
                            <input type="text" name="alamat">
                        </div>
                        <div class="Sing-Up">
                        <input type="submit" value="Daftar" name="submit">
                        </div>
                        
                    </form>
                </div>
                <div class="box-2 ">
                            </select>
                    <div class="member">
                        <span>Already a Member ?</span>
                        <a href="../login/login.php"><button>LOGIN</button></a> 
                    </div>
                    <div class="img">
                        <img src="../logolg.png" alt="" width="300px">
                    </div>
                </div>
            </div>
    </div>
</body>
</html>