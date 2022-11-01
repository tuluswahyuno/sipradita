<title><?= $title; ?></title>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <section class="content-header">


  </section>


    <!-- Main content -->

    <section class="content">



      <!-- Default box -->

      <!-- <div class="card">

      <div class="card-body"> -->

      <!-- <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div> -->

          




   <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

  <section class="content">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-12">
  <div class="card">
  <div class="card-header p-2">
  <ul class="nav nav-pills">
  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Keluhan</a></li>
  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Riwayat Periksa</a></li>
  </ul>
  </div>
  <div class="card-body">
  <div class="tab-content">


  <div class="tab-pane" id="timeline">

   <div>
     <a>Riwayat Periksa Pasien <?php echo "<strong>".$detail->nama."</strong>" ?></a>
   </div>

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

  <div class="active tab-pane" id="profile">

  <div class="row">
  <div class="col-md-3">
  <div class="card card-primary">
    
  <div class="card-header">
  <h3 class="card-title">Data Pasien</h3>
  </div>

  <div class="card-body">
  <strong>Nama Lengkap</strong>
  <p class="text-muted" style="margin-top:0;margin-bottom:0">
  <?php echo $detail->nama; ?>
  </p>
  <hr style="margin-top:0;margin-bottom:0">
  <strong>No RM</strong>
  <p class="text-muted" style="margin-top:0;margin-bottom:0">
  <?php echo $detail->no_rm; ?>
  </p>
  <hr style="margin-top:0;margin-bottom:0">
  <strong> Tempat Tgl Lahir</strong>
  <p class="text-muted" style="margin-top:0;margin-bottom:0">
    <?php echo $detail->t_lahir.", ".date('d-M-Y', strtotime($detail->tgl_lahir)); ?>
  </p>
  <hr style="margin-top:0;margin-bottom:0">
  <strong>Jenis Kelamin</strong>
  <p class="text-muted" style="margin-top:0;margin-bottom:0">
  <?php echo $detail->gender; ?>
  </p>
  <hr style="margin-top:0;margin-bottom:0">
  <strong>No HP</strong>
  <p class="text-muted" style="margin-top:0;margin-bottom:0">
  <?php echo $detail->no_hp; ?>
  </p>
  <hr style="margin-top:0;margin-bottom:0">
  <strong>Agama</strong>
  <p class="text-muted" style="margin-top:0;margin-bottom:0">
  <?php echo $detail->agama; ?>
  </p>
  <hr style="margin-top:0;margin-bottom:0">
  <strong>Pekerjaan</strong>
  <p class="text-muted" style="margin-top:0;margin-bottom:0">
  <?php echo $detail->pekerjaan; ?>
  </p>
  <hr style="margin-top:0;margin-bottom:0">
  <strong>Alamat</strong>
  <p class="text-muted">
  <?php echo $detail->alamat; ?>
  </p>

    <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#editmodal<?php echo $detail->id_pasien; ?>"><b>Update Data</b></a>

  </div>

  </div>
  
  </div>

  <div class="col-md-9">
  
  <form class="form-horizontal">

        <button type="button" class="btn btn-sm btn-success mb-3" data-toggle="modal" data-target="#tambah-data">
            <i class="fas fa-plus-square"> </i> Input Data Pemeriksaan </a>
          </button>
  
        <table class="table table-hover table-striped table-bordered">
        <thead style="text-align: center;">
          <th>#</th>
          <th>Keluhan</th>
          <th>BB</th>
          <th>TB</th>
          <th>Gizi</th>
          <th style="text-align: center;">Action</th>
        </thead>


        <tbody>
          <?php 

          $no = 1;
          foreach ($pasien as $us) : ?>

          <tr>
            <td><?php echo $no++; ?></td>
            <td ><?php echo $us->keluhan ?><br>
            <td style="text-align: center;"><?php echo $us->bb ?><br>
            <td style="text-align: center;"><?php echo $us->tb ?><br>
            <td style="text-align: center;"><?php echo $us->status_gizi ?><br>
            </td>

            <td style="text-align: center;">
                  <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editmodalkeluhan<?php echo $us->id_periksa; ?>">
                  <i class="fas fa-edit"> </i></a>
            
                  <a class="btn btn-sm btn-danger tombol-hapus" href="<?php echo base_url('admin/Profesi/delete_profesi/').$us->id_periksa ?>">
                  <i class="fas fa-trash"></i></a>
            </td>

          </tr>

          <?php endforeach; ?>
        </tbody>
        </table>
  </form>
  </div>  
  </div>


  </section>


  </div>

              </div>

              <!-- /.card-body -->

            </div>



        </div>

        <!-- /.card-body -->

        

        <!-- /.card-footer-->

      </div>

      <!-- /.card -->



    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->



        <!-- MODAL TAMBAH DATA -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Pemeriksaan Pasien</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('admin/DataPasien/tambah_keluhan') ?>">

                    <div class="row">
                    
                    

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Berat Badan (kg)</label>
                    <input type="hidden" name="id_pasien" value="<?php echo $detail->id_pasien; ?>" >
                    <input type="text" name="bb" class="form-control" placeholder="Berat Badan" required>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Tinggi Badan (cm)</label>
                    <input type="text" name="tb" class="form-control" placeholder="Berat Badan" required>
                    </div>
                    </div>


                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Status Gizi</label>
                    <input type="text" name="status_gizi" class="form-control" placeholder="Status Gizi" required>
                    </div>

                    <div class="form-group">
                    <label>Keluhan Pasien</label>
                    <textarea class="form-control" name="keluhan" rows="3" placeholder="Keluhan Pasien" required></textarea>
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
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="editmodalkeluhan<?php echo $us->id_periksa; ?>" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update Keluhan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('admin/DataPasien/update_data_keluhan') ?>">

                    <div class="row">

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Berat Badan (kg)</label>
                    <input type="hidden" name="id_pasien" value="<?php echo $detail->id_pasien; ?>" >
                    <input type="hidden" name="id_periksa" value="<?php echo $us->id_periksa; ?>" >
                    <input type="text" name="bb" class="form-control" value="<?php echo $us->bb ?>" required>
                    </div>
                    </div>

                    <div class="col-md-6">
                    <div class="form-group">
                    <label>Tinggi Badan (cm)</label>
                    <input type="text" name="tb" class="form-control" value="<?php echo $us->tb ?>" required>
                    </div>
                    </div>


                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Status Gizi</label>
                    <input type="text" name="status_gizi" class="form-control" value="<?php echo $us->status_gizi ?>" required>
                    </div>

                    <div class="form-group">
                    <label>Keluhan Pasien</label>
                    <textarea class="form-control" name="keluhan" rows="3" required><?php echo $us->keluhan ?></textarea>
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
        <!-- AKHIR MODAL MODAL UPDATE DATA -->




        <!-- MODAL UPDATE DATA -->
          <?php 
          $no = 0;
          foreach ($detailpasien as $us) : $no++; ?>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="editmodal<?php echo $us->id_pasien; ?>" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update Data Pasien</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('admin/DataPasien/update_data') ?>">

                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="hidden" name="id_pasien" value="<?php echo $detail->id_pasien; ?>" >
                    <input type="text" name="nama" class="form-control" value="<?php echo $us->nama ?>" required>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Tempat Lahir</label>
                    <input type="text" name="t_lahir" class="form-control" value="<?php echo $us->t_lahir ?>" required>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Tgl Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $us->tgl_lahir ?>" required>
                    </div>
                    </div>

                    <div class="col-sm-4">
                         <div class="form-group">
                          <label>Agama</label>
                          <select class="form-control" name="agama" required>
                            <option value="<?php echo $us->agama ?>"><?php echo $us->agama ?></option>
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
                            <option value="<?php echo $us->gender ?>"><?php echo $us->gender ?></option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                          </select>
                          </div>
                      </div>


                    <div class="col-md-4">
                    <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" value="<?php echo $us->pekerjaan ?>" required>
                    </div>
                    </div>

                    <div class="col-md-4">
                    <div class="form-group">
                    <label>No HP</label>
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $us->no_hp ?>" required>
                    </div>
                    </div>


                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="alamat" required><?php echo $us->alamat ?></textarea>
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
        <!-- AKHIR MODAL MODAL UPDATE DATA -->



  







