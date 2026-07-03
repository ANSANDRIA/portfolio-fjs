<?php
session_start();
include "../../config/koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM contact WHERE id='$id'"));

if (!$data) {
    echo "<script>
    alert('Data tidak ditemukan');
    location='index.php';
    </script>";
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Detail Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header">

                <h3>Detail Pesan</h3>

            </div>

            <div class="card-body">

                <table class="table">

                    <tr>

                        <th width="180">Nama</th>

                        <td><?= $data['nama']; ?></td>

                    </tr>

                    <tr>

                        <th>Email</th>

                        <td><?= $data['email']; ?></td>

                    </tr>

                    <tr>

                        <th>Pesan</th>

                        <td><?= nl2br($data['pesan']); ?></td>

                    </tr>

                    <tr>

                        <th>Tanggal</th>

                        <td><?= $data['tanggal']; ?></td>

                    </tr>

                </table>

                <a href="index.php" class="btn btn-secondary">

                    Kembali

                </a>

            </div>

        </div>

    </div>

</body>

</html>