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
$conn->query("DELETE FROM kunjungan WHERE id=$id");
header("Location: index.php");
?>
