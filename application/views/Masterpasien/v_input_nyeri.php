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
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/pernafasan/').$detail->id_anamnesis ?>">Pernafasan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/moskuloskelental/').$detail->id_anamnesis ?>">Moskuloskelental</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/proteksi/').$detail->id_anamnesis ?>">Proteksi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/nyeri/').$detail->id_anamnesis ?>">Nyeri</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/hasil/').$detail->id_anamnesis ?>">Hasil</a>
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
          <h3 class="card-title">Pengkajian Nyeri</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_nyeri_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Nyeri</label>
                  <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>">
                  <select class="form-control" name="nyeri" id="id-nyeri">
                    <option value="Ada">Ada</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Deskripsi</label>
                  <select class="form-control" name="deskripsi" id="id-deskripsi">
                    <option value="Benturan">Benturan</option>
                    <option value="Tindakan">Tindakan</option>
                    <option value="Proses Penyakit">Proses Penyakit</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Lainnya</label>
                  <input type="text" name="lainnya" class="form-control" placeholder="Lainnya" id="id-lainnya">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                  <label>Quality</label>
                  <select class="form-control" name="quality" id="id-quality">
                    <option value="Berdenyut">Berdenyut</option>
                    <option value="Terbakar">Terbakar</option>
                    <option value="Diremas">Diremas</option>
                    <option value="Teriris">Teriris</option>
                    <option value="Terindih benda berat">Terindih benda berat</option>
                    <option value="Seperti tertusuk-tusuk benda tajam/tumpul">Seperti tertusuk-tusuk benda tajam/tumpul</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Region</label>
                  <input type="text" name="region" class="form-control" placeholder="Lokasi" id="id-region">
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Menyebar</label>
                  <select class="form-control" name="menyebar" id="id-menyebar">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Skala</label>
                  <select class="form-control" name="skala" id="id-skala">
                    <option value="0">0</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="6">6</option>
                    <option value="8">8</option>
                    <option value="10">10</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Time</label>
                  <select class="form-control" name="waktu" id="id-waktu">
                    <option value="< 6 Bulan">< 6 Bulan</option>
                    <option value="> 6 Bulan">> 6 Bulan</option>
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

