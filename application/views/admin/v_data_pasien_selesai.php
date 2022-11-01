<title><?= $title; ?></title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Antri Obat</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Dashboard') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Antri Obat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>
          <a>Antri Obat</a>
        </div>
        <div class="card-body">
          
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
         

          <!-- Button trigger modal -->
          <!-- <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambah-data">
            <i class="fas fa-plus-square"> </i> Tambah Data Pasien</a>
          </button> -->

          <table class="table table-hover table-striped table-bordered" id="table1">
            <thead style="text-align: center;">
              <th>#</th>
              <th>Nama Pasien</th>
              <th>No RM</th>
              <th>Keluhan</th>
              <th>Diagnosis</th>
              <th>Status</th>
              <th>Action</th>
              <!-- <th style="text-align: center;">Action</th> -->
            </thead>


            <tbody>
              <?php 

              $no = 1;
              foreach ($pasien as $us) : ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td ><?php echo $us->nama ?><br>
                  <span class="badge badge-success"><?php echo $us->gender ?></span><br>
                  <?php 
                  
                  $tmt = $us->tgl_lahir;

                  if($tmt != '0000-00-00') {

                  $bday = new DateTime($tmt); // Your date of birth
                  $today = new Datetime(date('m.d.y'));
                  $diff = $today->diff($bday);
                  
                  printf("<span class='badge badge-primary'>%d Th, %d Bln, %d Hari </span>", $diff->y, $diff->m, $diff->d);
                  printf("\n");
                  }else{
                      echo "<span class='badge badge-danger'>Tgl Lahir Belum Diisi</span>";
                  }?>
                </td>

                

                <td><?php echo $us->no_rm ?></td>
                <td><?php echo $us->keluhan ?></td>
                <td><?php echo $us->diagnosis ?></td>

                <td style="text-align: center;">
                    <?php if ($us->status == 2) {?>
                      <span class="badge badge-success"><?php echo "Selesai Periksa" ?></span>
                    <?php }else{ ?>
                      <span class="badge badge-warning"><?php echo "Status Tidak Ditemukan" ?></span>
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#detailmodal<?php echo $us->id_periksa; ?>">Detail <i class="fas fa-info-circle"></i></a>
                 </td>

              </tr>

              <?php endforeach; ?>
            </tbody>

          </table>


          <!-- MODAL UPDATE DATA -->
          <?php 
          $no = 0;
          foreach ($pasien as $us) : $no++; ?>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="detailmodal<?php echo $us->id_periksa; ?>" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Detail Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form>

                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Nama Pasien</label>
                      <input type="hidden" name="id_periksa" value="<?php echo $us->id_periksa; ?>" >
                      <input type="text" name="nama" class="form-control" value="<?php echo $us->nama; ?>" >
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>No RM</label>
                    <input type="text" class="form-control" value="<?php echo $us->no_rm; ?>" >
                    </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Keluhan</label>
                    <textarea class="form-control" name="anamnesis" rows="2" ><?php echo $us->keluhan; ?></textarea>
                    </div>
                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Anamnesis</label>
                    <textarea class="form-control" name="anamnesis" rows="3" readonly><?php echo $us->anamnesis; ?></textarea>
                    </div>


                    <div class="form-group">
                    <label>Hasil Pemeriksaan Fisik</label>
                    <textarea class="form-control" name="hasil_periksa" rows="3" readonly><?php echo $us->hasil_periksa; ?></textarea>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Diagnosis</label>
                    <textarea class="form-control" name="diagnosis" rows="3" readonly><?php echo $us->diagnosis; ?></textarea>
                    </div>

                    <div class="form-group">
                    <label>Resep Dokter</label>
                    <textarea class="form-control" name="obat" rows="3" readonly><?php echo $us->obat; ?></textarea>
                    </div>
                    </div>


                    

                    
                    </div>

                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                
                </form>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
          <!-- AKHIR MODAL UPDATE DATA -->



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



