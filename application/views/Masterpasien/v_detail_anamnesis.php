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
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/evaluasi/').$detail->id_anamnesis ?>">Evaluasi</a>
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

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <div class="col-md-12">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#satu" data-toggle="tab">Keluhan</a></li>
                <li class="nav-item"><a class="nav-link" href="#dua" data-toggle="tab"> Riwayat Penyakit</a></li>
                <li class="nav-item"><a class="nav-link" href="#tiga" data-toggle="tab">Riwayat Operasi</a></li>
                <li class="nav-item"><a class="nav-link" href="#empat" data-toggle="tab">Obat Dikonsumsi</a></li>
                <li class="nav-item"><a class="nav-link" href="#lima" data-toggle="tab">Penyakit Keluarga</a></li>
                <li class="nav-item"><a class="nav-link" href="#enam" data-toggle="tab">Alergi</a></li>
                <li class="nav-item"><a class="nav-link" href="#tujuh" data-toggle="tab">Psikososial</a></li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="satu">

                <div class="form-group row">
                <label class="col-sm-12 col-form-label">Keluhan Utama</label>
                <div class="col-sm-12">
                  <textarea type="text" class="form-control"><?php echo $anamnesis->keluhan_utama ?></textarea>
                </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-12 col-form-label">Riwayat Penyakit Sekarang</label>
                <div class="col-sm-12">
                  <textarea type="text" class="form-control"><?php echo $anamnesis->riw_penyakit_sekarang ?></textarea>
                </div>
                </div>

              </div>

              <div class="tab-pane" id="dua">

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pernah dirawat?</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $anamnesis->pernah_rawat; ?>">  
              </div>
              </div>


              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Diagnosa?</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $anamnesis->pernah_rawat_diagnosa; ?>">  
              </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kapan?</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php if ($anamnesis->pernah_rawat_kapan== "0000-00-00") {
                          echo "-";
                        }else{
                          echo tgl_indo(date($anamnesis->pernah_rawat_kapan));
                        } ?> ">  
              </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Dimana?</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $anamnesis->pernah_rawat_di; ?>">  
              </div>
              </div>

              </div>

              <div class="tab-pane" id="tiga">

               <div class="form-group row">
                <label class="col-sm-2 col-form-label">Pernah operasi?</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $anamnesis->pernah_operasi; ?>">  
              </div>
              </div>


              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Operasi Apa?</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $anamnesis->pernah_operasi_jenis; ?>">  
              </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Kapan?</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php if ($anamnesis->pernah_operasi_kapan== "0000-00-00") {
                          echo "-";
                        }else{
                          echo tgl_indo(date($anamnesis->pernah_operasi_kapan));
                        } ?> ">  
              </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Dimana?</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" value="<?php echo $anamnesis->pernah_operasi_di; ?>">  
              </div>
              </div>

            </div>

            <div class="tab-pane" id="empat">

               <div class="form-group row">
                <label class="col-sm-3 col-form-label">Mengkonsumi Obat?</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->obatygdikonsumsi; ?>">  
              </div>
              </div>

               <div class="form-group row">
                <label class="col-sm-3 col-form-label">Nama Obat?</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->obatygdikonsumsi_jenis; ?>">  
              </div>
              </div>


            </div>


            <div class="tab-pane" id="lima">

              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Apakah Memiliki Riwayat Penyakit Keluarga?</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" value="<?php echo $anamnesis->riwayat_penyakit_keluarga; ?>">  
              </div>
              </div>


              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Jenis Penyakit?</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" value="<?php echo $anamnesis->riwayat_penyakit_jenis; ?>">  
              </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-5 col-form-label">Nama Penyakit?</label>
                <div class="col-sm-7">
                <input type="text" class="form-control" value="<?php echo $anamnesis->penyakit_jenis_lainnya; ?>">  
              </div>
              </div>
              
            </div> 


            <div class="tab-pane" id="enam">

             <div class="form-group row">
                <label class="col-sm-3 col-form-label">Apakah Memiliki Alergi?</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->riwayat_alergi; ?>">  
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alergi Makanan?</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->alergi_makanan; ?>">  
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alergi Obat?</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->alergi_obat; ?>">  
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Alergi Lainnya?</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->alergi_lainnya; ?>">  
              </div>
            </div>
              
            </div>  

            <div class="tab-pane" id="tujuh">

             <div class="form-group row">
                <label class="col-sm-3 col-form-label">Agama</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->agama; ?>">  
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pendidikan</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->pendidikan; ?>">  
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Kewarganegaraan</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->kewarganegaraan; ?>">  
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Pekerjaan</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->pekerjaan; ?>">  
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Status Pernikahan</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->status_pernikahan; ?>">  
              </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-3 col-form-label">Tinggal Dengan Keluarga?</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" value="<?php echo $anamnesis->tinggal_bersama_keluarga; ?>">  
              </div>
            </div>
              
            </div>  

          </div>

          <div align="right">
            <a href="<?php echo base_url('Ass/MasterPasien/update_anamnesis/').$detail->id_anamnesis ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> </i> Update</a>

            <!-- <a href="<?php echo base_url('Ass/MasterPasien/delete_pemeriksaan/').$detail->id_anamnesis ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"> </i> Delete</a> -->

            <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
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
