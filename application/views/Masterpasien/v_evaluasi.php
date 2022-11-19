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
        <a>Evaluasi Pasien An. <?php echo "<strong>".$anamnesis->nama." (".$anamnesis->no_rm.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <div class="row">

                    <button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#tambah-data"> <i class="fas fa-plus-square"> </i> Tambah Evaluasi Pernafasan </a> </button>

                    <table class="table table-hover table-striped table-bordered" id="table1">
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
                        foreach ($evaluasi as $us) : ?>

                          <tr>
                            <td><?php echo $no++; ?></td>
                            
                            <td align="left"><?php echo $us->s; ?></td>
                            <td align="left"><?php echo $us->o; ?></td>
                            <td align="left">
                              <?php 
                              $satu = $us->siji;
                              if ($satu == "Yes") {?>
                              <i class="far fa-check-circle"></i> Meningkatnya kemampuan pasien dalam melakukan batuk efektif
                              <?php }else{} ?>

                              <?php 
                              $dua = $us->loro;
                              if ($dua == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Menurunnya produksi sputum<?php }else{} ?>

                              <?php 
                              $tiga = $us->telu;
                              if ($tiga == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Menurunnya suara nafas tambahan<?php }else{} ?>

                              <?php 
                              $empat = $us->papat;
                              if ($empat == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Menurunnya sesak nafas<?php }else{} ?>

                              <?php 
                              $lima = $us->limo;
                              if ($lima == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Menurunnya kesulitan bernafas saat berbaring<?php }else{} ?>

                              <?php 
                              $enam = $us->enem;
                              if ($enam == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Menurunnya kesulitan berbicara<?php }else{} ?>

                              <?php 
                              $tujuh = $us->pitu;
                              if ($tujuh == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Menurunnya sianosis<?php }else{} ?>

                              <?php 
                              $delapan = $us->wolu;
                              if ($delapan == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Menurunnya kegelisahan pasien<?php }else{} ?>

                              <?php 
                              $sembilan = $us->songo;
                              if ($sembilan == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Meningkatnya frekuensi nafas<?php }else{} ?>

                              <?php 
                              $sepuluh = $us->sepuloh;
                              if ($sepuluh == "Yes") {?>
                              <br><i class="far fa-check-circle"></i> Meingkatnya pola nafas<?php }else{} ?>
                            </td>


                            <td align="left">
                              <?php 
                                  $satu = $us->satu;
                                  if ($satu == "Yes") {?>
                                    <i class="far fa-check-circle"></i> Monitor pola nafas (frekuensi, kedalaman, usaha nafas)
                                  <?php }else{} ?>
                                  

                                  <?php 
                                  $dua = $us->dua;
                                  if ($dua == "Yes") {?>
                                  <br><i class="far fa-check-circle"></i> Monitor bunyi napas tambahan (mis. gurgling, mengi, wheezing, ronkhi kering)
                                  <?php }else{} ?>

                                  <?php 
                                  $tiga = $us->tiga;
                                  if ($tiga == "Yes") {?>
                                  <br><i class="far fa-check-circle"></i> Monitor bunyi napas tambahan (mis. gurgling, mengi, wheezing, ronkhi kering)
                                  <?php }else{} ?>

                                  <?php 
                                  $empat = $us->empat;
                                  if ($empat == "Yes") {?>
                                  <br><i class="far fa-check-circle"></i> Pertahankan Kepaten jalan napass dengan head-tilt dan chin-lift
                                  <?php }else{} ?>

                                  <?php 
                                  $lima = $us->lima;
                                  if ($lima == "Yes") {?>
                                  <br><i class="far fa-check-circle"></i> Posisikan semi-fowler atau fowler
                                  <?php }else{} ?>


                                  <?php 
                                  $enam = $us->enam;
                                  if ($enam == "Yes") {?>
                                  <br><i class="far fa-check-circle"></i> Berikan minum hangat
                                   <?php }else{} ?>

                                  <?php 
                                  $tujuh = $us->tujuh;
                                  if ($tujuh == "Yes") {?>
                                  <br><i class="far fa-check-circle"></i> Berikan minum hangat
                                   <?php }else{} ?>

                                  <?php 
                                  $delapan = $us->delapan;
                                  if ($delapan == "Yes") {?>
                                    <br><i class="far fa-check-circle"></i> Lakukan penghisapan lendir kurang dari 15 detik
                                   <?php }else{} ?>

                                  <?php 
                                  $sembilan = $us->sembilan;
                                  if ($sembilan == "Yes") {?>
                                    <br><i class="far fa-check-circle"></i> Lakukan hiper Oksigenasi sebelum penghisapan Endotrakeal
                                   <?php }else{} ?>

                                  <?php 
                                  $sepuluh = $us->sepuluh;
                                  if ($sepuluh == "Yes") {?>
                                    <br><i class="far fa-check-circle"></i> Keluarkan Sumbatan benda padat dengan forsep McGill
                                   <?php }else{} ?>

                                  <?php 
                                  $sebelas = $us->sebelas;
                                  if ($sebelas == "Yes") {?>
                                    <br><i class="far fa-check-circle"></i>Berikan oksigen, jika perlu
                                   <?php }else{} ?>

                                  <?php 
                                  $duabelas = $us->duabelas;
                                  if ($duabelas == "Yes") {?>
                                    <br><i class="far fa-check-circle"></i> Anjurkan asupan cairan 2000 ml/hari jika tidak kontraindikasi
                                   <?php }else{} ?>

                                  <?php 
                                  $tigabelas = $us->tigabelas;
                                  if ($tigabelas == "Yes") {?>
                                    <br><i class="far fa-check-circle"></i> Ajarkan teknik batuk efektif
                                   <?php }else{} ?>

                                  <?php 
                                  $empatbelas = $us->empatbelas;
                                  if ($empatbelas == "Yes") {?>
                                    <br><i class="far fa-check-circle"></i> Kolaborasi pemberian Bronkodilator, ekspektoran, mukolitik, jika perlu
                                   <?php }else{} ?>

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
          foreach ($evaluasi as $us) : $no++; ?>
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" id="editmodal<?php echo $us->id_soapnafas; ?>" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update Data Pendidikan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('pns/pendidikan/update_pendidikan') ?>" enctype="multipart/form-data">

                    <div class="row">
                    <div class="col-md-12">
                   
                    <div class="form-group">
                       <label>Jenjang Pendidikan</label>
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
