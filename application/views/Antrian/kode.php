<div class="container">
    <div class="row my-4">
        <div class="col text-center">
            <h2>Masuk Ke Ruang Tunggu</h2>
            <p>Belum Punya Nomor Antrian ? <a href="<?= base_url() ?>antrian">Ambil Nomor Antrian</a></p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?= validation_errors('<div class="alert alert-danger" role="alert">', '</div>') ?>
            <form method="POST" class="mb-4">
                <div class="form-group row">
                    <label for="kode_antrian" class="col-sm-2 col-form-label">Kode Antrian</label>
                    <div class="col-sm-10">
                        <input type="text"
                            class="form-control<?= form_error('kode_antrian') ? ' is-invalid' : ' is-valid' ?>"
                            id="kode_antrian" name="kode_antrian" required>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>