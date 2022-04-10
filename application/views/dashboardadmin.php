<section class="section is-main-section">
    <!-- Table Request Jadwal Booking -->
    <div class="card has-table has-mobile-sort-spaced">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                STATUS BOOKING
            </p>
        </header>

        <div class="card-content">
            <div class="table-wrapper has-mobile-cards">
                <div class="table-responsive table-container">
                    <table class="table is-bordered table-striped table-hover">
                        <thead class="has-text-centered">
                            <tr>
                                <th>Invoice ID</th>
                                <th>Name</th>
                                <th>Studio</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>No Hp</th>
                                <th>Status Booking</th>
                                <th>Status Pembayaran</th>
                            </tr>
                        </thead>

                        <tbody class="has-text-centered table-secondary">
                            <form>
                                <?php
                                foreach ($booking as $bkg) : ?>
                                    <tr>
                                        <td><?php echo $bkg->id ?></td>
                                        <td><?php echo $bkg->nama ?></td>
                                        <td><?php echo $bkg->studio ?></td>
                                        <td><?php echo date('d / m / Y', strtotime($bkg->tanggal)) ?></td>
                                        <td><?php echo $bkg->jam ?></td>
                                        <td><?php echo $bkg->no_hp ?></td>


                                        <td class=" collumns">
                                            <?php
                                            if ($bkg->status_booking == "1") {
                                                echo "Terkonfirmasi";
                                            } elseif ($bkg->status_booking == "2") {
                                                echo "Ditolak";
                                            } else {
                                                echo "Menunggu Konfirmasi";
                                            } ?>
                                        </td>

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

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                © 2020, SabangTech
            </p>
        </div>
    </footer>

</section>