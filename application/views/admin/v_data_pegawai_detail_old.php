<title><?= $title; ?></title>



  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">

    <section class="content-header">

          <div class="col-sm-12">



            <ul class="nav nav-tabs">

            

            <li class="nav-item">

              <a class="nav-link active" aria-current="page" href="<?php echo base_url('admin/datapegawai/detail_pegawai/').$detail->nip ?>">Profile</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="<?php echo base_url('admin/datapegawai/detail_pendidikan/').$detail->nip ?>">Pendidikan</a>

            </li>



            <li class="nav-item">

              <a class="nav-link" href="<?php echo base_url('admin/datapegawai/detail_pangkat/').$detail->nip ?>">Kepangkatan</a>

            </li>



            <li class="nav-item">

              <a class="nav-link" href="<?php echo base_url('admin/datapegawai/detail_jabatan/').$detail->nip ?>">Jabatan</a>

            </li>



            <li class="nav-item">

              <a class="nav-link" href="<?php echo base_url('admin/datapegawai/detail_pasangan/').$detail->nip ?>">Pasangan</a>

            </li>



            <li class="nav-item">

              <a class="nav-link" href="<?php echo base_url('admin/datapegawai/detail_anak/').$detail->nip ?>">Anak</a>

            </li>



            <li class="nav-item">

              <a class="nav-link" href="<?php echo base_url('admin/datapegawai/detail_diklat/').$detail->nip ?>">Diklat</a>

            </li>



            <li class="nav-item">

              <a class="nav-link" href="<?php echo base_url('admin/datapegawai/detail_berkas/').$detail->nip ?>">Berkas</a>

            </li>



            <li class="nav-item">

              <a class="nav-link" href="<?php echo base_url('admin/datapegawai/detail_mutasi/').$detail->nip ?>">Mutasi Ruang</a>

            </li>

          </ul>





          </div>

          

    </section>

    



    <!-- Main content -->

    <section class="content">



      <!-- Default box -->

      <div class="card">

        <!-- <div class="card-header">

          <h3 class="card-title"></h3>

          <a></a>

        </div> -->

        <div class="card-body">

          

          <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

          



          <div class="card card-primary">

              <div class="card-header">

                <h3 class="card-title">Profile Pegawai</h3>

              </div>

              <!-- /.card-header -->

              <div class="card-body">

                <form>

                  

                  <div class="row">

                    <div class="col-sm-6">



                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>NIP</label>

                          <input type="text" name="nip" class="form-control" value="<?php echo $detail->nip; ?>" readonly>

                      </div>

                      </div>



                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Status Pegawai</label>

                          <input type="text" name="status_pegawai" class="form-control" value="<?php echo $detail->jpegawai; ?>" readonly>

                      </div>

                      </div>



                      </div>

                      

                      <div class="form-group">

                          <label>Nama Pegawai</label>

                              

                          <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $detail->nama_lengkap; ?>" readonly>

                      </div>

                      

                       

                      



                      <div class="row">

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>Tempat Lahir</label>

                          <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $detail->tempat_lahir; ?>" readonly>

                          </div>

                      </div>

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>Tanggal Lahir</label>

                          <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $detail->tgl_lahir; ?>" readonly>

                          </div>

                      </div>

                      </div>





                      <div class="row">

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>Jenis Kelamin</label>

                          <input type="text" name="gender" class="form-control" value="<?php echo $detail->gender; ?>" readonly>

                          </div>

                      </div>

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>Agama</label>

                          <input type="text" name="agama" class="form-control" value="<?php echo $detail->agama; ?>" readonly>

                          </div>

                      </div>

                      </div>



                      <div class="form-group">

                          <label>Alamat</label>

                          <input type="text" name="alamat" class="form-control" value="<?php echo $detail->alamat; ?>" readonly>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                        <div class="form-group">

                          <label>Longitude</label>

                          <input type="text" name="longitude" class="form-control" value="<?php echo $detail->longitude; ?>" readonly>

                        </div>

                      </div>

                      <div class="col-sm-6">

                        <div class="form-group">

                          <label>Latitude</label>

                          <input type="text" name="latitude" class="form-control" value="<?php echo $detail->latitude; ?>" readonly>

                        </div>

                      </div>

                      </div>



                      <div class="form-group">

                        <label>Pendidikan Terakhir</label>

                       <input type="text" name="jenjang" class="form-control" value="<?php echo $detail->pendidikan." ".$detail->prodi; ?>" readonly>

                      </div> 



                      <div class="form-group">

                          <label>Pangkat</label>

                          <input type="text" name="pangkat" class="form-control" value="<?php echo $detail->nama_pangkat; ?>" readonly>

                      </div>

   

                      

                    </div>



                    <div class="col-sm-6">



                      <div class="form-group">

                          <label>Jabatan</label>

                          <input type="text" name="jabatan" class="form-control" value="<?php echo $detail->nama_jabatan; ?>" readonly>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Jenis Jabatan</label>

                          <input type="text" name="jenis_jabatan" class="form-control" value="<?php echo $detail->jenis_jabatan; ?>" readonly>

                      </div>

                      </div>





                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Profesi</label>

                          <input type="text" name="profesi" class="form-control" value="<?php echo $detail->nama_profesi; ?>" readonly>

                      </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Unit Kerja</label>

                          <input type="text" name="divisi" class="form-control" value="<?php echo $detail->nama_unitkerja; ?>" readonly>

                      </div>

                      </div>

                      

                      <div class="col-sm-6"> 

                      <div class="form-group">

                          <label>Email</label>

                          <input type="text" name="email" class="form-control" value="<?php echo $detail->email; ?>" readonly>

                      </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Take Home Pay</label>

                          <input type="text" name="takehomepay" class="form-control" value="<?php echo "Rp. ".$detail->takehomepay; ?>" readonly>

                      </div>

                      </div>



                       <div class="col-sm-6">

                      <div class="form-group">

                          <label>NIK</label>

                          <input type="text" name="nik" class="form-control" value="<?php echo $detail->nik; ?>" readonly>

                      </div>

                      </div>

                

                      </div>

                      

                      

                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>NPWP</label>

                          <input type="text" name="npwp" class="form-control" value="<?php echo $detail->npwp; ?>" readonly>

                      </div>

                      </div>



                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Nomor BPJS</label>

                          <input type="text" name="bpjs" class="form-control" value="<?php echo $detail->bpjs; ?>" readonly>

                      </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>No Handphone</label>

                          <input type="text" name="no_hp" class="form-control" value="<?php echo $detail->no_hp; ?>" readonly>

                      </div>

                      </div>



                      <div class="col-sm-6">

                          <div class="form-group">

                          <label>TMT PNS</label>

                          <input type="text" name="tmt" class="form-control" value="<?php echo $detail->tmt;  ?>" readonly>

                          </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>KP Terakhir</label>

                          <input type="text" name="kp_terakhir" class="form-control" value="<?php echo $detail->kp_terakhir;  ?>" readonly>

                          </div>

                      </div>

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>KP Akan Datang</label>

                          <input type="text" name="kp_mendatang" class="form-control" value="<?php echo $detail->kp_mendatang;  ?>" readonly>

                          </div>

                      </div>

                      </div>



                       <div class="row">

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>KGB Terakhir</label>

                          <input type="text" name="kgb_terakhir" class="form-control" value="<?php echo $detail->kgb_terakhir;  ?>" readonly>

                          </div>

                      </div>

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>KGB Akan Datang</label>

                          <input type="text" name="kgb_mendatang" class="form-control" value="<?php echo $detail->kgb_mendatang;  ?>" readonly>

                          </div>

                      </div>

                      </div>





                    

                    </div>



                      

                    

                  </div>



            

                

                  <div align="right">

                    <a href="<?php echo base_url('admin/Datapegawai/detail_pegawai_update/').$detail->nip ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Update Data</a>

                  <!-- <button type="submit" class="btn btn-primary">Update Data</button> -->

                  </div>

                </form>

              </div>

              <!-- /.card-body -->

            </div>



        </div>

        <!-- /.card-body -->

        

        <!-- /.card-footer-->

      </div>

      <!-- /.card -->



    </section>

    <!-- /.content -->

  </div>

  <!-- /.content-wrapper -->







