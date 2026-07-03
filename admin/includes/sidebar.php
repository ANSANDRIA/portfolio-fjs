<?php
$current = basename($_SERVER['PHP_SELF']);

if ($current == "dashboard.php") {
    $base = "";
} else {
    $base = "../";
}
?>

<div class="bg-dark text-white p-3" style="width:260px;min-height:100vh;">

    <h3 class="mb-4">Portfolio FJS</h3>

    <ul class="nav flex-column">

        <li class="nav-item mb-2">
            <a href="<?= $base ?>dashboard.php" class="nav-link text-white">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>
        </li>

        <li class="nav-item mb-2">
            <a href="<?= $base ?>profile/index.php" class="nav-link text-white">
                <i class="bi bi-person-circle"></i>
                Profile
            </a>
        </li>

        <li class="nav-item mb-2">
            <a href="<?= $base ?>skills/index.php" class="nav-link text-white">
                <i class="bi bi-bar-chart-fill"></i>
                Skills
            </a>
        </li>

        <li class="nav-item mb-2">
            <a href="<?= $base ?>portfolio/index.php" class="nav-link text-white">
                <i class="bi bi-images"></i>
                Portfolio
            </a>
        </li>

        <li class="nav-item mb-2">
            <a href="<?= $base ?>contact/index.php" class="nav-link text-white">
                <i class="bi bi-envelope-fill"></i>
                Contact
            </a>
        </li>

        <hr>

        <li class="nav-item">
            <a href="<?= $base ?>logout.php" class="nav-link text-danger">
                <i class="bi bi-box-arrow-right"></i>
                Logout
            </a>
        </li>

    </ul>

</div>