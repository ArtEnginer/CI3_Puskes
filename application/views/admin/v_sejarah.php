<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      List Sejarah
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Sejarah</a></li>
      <li class="active">List Sejarah</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'superadmin/sejarah/add_sejarah' ?>"><span class="fa fa-plus"></span> Post sejarah</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                  <tr>
                    <th>Gambar</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Baca</th>

                    <th style="text-align:right;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 0;
                  foreach ($data->result_array() as $i) :
                    $no++;
                    $sejarah_id = $i['sejarah_id'];
                    $sejarah_judul = $i['sejarah_judul'];
                    $sejarah_isi = $i['sejarah_isi'];
                    $sejarah_tanggal = $i['tanggal'];
                    $sejarah_author = $i['sejarah_author'];
                    $sejarah_gambar = $i['sejarah_gambar'];
                    $sejarah_views = $i['sejarah_views'];
                    $kategori_id = $i['sejarah_kategori_id'];
                    $kategori_nama = $i['sejarah_kategori_nama'];

                    ?>
                    <tr>
                      <td><img src="<?php echo base_url() . 'assets/images/' . $sejarah_gambar; ?>" style="width:100px;"></td>
                      <td><?php echo $sejarah_judul; ?></td>
                      <td><?php echo $sejarah_tanggal; ?></td>

                      <td><?php echo $sejarah_views; ?></td>

                      <td style="text-align:right;">
                        <a class="btn" href="<?php echo base_url() . 'superadmin/sejarah/get_edit/' . $sejarah_id; ?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $sejarah_id; ?>"><span class="fa fa-trash"></span></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
  </div>
  <strong>© <?php echo date('Y'); ?><a href="#"> IT-POLSKY</a>.</strong>
</footer>


<?php foreach ($data->result_array() as $i) :
  $sejarah_id = $i['sejarah_id'];
  $sejarah_judul = $i['sejarah_judul'];
  $sejarah_gambar = $i['sejarah_gambar'];
  ?>
  <!--Modal Hapus Pengguna-->
  <div class="modal fade" id="ModalHapus<?php echo $sejarah_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
          <h4 class="modal-title" id="myModalLabel">Hapus Berita</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url() . 'superadmin/sejarah/hapus_sejarah' ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <input type="hidden" name="kode" value="<?php echo $sejarah_id; ?>" />
            <input type="hidden" value="<?php echo $sejarah_gambar; ?>" name="gambar">
            <p>Apakah Anda yakin mau menghapus Posting <b><?php echo $sejarah_judul; ?></b> ?</p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>
<script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script>
<!-- page script -->
<script>
  $(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<?php if ($this->session->flashdata('msg') == 'error') : ?>
  <script type="text/javascript">
    $.toast({
      heading: 'Error',
      text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
      showHideTransition: 'slide',
      icon: 'error',
      hideAfter: false,
      position: 'bottom-right',
      bgColor: '#FF4859'
    });
  </script>

<?php elseif ($this->session->flashdata('msg') == 'warning') : ?>
  <script type="text/javascript">
    $.toast({
      heading: 'Warning',
      text: "Gambar yang Anda masukan terlalu besar.",
      showHideTransition: 'slide',
      icon: 'warning',
      hideAfter: false,
      position: 'bottom-right',
      bgColor: '#FFC017'
    });
  </script>


<?php elseif ($this->session->flashdata('msg') == 'success') : ?>
  <script type="text/javascript">
    $.toast({
      heading: 'Success',
      text: "Sejarah Berhasil disimpan ke database.",
      showHideTransition: 'slide',
      icon: 'success',
      hideAfter: false,
      position: 'bottom-right',
      bgColor: '#7EC857'
    });
  </script>
<?php elseif ($this->session->flashdata('msg') == 'info') : ?>
  <script type="text/javascript">
    $.toast({
      heading: 'Info',
      text: "Sejarah berhasil di update",
      showHideTransition: 'slide',
      icon: 'info',
      hideAfter: false,
      position: 'bottom-right',
      bgColor: '#00C9E6'
    });
  </script>
<?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>
  <script type="text/javascript">
    $.toast({
      heading: 'Success',
      text: "Sejarah Berhasil dihapus.",
      showHideTransition: 'slide',
      icon: 'success',
      hideAfter: false,
      position: 'bottom-right',
      bgColor: '#7EC857'
    });
  </script>
<?php else : ?>

<?php endif; ?>
</body>

</html>