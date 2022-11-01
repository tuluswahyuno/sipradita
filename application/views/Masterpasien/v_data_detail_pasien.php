<title><?= $title; ?></title>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="col-sm-12">
      <ul class="nav nav-tabs">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/detail_pasien/').$detail->id_pasien ?>">Anamesis</a>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Ass/MasterPasien/pemeriksaan/').$detail->id_pasien ?>">Pemeriksaan</a>
        </li> -->

      </ul>
    </div> 
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title"></h3>
        <a>Data Anamnesis Pasien An. <?php echo "<strong>".$detail->nama." (".$detail->no_rm.")"."</strong>" ?></a>
      </div>
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

        <a href="<?php echo base_url('Ass/MasterPasien/tambah_anamnesis/').$detail->id_pasien ?>" class="btn btn-info mb-3"><i class="fas fa-plus-square"> </i> Tambah Data Anamnesis</a>

        <table class="table table-hover table-striped table-bordered" id="table1">
          <thead style="text-align: center;">
            <th>#</th>
            <th>No RM</th>
            <th>Tgl Pengkajian</th>
            <th>Keluhan Utama</th>
            <th>Riw Penyakit Skrg</th>
            <th>Action</th>
          </thead>


          <tbody>
            <?php 

            $no = 1;
            foreach ($anamnesis as $us) : ?>

              <tr>
                <td><?php echo $no++; ?></td>
                
                <td><?php echo $us->no_rm ?></td>
                <td><?php echo $us->tgl_pengkajian ?></td>
                <td><?php echo $us->keluhan_utama ?></td>
                <td><?php echo $us->riw_penyakit_sekarang ?></td>

                <!-- <td style="text-align: center;">
                  <a href="<?php echo base_url('Ass/MasterPasien/detail_anamnesis/').$us->id_anamnesis ?>" class="btn btn-sm btn-success">Detail <i class="fas fa-eye"></i></a>
                </td> -->

                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="<?php echo base_url('Ass/MasterPasien/detail_anamnesis/').$us->id_anamnesis ?>">
                    <i class="fas fa-folder">
                    </i>
                    View
                  </a>
                  <a class="btn btn-info btn-sm" href="<?php echo base_url('Ass/MasterPasien/update_anamnesis/').$us->id_anamnesis ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="#">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                  </a>
                </td>

              </tr>

            <?php endforeach; ?>
          </tbody>

        </table>

      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <!-- Footer -->
      </div>
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
