<title><?= $title; ?></title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

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
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/tekanandarah/').$detail->id_anamnesis ?>">Vital Sign</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/grafik/').$detail->id_anamnesis ?>">Grafik</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/evaluasi/').$detail->id_anamnesis ?>">Evaluasi</a>
        </li>


      </ul>
    </div> 
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
        <a>Evaluasi Pasien An. <?php echo "<strong>".$anamnesis->NAMA." (".$anamnesis->NORM.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>


                    <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#tambah-data"> <i class="fas fa-plus-square"> </i> Tambah Evaluasi Pernafasan </a> </button>

                    <table class="table table-hover table-striped table-bordered" id="table1">
                      <thead style="text-align: center;">
                        <th>#</th>
                        <th>Subjective (S)</th>
                        <th>Objective (O)</th>
                        <th>Assessment (A)</th>
                        <th>Plan (P)</th>
                        <th>Pemberi Asuhan</th>
                        <th>Tgl Input</th>
                        <th>Action</th>
                      </thead>


                      <tbody>
                        <?php 

                        $no = 1;
                        foreach ($hevaluasi as $us) : ?>

                          <tr>
                            <td><?php echo $no++; ?></td>
                            
                            <td align="left"><?php echo $us->s; ?></td>
                            <td align="left"><?php echo $us->o; ?></td>
                            <td align="left">
                              <?php if ($sistemnafas == "0") { ?>

                              <p>Pengkajian sistem pernafasan belum selesai diinput</p>

                              <?php }else{ ?>
                              
                      
                              <?php 
                              if ($hasil_nafas->diagnosa_penafasan == "Tidak Terdiagnosa Masalah Pernafasan") {?>

                                                             
                              <?php  }elseif($kn != "0" && $hasil_nafas->diagnosa_penafasan != "Tidak Terdiagnosa Masalah Pernafasan"){?>

                                Sistem Pernafasan :  <strong><?php echo $hasil_nafas->diagnosa_penafasan; ?></strong>

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


                               <?php }?>
                               <?php } ?>


                            <?php if ($sistemmol == "0") { ?>

                              <hr><p>Pengkajian <strong>sistem moskuloskeletal</strong> belum selesai diinput</p>

                            <?php }else{ ?>
                

                            <?php 
                            if ($hasil_mol->diagnosa_moskuloskelental == "Tidak Terdiagnosa Moskuloskeletal") {?>

                              
                           
                            <?php  }elseif($kmol != "0" && $hasil_mol->diagnosa_moskuloskelental != "Tidak Terdiagnosa Moskuloskeletal"){?>

                              <hr>Sistem Moskuloskeletal : <strong> <?php echo $hasil_mol->diagnosa_moskuloskelental; ?></strong>

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

                             <?php }?>

                             <?php } ?>

                              <?php if ($sistempro == "0") { ?>

                              <hr><p>Pengkajian <strong>sistem proteksi</strong> belum selesai diinput</p>

                            <?php }else{ ?>
                            
                             

                            <?php 
                            if ($hasil_proteksi->diagnosa_proteksi == "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan") {?>

                              
                            
                            <?php  }elseif($kpro != "0" && $hasil_proteksi->diagnosa_proteksi != "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan"){?>

                              <hr>Sistem Proteksi :<strong> <?php echo $hasil_proteksi->diagnosa_proteksi; ?></strong><br>


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

                             <?php }?>

                             <?php } ?>

                              <?php if ($sistemnyeri == "0") { ?>

                              <hr><p><strong>Pengkajian nyeri</strong> belum selesai diinput</p>

                            <?php }else{ ?>
                            
                            

                            <?php 
                            if ($hasil_nyeri->diagnosa_nyeri == "Tidak Terdiagnosa Nyeri Akut") {?>

                              
                            
                            <?php  }elseif($knyeri != "0" && $hasil_nyeri->diagnosa_nyeri != "Tidak Terdiagnosa Nyeri Akut"){?>

                              <hr>Pengkajian Nyeri : <br><strong> <?php echo $hasil_nyeri->diagnosa_nyeri; ?></strong>

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


                             <?php }?>

                             <?php } ?>
                                

                            </td>


                            <td align="left">
                              <?php if ($sistemnafas == "0") { ?>

                                <p>Pengkajian sistem pernafasan belum selesai diinput</p>

                              <?php }else{ ?>
                              
                              <!--  -->

                              <?php 
                              if ($hasil_nafas->diagnosa_penafasan == "Tidak Terdiagnosa Masalah Pernafasan") {?>

                                

                             <?php  }elseif($nafas != "0" && $hasil_nafas->diagnosa_penafasan != "Tidak Terdiagnosa Masalah Pernafasan"){?>

                              Sistem Pernafasan : <strong> <?php echo $hasil_nafas->diagnosa_penafasan; ?></strong> <br>
                                
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


                               <?php }?>

                               <?php } ?>

                               <?php if ($sistemmol == "0") { ?>

                                <hr><p>Pengkajian <strong>sistem soskuloskeletal</strong> belum selesai diinput</p>

                              <?php }else{ ?>
                              
                              

                              <?php 
                              if ($hasil_mol->diagnosa_moskuloskelental == "Tidak Terdiagnosa Moskuloskeletal") {?>

                                

                             <?php  }elseif($mol != "0" && $hasil_mol->diagnosa_moskuloskelental != "Tidak Terdiagnosa Moskuloskeletal"){?>

                              <hr>Sistem Moskuloskeletal : <strong> <?php echo $hasil_mol->diagnosa_moskuloskelental; ?></strong>
                                
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

                               <?php }?>

                               <?php } ?>


                                <?php if ($sistempro == "0") { ?>

                                <hr><p>Pengkajian <strong>sistem proteksi </strong>belum selesai diinput</p>

                              <?php }else{ ?>
                              
                               

                              <?php 
                              if ($hasil_proteksi->diagnosa_proteksi == "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan") {?>

                                

                             <?php  }elseif($pro != "0" && $hasil_proteksi->diagnosa_proteksi != "Tidak Terdiagnosa Masalah Proteksi dan Perlindungan"){?>

                              <hr>Sistem Proteksi :<strong> <?php echo $hasil_proteksi->diagnosa_proteksi; ?></strong>
                                

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

                               <?php }?>

                               <?php } ?>

                                <?php if ($sistemnyeri == "0") { ?>

                                <hr><p><strong>Pengkajian nyeri</strong> belum selesai diinput</p>

                              <?php }else{ ?>
                              
                              

                              <?php 
                              if ($hasil_nyeri->diagnosa_nyeri == "Tidak Terdiagnosa Nyeri Akut") {?>

                                

                             <?php  }elseif($nyeri != "0" && $hasil_nyeri->diagnosa_nyeri != "Tidak Terdiagnosa Nyeri Akut"){?>

                              <hr>Pengkajian Nyeri : <br><strong> <?php echo $hasil_nyeri->diagnosa_nyeri; ?></strong><br>
                                
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


                               <?php }?>

                               <?php } ?>
                              

                            </td>
                            
                            <td><?php echo $us->pemberi_asuhan ?></td>
                            <td align="center"><?php echo $us->create_at ?></td>

                            
                            <td class="project-actions text-center">
                            
                              <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#editmodal<?php echo $us->id_soap; ?>">
                              <i class="fas fa-pencil-alt">
                              </i> Edit</a>


                              <a class="btn btn-sm btn-danger tombol-hapus" href="<?php echo base_url('Ass/MasterPasien/delete_soap/').$us->id_soap ?>">
                              <i class="fas fa-trash"></i> Delete</a>

                            </td>

                          </tr>

                        <?php endforeach; ?>
                      </tbody>

                    </table>

        

        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->




      <!-- MODAL TAMBAH DATA SISTEM PERNAFASAN -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Input Data Evaluasi</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_evaluasi') ?>">

                <div class="row">
                  <div class="col-md-12">

                    <div class="form-group">
                    <label>Subjective (S)</label>
                    <input type="hidden" name="id_anamnesis" value="<?php echo $anamnesis->id_anamnesis; ?>">
                    <textarea class="form-control" name="s" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                    <label>Objective (O)</label>
                    <textarea class="form-control" name="o" rows="4" required></textarea>
                    </div>

                    <div class="form-group">
                    <label>Pemberi Asuhan</label>
                    <select class="pemberi_asuhan form-control" name="pemberi_asuhan[]" multiple style="width: 100%;">
                        <?php foreach($pemberiasuhan as $pb) : ?>
                            <option value="<?php echo $pb->nama;?>"> <?php echo $pb->nama; ?></option>
                        <?php endforeach; ?>

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
      <!-- AKHIR MODAL TAMBAH DATA SITEM PERNAFASAN -->



      <!-- MODAL UPDATE DATA -->
          <?php 
          $no = 0;
          foreach ($hevaluasi as $us) : $no++; ?>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="editmodal<?php echo $us->id_soap; ?>" class="modal fade">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update Data Evaluasi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_evaluasi') ?>" enctype="multipart/form-data">

                    <div class="row">
                    <div class="col-md-12">
                    
                    <div class="form-group">
                    <label>Subjective (S)</label>
                    <input type="hidden" name="id_soap" value="<?php echo $us->id_soap; ?>">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $anamnesis->id_anamnesis; ?>">
                    <textarea class="form-control" name="s" rows="4" required><?php echo $us->s; ?></textarea>
                    </div>

                    <div class="form-group">
                    <label>Objective (O)</label>
                    <textarea class="form-control" name="o" rows="4" required><?php echo $us->o; ?></textarea>
                    </div>


                    <div class="form-group">
                    <label>Pemberi Asuhan</label>
                    <select class="pemberi_asuhan form-control" name="pemberi_asuhan[]" multiple style="width: 100%;">

                        <option value="<?php echo $us->pemberi_asuhan; ?>"><?php echo $us->pemberi_asuhan;?></option>


                        <?php foreach($pemberiasuhan as $pb) : ?>
                          
                            <option value="<?php echo $pb->nama;?>"> <?php echo $pb->nama; ?></option>
                        <?php endforeach; ?>


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




    <script type="text/javascript">
        $(document).ready(function() {
            $('.pemberi_asuhan').select2();
        });

        $('body').on('click','.store-data',function (e) {
            e.preventDefault();

            //Get Text
            var selected = $('.pemberi_asuhan').select2("data");
            for (var i = 0; i <= selected.length-1; i++) {
                console.log(selected[i].text);
            }

            var selected = $('.pemberi_asuhan').val();
            console.log(selected);
        });
    </script>






