<title>Jadwal</title>
<div class="row bg-success">
    <div class="col-12">
        <b>

            <h2 class="text-center m-3 "><?= $judul ?></h2>
            <br>
            <br>
        </b>
    </div>
</div>
<div class="row" style="margin-top:-50px; ">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card shadow-lg rounded" style="border-radius: 20px; box-shadow:0 4px 8px 0 rgba(0, 0, 0, 0.2)">
            <div class="card-body">
                <section class="welcome_jadwal">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    <?= $jadwal[0]->jadwal ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

        </div>
    </div>
    <div class="col-md-2"></div>
</div>