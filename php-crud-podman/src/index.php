<?php
include 'db.php';
$result = $conn->query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Data Mahasiswa</title>

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, sans-serif;
}

body{
    background:#f4f6f9;
    padding:40px;
}

.container{
    max-width:1000px;
    margin:auto;
}

.card{
    background:white;
    border-radius:12px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
    padding:25px;
}

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}

h1{
    color:#333;
}

.btn{
    text-decoration:none;
    background:#0d6efd;
    color:white;
    padding:10px 18px;
    border-radius:8px;
    font-weight:bold;
}

.btn:hover{
    background:#0b5ed7;
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#0d6efd;
    color:white;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #ddd;
}

tr:hover{
    background:#f8f9fa;
}

.edit{
    background:#ffc107;
    color:black;
    padding:6px 10px;
    text-decoration:none;
    border-radius:5px;
}

.delete{
    background:#dc3545;
    color:white;
    padding:6px 10px;
    text-decoration:none;
    border-radius:5px;
}

.edit:hover{
    background:#e0a800;
}

.delete:hover{
    background:#c82333;
}

.empty{
    text-align:center;
    color:#888;
    padding:20px;
}
</style>
</head>

<body>

<div class="container">
    <div class="card">

        <div class="header">
            <h1>📚 Data Mahasiswa</h1>
            <a href="add.php" class="btn">+ Tambah Mahasiswa</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

            <?php if($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row['id']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                    <td>
    <a class="edit" href="edit.php?id=<?= $row['id']; ?>">
	✏ Edit

    <a class="delete"
       href="delete.php?id=<?= $row['id']; ?>"
       onclick="return ta ini?')">
        🗑 Hapus
    </a>
</td>
               		 </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="empty">
                        Belum ada data mahasiswa
                    </td>
                </tr>
            <?php endif; ?>

            </tbody>
        </table>

    </div>
</div>

</body>
</html>
