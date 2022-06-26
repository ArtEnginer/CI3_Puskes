<title>Detail Layanan</title>

<section class="welcome_about">
    <div class="container">
        <div class="row">
            <?php foreach ($dalam->result() as $dalam) : ?>
                <div class="col-md-12">
                    <!-- judul -->
                    <h2><?php echo $dalam->dalam_judul; ?></h2>
                    <!-- isi dalam -->
                    <p><?php echo $dalam->dalam_isi; ?></p>
                </div>

                <HR WIDTH=85% SIZE=5>

            <?php endforeach; ?>
        </div>

    </div>
</section>