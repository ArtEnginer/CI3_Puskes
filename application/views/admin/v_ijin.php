<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Layanan Luar Gedung
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Layanan Luar Gedung</a></li>
      <li class="active">Layanan Luar Gedung</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" href="<?php echo base_url() . 'adminkantor/ijin/add_ijin' ?>"><span class="fa fa-plus"></span> Add Layanan</a>
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
                    $ijin_id = $i['ijin_id'];
                    $ijin_judul = $i['ijin_judul'];
                    $ijin_isi = $i['ijin_isi'];
                    $ijin_tanggal = $i['tanggal'];
                    $ijin_author = $i['ijin_author'];
                    $ijin_gambar = $i['ijin_gambar'];
                    $ijin_views = $i['ijin_views'];
                    $kategori_id = $i['ijin_kategori_id'];
                    $kategori_nama = $i['ijin_kategori_nama'];

                    ?>
                    <tr>


                      <td><img src="<?php echo base_url() . 'assets/images/' . $ijin_gambar; ?>" style="width:100px;"></td>
                      <td><?php echo $ijin_judul; ?></td>
                      <td><?php echo $ijin_tanggal; ?></td>

                      <td><?php echo $ijin_views; ?></td>

                      <td style="text-align:right;">
                        <a class="btn" href="<?php echo base_url() . 'adminkantor/ijin/get_edit/' . $ijin_id; ?>"><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $ijin_id; ?>"><span class="fa fa-trash"></span></a>
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
  <strong>© <?php echo date('Y'); ?><a href="#"> IT-POLSKY</a>.</strong>
</footer>

<?php foreach ($data->result_array() as $i) :
  $ijin_id = $i['ijin_id'];
  $ijin_judul = $i['ijin_judul'];
  $ijin_gambar = $i['ijin_gambar'];
  ?>
  <!--Modal Hapus Pengguna-->
  <div class="modal fade" id="ModalHapus<?php echo $ijin_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
          <h4 class="modal-title" id="myModalLabel">Hapus Data</h4>
        </div>
        <form class="form-horizontal" action="<?php echo base_url() . 'adminkantor/ijin/hapus_ijin' ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <input type="hidden" name="kode" value="<?php echo $ijin_id; ?>" />
            <input type="hidden" value="<?php echo $ijin_gambar; ?>" name="gambar">
            <p>Apakah Anda yakin mau menghapus data <b><?php echo $ijin_judul; ?></b> ?</p>

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
      text: "data Berhasil disimpan ke database.",
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
      text: "data berhasil di update",
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
      text: "data Berhasil dihapus.",
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