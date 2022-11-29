<title><?= $title; ?></title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Data Pemberi Asuhan</h4>
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
          <a>Data Pemberi Asuhan</a>
        </div>
        <div class="card-body">
          
          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
         

          <!-- Button trigger modal -->
          <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#tambah-data">
            <i class="fas fa-plus-square"> </i> Tambah Data Pemberi Asuahan</a>
          </button>

          <table class="table table-hover table-striped table-bordered" id="table1">
            <thead style="text-align: center;">
              <th>#</th>
              <th>Nama</th>
              <th>TTL</th>
              <th>Profesi</th>
              <th>Status</th>
              <th style="text-align: center;">Action</th>
            </thead>


            <tbody>
              <?php 

              $no = 1;
              foreach ($data as $us) : ?>

              <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $us->nama ?><br>
                  <span class="badge badge-info"><?php echo $us->nip ?></span>
                </td>
                <td><?php echo $us->ttl ?></td>
                <td style="text-align: center;"><?php echo $us->profesi ?></td>
                <td style="text-align: center;">
                <?php 
                if ($us->status_aktif == "1") 
                {echo "Aktif"; }else{ echo "Tidak Aktif"; } ?></td>
               

                 <td style="text-align: center;">

                  <a class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editmodal<?php echo $us->id_pemberiasuhan; ?>">
                  <i class="fas fa-edit"> </i> Edit</a>
                  </a>

                  <a class="btn btn-sm btn-danger tombol-hapus" href="<?php echo base_url('Ass/MasterPasien/delete_pemberiasuhan/').$us->id_pemberiasuhan ?>"><i class="fas fa-trash"></i> Hapus</a>
                
                </td>

              </tr>

              <?php endforeach; ?>
            </tbody>

          </table>

          <!-- MODAL TAMBAH DATA -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="tambah-data" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambah Data Pemberi Asuhan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_pemberiasuhan') ?>">

                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id_pemberiasuhan" >
                    <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama" required>
                    </div>

                    <div class="form-group">
                    <label>NIP/NIK</label>
                    <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP/NIK" required>
                    </div>


                    <div class="form-group">
                    <label>TTL</label>
                    <input type="text" name="ttl" class="form-control" placeholder="Masukkan TTL" required>
                    </div>

                    <div class="form-group">
                    <label>Profesi</label>
                    <select class="form-control" name="profesi" required>
                      <option value="">--Pilih Profesi--</option>
                      <option value="Perawat">Perawat</option>
                      <option value="Bidan">Bidan</option>
                    </select>

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
          foreach ($data as $us) : $no++; ?>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodal<?php echo $us->id_pemberiasuhan; ?>" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update Data Pemberi Asuhan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_pemberiasuhan') ?>">

                    <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Nama</label>
                    <input type="hidden" name="id_pemberiasuhan" value="<?php echo $us->id_pemberiasuhan; ?>" >
                    <input type="text" name="nama" class="form-control" value="<?php echo $us->nama; ?>">
                    </div>

          
                    <div class="form-group">
                    <label>NIP/NIK</label>
                    <input type="text" name="nip" class="form-control" value="<?php echo $us->nip; ?>" required>
                    </div>

                    <div class="form-group">
                    <label>TTL</label>
                    <input type="text" name="ttl" class="form-control" value="<?php echo $us->ttl; ?>" required>
                    </div>

                    <div class="form-group">
                    <label>Profesi</label>
                    <select class="form-control" name="profesi" required>
                      <option value="<?php echo $us->profesi; ?>"><?php echo $us->profesi; ?></option>
                      <option value="Perawat">Perawat</option>
                      <option value="Bidan">Bidan</option>
                    </select>
                    </div>


                    <div class="form-group">
                    <label>Status Aktif</label>
                    <select class="form-control" name="status_aktif" required>
                      <option value="<?php echo $us->status_aktif; ?>">
                      <?php 
                        if($us->status_aktif == '1'){
                          echo "Aktif";
                        }else{
                          echo "Tidak Aktif";
                        }
                        ?>
                     </option>
                      <option value="1">Aktif</option>
                      <option value="2">Tidak Aktif</option>
                    </select>
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



          <!-- MODAL IMPORT DATA -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" tabindex="-1" role="dialog" id="import-data" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Import Data User</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form method="POST" action="<?= site_url('admin/user/excel') ?>" enctype="multipart/form-data">
                       
                      <div class="col-md-12">


                      <label class="col-form-label text-md-left">Upload File</label> 
                          <input type="file" class="form-control" name="file" accept=".xls, .xlsx" required>
                          <div class="mt-1">
                              <span class="text-secondary">File yang harus diupload : .xls, xlsx</span>
                          </div>
                          <?= form_error('file','<div class="text-danger">','</div>') ?>

                          <?php { ?>
                                       
                        </div>

                        <div class="col-md-12">

                            <label class="col-form-label text-md-left">Format File</label> 
                        <button class="btn btn-success btn-sm" type="submit" onclick="window.open('<?php echo base_url() . 'uploads/Template_import.xlsx' ?>')">Download Excel</button>

                       <?php } ?>
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
          <!-- AKHIR IMPORT DATA -->


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