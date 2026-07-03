<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../../config/koneksi.php";

$id = $_GET['id'];

$data = mysqli_fetch_assoc(
    mysqli_query(
        $koneksi,
        "SELECT * FROM portfolio WHERE id='$id'"
    )
);

if ($data) {

    if (
        !empty($data['gambar']) &&
        file_exists("../../assets/img/" . $data['gambar'])
    ) {
        unlink("../../assets/img/" . $data['gambar']);
    }

    mysqli_query(
        $koneksi,
        "DELETE FROM portfolio WHERE id='$id'"
    );
}

header("Location:index.php");
exit;