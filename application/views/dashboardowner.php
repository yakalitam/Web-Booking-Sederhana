<!--ini section card pemberitahuan paling atas-->
<section class="section is-main-section">
    <div class="tile is-ancestor">

        <div class="tile is-parent">
            <div class="card tile is-child">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-item">
                            <div class="is-widget-label">
                                <h3 class="subtitle is-spaced">
                                    TOTAL
                                </h3>
                                <h1 class="title">
                                    512
                                </h1>
                            </div>
                        </div>
                        <div class="level-item has-widget-icon">
                            <div class="is-widget-icon">
                                <span class="icon has-text-primary is-large">
                                    <i class="mdi mdi-account-multiple mdi-48px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile is-parent">
            <div class="card tile is-child">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-item">
                            <div class="is-widget-label">
                                <h3 class="subtitle is-spaced">
                                    PENGHASILAN
                                </h3>
                                <h1 class="title">
                                    $7,770
                                </h1>
                            </div>
                        </div>
                        <div class="level-item has-widget-icon">
                            <div class="is-widget-icon">
                                <span class="icon has-text-info is-large">
                                    <i class="mdi mdi-cart-outline mdi-48px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="tile is-parent">
            <div class="card tile is-child">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-item">
                            <div class="is-widget-label">
                                <h3 class="subtitle is-spaced">
                                    PENGELUARAN
                                </h3>
                                <h1 class="title">
                                    256%
                                </h1>
                            </div>
                        </div>
                        <div class="level-item has-widget-icon">
                            <div class="is-widget-icon">
                                <span class="icon has-text-success is-large">
                                    <i class="mdi mdi-finance mdi-48px"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
    </section>

    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                ©2020 by <b>SabangTech</b>
            </p>
        </div>
    </footer>
</section>