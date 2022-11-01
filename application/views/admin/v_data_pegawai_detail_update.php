<title><?= $title; ?></title>



<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />



 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" referrerpolicy="no-referrer" />





 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.css" integrity="sha512-CbQfNVBSMAYmnzP3IC+mZZmYMP2HUnVkV4+PwuhpiMUmITtSpS7Prr3fNncV1RBOnWxzz4pYQ5EAGG4ck46Oig==" crossorigin="anonymous" referrerpolicy="no-referrer" />



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

                <form method="POST" action="<?php echo base_url('admin/Datapegawai/detail_pegawai_update_aksi') ?>" enctype="multipart/form-data">

                  

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

                          <input type="hidden" name="nip" class="form-control" value="<?php echo $detail->nip; ?>" hidden>

                          <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $detail->nama_lengkap; ?>" >

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>Tempat Lahir</label>

                          <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $detail->tempat_lahir; ?>" >

                          </div>

                      </div>

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>Tanggal Lahir</label>

                          <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $detail->tgl_lahir; ?>" >

                          </div>

                      </div>

                      </div>





                      <div class="row">

                      <div class="col-sm-6">



                        <div class="form-group">

                        <label>Jenis Kelamin</label>

                        <select class="form-control" name="gender" required>

                          <option value="<?php echo $detail->gender; ?>"><?php echo $detail->gender; ?></option>

                          <option value="Laki-laki">Laki-laki</option>

                          <option value="Perempuan">Perempuan</option>

                        </select>

                        </div>

                      </div>

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>Agama</label>

                          <select class="form-control" name="agama" required>

                            <option value="<?php echo $detail->agama; ?>"><?php echo $detail->agama; ?></option>

                            <option value="Islam">Islam</option>

                            <option value="Kristen">Kristen</option>

                            <option value="Katolik">Katolik</option>

                            <option value="Hindu">Hindu</option>

                            <option value="Budha">Budha</option>

                            <option value="Konghucu">Konghucu</option>

                            

                          </select>

                          </div>

                      </div>

                      </div>



                      <div class="form-group">

                          <label>Alamat</label>

                          <input type="text" name="alamat" class="form-control" value="<?php echo $detail->alamat; ?>" >

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                        <div class="form-group">

                          <label>Longitude</label>

                          <input type="text" name="longitude" class="form-control" value="<?php echo $detail->longitude; ?>" >

                        </div>

                      </div>

                      <div class="col-sm-6">

                        <div class="form-group">

                          <label>Latitude</label>

                          <input type="text" name="latitude" class="form-control" value="<?php echo $detail->latitude; ?>" >

                        </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                          <div class="form-group">

                          <label>Pendidikan Terakhir</label>

                          <select class="form-control" name="jenjang" required>

                            <option value="<?php echo $detail->jenjang; ?>"><?php echo $detail->pendidikan; ?></option>

                            

                            <?php foreach($jenjangpendidikan as $jp) : ?>

                            <option value="<?php echo $jp->id_masterpendidikan;?>"> <?php echo $jp->pendidikan; ?></option>

                           <?php endforeach; ?>



                            </select>

                          </div>

                      </div>



                      <div class="col-sm-6">

                       <div class="form-group">

                          <label>Jurusan</label>

                          <input type="text" name="prodi" class="form-control" value="<?php echo $detail->prodi; ?>" >

                      </div>

                      </div>

                      </div>



                      



                      <div class="form-group">

                        <label>Pangkat</label>

                        <select name="pangkat" class="select2pangkat form-control input-lg select2-single">

                          <option value="<?php echo $detail->id_masterpangkat; ?>"><?php echo $detail->nama_pangkat; ?></option>

                          <option value=""></option>

                        </select>

                      </div>      



                      

                      

                    </div>



                    <div class="col-sm-6">



                      <div class="form-group">

                        <label>Jabatan</label>

                        <select name="jabatan" class="select2jabatan form-control input-lg select2-single">

                          <option value="<?php echo $detail->id_masterjabatan; ?>"><?php echo $detail->nama_jabatan; ?></option>

                          <option value=""></option>

                        </select>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Jenis Jabatan</label>

                          <select class="form-control" name="jenis_jabatan" required>

                          <option value="<?php echo $detail->jenis_jabatan; ?>"><?php echo $detail->jenis_jabatan; ?></option>

                          <option value="Fungsional Tertentu">Fungsional Tertentu</option>

                          <option value="Fungsional Umum">Fungsional Umum</option>

                          <option value="Struktural">Struktural</option>

                        </select>

                      </div>

                      </div>





                      <div class="col-sm-6">

                          <div class="form-group">

                          <label>Profesi</label>

                          <select class="form-control" name="profesi" required>

                            <option value="<?php echo $detail->profesi; ?>"><?php echo $detail->nama_profesi; ?></option>

                            

                            <?php foreach($jenisprofesi as $jp) : ?>

                            <option value="<?php echo $jp->id_profesi;?>"> <?php echo $jp->nama_profesi; ?></option>

                           <?php endforeach; ?>



                            </select>

                          </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                        <label>Unit Kerja</label>

                        <select name="divisi" class="select2unitkerja form-control input-lg select2-single">

                          <option value="<?php echo $detail->id_unitkerja; ?>"><?php echo $detail->nama_unitkerja; ?></option>

                          <option value=""></option>

                        </select>

                      </div>

                      </div>

                       

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Email</label>

                          <input type="text" name="email" class="form-control" value="<?php echo $detail->email; ?>" >

                      </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Take Home Pay (Angka)</label>

                          <input type="text" name="takehomepay" class="form-control" value="<?php echo $detail->takehomepay; ?>" >

                      </div>

                      </div>



                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>NIK</label>

                          <input type="text" name="nik" class="form-control" value="<?php echo $detail->nik; ?>" >

                      </div>

                      </div>                        



                      </div>

                      

                      <div class="row">

                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>NPWP</label>

                          <input type="text" name="npwp" class="form-control" value="<?php echo $detail->npwp; ?>">

                      </div>

                      </div>



                      <div class="col-sm-6">

                      <div class="form-group">

                          <label>Nomor BPJS</label>

                          <input type="text" name="bpjs" class="form-control" value="<?php echo $detail->bpjs; ?>">

                      </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-4">

                      <div class="form-group">

                          <label>No Handphone</label>

                          <input type="text" name="no_hp" class="form-control" value="<?php echo $detail->no_hp; ?>">

                          <!-- <select class="form-control" name="status_pegawai" required>

                            <option value="<?php echo $detail->status_pegawai; ?>"><?php echo $detail->status_pegawai; ?></option>

                            <?php foreach($jenispegawai as $jp) : ?>

                            <option value="<?php echo $jp->jpegawai;?>"> <?php echo $jp->jpegawai; ?></option>

                           <?php endforeach; ?>

                            </select> -->

                      </div>

                      </div>



                      <div class="col-sm-4">

                          <div class="form-group">

                          <label>TMT CPNS</label>

                          <input type="date" name="tmt" class="form-control" value="<?php echo $detail->tmt; ?>">

                          </div>

                      </div>


                      <div class="col-sm-4">
                        <div class="form-group">
                          <label>Status Aktif</label>
                          <select class="form-control" name="status_aktif" required>
                          <option value="<?php echo $detail->status_aktif; ?>">
                            <?php if ($detail->status_aktif == '1') {
                              echo "Aktif";
                            }else{
                              echo "Tidak Aktif";
                            }?>
                          </option>
                          <option value="1">Aktif</option>
                          <option value="2">Tidak Aktif</option>
                        </select>
                      </div>
                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>KP Terakhir</label>

                          <input type="date" name="kp_terakhir" class="form-control" value="<?php echo $detail->kp_terakhir; ?>">

                          </div>

                      </div>

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>KP Akan Datang</label>

                          <input type="date" name="kp_mendatang" class="form-control" value="<?php echo $detail->kp_mendatang; ?>">

                          </div>

                      </div>

                      </div>



                      <div class="row">

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>KGB Terakhir</label>

                          <input type="date" name="kgb_terakhir" class="form-control" value="<?php echo $detail->kgb_terakhir; ?>">

                          </div>

                      </div>

                      <div class="col-sm-6">

                         <div class="form-group">

                          <label>KGB Akan Datang</label>

                          <input type="date" name="kgb_mendatang" class="form-control" value="<?php echo $detail->kgb_mendatang; ?>">

                          </div>

                      </div>

                      </div>





                    </div>

                  </div>



            

                

                  <div align="right">

                  <button type="submit" class="btn btn-primary">Update Data</button>

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







