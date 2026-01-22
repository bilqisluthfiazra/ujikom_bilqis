


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sarana Pengaduan</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

/* Background */
body {
    background: #CDD7DF; /* Columbia Blue */
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

/* Kotak utama */
body > center > div {
    background: #8AA7BC; /* Pewter Blue */
    padding: 30px;
    width: 380px;
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* Judul */
h1 {
    color: #0D273D; /* Yankees Blue */
    margin-bottom: 10px;
    font-size: 20px;
}

/* Menu */
.a {
    margin-top: 20px;
}

/* Tombol */
.b {
    margin: 10px 0;
}

.b a {
    display: block;
    text-decoration: none;
    background: #3E6985; /* Teal Blue */
    color: white;
    padding: 12px;
    border-radius: 6px;
    font-size: 15px;
}

/* Hover */
.b a:hover {
    background: #0D273D;
}

/* Logout */
.b a[style] {
    background: #A6BED1;
    color: #0D273D;
}
    </style>
</head>
<body>
    <center>
    <div>
        <h1>SELAMAT DATANG</h1>
        <h1>di Forum Pengaduan</h1>
        <h1>SMK TI MUHAMMADIYAH CIKAMPEK</h1>

        <div class="a">
            <div class="b">
                <a href="\ujikom\form_pengaduan.php">Form Pengaduan</a>
            </div>
            <div class="b">
                <a href="\ujikom\cari_pengaduan.php">Cari Pengaduan</a>
            </div>
            <div class="b">
                <a href="\ujikom\login.php" style="color:red";>logout</a>
            </div>
        </div>
    </div>
    </center>
</body>
</html>