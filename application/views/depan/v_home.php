<script language="JavaScript">
    var txt = "UPT Puskesmas Tanah Abang ";
    var kecepatan = 450;
    var segarkan = null;

    function bergerak() {
        document.title = txt;
        txt = txt.substring(1, txt.length) + txt.charAt(0);
        segarkan = setTimeout("bergerak()", kecepatan);
    }
    bergerak();
</script>

<!-- jQuery Plugin -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>



<!-- Preloader -->
<script type="text/javascript">
    $(window).load(function() {
        $("#loading").fadeOut("slow");

    });
</script>

<div class="box" id="loading">
    <div class="b b1" id="loading"></div>
    <div class="b b2" id="loading"></div>
    <div class="b b3" id="loading"></div>
    <div class="b b4" id="loading"></div>
</div>


<section>


   

</section>

<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <img src="<?php echo base_url() . 'theme/images/puskes1.jpg' ?>" class="img-fluid about-img" alt="Kepala Puskes">
            </div>


            <div class="col-md-8">
                <h2>Selamat Datang | UPT Puskesmas Tanah Abang | Welcome</h2>
                <p>Selamat Datang di Website Resmi Puskesmas Tanah Abang. Kami akan selalu berbagi informasi dalam
                    website ini, yang merupakan salah satu wujud pelayanan kami yang ramah, nyaman dan berkualitas
                    kepada masyarakat. Besar harapan kami sajian dalam website ini dapat bermanfaat bagi kita semua.
                    Untuk kesempurnaan website ini kami mohon info, saran dan kontribusi anda sangat kami harapkan.
                    Terima kasih.</p>
                <p>
            </div>



        </div>
    </div>
</section>

<div class="container">
    <div class="row text-center">
        <div class="col">
            <a class="btn btn-primary" role="button" href="<?= base_url() ?>antrian">Ambil Nomor Antrian</a>
        </div>
    </div>
</div>


<!--============================= EVENTS =============================-->

<section class="event">

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align:center">Pengumuman</h2>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-2"></div>

            <div class="col-8">
                <div class="event-img2">
                    <?php foreach ($pengumuman->result() as $row) : ?>
                        <div class="blog-single-item">
                            <div class="blog-img_block">
                                <img src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="blog-img">
                                <div class="blog-date">
                                    <span><?php echo $row->tanggal; ?></span>
                                </div>
                            </div>
                            <div class="blog-tiltle_block">
                                <h4><a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>"><?php echo $row->tulisan_judul; ?></a></h4>
                                <h6> <a href="#"><i class="fa fa-user" aria-hidden="true"></i><span><?php echo $row->tulisan_author; ?></span> </a> | <a href="#"><i class="fa fa-tags" aria-hidden="true"></i><span><?php echo $row->tulisan_kategori_nama; ?></span></a></h6>
                                <?php echo limit_words($row->tulisan_isi, 10) . '...'; ?>
                                <div class="blog-icons">
                                    <div class="blog-share_block">
                                        <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-2"></div>
        </div>


        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align:center">Agenda</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <?php foreach ($agenda->result() as $row) : ?>
                    <div class="event_date">
                        <div class="event-date-wrap">
                            <p><?php echo date("d", strtotime($row->agenda_tanggal)); ?></p>
                            <span><?php echo date("M. y", strtotime($row->agenda_tanggal)); ?></span>
                        </div>
                    </div>
                    <div class="date-description">
                        <h3><a href="<?php echo site_url('agenda'); ?>"><?php echo $row->agenda_nama; ?></a></h3>
                        <p><?php echo limit_words($row->agenda_deskripsi, 10) . '...'; ?></p>
                        <hr class="event_line">
                    </div>
                <?php endforeach; ?>

            </div>
        </div>


    </div>
    </div>
</section>
<!--//END EVENTS -->


