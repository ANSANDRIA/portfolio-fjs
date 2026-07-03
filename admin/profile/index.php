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
            <h2>Data Profile</h2>
            <a href="edit.php?id=1" class="btn btn-primary">
                Edit Profile
            </a>
        </div>

        <?php

        $query = mysqli_query($koneksi, "SELECT * FROM profile LIMIT 1");
        $data = mysqli_fetch_assoc($query);

        ?>

        <div class="card shadow">

            <div class="card-body">

                <div class="row">

                    <div class="col-md-4 text-center">

                        <img
                            src="../../assets/img/<?php echo $data['foto']; ?>"
                            class="img-fluid rounded-circle border"
                            style="width:220px;height:220px;object-fit:cover;">

                    </div>

                    <div class="col-md-8">

                        <table class="table">

                            <tr>
                                <th width="180">Nama</th>
                                <td><?php echo $data['nama']; ?></td>
                            </tr>

                            <tr>
                                <th>Profesi</th>
                                <td><?php echo $data['profesi']; ?></td>
                            </tr>

                            <tr>
                                <th>Umur</th>
                                <td><?php echo $data['umur']; ?> Tahun</td>
                            </tr>

                            <tr>
                                <th>Alamat</th>
                                <td><?php echo $data['alamat']; ?></td>
                            </tr>

                            <tr>
                                <th>Email</th>
                                <td><?php echo $data['email']; ?></td>
                            </tr>

                            <tr>
                                <th>Telepon</th>
                                <td><?php echo $data['telepon']; ?></td>
                            </tr>

                            <tr>
                                <th>Deskripsi</th>
                                <td><?php echo $data['deskripsi']; ?></td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include "../includes/footer.php"; ?>