<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Pendaftaran Pasien</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Daftar Pendaftaran</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Pendaftaran</h3>
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
                <?php if (!empty($pendaftaran)): ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nama Pasien</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>Dokter</th>
                                <th>Tanggal Kunjungan</th>
                                <th>Jam</th>
                                <th>Keluhan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pendaftaran as $p): ?>
                                <tr>
                                    <td><?= $p['nama']; ?></td>
                                    <td><?= $p['email']; ?></td>
                                    <td><?= $p['no_telepon']; ?></td>
                                    <td><?= $p['nama_dokter']; ?> (<?= $p['spesialisasi']; ?>)</td>
                                    <td><?= $p['tanggal_kunjungan']; ?></td>
                                    <td><?= $p['jam_kunjungan']; ?></td>
                                    <td><?= $p['keluhan']; ?></td>
                                    <td><?= ucfirst($p['status']); ?></td>
                                    <td>
                                        <a href="<?= base_url('pendaftaran/edit/' . $p['id_pendaftaran']); ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="<?= base_url('pendaftaran/hapus/' . $p['id_pendaftaran']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Belum ada data pendaftaran pasien.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>