<!--============================= statistik =============================-->
<section class="event">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <h2 style="text-align:center">Statistik</h2>
                <!-- Info Boxes Style 2 -->
                <div class="info-box bg-yellow">
                    <span class="info-box-icon"><i class="fa fa-globe"></i></span>
                    <?php
                    $bataswaktu = time() - 300;
                    $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE pengunjung_id > '$bataswaktu'");
                    $jml = $query->num_rows();

                    ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Hits :</span>
                        <span class="info-box-number"><?php $count_my_page = ("hitcounter.txt");
                                                        $hits = file($count_my_page);
                                                        $hits[0]++;
                                                        $fp = fopen($count_my_page, "w");
                                                        fputs($fp, "$hits[0]");
                                                        fclose($fp);
                                                        echo $hits[0]; ?></span>



                        <div class="progress">
                            <div class="progress-bar  bg-success" style="width: 100%"></div>
                        </div>

                    </div>
                    <!--  -->
                </div>
                <!-- /.info-box -->
                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <?php
                    $kunjungan       =  $this->model_utama->kunjungan();
                    $pengunjungonline = $this->model_utama->pengunjungonline()->num_rows();
                    ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Pengunjung Online :</span>
                        <span class="info-box-number"><?= $pengunjungonline; ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 100%"></div>
                        </div>

                    </div>
                    <!-- /.info-box-content -->
                </div>

                <div class="info-box bg-green">
                    <span class="info-box-icon"><i class="fa fa-user"></i></span>
                    <?php
                    // $kunjungan       =  $this->model_utama->kunjungan();
                    $totalPengunjung  = $this->model_utama->totalPengunjung()->row_array();
                    ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Total pengunjung :</span>
                        <span class="info-box-number"><?= $totalPengunjung['total']; ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-warning" style="width: 100%"></div>
                        </div>

                    </div>
                    <!-- /.info-box-content -->
                </div>

                <!--  -->
                <!-- /.info-box -->
                <div class="info-box bg-red">
                    <span class="info-box-icon"><i class="fa fa-users"></i></span>
                    <?php
                    $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(DATE_SUB(CURDATE(), INTERVAL 1 MONTH),'%m%y')");
                    $jml = $query->num_rows();
                    ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Pengunjung Bulan Lalu :</span>
                        <span class="info-box-number"><?php echo number_format($jml); ?></span>

                        <div class="progress">
                            <div class="progress-bar bg-info" style="width: 100%"></div>
                        </div>

                    </div>
                    <!-- /.info-box-content -->
                </div>

                <!--  -->
                <div class="info-box bg-aqua">
                    <span class="info-box-icon"><i class="fa fa-users"></i></span>
                    <?php
                    $query = $this->db->query("SELECT * FROM tbl_pengunjung WHERE DATE_FORMAT(pengunjung_tanggal,'%m%y')=DATE_FORMAT(CURDATE(),'%m%y')");
                    $jml = $query->num_rows();
                    ?>
                    <div class="info-box-content">
                        <span class="info-box-text">Pengunjung Bulan Ini :</span>
                        <span class="info-box-number"><?php echo number_format($jml); ?></span>

                        <div class="progress">
                            <div class="progress-bar" style="width: 100%"></div>
                        </div>

                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box-content -->
            </div>

            <div class="col-md-4">
                <h2 style="text-align:center">Link | Tautan :</h2>
                <br>
                <div>
                    <a href="https://dinkes.mubakab.go.id/" target="blank">
                        <img src="<?php echo base_url() . 'theme/images/th.jpg' ?>" width="50px;" class="img-fluid" alt="">
                        &nbsp;
                        <a href="https://dinkes.mubakab.go.id/" target="blank" style="color :green;">Dinas Kesehatan
                            Muba</a>
                    </a>

                </div>
                <br>
                <div>
                    <a href="https://www.google.com/maps/search/lokasi+puskesmas+tanah+abang+kecamatan+batanghari+leko/@-2.690886,103.7857203,17z/data=!3m1!4b1" target="blank">
                        <img src="<?php echo base_url() . 'theme/images/kota.jpg' ?>" width="50px;" class="img-fluid" alt="">
                        &nbsp;
                        <a href="https://www.google.com/maps/search/lokasi+puskesmas+tanah+abang+kecamatan+batanghari+leko/@-2.690886,103.7857203,17z/data=!3m1!4b1" target="blank" style="color :green;">UPT Puskesmas Tanah Abang</a>
                    </a>

                </div>
                <br>
                <div>
                    <a href="https://rsudsekayu.mubakab.go.id/" target="blank">
                        <img src="<?php echo base_url() . 'theme/images/logo-rs.png' ?>" width="50px;" class="img-fluid" alt="">
                        &nbsp;
                        <a href="https://rsudsekayu.mubakab.go.id/" target="blank" style="color :green;">RSUD Sekayu
                            Muba</a>
                    </a>

                </div>
                <br>
                <div>
                    <a href="https://www.mubakab.go.id/" target="blank">
                        <img src="<?php echo base_url() . 'theme/images/muba.png' ?>" width="50px;" class="img-fluid" alt="">
                        &nbsp;
                        <a href="https://www.mubakab.go.id/" target="blank" style="color :green;">Pemerintah Kabupaten
                            Muba</a>
                    </a>

                </div>
                <br>
                <div>
                    <a href="https://musibanyuasinkab.bps.go.id/" target="blank">
                        <img src="<?php echo base_url() . 'theme/images/bps.png' ?>" width="50px;" class="img-fluid" alt="">
                        &nbsp;
                        <a href="https://musibanyuasinkab.bps.go.id/" target="blank" style="color :green;">Badan Pusat
                            Statistik Muba</a>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <h2 style="text-align:center">Polling :</h2>
                <canvas id="myChart" width="400" height="400"></canvas>
                <script>
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var data_jumlah = [];

                    $.post("<?= base_url('home/getData') ?>",
                        function(data) {
                            var obj = JSON.parse(data);
                            $.each(obj, function(test, item) {
                                data_jumlah.push(item.total1)
                                data_jumlah.push(item.total2)
                                data_jumlah.push(item.total3)
                                data_jumlah.push(item.total4)
                            });

                            var myChart = new Chart(ctx, {
                                type: 'bar',
                                data: {
                                    labels: ['Sangat Baik', 'Baik', 'cukup', 'kurang'],
                                    datasets: [{
                                        label: '# Polling Website',
                                        data: data_jumlah,

                                        backgroundColor: [

                                            'rgba(255, 206, 86, 0.2)',
                                            'rgba(75, 192, 192, 0.2)',
                                            'rgba(153, 102, 255, 0.2)',
                                            'rgba(255, 99, 132, 0.2)'
                                        ],
                                        borderColor: [

                                            'rgba(255, 206, 86, 1)',
                                            'rgba(75, 192, 192, 1)',
                                            'rgba(153, 102, 255, 1)',
                                            'rgba(255, 99, 132, 1)'
                                        ],
                                        borderWidth: 1
                                    }]
                                },
                                options: {
                                    scales: {
                                        yAxes: [{
                                            ticks: {
                                                beginAtZero: true
                                            }
                                        }]
                                    }
                                }
                            });

                        });
                </script>


                <button type="submit" class="btn btn-success ml-4" data-toggle="modal" data-target="#myModal">Vote</button>

                <!--Modal Add Pengguna-->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                                <h4 class="modal-title" id="myModalLabel">Polling </h4>
                            </div>
                            <form class="form-horizontal" action="<?php echo base_url() . 'home/simpan_poll' ?>" method="post" enctype="multipart/form-data">

                                <div class="modal-body">

                                    <div class="form-group">
                                        <h6 style="font-family: arial; font-size: 15px;" class="m-12">Menurut Anda
                                            Bagaimana Tampilan dan Penyajian Data di Situs web ini ? </h6>

                                        <fieldset class="form-group mt-2">

                                            <h6 style="font-size:11px; font-type: bold; ">Mohon di cek pada kolom
                                                dibawah </h6>

                                            <div class="row">
                                                <legend class="col-form-label col-sm-2 pt-0"></legend>
                                                <div class="col-sm-10">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="xpoll1" value="1" id="gridRadios1" value="option1">
                                                        <label class="form-check-label" for="gridRadios1">
                                                            Sangat Baik
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="xpoll2" value="1" id="gridRadios2" value="option2">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Baik
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="xpoll3" value="1" id="gridRadios2" value="option2">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Cukup
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="xpoll4" value="1" id="gridRadios2" value="option2">
                                                        <label class="form-check-label" for="gridRadios2">
                                                            Kurang
                                                        </label>
                                                    </div>

                                                </div>

                                            </div>
                                        </fieldset>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-deanger" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success">Vote</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>
</section>
<!--//END EVENTS -->