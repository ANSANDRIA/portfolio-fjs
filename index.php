<?php
include "config/koneksi.php";

$query = mysqli_query($koneksi, "SELECT * FROM profile LIMIT 1");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Portfolio FJS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <?php include "includes/navbar.php"; ?>

    <?php include "includes/hero.php"; ?>

    <div class="wave-divider">

        <svg xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 1440 320">

            <path fill="#ffffff"
                d="M0,224L80,218.7C160,213,320,203,480,181.3C640,160,800,128,960,144C1120,160,1280,224,1360,256L1440,288L1440,320L0,320Z">

            </path>

        </svg>

    </div>

    <?php include "includes/about.php"; ?>
    <?php include "includes/skills.php"; ?>
    <?php include "includes/portfolio.php"; ?>
    <?php include 'includes/contact.php'; ?>
    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>