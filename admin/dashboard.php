<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

include '../config/koneksi.php';

$profile   = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM profile"));
$skill     = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM skills"));
$portfolio = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM portfolio"));
$contact   = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM contact"));

include 'includes/header.php';
include 'includes/sidebar.php';
?>

<div class="container-fluid p-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="fw-bold mb-1">
                Dashboard Admin
            </h2>

            <p class="text-muted">
                Selamat datang,
                <strong><?= $_SESSION['username']; ?></strong>
            </p>

        </div>

        <a href="logout.php" class="btn btn-danger">

            Logout

        </a>

    </div>

    <div class="row">

        <div class="col-md-3 mb-4">

            <div class="card text-bg-primary shadow border-0">

                <div class="card-body">

                    <h5>Profile</h5>

                    <h1><?= $profile; ?></h1>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card text-bg-success shadow border-0">

                <div class="card-body">

                    <h5>Skills</h5>

                    <h1><?= $skill; ?></h1>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card text-bg-warning shadow border-0">

                <div class="card-body">

                    <h5>Portfolio</h5>

                    <h1><?= $portfolio; ?></h1>

                </div>

            </div>

        </div>

        <div class="col-md-3 mb-4">

            <div class="card text-bg-danger shadow border-0">

                <div class="card-body">

                    <h5>Contact</h5>

                    <h1><?= $contact; ?></h1>

                </div>

            </div>

        </div>

    </div>

    <div class="card shadow border-0">

        <div class="card-body">

            <h4 class="mb-3">
                Quick Menu
            </h4>

            <div class="row">

                <div class="col-md-3 mb-3">

                    <a href="profile/index.php" class="btn btn-primary w-100 p-4">

                        👤<br><br>

                        Kelola Profile

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="skills/index.php" class="btn btn-success w-100 p-4">

                        💻<br><br>

                        Kelola Skills

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="portfolio/index.php" class="btn btn-warning w-100 p-4">

                        📂<br><br>

                        Kelola Portfolio

                    </a>

                </div>

                <div class="col-md-3 mb-3">

                    <a href="contact/index.php" class="btn btn-danger w-100 p-4">

                        📨<br><br>

                        Lihat Contact

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

<?php include 'includes/footer.php'; ?>