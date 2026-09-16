<?php
include 'db.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

    $conn->query("INSERT INTO mahasiswa(nama,nim,jurusan)
                  VALUES('$nama','$nim','$jurusan')");

    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Mahasiswa</title>
<style>
body{
    background:#f4f6f9;
    font-family:Arial;
}

.form-box{
    width:400px;
    margin:50px auto;
    background:white;
    padding:25px;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

input{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
}

button{
    width:100%;
    padding:10px;
    background:#0d6efd;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

button:hover{
    background:#0b5ed7;
}

a{
    text-decoration:none;
}
</style>
</head>
<body>

<div class="form-box">
    <h2>Tambah Mahasiswa</h2>
    <br>

    <form method="POST">
        Nama
        <input type="text" name="nama" required>

        NIM
        <input type="text" name="nim" required>

        Jurusan
        <input type="text" name="jurusan" required>

        <button type="submit">Simpan Data</button>
    </form>

    <br>
    <a href="index.php">← Kembali</a>
</div>

</body>
</html>
