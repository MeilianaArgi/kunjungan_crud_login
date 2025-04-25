<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<?php
include "db.php";
$result = $conn->query("SELECT * FROM kunjungan");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Kunjungan Museum</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Kunjungan Museum</h1>
    <a href="tambah.php">Tambah Data</a> | <a href="logout.php">Logout</a>
    <table border="1" cellpadding="8">
        <tr><th>No</th><th>Nama</th><th>Tanggal</th><th>Museum</th><th>Kesan</th><th>Aksi</th></tr>
        <?php $no=1; while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['tanggal'] ?></td>
            <td><?= $row['museum'] ?></td>
            <td><?= $row['kesan'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
