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
              <th>Resep</th>
              <th>Status</th>
              <th style="text-align: center;">Action</th>
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
                <td><?php echo $us->obat ?></td>

                <td style="text-align: center;">
                    <?php if ($us->status == 1) {?>
                      <span class="badge badge-primary"><?php echo "Menunggu Obat" ?></span>
                    <?php }else{ ?>
                      <span class="badge badge-warning"><?php echo "Status Tidak Ditemukan" ?></span>
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editmodal<?php echo $us->id_periksa; ?>">Action <i class="fas fa-hand-holding-medical"></i></a>

                    <!-- <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editmodal<?php echo $us->id_periksa; ?>">Detail <i class="fas fa-eye"></i></a> -->
                  </td>

              </tr>

              <?php endforeach; ?>
            </tbody>

          </table>


          <!-- MODAL UPDATE DATA -->
          <?php 
          $no = 0;
          foreach ($pasien as $us) : $no++; ?>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodal<?php echo $us->id_periksa; ?>" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Obat Pasien</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('admin/DataPasien/UpdateObat') ?>">

                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Nama Pasien</label>
                      <input type="hidden" name="id_periksa" value="<?php echo $us->id_periksa; ?>" >
                      <input type="text" name="nama" class="form-control" value="<?php echo $us->nama; ?>" readonly>
                    </div>


                    <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" rows="2" readonly><?php echo $us->alamat; ?></textarea>
                    </div>

                    <div class="form-group">
                    <label>Resep Dokter</label>
                    <textarea class="form-control" name="obat" rows="3"><?php echo $us->obat; ?></textarea>
                    </div>

                    <!-- <div class="col-sm-12">
                         <div class="form-group">
                          <label>Status</label>
                          <select class="form-control" name="status" required>
                            <option value="2">Selesai Dilayani</option>
                            <option value="1">Menunggu Obat</option>
                          </select>
                          </div>
                      </div> -->


                    </div>
                    </div>

                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
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



