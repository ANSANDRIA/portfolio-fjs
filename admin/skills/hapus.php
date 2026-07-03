<?php
session_start();
include "../../config/koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

$id = (int)$_GET['id'];

mysqli_query($koneksi, "DELETE FROM skills WHERE id='$id'");

echo "<script>
alert('Skill berhasil dihapus');
window.location='index.php';
</script>";
