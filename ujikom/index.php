<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sarana Pengaduan</title>

<style>









*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, sans-serif;
}

body{
    min-height:100vh;
    background:
    linear-gradient(rgba(13,39,61,0.6), rgba(13,39,61,0.6)),
    url("https://i.pinimg.com/736x/7a/e8/64/7ae864168ef9e95b7707621670dfa37e.jpg");
    
    background-size:cover;
    background-position:center;
    background-repeat:no-repeat;

    display:flex;
    justify-content:center;
    align-items:center;
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

/* Tombol */
.btn{
    margin-top:20px;
}

.btn a{
    display:block;
    background:#3e6985;
    color:white;
    padding:12px;
    border-radius:8px;
    font-size:18px;
    text-decoration:none;
    transition:0.3s;
}

.btn a:hover{
    background:#0d273d;
    color:#a6bed1;
}

</style>
</head>

<body>

<div class="container">

    <h1>SELAMAT DATANG</h1>
    <h2>di Forum Pengaduan sarana sekolah</h2>
    <h2>SMK TI MUHAMMADIYAH</h2>
    <h2>CIKAMPEK</h2>

    <!-- Gambar -->
    <img src="https://i.pinimg.com/736x/7a/e8/64/7ae864168ef9e95b7707621670dfa37e.jpg" alt="Logo">

    <!-- Tombol -->
    <div class="btn">
        <a href="/ujikom/login.php">Login</a>
    </div>

</div>

</body>
</html>
