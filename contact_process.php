<?php

include 'config/koneksi.php';

$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$pesan = mysqli_real_escape_string($koneksi, $_POST['pesan']);

mysqli_query($koneksi, "
INSERT INTO contact
(nama, email, pesan)
VALUES
('$nama', '$email', '$pesan')
");

echo "<script>
alert('Pesan berhasil dikirim.');
window.location='index.php#contact';
</script>";
