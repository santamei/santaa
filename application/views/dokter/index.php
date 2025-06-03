<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Dokter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dokter</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Dokter</h3>
                <div class="card-tools">
                    <a href="<?= base_url('dokter/tambah'); ?>" class="btn btn-primary btn-sm">Tambah Dokter</a>
                </div>
            </div>
            <div class="card-body">
                <?php if (!empty($dokter)): ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID Dokter</th>
                                <th>Nama</th>
                                <th>Spesialis</th>
                                <th>Telepon</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($dokter as $d): ?>
                                <tr>
                                    <td><?= $d['id_dokter']; ?></td>
                                    <td><?= $d['nama']; ?></td>
                                    <td><?= $d['spesialis']; ?></td>
                                    <td><?= $d['telp']; ?></td>
                                    <td><?= $d['email']; ?></td>
                                    <td>
                                        <a href="<?= base_url('dokter/edit/' . $d['id_dokter']); ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="<?= base_url('dokter/hapus/' . $d['id_dokter']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus dokter ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Belum ada data dokter.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>