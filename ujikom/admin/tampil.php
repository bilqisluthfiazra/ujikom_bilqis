<?php
include '../koneksi.php';
$query = "SELECT * FROM user WHERE role ='Siswa'";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>

<body>
<center>
    <h2>Data Siswa</h2>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>NIS</th>
            <th>username</th>
            <th>kelas</th>
            <th>aksi</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['nis']; ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['kelas']; ?></td>
            <td>
                <a href="edit.php?nis=<?php echo $row['nis']; ?>">edit</a>
                <a href="delete.php?nis=<?php echo $row['nis']; ?>"
                onclick="return confirm('yakin ini menghapus data ini?')">
                delete</a>
</td>
        </tr>
        <?php } ?>



    </table>
</center>
</body>
</html>
