<?php
$nis = $_POST['nis'];
$kategori = $_POST['kategori'];
$lokasi = $_POST['lokasi'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];


echo "<script>
    alert('pengaduan anda berhasil dikirim');
    window.location='data_aspirasi.php';
</script>";
// echo "NIS: $nis <br>";
// echo "kategori: $kategori <br>";
// echo "Lokasi: $lokasi <br>";
// echo "Keterangan: $keterangan <br>";

$koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");
mysqli_query($koneksi,"INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
VALUES (NULL, '$nis','$kategori','$lokasi', '$keterangan', 'menunggu', NULL)");
?>

