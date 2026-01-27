
<div class="container">
<h2>Detail Pengaduan</h2>

<form method="post">
Status:
<select name="status">
  <option>Diproses</option>
  <option>Selesai</option>
</select><br><br>

Tanggapan:<br>
<textarea name="tanggapan"><?= $data['tanggapan'] ?></textarea><br><br>

<button name="simpan">Simpan</button>
</form>
</div>
