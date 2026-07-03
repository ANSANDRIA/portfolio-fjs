<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../../config/koneksi.php";
include "../includes/header.php";
?>

<div class="d-flex">

    <?php include "../includes/sidebar.php"; ?>

    <div class="container-fluid p-4">

        <div class="d-flex justify-content-between align-items-center mb-3">

            <h2>Data Skills</h2>

            <a href="tambah.php" class="btn btn-success">
                Tambah Skill
            </a>

        </div>

        <div class="card shadow">

            <div class="card-body">

                <table class="table table-bordered table-striped">

                    <thead class="table-dark">

                        <tr>

                            <th width="70">No</th>
                            <th>Nama Skill</th>
                            <th width="150">Persentase</th>
                            <th width="180">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        $no = 1;

                        $query = mysqli_query($koneksi, "SELECT * FROM skills");

                        while ($row = mysqli_fetch_assoc($query)) {

                        ?>

                            <tr>

                                <td><?= $no++; ?></td>

                                <td><?= $row['nama_skill']; ?></td>

                                <td><?= $row['persentase']; ?>%</td>

                                <td>

                                    <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">

                                        Edit

                                    </a>

                                    <a
                                        href="hapus.php?id=<?= $row['id']; ?>"
                                        class="btn btn-danger btn-sm"
                                        onclick="return confirm('Hapus data ini?')">

                                        Hapus

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

<?php include "../includes/footer.php"; ?>