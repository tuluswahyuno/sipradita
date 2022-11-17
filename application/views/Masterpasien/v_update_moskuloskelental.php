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
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/moskuloskelental/').$detail->id_anamnesis ?>">Moskuloskeletal</a>
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


      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Sistem Moskuloskeletal</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_moskuloskelental_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

            <div class="col-sm-3">
                <div class="form-group">
                  <label>Pergerakan Sendi</label>
                  <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>">
                  <input type="hidden" name="id_moskuloskelental" value="<?php echo $mos->id_moskuloskelental; ?>">
                  <select class="form-control" name="pergerakan_sendi">
                    <option value="<?php echo $mos->pergerakan_sendi; ?>"><?php echo $mos->pergerakan_sendi; ?></option>
                    <option value="Bebas">Bebas</option>
                    <option value="Terbatas">Terbatas</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Mudah Lelah</label>
                  <select class="form-control" name="mudah_lelah">
                    <option value="<?php echo $mos->mudah_lelah; ?>"><?php echo $mos->mudah_lelah; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Kekuatan Otot</label>
                  <select class="form-control" name="kekuatan_otot">
                    <option value="<?php echo $mos->kekuatan_otot; ?>"><?php echo $mos->kekuatan_otot; ?></option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-5">
                <div class="form-group">
                  <label>Hasil</label>
                  <input type="text" name="hasil" class="form-control" value="<?php echo $mos->hasil; ?>" required>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Fraktur</label>
                  <select class="form-control" name="fraktur">
                    <option value="<?php echo $mos->fraktur; ?>"><?php echo $mos->fraktur; ?></option>
                    <option value="Tidak">Tidak</option>
                    <option value="Ada">Ada</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Lokasi</label>
                  <input type="text" name="fraktur_lokasi" class="form-control" value="<?php echo $mos->fraktur_lokasi; ?>" required>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Postur Tubuh</label>
                  <select class="form-control" name="postur_tubuh">
                    <option value="<?php echo $mos->postur_tubuh; ?>"><?php echo $mos->postur_tubuh; ?></option>
                    <option value="Normal">Normal</option>
                    <option value="Skoliosis">Skoliosis</option>
                    <option value="Lordosis">Lordosis</option>
                    <option value="Kyposis">Kyposis</option>
                  </select>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Skore Resiko jatuh</label>
                  <input type="text" name="skore_resiko_jatuh" class="form-control" value="<?php echo $mos->skore_resiko_jatuh; ?>" required>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="form-group">
                  <label>Aktivitas Sehari-hari </label>
                  <select class="form-control" name="aktivitas_seharihari">
                    <option value="<?php echo $mos->aktivitas_seharihari; ?>"><?php echo $mos->aktivitas_seharihari; ?></option>
                    <option value="Mandiri">Mandiri</option>
                    <option value="Dibantu Minimal">Dibantu Minimal</option>
                    <option value="Dibantu Sebagian">Dibantu Sebagian</option>
                    <option value="Ketergantungan Total">Ketergantungan Total</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                  <label>Berjalan</label>
                  <select class="form-control" name="berjalan">
                    <option value="<?php echo $mos->berjalan; ?>"><?php echo $mos->berjalan; ?></option>
                    <option value="Tidak ada kesulitan">Tidak ada kesulitan</option>
                    <option value="Perlu Bantuan">Perlu Bantuan</option>
                    <option value="Kelumpuhan">Kelumpuhan</option>
                    <option value="Sering Jatuh">Sering Jatuh</option>
                    <option value="Devormitas">Devormitas</option>
                    <option value="Hilang Keseimbangan">Hilang Keseimbangan</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Alat Ambulasi</label>
                  <select class="form-control" name="alat_ambulasi">
                    <option value="<?php echo $mos->alat_ambulasi; ?>"><?php echo $mos->alat_ambulasi; ?></option>
                    <option value="Walker">Walker</option>
                    <option value="Tongkat">Tongkat</option>
                    <option value="Kursi Roda">Kursi Roda</option>
                    <option value="Normal">Normal</option>
                  </select>
                </div>
            </div>



            <div class="col-sm-2">
                <div class="form-group">
                  <label>Kebiasaan Tidur</label>
                  <select class="form-control" name="kebiasaan_tidur">
                    <option value="<?php echo $mos->kebiasaan_tidur; ?>"><?php echo $mos->kebiasaan_tidur; ?></option>
                    <option value="Tidak">Tidak</option>
                    <option value="Ada">Ada</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                  <label>Lama Tdr Sblm Sakit</label>
                  <input type="number" name="jam_tidur_sebelumsakit" class="form-control" value="<?php echo $mos->jam_tidur_sebelumsakit; ?>" required>
                </div>
            </div>


            <div class="col-sm-2">
                <div class="form-group">
                  <label>Lama Tdr Ssdh Sakit</label>
                  <input type="number" name="jam_tidur_sesudahsakit" class="form-control" value="<?php echo $mos->jam_tidur_sesudahsakit; ?>" required>
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

