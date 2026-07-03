<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../../config/koneksi.php";

$data = mysqli_query($koneksi, "SELECT * FROM portfolio ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Data Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h2>Data Portfolio</h2>

            <a href="tambah.php" class="btn btn-success">
                <i class="fa fa-plus"></i> Tambah Portfolio
            </a>

        </div>

        <div class="card shadow">

            <div class="card-body">

                <table class="table table-bordered table-hover align-middle">

                    <thead class="table-dark">

                        <tr>

                            <th width="60">No</th>

                            <th width="180">Gambar</th>

                            <th>Judul</th>

                            <th>Kategori</th>

                            <th>Deskripsi</th>

                            <th width="170">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $no = 1;

                        while ($row = mysqli_fetch_assoc($data)) :

                        ?>

                            <tr>

                                <td><?= $no++; ?></td>

                                <td>

                                    <img
                                        src="../../assets/img/<?= $row['gambar']; ?>"
                                        width="160"
                                        class="img-thumbnail">

                                </td>

                                <td>

                                    <?= htmlspecialchars($row['judul']); ?>

                                </td>

                                <td>

                                    <span class="badge bg-primary">

                                        <?= htmlspecialchars($row['kategori']); ?>

                                    </span>

                                </td>

                                <td>

                                    <?= htmlspecialchars($row['deskripsi']); ?>

                                </td>

                                <td>

                                    <a
                                        href="edit.php?id=<?= $row['id']; ?>"
                                        class="btn btn-warning btn-sm">

                                        <i class="fa fa-edit"></i>

                                        Edit

                                    </a>

                                    <a
                                        href="hapus.php?id=<?= $row['id']; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">

                                        <i class="fa fa-trash"></i>

                                        Hapus

                                    </a>

                                </td>

                            </tr>

                        <?php endwhile; ?>

                    </tbody>

                </table>

            </div>

        </div>

        <div class="mt-3">

            <a href="../dashboard.php" class="btn btn-secondary">

                <i class="fa fa-arrow-left"></i>

                Kembali ke Dashboard

            </a>

        </div>

    </div>

</body>

</html>