<script src="<?= base_url('assets/js/js/jquery.min.js') ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>



<script>

     $(function() {

       // const id = 0;

       // const text = '-- Pilih Pangkat --';

       const el = $('.select2pangkat');

       const select2 = el.select2({

         theme: "bootstrap",

         width: '100%',

         placeholder: '-- Pilih Pangkat --',

         ajax: {

           url: function(params) {

             return '<?= base_url('pns/Pangkat/select2pangkat') ?>';

           },

           dataType: 'json',

           delay: 250,

           data: function(params) {

             return {

               q: params.term, // search term

               page: params.page,

               limit: 10

             };

           },

           processResults: (data, params) => {

             params.page = params.page || 1

             return {

               results: data.items,

               pagination: {

                 more: params.page * data.limit < data.total_count

               }

             };

           },

           transport: function(params, success, failure) {

             const $request = $.ajax(params);



             $request.then(success);

             $request.fail(failure);



             return $request;

           },

           cache: true

         }

       });



       // parameters class option

       // view text, view id, enable view id, enable, view text

       const opt = new Option(true, true);

       el.append(opt).trigger('change');

     });







     $(function() {

       // const id = 0;

       // const text = '-- Pilih Pangkat --';

       const el = $('.select2jabatan');

       const select2 = el.select2({

         theme: "bootstrap",

         width: '100%',

         placeholder: '-- Pilih Jabatan --',

         ajax: {

           url: function(params) {

             return '<?= base_url('admin/Jabatan/select2jabatan') ?>';

           },

           dataType: 'json',

           delay: 250,

           data: function(params) {

             return {

               q: params.term, // search term

               page: params.page,

               limit: 10

             };

           },

           processResults: (data, params) => {

             params.page = params.page || 1

             return {

               results: data.items,

               pagination: {

                 more: params.page * data.limit < data.total_count

               }

             };

           },

           transport: function(params, success, failure) {

             const $request = $.ajax(params);



             $request.then(success);

             $request.fail(failure);


             return $request;

           },

           cache: true

         }

       });



       // parameters class option

       // view text, view id, enable view id, enable, view text

       const opt = new Option(true, true);

       el.append(opt).trigger('change');

     });



      $(function() {

       // const id = 0;

       // const text = '-- Pilih Pangkat --';

       const el = $('.select2unitkerja');

       const select2 = el.select2({

         theme: "bootstrap",

         width: '100%',

         placeholder: '-- Pilih Unit Kerja --',

         ajax: {

           url: function(params) {

             return '<?= base_url('admin/Unitkerja/select2unitkerja') ?>';

           },

           dataType: 'json',

           delay: 250,

           data: function(params) {

             return {

               q: params.term, // search term

               page: params.page,

               limit: 10

             };

           },

           processResults: (data, params) => {

             params.page = params.page || 1

             return {

               results: data.items,

               pagination: {

                 more: params.page * data.limit < data.total_count

               }

             };

           },

           transport: function(params, success, failure) {

             const $request = $.ajax(params);



             $request.then(success);

             $request.fail(failure);



             return $request;

           },

           cache: true

         }

       });



       // parameters class option

       // view text, view id, enable view id, enable, view text

       const opt = new Option(true, true);

       el.append(opt).trigger('change');

     });

   </script>