<body>
    <div class="hero-body">
        <div class="container has-text-centered">
            <div class="column is-4 is-offset-4">
                <div class="box">
                    <?php echo $this->session->flashdata('pesan') ?>
                    <div>
                        <h1 class="title has-text-black mb-4"> Selamat Datang </h1>
                        <h1 class="title has-text-black mb-4"> Di Website AAPRO STUDIO </h1>
                    </div>

                    <form method="POST" action="<?php echo base_url('Auth/login') ?>">
                        <!--Untuk Username-->
                        <div class="field">
                            <label for="" class="label">Username</label>
                            <div class="control has-icons-left">
                                <input type="text" placeholder="Masukkan username" class="input" name="username">
                                <?php echo form_error('username', '<div class="is-danger is-small">', '</div>'); ?>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                        </div>

                        <!--Untuk Password-->
                        <div class="field">
                            <label for="" class="label">Password</label>
                            <div class="control material-icons-round has-icons-left">
                                <input type="password" placeholder="Masukkan Password" class="input" name="password">
                                <?php echo form_error('password', '<div class="text-danger small ml-3">', '</div>'); ?>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>

                        <p class="mt-3">
                            <button type="submit" class="button mr-3 is-info is-medium">Login
                                <i class="fa fa-sign-in ml-2" aria-hidden="true"></i>
                            </button>

                            <a class="button ml-3 is-medium is-danger" href="<?php echo base_url('welcome') ?>">Kembali</a>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </section>
    <script async type="text/javascript" src="<?= base_url('assets/'); ?>js/bulma.js"></script>
</body>

</html>