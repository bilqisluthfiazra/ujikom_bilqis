



<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pengaduan</title>
    <style>
        /* ===== RESET ===== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family:Monoid;
        }

        body {
        height: 100vh;
        background: linear-gradient(to right, #3e6985, #8aa7bc, #a6bed1);
        display: flex;
        justify-content: center;
        align-items: center;
        }

        /* ===== sidebar ======*/
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

        /* ===== CONTAINER ===== */
        .page {
            /* width: 100%; */
            min-height: 100vh;
            /* background-color: #A6BED1;  */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 40px;
        }

        h1 {
            color: #0d273d;
            margin-bottom: 25px;
            text-align: center;
        }

        /* ===== CARD FORM ===== */
        form {
            background-color: #ffffff;
            width: 320px;
            padding: 25px;
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        form div {
            margin-bottom: 15px;
            text-align: left;
        }

        label {
            font-size: 14px;
            color: #0D273D; /* Yankees Blue */
        }

        input, select, textarea {
            width: 100%;
            padding: 8px 10px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #8AA7BC; /* Pewter Blue */
            outline: none;
            font-size: 14px;
        }

        textarea {
            resize: none;
            height: 80px;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #3E6985; /* Teal Blue */
        }

        /* ===== BUTTON ===== */
        button  {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #3E6985; /* Teal Blue */
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }

        button a{
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 10px;
            background-color: #3E6985; /* Teal Blue */
            color: white;
            font-size: 15px;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
        }
        button a:hover {
            background-color: #0D273D; /* Yankees Blue */
            color : #a6bed1;
        }
        button:hover {
            background-color: #0D273D; /* Yankees Blue */
            color : #a6bed1;
        }
    </style>
</head>

<body>
<div id="menu-btn">&#9776;</div>
<nav id="sidebar">
    <div id="close-btn">&times;</div>
    <ul>
        <li><img src="https://i.pinimg.com/736x/97/62/6d/97626daee352cb3ecd57b7357495ffb6.jpg" class="a"></img></li>
        <li><a href="\ujikom\siswa.php">Dashboard</a></li>
        <li><a href="\ujikom\form_pengaduan.php">Form pengaduan</a></li>
        <li><a href="\ujikom\detail_pengaduan.php">Riwayat</a></li>
        <li><a href="\ujikom\login.php" style="color:red;">Logout</a></li>
    </ul>
</nav>



<div class="page">
    <h1>Forum Pengaduan Sarana Sekolah</h1>

    <form action="proses-pengaduan.php" method="POST"> 
        <div>
            <label>NIS</label>
            <input type="text" name="nis">
        </div>

        <div>
            <label>Kategori</label>
            <select name="kategori">
                <option value="">-- Pilih Kategori --</option>
                <option value="1">Lingkungan</option>
                <option value="2">Fasilitas</option>
            </select>
        </div>

        <div>
            <label>Lokasi</label>
            <input type="text" name="lokasi">
        </div>

        <div>
            <label>Keterangan</label>
            <textarea name="keterangan"></textarea>
        </div>
        <button type="submit"><a href="\ujikom\detail_pengaduan.php">Kirim</a></button>
        <button type="submit" style="margin-top: 10px;"><a href="\ujikom\siswa.php">Kembali</a></button>
        
    </form>
</div>

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