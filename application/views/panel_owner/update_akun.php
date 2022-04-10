<section id="booking" class="booking">
    <section class="section is-main-section" style="width: 50%;">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="card tile is-child">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-lock default"></i></span>
                            FORM TAMBAH DATA USER
                        </p>
                    </header>
                    <div class="card-content">
                        <!--Pembuka untuk form ganti password-->
                        <?php
                        foreach ($pegawai as $pgw) : ?>
                            <form method="POST" action="<?= base_url('Akun/update_akun_aksi'); ?>">
                                <div>
                                    <label class="label mb-3">Status Pegawai : </label>
                                    <p class="mb-3"> ( 1 untuk Owner, 2 Untuk Admin ) </p>
                                    <div class="select is-normal">
                                        <select class="input" name="role_id">
                                            <option>Status : <?php echo $pgw->role_id ?></option>
                                            <option value="1">Owner</option>
                                            <option value="2">Admin</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="label mt-3 mb-3">Nama Lengkap : </label>
                                        <input class="input" name="id_pegawai" type="hidden" value="<?php echo $pgw->id_pegawai ?>" required>
                                        <input class="input" name="nama" type="text" value="<?php echo $pgw->nama ?>" required>

                                        <label class="label mt-3 mb-3">Username : </label>
                                        <input class="input" name="username" type="text" value="<?php echo $pgw->username ?>" required>

                                        <label class="label mt-3 mb-3">Password : </label>
                                        <input class="input" name="password" type="text" value="<?php echo $pgw->password ?>" required>

                                        <label class="label mt-3 mb-3">Nomor Handphone / WhatsApp :</label>
                                        <input class="input" name="no_hp" type="text" value="<?php echo $pgw->no_hp ?>" required>

                                        <label class="label mt-3 mb-3">E-mail : </label>
                                        <input class="input" name="email" type="email" value="<?php echo $pgw->email ?>" required>
                                    </div>
                                    <div>
                                        <button type="submit" class="button mb-3 mt-5 mr-3 is-link"><b>Submit</b></button>
                                        <a href="<?php echo base_url('Akun') ?>" class="button mb-3 mt-5 is-danger"> Batal </a>
                                    </div>
                                    <!--batas penutup kolom 1-->
                                </div>
                            </form>
                        <?php endforeach; ?>
                        <!--Penutup untuk form ganti password-->
                    </div>
                </div>
            </div>
            <!--ini batas penutup card -->
    </section>
</Section>

<section>
    <br></br>
    <br></br>
</section>