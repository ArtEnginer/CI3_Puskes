<!--Counter Inbox-->
<?php
error_reporting(0);
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
$jum_comment = $query2->num_rows();
$jum_pesan = $query->num_rows();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Jadwal</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/faviconkota.jpg' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.css' ?>">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datepicker/datepicker3.css' ?>">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/iCheck/all.css' ?>">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/colorpicker/bootstrap-colorpicker.min.css' ?>">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.css' ?>">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/select2/select2.min.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">


</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

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
            <!-- flash msg -->
            <?php if ($this->session->flashdata('msg') != '') { ?>
                <div class="alert alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <?php echo $this->session->flashdata('msg'); ?>
                </div>
            <?php } ?>
            <!-- end flash msg -->
            <section class="content-header">
                <h1>
                    Jadwal
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">Jadwal</a></li>
                    <li class="active">Jadwal</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- SELECT2 EXAMPLE -->
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Jadwal</h3>
                    </div>
                    <?php
                    $b = $data->row_array();
                    ?>
                    <form action="<?php echo base_url() . 'adminkantor/jadwal/update_jadwal' ?>" method="post" enctype="multipart/form-data">

                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <input type="hidden" name="id" value="<?php echo $b['id']; ?>">
                                </div>
                                <!-- /.col -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Update</button>
                                        <!-- /.form-group -->
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.box-body -->

                        </div>
                </div>
                <!-- /.box -->


                <div class="row">
                    <div class="col-md-12">

                        <div class="box box-danger">
                            <div class="box-header">
                                <h3 class="box-title">Jadwal</h3>
                            </div>
                            <div class="box-body">

                                <textarea class="ckeditor" name="jadwal" required><?php echo $b['jadwal']; ?></textarea>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col (left) -->

                    <!-- /.col (right) -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-md-12">

                        <div class="box box-danger">
                            <div class="box-header">
                                <h3 class="box-title">Info</h3>
                            </div>
                            <div class="box-body">

                                <textarea class="ckeditor" name="info" required><?php echo $b['info']; ?></textarea>

                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                    </div>
                    <!-- /.col (left) -->

                    <!-- /.col (right) -->
                </div>
                </form>

            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <div class="pull-right hidden-xs">
            </div>
            <strong>© <?php echo date('Y'); ?><a href="#"> IT-POLSKY</a>.</strong>
        </footer>

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url() . 'assets/plugins/select2/select2.full.min.js' ?>"></script>
        <!-- InputMask -->
        <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.date.extensions.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.extensions.js' ?>"></script>
        <!-- date-range-picker -->
        <script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>
        <!-- bootstrap datepicker -->
        <script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>
        <!-- bootstrap color picker -->
        <script src="<?php echo base_url() . 'assets/plugins/colorpicker/bootstrap-colorpicker.min.js' ?>"></script>
        <!-- bootstrap time picker -->
        <script src="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>
        <!-- SlimScroll 1.3.0 -->
        <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>
        <!-- iCheck 1.0.1 -->
        <script src="<?php echo base_url() . 'assets/plugins/iCheck/icheck.min.js' ?>"></script>
        <!-- FastClick -->
        <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>
        <script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>
        <!-- Page script -->

        <script>
            $(function() {
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                var ckeditor = document.getElementsByClassName('ckeditor')

                CKEDITOR.replace('ckeditor');


            });
        </script>

        <script>
            $(function() {
                //Initialize Select2 Elements
                $(".select2").select2();

                //Datemask dd/mm/yyyy
                $("#datemask").inputmask("dd/mm/yyyy", {
                    "placeholder": "dd/mm/yyyy"
                });
                //Datemask2 mm/dd/yyyy
                $("#datemask2").inputmask("mm/dd/yyyy", {
                    "placeholder": "mm/dd/yyyy"
                });
                //Money Euro
                $("[data-mask]").inputmask();

                //Date range picker
                $('#reservation').daterangepicker();
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    format: 'MM/DD/YYYY h:mm A'
                });
                //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function(start, end) {
                        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    }
                );

                //Date picker
                $('#datepicker').datepicker({
                    autoclose: true
                });

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                });
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                });

                //Colorpicker
                $(".my-colorpicker1").colorpicker();
                //color picker with addon
                $(".my-colorpicker2").colorpicker();

                //Timepicker
                $(".timepicker").timepicker({
                    showInputs: false
                });
            });
        </script>
</body>

</html>