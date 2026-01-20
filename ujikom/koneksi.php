<?php

    $koneksi = mysqli_connect("localhost","root","","ujikom_bilqis");

    mysqli_query($koneksi,"INSERT INTO `input_aspirasi` (`id_pelaporan`, `nis`, `id_kategori`, `lokasi`, `keterangan`, `status`, `feedback`) 
    VALUES (NULL, '001', '1', 'tu', 'jebol', 'menunggu', NULL)");

    // mysqli_query($koneksi, "DELETE FROM `input_aspirasi` where id-pelaporan = 2");


?>
