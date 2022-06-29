<title><?= $judul; ?></title>
<section class="welcome_about">
    <div class="container">
        <div class="row">
            <?php foreach ($luar->result() as $luar) : ?>

                <div class="col-md-5">
                    <!-- gambar -->
                    <img style="width:300px;height:350px; margin-top:70px; margin-left:80px" src="<?php echo base_url() . 'assets/images/' . $luar->luar_gambar; ?>" class="img-fluid" alt="#">
                </div>

                <div class="col-md-7">
                    <!-- judul -->
                    <h2><?php echo $luar->luar_judul; ?></h2>
                    <!-- isi luar -->
                    <p><?php echo $luar->luar_isi; ?></p>
                </div>


            </div>
        <?php endforeach; ?>
    </div>
</section>