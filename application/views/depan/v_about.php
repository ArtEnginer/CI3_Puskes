<title>Sejarah</title>
<?php foreach ($sejarah->result() as $sjr) : ?>
    <div class="row text-center bg-success">
        <div class="col-md-12 mb-2 p-4 ">
            <h2><?php echo $sjr->sejarah_judul; ?></h2>
            
        </div>
    </div>
    <section class="welcome_about">
        <div class="container">

            <div class="row">
                <div class="col-md-7">
                    <!-- judul -->

                    <!-- isi sejarah -->
                    <p><?php echo $sjr->sejarah_isi; ?></p>
                </div>
                <div class="col-md-5">
                    <!-- gambar -->
                    <img style="width:300px;height:350px; margin-top:70px; margin-left:80px" src="<?php echo base_url() . 'assets/images/' . $sjr->sejarah_gambar; ?>" class="img-fluid" alt="#">
                </div>

            </div>
        <?php endforeach; ?>
        </div>
</section>