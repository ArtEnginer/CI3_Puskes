<title>Galeri</title>
<div class="row text-center bg-success">
  <div class="col-md-12 mb-2 p-4 ">
    <div class="row text-center bg-success">
      <div class="col-md-12 mb-2 p-4 ">

        <h2>Galeri Foto Kegiatan Puskesmas</h2>
      </div>
    </div>
  </div>
</div>

<div class="gallery-wrap">
  <div class="container">
    <!-- Style 2 -->
    <div class="row">
      <div class="col-md-12">
        <!-- <h3 class="gallery-style">Galeri Foto Kegiatan Puskesmas</h3> -->
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-12">
        <div id="gallery">
          <div id="gallery-content">
            <div id="gallery-content-center">
              <?php foreach ($all_galeri->result() as $row) : ?>
                <a href="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" class="image-link2">
                  <img src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" class="all img-fluid" alt="#" />
                </a>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--//End Style 2 -->

  </div>
</div>
<!--//End Gallery -->