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
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/hasil/').$detail->id_anamnesis ?>">Hasil</a>
        </li>

      </ul>
    </div> 
  </section>

  <!-- Main content -->
  <section class="content">

    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
        <a>Hasil Diagnosa Pasien An. <?php echo "<strong>".$anamnesis->nama." (".$anamnesis->no_rm.")"."</strong>" ?></a>
      </div>
    <div class="card-body">

    <div class="row">
      <div class="col-12" id="accordion">
        <div class="card card-info card-outline">
          <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
            <div class="card-header">
              <h4 class="card-title w-100">
                1. Sistem Pernafasan
              </h4>
            </div>
          </a>
          <div id="collapseOne" class="collapse show" data-parent="#accordion">
            <div class="card-body">
              <?php echo $hasil->diagnosa_penafasan ?>
            </div>
          </div>
        </div>
        <div class="card card-info card-outline">
          <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
            <div class="card-header">
              <h4 class="card-title w-100">
                2. Sistem Moskuloskelental
              </h4>
            </div>
          </a>
          <div id="collapseTwo" class="collapse" data-parent="#accordion">
            <div class="card-body">
              Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            </div>
          </div>
        </div>
        <div class="card card-info card-outline">
          <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
            <div class="card-header">
              <h4 class="card-title w-100">
                3. Sistem Proteksi dan Perlindungan
              </h4>
            </div>
          </a>
          <div id="collapseThree" class="collapse" data-parent="#accordion">
            <div class="card-body">
              Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
            </div>
          </div>
        </div>
        <div class="card card-info card-outline">
          <a class="d-block w-100" data-toggle="collapse" href="#collapseFour">
            <div class="card-header">
              <h4 class="card-title w-100">
                4. Pengkajian Nyeri
              </h4>
            </div>
          </a>
          <div id="collapseFour" class="collapse" data-parent="#accordion">
            <div class="card-body">
              Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.
            </div>
          </div>
        </div>
        
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
