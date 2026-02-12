<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'"));
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Siswa</title>

<style>
body {
    margin: 0;
    font-family: Monoid;
    min-height:100vh;
    background: linear-gradient(to right, #3e6985, #8aa7bc, #a6bed1);
    display:flex;
    justify-content:center;
    align-items:center;
}

form {
    background: #fff;
    padding: 25px;
    border-radius: 20px;
    width: 320px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
}

h1 {
    text-align: center;
    color: #0d273d;
}

label {
    color: #0d273d;
    font-size: 14px;
}

input {
    width: 100%;
    padding: 8px;
    margin: 5px 0 15px;
    border-radius: 8px;
    border: 1px solid #8aa7bc;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 10px;
    background: #3e6985;
    color: #fff;
    cursor: pointer;
}

button:hover {
    background: #0d273d;
}
</style>
</head>

<body>

<form method="POST">
    <h1>Edit Siswa</h1>

    <label>Username</label>
    <input type="text" name="username" value="<?= $data['username']; ?>" required>

    <label>NIS</label>
    <input type="text" name="nis" value="<?= $data['nis']; ?>" required>

    <label>Kelas</label>
    <input type="text" name="kelas" value="<?= $data['kelas']; ?>" required>

    <label>Password (kosongkan jika tidak diganti)</label>
    <input type="password" name="password">

    <button type="submit" name="update">Update</button>
</form>

<?php
if (isset($_POST['update'])) {
    $username = $_POST['username'];
    $nis = $_POST['nis'];
    $kelas = $_POST['kelas'];
    $password = $_POST['password'];

    if (!empty($password)) {
        $hash = password_hash($password, PASSWORD_DEFAULT);
        mysqli_query($koneksi, "UPDATE user SET 
            username='$username',
            nis='$nis',
            kelas='$kelas',
            password='$hash'
            WHERE id='$id'
        ");
    } else {
        mysqli_query($koneksi, "UPDATE user SET 
            username='$username',
            nis='$nis',
            kelas='$kelas'
            WHERE id='$id'
        ");
    }

    echo "<script>
        alert('Data siswa berhasil diupdate!');
        window.location='data_siswa.php';
    </script>";
}
?>

</body>
</html>