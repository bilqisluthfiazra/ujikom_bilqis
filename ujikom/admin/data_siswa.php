<!DOCTYPE html>
<html>
<head>
 <title>Form Data Siswa</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Form Input Data Siswa</h2>
<form action="simpan.php" method="post">
 <label>NIS</label>
 <input type="text" name="nis" required>
 <label>kelas</label>
 <input type="text" name="kelas" required>
 <label>username</label>
 <input type="text" name="username" required>
 <label>password</label>
 <input type="text" name="password" required>
 <button type="submit">Simpan</button>
</form>

<?php
include "tampil.php";
?>

</body>
</html>