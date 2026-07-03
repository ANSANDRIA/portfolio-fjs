<?php

/** @var array $data */

?>

<!-- HERO SECTION -->

<section id="hero" class="hero">

    <div class="container">

        <div class="row align-items-center gy-5">

            <!-- Left -->
            <div class="col-lg-6">

                <span class="text-primary fw-bold fs-5">
                    Hi, I'm 👋
                </span>

                <h1 class="display-4 fw-bold mt-3">
                    <?= strtoupper($data['nama']); ?>
                </h1>

                <h3 class="mt-3">
                    <span class="text-primary">
                        <?= $data['profesi']; ?>
                    </span>
                    <span class="text-dark">
                        | ASN | Student
                    </span>
                </h3>

                <p class="lead mt-4">
                    <?= $data['deskripsi']; ?>
                </p>

                <div class="d-flex flex-wrap gap-3 mt-4">

                    <a href="#"
                        class="btn btn-primary btn-lg rounded-pill px-4">

                        <i class="bi bi-download"></i>
                        Download CV

                    </a>

                    <a href="#contact"
                        class="btn btn-outline-dark btn-lg rounded-pill px-4">

                        <i class="bi bi-envelope"></i>
                        Contact Me

                    </a>

                </div>

            </div>

            <!-- Right -->
            <div class="col-lg-6 text-center">

                <img src="assets/img/profile.jpg"
                    alt="Profile"
                    class="profile img-fluid">

            </div>

        </div>

    </div>

</section>