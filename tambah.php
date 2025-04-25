<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<?php
include "db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $museum = $_POST['museum'];
    $kesan = $_POST['kesan'];
    $conn->query("INSERT INTO kunjungan (nama, tanggal, museum, kesan) VALUES ('$nama', '$tanggal', '$museum', '$kesan')");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Tambah Data</title></head>
<body>
<h2>Tambah Kunjungan</h2>
<form method="post">
    <input name="nama" placeholder="Nama" required><br>
    <input name="tanggal" type="date" required><br>
    <input name="museum" placeholder="Museum" required><br>
    <textarea name="kesan" placeholder="Kesan"></textarea><br>
    <button type="submit">Simpan</button>
</form>
</body>
</html>
