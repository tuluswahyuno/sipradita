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
        <a>Data Pemeriksaan Umum Pasien An. <?php echo "<strong>".$anamnesis->NAMA." (".$anamnesis->NORM.")"."</strong>" ?></a>
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
                  <li class="nav-item"><a class="nav-link" href="#tiga" data-toggle="tab">Tanda-tanda Vital</a></li>
                  <li class="nav-item"><a class="nav-link" href="#dua" data-toggle="tab">Prosedur Invasif</a></li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="satu">

                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">(CGS) E / V / M </label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $aaaa->e." / ".$aaaa->v." / ".$aaaa->m; ?>">  
                  </div>
                  </div>

                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Kesadaran</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $aaaa->kesadaran; ?>">  
                  </div>
                  </div>

                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">TT / TB</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $aaaa->tb." Cm / ".$aaaa->bb." Kg"; ?>">  
                  </div>
                  </div>


                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">IMT</label>
                  <div class="col-sm-10">
                  <?php 

                  $a = $aaaa->tb / 100;
                  $b = $aaaa->bb;

                  $imt = $b / pow($a,2);

                  ?>
                  <input type="text" class="form-control" value="<?php echo number_format($imt,1); ?>">  
                  </div>
                  </div>



                  

                </div>

                
                <div class="tab-pane" id="dua">

                  <div class="form-group row">
                  <label class="col-sm-4 col-form-label">IV Line, Terpasang di ?</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?php echo $aaaa->ivline_terpasangdi." sebelah ".$aaaa->lokasi ?>">  
                  </div>
                  </div>

                  <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Tanggal Pemasangan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?php if ($aaaa->tanggal == null || $aaaa->tanggal == "0000-00-00") {
                          echo "-";
                        }else{
                          echo tgl_indo(date($aaaa->tanggal));
                        } ?> ">  
                  </div>
                  </div>

                  <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Kateter Urine, Terpasang Tanggal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?php if ($aaaa->kateter_terpasang_tgl == null || $aaaa->kateter_terpasang_tgl == "0000-00-00") {
                          echo "-";
                        }else{
                          echo tgl_indo(date($aaaa->kateter_terpasang_tgl));
                        } ?> ">    
                  </div>
                  </div>

                  <div class="form-group row">
                  <label class="col-sm-4 col-form-label">NGT/OGT, Terpasang Tanggal</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" value="<?php if ($aaaa->ngtogt_terpasang_tgl == null || $aaaa->ngtogt_terpasang_tgl == "0000-00-00") {
                          echo "-";
                        }else{
                          echo tgl_indo(date($aaaa->ngtogt_terpasang_tgl));
                        } ?> ">    
                  </div>
                  </div>

              </div>

              <div class="tab-pane" id="tiga">

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">TD</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $aaaa->td." MmHg"; ?>">  
                  </div>
                  </div>

                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">RR</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $aaaa->rr." x/menit"; ?>">
                  </div>
                  </div>


                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">N</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $aaaa->n." x/menit"; ?>">  
                  </div>
                  </div>

                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">S</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $aaaa->n." C"; ?>">    
                  </div>
                  </div>


                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Spo2</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control mb-1" value="<?php echo $aaaa->n." %"; ?>">  
                  </div>
                  </div>


                  <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Keadaan Umum</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" value="<?php echo $aaaa->keadaan_umum; ?>">  
                  </div>
                  </div>

              </div>

              <div align="right">
                <a href="<?php echo base_url('Ass/MasterPasien/update_pemeriksaan/').$detail->id_anamnesis ?>" class="btn btn-success"><i class="fas fa-pencil-alt"> </i> Update</a>

                <a href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
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
