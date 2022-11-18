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
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/pernafasan/').$detail->id_anamnesis ?>">Pernafasan</a>
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

      </ul>
    </div> 
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
        <a>Data Sistem Pernafasan Pasien An. <?php echo "<strong>".$anamnesis->nama." (".$anamnesis->no_rm.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>


        <div class="row">
          <div class="col-sm-12">
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
                                <label for="inputName" class="col-sm-4 col-form-label">Pola Napas</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->pola_nafas; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputEmail" class="col-sm-4 col-form-label">Irama Nafas </label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->irama_nafas; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputName4" class="col-sm-4 col-form-label">Retraksi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->retraksi; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputExperience" class="col-sm-4 col-form-label">Jenis Retraksi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->jenis_retraksi; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Jenis Pernafasan</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->jenis_pernafasan; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Alat Bantu</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->alat_bantu; ?>">
                                </div>
                              </div>

                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Alat Bantu Lainnya</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->alat_bantu_lainnya; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Tekanan</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->tekanan; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Terpasang WSD</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->terpasang_wsd; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Produksi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->produksi; ?>">
                                </div>
                              </div>

                            </div>

                            <div class="col-sm-6">
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Kesulitan Nafas?</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->kesulitan_bernafas; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Jika Ya</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->kesulitan_bernafas_ya; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Lain-lain</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->lain_lain; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Saat</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->saat; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Batuk dan Sekresi?</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->batukdansekresi; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Jika Ya</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->batukdansekresi_ya; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Warna Sputum</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->warna_sputum; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Suara Nafas</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->suara_nafas; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">Perkusi</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->perkusi; ?>">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="inputSkills" class="col-sm-4 col-form-label">AGD</label>
                                <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?php echo $aaaa->agd; ?>">
                                </div>
                              </div>

                            </div>
                          </div>
                          
                          

                        </form>


                        <div align="right">
                          <a href="<?php echo base_url('Ass/MasterPasien/update_pernafasan/').$detail->id_anamnesis ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> </i> Update</a>

                          <!-- <a href="<?php echo base_url('Ass/MasterPasien/delete_pernafasan/').$detail->id_anamnesis ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"> </i> Delete</a> -->

                          <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
                        </div>

                      </div>


                      

                    <?php }else{?> 

                      <center>
                        <a href="<?php echo base_url('Ass/MasterPasien/pernafasann/').$detail->id_anamnesis ?>" class="btn btn-info mb-3"><i class="fas fa-plus-square"> </i> Tambah Data Sistem Pernafasan</a>
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
