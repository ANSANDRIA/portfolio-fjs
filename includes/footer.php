<footer class="footer py-5">

    <div class="container">

        <div class="row">

            <div class="col-lg-4">

                <h4 class="fw-bold">
                    Portfolio FJS
                </h4>

                <p class="text-muted">

                    Personal Portfolio Website milik
                    Frans Julius Simarmata.

                </p>

            </div>

            <div class="col-lg-4">

                <h5>
                    Quick Links
                </h5>

                <ul class="list-unstyled">

                    <li><a href="#hero">Home</a></li>

                    <li><a href="#about">About</a></li>

                    <li><a href="#skills">Skills</a></li>

                    <li><a href="#portfolio">Portfolio</a></li>

                    <li><a href="#contact">Contact</a></li>

                </ul>

            </div>

            <div class="col-lg-4">

                <h5>Contact</h5>

                <p>

                    📧
                    <?= $data['email']; ?>

                </p>

                <p>

                    📱
                    <?= $data['telepon']; ?>

                </p>

                <p>

                    📍
                    <?= $data['alamat']; ?>

                </p>

            </div>

        </div>

        <hr>

        <div class="text-center">

            © <?= date('Y'); ?>

            Portfolio FJS.

            All Rights Reserved.

        </div>

    </div>

</footer>