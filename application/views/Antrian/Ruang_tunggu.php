<div class="container">
    <div class="row my-4">
        <div class="col text-center">
            <h2>Ruang Tunggu</h2>
            <p><strong>Antrian</strong> : <?= sprintf("%03d", $ngantridone) ?> / <?= sprintf("%03d", $ngantri) ?></p>

        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    Nomor Antrian Anda
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $pasien->nomor_antrian ?></h2>
                </div>
                <div class="">
                    <p>
                        <?php
                        if ($pasien->status == 0) {
                            // echo badge danger 
                            echo '<span class="badge badge-danger">Belum Dilayani</span>';
                        } elseif ($pasien->status == 1) {
                            // echo badge success
                            echo '<span class="badge badge-success">Sedang Dilayani</span>';
                        } elseif ($pasien->status == 4) {
                            // echo badge success
                            echo '<span class="badge badge-success">Selesai</span>';
                        }

                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-6 my-4">
            <div class="form-group row">
                <label for="kode_antrian" class="col-sm-2 col-form-label">Kode Antrian</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= $pasien->kode_antrian ?>" disabled />
                </div>

            </div>
            <div class="form-group row">
                <label for="kode_antrian" class="col-sm-2 col-form-label">Nama Pasien</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= $pasien->nama_pasien ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea class="form-control" disabled><?= $pasien->alamat_pasien ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kode_antrian" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="<?= $pasien->jenis_kelamin ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Keluhan</label>
                <div class="col-sm-10">
                    <textarea class="form-control" disabled><?= $pasien->keluhan ?></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="kode_antrian" class="col-sm-2 col-form-label">Nomor KIS</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" value="<?= $pasien->nomor_kis ?>" disabled>
                </div>
            </div>
        </div>
    </div>
</div>