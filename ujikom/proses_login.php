<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
$data = mysqli_fetch_assoc($query);

if($data)
{
    $_SESSION['username'] = $data['username'];
    $_SESSION['password'] = $data['password'];

    if($data['role'] == 'Admin')
    {
        header("Location:admin.php");
    }
    elseif($data['role'] == 'Siswa')
    {
        header("Location:siswa.php");
    }
}
else
{
    echo "Login Gagal";
}
?>
