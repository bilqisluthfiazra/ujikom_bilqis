<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pengaduan</title>
    <link rel="stylesheet" href="style.css">
    <style>
    </style>
</head>
<body>
<!-- <nav id="sidebar">
    <div id="close-btn">&times;</div>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#menu">Menu</a></li>
      <li><a href="#about">About Us</a></li>
      <li><a href="#kontak">Contact Us</a></li>
      <li><a href="#tutor">Panduan</a></li>
      <li><a href="#keranjang_section">Keranjang</a></li>
      <li><a href="#review">Review Customer</a></li>
    </ul>
  </nav> -->



<center>
    <h1>Forum Pengaduan Sarana Sekolah</h1>
<form action="detail_pengaduan.php" method="POST"> 
<div>
    <label for="">nis</label> <br />
    <input type="text" name="nis" />
</div>

<div>
    <label>kategori</label><br>
    <select name="kategori">
    <option value="">-- Pilih Kategori --</option>
    <option value="1">Lingkungan</option>
    <option value="2">Fasilitas</option>
</select>
</div>

<div>
    <label for="">lokasi</label> <br />
    <input type="text" name="lokasi" />
</div>

<div>
    <label for="">keterangan</label> <br />
    <textarea name="keterangan"></textarea>
</div>
<button> kirim</button>
</form></center>
</body>
</html>