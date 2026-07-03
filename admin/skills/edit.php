<?php
session_start();
include "../../config/koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

$id = $_GET['id'];

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM skills WHERE id='$id'"));

if (!$data) {
    echo "<script>
    alert('Data tidak ditemukan');
    location='index.php';
    </script>";
    exit;
}

if (isset($_POST['update'])) {

    $nama_skill = mysqli_real_escape_string($koneksi, $_POST['nama_skill']);
    $persentase = mysqli_real_escape_string($koneksi, $_POST['persentase']);

    mysqli_query($koneksi, "UPDATE skills SET
        nama_skill='$nama_skill',
        persentase='$persentase'
        WHERE id='$id'
    ");

    echo "<script>
    alert('Skill berhasil diupdate');
    location='index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Skill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header bg-warning">
                <h3>Edit Skill</h3>
            </div>

            <div class="card-body">

                <form method="POST">

                    <div class="mb-3">
                        <label>Nama Skill</label>

                        <input
                            type="text"
                            name="nama_skill"
                            class="form-control"
                            value="<?= $data['nama_skill']; ?>"
                            required>

                    </div>

                    <div class="mb-3">

                        <label>Persentase (%)</label>

                        <input
                            type="number"
                            name="persentase"
                            class="form-control"
                            min="0"
                            max="100"
                            value="<?= $data['persentase']; ?>"
                            required>

                    </div>

                    <button
                        type="submit"
                        name="update"
                        class="btn btn-warning">

                        Update

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