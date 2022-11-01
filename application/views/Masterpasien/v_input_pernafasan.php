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
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/pemeriksaan/').$detail->id_anamnesis ?>">Pemeriksaan Umum</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/pernafasan/').$detail->id_anamnesis ?>">Pernafasan</a>
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
          <h3 class="card-title">Pemeriksaan Umum</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_pernafasan_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Pola Napas</label>
                  <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>">
                  <select class="form-control" name="pola_nafas">
                    <option value="Normal">Normal</option>
                    <option value="Bradikardi">Bradikardi</option>
                    <option value="Tachipneu">Tachipneu</option>
                    <option value="Kusmaul">Kusmaul</option>
                    <option value="Apneu">Apneu</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Irama Nafas</label>
                  <select class="form-control" name="irama_nafas">
                    <option value="Teratur">Teratur</option>
                    <option value="Tidak Teratur">Tidak Teratur</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Retaksi</label>
                  <select class="form-control" name="retraksi">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group">
                  <label>Jika Ya, Sebutkan</label>
                  <input type="text" name="jenis_retraksi" class="form-control" placeholder="Jenis Retraksi ..." required>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Jenis Pernafasan</label>
                  <select class="form-control" name="jenis_pernafasan">
                    <option value="Dada">Dada</option>
                    <option value="Perut">Perut</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Alat Bantu</label>
                  <select class="form-control" name="alat_bantu">
                    <option value="NK">NK</option>
                    <option value="NRM">NRM</option>
                    <option value="RM">RM</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group">
                  <label>Alat Bantu Lainnya, Sebutkan</label>
                  <input type="text" name="alat_bantu_lainnya" class="form-control" placeholder="Alat Bantu Lainnya ..." required>
                </div>
            </div>


            <div class="col-sm-4">
                <div class="form-group">
                  <label>Tekanan</label>
                  <input type="text" name="tekanan" class="form-control" placeholder="Tekanan ..." required>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Terpasang WSD</label>
                  <select class="form-control" name="terpasang_wsd">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                  <label>Produksi</label>
                  <input type="text" name="produksi" class="form-control" placeholder="Produksi ..." required>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Kesulitan Bernafas?</label>
                  <select class="form-control" name="kesulitan_bernafas">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Jika Ya</label>
                  <select class="form-control" name="kesulitan_bernafas_ya">
                    <option value="Dispneu">Dispneu</option>
                    <option value="Orthopnea">Orthopnea</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group">
                  <label>Lain-lain</label>
                  <input type="text" name="lain_lain" class="form-control" placeholder="Lain-lain ..." required>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                  <label>Saat</label>
                  <input type="text" name="saat" class="form-control" placeholder="Saat ..." required>
                </div>
            </div>

          
          <div class="col-sm-3">
                <div class="form-group">
                  <label>Batuk dan Sekresi?</label>
                  <select class="form-control" name="batukdansekresi">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
          </div>


          <div class="col-sm-3">
                <div class="form-group">
                  <label>Jika Ya</label>
                  <select class="form-control" name="batukdansekresi_ya">
                    <option value="Produktif">Produktif</option>
                    <option value="Non Produktif">Non Produktif</option>
                  </select>
                </div>
          </div>


          <div class="col-sm-3">
                <div class="form-group">
                  <label>Warna Sputum</label>
                  <select class="form-control" name="warna_sputum">
                    <option value="Putih">Putih</option>
                    <option value="Kuning">Kuning</option>
                    <option value="Merah">Merah</option>
                  </select>
                </div>
          </div>


          <div class="col-sm-3">
                <div class="form-group">
                  <label>Suara Nafas</label>
                  <select class="form-control" name="suara_nafas">
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
                    <option value="Sonor">Sonor</option>
                    <option value="Hiper Sonor">Hiper Sonor</option>
                    <option value="Redup">Redup</option>
                  </select>
                </div>
          </div>


          <div class="col-sm-6">
                <div class="form-group">
                  <label>AGD</label>
                  <select class="form-control" name="agd">
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
          </div>

          
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

