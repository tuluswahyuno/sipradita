<title><?= $title; ?></title>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3>Profile Pegawai</h3>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile Pegawai</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

  <section class="content">
  <div class="container-fluid">
  <div class="row">
  <div class="col-md-4">

  <div class="card card-primary card-outline">
  <div class="card-body box-profile">
  <div class="text-center">
  <img class="profile-user-img img-fluid img-box" src="<?php echo base_url().'uploads/foto/'.$pegawai->foto ?>" alt="User profile picture">
  </div>
  <h3 class="profile-username text-center"><?php echo $pegawai->nama_lengkap; ?></h3>
  <p class="text-muted text-center"><?php echo $pegawai->nik; ?></p>
  <ul class="list-group list-group-unbordered mb-3">
  <li class="list-group-item">
    <b><?php echo $pegawai->jpegawai; ?></b> <a class="float-right">Status Pegawai</a>
  </li>
  <li class="list-group-item">
    <b><?php echo $pegawai->nama_profesi; ?></b> <a class="float-right">Profesi</a>
  </li>
  <li class="list-group-item">
    <b><?php echo $pegawai->nama_unitkerja; ?></b> <a class="float-right">Unit Kerja</a>
  </li>
  <li class="list-group-item">
    <b><?php echo $pegawai->tempat_lahir.", ". date('d-M-Y', strtotime($pegawai->tgl_lahir)); ?></b> <a class="float-right">Tempat, Tgl Lahir</a>
  </li>
  </ul>
  <a class="btn btn-primary btn-block" data-toggle="modal" data-target="#update-foto"><b>Update Foto</b></a>
  <a href="<?php echo base_url('nonpns/Dashboard/update_data') ?>" class="btn btn-danger btn-block"><b>Update Data</b></a>
  </div>

  </div>


  

  </div>

  <div class="col-md-8">
  <div class="card">
  <div class="card-header p-2">
  <ul class="nav nav-pills">
  <li class="nav-item"><a class="nav-link active" href="#profile" data-toggle="tab">Profile</a></li>
    <!-- <li class="nav-item"><a class="nav-link" href="#about" data-toggle="tab">Profesi</a></li> -->
  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Masa Kerja</a></li>
  </ul>
  </div>
  <div class="card-body">
  <div class="tab-content">
  

  <div class="tab-pane" id="timeline">

  <div class="timeline timeline-inverse">

  <div class="time-label">
  <span class="bg-secondary">
    Masa Kerja
  </span>
  </div>


  <div>
  <i class="fas fa-user-md bg-gray"></i>
  <div class="timeline-item">
  <!-- <span class="time"><i class="far fa-clock"></i> 12:05</span> -->
  <h3 class="timeline-header"><a>TMT anda adalah</a> 
    <span class="badge badge-primary"><?php echo date('d-M-Y', strtotime($pegawai->tmt))  ?></span>
  </h3>
  <div class="timeline-body">
    Keseluruhan masa kerja anda adalah 
    <?php 
                  
                  $tmt = $pegawai->tmt;

                  if($tmt != '0000-00-00') {

                  $bday = new DateTime($tmt); // Your date of birth
                  $today = new Datetime(date('m.d.y'));
                  $diff = $today->diff($bday);
                  
                  printf("<span class='badge badge-primary'>%d Tahun, %d Bulan, %d Hari</span>", $diff->y, $diff->m, $diff->d);

                  printf("\n");

                     // echo "<hr style='margin-bottom:0;margin-top:0'><span class='badge badge-warning'>TMT : $pegawai->tmt</span>";

                  }else{

                      echo "<span class='badge badge-danger'>TMT Belum Diset</span>";
                  }

                  
                   ?>
  </div>
  
  </div>
  </div>


  <div>
  <i class="far fa-clock bg-gray"></i>
  </div>
  </div>
  </div>

  <div class="active tab-pane" id="profile">
  <form class="form-horizontal">
  <div class="form-group row">
  <label for="inputName" class="col-sm-2 col-form-label">Pendidikan</label>
  <div class="col-sm-10">
  <input type="email" class="form-control" id="inputName" value="<?php echo $pegawai->pendidikan. " ".$pegawai->prodi; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
  <input type="email" class="form-control" id="inputEmail" value="<?php echo $pegawai->email; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputName2" class="col-sm-2 col-form-label">Agama</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="inputName2" value="<?php echo $pegawai->agama; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputName2" class="col-sm-2 col-form-label">Jenis Kelamin</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="inputName2" value="<?php echo $pegawai->gender; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
  <div class="col-sm-10">
  <textarea class="form-control" id="inputExperience"><?php echo $pegawai->alamat; ?>
  </textarea>
  </div>
  </div>
  <div class="form-group row">
  <label for="inputName" class="col-sm-2 col-form-label">NIK</label>
  <div class="col-sm-10">
  <input type="email" class="form-control" id="inputName" value="<?php echo $pegawai->nik; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputSkills" class="col-sm-2 col-form-label">No BPJS</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="inputSkills" value="<?php echo $pegawai->bpjs; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputSkills" class="col-sm-2 col-form-label">NPWP</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="inputSkills" value="<?php echo $pegawai->npwp; ?>">
  </div>
  </div>
  <div class="form-group row">
  <label for="inputSkills" class="col-sm-2 col-form-label">No HP Aktif</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" id="inputSkills" value="<?php echo $pegawai->no_hp; ?>">
  </div>
  </div>
  <div class="form-group row">
  <div class="offset-sm-2 col-sm-10">
  <div class="checkbox">
  
  </div>
  </div>
  </div>
  <!-- <div class="form-group row">
  <div class="offset-sm-2 col-sm-10">
  <button type="submit" class="btn btn-danger">Update Data</button>
  </div>
  </div> -->
  </form>
  </div>

  </div>

  </div>
  </div>

  </div>

  </div>

  </div>
  </section>


  </div>
  <!-- /.content-wrapper -->


        <!-- MODAL UPDATE FOTO -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" tabindex="-1" role="dialog" id="update-foto" class="modal fade">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Update Foto</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                <form method="POST" action="<?php echo base_url('nonpns/Dashboard/update_foto') ?>" enctype="multipart/form-data">

                    <div class="row">
                    <div class="col-md-12">

                    <div class="form-group">
                    <label>Foto Profile</label>
                    <input type="hidden" name="nip" class="form-control" value="<?php echo $pegawai->nip; ?>" hidden>
                    <input type="file" name="foto" class="form-control" accept=".jpg, .jpeg, .png" required>
                      <div class="mt-1">
                        <span class="text-secondary">File yang diupload harus dalam format : .jpg, .jpeg, .png</span>
                      </div>
                    </div>

                    </div>

                    </div>

                  
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
                </form>
              </div>
            </div>
          </div>
          <!-- AKHIR MODAL MODAL UPDATE FOTO -->


