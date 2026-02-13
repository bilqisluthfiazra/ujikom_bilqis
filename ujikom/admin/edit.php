<?php
include '../koneksi.php';

$nis = $_GET['nis'];
$data = mysqli_query($koneksi, "SELECT * FROM user WHERE nis='$nis'");
$row = mysqli_fetch_assoc($data);

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];

    mysqli_query($koneksi, "UPDATE user SET username='$username', kelas='$kelas' WHERE nis='$nis'");

    header("Location: data_siswa.php");
}
?>

<h2>edit data siswa</h2>
<form method="POST">
    username :<input type="text" name="username" value="<?php echo $row['username']; ?>"><br><br>
    kelas :<input type="text" name="kelas" value="<?php echo $row['kelas']; ?>"><br><br>

    <button type="submit" name="submit">update</button>
    <a href="data_siswa.php">kembali</a>
    

</form>    