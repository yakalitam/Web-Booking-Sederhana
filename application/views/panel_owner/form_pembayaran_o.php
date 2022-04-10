<section class="section">
    <div class="container">
        <div class="card has-mobile-sort-spaced">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon">
                        <i class="mdi mdi-account-multiple"></i>
                    </span>
                    Form Konfirmasi Pembayaran Booking
                </p>
                <a href="<?php echo base_url('DataPelanggan') ?>" class="card-header-icon">
                    <span class="icon">
                        <i class="mdi mdi-reload"></i>
                    </span>
                </a>
            </header>
        </div>

        <section class="section">
            <!-- Table Request Jadwal Booking -->
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
                                    <th>Status Konfirmasi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="has-text-centered table-secondary">

                                <?php
                                $no = 1;
                                foreach ($booking as $bkg) : ?>
                                    <form method="POST" action="<?php echo base_url('datapelanggan/update_pembayaran') ?>">
                                        <tr>
                                            <td><?php echo $no++ ?></td>
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
                                                } else { ?>
                                                    <div class="collumn">
                                                        <input class="is-checkradio is-primary" type="hidden" value="<?php echo $bkg->id ?>" name="id">
                                                        <input class="is-checkradio is-primary" type="checkbox" value="1" name="status_pembayaran">
                                                        <label class="mr-3">Lunas</label>

                                                        <input class="is-checkradio is-primary" type="hidden" value="<?php echo $bkg->id ?>" name="id">
                                                        <input class="is-checkradio is-primary" type="checkbox" value="2" name="status_pembayaran">
                                                        <label class="mr-3">DP</label>
                                                    </div>
                                                    <button type="submit" class="button is-small is-primary" style="border-radius: 5px;"> Konfirmasi
                                                        <span class="icon is-small ml-2">
                                                            <i class="fas fa-check "></i>
                                                        </span>
                                                    </button>
                                                <?php } ?>
                                            </td>

                                            <td>
                                                <a href="<?php echo base_url('datapelanggan') ?>" class="button is-small is-danger"> Batal </a>
                                            </td>

                                    </form>

                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>