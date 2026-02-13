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
    header("Location: data_pengaduan.php");
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
<style>
body{
    font-family: Arial;
    background: linear-gradient(to right, #3e6985, #8aa7bc, #a6bed1);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.card{
    background:#fff;
    border-radius:15px;
    padding:25px;
    width:350px;
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}

h2{
    color:#0d273d;
    text-align:center;
    margin-bottom:15px;
}

p{ font-size:14px; margin:6px 0; }

label{ font-size:14px; }

select, textarea{
    width:100%;
    padding:8px;
    border-radius:8px;
    border:1px solid #8aa7bc;
    margin:6px 0 12px;
}

textarea{ height:80px; }

.btn{
    width:100%;
    padding:10px;
    border:none;
    border-radius:10px;
    background:#3e6985;
    color:#fff;
    cursor:pointer;
}

.btn:hover{ background:#0d273d; }
</style>
<body>
    <div class="card">
    <h2>detail</h2>
    <form method="POST">
        <table border="1" cellpading="10" cellspacing="0">
            <tr>
                <td><b>id pengaduan</b></td>
                <td><?= $data['id_pelaporan'] ?></td>
            </tr>
            <tr>
                <td><b>kategori</b></td>
                <td><?= $data['ket_kategori'] ?></td>
            </tr>
            <tr>
                <td><b>lokasi</b></td>
                <td><?= $data['lokasi'] ?></td>
            </tr>
            <tr>
                <td><b>keterangan</b></td>
                <td><?= $data['keterangan'] ?></td>
            </tr>

            <tr>
                <td><b>status</b></td>
                <td>
                    <select name="status">
                        <option value="proses" <?= $data['status'] == 'proses' ? 'selected' : '' ?>>proses</option>
                        <option value="selesai" <?= $data['status'] == 'selesai' ? 'selected' : '' ?>>selesai</option>
                    </select> 
                </td>   
            </tr> 

            <tr>
                <td><b>feedback</b></td>
                <td>
                    <textarea name="feedback" rows="4" cols="40"><?= $data['feedback'] ?></textarea>
                </td>
            </tr>
        </table>
        <br>
        <button type="submit" name="simpan">simpan perubahan</button>
        <a href="admin/admin.php">kembali</a>
    </form>  
</div>      
</body>
</html>