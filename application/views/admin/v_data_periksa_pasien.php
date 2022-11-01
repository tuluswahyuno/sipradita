<title><?= $title; ?></title>
<!-- 
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "60";
?>

<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    </body>
</html> -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2>Data Pemeriksaan Pasien</h2>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin/Dashboard') ?>">Dashboard</a></li>
              <li class="breadcrumb-item active">Data Pemeriksaan Pasien</li>
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
          <a>Data Pemeriksaan Pasien</a>
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
              <th>BB / TB</th>
              <th>Gizi</th>
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
                  
                  printf("<span class='badge badge-primary'>%d Th, %d Bln, %d Hari  </span>", $diff->y, $diff->m, $diff->d);
                  printf("\n");
                  }else{
                      echo "<span class='badge badge-danger'>Tgl Lahir Belum Diisi</span>";
                  }?>
                </td>

                <td><?php echo $us->no_rm ?></td>
                <td><?php echo $us->keluhan ?></td>
                <td style="text-align:center;"><?php echo $us->bb." kg"?><br>
                  <hr style="margin-top:0;margin-bottom:0;">
                  <?php echo $us->tb." cm"?>
                </td>
                <td><?php echo $us->status_gizi ?></td>

                <td style="text-align: center;">
                    <?php if ($us->status == 0) {?>
                      <span class="badge badge-warning"><?php echo "Belum Diperiksa" ?></span>
                    <?php }else{ ?>
                      <span class="badge badge-warning"><?php echo "Status Tidak Ditemukan" ?></span>
                    <?php } ?>
                </td>

                <td style="text-align: center;">
                    <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editmodal<?php echo $us->id_periksa; ?>">Action <i class="fas fa-hand-holding-medical"></i></a>

                   

                    
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
                <form method="POST" action="<?php echo base_url('admin/DataPasien/tambah_data') ?>">

                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control" placeholder="NIK" required>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>BPJS</label>
                    <input type="text" name="no_bpjs" class="form-control" placeholder="Nomor BPJS">
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


          <!-- MODAL UPDATE DATA -->
          <?php 
          $no = 0;
          foreach ($pasien as $us) : $no++; ?>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodal<?php echo $us->id_periksa; ?>" class="modal fade">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Data Pemeriksaan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('admin/DataPasien/PeriksaPasien') ?>">

                    <div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Nama Pasien</label>
                      <input type="hidden" name="id_periksa" value="<?php echo $us->id_periksa; ?>" >
                      <input type="text" name="nama" class="form-control" value="<?php echo $us->nama; ?>" readonly>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" rows="1" readonly><?php echo $us->alamat; ?></textarea>
                    </div>

                    </div>


                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Anamnesis</label>
                    <textarea class="form-control" name="anamnesis" rows="3" placeholder="Anamnesis" required></textarea>
                    </div>


                    <div class="form-group">
                    <label>Hasil Pemeriksaan Fisik</label>
                    <textarea class="form-control" name="hasil_periksa" rows="3" placeholder="Hasil Pemeriksaan Fisik" required></textarea>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Diagnosis</label>
                    <textarea class="form-control" name="diagnosis" rows="3" placeholder="Diagnosis" required></textarea>
                    </div>

                    <div class="form-group">
                    <label>Resep Dokter</label>
                    <textarea class="form-control" name="obat" rows="3" placeholder="Resep" required></textarea>
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



