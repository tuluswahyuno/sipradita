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
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/proteksi/').$detail->id_anamnesis ?>">Proteksi</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/nyeri/').$detail->id_anamnesis ?>">Nyeri</a>
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
          <h3 class="card-title">Proteksi dan Perlindungan</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_proteksi_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Suhu</label>
                  <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>">
                  <select class="form-control" name="suhu">
                    <option value="<36,5">< 36,5&deg C</option>
                    <option value="36,5-37,5">36,5&deg C - 37,5&deg C</option>
                    <option value=">37,5">> 37,5&deg C</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Terdapat Luka</label>
                  <select class="form-control" name="terdapat_luka" id="id-luka">
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Lokasi</label>
                  <input type="text" name="lokasi_luka" class="form-control" placeholder="Lokasi ..." id="id-lokasi">
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Kondisi Luka</label>
                  <input type="text" name="kondisi_luka" class="form-control" placeholder="Kondisi Luka ..." id="id-kondisi">
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Kebersihan Luka</label>
                  <select class="form-control" name="kebersihan_luka" id="id-kebersihan">
                    <option value="Bersih">Bersih</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Riwayat Alergi</label>
                  <select class="form-control" name="riwayat_alergi" id="id-alergi">
                    <option value="Ada">Ada</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Jenis Alergi</label>
                  <input type="text" name="nama_alergi" class="form-control" placeholder="Jenis Alergi....." id="id-jenis">
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Nilai Leokosit</label>
                  <input type="text" name="nilai_leokosit" class="form-control" placeholder=".....ribu/L">
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>GDS</label>
                  <input type="text" name="gds" class="form-control" placeholder="GDS....">
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

