<section class="section is-main-section">

    <!-- Table Akun -->
    <div class="card has-table has-mobile-sort-spaced">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                Data Gaji Pegawai
            </p>
            <a href="<?= base_url('GajiPegawai/tambah_gaji') ?>" class="button is-warning is-outlinded" style="border-radius: 5px;">
                <span class="icon">
                    <i class="mdi mdi-plus"></i>
                </span>
                <p>Tambahkan Data</p>
            </a>
        </header>
        <div class="card-content">
            <div class="table-responsive-sm">
                <table class="table is-bordered table-striped table-hover">
                    <thead class="has-text-centered">
                        <tr>
                            <td>ID PEGAWAI</td>
                            <td>NAMA PEGAWAI</td>
                            <td>TANGGAL PEMBAYARAN</td>
                            <td>JUMLAH</td>
                            <td>HAPUS DATA</td>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered table-secondary">
                        <?php
                        foreach ($data_gaji as $gji) : ?>
                            <tr>
                                <td><?= $gji->id_pegawai ?></td>
                                <td><?= $gji->nama ?></td>
                                <td><?= $gji->tanggal ?></td>
                                <td>Rp. <?= number_format($gji->jumlah, 0, ',', '.') ?></td>
                                <td class="is-actions-cell">
                                    <div class="buttons is-centered">
                                        <button class="button is-small is-danger jb-modal" data-target="sample-modal" type="button" style="border-radius: 5px;">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>