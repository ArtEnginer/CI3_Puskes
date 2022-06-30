<!--============================= Nonnonijin =============================-->
<title>Layanan Dalam Gedung</title>
<div class="row text-center bg-success">
    <div class="col-md-12 mb-2 p-4 ">
        <div class="row text-center bg-success">
            <div class="col-md-12 mb-2 p-4 ">
                <h2 class="event-title">Layanan Dalam Gedung</h2>
            </div>
        </div>
    </div>
</div>
<section class="welcome_about">
    <div class="container ">
        <div class="row mb-1">
            <div class="col-md-12">

                <div class="contact-title">
                    <!-- <h2>Layanan Dalam Gedung</h2> -->
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table id="display" class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Layanan</th>
                                <th>Keterangan</th>
                                <th>Detail</th>
                            </tr>

                        </thead>

                        <tbody>
                            <?php
                            $no = 0;
                            foreach ($dalam->result() as $noni) :
                                $no++;
                                $judul = ['dalam_judul'];
                                $ket = ['dalam_ket'];
                            ?>

                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $noni->dalam_judul; ?></td>
                                    <td><?php echo $noni->dalam_ket; ?></td>
                                    <!-- <td><?php echo $noni->dalam_ket; ?></td> -->
                                    <td><a href="<?php echo base_url() . 'dalam/detail/' . $noni->dalam_id; ?> " class="badge badge-success">Detail Layanan</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
</section>