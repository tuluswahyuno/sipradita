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

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
        <a>Hasil Diagnosa Pasien An. <?php echo "<strong>".$anamnesis->NAMA." (".$anamnesis->NORM.")"."</strong>" ?></a>
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
              <!-- <div id="collapseOne" class="collapse show" data-parent="#accordion"> -->
              <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">

                    <?php if ($sistemnafas == "0") { ?>

                      <p>Pengkajian Belum Selesai Diinput</p>

                    <?php }else{ ?>
                    
                    Dari pengkajian sistem pernafasan yang dilakukan diagnosanya adalah : <strong> <?php echo $hasil_nafas->diagnosa_penafasan; ?></strong><br>

                    <?php 
                    if ($hasil_nafas->diagnosa_penafasan == "Tidak Terdiagnosa Masalah Pernafasan") {?>

                      <p></p>

                    <?php }elseif($nafas == "0" && $kn == "0" && $hasil_nafas->diagnosa_penafasan != "Tidak Terdiagnosa Masalah Pernafasan"){?>

                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datapenafasan"> <i class="fas fa-plus-square"> </i> Pilih tindakan yang akan dilakukan </a> </button>


                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-dataknpenafasan"> <i class="fas fa-plus-square"> </i> Pilih kriteria yang diharapkan </a> </button>

                   <?php  }elseif($nafas != "0" && $kn == "0" && $hasil_nafas->diagnosa_penafasan != "Tidak Terdiagnosa Masalah Pernafasan"){?>
                      
                      <hr><p><strong>Tindakan</strong> yang akan dilakukan adalah sebagai berikut :</p>

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
                      <label for="customCheckbox3" class="custom-control-label">Berikan minum hangat</label>
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

                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_intervensipernafasan/').$nafass->id_ip ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Tindakan</a>
                    </div>

                    <div align="right">
                    <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-dataknpenafasan"> <i class="fas fa-plus-square"> </i> Pilih Kriteria </a> </button>
                    </div>

                    <?php  }elseif($nafas != "0" && $kn != "0" && $hasil_nafas->diagnosa_penafasan != "Tidak Terdiagnosa Masalah Pernafasan"){?>


                      <hr><p><strong>Tindakan</strong> yang akan dilakukan adalah sebagai berikut :</p>

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
                      <label for="customCheckbox3" class="custom-control-label">Berikan minum hangat</label>
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

                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_intervensipernafasan/').$nafass->id_ip ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Tindakan</a>
                    </div>


                    <hr><p><strong>Kriteria hasil</strong> yang diharapkan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $kriterianafas->satu;
                    if ($satu == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="satu" type="checkbox" id="kn1" checked>
                      <label for="kn1" class="custom-control-label">Meningkatnya kemampuan pasien dalam melakukan batuk efektif</label>
                    </div><?php }else{} ?>

                    <?php 
                    $dua = $kriterianafas->dua;
                    if ($dua == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="kn2" checked>
                      <label for="kn2" class="custom-control-label">Menurunnya produksi sputum</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tiga = $kriterianafas->tiga;
                    if ($tiga == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="kn3" checked>
                      <label for="kn3" class="custom-control-label">Menurunnya suara nafas tambahan</label>
                    </div><?php }else{} ?>

                    <?php 
                    $empat = $kriterianafas->empat;
                    if ($empat == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="kn4" checked>
                      <label for="kn4" class="custom-control-label">Menurunnya sesak nafas</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $kriterianafas->lima;
                    if ($lima == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="kn5" checked>
                      <label for="kn5" class="custom-control-label">Menurunnya kesulitan bernafas saat berbaring</label>
                    </div><?php }else{} ?>

                    <?php 
                    $enam = $kriterianafas->enam;
                    if ($enam == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="kn6" checked>
                      <label for="kn6" class="custom-control-label">Menurunnya kesulitan berbicara</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tujuh = $kriterianafas->tujuh;
                    if ($tujuh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="kn7" checked>
                      <label for="kn7" class="custom-control-label">Menurunnya sianosis</label>
                    </div><?php }else{} ?>

                    <?php 
                    $delapan = $kriterianafas->delapan;
                    if ($delapan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="kn8" checked>
                      <label for="kn8" class="custom-control-label">Menurunnya kegelisahan pasien</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sembilan = $kriterianafas->sembilan;
                    if ($sembilan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="kn9" checked>
                      <label for="kn9" class="custom-control-label">Meningkatnya frekuensi nafas</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sepuluh = $kriterianafas->sepuluh;
                    if ($sepuluh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="kn10" checked>
                      <label for="kn10" class="custom-control-label">Meingkatnya pola nafas</label>
                    </div><?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_kriteriapernafasan/').$kriterianafas->id_kriterianafas ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Kriteria Hasil</a>
                    </div>
                   
                    <?php  }elseif($nafas == "0" && $kn != "0" && $hasil_nafas->diagnosa_penafasan != "Tidak Terdiagnosa Masalah Pernafasan"){?>

                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datapenafasan"> <i class="fas fa-plus-square"> </i> Pilih Tindakan yang akan Dilakukan </a> </button>

                      <hr><p><strong>Kriteria hasil</strong> yang diharapkan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $kriterianafas->satu;
                    if ($satu == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="satu" type="checkbox" id="kn1" checked>
                      <label for="kn1" class="custom-control-label">Meningkatnya kemampuan pasien dalam melakukan batuk efektif</label>
                    </div><?php }else{} ?>

                    <?php 
                    $dua = $kriterianafas->dua;
                    if ($dua == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="kn2" checked>
                      <label for="kn2" class="custom-control-label">Menurunnya produksi sputum</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tiga = $kriterianafas->tiga;
                    if ($tiga == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="kn3" checked>
                      <label for="kn3" class="custom-control-label">Menurunnya suara nafas tambahan</label>
                    </div><?php }else{} ?>

                    <?php 
                    $empat = $kriterianafas->empat;
                    if ($empat == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="kn4" checked>
                      <label for="kn4" class="custom-control-label">Menurunnya sesak nafas</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $kriterianafas->lima;
                    if ($lima == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="kn5" checked>
                      <label for="kn5" class="custom-control-label">Menurunnya kesulitan bernafas saat berbaring</label>
                    </div><?php }else{} ?>

                    <?php 
                    $enam = $kriterianafas->enam;
                    if ($enam == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="kn6" checked>
                      <label for="kn6" class="custom-control-label">Menurunnya kesulitan berbicara</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tujuh = $kriterianafas->tujuh;
                    if ($tujuh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="kn7" checked>
                      <label for="kn7" class="custom-control-label">Menurunnya sianosis</label>
                    </div><?php }else{} ?>

                    <?php 
                    $delapan = $kriterianafas->delapan;
                    if ($delapan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="kn8" checked>
                      <label for="kn8" class="custom-control-label">Menurunnya kegelisahan pasien</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sembilan = $kriterianafas->sembilan;
                    if ($sembilan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="kn9" checked>
                      <label for="kn9" class="custom-control-label">Meningkatnya frekuensi nafas</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sepuluh = $kriterianafas->sepuluh;
                    if ($sepuluh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="kn10" checked>
                      <label for="kn10" class="custom-control-label">Meingkatnya pola nafas</label>
                    </div><?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_kriteriapernafasan/').$kriterianafas->id_kriterianafas ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Kriteria Hasil</a>
                    </div>

                     <?php }?>

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
                  <!-- <?php echo $hasil_mol->diagnosa_moskuloskelental; ?> -->

                  <?php if ($sistemmol == "0") { ?>

                      <p>Pengkajian Belum Selesai Diinput</p>

                    <?php }else{ ?>
                    
                    Dari pengkajian sistem moskuloskeletal yang dilakukan diagnosanya adalah : <strong> <?php echo $hasil_mol->diagnosa_moskuloskelental; ?></strong><br>

                    <?php 
                    if ($hasil_mol->diagnosa_moskuloskelental == "Tidak Terdiagnosa Moskuloskeletal") {?>

                      <p></p>

                    <?php }elseif($mol == "0" && $kmol == "0" && $hasil_mol->diagnosa_moskuloskelental != "Tidak Terdiagnosa Moskuloskeletal"){?>

                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datamol"> <i class="fas fa-plus-square"> </i> Pilih tindakan yang akan dilakukan </a> </button>


                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datakmol"> <i class="fas fa-plus-square"> </i> Pilih kriteria yang diharapkan </a> </button>

                   <?php  }elseif($mol != "0" && $kmol == "0" && $hasil_mol->diagnosa_moskuloskelental != "Tidak Terdiagnosa Moskuloskeletal"){?>
                      
                      <hr><p><strong>Tindakan</strong> yang akan dilakukan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $moll->satu;
                    if ($satu == "Yes") {?>
                      
                      <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="customCheckbox1" checked>
                      <label for="customCheckbox1" class="custom-control-label">Identifikasi adanya nyeri atau keluhan fisik lainnya</label>
                    </div><?php }else{} ?>
                    

                    <?php 
                    $dua = $moll->dua;
                    if ($dua == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="customCheckbox2" checked>
                      <label for="customCheckbox2" class="custom-control-label">Identifikasi toleransi fisik melakukan pergerakan</label>
                    </div><?php }else{} ?>


                    <?php 
                    $tiga = $moll->tiga;
                    if ($tiga == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Monitor frekuensi jantung dan tekanan darah sebelum memulai mobilisasi</label>
                    </div><?php }else{} ?>


                    <?php 
                    $empat = $moll->empat;
                    if ($empat == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Fasilitasi aktivitas mobilisasi dengan alat bantu</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $moll->lima;
                    if ($lima == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Fasilitasi melakukan pergerakan</label>
                    </div><?php }else{} ?>


                    <?php 
                    $enam = $moll->enam;
                    if ($enam == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Libatkan keluarga untuk membantu pasien dalam meningkatkan pergerakan</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuh = $moll->tujuh;
                    if ($tujuh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Jelaskan tujuan dan prosedur mobilisasi</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapan = $moll->delapan;
                    if ($delapan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Anjurkan melakukan mobilisasi dini</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilan = $moll->sembilan;
                    if ($sembilan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Ajarkan mobilisasi sederhana yang harus dilakukan</label>
                    </div> <?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_intervensimol/').$moll->id_imos ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Tindakan</a>
                    </div>

                    <div align="right">
                    <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datakmol"> <i class="fas fa-plus-square"> </i> Pilih Kriteria Hasil </a> </button>
                    </div>

                    <?php  }elseif($mol != "0" && $kmol != "0" && $hasil_mol->diagnosa_moskuloskelental != "Tidak Terdiagnosa Moskuloskeletal"){?>


                      <hr><p><strong>Tindakan</strong> yang akan dilakukan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $moll->satu;
                    if ($satu == "Yes") {?>
                      
                      <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="customCheckbox1" checked>
                      <label for="customCheckbox1" class="custom-control-label">Identifikasi adanya nyeri atau keluhan fisik lainnya</label>
                    </div><?php }else{} ?>
                    

                    <?php 
                    $dua = $moll->dua;
                    if ($dua == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="customCheckbox2" checked>
                      <label for="customCheckbox2" class="custom-control-label">Identifikasi toleransi fisik melakukan pergerakan</label>
                    </div><?php }else{} ?>


                    <?php 
                    $tiga = $moll->tiga;
                    if ($tiga == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Monitor frekuensi jantung dan tekanan darah sebelum memulai mobilisasi</label>
                    </div><?php }else{} ?>


                    <?php 
                    $empat = $moll->empat;
                    if ($empat == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Fasilitasi aktivitas mobilisasi dengan alat bantu</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $moll->lima;
                    if ($lima == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Fasilitasi melakukan pergerakan</label>
                    </div><?php }else{} ?>


                    <?php 
                    $enam = $moll->enam;
                    if ($enam == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Libatkan keluarga untuk membantu pasien dalam meningkatkan pergerakan</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuh = $moll->tujuh;
                    if ($tujuh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Jelaskan tujuan dan prosedur mobilisasi</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapan = $moll->delapan;
                    if ($delapan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Anjurkan melakukan mobilisasi dini</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilan = $moll->sembilan;
                    if ($sembilan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="customCheckbox3" checked>
                      <label for="customCheckbox3" class="custom-control-label">Ajarkan mobilisasi sederhana yang harus dilakukan</label>
                    </div> <?php }else{} ?>

                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_intervensimol/').$moll->id_imos ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Tindakan</a>
                    </div>


                    <hr><p><strong>Kriteria hasil</strong> yang diharapkan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $kriteriamoll->satu;
                    if ($satu == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="satu" type="checkbox" id="kn1" checked>
                      <label for="kn1" class="custom-control-label">Meningkatnya peregerakan ekstremitas</label>
                    </div><?php }else{} ?>

                    <?php 
                    $dua = $kriteriamoll->dua;
                    if ($dua == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="kn2" checked>
                      <label for="kn2" class="custom-control-label">Meningkatnya kekuatan otot pasien</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tiga = $kriteriamoll->tiga;
                    if ($tiga == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="kn3" checked>
                      <label for="kn3" class="custom-control-label">Meningkatnya rentang gerak</label>
                    </div><?php }else{} ?>

                    <?php 
                    $empat = $kriteriamoll->empat;
                    if ($empat == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="kn4" checked>
                      <label for="kn4" class="custom-control-label">Menurunnya nyeri</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $kriteriamoll->lima;
                    if ($lima == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="kn5" checked>
                      <label for="kn5" class="custom-control-label">Menurunnya kecemasan</label>
                    </div><?php }else{} ?>

                    <?php 
                    $enam = $kriteriamoll->enam;
                    if ($enam == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="kn6" checked>
                      <label for="kn6" class="custom-control-label">Menurunnya kekakuan sendi</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tujuh = $kriteriamoll->tujuh;
                    if ($tujuh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="kn7" checked>
                      <label for="kn7" class="custom-control-label">Menurunnya gerak tidak terkordinasi</label>
                    </div><?php }else{} ?>

                    <?php 
                    $delapan = $kriteriamoll->delapan;
                    if ($delapan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="kn8" checked>
                      <label for="kn8" class="custom-control-label">Menurunnya gerak terbatas</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sembilan = $kriteriamoll->sembilan;
                    if ($sembilan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="kn9" checked>
                      <label for="kn9" class="custom-control-label">Menurunnya kelemahan fisik</label>
                    </div><?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_kriteriamol/').$kriteriamoll->id_kriteriamos ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Kriteria Hasil</a>
                    </div>
                   
                    <?php  }elseif($mol == "0" && $kmol != "0" && $hasil_mol->diagnosa_moskuloskelental != "Tidak Terdiagnosa Moskuloskeletal"){?>



                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datamol"> <i class="fas fa-plus-square"> </i> Pilih tindakan yang akan dilakukan </a> </button>


                      <hr><p><strong>Kriteria hasil</strong> yang diharapkan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $kriteriamoll->satu;
                    if ($satu == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="satu" type="checkbox" id="kn1" checked>
                      <label for="kn1" class="custom-control-label">Meningkatnya kemampuan pasien dalam melakukan batuk efektif</label>
                    </div><?php }else{} ?>

                    <?php 
                    $dua = $kriteriamoll->dua;
                    if ($dua == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="kn2" checked>
                      <label for="kn2" class="custom-control-label">Menurunnya produksi sputum</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tiga = $kriteriamoll->tiga;
                    if ($tiga == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="kn3" checked>
                      <label for="kn3" class="custom-control-label">Menurunnya suara nafas tambahan</label>
                    </div><?php }else{} ?>

                    <?php 
                    $empat = $kriteriamoll->empat;
                    if ($empat == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="kn4" checked>
                      <label for="kn4" class="custom-control-label">Menurunnya sesak nafas</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $kriteriamoll->lima;
                    if ($lima == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="kn5" checked>
                      <label for="kn5" class="custom-control-label">Menurunnya kesulitan bernafas saat berbaring</label>
                    </div><?php }else{} ?>

                    <?php 
                    $enam = $kriteriamoll->enam;
                    if ($enam == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="kn6" checked>
                      <label for="kn6" class="custom-control-label">Menurunnya kesulitan berbicara</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tujuh = $kriteriamoll->tujuh;
                    if ($tujuh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="kn7" checked>
                      <label for="kn7" class="custom-control-label">Menurunnya sianosis</label>
                    </div><?php }else{} ?>

                    <?php 
                    $delapan = $kriteriamoll->delapan;
                    if ($delapan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="kn8" checked>
                      <label for="kn8" class="custom-control-label">Menurunnya kegelisahan pasien</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sembilan = $kriteriamoll->sembilan;
                    if ($sembilan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="kn9" checked>
                      <label for="kn9" class="custom-control-label">Meningkatnya frekuensi nafas</label>
                    </div><?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_kriteriamol/').$kriteriamoll->id_kriteriamos ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Kriteria Hasil</a>
                    </div>

                     <?php }?>

                     <?php } ?>

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
                  <!-- <?php echo $hasil_proteksi->diagnosa_proteksi; ?> -->


                  <?php if ($sistempro == "0") { ?>

                      <p>Pengkajian Belum Selesai Diinput</p>

                    <?php }else{ ?>
                    
                    Dari pengkajian sistem proteksi yang dilakukan diagnosanya adalah : <strong> <?php echo $hasil_proteksi->diagnosa_proteksi; ?></strong><br>

                    <?php 
                    if ($hasil_proteksi->diagnosa_proteksi == "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan") {?>

                      <p></p>

                    <?php }elseif($pro == "0" && $kpro == "0" && $hasil_proteksi->diagnosa_proteksi != "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan"){?>

                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datapro"> <i class="fas fa-plus-square"> </i> Pilih tindakan yang akan dilakukan </a> </button>


                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datakpro"> <i class="fas fa-plus-square"> </i> Pilih kriteria yang diharapkan </a> </button>

                   <?php  }elseif($pro != "0" && $kpro == "0" && $hasil_proteksi->diagnosa_proteksi != "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan"){?>
                      
                      <hr><p><strong>Tindakan</strong> yang akan dilakukan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $protek->satu;
                    if ($satu == "Yes") {?>
                      
                      <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="pro1" checked>
                      <label for="pro1" class="custom-control-label">Monitor tanda tanda vital</label>
                    </div><?php }else{} ?>
                    

                    <?php 
                    $dua = $protek->dua;
                    if ($dua == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="pro2" value="Yes" checked>
                    <label for="pro2" class="custom-control-label">Identifikasi toleransi fisik melakukan pergerakan</label>
                    </div><?php }else{} ?>


                    <?php 
                    $tiga = $protek->tiga;
                    if ($tiga == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="pro3" value="Yes" checked>
                    <label for="pro3" class="custom-control-label">Monitor komplikasi akibat demam (mis.kejang, penurunan kesadaran, kadar elektrolit, abnormal, ketidakseimbangan asam basa, Aritmia)</label>
                    </div><?php }else{} ?>


                    <?php 
                    $empat = $protek->empat;
                    if ($empat == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="pro4" value="Yes" checked>
                    <label for="pro4" class="custom-control-label">Tutupi badan dengan selimut atau pakaian dengan tepat</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $protek->lima;
                    if ($lima == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="pro5" value="Yes" checked>
                    <label for="pro5" class="custom-control-label">Lakukan tepit Sponge jika perlu</label>
                    </div><?php }else{} ?>


                    <?php 
                    $enam = $protek->enam;
                    if ($enam == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="pro6" value="Yes" checked>
                    <label for="pro6" class="custom-control-label">Berikan oksigen</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuh = $protek->tujuh;
                    if ($tujuh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="pro7" value="Yes" checked>
                    <label for="pro7" class="custom-control-label">Anjurkan tirah Baring</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapan = $protek->delapan;
                    if ($delapan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="pro8" value="Yes" checked>
                    <label for="pro8" class="custom-control-label">Anjurkan memperbanyak minum </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilan = $protek->sembilan;
                    if ($sembilan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="pro9" value="Yes" checked>
                    <label for="pro9" class="custom-control-label">Kolaborasi pemberian cairan dan elektrolit intravena</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sepuluh = $protek->sepuluh;
                    if ($sepuluh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="pro10" value="Yes" checked>
                      <label for="pro10" class="custom-control-label">Kolaborasi pemberian antipiretik</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sebelas = $protek->sebelas;
                    if ($sebelas == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sebelas" type="checkbox" id="pro11" value="Yes" checked>
                      <label for="pro11" class="custom-control-label">Kolaborasi pemberian antibiotik</label>
                    </div> <?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_intervensipro/').$protek->id_ipro ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Tindakan</a>
                    </div>

                    <div align="right">
                    <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datakpro"> <i class="fas fa-plus-square"> </i> Pilih Kriteria Hasil </a> </button>
                    </div>

                    <?php  }elseif($pro != "0" && $kpro != "0" && $hasil_proteksi->diagnosa_proteksi != "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan"){?>


                    <hr><p><strong>Tindakan</strong> yang akan dilakukan adalah sebagai berikut :</p>

                   <?php 
                    $satu = $protek->satu;
                    if ($satu == "Yes") {?>
                      
                      <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="pro1" checked>
                      <label for="pro1" class="custom-control-label">Monitor tanda tanda vital</label>
                    </div><?php }else{} ?>
                    

                    <?php 
                    $dua = $protek->dua;
                    if ($dua == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="pro2" value="Yes" checked>
                    <label for="pro2" class="custom-control-label">Identifikasi toleransi fisik melakukan pergerakan</label>
                    </div><?php }else{} ?>


                    <?php 
                    $tiga = $protek->tiga;
                    if ($tiga == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="pro3" value="Yes" checked>
                    <label for="pro3" class="custom-control-label">Monitor komplikasi akibat demam (mis.kejang, penurunan kesadaran, kadar elektrolit, abnormal, ketidakseimbangan asam basa, Aritmia)</label>
                    </div><?php }else{} ?>


                    <?php 
                    $empat = $protek->empat;
                    if ($empat == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="pro4" value="Yes" checked>
                    <label for="pro4" class="custom-control-label">Tutupi badan dengan selimut atau pakaian dengan tepat</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $protek->lima;
                    if ($lima == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="pro5" value="Yes" checked>
                    <label for="pro5" class="custom-control-label">Lakukan tepit Sponge jika perlu</label>
                    </div><?php }else{} ?>


                    <?php 
                    $enam = $protek->enam;
                    if ($enam == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="pro6" value="Yes" checked>
                    <label for="pro6" class="custom-control-label">Berikan oksigen</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuh = $protek->tujuh;
                    if ($tujuh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="pro7" value="Yes" checked>
                    <label for="pro7" class="custom-control-label">Anjurkan tirah Baring</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapan = $protek->delapan;
                    if ($delapan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="pro8" value="Yes" checked>
                    <label for="pro8" class="custom-control-label">Anjurkan memperbanyak minum </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilan = $protek->sembilan;
                    if ($sembilan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="pro9" value="Yes" checked>
                    <label for="pro9" class="custom-control-label">Kolaborasi pemberian cairan dan elektrolit intravena</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sepuluh = $protek->sepuluh;
                    if ($sepuluh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="pro10" value="Yes" checked>
                      <label for="pro10" class="custom-control-label">Kolaborasi pemberian antipiretik</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sebelas = $protek->sebelas;
                    if ($sebelas == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sebelas" type="checkbox" id="pro11" value="Yes" checked>
                      <label for="pro11" class="custom-control-label">Kolaborasi pemberian antibiotik</label>
                    </div> <?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_intervensipro/').$protek->id_ipro ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Tindakan</a>
                    </div>


                    <hr><p><strong>Kriteria hasil</strong> yang diharapkan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $kriteriapro->satu;
                    if ($satu == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="satu" type="checkbox" id="kpro1" value="Yes" checked>
                    <label for="kpro1" class="custom-control-label">Tidak terjadi menggigil </label>
                    </div><?php }else{} ?>

                    <?php 
                    $dua = $kriteriapro->dua;
                    if ($dua == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="kpro2" value="Yes" checked>
                    <label for="kpro2" class="custom-control-label">Tidak terjadi kulit memerah </label>
                    </div><?php }else{} ?>

                    <?php 
                    $tiga = $kriteriapro->tiga;
                    if ($tiga == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="kpro3" value="Yes" checked>
                    <label for="kpro3" class="custom-control-label">Tidak terjadi kejang </label>
                    </div><?php }else{} ?>

                    <?php 
                    $empat = $kriteriapro->empat;
                    if ($empat == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="kpro4" value="Yes" checked>
                    <label for="kpro4" class="custom-control-label">Tidak terjadi akrosianosis  </label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $kriteriapro->lima;
                    if ($lima == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="kpro5" value="Yes" checked>
                    <label for="kpro5" class="custom-control-label">Meningkatnya konsumsi oksigen </label>
                    </div><?php }else{} ?>

                    <?php 
                    $enam = $kriteriapro->enam;
                    if ($enam == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                       <input class="custom-control-input" name="enam" type="checkbox" id="kpro6" value="Yes" checked>
                    <label for="kpro6" class="custom-control-label">Menurnnya vasokontriksi Perifer</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tujuh = $kriteriapro->tujuh;
                    if ($tujuh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="kpro7" value="Yes" checked>
                    <label for="kpro7" class="custom-control-label">Tidak terjadi pucat </label>
                    </div><?php }else{} ?>

                    <?php 
                    $delapan = $kriteriapro->delapan;
                    if ($delapan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                       <input class="custom-control-input" name="delapan" type="checkbox" id="kpro8" value="Yes" checked>
                    <label for="kpro8" class="custom-control-label">Tidak terjadi takikardi </label>
                    </div><?php }else{} ?>

                    <?php 
                    $sembilan = $kriteriapro->sembilan;
                    if ($sembilan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                       <input class="custom-control-input" name="sembilan" type="checkbox" id="kpro9" value="Yes" checked>
                    <label for="kpro9" class="custom-control-label">Tidak terjadi Takipnea</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sepuluh = $kriteriapro->sepuluh;
                    if ($sepuluh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="kpro10" value="Yes" checked>
                    <label for="kpro10" class="custom-control-label">Tidak terjadi xbradikardi</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sebelas = $kriteriapro->sebelas;
                    if ($sebelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sebelas" type="checkbox" id="kpro11" value="Yes" checked>
                    <label for="kpro11" class="custom-control-label">Tidak terjadi dasar kuku sianolik</label>
                    </div><?php }else{} ?>

                    <?php 
                    $duabelas = $kriteriapro->duabelas;
                    if ($duabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="duabelas" type="checkbox" id="kpro12" value="Yes" checked>
                    <label for="kpro12" class="custom-control-label">Membaiknya Suhu tubuh </label>
                    </div><?php }else{} ?>

                    <?php 
                    $tigabelas = $kriteriapro->tigabelas;
                    if ($tigabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tigabelas" type="checkbox" id="kpro13" value="Yes" checked>
                    <label for="kpro13" class="custom-control-label">Membaiknya suhu kulit </label>
                    </div><?php }else{} ?>

                    <?php 
                    $empatbelas = $kriteriapro->empatbelas;
                    if ($empatbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empatbelas" type="checkbox" id="kpro14" value="Yes" checked>
                    <label for="kpro14" class="custom-control-label">Membaiknya kadar glukosa darah </label>
                    </div><?php }else{} ?>

                    <?php 
                    $limabelas = $kriteriapro->limabelas;
                    if ($limabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="limabelas" type="checkbox" id="kpro15" value="Yes" checked>
                    <label for="kpro15" class="custom-control-label">Membaiknya pengisian kapiler</label>
                    </div><?php }else{} ?>

                    <?php 
                    $enambelas = $kriteriapro->enambelas;
                    if ($enambelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enambelas" type="checkbox" id="kpro16" value="Yes" checked>
                    <label for="kpro16" class="custom-control-label">Membaiknya ventilasi</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tujuhbelas = $kriteriapro->tujuhbelas;
                    if ($tujuhbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuhbelas" type="checkbox" id="kpro17" value="Yes" checked>
                    <label for="kpro17" class="custom-control-label">Membaiknya tekanan darah</label>
                    </div><?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_kriteriapro/').$kriteriapro->id_kriteriaproteksi ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Kriteria Hasil</a>
                    </div>
                   
                    <?php  }elseif($pro == "0" && $kpro != "0" && $hasil_proteksi->diagnosa_proteksi != "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan"){?>



                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datamol"> <i class="fas fa-plus-square"> </i> Pilih tindakan yang akan dilakukan </a> </button>


                      <hr><p><strong>Kriteria hasil</strong> yang diharapkan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $kriteriapro->satu;
                    if ($satu == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="satu" type="checkbox" id="kpro1" value="Yes" checked>
                    <label for="kpro1" class="custom-control-label">Tidak terjadi menggigil </label>
                    </div><?php }else{} ?>

                    <?php 
                    $dua = $kriteriapro->dua;
                    if ($dua == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="kpro2" value="Yes" checked>
                    <label for="kpro2" class="custom-control-label">Tidak terjadi kulit memerah </label>
                    </div><?php }else{} ?>

                    <?php 
                    $tiga = $kriteriapro->tiga;
                    if ($tiga == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="kpro3" value="Yes" checked>
                    <label for="kpro3" class="custom-control-label">Tidak terjadi kejang </label>
                    </div><?php }else{} ?>

                    <?php 
                    $empat = $kriteriapro->empat;
                    if ($empat == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="kpro4" value="Yes" checked>
                    <label for="kpro4" class="custom-control-label">Tidak terjadi akrosianosis  </label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $kriteriapro->lima;
                    if ($lima == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="kpro5" value="Yes" checked>
                    <label for="kpro5" class="custom-control-label">Meningkatnya konsumsi oksigen </label>
                    </div><?php }else{} ?>

                    <?php 
                    $enam = $kriteriapro->enam;
                    if ($enam == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                       <input class="custom-control-input" name="enam" type="checkbox" id="kpro6" value="Yes" checked>
                    <label for="kpro6" class="custom-control-label">Menurnnya vasokontriksi Perifer</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tujuh = $kriteriapro->tujuh;
                    if ($tujuh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="kpro7" value="Yes" checked>
                    <label for="kpro7" class="custom-control-label">Tidak terjadi pucat </label>
                    </div><?php }else{} ?>

                    <?php 
                    $delapan = $kriteriapro->delapan;
                    if ($delapan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                       <input class="custom-control-input" name="delapan" type="checkbox" id="kpro8" value="Yes" checked>
                    <label for="kpro8" class="custom-control-label">Tidak terjadi takikardi </label>
                    </div><?php }else{} ?>

                    <?php 
                    $sembilan = $kriteriapro->sembilan;
                    if ($sembilan == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                       <input class="custom-control-input" name="sembilan" type="checkbox" id="kpro9" value="Yes" checked>
                    <label for="kpro9" class="custom-control-label">Tidak terjadi Takipnea</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sepuluh = $kriteriapro->sepuluh;
                    if ($sepuluh == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="kpro10" value="Yes" checked>
                    <label for="kpro10" class="custom-control-label">Tidak terjadi xbradikardi</label>
                    </div><?php }else{} ?>

                    <?php 
                    $sebelas = $kriteriapro->sebelas;
                    if ($sebelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sebelas" type="checkbox" id="kpro11" value="Yes" checked>
                    <label for="kpro11" class="custom-control-label">Tidak terjadi dasar kuku sianolik</label>
                    </div><?php }else{} ?>

                    <?php 
                    $duabelas = $kriteriapro->duabelas;
                    if ($duabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="duabelas" type="checkbox" id="kpro12" value="Yes" checked>
                    <label for="kpro12" class="custom-control-label">Membaiknya Suhu tubuh </label>
                    </div><?php }else{} ?>

                    <?php 
                    $tigabelas = $kriteriapro->tigabelas;
                    if ($tigabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tigabelas" type="checkbox" id="kpro13" value="Yes" checked>
                    <label for="kpro13" class="custom-control-label">Membaiknya suhu kulit </label>
                    </div><?php }else{} ?>

                    <?php 
                    $empatbelas = $kriteriapro->empatbelas;
                    if ($empatbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empatbelas" type="checkbox" id="kpro14" value="Yes" checked>
                    <label for="kpro14" class="custom-control-label">Membaiknya kadar glukosa darah </label>
                    </div><?php }else{} ?>

                    <?php 
                    $limabelas = $kriteriapro->limabelas;
                    if ($limabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="limabelas" type="checkbox" id="kpro15" value="Yes" checked>
                    <label for="kpro15" class="custom-control-label">Membaiknya pengisian kapiler</label>
                    </div><?php }else{} ?>

                    <?php 
                    $enambelas = $kriteriapro->enambelas;
                    if ($enambelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enambelas" type="checkbox" id="kpro16" value="Yes" checked>
                    <label for="kpro16" class="custom-control-label">Membaiknya ventilasi</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tujuhbelas = $kriteriapro->tujuhbelas;
                    if ($tujuhbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuhbelas" type="checkbox" id="kpro17" value="Yes" checked>
                    <label for="kpro17" class="custom-control-label">Membaiknya tekanan darah</label>
                    </div><?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_kriteriapro/').$kriteriapro->id_kriteriaproteksi ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Kriteria Hasil</a>
                    </div>

                     <?php }?>

                     <?php } ?>


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
                  <!-- <?php echo $hasil_nyeri->diagnosa_nyeri; ?> -->



                    <?php if ($sistemnyeri == "0") { ?>

                      <p>Pengkajian Belum Selesai Diinput</p>

                    <?php }else{ ?>
                    
                    Dari pengkajian nyeri yang dilakukan diagnosanya adalah : <strong> <?php echo $hasil_nyeri->diagnosa_nyeri; ?></strong><br>

                    <?php 
                    if ($hasil_nyeri->diagnosa_nyeri == "Tidak Terdiagnosa Nyeri Akut") {?>

                      <p></p>

                    <?php }elseif($nyeri == "0" && $knyeri == "0" && $hasil_nyeri->diagnosa_nyeri != "Tidak Terdiagnosa Nyeri Akut"){?>

                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datanyeri"> <i class="fas fa-plus-square"> </i> Pilih tindakan yang akan dilakukan </a> </button>


                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-dataknyeri"> <i class="fas fa-plus-square"> </i> Pilih kriteria yang diharapkan </a> </button>

                   <?php  }elseif($nyeri != "0" && $knyeri == "0" && $hasil_nyeri->diagnosa_nyeri != "Tidak Terdiagnosa Nyeri Akut"){?>
                      
                      <hr><p><strong>Tindakan</strong> yang akan dilakukan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $nyerii->satu;
                    if ($satu == "Yes") {?>
                      
                      <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="nyeri1" checked>
                      <label for="nyeri1" class="custom-control-label">Identifikasi lokasi, karakteristik, durasi, frekuensi, kualitas, intensitas nyeri</label>
                    </div><?php }else{} ?>
                    

                    <?php 
                    $dua = $nyerii->dua;
                    if ($dua == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="nyeri2" value="Yes" checked>
                    <label for="nyeri2" class="custom-control-label">Identifikasi skala nyeri </label>
                    </div><?php }else{} ?>


                    <?php 
                    $tiga = $nyerii->tiga;
                    if ($tiga == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="nyeri3" value="Yes" checked>
                    <label for="nyeri3" class="custom-control-label">Identifikasi respon nyeri Nonverbal </label>
                    </div><?php }else{} ?>


                    <?php 
                    $empat = $nyerii->empat;
                    if ($empat == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="nyeri4" value="Yes" checked>
                    <label for="nyeri4" class="custom-control-label">Identifikasi faktor yang memperberat dan memperingan nyeri </label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $nyerii->lima;
                    if ($lima == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="nyeri5" value="Yes" checked>
                    <label for="nyeri5" class="custom-control-label">Identifikasi pengetahuan dan keyakinan tentang nyeri </label>
                    </div><?php }else{} ?>


                    <?php 
                    $enam = $nyerii->enam;
                    if ($enam == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="nyeri6" value="Yes" checked>
                    <label for="nyeri6" class="custom-control-label">Identifikasi pengaruh budaya terhadap respon nyeri </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuh = $nyerii->tujuh;
                    if ($tujuh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="nyeri7" value="Yes" checked>
                    <label for="nyeri7" class="custom-control-label">Identifikasi pengaruh nyeri pada kualitas hidup </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapan = $nyerii->delapan;
                    if ($delapan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="nyeri8" value="Yes" checked>
                    <label for="nyeri8" class="custom-control-label">Monitor keberhasilan terapi Komplementer yang sudah diberikan </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilan = $nyerii->sembilan;
                    if ($sembilan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="nyeri9" value="Yes" checked>
                    <label for="nyeri9" class="custom-control-label">Monitor efek samping penggunaan analgetik</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sepuluh = $nyerii->sepuluh;
                    if ($sepuluh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="nyeri10" value="Yes" checked>
                      <label for="nyeri10" class="custom-control-label">Berikan teknik nonfarmakologis untuk mengurangi rasa nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sebelas = $nyerii->sebelas;
                    if ($sebelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sebelas" type="checkbox" id="nyeri11" value="Yes" checked>
                      <label for="nyeri11" class="custom-control-label">Kontrol lingkungan yang memperberat rasa nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $duabelas = $nyerii->duabelas;
                    if ($duabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="duabelas" type="checkbox" id="nyeri12" value="Yes" checked>
                      <label for="nyeri12" class="custom-control-label">Fasilitasi istirahat dan tidur</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tigabelas = $nyerii->tigabelas;
                    if ($tigabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tigabelas" type="checkbox" id="nyeri13" value="Yes" checked>
                      <label for="nyeri13" class="custom-control-label">Pertimbangan jenis dan sumber nyeri dalam pemilihan strategi meredakan nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $empatbelas = $nyerii->empatbelas;
                    if ($empatbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empatbelas" type="checkbox" id="nyeri14" value="Yes" checked>
                      <label for="nyeri14" class="custom-control-label">Jelaskan penyebab, periode, dan pemicu nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $limabelas = $nyerii->limabelas;
                    if ($limabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="limabelas" type="checkbox" id="nyeri15" value="Yes" checked>
                      <label for="nyeri15" class="custom-control-label">Jelaskan strategi meredakan nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $enambelas = $nyerii->enambelas;
                    if ($enambelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enambelas" type="checkbox" id="nyeri16" value="Yes" checked>
                      <label for="nyeri16" class="custom-control-label">Anjurkan memonitor nyari secara mandiri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuhbelas = $nyerii->tujuhbelas;
                    if ($tujuhbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuhbelas" type="checkbox" id="nyeri17" value="Yes" checked>
                      <label for="nyeri17" class="custom-control-label">Anjurkan menggunakan analgetik secara tepat</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapanbelas = $nyerii->delapanbelas;
                    if ($delapanbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapanbelas" type="checkbox" id="nyeri18" value="Yes" checked>
                      <label for="nyeri18" class="custom-control-label">Ajarkan teknik non farmakologis untuk mengurangi rasa nyeri </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilanbelas = $nyerii->sembilanbelas;
                    if ($sembilanbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilanbelas" type="checkbox" id="nyeri19" value="Yes" checked>
                      <label for="nyeri19" class="custom-control-label">Kolaborasi pemberian analgetik</label>
                    </div> <?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_intervensinyeri/').$nyerii->id_inyeri ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Tindakan</a>
                    </div>

                    <div align="right">
                    <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-dataknyeri"> <i class="fas fa-plus-square"> </i> Pilih Kriteria Hasil </a> </button>
                    </div>

                    <?php  }elseif($nyeri != "0" && $knyeri != "0" && $hasil_nyeri->diagnosa_nyeri != "Tidak Terdiagnosa Nyeri Akut"){?>


                    <hr><p><strong>Tindakan</strong> yang akan dilakukan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $nyerii->satu;
                    if ($satu == "Yes") {?>
                      
                      <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="nyeri1" checked>
                      <label for="nyeri1" class="custom-control-label">Identifikasi lokasi, karakteristik, durasi, frekuensi, kualitas, intensitas nyeri</label>
                    </div><?php }else{} ?>
                    

                    <?php 
                    $dua = $nyerii->dua;
                    if ($dua == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="nyeri2" value="Yes" checked>
                    <label for="nyeri2" class="custom-control-label">Identifikasi skala nyeri </label>
                    </div><?php }else{} ?>


                    <?php 
                    $tiga = $nyerii->tiga;
                    if ($tiga == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="nyeri3" value="Yes" checked>
                    <label for="nyeri3" class="custom-control-label">Identifikasi respon nyeri Nonverbal </label>
                    </div><?php }else{} ?>


                    <?php 
                    $empat = $nyerii->empat;
                    if ($empat == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="nyeri4" value="Yes" checked>
                    <label for="nyeri4" class="custom-control-label">Identifikasi faktor yang memperberat dan memperingan nyeri </label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $nyerii->lima;
                    if ($lima == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="nyeri5" value="Yes" checked>
                    <label for="nyeri5" class="custom-control-label">Identifikasi pengetahuan dan keyakinan tentang nyeri </label>
                    </div><?php }else{} ?>


                    <?php 
                    $enam = $nyerii->enam;
                    if ($enam == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enam" type="checkbox" id="nyeri6" value="Yes" checked>
                    <label for="nyeri6" class="custom-control-label">Identifikasi pengaruh budaya terhadap respon nyeri </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuh = $nyerii->tujuh;
                    if ($tujuh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuh" type="checkbox" id="nyeri7" value="Yes" checked>
                    <label for="nyeri7" class="custom-control-label">Identifikasi pengaruh nyeri pada kualitas hidup </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapan = $nyerii->delapan;
                    if ($delapan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapan" type="checkbox" id="nyeri8" value="Yes" checked>
                    <label for="nyeri8" class="custom-control-label">Monitor keberhasilan terapi Komplementer yang sudah diberikan </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilan = $nyerii->sembilan;
                    if ($sembilan == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilan" type="checkbox" id="nyeri9" value="Yes" checked>
                    <label for="nyeri9" class="custom-control-label">Monitor efek samping penggunaan analgetik</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sepuluh = $nyerii->sepuluh;
                    if ($sepuluh == "Yes") {?>

                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sepuluh" type="checkbox" id="nyeri10" value="Yes" checked>
                      <label for="nyeri10" class="custom-control-label">Berikan teknik nonfarmakologis untuk mengurangi rasa nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sebelas = $nyerii->sebelas;
                    if ($sebelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sebelas" type="checkbox" id="nyeri11" value="Yes" checked>
                      <label for="nyeri11" class="custom-control-label">Kontrol lingkungan yang memperberat rasa nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $duabelas = $nyerii->duabelas;
                    if ($duabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="duabelas" type="checkbox" id="nyeri12" value="Yes" checked>
                      <label for="nyeri12" class="custom-control-label">Fasilitasi istirahat dan tidur</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tigabelas = $nyerii->tigabelas;
                    if ($tigabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tigabelas" type="checkbox" id="nyeri13" value="Yes" checked>
                      <label for="nyeri13" class="custom-control-label">Pertimbangan jenis dan sumber nyeri dalam pemilihan strategi meredakan nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $empatbelas = $nyerii->empatbelas;
                    if ($empatbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empatbelas" type="checkbox" id="nyeri14" value="Yes" checked>
                      <label for="nyeri14" class="custom-control-label">Jelaskan penyebab, periode, dan pemicu nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $limabelas = $nyerii->limabelas;
                    if ($limabelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="limabelas" type="checkbox" id="nyeri15" value="Yes" checked>
                      <label for="nyeri15" class="custom-control-label">Jelaskan strategi meredakan nyeri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $enambelas = $nyerii->enambelas;
                    if ($enambelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="enambelas" type="checkbox" id="nyeri16" value="Yes" checked>
                      <label for="nyeri16" class="custom-control-label">Anjurkan memonitor nyari secara mandiri</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $tujuhbelas = $nyerii->tujuhbelas;
                    if ($tujuhbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tujuhbelas" type="checkbox" id="nyeri17" value="Yes" checked>
                      <label for="nyeri17" class="custom-control-label">Anjurkan menggunakan analgetik secara tepat</label>
                    </div> <?php }else{} ?>

                    <?php 
                    $delapanbelas = $nyerii->delapanbelas;
                    if ($delapanbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="delapanbelas" type="checkbox" id="nyeri18" value="Yes" checked>
                      <label for="nyeri18" class="custom-control-label">Ajarkan teknik non farmakologis untuk mengurangi rasa nyeri </label>
                    </div> <?php }else{} ?>

                    <?php 
                    $sembilanbelas = $nyerii->sembilanbelas;
                    if ($sembilanbelas == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="sembilanbelas" type="checkbox" id="nyeri19" value="Yes" checked>
                      <label for="nyeri19" class="custom-control-label">Kolaborasi pemberian analgetik</label>
                    </div> <?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_intervensinyeri/').$nyerii->id_inyeri ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Tindakan</a>
                    </div>


                    <hr><p><strong>Kriteria hasil</strong> yang diharapkan adalah sebagai berikut :</p>

                    <?php 
                    $satu = $kriterianyeri->satu;
                    if ($satu == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="satu" type="checkbox" id="knyer1" value="Yes" checked>
                    <label for="knyer1" class="custom-control-label">Meningkatnya kemampuan pasien dalam melaporkan nyeri terkontrol</label>
                    </div><?php }else{} ?>

                    <?php 
                    $dua = $kriterianyeri->dua;
                    if ($dua == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="dua" type="checkbox" id="knyer2" value="Yes" checked>
                    <label for="knyer2" class="custom-control-label">Meningkatnya kemampuan mengenali onset nyeri</label>
                    </div><?php }else{} ?>

                    <?php 
                    $tiga = $kriterianyeri->tiga;
                    if ($tiga == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="tiga" type="checkbox" id="knyer3" value="Yes" checked>
                    <label for="knyer3" class="custom-control-label">Meningkatnya kemampuan pasien mengenali penyebab nyeri</label>
                    </div><?php }else{} ?>

                    <?php 
                    $empat = $kriterianyeri->empat;
                    if ($empat == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="empat" type="checkbox" id="knyer4" value="Yes" checked>
                    <label for="knyer4" class="custom-control-label">Meningkatnya kemampuan teknis non farmakologi</label>
                    </div><?php }else{} ?>

                    <?php 
                    $lima = $kriterianyeri->lima;
                    if ($lima == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                      <input class="custom-control-input" name="lima" type="checkbox" id="knyer5" value="Yes" checked>
                    <label for="knyer5" class="custom-control-label">Meningkatnya dukungan orang terdekat</label>
                    </div><?php }else{} ?>

                    <?php 
                    $enam = $kriterianyeri->enam;
                    if ($enam == "Yes") {?>
                    <div class="custom-control custom-checkbox">
                       <input class="custom-control-input" name="enam" type="checkbox" id="knyer6" value="Yes" checked>
                    <label for="knyer6" class="custom-control-label">Menurunnya penggunanan analgesik</label>
                    </div><?php }else{} ?>


                    <div align="right">
                    <a href="<?php echo base_url('Ass/MasterPasien/update_kriterianyeri/').$kriterianyeri->id_kriterianyeri ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Kriteria Hasil</a>
                    </div>
                   
                    <?php  }elseif($nyeri == "0" && $knyeri != "0" && $hasil_nyeri->diagnosa_nyeri != "Tidak Terdiagnosa Nyeri Akut"){?>



                      <hr><button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#tambah-datanyeri"> <i class="fas fa-plus-square"> </i> Pilih tindakan yang akan dilakukan </a> </button>


                      <hr><p><strong>Kriteria hasil</strong> yang diharapkan adalah sebagai berikut :</p>

                       <?php 
                        $satu = $kriterianyeri->satu;
                        if ($satu == "Yes") {?>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="satu" type="checkbox" id="knyer1" value="Yes" checked>
                        <label for="knyer1" class="custom-control-label">Meningkatnya kemampuan pasien dalam melaporkan nyeri terkontrol</label>
                        </div><?php }else{} ?>

                        <?php 
                        $dua = $kriterianyeri->dua;
                        if ($dua == "Yes") {?>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="dua" type="checkbox" id="knyer2" value="Yes" checked>
                        <label for="knyer2" class="custom-control-label">Meningkatnya kemampuan mengenali onset nyeri</label>
                        </div><?php }else{} ?>

                        <?php 
                        $tiga = $kriterianyeri->tiga;
                        if ($tiga == "Yes") {?>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="tiga" type="checkbox" id="knyer3" value="Yes" checked>
                        <label for="knyer3" class="custom-control-label">Meningkatnya kemampuan pasien mengenali penyebab nyeri</label>
                        </div><?php }else{} ?>

                        <?php 
                        $empat = $kriterianyeri->empat;
                        if ($empat == "Yes") {?>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="empat" type="checkbox" id="knyer4" value="Yes" checked>
                        <label for="knyer4" class="custom-control-label">Meningkatnya kemampuan teknis non farmakologi</label>
                        </div><?php }else{} ?>

                        <?php 
                        $lima = $kriterianyeri->lima;
                        if ($lima == "Yes") {?>
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" name="lima" type="checkbox" id="knyer5" value="Yes" checked>
                        <label for="knyer5" class="custom-control-label">Meningkatnya dukungan orang terdekat</label>
                        </div><?php }else{} ?>

                        <?php 
                        $enam = $kriterianyeri->enam;
                        if ($enam == "Yes") {?>
                        <div class="custom-control custom-checkbox">
                           <input class="custom-control-input" name="enam" type="checkbox" id="knyer6" value="Yes" checked>
                        <label for="knyer6" class="custom-control-label">Menurunnya penggunanan analgesik</label>
                        </div><?php }else{} ?>


                        <div align="right">
                        <a href="<?php echo base_url('Ass/MasterPasien/update_kriterianyeri/').$kriterianyeri->id_kriterianyeri ?>" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"> </i> Update Kriteria Hasil</a>
                        </div>

                     <?php }?>

                     <?php } ?>



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
                    <input class="custom-control-input" name="satu" type="checkbox" id="asdf1" value="Yes">
                    <label for="asdf1" class="custom-control-label">Monitor pola nafas (frekuensi, kedalaman, usaha nafas)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="asdf2" value="Yes">
                    <label for="asdf2" class="custom-control-label">Monitor bunyi napass tambahan (mis. gurgling, mengi, wheezing, ronkhi kering)</label>
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



<!-- MODAL TAMBAH DATA KRITERIA PERNAFASAN -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-dataknpenafasan" class="modal fade">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Kriteria hasil yang diharapkan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_kriteriapernafasan') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="hidden" name="id_pernafasan" value="<?php echo $hasil_nafas->id_sistempernafasan; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="kn1" value="Yes">
                    <label for="kn1" class="custom-control-label">Meningkatnya kemampuan pasien dalam melakukan batuk efektif</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="kn2" value="Yes">
                    <label for="kn2" class="custom-control-label">Menurunnya produksi sputum</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="kn3" value="Yes">
                    <label for="kn3" class="custom-control-label">Menurunnya suara nafas tambahan</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="kn4" value="Yes">
                    <label for="kn4" class="custom-control-label">Menurunnya sesak nafas</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="kn5" value="Yes">
                    <label for="kn5" class="custom-control-label">Menurunnya kesulitan bernafas saat berbaring</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="kn7" value="Yes">
                    <label for="kn7" class="custom-control-label">Menurunnya kesulitan berbicara</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="kn7" value="Yes">
                    <label for="kn7" class="custom-control-label">Menurunnya sianosis</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="kn8" value="Yes">
                    <label for="kn8" class="custom-control-label">Menurunnya kegelisahan pasien</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="kn9" value="Yes">
                    <label for="kn9" class="custom-control-label">Meningkatnya frekuensi nafas</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sepuluh" type="checkbox" id="kn10" value="Yes">
                    <label for="kn10" class="custom-control-label">Meingkatnya pola nafas</label>
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
  <!-- AKHIR MODAL TAMBAH DATA KRITERIA PERNAFASAN -->





  <!-- MODAL TAMBAH DATA SISTEM MOL -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-datamol" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tindakan yang akan dilakukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_intervensimol') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="hidden" name="id_moskuloskelental" value="<?php echo $hasil_mol->id_moskuloskelental; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="imol1" value="Yes">
                    <label for="imol1" class="custom-control-label">Identifikasi adanya nyeri atau keluhan fisik lainnya</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="imol2" value="Yes">
                    <label for="imol2" class="custom-control-label">Identifikasi toleransi fisik melakukan pergerakan</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="imol3" value="Yes">
                    <label for="imol3" class="custom-control-label">Monitor frekuensi jantung dan tekanan darah sebelum memulai mobilisasi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="imol4" value="Yes">
                    <label for="imol4" class="custom-control-label">Fasilitasi aktivitas mobilisasi dengan alat bantu</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="imol5" value="Yes">
                    <label for="imol5" class="custom-control-label">Fasilitasi melakukan pergerakan</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="imol6" value="Yes">
                    <label for="imol6" class="custom-control-label">Libatkan keluarga untuk membantu pasien dalam meningkatkan pergerakan</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="imol7" value="Yes">
                    <label for="imol7" class="custom-control-label">Jelaskan tujuan dan prosedur mobilisasi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="imol8" value="Yes">
                    <label for="imol8" class="custom-control-label">Anjurkan melakukan mobilisasi dini</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="imol9" value="Yes">
                    <label for="imol9" class="custom-control-label">Ajarkan mobilisasi sederhana yang harus dilakukan</label>
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
  <!-- AKHIR MODAL TAMBAH DATA SITEM MOL -->




<!-- MODAL TAMBAH DATA KRITERIA MOL -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-datakmol" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Kriteria hasil yang diharapkan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_kriteriamol') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="hidden" name="id_moskuloskelental" value="<?php echo $hasil_mol->id_moskuloskelental; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="kmol1" value="Yes">
                    <label for="kmol1" class="custom-control-label">Meningkatnya peregerakan ekstremitas</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="kmol2" value="Yes">
                    <label for="kmol2" class="custom-control-label">Meningkatnya kekuatan otot pasien</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="kmol3" value="Yes">
                    <label for="kmol3" class="custom-control-label">Meningkatnya rentang gerak</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="kmol4" value="Yes">
                    <label for="kmol4" class="custom-control-label">Menurunnya nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="kmol5" value="Yes">
                    <label for="kmol5" class="custom-control-label">Menurunnya kecemasan</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="kmol6" value="Yes">
                    <label for="kmol6" class="custom-control-label">Menurunnya kekakuan sendi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="kmol7" value="Yes">
                    <label for="kmol7" class="custom-control-label">Menurunnya gerak tidak terkordinasi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="kmol8" value="Yes">
                    <label for="kmol8" class="custom-control-label">Menurunnya gerak terbatas</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="kmol9" value="Yes">
                    <label for="kmol9" class="custom-control-label">Menurunnya kelemahan fisik</label>
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
  <!-- AKHIR MODAL TAMBAH DATA KRITERIA MOL -->




  <!-- MODAL TAMBAH DATA SISTEM PROTEKSI -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-datapro" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tindakan yang akan dilakukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_intervensipro') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="hidden" name="id_proteksi" value="<?php echo $hasil_proteksi->id_proteksi; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="pro1" value="Yes">
                    <label for="pro1" class="custom-control-label">Monitor tanda tanda vital</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="pro2" value="Yes">
                    <label for="pro2" class="custom-control-label">Identifikasi toleransi fisik melakukan pergerakan</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="pro3" value="Yes">
                    <label for="pro3" class="custom-control-label">Monitor komplikasi akibat demam (mis.kejang, penurunan kesadaran, kadar elektrolit, abnormal, ketidakseimbangan asam basa, Aritmia)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="pro4" value="Yes">
                    <label for="pro4" class="custom-control-label">Tutupi badan dengan selimut atau pakaian dengan tepat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="pro5" value="Yes">
                    <label for="pro5" class="custom-control-label">Lakukan tepit Sponge jika perlu</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="pro6" value="Yes">
                    <label for="pro6" class="custom-control-label">Berikan oksigen</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="pro7" value="Yes">
                    <label for="pro7" class="custom-control-label">Anjurkan tirah Baring</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="pro8" value="Yes">
                    <label for="pro8" class="custom-control-label">Anjurkan memperbanyak minum </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="pro9" value="Yes">
                    <label for="pro9" class="custom-control-label">Kolaborasi pemberian cairan dan elektrolit intravena</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sepuluh" type="checkbox" id="pro10" value="Yes">
                    <label for="pro10" class="custom-control-label">Kolaborasi pemberian antipiretik</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sebelas" type="checkbox" id="pro11" value="Yes">
                    <label for="pro11" class="custom-control-label">Kolaborasi pemberian antibiotik</label>
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
  <!-- AKHIR MODAL TAMBAH DATA SITEM PROTEKSI -->




  <!-- MODAL TAMBAH DATA KRITERIA SITEM PROTEKSI -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-datakpro" class="modal fade">
    <div class="modal-dialog modal-xs modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Kriteria hasil yang diharapkan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_kriteriapro') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="hidden" name="id_proteksi" value="<?php echo $hasil_proteksi->id_proteksi; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="kpro1" value="Yes">
                    <label for="kpro1" class="custom-control-label">Tidak terjadi menggigil </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="kpro2" value="Yes">
                    <label for="kpro2" class="custom-control-label">Tidak terjadi kulit memerah </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="kpro3" value="Yes">
                    <label for="kpro3" class="custom-control-label">Tidak terjadi kejang </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="kpro4" value="Yes">
                    <label for="kpro4" class="custom-control-label">Tidak terjadi akrosianosis  </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="kpro5" value="Yes">
                    <label for="kpro5" class="custom-control-label">Meningkatnya konsumsi oksigen </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="kpro6" value="Yes">
                    <label for="kpro6" class="custom-control-label">Menurnnya vasokontriksi Perifer</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="kpro7" value="Yes">
                    <label for="kpro7" class="custom-control-label">Tidak terjadi pucat </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="kpro8" value="Yes">
                    <label for="kpro8" class="custom-control-label">Tidak terjadi takikardi </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="kpro9" value="Yes">
                    <label for="kpro9" class="custom-control-label">Tidak terjadi Takipnea</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sepuluh" type="checkbox" id="kpro10" value="Yes">
                    <label for="kpro10" class="custom-control-label">Tidak terjadi xbradikardi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sebelas" type="checkbox" id="kpro11" value="Yes">
                    <label for="kpro11" class="custom-control-label">Tidak terjadi dasar kuku sianolik</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="duabelas" type="checkbox" id="kpro12" value="Yes">
                    <label for="kpro12" class="custom-control-label">Membaiknya Suhu tubuh </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tigabelas" type="checkbox" id="kpro13" value="Yes">
                    <label for="kpro13" class="custom-control-label">Membaiknya suhu kulit </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empatbelas" type="checkbox" id="kpro14" value="Yes">
                    <label for="kpro14" class="custom-control-label">Membaiknya kadar glukosa darah </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="limabelas" type="checkbox" id="kpro15" value="Yes">
                    <label for="kpro15" class="custom-control-label">Membaiknya pengisian kapiler</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enambelas" type="checkbox" id="kpro16" value="Yes">
                    <label for="kpro16" class="custom-control-label">Membaiknya ventilasi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuhbelas" type="checkbox" id="kpro17" value="Yes">
                    <label for="kpro17" class="custom-control-label">Membaiknya tekanan darah</label>
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
  <!-- AKHIR MODAL TAMBAH DATA RITERIA SITEM PROTEKSI -->




  <!-- MODAL TAMBAH DATA KRITERIA PENGKAJIAN NYERI -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-dataknyeri" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Tindakan yang akan dilakukan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_kriterianyeri') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="hidden" name="id_nyeri" value="<?php echo $hasil_nyeri->id_nyeri; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="knyer1" value="Yes">
                    <label for="knyer1" class="custom-control-label">Meningkatnya kemampuan pasien dalam melaporkan nyeri terkontrol</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="knyer2" value="Yes">
                    <label for="knyer2" class="custom-control-label">Meningkatnya kemampuan mengenali onset nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="knyer3" value="Yes">
                    <label for="knyer3" class="custom-control-label">Meningkatnya kemampuan pasien mengenali penyebab nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="knyer4" value="Yes">
                    <label for="knyer4" class="custom-control-label">Meningkatnya kemampuan teknis non farmakologi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="knyer5" value="Yes">
                    <label for="knyer5" class="custom-control-label">Meningkatnya dukungan orang terdekat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="knyer6" value="Yes">
                    <label for="knyer6" class="custom-control-label">Menurunnya penggunanan analgesik</label>
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
  <!-- AKHIR MODAL TAMBAH DATA KRITERIA PENGKAJIAN NYERI -->




  <!-- MODAL TAMBAH DATA INTERVENSI  PENGKAJIAN NYERI -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-datanyeri" class="modal fade">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Kriteria hasil yang diharapkan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_intervensinyeri') ?>">

            <div class="row">
              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input type="hidden" name="id_nyeri" value="<?php echo $hasil_nyeri->id_nyeri; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="nyer1" value="Yes">
                    <label for="nyer1" class="custom-control-label">Identifikasi lokasi, karakteristik, durasi, frekuensi, kualitas, intensitas nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="nyer2" value="Yes">
                    <label for="nyer2" class="custom-control-label">Identifikasi skala nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="nyer3" value="Yes">
                    <label for="nyer3" class="custom-control-label">Identifikasi respon nyeri Nonverbal </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="nyer4" value="Yes">
                    <label for="nyer4" class="custom-control-label">Identifikasi faktor yang memperberat dan memperingan nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="nyer5" value="Yes">
                    <label for="nyer5" class="custom-control-label">Identifikasi pengetahuan dan keyakinan tentang nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="nyer6" value="Yes">
                    <label for="nyer6" class="custom-control-label">Identifikasi pengaruh budaya terhadap respon nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="nyer7" value="Yes">
                    <label for="nyer7" class="custom-control-label">Identifikasi pengaruh nyeri pada kualitas hidup </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="nyer8" value="Yes">
                    <label for="nyer8" class="custom-control-label">Monitor keberhasilan terapi Komplementer yang sudah diberikan </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="nyer9" value="Yes">
                    <label for="nyer9" class="custom-control-label">Monitor efek samping penggunaan analgetik</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sepuluh" type="checkbox" id="nyer10" value="Yes">
                    <label for="nyer10" class="custom-control-label">Berikan teknik nonfarmakologis untuk mengurangi rasa nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sebelas" type="checkbox" id="nyer11" value="Yes">
                    <label for="nyer11" class="custom-control-label">Kontrol lingkungan yang memperberat rasa nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="duabelas" type="checkbox" id="nyer12" value="Yes">
                    <label for="nyer12" class="custom-control-label">Fasilitasi istirahat dan tidur</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tigabelas" type="checkbox" id="nyer13" value="Yes">
                    <label for="nyer13" class="custom-control-label">Pertimbangan jenis dan sumber nyeri dalam pemilihan strategi meredakan nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empatbelas" type="checkbox" id="nyer14" value="Yes">
                    <label for="nyer14" class="custom-control-label">Jelaskan penyebab, periode, dan pemicu nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="limabelas" type="checkbox" id="nyer15" value="Yes">
                    <label for="nyer15" class="custom-control-label">Jelaskan strategi meredakan nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enambelas" type="checkbox" id="nyer16" value="Yes">
                    <label for="nyer16" class="custom-control-label">Anjurkan memonitor nyari secara mandiri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuhbelas" type="checkbox" id="nyer17" value="Yes">
                    <label for="nyer17" class="custom-control-label">Anjurkan menggunakan analgetik secara tepat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapanbelas" type="checkbox" id="nyer18" value="Yes">
                    <label for="nyer18" class="custom-control-label">Ajarkan teknik non farmakologis untuk mengurangi rasa nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilanbelas" type="checkbox" id="nyer19" value="Yes">
                    <label for="nyer19" class="custom-control-label">Kolaborasi pemberian analgetik</label>
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
  <!-- AKHIR MODAL TAMBAH DATA INTERVENSI  PENGKAJIAN NYERI -->