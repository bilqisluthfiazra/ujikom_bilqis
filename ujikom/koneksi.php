<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");

if (!$koneksi) {
    die("koneksi gagal: " . mysqli_connect_error());
}
?>
