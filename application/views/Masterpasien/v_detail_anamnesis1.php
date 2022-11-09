<title><?= $title; ?></title>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="col-sm-12">
      <ul class="nav nav-tabs">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/detail_anamnesis/').$detail->id_anamnesis ?>">Anamesis</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/pemeriksaan/').$detail->id_anamnesis ?>">Pemeriksaan Umum</a>
        </li>

        <li class="nav-item">
          <a class="nav-link"  href="<?php echo base_url('Ass/MasterPasien/pernafasan/').$detail->id_anamnesis ?>">Pernafasan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/moskuloskelental/').$detail->id_anamnesis ?>">Moskuloskelental</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/proteksi/').$detail->id_anamnesis ?>">Proteksi</a>
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
      <div class="card-header">
        <h3 class="card-title"></h3>
        <a>Data Anamnesis Pasien An. <?php echo "<strong>".$anamnesis->nama." (".$anamnesis->no_rm.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="row">

          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">1. Keluhan Utama</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">

                <textarea class="form-control" rows="2"><?php echo $anamnesis->keluhan_utama ?></textarea>

              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">2. Riwayat Penyakit Sekarang</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">

                <textarea class="form-control" rows="2"><?php echo $anamnesis->riw_penyakit_sekarang ?></textarea>

              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">3. Riwayat Penyakit Dahulu</h3>
                <div class="card-tools">
                  <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseExample">
                    Lihat Data
                  </button>
                </div>
              </div>
              <div class="card-body">


                <div class="collapse" id="collapse4">


                  <div class="form-group">
                    <label>a. Pernah Dirawat</label>
                    <input type="text" name="pernah_rawat" class="form-control" value="<?php echo $anamnesis->pernah_rawat ?>">
                  </div>

                  <div class="form-group">
                    <label>Diagnosa</label>
                    <input type="text" name="pernah_rawat_diagnosa" class="form-control" value="<?php echo $anamnesis->pernah_rawat_diagnosa ?>">
                  </div>

                  <div class="form-group">
                    <label>Tanggal Dirawat</label>
                    <input type="text" name="pernah_rawat_kapan" class="form-control" value="<?php echo tgl_indo(date($anamnesis->pernah_rawat_kapan));?>">
                  </div>

                  <div class="form-group">
                    <label>Tempat Dirawat</label>
                    <input type="text" name="pernah_rawat_di" class="form-control" value="<?php echo $anamnesis->pernah_rawat_di ?>">
                  </div>


                  <div class="form-group">
                    <label>b. Pernah di Operasi</label>
                    <input type="text" name="pernah_operasi" class="form-control" value="<?php echo $anamnesis->pernah_operasi ?>">
                  </div>

                  <div class="form-group">
                    <label>Jenis Operasi</label>
                    <input type="text" name="pernah_operasi_jenis" class="form-control" value="<?php echo $anamnesis->pernah_operasi_jenis ?>">

                  </div>

                  <div class="form-group">
                    <label>Tanggal Operasi</label>
                    <input type="text" name="pernah_operasi_kapan" class="form-control" value="<?php echo tgl_indo(date($anamnesis->pernah_operasi_kapan));?>">
                  </div>

                  <div class="form-group">
                    <label>Tempat Operasi</label>
                    <input type="text" name="pernah_operasi_di" class="form-control" value="<?php echo $anamnesis->pernah_operasi_di ?>">
                  </div>


                  <div class="form-group">
                    <label>c. Obat Yang Dikonsumsi Saat Ini</label>
                    <input type="text" name="obatygdikonsumsi" class="form-control" value="<?php echo $anamnesis->obatygdikonsumsi ?>">
                  </div>

                  <div class="form-group">
                    <label>Nama Obat</label>
                    <input type="text" name="obatygdikonsumsi_jenis" class="form-control" value="<?php echo $anamnesis->obatygdikonsumsi_jenis ?>">
                  </div>

                  
                </div>

              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">4. Riwayat Penyakit Keluarga</h3>
                <div class="card-tools">
                  <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseExample">
                    Lihat Data
                  </button>
                </div>
              </div>
              <div class="card-body">


                <div class="collapse" id="collapse3">


                  <div class="form-group">
                    <label>Apakah Memiliki Riwayat Penyakit Keluarga</label>
                    <input type="text" name="riwayat_penyakit_keluarga" class="form-control" value="<?php echo $anamnesis->riwayat_penyakit_keluarga ?>">
                  </div>


                  <div class="form-group">
                    <label>Jenis Penyakit</label>
                    <input type="text" name="riwayat_penyakit_jenis" class="form-control" value="<?php echo $anamnesis->riwayat_penyakit_jenis ?>">
                  </div>


                  <div class="form-group">
                    <label>Nama Penyakit</label>
                    <input type="text" name="penyakit_jenis_lainnya" class="form-control" value="<?php echo $anamnesis->penyakit_jenis_lainnya ?>">
                  </div>

                  
                </div>

              </div>
            </div>
          </div>


          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">5. Riwayat Alergi</h3>
                <div class="card-tools">
                  <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
                    Lihat Data
                  </button>
                </div>
              </div>
              <div class="card-body">


                <div class="collapse" id="collapse2">


                  <div class="form-group">
                    <label>Apakah Memiliki Riwayat Alergi</label>
                    <input type="text" name="riwayat_alergi" class="form-control" value="<?php echo $anamnesis->riwayat_alergi ?>">
                  </div>

                  <div class="form-group">
                    <label>Makanan</label>
                    <input type="text" name="alergi_makanan" class="form-control" value="<?php echo $anamnesis->alergi_makanan ?>">
                  </div>

                  <div class="form-group">
                    <label>Obat</label>
                    <input type="text" name="alergi_obat" class="form-control" value="<?php echo $anamnesis->alergi_obat ?>">
                  </div>

                  <div class="form-group">
                    <label>Alergi Lainnya</label>
                    <input type="text" name="alergi_lainnya" class="form-control" value="<?php echo $anamnesis->alergi_lainnya ?>">
                  </div>

                  
                </div>

              </div>
            </div>
          </div>
          



          <div class="col-md-6">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">6. Psikososial</h3>
                <div class="card-tools">
                  <button class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapseExample">
                    Lihat Data
                  </button>
                </div>
              </div>
              <div class="card-body">


                <div class="collapse" id="collapse1">
                  <div class="form-group">
                    <label>Agama</label>
                    <input type="text" name="agama" class="form-control" value="<?php echo $anamnesis->agama ?>">
                  </div>


                  <div class="form-group">
                    <label>Pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control" value="<?php echo $anamnesis->pendidikan ?>">
                  </div>


                  <div class="form-group">
                    <label>Kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" class="form-control" value="<?php echo $anamnesis->kewarganegaraan ?>">
                  </div>


                  <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" value="<?php echo $anamnesis->pekerjaan ?>">
                  </div>


                  <div class="form-group">
                    <label>Status Kawin</label>
                    <input type="text" name="status_pernikahan" class="form-control" value="<?php echo $anamnesis->status_pernikahan ?>">
                  </div>


                  <div class="form-group">
                    <label>Tinggal Dengan Keluarga</label>
                    <input type="text" name="tinggal_bersama_keluarga" class="form-control" value="<?php echo $anamnesis->tinggal_bersama_keluarga ?>">
                  </div>
                </div>

              </div>
            </div>
          </div>

          
        </div>


        <div align="right">
          <button class="btn btn-secondary mb-2 ml-2" onclick="history.back()">Back</button>
        </div>


      </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <?php
  function tgl_indo($tanggal){
    $bulan = array (
      1 =>   'Januari',
      'Februari',
      'Maret',
      'April',
      'Mei',
      'Juni',
      'Juli',
      'Agustus',
      'September',
      'Oktober',
      'November',
      'Desember'
    );
    $pecahkan = explode('-', $tanggal);

        // variabel pecahkan 0 = tanggal
        // variabel pecahkan 1 = bulan
        // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
  }?>
