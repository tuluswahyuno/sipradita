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
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/pemeriksaan/').$detail->id_anamnesis ?>">Pemeriksaan</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/pernafasan/').$detail->id_anamnesis ?>">Pernafasan</a>
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
        <a>Data Pemeriksaan Umum Pasien An. <?php echo "<strong>".$anamnesis->nama." (".$anamnesis->no_rm.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <?php 

        $d = $cek;

        if ( $d == "0") { ?> 


          <div class="col-md-12">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#satu" data-toggle="tab">Pemeriksaan Umum</a></li>
                  <li class="nav-item"><a class="nav-link" href="#dua" data-toggle="tab">Prosedur Invasif</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="satu">


                   <div class="timeline timeline-inverse">

                    <div class="time-label">
                      <span class="bg-primary">
                        GCS <i class="fas fa-info-circle bg-primary"></i>
                      </span>
                    </div>


                    <div>
                      <div class="timeline-item">
                        <h3 class="timeline-header"><a href="#">E / V / M Pasien?</a></h3>
                        <div class="timeline-body">
                          <span class="badge badge-success"><?php echo "E = ".$aaaa->e."</br>" ?></span>
                          <span class="badge badge-primary"><?php echo "V = ".$aaaa->v."</br>" ?></span>
                          <span class="badge badge-warning"><?php echo "M = ".$aaaa->m."</br>" ?></span>
                        </div>
                      </div>
                    </div>


                    <div>
                      <div class="timeline-item">
                        <h3 class="timeline-header"><a href="#">TB / BB Pasien?</a></h3>
                        <div class="timeline-body">
                          <span class="badge badge-info"><?php echo "TB = ".$aaaa->tb." Cm </br>" ?></span>
                          <span class="badge badge-warning"><?php echo "BB = ".$aaaa->bb." Kg </br>" ?></span>
                        </div>
                      </div>
                    </div>

                    <div class="time-label">
                      <span class="bg-primary">
                        Kesadaran <i class="fas fa-info-circle bg-primary"></i>
                      </span>
                    </div>



                    <div>
                      <div class="timeline-item">
                        <h3 class="timeline-header"><a href="#">Kesadaran</a></h3>
                        <div class="timeline-body">
                          <?php echo $aaaa->kesadaran ?>
                        </div>
                      </div>
                    </div>


                    <div class="time-label">
                      <span class="bg-primary">
                        Tanda-Tanda Vital <i class="fas fa-info-circle bg-primary"></i>
                      </span>
                    </div>

                    <div>
                      <div class="timeline-item">
                        <h3 class="timeline-header"><a href="#">TD / RR / N / S / SPo2 Pasien?</a></h3>
                        <div class="timeline-body">
                          <span class="badge badge-primary"><?php echo "TD = ".$aaaa->td."</br>" ?></span>
                          <span class="badge badge-success"><?php echo "RR = ".$aaaa->rr."</br>" ?></span>
                          <span class="badge badge-warning"><?php echo "N = ".$aaaa->n."</br>" ?></span>
                          <span class="badge badge-secondary"><?php echo "S = ".$aaaa->s."</br>" ?></span>
                          <span class="badge badge-danger"><?php echo "SPo2 = ".$aaaa->spo."</br>" ?></span>
                        </div>
                      </div>
                    </div>


                    <div class="time-label">
                      <span class="bg-primary">
                        Keadaan Umum <i class="fas fa-info-circle bg-primary"></i>
                      </span>
                    </div>


                    <div>
                      <div class="timeline-item">
                        <h3 class="timeline-header"><a href="#">Keadaan Umum Pasien?</a></h3>
                        <div class="timeline-body">
                          <?php echo $aaaa->keadaan_umum ?>
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
                      Prosedur Invasif <i class="fas fa-info-circle bg-primary"></i>
                    </span>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">IV Line, Terpasang di ?</a></h3>
                      <div class="timeline-body">
                        <?php echo $aaaa->ivline_terpasangdi." Sebelah ".$aaaa->lokasi ?>
                      </div>
                    </div>
                  </div>

                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Tanggal Pemasangan</a></h3>
                      <div class="timeline-body">
                        <?php echo tgl_indo(date($aaaa->tanggal)) ?>
                      </div>
                    </div>
                  </div>


                  <div class="time-label">
                    <span class="bg-primary">
                      Kateter Urine <i class="fas fa-info-circle bg-primary"></i>
                    </span>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">Kateter Urine, Terpasang Tanggal</a></h3>
                      <div class="timeline-body">
                        <?php echo tgl_indo(date($aaaa->kateter_terpasang_tgl)) ?>
                      </div>
                    </div>
                  </div>

                  <div class="time-label">
                    <span class="bg-primary">
                      NGT/OGT <i class="fas fa-info-circle bg-primary"></i>
                    </span>
                  </div>


                  <div>
                    <div class="timeline-item">
                      <h3 class="timeline-header"><a href="#">NGT/OGT, Terpasang Tanggal</a></h3>
                      <div class="timeline-body">
                        <?php echo tgl_indo(date($aaaa->ngtogt_terpasang_tgl)) ?>
                      </div>
                    </div>
                  </div>


                  <div>
                    <i class="fas fa-info-circle bg-primary"></i>
                  </div>
                </div>

              </div>

              <div align="right">
                <a href="<?php echo base_url('Ass/MasterPasien/update_pemeriksaan/').$detail->id_anamnesis ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> </i> Update</a>

                <a href="<?php echo base_url('Ass/MasterPasien/delete_pemeriksaan/').$detail->id_anamnesis ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"> </i> Delete</a>

                <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-info"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
              </div>


            </div>  

            
          <?php }else{?> 

            <center>
              <a href="<?php echo base_url('Ass/MasterPasien/tambah_pemeriksaan/').$detail->id_anamnesis ?>" class="btn btn-info mb-3"><i class="fas fa-plus-square"> </i> Tambah Data Pemeriksaan Umum</a>
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
