<section class="section is-main-section">
    <!-- ini untuk bio -->
    <section class="hero is-hero-bar">
        <div class="hero-body">
            <div class="level">
                <div class="level-left">
                    <div class="level-item">
                        <h1 class="title">
                            DATA DIRI
                        </h1>
                    </div>
                </div>
                <div class="level-right" style="display: none;">
                    <div class="level-item"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section is-main-section">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="card tile is-child">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-lock default"></i></span>
                            Ganti Password
                        </p>
                    </header>
                    <div class="card-content">
                        <!--Pembuka untuk form ganti password-->
                        <form method="POST" action="<?= base_url('Akun/GantiPassword'); ?>">
                            <div class="field">
                                <label class="label">Password Baru</label>
                                <div class="control">
                                    <input type="password" name="passBaru" class="input">
                                    <?= form_error('passBaru',  '<div class="text-danger large ml-3">', '</div>') ?>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label">Konfirmasi Password</label>
                                <div class="control">
                                    <input type="password" name="ulangPass" class="input">
                                    <?= form_error('ulangPass',  '<div class="text-danger medium ml-3">', '</div>') ?>
                                </div>
                            </div>
                            <button type="submit" class="button is-success">
                                Simpan
                            </button>
                        </form>
                        <!--Penutup untuk form ganti password-->
                    </div>
                </div>
            </div>

            <div class="tile is-parent">
                <div class="card tile is-child">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon"><i class="mdi mdi-account default"></i></span>
                            Profile
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="is-user-avatar image has-max-width is-aligned-center">
                            <img src="https://avatars.dicebear.com/v2/initials/john-doe.svg" alt="John Doe">
                        </div>
                        <hr>
                        <form>
                            <?php
                            foreach ($profile as $prf) : ?>
                                <div class="field">
                                    <label class="label">Id Pegawai : </label>
                                    <table class="table">
                                        <tr>
                                            <td><?= $prf->id_pegawai ?></td>
                                        </tr>
                                    </table>
                                    <label class="label">Nama Lengkap : </label>
                                    <table class="table">
                                        <tr>
                                            <td><?= $prf->nama ?></td>
                                        </tr>
                                    </table>
                                    <label class="label">Status : </label>
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <?php
                                                if ($prf->role_id == "1") {
                                                    echo "Owner";
                                                } else {
                                                    echo "Admin";
                                                } ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>

                            <?php endforeach; ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--ini batas penutup card -->
    </section>

    <!-- Table Akun -->
    <div class="card has-table has-mobile-sort-spaced">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                Data Akun Pegawai
            </p>
            <a class="button is-warning is-outlinded" style="border-radius: 5px;" href="<?= base_url('Akun/tambah_akun') ?>">
                <span class="icon">
                    <i class="mdi mdi-plus"></i>
                </span>
                <p>Tambahkan Akun</p>
            </a>
        </header>
        <div class="card-content">
            <div class="table-responsive-sm">
                <table class="table is-bordered table-striped table-hover">
                    <thead class="has-text-centered">
                        <tr>
                            <th style="width: 5%;">ID Pegawai</th>
                            <th style="width: 5%;">Status</th>
                            <th style=" width: 15%;">Nama Panjang</th>
                            <th style=" width: 10%;">No Hp</th>
                            <th style=" width: 15%;">Email</th>
                            <th style=" width: 15%;">Username</th>
                            <th style=" width: 15%;">Password</th>
                            <th style=" width: 15%;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered table-secondary">
                        <form>
                            <?php
                            foreach ($profileuser as $prs) : ?>
                                <tr>
                                    <td><?= $prs->id_pegawai ?></td>
                                    <td class=" collumns">
                                        <?php
                                        if ($prs->role_id == "1") {
                                            echo "Owner";
                                        } else {
                                            echo "Admin";
                                        } ?>
                                    </td>
                                    <td><?= $prs->nama ?></td>
                                    <td><?= $prs->no_hp ?></td>
                                    <td><?= $prs->email ?></td>
                                    <td><?= $prs->username ?></td>
                                    <td><?= $prs->password ?></td>
                                    <td class="is-actions-cell">
                                        <div class="buttons is-centered">
                                            <?php echo anchor('Akun/edit_akun/' . $prs->id_pegawai, '<div class="button is-small is-primary" style="border-radius: 5px;">
                                            <p>Edit </p>
                                                <span class="icon is-small">
                                                    <i class="fas fa-edit"></i>
                                                </span>
                                                </div>')  ?>
                                            <?php echo anchor('Akun/hapus/' . $prs->id_pegawai, '<div class="button is-small is-danger" style="border-radius: 5px;">
                                            <p>Hapus </p>
                                                <span class="icon is-small">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                                </div>')  ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </form>
                    </tbody>
                </table>
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div>

</section>