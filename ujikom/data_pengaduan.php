<?php
$koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");

$sql = "select * from 'input_aspirasi'";

$query = mysql_query($koneksi, $sql);

while($data = mysqli_fetch_array($query)){ ?>
<p>lokasi <?php echo $data['lokasi']; ?> </p>
<p>keterangan <?php echo $data['keterangan']; ?> </p>
<p>status <?php echo $data['status']; ?>
<?php } ?>

?>