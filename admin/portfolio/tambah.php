<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

include "../../config/koneksi.php";

if (isset($_POST['simpan'])) {

    $judul = mysqli_real_escape_string($koneksi, $_POST['judul']);
    $kategori = mysqli_real_escape_string($koneksi, $_POST['kategori']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if ($gambar != "") {

        $namaBaru = time() . "_" . $gambar;

        move_uploaded_file(
            $tmp,
            "../../assets/img/" . $namaBaru
        );

        mysqli_query($koneksi, "
            INSERT INTO portfolio
            (judul,kategori,deskripsi,gambar)
            VALUES
            (
                '$judul',
                '$kategori',
                '$deskripsi',
                '$namaBaru'
            )
        ");
    } else {

        mysqli_query($koneksi, "
            INSERT INTO portfolio
            (judul,kategori,deskripsi)
            VALUES
            (
                '$judul',
                '$kategori',
                '$deskripsi'
            )
        ");
    }

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Tambah Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header">

                <h3>Tambah Portfolio</h3>

            </div>

            <div class="card-body">

                <form method="POST" enctype="multipart/form-data">

                    <div class="mb-3">

                        <label>Judul</label>

                        <input
                            type="text"
                            name="judul"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label>Kategori</label>

                        <input
                            type="text"
                            name="kategori"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label>Deskripsi</label>

                        <textarea
                            name="deskripsi"
                            class="form-control"
                            rows="5"
                            required></textarea>

                    </div>

                    <div class="mb-3">

                        <label>Gambar</label>

                        <input
                            type="file"
                            name="gambar"
                            class="form-control">

                    </div>

                    <button
                        class="btn btn-primary"
                        name="simpan">

                        Simpan

                    </button>

                    <a
                        href="index.php"
                        class="btn btn-secondary">

                        Kembali

                    </a>

                </form>

            </div>

        </div>

    </div>

</body>

</html>