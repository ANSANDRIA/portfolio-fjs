<?php

/** @var array $data */

?>

<section id="about" class="py-5 bg-white">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="section-title display-4 fw-bold">

                About Me

            </h2>

            <p class="text-muted">

                Know Me Better

            </p>

        </div>

        <div class="row g-4">

            <!-- Personal Information -->

            <div class="col-lg-6">

                <div class="card shadow-lg border-0 rounded-4 h-100">

                    <div class="card-body p-4">

                        <h4 class="mb-4 text-primary">

                            <i class="bi bi-person-circle"></i>

                            Personal Information

                        </h4>

                        <div class="mb-4">

                            <small class="text-muted">

                                <i class="bi bi-person-fill"></i>

                                Nama

                            </small>

                            <h5><?= $data['nama']; ?></h5>

                        </div>

                        <div class="mb-4">

                            <small class="text-muted">

                                <i class="bi bi-briefcase-fill"></i>

                                Profesi

                            </small>

                            <h5><?= $data['profesi']; ?></h5>

                        </div>

                        <div>

                            <small class="text-muted">

                                <i class="bi bi-cake2-fill"></i>

                                Umur

                            </small>

                            <h5><?= $data['umur']; ?> Tahun</h5>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Contact Information -->

            <div class="col-lg-6">

                <div class="card shadow-lg border-0 rounded-4 h-100">

                    <div class="card-body p-4">

                        <h4 class="mb-4 text-success">

                            <i class="bi bi-envelope-fill"></i>

                            Contact Information

                        </h4>

                        <div class="mb-4">

                            <small class="text-muted">

                                <i class="bi bi-geo-alt-fill"></i>

                                Alamat

                            </small>

                            <h6><?= $data['alamat']; ?></h6>

                        </div>

                        <div class="mb-4">

                            <small class="text-muted">

                                <i class="bi bi-envelope-fill"></i>

                                Email

                            </small>

                            <h6><?= $data['email']; ?></h6>

                        </div>

                        <div>

                            <small class="text-muted">

                                <i class="bi bi-telephone-fill"></i>

                                Telepon

                            </small>

                            <h6><?= $data['telepon']; ?></h6>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>