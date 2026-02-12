
<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    if (password_verify($password, $data['password'])) {

        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['nis'] = $data['nis'];


        $role = trim(strtolower($data['role']));

if ($role === "admin") {
    header("Location: admin/admin.php");
    exit;
} elseif ($role === "siswa") {
    header("Location: siswa.php");
    exit;
} else {
    echo "Role tidak valid di database!";
    exit;
}


    } else {
        echo "<script>
    alert('password salah');
    window.location='login.php';
</script>";
    }
} else {
    echo "<script>
    alert('username tidak ditemukan');
    window.location='login.php';
</script>";
}
?>