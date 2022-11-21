<title><?= $title; ?></title>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Hasil Pencarian Data Pasien</h4>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <section class="content">

    <!-- Default box -->
    <div class="card">
      
      <div class="card-body">


        <table class="table table-hover table-striped table-bordered" id="table1">
          <thead style="text-align: center;">
            <th>#</th>
            <th>Nama Pasien</th>
            <th>No RM</th>
            <th>Gender / Usia</th>
            <th>No HP</th>
            <th>Alamat</th>
            <th style="text-align: center;">Action</th>
          </thead>


          <tbody>

            <?php

            if(count($cari)>0)
            {
              $no = 1;
              foreach ($cari as $us) {?>


                <!-- echo $us->nama . " => " . $us->no_rm ."<br>"; -->

                <tr>
                  <td><?php echo $no++; ?></td>
                  <td ><?php echo $us->nama ?></td>
                  <td align="center"><?php echo $us->norm ?></td>



                  <td style="text-align: center;">
                    <?php

                    if ($us->jenis_kelamin == '1') {
                      echo "Laki-laki";
                    }else{
                      echo "Perempuan";
                    }?><br>

                    <hr style='margin-bottom:0;margin-top:0'>
                    <?php 

                    $tmt = $us->tanggal_lahir;

                    if($tmt != '0000-00-00') {

                  $bday = new DateTime($tmt); // Your date of birth
                  $today = new Datetime(date('m.d.y'));
                  $diff = $today->diff($bday);
                  
                  printf("<span class='badge badge-secondary'>%d Th, %d Bln, %d Hari </span>", $diff->y, $diff->m, $diff->d);

                  printf("\n");


                  }else{

                    echo "<span class='badge badge-danger'>Tgl Lahir Belum Diisi</span>";
                  }

                ?>
              </td>

              <td><?php echo $us->nohp ?></td>
              <td><?php echo $us->alamat ?></td>

              <td style="text-align: center;">
                <a class="btn btn-info btn-sm" href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$us->norm ?>">
                  <i class="fas fa-info-circle">
                  </i>
                  View
                </a>
              </td>

            </tr>

          <?php }
        }

        else
        {
      // $this->session->set_flashdata('flash', 'RM Benar');
          $this->session->set_flashdata('pesan', 
            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong> Data Pasien Tidak Ditemukan, Pastikan Nomor Rekam Medis (RM) atau Nama Lengkap Benar!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');

          redirect('Ass/MasterPasien/cari_pasien');
        }

        ?>



      </tbody>

    </table>



  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <!-- Footer -->
  </div>
  <!-- /.card-footer-->
</div>
<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



