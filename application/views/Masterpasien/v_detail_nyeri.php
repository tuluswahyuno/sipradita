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
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/proteksi/').$detail->id_anamnesis ?>">Proteksi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/nyeri/').$detail->id_anamnesis ?>">Nyeri</a>
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
        <a>Data Pengkajian Nyeri Pasien An. <?php echo "<strong>".$anamnesis->nama." (".$anamnesis->no_rm.")"."</strong>" ?></a>
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
                                <label for="inputName" class="col-sm-4 col-form-label">Nyeri</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->nyeri; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Deskripsi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->deskripsi; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputName4" class="col-sm-4 col-form-label">Lainnya</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->lainnya; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputExperience" class="col-sm-4 col-form-label">Quality</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->quality; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Region</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->region; ?>">
                                </div>
                              </div>
                              
                              
                            </div>

                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Menyebar</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->menyebar; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Skala</label>
                                <div class="col-sm-7">

                                  <?php 
                                    $s = $aaaa->skala;
                                    if ($s = "0") {
                                      $yes = "Tidak Sakit";
                                    }elseif($s = "2"){
                                      $yes = "Sedikit Sakit";
                                    }elseif($s = "4"){
                                      $yes = "Agak Mengganggu";
                                    }elseif($s = "6"){
                                      $yes = "Mengganggu Aktivitas";
                                    }elseif($s = "8"){
                                      $yes = "Sangat Mengganggu";
                                    }elseif($s = "10"){
                                      $yes = "Tak Tertahankan";
                                    }

                                   ?>

                                  <input type="text" class="form-control" value="<?php echo $yes; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Hasil</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->hasil; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Time</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->waktu; ?>">
                                </div>
                              </div>
                              
                            </div>
                          </div>
                          
                          

                        </form>


                        <div align="right">
                          <a href="<?php echo base_url('Ass/MasterPasien/update_nyeri/').$detail->id_anamnesis ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> </i> Update</a>

                          <!-- <a href="<?php echo base_url('Ass/MasterPasien/delete_nyeri/').$detail->id_anamnesis ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"> </i> Delete</a> -->

                          <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
                        </div>

                      </div>
          
        <?php }else{?> 
          <center>
            <a href="<?php echo base_url('Ass/MasterPasien/add_nyeri/').$detail->id_anamnesis ?>" class="btn btn-info mb-3"><i class="fas fa-plus-square"> </i> Tambah Data Pengkajian Nyeri</a>
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
