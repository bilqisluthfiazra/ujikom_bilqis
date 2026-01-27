
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
    <style>
        
    </style>
</head>
<body>
    <form action="" method="POST">
    <center>
    <h1>Data Siswa</h1>
    <div>
    <label for="">username</label> <br/>
    <input type="text" name="username" />
    </div>

    <div>
    <label for="">password</label> <br/>
    <input type="text" name="password" />
    </div>

    <div>
    <label for="">nis</label> <br/>
    <input type="text" name="nis" />
    </div>

    <div>
    <label for="">kelas</label> <br/>
    <input type="text" name="kelas"/>
    </div>

    

        <button> kirim</button>
    </center>
    <?php
    if (isset($_POST['username'])) {

    $nama =$_POST['nama'];
    $username =$_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role=$_POST['role'];
    $nis = $_POST['nis'];
    $kelas =$_POST['kelas'];

    // echo "<h2>Pengaduan berhasil dikirim</h2>";

   $koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");
    mysqli_query($koneksi,"INSERT INTO `user` (`id`,`username`,`password`,`role`,`nis`, `kelas`)
    VALUES (NULL,'$username','$password','$role','$nis','$kelas')");
    }
    ?>
</body>
</html>