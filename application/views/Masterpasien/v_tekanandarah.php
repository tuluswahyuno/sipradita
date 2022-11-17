<title><?= $title; ?></title>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  
  <section class="content-header">
    <div class="col-sm-12">
      <ul class="nav nav-tabs">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/detail_anamnesis/').$detail->id_anamnesis ?>">Anamesis</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/pemeriksaan/').$detail->id_anamnesis ?>">Pemeriksaan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link"  href="<?php echo base_url('Ass/MasterPasien/pernafasan/').$detail->id_anamnesis ?>">Pernafasan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/moskuloskelental/').$detail->id_anamnesis ?>">Moskuloskeletal</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/proteksi/').$detail->id_anamnesis ?>">Proteksi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/nyeri/').$detail->id_anamnesis ?>">Nyeri</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/hasil/').$detail->id_anamnesis ?>">Diagnosa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/tekanandarah/').$detail->id_anamnesis ?>">Tekanan Darah</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/grafik/').$detail->id_anamnesis ?>">Vital Sign</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/intervensi/').$detail->id_anamnesis ?>">Intervensi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/evaluasi/').$detail->id_anamnesis ?>">Evaluasi</a>
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
        <a>Data Anamnesis Pasien An. <?php echo "<strong>".$detail->nama." (".$detail->no_rm.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#tambah-data"> <i class="fas fa-plus-square"> </i> Tambah Data </a> </button>

        <table class="table table-hover table-striped table-bordered" id="table1">
          <thead style="text-align: center;">
            <th>#</th>
            <th>Denyut Nadi</th>
            <th>Suhu Tubuh</th>
            <th>Tgl Input</th>
            <th>Action</th>
          </thead>


          <tbody>
            <?php 

            $no = 1;
            foreach ($tekanan as $us) : ?>

              <tr>
                <td><?php echo $no++; ?></td>
                
                <td align="center"><?php echo $us->nadi ?></td>
                <td align="center"><?php echo $us->suhu." &deg C" ?></td>
                <td align="center"><span class="badge badge-secondary"><?php echo $us->create_at ?></span></td>


                <td class="project-actions text-center">
                
                  <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#editmodal<?php echo $us->id_grafik; ?>">
                  <i class="fas fa-pencil-alt">
                  </i> Edit</a>


                  <a class="btn btn-sm btn-danger tombol-hapus" href="<?php echo base_url('Ass/MasterPasien/delete_tekanandarah/').$us->id_grafik ?>">
                  <i class="fas fa-trash"></i> Delete</a>

                </td>

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



<!-- MODAL TAMBAH DATA -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Tambah Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_tekanandarah') ?>">

                  <div class="row">
                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Denyut Nadi</label>
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="number" name="nadi" class="form-control" placeholder="Denyut Nadi" required>
                    </div>

                    <div class="form-group">
                    <label>Suhu Tubuh</label>
                    <input type="number" name="suhu" class="form-control" placeholder="Suhu Tubuh" required>
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
          foreach ($tekanan as $us) : $no++; ?>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="editmodal<?php echo $us->id_grafik; ?>" class="modal fade">
            <div class="modal-dialog modal-sm" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update Data</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_tekanandarah') ?>">

                  <div class="row">
            
                    <div class="col-md-12">
                    <div class="form-group">
                    <label>Denyut Nadi</label>
                    <input type="hidden" name="id_grafik" value="<?php echo $us->id_grafik; ?>" class="form-control">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="number" name="nadi" class="form-control" value="<?php echo $us->nadi; ?>" required>
                    </div>

                    <div class="form-group">
                    <label>Suhu Tubuh</label>
                    <input type="number" name="suhu" class="form-control" value="<?php echo $us->suhu; ?>" required>
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