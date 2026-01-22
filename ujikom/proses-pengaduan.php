
<html lang="en">
<body>
    <form action="detail_pengaduan.php">
    <?php
    $nis = $_POST['nis'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];

    $koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");
    mysqli_query($koneksi,"INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
    VALUES (NULL, '$nis','$kategori','$lokasi', '$keterangan', 'menunggu', NULL)");
    ?>
    </form>
</body>
</html>
