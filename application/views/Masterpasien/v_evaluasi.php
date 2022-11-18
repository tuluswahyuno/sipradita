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
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/tekanandarah/').$detail->id_anamnesis ?>">Tekanan Darah</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/grafik/').$detail->id_anamnesis ?>">Vital Sign</a>
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
        <a>Evaluasi Pasien An. <?php echo "<strong>".$anamnesis->nama." (".$anamnesis->no_rm.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <div class="row">

          <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Pernafasan</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Moskuloskeletal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Proteksi</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Nyeri</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">

                    <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#tambah-data"> <i class="fas fa-plus-square"> </i> Tambah Evaluasi Pernafasan </a> </button>

                    <table class="table table-hover table-striped table-bordered">
                      <thead style="text-align: center;">
                        <th>#</th>
                        <th>Subjective (S)</th>
                        <th>Objective (O)</th>
                        <th>Assessment (A)</th>
                        <th>Plan (P)</th>
                        <th>Tgl Input</th>
                        <th>Action</th>
                      </thead>


                      <tbody>
                        <?php 

                        $no = 1;
                        foreach ($tekanan as $us) : ?>

                          <tr>
                            <td><?php echo $no++; ?></td>
                            
                            <td align="left"><?php echo $us->s; ?></td>
                            <td align="left"><?php echo $us->o; ?></td>
                            <td align="left">
                              <p>1.Meningkatnya kemampuan pasien dalam melakukan batuk efektif
                              <br>2.Menurunnya produksi sputum
                              <br>3.Menurunnya suara nafas tambahan
                              <br>4.Menurunnya sesak nafas
                              <br>5.Menurunnya kesulitan bernafas saat berbaring
                              <br>6.Menurunnya kesulitan berbicara
                              <br>7.Menurunnya sianosis
                              <br>8.Menurunnya kegelisahan pasien
                              <br>9.Meningkatnya frekuensi nafas
                              <br>10.Meingkatnya pola nafas</p>
                            </td>
                            <td align="left">
                              <?php 
                                  $satu = $us->satu;
                                  if ($satu == "Yes") {?>
                                    <i class="fas fa-check"></i> Monitor pola nafas (frekuensi, kedalaman, usaha nafas)
                                  </div><?php }else{} ?>
                                  

                                  <?php 
                                  $dua = $us->dua;
                                  if ($dua == "Yes") {?>
                                  <br><i class="fas fa-check"></i> Monitor bunyi napas tambahan (mis. gurgling, mengi, wheezing, ronkhi kering)
                                  </div><?php }else{} ?>


                                  <?php 
                                  $tiga = $us->tiga;
                                  if ($tiga == "Yes") {?>
                                  <br><i class="fas fa-check"></i> Monitor sputum (jumlah, warna, aroma)
                                  </div><?php }else{} ?>


                                  <?php 
                                  $empat = $us->empat;
                                  if ($empat == "Yes") {?>
                                  <br><i class="fas fa-check"></i> Pertahankan Kepaten jalan napass dengan head-tilt dan chin-lift
                                  </div><?php }else{} ?>

                                  <?php 
                                  $lima = $us->lima;
                                  if ($lima == "Yes") {?>
                                  <br><i class="fas fa-check"></i> Posisikan semi-fowler atau fowler
                                  </div><?php }else{} ?>


                                  <?php 
                                  $enam = $us->enam;
                                  if ($enam == "Yes") {?>
                                  <br><i class="fas fa-check"></i> Berikan minum hangat
                                  </div> <?php }else{} ?>

                                  <?php 
                                  $tujuh = $us->tujuh;
                                  if ($tujuh == "Yes") {?>
                                  <br><i class="fas fa-check"></i> Berikan minum hangat
                                  </div> <?php }else{} ?>

                                  <?php 
                                  $delapan = $us->delapan;
                                  if ($delapan == "Yes") {?>
                                    <br><i class="fas fa-check"></i> Lakukan penghisapan lendir kurang dari 15 detik
                                  </div> <?php }else{} ?>

                                  <?php 
                                  $sembilan = $us->sembilan;
                                  if ($sembilan == "Yes") {?>
                                    <br><i class="fas fa-check"></i> Lakukan hiper Oksigenasi sebelum penghisapan Endotrakeal
                                  </div> <?php }else{} ?>

                                  <?php 
                                  $sepuluh = $us->sepuluh;
                                  if ($sepuluh == "Yes") {?>
                                    <br><i class="fas fa-check"></i> Keluarkan Sumbatan benda padat dengan forsep McGill
                                  </div> <?php }else{} ?>

                                  <?php 
                                  $sebelas = $us->sebelas;
                                  if ($sebelas == "Yes") {?>
                                    <br><i class="fas fa-check"></i>Berikan oksigen, jika perlu
                                  </div> <?php }else{} ?>

                                  <?php 
                                  $duabelas = $us->duabelas;
                                  if ($duabelas == "Yes") {?>
                                    <br><i class="fas fa-check"></i> Anjurkan asupan cairan 2000 ml/hari jika tidak kontraindikasi
                                  </div> <?php }else{} ?>

                                  <?php 
                                  $tigabelas = $us->tigabelas;
                                  if ($tigabelas == "Yes") {?>
                                    <br><i class="fas fa-check"></i> Ajarkan teknik batuk efektif
                                  </div> <?php }else{} ?>

                                  <?php 
                                  $empatbelas = $us->empatbelas;
                                  if ($empatbelas == "Yes") {?>
                                    <br><i class="fas fa-check"></i> Kolaborasi pemberian Bronkodilator, ekspektoran, mukolitik, jika perlu
                                  </div> <?php }else{} ?>

                              </td>
                            <td align="center"><?php echo $us->create_at ?></td>


                            <td class="project-actions text-center">
                            
                              <a class="btn btn-info btn-sm" data-toggle="modal" data-target="#editmodal<?php echo $us->id_soapnafas; ?>">
                              <i class="fas fa-pencil-alt">
                              </i> Edit</a>


                              <a class="btn btn-sm btn-danger tombol-hapus" href="<?php echo base_url('Ass/MasterPasien/delete_tekanandarah/').$us->id_soapnafas ?>">
                              <i class="fas fa-trash"></i> Delete</a>

                            </td>

                          </tr>

                        <?php endforeach; ?>
                      </tbody>

                    </table>

                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam.
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna.
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis.
                  </div>
                </div>
              </div>
            </div>


            <div align="right">
              <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-left"></i> Back</a>
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
