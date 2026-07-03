<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../../config/koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM contact ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <title>Data Contact</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>

    <div class="d-flex">

        <?php include "../includes/sidebar.php"; ?>

        <div class="container-fluid p-4">

            <div class="d-flex justify-content-between mb-4">

                <h2>Data Contact</h2>

            </div>

            <div class="card shadow">

                <div class="card-body">

                    <table class="table table-bordered table-hover">

                        <thead class="table-dark">

                            <tr>

                                <th width="60">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Subjek</th>
                                <th width="180">Aksi</th>

                            </tr>

                        </thead>

                        <tbody>

                            <?php

                            $no = 1;

                            while ($row = mysqli_fetch_assoc($data)) {

                            ?>

                                <tr>

                                    <td><?= $no++; ?></td>

                                    <td><?= $row['nama']; ?></td>

                                    <td><?= $row['email']; ?></td>

                                    <td><?= $row['subjek']; ?></td>

                                    <td>

                                        <a href="lihat.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-sm">

                                            <i class="bi bi-eye"></i> Lihat

                                        </a>

                                        <a
                                            href="hapus.php?id=<?= $row['id']; ?>"
                                            onclick="return confirm('Hapus pesan ini?')"
                                            class="btn btn-danger btn-sm">

                                            <i class="bi bi-trash"></i> Hapus

                                        </a>

                                    </td>

                                </tr>

                            <?php } ?>

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

</body>

</html>