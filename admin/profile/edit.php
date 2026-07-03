<?php
session_start();
include "../../config/koneksi.php";

if (!isset($_SESSION['login'])) {
    header("Location: ../login.php");
    exit;
}

$data = mysqli_fetch_assoc(mysqli_query($koneksi, "SELECT * FROM profile LIMIT 1"));

if (isset($_POST['update'])) {

    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $profesi = mysqli_real_escape_string($koneksi, $_POST['profesi']);
    $umur = mysqli_real_escape_string($koneksi, $_POST['umur']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $telepon = mysqli_real_escape_string($koneksi, $_POST['telepon']);
    $deskripsi = mysqli_real_escape_string($koneksi, $_POST['deskripsi']);

    $fotoLama = $_POST['foto_lama'];

    if ($_FILES['foto']['name'] != "") {

        $namaFile = time() . "_" . $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmp, "../../uploads/" . $namaFile);

        if ($fotoLama != "" && file_exists("../../uploads/" . $fotoLama)) {
            unlink("../../uploads/" . $fotoLama);
        }
    } else {

        $namaFile = $fotoLama;
    }

    mysqli_query($koneksi, "UPDATE profile SET

        nama='$nama',
        profesi='$profesi',
        umur='$umur',
        alamat='$alamat',
        email='$email',
        telepon='$telepon',
        deskripsi='$deskripsi',
        foto='$namaFile'

    WHERE id=" . $data['id']);

    echo "<script>
    alert('Profile berhasil diupdate');
    location='index.php';
    </script>";
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Edit Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container mt-5">

        <div class="card shadow">

            <div class="card-header bg-primary text-white">

                <h3>Edit Profile</h3>

            </div>

            <div class="card-body">

                <form method="POST" enctype="multipart/form-data">

                    <input type="hidden" name="foto_lama" value="<?= $data['foto']; ?>">

                    <div class="mb-3">

                        <label>Nama</label>

                        <input type="text" name="nama" class="form-control" value="<?= $data['nama']; ?>" required>

                    </div>

                    <div class="mb-3">

                        <label>Profesi</label>

                        <input type="text" name="profesi" class="form-control" value="<?= $data['profesi']; ?>" required>

                    </div>

                    <div class="mb-3">

                        <label>Umur</label>

                        <input type="number" name="umur" class="form-control" value="<?= $data['umur']; ?>" required>

                    </div>

                    <div class="mb-3">

                        <label>Alamat</label>

                        <textarea name="alamat" class="form-control" rows="3"><?= $data['alamat']; ?></textarea>

                    </div>

                    <div class="mb-3">

                        <label>Email</label>

                        <input type="email" name="email" class="form-control" value="<?= $data['email']; ?>">

                    </div>

                    <div class="mb-3">

                        <label>Telepon</label>

                        <input type="text" name="telepon" class="form-control" value="<?= $data['telepon']; ?>">

                    </div>

                    <div class="mb-3">

                        <label>Deskripsi</label>

                        <textarea name="deskripsi" class="form-control" rows="5"><?= $data['deskripsi']; ?></textarea>

                    </div>

                    <div class="mb-3">

                        <label>Foto</label>

                        <br>

                        <?php if ($data['foto'] != "") { ?>

                            <img src="../../uploads/<?= $data['foto']; ?>" width="150" class="mb-3 img-thumbnail">

                        <?php } ?>

                        <input type="file" name="foto" class="form-control">

                    </div>

                    <button class="btn btn-success" name="update">

                        Simpan Perubahan

                    </button>

                    <a href="index.php" class="btn btn-secondary">

                        Kembali

                    </a>

                </form>

            </div>

        </div>

    </div>

</body>

</html>