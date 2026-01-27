<?php include "../koneksi.php"; ?>
<link rel="stylesheet" href="../style.css">

<div class="container">
<h2>Data Pengaduan</h2>

<table>
<tr>
<th>Nama</th>
<th>Fasilitas</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM pengaduan");
while ($d = mysqli_fetch_array($data)) {
?>
<tr>
<td><?= $d['nama'] ?></td>
<td><?= $d['fasilitas'] ?></td>
<td><?= $d['status'] ?></td>
<td>
<a href="detail_pengaduan.php?id=<?= $d['id'] ?>">Detail</a>
</td>
</tr>
<?php } ?>
</table>
</div>
