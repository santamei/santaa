<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Formulir Pendaftaran Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Pendaftaran Pasien</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Isi Data Pendaftaran</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url('pendaftaran/insert'); ?>" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <textarea class="form-control" name="alamat" id="alamat" rows="2" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telepon" id="no_telepon" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email (untuk login)</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password (untuk login)</label>
                        <input type="password" class="form-control" name="password" id="password" required>
                    </div>

                    <div class="form-group">
                        <label for="keluhan">Keluhan Penyakit</label>
                        <textarea class="form-control" name="keluhan" id="keluhan" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="id_dokter">Pilih Dokter Spesialis</label>
                        <select class="form-control" name="id_dokter" id="id_dokter" required>
                            <option value="">-- Pilih Dokter --</option>
                            <?php foreach ($dokter as $d) { ?>
                                <option value="<?= $d->id_dokter ?>"><?= $d->nama_dokter ?> (<?= $d->spesialisasi ?>)</option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" required>
                    </div>

                    <div class="form-group">
                        <label for="jam_kunjungan">Jam Kunjungan</label>
                        <input type="time" class="form-control" name="jam_kunjungan" id="jam_kunjungan" required>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-success">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>