<?php
// Mulai session untuk menyimpan informasi login
session_start();

// Cek jika form login disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil username dan password dari form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Koneksi ke database
    $koneksi = mysqli_connect("localhost", "root", "", "ujikom_bilqis");

    if ($koneksi) {
        // Query untuk mencari user berdasarkan username
        $query = "SELECT * FROM `user` WHERE `username` = '$username'";
        $result = mysqli_query($koneksi, $query);

        // Cek apakah username ditemukan
        if (mysqli_num_rows($result) > 0) {
            // Ambil data user dari hasil query
            $user = mysqli_fetch_assoc($result);

            // Verifikasi password yang dimasukkan dengan password yang ada di database
            if (password_verify($password, $user['password'])) {
                // Jika password cocok, simpan informasi user di session
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role']; // Menyimpan role user (Admin/Siswa)
                $_SESSION['nis'] = $user['nis']; // Menyimpan NIS jika diperlukan

                // Redirect ke halaman utama setelah login berhasil
                header('Location: index.php'); // Ganti dengan halaman utama kamu
                exit;
            } else {
                // Jika password salah
                echo "<script>alert('Password salah!');</script>";
            }
        } else {
            // Jika username tidak ditemukan
            echo "<script>alert('Username tidak ditemukan!');</script>";
        }

        // Tutup koneksi
        mysqli_close($koneksi);
    } else {
        echo "Koneksi gagal!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <center>
    <h1>login</h1>
    <form action="index.php" method="POST">
        <div>
        <label for="">username</label> <br/>
        <input type="text" name="username" />
        </div>
         <div>
        <label for="">password</label> <br/>
        <input type="text" name="password"/>
        </div>
        <div>
        <label for="">role</label> <br/>
        <select name="role">
            <option VALUES="siswa" >siswa</option>
            <option VALUES="admin" >admin</option>
        </select>
        </div>
         <div>
        <label for="">NIS</label> <br/>
        <input type="text" name="nis"/>
        </div>
         <div>
        <label for="">kelas</label> <br/>
        <input type="text" name="kelas" />
        </div>
        <div>
        <button>submit</button>
        </div>
    </form>
    </center>
</body>
</html>
