<h2>data pengaduan</h2>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>no</th> <th>id kategori</th> <th>nama kategori</th> <th>lokasi</th>
        <th>keterangan</th> <th>tanggal</th> <th>status</th>
</tr>
<?php include 'koneksi.php' ; $no=1;
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
        </tr>
        <?php } ?>
</table>


