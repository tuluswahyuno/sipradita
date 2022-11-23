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


      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Sistem Pernafasan</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_pernafasan_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Pola Napas</label>
                  <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>">
                  <input type="hidden" name="id_sistempernafasan" value="<?php echo $pernafasan->id_sistempernafasan; ?>">
                  <select class="form-control" name="pola_nafas">
                    <option value="<?php echo $pernafasan->pola_nafas; ?>"><?php echo $pernafasan->pola_nafas; ?></option>
                    <option value="Normal">Normal</option>
                    <option value="Bradikardi">Bradikardi</option>
                    <option value="Tachipneu">Tachipneu</option>
                    <option value="Kusmaul">Kusmaul</option>
                    <option value="Apneu">Apneu</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Irama Nafas</label>
                  <select class="form-control" name="irama_nafas">
                    <option value="<?php echo $pernafasan->irama_nafas; ?>"><?php echo $pernafasan->irama_nafas; ?></option>
                    <option value="Teratur">Teratur</option>
                    <option value="Tidak Teratur">Tidak Teratur</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Retaksi</label>
                  <select class="form-control" name="retraksi">
                    <option value="<?php echo $pernafasan->retraksi; ?>"><?php echo $pernafasan->retraksi; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group">
                  <label>Jika Ya, Sebutkan</label>
                  <input type="text" name="jenis_retraksi" class="form-control" value="<?php echo $pernafasan->jenis_retraksi; ?>">
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Jenis Pernafasan</label>
                  <select class="form-control" name="jenis_pernafasan">
                    <option value="<?php echo $pernafasan->jenis_pernafasan; ?>"><?php echo $pernafasan->jenis_pernafasan; ?></option>
                    <option value="Dada">Dada</option>
                    <option value="Perut">Perut</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Alat Bantu</label>
                  <select class="form-control" name="alat_bantu">
                    <option value="<?php echo $pernafasan->alat_bantu; ?>"><?php echo $pernafasan->alat_bantu; ?></option>
                    <option value="NK">NK</option>
                    <option value="NRM">NRM</option>
                    <option value="RM">RM</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group">
                  <label>Alat Bantu Lainnya, Sebutkan</label>
                  <input type="text" name="alat_bantu_lainnya" class="form-control" value="<?php echo $pernafasan->alat_bantu_lainnya; ?>">
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Tekanan</label>
                  <select class="form-control" name="tekanan">
                    <option value="<?php echo $pernafasan->tekanan; ?>"><?php echo $pernafasan->tekanan; ?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    </select>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Terpasang WSD</label>
                  <select class="form-control" name="terpasang_wsd">
                    <option value="<?php echo $pernafasan->terpasang_wsd; ?>"><?php echo $pernafasan->terpasang_wsd; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Produksi</label>
                  <input type="text" name="produksi" class="form-control" value="<?php echo $pernafasan->produksi; ?>">
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Kesulitan Bernafas?</label>
                  <select class="form-control" name="kesulitan_bernafas">
                    <option value="<?php echo $pernafasan->kesulitan_bernafas; ?>"><?php echo $pernafasan->kesulitan_bernafas; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Jika Ya</label>
                  <select class="form-control" name="kesulitan_bernafas_ya">
                    <option value="<?php echo $pernafasan->kesulitan_bernafas_ya; ?>"><?php echo $pernafasan->kesulitan_bernafas_ya; ?></option>
                    <option value="Dispneu">Dispneu</option>
                    <option value="Orthopnea">Orthopnea</option>
                  </select>
                </div>
            </div>


            <!-- <div class="col-sm-6">
                <div class="form-group">
                  <label>Lain-lain</label>
                  <input type="text" name="lain_lain" class="form-control" value="<?php echo $pernafasan->lain_lain; ?>">
                </div>
            </div> -->

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Saat</label>
                  <input type="text" name="saat" class="form-control" value="<?php echo $pernafasan->saat; ?>">
                </div>
            </div>

          
          <div class="col-sm-2">
                <div class="form-group">
                  <label>Batuk dan Sekresi?</label>
                  <select class="form-control" name="batukdansekresi">
                    <option value="<?php echo $pernafasan->batukdansekresi; ?>"><?php echo $pernafasan->batukdansekresi; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
          </div>


          <div class="col-sm-2">
                <div class="form-group">
                  <label>Jika Ya</label>
                  <select class="form-control" name="batukdansekresi_ya">
                    <option value="<?php echo $pernafasan->batukdansekresi_ya; ?>"><?php echo $pernafasan->batukdansekresi_ya; ?></option>
                    <option value="Produktif">Produktif</option>
                    <option value="Non Produktif">Non Produktif</option>
                  </select>
                </div>
          </div>


          <div class="col-sm-2">
                <div class="form-group">
                  <label>Warna Sputum</label>
                  <select class="form-control" name="warna_sputum">
                    <option value="<?php echo $pernafasan->warna_sputum; ?>"><?php echo $pernafasan->warna_sputum; ?></option>
                    <option value="Putih">Putih</option>
                    <option value="Kuning">Kuning</option>
                    <option value="Merah">Merah</option>
                  </select>
                </div>
          </div>


          <div class="col-sm-6">
                <div class="form-group">
                  <label>Suara Nafas</label>
                  <select class="form-control" name="suara_nafas">
                    <option value="<?php echo $pernafasan->suara_nafas; ?>"><?php echo $pernafasan->suara_nafas; ?></option>
                    <option value="Vasikuler">Vasikuler</option>
                    <option value="Rongki">Rongki</option>
                    <option value="Whizing">Whizing</option>
                    <option value="Kreckles">Kreckles</option>
                  </select>
                </div>
          </div>


          <div class="col-sm-6">
                <div class="form-group">
                  <label>Perkusi</label>
                  <select class="form-control" name="perkusi">
                    <option value="<?php echo $pernafasan->perkusi; ?>"><?php echo $pernafasan->perkusi; ?></option>
                    <option value="Sonor">Sonor</option>
                    <option value="Hiper Sonor">Hiper Sonor</option>
                    <option value="Redup">Redup</option>
                  </select>
                </div>
          </div>


          <!-- <div class="col-sm-4">
                <div class="form-group">
                  <label>AGD</label>
                  <select class="form-control" name="agd">
                    <option value="<?php echo $pernafasan->agd; ?>"><?php echo $pernafasan->agd; ?></option>
                    <option value="PH<7,35">PH<7,35</option>
                    <option value="PH 7,35-7,45">PH 7,35-7,45</option>
                    <option value="PH >7,45">PH >7,45</option>
                    <option value="PaCO2<35">PaCO2<35</option>
                    <option value="PaCO2 35-45">PaCO2 35-45</option>
                    <option value="PaCO2>45">PaCO2>45</option>
                    <option value="HCO3<22">HCO3<22</option>
                    <option value="HCO3 22-26">HCO3 22-26</option>
                    <option value="HCO3>26">HCO3>26</option>
                  </select>
                </div>
          </div> -->

          
          </div>

            <div align="right">
              <hr>
              <button type="reset" class="btn btn-secondary">Reset</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            
          </form>
        </div>




        <!-- /.card-footer-->
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

