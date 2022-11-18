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
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/tekanandarah/').$detail->id_anamnesis ?>">Tekanan Darah</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/grafik/').$detail->id_anamnesis ?>">Vital Sign</a>
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
                      
                      <hr><p>Tindakan yang akan dilakukan adalah sebagai berikut :</p>

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
                      
                      <hr><p>Tindakan yang akan dilakukan adalah sebagai berikut :</p>

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