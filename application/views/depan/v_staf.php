<title><?= $judul; ?></title>
<section class="our-teachers">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="contact-title">
          <h2>Data Staff</h2>
        </div>


        <div class="box-body">
          <table id="display" class="table table-striped" style="font-size:13px;">
            <thead>
              <tr>
                <th>No</th>
                <th>Photo</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Jenip Kelamin</th>
                <th>Jabatan</th>

              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($data->result_array() as $i) :
                $no++;
                $id = $i['staf_id'];
                $nip = $i['staf_nip'];
                $nama = $i['staf_nama'];
                $jenkel = $i['staf_jenkel'];
                $jabatan_id = $i['staf_jabatan_id'];
                $jabatan_nama = $i['jabatan_nama'];
                $photo = $i['staf_photo']

                ?>
                <tr>
                  <td syle="alignment:center"><?php echo $no; ?></td>
                  <?php if (empty($photo)) : ?>
                    <td><img width="40" height="40" class="img-circle" src="<?php echo base_url() . 'assets/images/user_blank.png'; ?>"></td>
                  <?php else : ?>
                    <td><img width="140" height="200" class="img-circle" src="<?php echo base_url() . 'assets/images/' . $photo; ?>"></td>
                  <?php endif; ?>
                  <td><?php echo $nip; ?></td>
                  <td><?php echo $nama; ?></td>

                  <?php if ($jenkel == 'L') : ?>
                    <td>Laki-Laki</td>
                  <?php else : ?>
                    <td>Perempuan</td>
                  <?php endif; ?>
                  <td><?php echo $jabatan_nama; ?></td>

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