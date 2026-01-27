<?php include "../koneksi.php"; ?>
<link rel="stylesheet" href="../style.css">

<div class="container">
<h2>Cari Pengaduan</h2>

<form method="get">
<input type="text" name="cari" placeholder="Cari fasilitas">
<button>Cari</button>
</form>

<?php
if (isset($_GET['cari'])) {
  $cari = $_GET['cari'];
  $data = mysqli_query($conn, "SELECT * FROM pengaduan WHERE fasilitas LIKE '%$cari%'");
  while ($d = mysqli_fetch_array($data)) {
    echo $d['fasilitas']." - ".$d['status']."<br>";
  }
}
?>
</div>
