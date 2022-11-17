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
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/hasil/').$detail->id_anamnesis ?>">Diagnosa</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/grafik/').$detail->id_anamnesis ?>">Vital Sign</a>
        </li>

      </ul>
    </div> 
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
        <a>Hasil Diagnosa Pasien An. <?php echo "<strong>".$anamnesis->nama." (".$anamnesis->no_rm.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <div class="row">
          <div class="col-12" id="accordion">
            <div class="card card-info card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                <div class="card-header">
                  <h4 class="card-title w-100">
                    1. Sistem Pernafasan
                  </h4>
                </div>
              </a>
              <div id="collapseOne" class="collapse show" data-parent="#accordion">
                <div class="card-body">

                  <?php 

                  if ($sistemnafas != "0") {?>
                     
                    Dari pengkajian sistem pernafasan yang dilakukan diagnosanya adalah : <strong> <?php echo $hasil_nafas->diagnosa_penafasan; ?></strong><br><hr>

                    <?php if ($hasil_nafas->diagnosa_penafasan == "Tidak Terdiagnosa Masalah Pernafasan") {?>

                      <p>tidak ada pilihan</p>

                    <?php } else { ?>

                    <?php if ($nafas == "0") {?>
                      
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datapenafasan"> <i class="fas fa-plus-square"> </i> Pilih Tindakan yang akan Dilakukan </a> </button>
                    
                    <?php }else{ ?>

                      <div align="right">
                    <a class="btn btn-success btn-sm" data-toggle="modal" data-target="#editmodal">
                    <i class="fas fa-edit"></i> Update Tindakan </a>
                    </div>

                    <?php } ?>

                    <p>Tindakan yang akan dilakukan adalah sebagai berikut :</p>

                    <hr>

                    <?php 
                    $satu = $nafass->satu;
                    if ($satu == "Yes") {?>
                      
                      <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="customCheckbox1" checked>
                      <label for="customCheckbox1" class="custom-control-label">Monitor pola nafas (frekuensi, kedalaman, usaha nafas)</label>
                    </div><?php }else{} ?>
                    

                    <?php 
                    $dua = $nafass->dua;
                    if ($dua == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="customCheckbox2" checked>
                      <label for="customCheckbox2" class="custom-control-label">Monitor bunyi napas tambahan (mis. gurgling, mengi, wheezing, ronkhi kering)</label>
                    </div><?php }else{} ?>


                    <?php 
                    $tiga = $nafass->tiga;
                    if ($tiga == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Monitor sputum (jumlah, warna, aroma)</label>
                    </div><?php }else{} ?>


                    <?php 
                    $empat = $nafass->empat;
                    if ($empat == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Pertahankan Kepaten jalan napass dengan head-tilt dan chin-lift </label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $nafass->lima;
                    if ($lima == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Posisikan semi-fowler atau fowler </label>
                    </div><?php }else{} ?>


                    <?php 
                    $enam = $nafass->enam;
                    if ($enam == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Berikan minum hangat</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuh = $nafass->tujuh;
                    if ($tujuh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Lakukan Fisioterapi dada. Jika perlu</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapan = $nafass->delapan;
                    if ($delapan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Lakukan penghisapan lendir kurang dari 15 detik</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilan = $nafass->sembilan;
                    if ($sembilan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Lakukan hiper Oksigenasi sebelum penghisapan Endotrakeal</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sepuluh = $nafass->sepuluh;
                    if ($sepuluh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Keluarkan Sumbatan benda padat dengan forsep McGill</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sebelas = $nafass->sebelas;
                    if ($sebelas == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sebelas" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Berikan oksigen, jika perlu</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $duabelas = $nafass->duabelas;
                    if ($duabelas == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="duabelas" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Anjurkan asupan cairan 2000 ml/hari jika tidak kontraindikasi </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tigabelas = $nafass->tigabelas;
                    if ($tigabelas == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tigabelas" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Ajarkan teknik batuk efektif</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $empatbelas = $nafass->empatbelas;
                    if ($empatbelas == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empatbelas" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Kolaborasi pemberian Bronkodilator, ekspektoran, mukolitik, jika perlu </label>
                    </div> <?php }else{} ?>

                    

                  <?php } ?>

                  <?php }else{ ?>

                    <div class="alert alert-info" role="alert">
                      <center>Pengkajian Belum Diinput!</center>
                    </div>

                  <?php } ?>

                  


                </div>
              </div>
            </div>
            <div class="card card-info card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                <div class="card-header">
                  <h4 class="card-title w-100">
                    2. Sistem Moskuloskelental
                  </h4>
                </div>
              </a>
              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <?php echo $hasil_mol->diagnosa_moskuloskelental; ?>
                </div>
              </div>
            </div>
            <div class="card card-info card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                <div class="card-header">
                  <h4 class="card-title w-100">
                    3. Sistem Proteksi dan Perlindungan
                  </h4>
                </div>
              </a>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <?php echo $hasil_proteksi->diagnosa_proteksi; ?>
                </div>
              </div>
            </div>
            <div class="card card-info card-outline">
              <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
                <div class="card-header">
                  <h4 class="card-title w-100">
                    4. Pengkajian Nyeri
                  </h4>
                </div>
              </a>
              <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">
                  <?php echo $hasil_nyeri->diagnosa_nyeri; ?>
                </div>
              </div>
            </div>

          </div>
        </div>


        <div align="right">


          <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
        </div>

      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




  <!-- MODAL TAMBAH DATA SISTEM PERNAFASAN -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-datapenafasan" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tindakan yang akan dilakukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_intervensi') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="hidden" name="id_pernafasan" value="<?php echo $hasil_nafas->id_sistempernafasan; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="customCheckbox1" value="Yes">
                    <label for="customCheckbox1" class="custom-control-label">Monitor pola nafas (frekuensi, kedalaman, usaha nafas)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="customCheckbox2" value="Yes">
                    <label for="customCheckbox2" class="custom-control-label">Monitor bunyi napass tambahan (mis. gurgling, mengi, wheezing, ronkhi kering)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="customCheckbox3" value="Yes">
                    <label for="customCheckbox3" class="custom-control-label">Monitor sputum (jumlah, warna, aroma)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="customCheckbox4" value="Yes">
                    <label for="customCheckbox4" class="custom-control-label">Pertahankan Kepaten jalan napass dengan head-tilt dan chin-lift </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="customCheckbox5" value="Yes">
                    <label for="customCheckbox5" class="custom-control-label">Posisikan semi-fowler atau fowler</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="customCheckbox6" value="Yes">
                    <label for="customCheckbox6" class="custom-control-label">Berikan minum hangat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="customCheckbox7" value="Yes">
                    <label for="customCheckbox7" class="custom-control-label">Lakukan Fisioterapi dada. Jika perlu</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="customCheckbox8" value="Yes">
                    <label for="customCheckbox8" class="custom-control-label">Lakukan penghisapan lendir kurang dari 15 detik</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="customCheckbox9" value="Yes">
                    <label for="customCheckbox9" class="custom-control-label">Lakukan hiper Oksigenasi sebelum penghisapan Endotrakeal</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sepuluh" type="checkbox" id="customCheckbox10" value="Yes">
                    <label for="customCheckbox10" class="custom-control-label">Keluarkan Sumbatan benda padat dengan forsep McGill</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sebelas" type="checkbox" id="customCheckbox11" value="Yes">
                    <label for="customCheckbox11" class="custom-control-label">Berikan oksigen, jika perlu</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="duabelas" type="checkbox" id="customCheckbox12" value="Yes">
                    <label for="customCheckbox12" class="custom-control-label">Anjurkan asupan cairan 2000 ml/hari jika tidak kontraindikasi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tigabelas" type="checkbox" id="customCheckbox13" value="Yes">
                    <label for="customCheckbox13" class="custom-control-label">Ajarkan teknik batuk efektif</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empatbelas" type="checkbox" id="customCheckbox14" value="Yes">
                    <label for="customCheckbox14" class="custom-control-label">Kolaborasi pemberian Bronkodilator, ekspektoran, mukolitik, jika perlu</label>
                  </div>

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
  <!-- AKHIR MODAL TAMBAH DATA SITEM PERNAFASAN -->



<!-- MODAL UPDATE DATA SISTEM PERNAFASAN -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editmodal" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Update tindakan yang akan dilakukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_intervensi') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $nafass->id_ip; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="a1" <?= ($nafass->satu == "Yes" ? "checked" : "") ?>>
                    <label for="a1" class="custom-control-label">Monitor pola nafas (frekuensi, kedalaman, usaha nafas)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="a2" <?= ($nafass->dua == "Yes" ? "checked" : "") ?>>
                    <label for="a2" class="custom-control-label">Monitor bunyi napass tambahan (mis. gurgling, mengi, wheezing, ronkhi kering)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="a3" <?= ($nafass->tiga == "Yes" ? "checked" : "") ?>>
                    <label for="a3" class="custom-control-label">Monitor sputum (jumlah, warna, aroma)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="a4" <?= ($nafass->empat == "Yes" ? "checked" : "") ?>>
                    <label for="a4" class="custom-control-label">Pertahankan Kepaten jalan napass dengan head-tilt dan chin-lift </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="a5" <?= ($nafass->lima == "Yes" ? "checked" : "") ?>>
                    <label for="a5" class="custom-control-label">Posisikan semi-fowler atau fowler</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="a6" <?= ($nafass->enam == "Yes" ? "checked" : "") ?>>
                    <label for="a6" class="custom-control-label">Berikan minum hangat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="a7" <?= ($nafass->tujuh == "Yes" ? "checked" : "") ?>>
                    <label for="a7" class="custom-control-label">Lakukan Fisioterapi dada. Jika perlu</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="a8" <?= ($nafass->delapan == "Yes" ? "checked" : "") ?>>
                    <label for="a8" class="custom-control-label">Lakukan penghisapan lendir kurang dari 15 detik</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="a9" <?= ($nafass->sembilan == "Yes" ? "checked" : "") ?>>
                    <label for="a9" class="custom-control-label">Lakukan hiper Oksigenasi sebelum penghisapan Endotrakeal</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sepuluh" type="checkbox" id="a10" <?= ($nafass->sepuluh == "Yes" ? "checked" : "") ?>>
                    <label for="a10" class="custom-control-label">Keluarkan Sumbatan benda padat dengan forsep McGill</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sebelas" type="checkbox" id="a11" <?= ($nafass->sebelas == "Yes" ? "checked" : "") ?>>
                    <label for="a11" class="custom-control-label">Berikan oksigen, jika perlu</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="duabelas" type="checkbox" id="a12" <?= ($nafass->duabelas == "Yes" ? "checked" : "") ?>>
                    <label for="a12" class="custom-control-label">Anjurkan asupan cairan 2000 ml/hari jika tidak kontraindikasi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tigabelas" type="checkbox" id="a13" <?= ($nafass->tigabelas == "Yes" ? "checked" : "") ?>>
                    <label for="a13" class="custom-control-label">Ajarkan teknik batuk efektif</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empatbelas" type="checkbox" id="a14" <?= ($nafass->empatbelas == "Yes" ? "checked" : "") ?>>
                    <label for="a14" class="custom-control-label">Kolaborasi pemberian Bronkodilator, ekspektoran, mukolitik, jika perlu</label>
                  </div>

                </div>

              </div>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
          </div>

        </form>
      </div>
    </div>
  </div>
  <!-- AKHIR MODAL UPDATE DATA SISTEM PERNAFASAN -->