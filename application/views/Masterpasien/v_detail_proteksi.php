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
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/pernafasan/').$detail->id_anamnesis ?>">Pernafasan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/moskuloskelental/').$detail->id_anamnesis ?>">Moskuloskeletal</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/proteksi/').$detail->id_anamnesis ?>">Proteksi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/nyeri/').$detail->id_anamnesis ?>">Nyeri</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/hasil/').$detail->id_anamnesis ?>">Diagnosa</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/tekanandarah/').$detail->id_anamnesis ?>">Vital Sign</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/grafik/').$detail->id_anamnesis ?>">Grafik</a>
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
        <a>Data Sistem Proteksi Pasien An. <?php echo "<strong>".$anamnesis->NAMA." (".$anamnesis->NORM.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <?php 

        $d = $cek;

          if ( $d == "0") {?> 

            <div class="col-md-12">
              <div class="card">
                  <!-- <div class="card-header p-2">
                    <ul class="nav nav-pills">
                      <li class="nav-item"><a class="nav-link active" href="#satu" data-toggle="tab">Sistem Pernafasan</a></li>
                      <li class="nav-item"><a class="nav-link" href="#dua" data-toggle="tab">Prosedur Invasif</a></li>
                    </ul>
                  </div> -->
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="satu">


                        <form class="form-horizontal">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="inputName" class="col-sm-4 col-form-label">Suhu</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->suhu; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Terdapat Luka</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->terdapat_luka; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputName4" class="col-sm-4 col-form-label">Lokasi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->lokasi_luka; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputExperience" class="col-sm-4 col-form-label">Kondisi Luka</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->kondisi_luka; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Kebersihan Luka</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->kebersihan_luka; ?>">
                                </div>
                              </div>
                              
                              
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Riwayat Alergi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->riwayat_alergi; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Jenis Alergi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->nama_alergi; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Nilai Leokosit</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->nilai_leokosit; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">GDS</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->gds; ?>">
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          
                          

                        </form>


                        <div align="right">
                          <a href="<?php echo base_url('Ass/MasterPasien/update_proteksi/').$detail->id_anamnesis ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> </i> Update</a>

                          <!-- <a href="<?php echo base_url('Ass/MasterPasien/delete_proteksi/').$detail->id_anamnesis ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"> </i> Delete</a> -->

                          <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
                        </div>

                      </div>


            
          <?php }else{?> 

            <center>
                <a href="<?php echo base_url('Ass/MasterPasien/proteksii/').$detail->id_anamnesis ?>" class="btn btn-info mb-3"><i class="fas fa-plus-square"> </i> Tambah Data Sistem Proteksi</a>
            </center>

          <?php } ?>

      </div>
      <!-- /.card-body -->
      
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}?>
