<section class="section is-main-section">

    <!-- Table Akun -->
    <div class="card has-table has-mobile-sort-spaced">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                Data Gaji
            </p>
        </header>
        <div class="card-content">
            <div class="table-responsive-sm">
                <table class="table is-bordered table-striped table-hover">
                    <thead class="has-text-centered">
                        <tr>
                            <th>No Id Pegawai</th>
                            <th>Nama Lengkap</th>
                            <th>Tanggal Pembayaran</th>
                            <th>Total Gaji</th>
                        </tr>
                    </thead>
                    <tbody class="has-text-centered table-secondary">
                        <?php
                        foreach ($data_gaji as $gji) : ?>
                            <tr>
                                <td><?= $gji->id_pegawai ?></td>
                                <td><?= $gji->nama ?></td>
                                <td><?= date('d - m - Y', strtotime($gji->tanggal)) ?></td>
                                <td>Rp. <?= number_format($gji->jumlah, 0, ',', '.') ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>