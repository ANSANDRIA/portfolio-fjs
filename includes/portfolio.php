<!-- ==========================
     PORTFOLIO
========================== -->

<section id="portfolio" class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="section-title display-4 fw-bold">
                My Portfolio
            </h2>

            <div class="title-line"></div>

            <p class="text-muted">
                Some of my recent projects
            </p>
        </div>

        <?php

        $queryPortfolio = mysqli_query($koneksi, "SELECT * FROM portfolio");

        ?>

        <div class="row">

            <?php while ($portfolio = mysqli_fetch_assoc($queryPortfolio)) { ?>

                <div class="col-lg-4 col-md-6 mb-4">

                    <div class="card shadow-sm border-0 h-100">

                        <img
                            src="assets/img/portfolio/<?= $portfolio['gambar']; ?>"
                            class="card-img-top"
                            style="height:220px; object-fit:cover;">

                        <div class="card-body">

                            <h4 class="fw-bold">

                                <?= $portfolio['judul']; ?>

                            </h4>

                            <span class="badge bg-primary mb-3">

                                <?= $portfolio['kategori']; ?>

                            </span>

                            <p>

                                <?= $portfolio['deskripsi']; ?>

                            </p>

                        </div>

                        <div class="card-footer bg-white border-0">

                            <a href="#" class="btn btn-outline-primary">

                                <i class="bi bi-box-arrow-up-right"></i>

                                Lihat Detail

                            </a>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>

    </div>

</section>