<?php
include '../koneksi.php';

if(!isset($_GET['id'])) {
    echo "id pengaduan tidak ditemukan";
    exit;
}

$id = $_GET['id'];

if (isset($_POST['simpan'])) {
    $status = $_POST['status'];
    $feedback = $_POST['feedback'];

    mysqli_query($koneksi, "UPDATE input_aspirasi SET status='$status', feedback='$feedback' WHERE id_pelaporan='$id'");

    header("Location : admin/admin.php");
    exit;
}

$query = mysqli_query($koneksi, "SELECT input_aspirasi.*, kategori.ket_kategori FROM input_aspirasi LEFT JOIN kategori ON input_aspirasi.id_kategori = kategori.id_kategori WHERE input_aspirasi.id_pelaporan = '$id'");

$data = mysqli_fetch_assoc($query);

if (!$data) {
    echo "data pengaduan tidak ditemukan";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
</head>
<body>
    <h2>datefmt_is_lenient<form method="POST">
        <table border="1" cellpading="10" cellspacing="0">
            <td><b>
</body>
</html>