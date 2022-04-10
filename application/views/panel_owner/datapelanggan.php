<section class="section is-main-section">
    <!-- Table Request Jadwal Booking -->
    <div class="card has-table has-mobile-sort-spaced">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                STATUS KONFIRMASI PEMBAYARAN
            </p>
            <a href="<?php echo base_url('datapelanggan') ?>" class="card-header-icon">
                <span class="icon">
                    <i class="mdi mdi-reload"></i>
                </span>
            </a>
        </header>

        <div class="card-content">
            <div class="table-wrapper has-mobile-cards">
                <div class="table-responsive table-container">
                    <table class="table is-bordered table-striped table-hover">
                        <thead class="has-text-centered">
                            <tr>
                                <th>no</th>
                                <th>Invoice ID</th>
                                <th>Name</th>
                                <th>Studio</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>No Hp</th>
                                <th>Status Pembayaran</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody class="has-text-centered table-secondary">
                            <form>
                                <?php
                                foreach ($booking as $bkg) : ?>
                                    <tr>
                                        <td class=""><?php echo ++$start; ?></td>
                                        <td><?php echo $bkg->id ?></td>
                                        <td><?php echo $bkg->nama ?></td>
                                        <td><?php echo $bkg->studio ?></td>
                                        <td><?php echo date('d / m / Y', strtotime($bkg->tanggal)) ?></td>
                                        <td><?php echo $bkg->jam ?></td>
                                        <td><?php echo $bkg->no_hp ?></td>

                                        <td class=" collumns">
                                            <?php
                                            if ($bkg->status_pembayaran == "1") {
                                                echo "Sudah Lunas";
                                            } elseif ($bkg->status_pembayaran == "2") {
                                                echo "DP (Belum Lunas)";
                                            } else {
                                                echo "Menunggu Konfirmasi";
                                            } ?>
                                        </td>

                                        <td>
                                            <div class="collumns">
                                                <a class="button is-small is-primary" href="<?php echo base_url('Form_Konfirmasi/PembayaranO') ?>"><span class="icon is-small">
                                                        <i class="fas fa-info"></i>
                                                    </span></a>

                                                <!--contoh kodingan button-->
                                                <!-- <?php echo anchor('Form_Konfirmasi', '<div class="button is-small is-primary" style="border-radius: 5px;">
                                                <span class="icon is-small">
                                                    <i class="fas fa-info"></i>
                                                </span>
                                                </div>')  ?> -->

                                                <?php echo anchor('datapelanggan/hapus/' . $bkg->id, '<div class="button is-small is-danger" style="border-radius: 5px;">
                                                <span class="icon is-small">
                                                    <i class="fas fa-times"></i>
                                                </span>
                                                </div>')  ?>
                                        </td>
                                        <!-- <td>
                                            <div class="btn btn-success btn-sm"><i class="fas fa-search-plus"></i></div>
                                        </td>
                                            <td><?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                                            <td><?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
                                        </td>-->
                                    </tr>

                                <?php endforeach; ?>
                            </form>
                        </tbody>
                    </table>
                    <?php echo $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>
    <!--Penutup-->
</section>