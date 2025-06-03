<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Form Edit Pendaftaran Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Pendaftaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Data Pendaftaran</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <div class="card-body">
                <form action="<?= base_url('pendaftaran/update/' . $pendaftaran['id_pendaftaran']); ?>" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $pendaftaran['nama']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" value="<?= $pendaftaran['tanggal_lahir']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $pendaftaran['alamat']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="no_telepon">Nomor Telepon</label>
                        <input type="text" class="form-control" name="no_telepon" id="no_telepon" value="<?= $pendaftaran['no_telepon']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Pasien</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $pendaftaran['email']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="id_dokter">Dokter Spesialis</label>
                        <select class="form-control" name="id_dokter" id="id_dokter" required>
                            <option value="">-- Pilih Dokter --</option>
                            <?php foreach ($dokter as $d): ?>
                                <option value="<?= $d['id_dokter']; ?>" <?= $d['id_dokter'] == $pendaftaran['id_dokter'] ? 'selected' : ''; ?>>
                                    <?= $d['nama_dokter']; ?> (<?= $d['spesialisasi']; ?>)
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tanggal_kunjungan" id="tanggal_kunjungan" value="<?= $pendaftaran['tanggal_kunjungan']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="jam_kunjungan">Jam Kunjungan</label>
                        <input type="time" class="form-control" name="jam_kunjungan" id="jam_kunjungan" value="<?= $pendaftaran['jam_kunjungan']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea class="form-control" name="keluhan" id="keluhan" rows="3" required><?= $pendaftaran['keluhan']; ?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="status">Status Pendaftaran</label>
                        <select class="form-control" name="status" id="status" required>
                            <option value="dalam proses" <?= $pendaftaran['status'] == 'dalam proses' ? 'selected' : ''; ?>>Dalam Proses</option>
                            <option value="disetujui" <?= $pendaftaran['status'] == 'disetujui' ? 'selected' : ''; ?>>Disetujui</option>
                            <option value="ditolak" <?= $pendaftaran['status'] == 'ditolak' ? 'selected' : ''; ?>>Ditolak</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('pendaftaran'); ?>" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>