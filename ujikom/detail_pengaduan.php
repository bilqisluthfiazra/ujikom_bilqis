<?php

$nis = $_POST['nis'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

echo "NIS: $nis<br/>";
echo "Kategori: $kategori<br/>";
echo "Lokasi: $lokasi<br/>"; 
echo "Keterangan: $keterangan<br/>";

$koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");

mysqli_query($koneksi, "INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
VALUES (NULL, '$nis', '$kategori', '$lokasi', '$keterangan', 'proses', NULL);");

?>