<title><?= $title; ?></title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Data Pasien</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Dashboard') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Pasien</li>
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
          <a>Data Pasien</a>
        </div>
        <div class="card-body">
          
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
         

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#tambah-data">
            <i class="fas fa-plus-square"> </i> Tambah Data Pasien</a>
          </button>

          <table class="table table-hover table-striped table-bordered" id="table1">
            <thead style="text-align: center;">
              <th>#</th>
              <th>Nama Pasien</th>
              <th>No RM</th>
              <th>Gender / Usia</th>
              <th>Alamat</th>
              <th style="text-align: center;">Action</th>
            </thead>


            <tbody>
              <?php 

              $no = 1;
              foreach ($pasien as $us) : ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td ><?php echo $us->nama ?></td>
                <td ><?php echo $us->no_rm ?></td>

                

                <td style="text-align: center;">
                <?php echo $us->gender ?><br>
                <hr style='margin-bottom:0;margin-top:0'>
                  <?php 
                  
                  $tmt = $us->tgl_lahir;

                  if($tmt != '0000-00-00') {

                  $bday = new DateTime($tmt); // Your date of birth
                  $today = new Datetime(date('m.d.y'));
                  $diff = $today->diff($bday);
                  
                  printf("<span class='badge badge-secondary'>%d Th, %d Bln, %d Hari </span>", $diff->y, $diff->m, $diff->d);

                  printf("\n");

                     // echo "<hr style='margin-bottom:0;margin-top:0'><span class='badge badge-warning'>TL : $us->tgl_lahir</span>";

                  }else{

                      echo "<span class='badge badge-danger'>Tgl Lahir Belum Diisi</span>";
                  }

                   ?>
                </td>

                <td><?php echo $us->alamat ?></td>

                <td style="text-align: center;">
                    <a class="btn btn-info btn-sm" href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$us->id_pasien ?>">
                    <i class="fas fa-info-circle">
                    </i>
                    View
                  </a>
                </td>

              </tr>

              <?php endforeach; ?>
            </tbody>

          </table>



          <!-- MODAL TAMBAH DATA -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambah Data Pasien</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_data') ?>">

                    <div class="row">
                    <div class="col-md-12">

                    <div class="form-group">
                    <label>Nomor Rekam Medis (RM)</label>
                    <input type="text" name="no_rm" class="form-control" value="<?php echo $invoice;?>" readonly>
                    </div>

                    <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="hidden" name="id_pasien" class="form-control">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="t_lahir" class="form-control" placeholder="Tempat Lahir" required>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Tgl Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" required>
                    </div>
                    </div>

                    <div class="col-sm-4">
                         <div class="form-group">
                          <label>Agama</label>
                          <select class="form-control" name="agama" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghucu">Konghucu</option>
                            
                          </select>
                          </div>
                      </div>


                      <div class="col-sm-4">
                         <div class="form-group">
                          <label>Jenis Kelamin</label>
                          <select class="form-control" name="gender" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                          </div>
                      </div>


                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control" placeholder="Nomor HP" required>
                    </div>
                    </div>


                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                    </div>
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
          <!-- AKHIR MODAL TAMBAH DATA -->



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



