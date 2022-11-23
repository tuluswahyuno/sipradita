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
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/moskuloskelental/').$detail->id_anamnesis ?>">Moskuloskeletal</a>
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
        <a>Data Sistem Moskuloskeletal Pasien An. <?php echo "<strong>".$anamnesis->NAMA." (".$anamnesis->NORM.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <?php 

        $d = $cek;

          if ( $d == "0") {?> 


            <div class="col-md-12">
                <div class="card">
                  <div class="card-body">
                    <div class="tab-content">
                      <div class="active tab-pane" id="satu">


                        <form class="form-horizontal">
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="inputName" class="col-sm-5 col-form-label">Pergerakan Sendi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->pergerakan_sendi; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail" class="col-sm-5 col-form-label">Mudah Lelah</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->mudah_lelah; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputName5" class="col-sm-5 col-form-label">Otot Atas Kanan</label>
                                <div class="col-sm-7">
                                  <?php 
                                      $kananatas = $aaaa->atas_kanan;

                                      if ($kananatas == "0") {
                                        $outputkanan = "(0) Otot tak mampu bergerak";
                                      }elseif($kananatas == "1"){
                                        $outputkanan = "(1) Jika otot ditekan terasa ada kontraksi";
                                      }elseif($kananatas == "2"){
                                        $outputkanan = "(2) Dapat bergerak tetapi tidak mampu ditahan";
                                      }elseif($kananatas == "3"){
                                        $outputkanan = "(3) Dapat menggerakkan otot dengan tahanan minimal";
                                      }elseif($kananatas == "4"){
                                        $outputkanan = "(4) Dapat bergerak dan melawan hambatan";
                                      }elseif($kananatas == "5"){
                                        $outputkanan = "(5) Bebas bergerak dan melawan tahananan yang setimpal";
                                      }
                                   ?>
                                  <textarea class="form-control"><?php echo $outputkanan; ?></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputName5" class="col-sm-5 col-form-label">Otot Atas Kiri</label>
                                <div class="col-sm-7">
                                  <?php 
                                      $kiriatas = $aaaa->atas_kiri;

                                      if ($kiriatas == "0") {
                                        $outputkiri = "(0) Otot tak mampu bergerak";
                                      }elseif($kiriatas == "1"){
                                        $outputkiri = "(1) Jika otot ditekan terasa ada kontraksi";
                                      }elseif($kiriatas == "2"){
                                        $outputkiri = "(2) Dapat bergerak tetapi tidak mampu ditahan";
                                      }elseif($kiriatas == "3"){
                                        $outputkiri = "(3) Dapat menggerakkan otot dengan tahanan minimal";
                                      }elseif($kiriatas == "4"){
                                        $outputkiri = "(4) Dapat bergerak dan melawan hambatan";
                                      }elseif($kiriatas == "5"){
                                        $outputkiri = "(5) Bebas bergerak dan melawan tahananan yang setimpal";
                                      }
                                   ?>
                                  <textarea class="form-control"><?php echo $outputkiri; ?></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputName5" class="col-sm-5 col-form-label">Otot Bawah Kanan</label>
                                <div class="col-sm-7">
                                  <?php 
                                      $kananbawah = $aaaa->bawah_kanan;

                                      if ($kananbawah == "0") {
                                        $bawahkanan = "(0) Otot tak mampu bergerak";
                                      }elseif($kananbawah == "1"){
                                        $bawahkanan = "(1) Jika otot ditekan terasa ada kontraksi";
                                      }elseif($kananbawah == "2"){
                                        $bawahkanan = "(2) Dapat bergerak tetapi tidak mampu ditahan";
                                      }elseif($kananbawah == "3"){
                                        $bawahkanan = "(3) Dapat menggerakkan otot dengan tahanan minimal";
                                      }elseif($kananbawah == "4"){
                                        $bawahkanan = "(4) Dapat bergerak dan melawan hambatan";
                                      }elseif($kananbawah == "5"){
                                        $bawahkanan = "(5) Bebas bergerak dan melawan tahananan yang setimpal";
                                      }
                                   ?>
                                   <textarea class="form-control"><?php echo $bawahkanan; ?></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputExperience" class="col-sm-5 col-form-label">Otot Bawah Kiri</label>
                                <div class="col-sm-7">
                                  <?php 
                                      $kiribawah = $aaaa->bawah_kiri;

                                      if ($kiribawah == "0") {
                                        $bawahkiri = "(0) Otot tak mampu bergerak";
                                      }elseif($kiribawah == "1"){
                                        $bawahkiri = "(1) Jika otot ditekan terasa ada kontraksi";
                                      }elseif($kiribawah == "2"){
                                        $bawahkiri = "(2) Dapat bergerak tetapi tidak mampu ditahan";
                                      }elseif($kiribawah == "3"){
                                        $bawahkiri = "(3) Dapat menggerakkan otot dengan tahanan minimal";
                                      }elseif($kiribawah == "4"){
                                        $bawahkiri = "(4) Dapat bergerak dan melawan hambatan";
                                      }elseif($kiribawah == "5"){
                                        $bawahkiri = "(5) Bebas bergerak dan melawan tahananan yang setimpal";
                                      }
                                   ?>
                                  <textarea class="form-control"><?php echo $bawahkiri; ?></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Fraktur</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->fraktur; ?>">
                                </div>
                              </div>
                              

                              
                              
                            </div>

                            <div class="col-sm-6">

                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Lokasi Fraktur</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->fraktur_lokasi; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Postur Tubuh</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->postur_tubuh; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Skore Resiko jatuh</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->skore_resiko_jatuh; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Aktivitas Se-hari<sup>2</sup></label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->aktivitas_seharihari; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Berjalan</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->berjalan; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Alat Ambulasi</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->alat_ambulasi; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Kebiasaan Tidur</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->kebiasaan_tidur; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Lama Tidur Sblm Sakit</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->jam_tidur_sebelumsakit." Jam"; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-5 col-form-label">Lama Tidur Ssdh Sakit</label>
                                <div class="col-sm-6">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->jam_tidur_sesudahsakit." Jam"; ?>">
                                </div>
                              </div>
                              

                            </div>
                          </div>
                          
                          

                        </form>


                        <div align="right">
                          <a href="<?php echo base_url('Ass/MasterPasien/update_moskuloskelental/').$detail->id_anamnesis ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> </i> Update</a>

                          <!-- <a href="<?php echo base_url('Ass/MasterPasien/delete_moskuloskelental/').$detail->id_anamnesis ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"> </i> Delete</a> -->

                          <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
                        </div>

                      </div>

            
          <?php }else{?> 
            <center>
                <a href="<?php echo base_url('Ass/MasterPasien/moskuloskelentall/').$detail->id_anamnesis ?>" class="btn btn-info mb-3"><i class="fas fa-plus-square"> </i> Tambah Data Sistem Moskuloskelental</a>
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
