

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail pengaduan</title>
</head>
<body>
    <?php
    $nis = $_POST['nis'];
    $kategori = $_POST['kategori'];
    $lokasi = $_POST['lokasi'];
    $keterangan = $_POST['keterangan'];


    echo "<h2>Pengaduan berhasil dikirim</h2>";
    echo "NIS: $nis <br>";
    echo "kategori: $kategori <br>";
    echo "Lokasi: $lokasi <br>";
    echo "Keterangan: $keterangan <br>";
    
?>
</body>
</html>