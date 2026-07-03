<!-- ==========================
     SKILLS
========================== -->

<section id="skills" class="py-5">

    <div class="container">

        <!-- Judul -->
        <div class="text-center mb-5">

            <h2 class="section-title display-4 fw-bold">
                My Skills
            </h2>

            <p class="text-muted">
                Technologies that I use
            </p>

        </div>

        <?php

        $querySkill = mysqli_query($koneksi, "SELECT * FROM skills");

        ?>

        <div class="row">

            <div class="col-lg-8 mx-auto">

                <?php while ($skill = mysqli_fetch_assoc($querySkill)) { ?>

                    <div class="mb-4">

                        <div class="d-flex justify-content-between mb-2">

                            <strong>

                                <?= $skill['nama_skill']; ?>

                            </strong>

                            <span>

                                <?= $skill['persentase']; ?>%

                            </span>

                        </div>

                        <div class="progress" style="height:12px;">

                            <div

                                class="progress-bar bg-primary"

                                role="progressbar"

                                style="width: <?= $skill['persentase']; ?>%;"

                                aria-valuenow="<?= $skill['persentase']; ?>"

                                aria-valuemin="0"

                                aria-valuemax="100">

                            </div>

                        </div>

                    </div>

                <?php } ?>

            </div>

        </div>

    </div>

</section>