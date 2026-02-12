
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard Admin</title>

<style>
body {
    margin: 0;
    font-family: monoid;
    min-height:100vh;
    background: linear-gradient(to right, #3e6985, #8aa7bc, #a6bed1);
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    display:flex;
    justify-content:center;
    align-items:center;
}
/* tombol menu */
#menu-btn {
    font-size: 40px;
    cursor: pointer;
    position: fixed;
    top: 20px;
    left: 20px;
    z-index: 1100;
    color: white;
    transition: opacity 0.3s ease;
}
/* sembunyikan menu saat sidebar aktif */
#menu-btn.hide {
    opacity: 0;
    pointer-events: none;
}
/* sidebar */
#sidebar {
    position: fixed;
    top: 0;
    left: -260px;
    width: 260px;
    height: 100%;
    background-color: #0d273d;
    color: white;
    transition: left 0.3s ease;
    padding: 40px 20px;
    box-sizing: border-box;
    z-index: 1000;
}
#sidebar.active {
    left: 0;
}
/* tombol close */
#close-btn {
    font-size: 40px;
    cursor: pointer;
    text-align: right;
    margin-bottom: 30px;
}
.a{
    width:50px;
    height:50px;
    margin:0px;
    padding:0px;
}
/* menu list */
#sidebar ul {
    list-style: none;
    padding: 0;
}
#sidebar ul li {
    padding: 12px 0;
}
#sidebar ul li a {
    color: white;
    text-decoration: none;
    font-size: 18px;
}
#sidebar ul li a:hover {
    text-decoration: underline;
}
/* Card utama */
.container{
    background:#ffffff;
    width:400px;
    padding:30px 25px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 8px 20px rgba(0,0,0,0.2);
}
/* Judul */
.container h1{
    color:#0d273d;
    margin-bottom:8px;
}
.container h2{
    color:#3e6985;
    margin-bottom:15px;
}
/* Gambar */
.container img{
    width:120px;
    margin:15px 0;
}
</style>
</head>

<body>

<div class="container">
    <h1>SELAMAT DATANG</h1>
    <h1>" Admin "</h1>
    <h2>di Forum Pengaduan Sarana Sekolah</h2>

    <img src="https://i.pinimg.com/736x/7a/e8/64/7ae864168ef9e95b7707621670dfa37e.jpg" alt="Logo">
    <h2>SMK TI MUHAMMADIYAH</h2>
    <h2>CIKAMPEK</h2>
</div>

<!-- tombol menu -->
<div id="menu-btn">&#9776;</div>

<!-- sidebar -->
<nav id="sidebar">
    <div id="close-btn">&times;</div>
    <ul>
        <li><img src="https://i.pinimg.com/736x/97/62/6d/97626daee352cb3ecd57b7357495ffb6.jpg" class="a"></li>
        <li><a href="../admin/admin.php">Dashboard</a></li>
        <li><a href="../admin/data_pengaduan.php">Data pengaduan</a></li>
        <li><a href="../admin/data_siswa.php">Data siswa</a></li>
        <li><a href="../admin/kategori.php">Kategori</a></li>
        <li><a href="\ujikom\logout.php" style="color:red;" onclick="return confirm('Yakin ingin logout?');">Logout</a></li>
    </ul>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const menuBtn = document.getElementById("menu-btn");
    const sidebar = document.getElementById("sidebar");
    const closeBtn = document.getElementById("close-btn");

    menuBtn.addEventListener("click", function () {
        sidebar.classList.add("active");
        menuBtn.classList.add("hide");
    });

    closeBtn.addEventListener("click", function () {
        sidebar.classList.remove("active");
        menuBtn.classList.remove("hide");
    });
});
</script>

</body>
</html>