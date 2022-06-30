<title>Struktur Organisasi</title>
<?php foreach ($sotk->result() as $st) : ?>
    <div class="row text-center bg-success">
        <div class="col-md-12 mb-2 p-4 ">
            <div class="row text-center bg-success">
                <div class="col-md-12 mb-2 p-4 ">

                    <h2 style=" text-align:center;"><?php echo $st->sotk_judul; ?></h2>
                </div>
            </div>
        </div>
    </div>

    <section class="welcome_about">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <!-- judul -->

                    <!-- gambar -->
                    <img style="width:80%;height:auto; display:block; margin-left:auto; margin-right:auto;" src="<?php echo base_url() . 'assets/images/' . $st->sotk_gambar; ?>" class="img-fluid" alt="#">

                </div>

                <div class="col-md-12">
                    <!-- isi sotk -->
                    <h3 style="margin-top:auto;" style=" text-align:center;"><?php echo $st->sotk_isi; ?></h3>
                </div>

            <?php endforeach; ?>
            </div>
        </div>
    </section>