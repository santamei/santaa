<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Dokter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Dokter</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Dokter</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('dokter/update/'.$dokter['id_dokter']); ?>" method="POST">
                    <div class="form-group">
                        <label for="id_dokter">ID Dokter</label>
                        <input type="text" class="form-control" name="id_dokter" id="id_dokter" value="<?= $dokter['id_dokter']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Dokter</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $dokter['nama']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" class="form-control" name="spesialis" id="spesialis" value="<?= $dokter['spesialis']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" class="form-control" name="telp" id="telp" value="<?= $dokter['telp']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?= $dokter['email']; ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="<?= base_url('dokter'); ?>" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </section>
</div>