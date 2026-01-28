
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data siswa</title>
    <style>
        body {
    margin: 0;
    font-family:Monoid;
    min-height:100vh;
    background: linear-gradient(to right, #3e6985, #8aa7bc, #a6bed1);
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    display:flex;
    justify-content:center;
    align-items:center;
}




/* ===== CONTAINER ===== */
        .page {
            /* width: 100%; */
            min-height: 100vh;
            /* background-color: #A6BED1;  */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 40px;
        }

        h1 {
            color: #0d273d;
            margin-bottom: 10px;
            text-align: center;
        }

        /* ===== CARD FORM ===== */
        form {
            background-color: #ffffff;
            width: 320px;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        form div {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-size: 14px;
            color: #0D273D; /* Yankees Blue */
        }

        input, select, textarea {
            width: 300px;
            padding: 8px 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #8AA7BC; /* Pewter Blue */
            outline: none;
            font-size: 14px;
        }

        textarea {
            resize: none;
            height: 80px;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #3E6985; /* Teal Blue */
        }

        /* ===== BUTTON ===== */
        button  {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #3E6985; /* Teal Blue */
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }

        button a{
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #3E6985; /* Teal Blue */
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }
        button a:hover {
            background-color: #0D273D; /* Yankees Blue */
            color : #a6bed1;
        }
        button:hover {
            background-color: #0D273D; /* Yankees Blue */
            color : #a6bed1;
        }
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
    <button type="submit" style="margin-top: 10px;"><a href="\ujikom\admin\data_siswa.php">Kembali</a></button>
    </center>


    <?php
    if (isset($_POST['username'])) {

    // $nama =$_POST['nama'];
    $username =$_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // $role=$_POST['role'];
    $nis = $_POST['nis'];
    $kelas =$_POST['kelas'];

    echo "<script>alert('Data berhasil disimpan!');</script>";

   $koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");
    mysqli_query($koneksi,"INSERT INTO `user` (`id`,`username`,`password`,`nis`,`kelas`)
    VALUES (NULL,'$username','$password','$nis','$kelas')");
    }
    ?>
</body>
</html>