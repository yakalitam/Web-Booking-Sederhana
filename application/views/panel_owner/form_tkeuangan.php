<section id="booking" class="booking">
    <section class="section is-main-section" style="width: 50%;">
        <div class="tile is-ancestor">
            <div class="tile is-parent">
                <div class="card tile is-child">
                    <header class="card-header">
                        <p class="card-header-title">
                            <span class="icon mr-3">
                                <i class="fas fa-archive"></i>
                            </span>
                            FORM TAMBAH DATA KEUANGAN
                        </p>
                    </header>
                    <div class="card-content">
                        <!--Pembuka untuk form ganti password-->
                        <form method="POST" class="column" action="<?= base_url('Keuangan/tambah_data_aksi'); ?>">
                            <div>
                                <label class="label mb-3">Jenis Data : </label>
                                <div class="select is-normal">
                                    <select class="input" name="jenis">
                                        <option>Pilih Jenis Data</option>
                                        <option value="1">Pemasukkan</option>
                                        <option value="2">Pengeluaran</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="label mt-3 mb-3">Nama Invoice : </label>
                                    <input class="input" name="nama_invoice" type="text" placeholder="Masukkan Nama Invoice" required>

                                    <label class="label mt-3 mb-3">Input Tanggal : </label>
                                    <span class="mb-3">
                                        <p>(Masukkan tanggal dengan format angka "bulantahun" contoh : 072021)</p>
                                    </span>
                                    <input class="input" name="tanggal" type="text" placeholder="Masukkan Tanggal Sesuai Format (bulantahun) contoh : 082022" required>

                                    <label class="label mt-3 mb-3">Jumlah : </label>
                                    <input class="input" name="jumlah" type="text" placeholder="Masukkan Jumlah" required>
                                </div>
                                <div>
                                    <button type="submit" class="button mb-3 mt-5 mr-3 is-link"><b>Submit</b></button>
                                    <a href="<?php echo base_url('Keuangan') ?>" class="button mb-3 mt-5 is-danger"> Batal </a>
                                </div>
                                <!--batas penutup kolom 1-->
                            </div>
                        </form>
                        <!--Penutup untuk form keuangan-->
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