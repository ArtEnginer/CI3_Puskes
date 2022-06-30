<title>Nomor Penting</title>
<div class="row text-center bg-success">
  <div class="col-md-12 mb-2 p-4 ">
    <div class="row text-center bg-success">
      <div class="col-md-12 mb-2 p-4 ">
        <h2 class="event-title">Kontak</h2>
      </div>
    </div>
  </div>
</div>

<section class="welcome_about">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">

          <!-- <div>
            <h2>Kontak</h2>
          </div> -->


          <div class="box-body">
            <table id="example1" class="table table-striped">
              <thead>

                <tr>
                  <th>No</th>
                  <th>Nama User</th>
                  <th>Nomor HP</th>
                  <th>Keterangan</th>
                </tr>
              </thead>

              <tbody>
                <?php
                $no = 0;
                foreach ($nopen->result() as $np) :


                  $no++;
                  $user = ['nopen_user'];
                  $hp = ['nopen_hp'];
                  $ket = ['nopen_ket'];
                ?>

                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $np->nopen_user; ?></td>
                    <td><?php echo $np->nopen_hp; ?></td>
                    <td><?php echo $np->nopen_ket; ?></td>
                  </tr>

                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

</section>