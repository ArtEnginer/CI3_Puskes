<title><?= $judul; ?></title>
<div class="row text-center bg-success">
  <div class="col-md-12 mb-2 p-4 ">
    <div class="row text-center bg-success">
      <div class="col-md-12 mb-2 p-4 ">
        <h2 class="event-title">
          Data Dokter dan Perawat
        </h2>
      </div>
    </div>
  </div>
</div>

<section class="our-teachers">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="contact-title">

        </div>


        <div class="box-body">
          <table id="display" class="table table-striped" style="font-size:13px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Photo</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tempat/Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($data->result_array() as $i) :
                $no++;
                $id = $i['dokter_id'];
                $nip = $i['dokter_nip'];
                $nama = $i['dokter_nama'];
                $jenkel = $i['dokter_jenkel'];
                $tmp_lahir = $i['dokter_tmp_lahir'];
                $tgl_lahir = $i['dokter_tgl_lahir'];
                $jabat = $i['dokter_jabatan'];
                $photo = $i['dokter_photo'];

              ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <?php if (empty($photo)) : ?>
                    <td><img width="40" height="40" class="img-circle" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>"></td>
                  <?php else : ?>
                    <td><img width="140" height="200" class="img-circle" src="<?php echo base_url() . 'assets/images/' . $photo; ?>"></td>
                  <?php endif; ?>
                  <td><?php echo $nip; ?></td>
                  <td><?php echo $nama; ?></td>
                  <td><?php echo $tmp_lahir . ', ' . $tgl_lahir; ?></td>
                  <?php if ($jenkel == 'L') : ?>
                    <td>Laki-Laki</td>
                  <?php else : ?>
                    <td>Perempuan</td>
                  <?php endif; ?>
                  <td><?php echo $jabat; ?></td>

                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <!-- End row -->
    </div>
</section>






<!--//End Style 2 -->