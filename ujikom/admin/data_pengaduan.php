<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
    margin: 0;
    font-family: monoid;
    min-height:100vh;
    background: linear-gradient(to right, #3e6985, #8aa7bc, #a6bed1);
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    display:flex;
    justify-content:center;
    align-items:center;
}
/* tombol menu */
#menu-btn {
    font-size: 40px;
    cursor: pointer;
    position: fixed;
    top: 20px;
    left: 20px;
    z-index: 1100;
    color: white;
    transition: opacity 0.3s ease;
}
/* sembunyikan menu saat sidebar aktif */
#menu-btn.hide {
    opacity: 0;
    pointer-events: none;
}
/* sidebar */
#sidebar {
    position: fixed;
    top: 0;
    left: -260px;
    width: 260px;
    height: 100%;
    background-color: #0d273d;
    color: white;
    transition: left 0.3s ease;
    padding: 40px 20px;
    box-sizing: border-box;
    z-index: 1000;
}
#sidebar.active {
    left: 0;
}
/* tombol close */
#close-btn {
    font-size: 40px;
    cursor: pointer;
    text-align: right;
    margin-bottom: 30px;
}
.a{
    width:50px;
    height:50px;
    margin:0px;
    padding:0px;
}
/* menu list */
#sidebar ul {
    list-style: none;
    padding: 0;
}
#sidebar ul li {
    padding: 12px 0;
}
#sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}
#sidebar ul li a:hover {
    text-decoration: underline;
}

 h2 {
            color: #0d273d;
        }
        .card {
            width: 90%;
    max-width: 1000px;
    background: #a6bed1;
    border-radius: 25px;
    padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th {
            background: #0d273d;
            color: white;
            padding: 10px;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #cdd7df;
        }
        .btn {
            padding: 6px 10px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 12px;
        }
        
</style>
<body>
<!-- tombol menu -->
<div id="menu-btn">&#9776;</div>

<!-- sidebar -->
<nav id="sidebar">
    <div id="close-btn">&times;</div>
    <ul>
        <li><img src="https://i.pinimg.com/736x/97/62/6d/97626daee352cb3ecd57b7357495ffb6.jpg" class="a"></li>
        <li><a href="../admin/admin.php">Dashboard</a></li>
        <li><a href="../admin/data_pengaduan.php">Data pengaduan</a></li>
        <li><a href="../admin/data_siswa.php">Data siswa</a></li>
        <li><a href="../admin/kategori.php">Kategori</a></li>
        <li><a href="\ujikom\logout.php" style="color:red;" onclick="return confirm('Yakin ingin logout?');">Logout</a></li>
    </ul>
</nav>

<div class="card">
<h2>Data Pengaduan Siswa</h2>
<table border="1" cellpadding="10" cellspacing="0">
<tr>
    <th>no</th> 
    <th>id kategori</th> 
    <th>nama kategori</th> 
    <th>lokasi</th>
    <th>keterangan</th> 
    <th>tanggal</th> 
    <th>status</th>
    <th>feedback</th>
    <th>Aksi</th>
</tr>

<?php 
include '../koneksi.php'; 
$no=1;

$query = mysqli_query($koneksi, "
    SELECT input_aspirasi.*, kategori.ket_kategori 
    FROM input_aspirasi 
    LEFT JOIN kategori 
    ON input_aspirasi.id_kategori = kategori.id_kategori
");

while ($data = mysqli_fetch_assoc($query)) {
?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $data['id_kategori']?></td>
    <td><?= $data['ket_kategori']?></td>
    <td><?= $data['lokasi']?></td>
    <td><?= $data['keterangan']?></td>
    <td><?= $data['tanggal']?></td>
    <td><?= $data['status']?></td>
    <td><?= $data['feedback']?></td>
    <td>
        <a href="detail_pengaduan.php?id=<?= $data['id_pelaporan'] ?>">
            <button>Detail</button>
        </a>
    </td>
</tr>
<?php } ?>
</table>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menu-btn");
    const sidebar = document.getElementById("sidebar");
    const closeBtn = document.getElementById("close-btn");

    menuBtn.addEventListener("click", function () {
        sidebar.classList.add("active");
        menuBtn.classList.add("hide");
    });

    closeBtn.addEventListener("click", function () {
        sidebar.classList.remove("active");
        menuBtn.classList.remove("hide");
    });
});
</script>
</body>
</html>