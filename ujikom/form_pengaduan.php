



<!DOCTYPE html>
<html>
<head>
    <title>Halaman Pengaduan</title>
    <style>
        /* ===== RESET ===== */
        * {
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #A6BED1; /* Pastel Blue */
        }

        /* ===== CONTAINER ===== */
        .page {
            width: 100%;
            min-height: 100vh;
            background-color: #A6BED1; /* Pastel Blue */
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 40px;
        }

        h1 {
            color: #D32F2F;
            margin-bottom: 25px;
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
        <button type="submit" style="margin-top: 10px;"><a href="\ujikom\index.php">Kembali</a></button>
        
    </form>
</div>
</body>
</html>