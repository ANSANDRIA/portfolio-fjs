<?php
session_start();
include "../../config/koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

if (isset($_POST['simpan'])) {

    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $persentase = mysqli_real_escape_string($koneksi, $_POST['persentase']);

    mysqli_query($koneksi, "INSERT INTO skills(nama,persentase)
    VALUES('$nama','$persentase')");

    echo "<script>
    alert('Skill berhasil ditambahkan');
    location='index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Tambah Skill</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header bg-success text-white">

                <h3>Tambah Skill</h3>

            </div>

            <div class="card-body">

                <form method="POST">

                    <div class="mb-3">

                        <label>Nama Skill</label>

                        <input
                            type="text"
                            name="nama"
                            class="form-control"
                            required>

                    </div>

                    <div class="mb-3">

                        <label>Persentase (%)</label>

                        <input
                            type="number"
                            name="persentase"
                            min="0"
                            max="100"
                            class="form-control"
                            required>

                    </div>

                    <button
                        class="btn btn-success"
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