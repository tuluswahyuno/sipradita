<title><?= $title; ?></title>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h2>Update Anamnesis</h2>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Anamnesis</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">


      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Update Anamnesis</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_anamnesis_aksi') ?>" enctype="multipart/form-data">

            <div class="row">
              <div class="col-sm-12">

                <div class="form-group">
                  <label>1. Keluhan Utama</label>
                  <input type="hidden" name="id_anamnesis" class="form-control" value="<?php echo $anamnesis->id_anamnesis; ?>" required>
                  <input type="text" name="keluhan_utama" class="form-control" value="<?php echo $anamnesis->keluhan_utama; ?>" required>
                </div>

                <div class="form-group">
                  <label>2. Riwayat Penyakit Sekarang</label>
                  <input type="text" name="riw_penyakit_sekarang" class="form-control" value="<?php echo $anamnesis->riw_penyakit_sekarang; ?>" required>
                </div>

              </div>

              <div class="col-sm-12">
                <label>3. Riwayat Penyakit Dahulu</label><br>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>a. Pernah Dirawat</label>
                  <select class="form-control" name="pernah_rawat" required>
                    <option value="<?php echo $anamnesis->pernah_rawat; ?>"><?php echo $anamnesis->pernah_rawat; ?></option>
                    <option value="Pernah">Pernah</option>
                    <option value="Tidak Pernah">Tidak Tidak</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Diagnosa</label>
                  <input type="text" name="pernah_rawat_diagnosa" class="form-control" value="<?php echo $anamnesis->pernah_rawat_diagnosa; ?>">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Kapan</label>
                  <input type="date" name="pernah_rawat_kapan" class="form-control" value="<?php echo $anamnesis->pernah_rawat_kapan; ?>">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Di</label>
                  <input type="text" name="pernah_rawat_di" class="form-control" value="<?php echo $anamnesis->pernah_rawat_di; ?>">
                </div>
              </div>


              <div class="col-sm-3">
                <div class="form-group">
                  <label>b. Pernah di Operasi</label>
                  <select class="form-control" name="pernah_operasi">
                    <option value="<?php echo $anamnesis->pernah_operasi; ?>"><?php echo $anamnesis->pernah_operasi; ?></option>
                    <option value="Pernah">Pernah</option>
                    <option value="Tidak Pernah">Tidak Tidak</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Jenis Operasi</label>
                  <input type="text" name="pernah_operasi_jenis" class="form-control" value="<?php echo $anamnesis->pernah_operasi_jenis; ?>">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Kapan</label>
                  <input type="date" name="pernah_operasi_kapan" class="form-control" value="<?php echo $anamnesis->pernah_operasi_kapan; ?>">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Di</label>
                  <input type="text" name="pernah_operasi_di" class="form-control" value="<?php echo $anamnesis->pernah_operasi_di; ?>">
                </div>
              </div>


              <div class="col-sm-3">
                <div class="form-group">
                  <label>c. Saat ini mengkonsumsi obat?</label>
                  <select class="form-control" name="obatygdikonsumsi">
                    <option value="<?php echo $anamnesis->obatygdikonsumsi; ?>"><?php echo $anamnesis->obatygdikonsumsi; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-9">
                <div class="form-group">
                  <label>Nama Obat</label>
                  <input type="text" name="obatygdikonsumsi_jenis" class="form-control" value="<?php echo $anamnesis->obatygdikonsumsi_jenis; ?>">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>4. Riwayat Penyakit Keluarga</label>
                  <select class="form-control" name="riwayat_penyakit_keluarga">
                    <option value="<?php echo $anamnesis->riwayat_penyakit_keluarga; ?>"><?php echo $anamnesis->riwayat_penyakit_keluarga; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>


              <div class="col-sm-3">
                <div class="form-group">
                  <label>Jenis Penyakit</label>
                  <select class="form-control" name="riwayat_penyakit_jenis">
                    <option value="<?php echo $anamnesis->riwayat_penyakit_jenis; ?>"><?php echo $anamnesis->riwayat_penyakit_jenis; ?></option>
                    <option value="Tidak Dalam Pilihan">Tidak Salah Satu Dibawah</option>
                    <option value="Ya">Hipertensi</option>
                    <option value="Tidak">Jantung</option>
                    <option value="Tidak">Paru</option>
                    <option value="Tidak">DM</option>
                    <option value="Tidak">Ginjal</option>
                  </select>
                </div>
              </div>


              <div class="col-sm-6">
                <div class="form-group">
                  <label>Lainnya</label>
                  <input type="text" name="penyakit_jenis_lainnya" class="form-control" value="<?php echo $anamnesis->penyakit_jenis_lainnya; ?>">
                </div>
              </div>


              <div class="col-sm-3">
                <div class="form-group">
                  <label>5. Riwayat Alergi</label>
                  <select class="form-control" name="riwayat_alergi">
                    <option value="<?php echo $anamnesis->riwayat_alergi; ?>"><?php echo $anamnesis->riwayat_alergi; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Makanan</label>
                  <input type="text" name="alergi_makanan" class="form-control" value="<?php echo $anamnesis->alergi_makanan; ?>">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Obat</label>
                  <input type="text" name="alergi_obat" class="form-control" value="<?php echo $anamnesis->alergi_obat; ?>">
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>Lainnya</label>
                  <input type="text" name="alergi_lainnya" class="form-control" value="<?php echo $anamnesis->alergi_lainnya; ?>">
                </div>
              </div>

              <div class="col-sm-12">
                <label>6. Psikososial</label><br>
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama">
                    <option value="<?php echo $anamnesis->agama; ?>"><?php echo $anamnesis->agama; ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kong hu cu">Kong hu cu</option>
                  </select>
                </div>
              </div>


              <div class="col-sm-2">
                <div class="form-group">
                  <label>Pendidikan</label>
                  <select class="form-control" name="pendidikan">
                    <option value="<?php echo $anamnesis->pendidikan; ?>"><?php echo $anamnesis->pendidikan; ?></option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Sarjana">Sarjana</option>
                    <option value="Magister">Magister</option>
                    <option value="Doktor">Doktor</option>
                  </select>
                </div>
              </div>


              <div class="col-sm-2">
                <div class="form-group">
                  <label>Kewarganegaraan</label>
                  <select class="form-control" name="kewarganegaraan">
                    <option value="<?php echo $anamnesis->kewarganegaraan; ?>"><?php echo $anamnesis->kewarganegaraan; ?></option>
                    <option value="WNI">WNI</option>
                    <option value="WNA">WNA</option>
                  </select>
                </div>
              </div>


              <div class="col-sm-2">
                <div class="form-group">
                  <label>Pekerjaan</label>
                  <select class="form-control" name="pekerjaan">
                    <option value="<?php echo $anamnesis->pekerjaan; ?>"><?php echo $anamnesis->pekerjaan; ?></option>
                    <option value="PNS">PNS</option>
                    <option value="TNI">TNI</option>
                    <option value="Polri">Polri</option>
                    <option value="Swasta">Swasta</option>
                    <option value="Mahasiswa">Mahasiswa</option>
                    <option value="Pelajar">Pelajar</option>
                  </select>
                </div>
              </div>


              <div class="col-sm-2">
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="status_pernikahan">
                    <option value="<?php echo $anamnesis->status_pernikahan; ?>"><?php echo $anamnesis->status_pernikahan; ?></option>
                    <option value="Belum Menikah">Belum Kawin</option>
                    <option value="Kawin">Kawin</option>
                    <option value="Cerai">Cerai</option>
                  </select>
                </div>
              </div>


              <div class="col-sm-2">
                <div class="form-group">
                  <label>Tgl Dgn Keluarga</label>
                  <select class="form-control" name="tinggal_bersama_keluarga">
                    <option value="<?php echo $anamnesis->tinggal_bersama_keluarga; ?>"><?php echo $anamnesis->tinggal_bersama_keluarga; ?></option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                  </select>
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

