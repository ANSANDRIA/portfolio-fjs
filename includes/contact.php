<section id="contact" class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="display-5 fw-bold">Contact Me</h2>

            <div class="title-line"></div>

            <p class="text-muted">
                Let's work together
            </p>

        </div>

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow border-0">

                    <div class="card-body p-4">

                        <form action="contact_process.php" method="POST">

                            <div class="row">

                                <div class="col-md-6 mb-3">

                                    <label>Nama</label>

                                    <input
                                        type="text"
                                        name="nama"
                                        class="form-control"
                                        required>

                                </div>

                                <div class="col-md-6 mb-3">

                                    <label>Email</label>

                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        required>

                                </div>

                            </div>

                            <div class="mb-3">

                                <label>Subjek</label>

                                <input
                                    type="text"
                                    name="subjek"
                                    class="form-control"
                                    required>

                            </div>

                            <div class="mb-3">

                                <label>Pesan</label>

                                <textarea
                                    name="pesan"
                                    rows="6"
                                    class="form-control"
                                    required></textarea>

                            </div>

                            <button
                                class="btn btn-primary">

                                <i class="bi bi-send"></i>

                                Kirim Pesan

                            </button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>