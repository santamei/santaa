<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Dokter</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Dokter</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Dokter</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('dokter/insert'); ?>" method="post">
                    <div class="form-group">
                        <label for="id_dokter">ID Dokter</label>
                        <input type="text" class="form-control" name="id_dokter" id="id_dokter" placeholder="Masukkan ID Dokter" required>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Dokter</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Dokter" required>
                    </div>
                    <div class="form-group">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" class="form-control" name="spesialis" id="spesialis" placeholder="Masukkan Spesialis" required>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" class="form-control" name="telp" id="telp" placeholder="Masukkan Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="<?= base_url('dokter'); ?>" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </section>
</div>