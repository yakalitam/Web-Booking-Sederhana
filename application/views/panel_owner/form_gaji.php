<section id="booking" class="booking">
    <section class="section is-main-section column-is-6">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="card tile is-child">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon mr-3">
                                <i class="fas fa-archive"></i>
                            </span>
                            FORM TAMBAH DATA GAJI PEGAWAI
                        </p>
                    </header>
                    <div class="card-content">
                        <!--Pembuka untuk form ganti password-->
                        <form method="POST" class="column" action="<?= base_url('GajiPegawai/tambah_gaji_aksi'); ?>">
                            <div>
                                <div>
                                    <label class="label mt-3 mb-3">ID Pegawai : </label>
                                    <input class="input" name="id_pegawai" type="text" placeholder="Masukkan Nama Invoice" required>

                                    <label class="label has-text-left mb-3 mt-4">Tanggal Pembayaran : </label>
                                    <div class="control">
                                        <input class="input" name="tanggal" type="date" placeholder="DD/MM/YY">
                                    </div>

                                    <label class="label mt-3 mb-3">Jumlah : </label>
                                    <input class="input" name="jumlah" type="text" placeholder="Masukkan Jumlah" required>
                                </div>
                                <div>
                                    <button type="submit" class="button mb-3 mt-5 mr-3 is-link"><b>Submit</b></button>
                                    <a href="<?php echo base_url('GajiPegawai') ?>" class="button mb-3 mt-5 is-danger"> Batal </a>
                                </div>
                                <!--batas penutup kolom 1-->
                            </div>
                        </form>
                        <!--Penutup untuk form keuangan-->
                    </div>
                </div>
            </div>
            <!--ini batas penutup card -->
            <div class="column is-6">
                <h1 class="isi2">

                </h1>
                <div class="table-responsive-sm">
                    <table class="table is-bordered table-striped table-hover">
                        <thead class="has-text-centered">
                            <header class="card-header">
                                <p class="card-header-title">
                                    <span class="icon mr-3">
                                        <i class="fas fa-archive"></i>
                                    </span>
                                    FORM TAMBAH DATA GAJI PEGAWAI
                                </p>
                            </header>
                            <tr>
                                <td>ID PEGAWAI</td>
                                <td>Status</td>
                                <td>Nama Pegawai</td>
                            </tr>
                        </thead>
                        <tbody class="has-text-centered table-secondary">

                            <?php
                            foreach ($profile as $prf) : ?>
                                <tr>
                                    <td><?= $prf->id_pegawai ?></td>
                                    <td class=" collumns">
                                        <?php
                                        if ($prf->role_id == "1") {
                                            echo "Owner";
                                        } else {
                                            echo "Admin";
                                        } ?>
                                    </td>
                                    <td><?= $prf->nama ?></td>
                                <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
    </section>
</Section>

<section>
    <br></br>
    <br></br>
</section>