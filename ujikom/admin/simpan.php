<?php
include '../koneksi.php';

$username = $_POST['username'];
$password= password_hash($_POST['password'], PASSWORD_DEFAULT);
$nis = $_POST['nis'];
$kelas= $_POST['kelas'];

$query = "INSERT INTO `user` (username, password , nis, kelas) VAlUES ('$username','$password','$nis','$kelas')";
$hasil = mysqli_query($koneksi, $query);

if ($hasil) {
    echo "data siswa berhasil disimpan <br>";
    echo "<a href='data_siswa.php'>kembali</a>";
} else {
    echo "gagal menyimpan data: " . mysqli_error($koneksi);
}
?>