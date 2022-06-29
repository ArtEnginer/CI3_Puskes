<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Pasien</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/faviconkota.jpg' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />



</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <!--Header-->
        <?php
        $this->load->view('admin/v_header');
        ?>

        <!-- sidebar -->

        <?php
        $this->load->view('admin/v_sideadmin');
        ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Data Pasien
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Administrasi</a></li>
                    <li class="active">Data pasien</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">

                            <div class="box">
                                <div class="box-header">
                                    <a class="btn btn-success btn-flat btn-add"><span class="fa fa-plus"></span> Add
                                        Data</a>
                                    <a href="<?= site_url("adminkantor/pasien/laporan_pasien") ?>" class="btn btn-primary">

                                        <i class="fa fa-list"></i> Laporan</a>
                                       


                                </div>
                                <!-- /.box-header -->
                                <div class="box-body">
                                    <table id="example1" class="table table-striped" style="font-size:13px;">
                                        <thead>
                                            <tr>
                                                <th>Nomor</th>
                                                <th>Kode</th>
                                                <th>Nama</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Status</th>
                                                <th style="text-align:right;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $no = 0;
                                            foreach ($data->result_object() as $i) :

                                            ?>
                                                <tr>
                                                    <td><?= $i->nomor_antrian ?></td>
                                                    <td><?= $i->kode_antrian ?></td>
                                                    <td><?= $i->nama_pasien ?></td>
                                                    <td><?= $i->alamat_pasien ?></td>
                                                    <td><?= $i->jenis_kelamin ?></td>
                                                    <td><a href="#!" class="badge badge-danger" style="background-color: <?= $model->getStatus($i->status)['style'] ?>;"><?= $model->getStatus($i->status)['message'] ?></a>
                                                    </td>
                                                    <td style="text-align:right;">
                                                        <a class="btn btn-ubah" data-id="<?= $i->id; ?>"><span class="fa fa-pencil"></span></a>
                                                        <?php if ($i->status == 0) : ?>
                                                            <a class="btn btn-layani" data-id="<?= $i->id; ?>"><span class="fa fa-clock-o"></span></a>
                                                        <?php elseif ($i->status == 1) : ?>
                                                            <a class="btn btn-selesai" data-id="<?= $i->id; ?>"><span class="fa fa-check"></span></a>
                                                        <?php else : ?>
                                                            <a class="btn"><span class="fa fa-check-circle"></span></a>
                                                        <?php endif ?>
                                                        <a class="btn btn-hapus" data-id="<?= $i->id; ?>"><span class="fa fa-trash"></span></a>
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

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="myModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary btn-submit">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

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
        <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>">
        </script>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            const base_url = "<?= base_url() ?>";
            let id = 0;
            const modal = {
                'title': $('.modal-title'),
                'body': $('.modal .modal-body'),
                'submit': $('.modal .btn-submit'),
            };

            const formPrimary =
                `<form class="form-horizontal" id="formKu"><div class="form-group"><label for="nama_pasien" class="col-sm-4 control-label">Nama Pasien</label><div class="col-sm-7"><input type="text" name="nama_pasien" class="form-control" id="nama_pasien" placeholder="Nama Pasien" required></div></div><div class="form-group"><label for="alamat_pasien" class="col-sm-4 control-label">Alamat</label><div class="col-sm-7"><textarea class="form-control" rows="3" name="alamat_pasien" id="alamat_pasien" placeholder="Alamat ..." required></textarea></div></div><div class="form-group"><label for="jenis_kelamin" class="col-sm-4 control-label">Jenis Kelamin</label><div class="col-sm-7 d-flex align-items-center"><div class="form-check form-check-inline ml-4"><input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_lk" value="Laki-Laki" required> Laki-Laki</div><div class="form-check form-check-inline ml-4"><input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pr" value="Perempuan"> Perempuan</div></div></div><div class="form-group"><label for="keluhan" class="col-sm-4 control-label">Keluhan</label><div class="col-sm-7"><textarea class="form-control" rows="3" name="keluhan" id="keluhan" placeholder="Ceritakan Keluhan Anda ..." required></textarea></div></div><div class="form-group"><label for="nomor_kis" class="col-sm-4 control-label">Nomor KIS</label><div class="col-sm-7"><input type="number" name="nomor_kis" class="form-control" id="nomor_kis" placeholder="Nomor KIS" required></div></div>
                <div class="form-group"><label for="nomor_kk" class="col-sm-4 control-label">Nomor kk</label><div class="col-sm-7"><input type="number" name="nomor_kk" class="form-control" id="nomor_kk" placeholder="Nomor kk" required></div></div>
                </form>`;

            $(document).ready(function() {
                $(document).on('click', '#btn-add', function() {
                    $.ajax({
                        type: "POST",
                        url: `${base_url}adminkantor/pasien/add`,
                        data: $('#formKu').serializeArray(),
                        dataType: "json",
                        success: function(response) {
                            if (response.status == 400) {
                                Object.keys(response.message).forEach(function(key) {
                                    $.toast({
                                        heading: 'Error',
                                        text: response.message[key],
                                        showHideTransition: 'fade',
                                        icon: 'error'
                                    })
                                    // console.log(key, response.message[key]);
                                });
                            }
                            if (response.status == 201) {
                                $('#myModal').modal('hide');
                                $.toast({
                                    heading: 'Success',
                                    text: 'Data baru berhasil ditambahkan',
                                    showHideTransition: 'slide',
                                    icon: 'success'
                                })
                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        }
                    });
                });
                $(document).on('click', '#btn-edit', function() {
                    $.ajax({
                        type: "POST",
                        url: `${base_url}adminkantor/pasien/edit/${id}`,
                        data: $('#formKu').serializeArray(),
                        dataType: "json",
                        success: function(response) {
                            if (response.status == 400) {
                                Object.keys(response.message).forEach(function(key) {
                                    $.toast({
                                        heading: 'Error',
                                        text: response.message[key],
                                        showHideTransition: 'fade',
                                        icon: 'error'
                                    })
                                    // console.log(key, response.message[key]);
                                });
                            }
                            if (response.status == 200) {
                                $('#myModal').modal('hide');
                                $.toast({
                                    heading: 'Success',
                                    text: 'Data berhasil diedit',
                                    showHideTransition: 'slide',
                                    icon: 'success'
                                })
                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        }
                    });
                });
                $(document).on('click', '#btn-delete', function() {
                    $.ajax({
                        type: "GET",
                        url: `${base_url}adminkantor/pasien/delete/${id}`,
                        dataType: "json",
                        success: function(response) {
                            if (response.status == 400) {
                                $.toast({
                                    heading: 'Error',
                                    text: response.message,
                                    showHideTransition: 'fade',
                                    icon: 'error'
                                })
                            }
                            if (response.status == 200) {
                                $('#myModal').modal('hide');
                                $.toast({
                                    heading: 'Success',
                                    text: response.message,
                                    showHideTransition: 'slide',
                                    icon: 'success'
                                })
                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        }
                    });
                });
                $(document).on('click', '#btn-layani', function() {
                    $.ajax({
                        type: "GET",
                        url: `${base_url}adminkantor/pasien/layani/${id}`,
                        dataType: "json",
                        success: function(response) {
                            if (response.status == 400) {
                                $.toast({
                                    heading: 'Error',
                                    text: response.message,
                                    showHideTransition: 'fade',
                                    icon: 'error'
                                })
                            }
                            if (response.status == 200) {
                                $('#myModal').modal('hide');
                                $.toast({
                                    heading: 'Success',
                                    text: response.message,
                                    showHideTransition: 'slide',
                                    icon: 'success'
                                })
                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        }
                    });
                });
                $(document).on('click', '#btn-selesai', function() {
                    $.ajax({
                        type: "GET",
                        url: `${base_url}adminkantor/pasien/selesai/${id}`,
                        dataType: "json",
                        success: function(response) {
                            if (response.status == 400) {
                                $.toast({
                                    heading: 'Error',
                                    text: response.message,
                                    showHideTransition: 'fade',
                                    icon: 'error'
                                })
                            }
                            if (response.status == 200) {
                                $('#myModal').modal('hide');
                                $.toast({
                                    heading: 'Success',
                                    text: response.message,
                                    showHideTransition: 'slide',
                                    icon: 'success'
                                })
                                setTimeout(() => {
                                    location.reload();
                                }, 2000);
                            }
                        }
                    });
                });
                $(document).on('click', '.btn-add', function() {
                    modal.title.text('Tambah Pasien Baru');
                    modal.body.html(formPrimary);
                    modal.submit.attr("id", "btn-add");
                    modal.submit.text('Tambahkan');
                    $('#myModal').modal('show');
                });
                $(document).on('click', '.btn-ubah', function() {
                    id = $(this).data("id");
                    modal.title.text('Ubah Data Pasien');
                    modal.body.html(formPrimary);
                    modal.submit.attr("id", "btn-edit");
                    modal.submit.text('Simpan');
                    $.ajax({
                        type: "GET",
                        url: `${base_url}adminkantor/pasien/get/${id}`,
                        dataType: "json",
                        success: function(response) {
                            if (response.status == 400) {
                                $.toast({
                                    heading: 'Error',
                                    text: response.message,
                                    showHideTransition: 'fade',
                                    icon: 'error'
                                })
                            }
                            if (response.status == 200) {
                                Object.keys(response.data).forEach(function(key) {
                                    if (key == 'jenis_kelamin') {
                                        $(`form [value="${response.data[
                                        key]}"]`).attr('checked', true);
                                    } else {
                                        $(`form [name="${key}"]`).val(response.data[
                                            key]);
                                    }
                                });
                            }
                        }
                    });
                    $('#myModal').modal('show');
                });
                $(document).on('click', '.btn-hapus', function() {
                    id = $(this).data("id");
                    modal.title.text('Hapus Data Pasien');
                    modal.body.html('<p>Apakah anda yakin untuk menghapus data pasien ini ?</p>');
                    modal.submit.attr("id", "btn-delete");
                    modal.submit.text('Hapus');
                    $('#myModal').modal('show');
                });
                $(document).on('click', '.btn-layani', function() {
                    id = $(this).data("id");
                    modal.title.text('Layani Data Pasien');
                    modal.body.html('<p>Ubah status ini menjadi "Sedang Dilayani" ?</p>');
                    modal.submit.attr("id", "btn-layani");
                    modal.submit.text('Layani');
                    $('#myModal').modal('show');
                });
                $(document).on('click', '.btn-selesai', function() {
                    id = $(this).data("id");
                    modal.title.text('Selesai Pelayanan');
                    modal.body.html('<p>Selesaikan pelayanan pasien ini ?</p>');
                    modal.submit.attr("id", "btn-selesai");
                    modal.submit.text('Selesai');
                    $('#myModal').modal('show');
                });
            });
        </script>
</body>

</html>