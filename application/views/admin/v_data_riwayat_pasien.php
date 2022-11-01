<title><?= $title; ?></title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
    <div class="col-sm-12">

            <ul class="nav nav-tabs">
            
            <li class="nav-item">

              <a class="nav-link" aria-current="page" href="<?php echo base_url('admin/DataPasien/detail_pasien/').$detail->id_pasien ?>">Data Pasien</a>

            </li>

            <li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url('admin/DataPasien/riwayat_periksa/').$detail->id_pasien ?>">Riwayat Periksa</a>
            </li>
          </ul>


          </div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
          <a>Riwayat Periksa Pasien <?php echo "<strong>".$detail->nama."</strong>" ?></a>
        </div>
        <div class="card-body">
          
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
        
         
          <table class="table table-hover table-striped table-bordered" id="table1">
            <thead style="text-align: center;">
              <th>#</th>
              <th>Tanggal</th>
              <th>Keluhan</th>
              <th>BB/TB</th>
              <th>Status Gizi</th>
              <th>Anamnesis</th>
              <th>Pemeriksaan Fisik</th>
              <th>Diagnosis</th>
              <th>Resep</th>
            </thead>


            <tbody>
              <?php 

              $no = 1;
              foreach ($riwayat as $us) : ?>

              <tr>
                <td><?php echo $no++; ?></td>
                
                <td><?php echo $us->tgl_kunjungan ?></td>
                <td><?php echo $us->keluhan ?></td>
                <td style="text-align:center;"><?php echo $us->bb." kg"?><br>
                  <hr style="margin-top:0;margin-bottom:0;">
                  <?php echo $us->tb." cm"?>
                </td>
                <td><?php echo $us->status_gizi ?></td>
                <td><?php echo $us->anamnesis ?></td>
                <td><?php echo $us->hasil_periksa ?></td>
                <td><?php echo $us->diagnosis ?></td>
                <td><?php echo $us->obat ?></td>

              </tr>

              <?php endforeach; ?>
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
