<div class="container">
    <div class="row my-4">
        <div class="col text-center">
            <h2>Ambil Nomor Antrian</h2>
            <p>Sudah Punya Nomor Antrian ? Masuk ke <a href="<?= base_url() ?>antrian/kode">Ruang Tunggu</a></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
            <form method="POST" class="mb-4">
                <div class="form-group row">
                    <label for="nama_pasien" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control<?= form_error('nama_pasien') ? ' is-invalid' : ' is-valid' ?>"
                            id="nama_pasien" name="nama_pasien" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat_pasien" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea name="alamat_pasien" id="alamat_pasien"
                            class="form-control<?= form_error('alamat_pasien') ? ' is-invalid' : ' is-valid' ?>"
                            required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10 d-flex align-items-center">
                        <div class="form-check form-check-inline ml-4">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_lk"
                                value="Laki-Laki" required>
                            Laki-Laki
                        </div>
                        <div class="form-check form-check-inline ml-4">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pr"
                                value="Perempuan"> Perempuan
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="keluhan" class="col-sm-2 col-form-label">Keluhan Penyakit</label>
                    <div class="col-sm-10">
                        <textarea name="keluhan" id="keluhan"
                            class="form-control<?= form_error('keluhan') ? ' is-invalid' : ' is-valid' ?>"
                            required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nomor_kis" class="col-sm-2 col-form-label">Nomor KIS</label>
                    <div class="col-sm-10">
                        <input type="number"
                            class="form-control<?= form_error('nomor_kis') ? ' is-invalid' : ' is-valid' ?>"
                            id="nomor_kis" name="nomor_kis" required>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>