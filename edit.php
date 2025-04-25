<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<?php
include "db.php";
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM kunjungan WHERE id=$id");
$row = $result->fetch_assoc();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $tanggal = $_POST['tanggal'];
    $museum = $_POST['museum'];
    $kesan = $_POST['kesan'];
    $conn->query("UPDATE kunjungan SET nama='$nama', tanggal='$tanggal', museum='$museum', kesan='$kesan' WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Data</title></head>
<body>
<h2>Edit Kunjungan</h2>
<form method="post">
    <input name="nama" value="<?= $row['nama'] ?>" required><br>
    <input name="tanggal" type="date" value="<?= $row['tanggal'] ?>" required><br>
    <input name="museum" value="<?= $row['museum'] ?>" required><br>
    <textarea name="kesan"><?= $row['kesan'] ?></textarea><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
