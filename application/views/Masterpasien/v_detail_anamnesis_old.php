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
                <li class="nav-item"><a class="nav-link" href="#dua" data-toggle="tab">Riwayat Penyakit Dahulu</a></li>
                <li class="nav-item"><a class="nav-link" href="#tiga" data-toggle="tab">Riwayat Penyakit Keluarga</a></li>
                <li class="nav-item"><a class="nav-link" href="#empat" data-toggle="tab">Riwayat Alergi</a></li>
                <li class="nav-item"><a class="nav-link" href="#lima" data-toggle="tab">Psikososial</a></li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="satu">


                 <div class="timeline timeline-inverse">

                  <div class="time-label">
                    <span class="bg-primary">
                      Keluhan Utama <i class="fas fa-info-circle bg-primary"></i>
                    </span>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Apakah Keluhan Utama Pasien?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->keluhan_utama ?>
                      </div>
                    </div>
                  </div>


                  <div class="time-label">
                    <span class="bg-primary">
                      Riwayat Penyakit Sekarang <i class="fas fa-info-circle bg-primary"></i>
                    </span>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Apakah Riwayat Penyakit Pasien Sekarang?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->riw_penyakit_sekarang ?>
                      </div>
                    </div>
                  </div>


                  <div>
                    <i class="fas fa-info-circle bg-primary"></i>
                  </div>
                </div>



              </div>

              <div class="tab-pane" id="dua">

                <div class="timeline timeline-inverse">

                  <div class="time-label">
                    <span class="bg-primary">
                      Riwayat Perawatan Pasien <i class="fas fa-info-circle bg-primary"></i>
                    </span>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Apakah Pasien Pernah Dirawat?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->pernah_rawat ?>
                      </div>
                    </div>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Apa Diagnosa Pada Pasien Tersebut?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->pernah_rawat_diagnosa ?>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Kapan Pasien Tersebut Pernah Dirawat?</a></h3>
                      <div class="timeline-body">

                        <?php if ($anamnesis->pernah_rawat_kapan== "0000-00-00") {
                          echo "-";
                        }else{
                          echo tgl_indo(date($anamnesis->pernah_rawat_kapan));
                        } ?>

                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Dimana Tersebut Pernah Dirawat??</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->pernah_rawat_di ?>
                      </div>
                    </div>
                  </div>


                  <div class="time-label">
                    <span class="bg-primary">
                      Riwayat Operasi Pasien <i class="fas fa-info-circle bg-primary"></i>
                    </span>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Apakah Pasien Pernah Dioperasi?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->pernah_operasi ?>
                      </div>
                    </div>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Jika Ya, Apa Jenis Operasi Pasien Tersebut?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->pernah_operasi_jenis ?>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Kapan Pasien Pernah Dioperasi?</a></h3>
                      <div class="timeline-body">

                        <?php if ($anamnesis->pernah_operasi_kapan== "0000-00-00") {
                          echo "-";
                        }else{
                          echo tgl_indo(date($anamnesis->pernah_operasi_kapan));
                        } ?>

                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Dimana Pasien Pernah Dioperasi?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->pernah_operasi_di ?>
                      </div>
                    </div>
                  </div>


                  <div class="time-label">
                    <span class="bg-primary">
                      Obat-obatan yang Dikonsumsi Pasien <i class="fas fa-info-circle bg-primary"></i>
                    </span>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Apakah Saat Ini Ada Obat yang Dikonsumsi?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->obatygdikonsumsi ?>
                      </div>
                    </div>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Nama Obat yang Dikonsumsi?</a></h3>
                      <div class="timeline-body">
                        <?php echo $anamnesis->obatygdikonsumsi_jenis ?>
                      </div>
                    </div>
                  </div>


                  <div>
                    <i class="fas fa-info-circle bg-primary"></i>
                  </div>
                </div>
              </div>

              <div class="tab-pane" id="tiga">

               <div class="timeline timeline-inverse">

                <div class="time-label">
                  <span class="bg-primary">
                    Riwayat Penyakit Keluarga <i class="fas fa-info-circle bg-primary"></i>
                  </span>
                </div>


                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Apakah Pasien Memiliki Riwayat Penyakit Keluarga?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->riwayat_penyakit_keluarga ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Jenis Penyakit?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->riwayat_penyakit_jenis ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Nama Penyakit?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->penyakit_jenis_lainnya ?>
                    </div>
                  </div>
                </div>

                <div>
                  <i class="fas fa-info-circle bg-primary"></i>
                </div>
              </div>

            </div>

            <div class="tab-pane" id="empat">

              <div class="timeline timeline-inverse">

                <div class="time-label">
                  <span class="bg-primary">
                    Riwayat Alergi <i class="fas fa-info-circle bg-primary"></i>
                  </span>
                </div>


                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Apakah Pasien Memiliki Riwayat Alergi?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->riwayat_alergi ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Alergi Makanan?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->alergi_makanan ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Alergi Obat?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->alergi_obat ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Alergi Lainnya?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->alergi_lainnya ?>
                    </div>
                  </div>
                </div>

                <div>
                  <i class="fas fa-info-circle bg-primary"></i>
                </div>
              </div>


            </div>


            <div class="tab-pane" id="lima">


              <div class="timeline timeline-inverse">

                <div class="time-label">
                  <span class="bg-primary">
                    Psikososial <i class="fas fa-info-circle bg-primary"></i>
                  </span>
                </div>


                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Agama Pasien?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->agama ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Pendidikan Pasien?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->pendidikan ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Kewarganegaraan Pasien?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->kewarganegaraan ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Pekerjaan Pasien?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->pekerjaan ?>
                    </div>
                  </div>
                </div>


                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Status Kawin?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->status_pernikahan ?>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="timeline-item">
                    <h3 class="timeline-header"><a href="#">Tinggal Dengan Keluarga?</a></h3>
                    <div class="timeline-body">
                      <?php echo $anamnesis->tinggal_bersama_keluarga ?>
                    </div>
                  </div>
                </div>

                <div>
                  <i class="fas fa-info-circle bg-primary"></i>
                </div>
              </div>


            </div>  

          </div>

          <div align="right">
            <a href="<?php echo base_url('Ass/MasterPasien/update_anamnesis/').$detail->id_anamnesis ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> </i> Update</a>

            <a href="<?php echo base_url('Ass/MasterPasien/delete_pemeriksaan/').$detail->id_anamnesis ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"> </i> Delete</a>

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
