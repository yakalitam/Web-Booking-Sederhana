<section id="booking" class="booking">
    <br></br>
    <h1 class="isi"> FORM BOOKING STUDIO </h1>
    <div class="container">
        <div class="box">
            <div class="columns">
                <form method="POST" class="column is-6" action="<?php echo base_url() . 'booking/tambah_aksi'; ?>">
                    <!--kolom 1 kiri -->
                    <div>
                        <!--bagian dropdown awal-->
                        <p class="mb-3 mt-3">Lokasi Studio : </p>
                        <div class="select is-normal">
                            <select class="input" name="studio">
                                <option>Pilih Studio</option>
                                <option>Studio 1</option>
                                <option>Studio 2</option>
                            </select>
                        </div>
                        <div class="field">
                            <label class="label has-text-left mb-3 mt-4">Tanggal dan Jam</label>
                            <div class="control">
                                <input class="input column is-3" name="tanggal" type="date" placeholder="DD/MM/YY">
                            </div>
                        </div>
                        <div class="select is-normal">
                            <select class="input" name="jam">
                                <option>Pilih Jam</option>
                                <option>09:00</option>
                                <option>10:00</option>
                                <option>11:00</option>
                                <option>12:00</option>
                                <option>13:00</option>
                                <option>14:00</option>
                                <option>15:00</option>
                                <option>16:00</option>
                                <option>17:00</option>
                                <option>18:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                                <option>21:00</option>
                                <option>22:00</option>
                            </select>
                        </div>
                        <div>
                            <p class="mt-3 mb-3">Nama Lengkap : </p>
                            <input class="input" name="nama" type="text" placeholder="Text input" required>

                            <p class="mt-3 mb-3">Nomor Handphone / WhatsApp :</p>
                            <input class="input" name="no_hp" type="text" placeholder="Text input" required>

                            <p class="mt-3 mb-3">E-mail : </p>
                            <input class="input" name="email" type="email" placeholder="Text input" required>

                        </div>
                        <div>
                            <button type="submit" class="button mb-3 mt-5 mr-3 is-link"><b>Submit</b></button>
                            <a href="<?php echo base_url('welcome') ?>" class="button mb-3 mt-5 is-danger"> Batal </a>
                        </div>
                        <!--batas penutup kolom 1-->
                    </div>
                </form>
                <!--kolom 1 kanan -->
                <div class="column is-6">
                    <h1 class="isi2">
                        AA Pro Studio Photo merupakan salah satu tempat studio terbaik yang ada di daerah Tangerang
                    </h1>
                    <div class="table-responsive-sm">
                        <table class="table is-bordered table-striped table-hover">
                            <thead class="has-text-centered">
                                <tr>
                                    <th>no</th>
                                    <th>Name</th>
                                    <th>Studio</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody class="has-text-centered table-secondary">

                                <?php
                                $no = 1;
                                foreach ($booking as $bkg) : ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $bkg->nama ?></td>
                                        <td><?php echo $bkg->studio ?></td>
                                        <td><?php echo date('d/m/Y', strtotime($bkg->tanggal)) ?></td>
                                        <td><?php echo $bkg->jam ?></td>

                                    <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</Section>

<section>
    <br></br>
    <br></br>
</section>