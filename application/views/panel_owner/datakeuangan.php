<section class="section is-main-section">

    <div class="card table-responsive">
        <header class="card-header">
            <p class="card-header-title">
                <span class="icon">
                    <i class="mdi mdi-account-multiple"></i>
                </span>
                Laporan Keuangan
            </p>

            <form>
                <select class="control is-expanded mt-2 mr-4 select is-normal" style="border-radius: 5px;" name="bulan">
                    <option>--Pilih Bulan--</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">April</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                </select>

                <select class="control is-expanded mt-2 mr-4 select is-normal" style="border-radius: 5px;" name="tahun">
                    <option>--Pilih Tahun--</option>
                    <?php $tahun    =   date('Y');
                    for ($i = 2021; $i < $tahun + 5; $i++) { ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?> </option>
                    <?php } ?>
                </select>

                <button type="submit" class="button is-info mt-2 mr-2" style="border-radius: 5px;">
                    <span class="icon">
                        <i class="mdi mdi-eye"></i>
                    </span>
                    <p>Tampilkan Data</p>
                </button>

                <a class="button is-warning mt-2" style="border-radius: 5px;" href="<?= base_url('Keuangan/tambah_data_keuangan') ?>">
                    <span class="icon">
                        <i class="mdi mdi-plus"></i>
                    </span>
                    <p>Tambahkan Data</p>
                </a>
            </form>
        </header>

        <?php
        if ((isset($_GET['bulan']) && $_GET['bulan'] != '') && (isset($_GET['tahun']) && $_GET['tahun'] != '')) {
            $bulan  =   $_GET['bulan'];
            $tahun  =   $_GET['tahun'];
            $bulantahun = $bulan . $tahun;
        } else {
            $bulan  =   date('m');
            $tahun  =   date('Y');
            $bulantahun =  $bulan . $tahun;
        }
        ?>
        <div class="notification is-primary">Menampilkan data keuangan Bulan : <span>
                <b><?= $bulan ?></b>
            </span> Tahun : <span class="font-weight-bold"><b><?= $tahun ?></b></span>
        </div>

    </div>
    <div class="card-content">
        <div class="content">
            <table class="table is-bordered table-striped table-hover">
                <thead class="has-text-centered">
                    <tr>
                        <th>No Invoice</th>
                        <th>Jenis Invoice</th>
                        <th>Nama Invoice</th>
                        <th>Bulan dan Tahun</th>
                        <th>Jumlah</th>
                        <th style="width: 20pt;">Hapus Data</th>
                    </tr>
                </thead>
                <tbody class="has-text-centered table-secondary">
                    <form>
                        <?php
                        foreach ($keuangan as $keu) : ?>
                            <tr>
                                <td><?= $keu->id ?></td>
                                <td class=" collumns">
                                    <?php
                                    if ($keu->jenis == "1") {
                                        echo "Pemasukkan";
                                    } else {
                                        echo "Pengeluaran";
                                    } ?>

                                </td>
                                <td><?= $keu->nama_invoice ?></td>
                                <td><?= $keu->tanggal ?></td>
                                <td>Rp. <?= number_format($keu->jumlah, 0, ',', '.') ?></td>
                                <td>
                                    <?php echo anchor('Keuangan/hapus/' . $keu->id, '<div class="button is-small is-danger" style="border-radius: 5px;">
                                        <span class="icon is-small">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        </div>')  ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</section>