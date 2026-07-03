<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location:../login.php");
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

if (isset($_POST['update'])) {

    $judul = $_POST['judul'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];

    $gambarLama = $data['gambar'];

    if ($_FILES['gambar']['name'] != "") {

        if (file_exists("../../assets/img/" . $gambarLama)) {
            unlink("../../assets/img/" . $gambarLama);
        }

        $namaBaru = time() . "_" . $_FILES['gambar']['name'];

        move_uploaded_file(
            $_FILES['gambar']['tmp_name'],
            "../../assets/img/" . $namaBaru
        );

        $gambar = $namaBaru;
    } else {

        $gambar = $gambarLama;
    }

    mysqli_query($koneksi, "

UPDATE portfolio SET

judul='$judul',

kategori='$kategori',

deskripsi='$deskripsi',

gambar='$gambar'

WHERE id='$id'

");

    header("Location:index.php");
}

?>

<!DOCTYPE html>

<html>

<head>

    <title>Edit Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header">

                <h3>Edit Portfolio</h3>

            </div>

            <div class="card-body">

                <form method="POST" enctype="multipart/form-data">

                    <div class="mb-3">

                        <label>Judul</label>

                        <input

                            class="form-control"

                            name="judul"

                            value="<?= $data['judul']; ?>"

                            required>

                    </div>

                    <div class="mb-3">

                        <label>Kategori</label>

                        <input

                            class="form-control"

                            name="kategori"

                            value="<?= $data['kategori']; ?>"

                            required>

                    </div>

                    <div class="mb-3">

                        <label>Deskripsi</label>

                        <textarea

                            class="form-control"

                            rows="5"

                            name="deskripsi"

                            required><?= $data['deskripsi']; ?></textarea>

                    </div>

                    <div class="mb-3">

                        <label>Gambar Sekarang</label>

                        <br>

                        <img

                            src="../../assets/img/<?= $data['gambar']; ?>"

                            width="250"

                            class="img-thumbnail">

                    </div>

                    <div class="mb-3">

                        <label>Ganti Gambar</label>

                        <input

                            type="file"

                            name="gambar"

                            class="form-control">

                    </div>

                    <button

                        class="btn btn-success"

                        name="update">

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