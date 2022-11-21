<title><?= $title; ?></title>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <h4>Anamnesis Pasien</h4>
        </div>
        
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">


      <div class="row mb-2">
        <div class="col-sm-6">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/tambah_anamnesis_aksi') ?>" enctype="multipart/form-data">

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Keluhan Pasien</h3>
              </div>

              <div class="card-body">
                <div class="form-group">
                  <label>Keluhan Utama</label>
                  <input type="hidden" name="id_pasien" value="<?php echo $detail->norm; ?>">
                  <input type="text" name="keluhan_utama" class="form-control form-control-border" placeholder="keluhan utama" required>
                </div>
                <div class="form-group">
                  <label>Riwayat Penyakit Sekarang</label>
                  <input type="text" name="riw_penyakit_sekarang" class="form-control form-control-border" placeholder="riwayat penyakit sekarang" required>
                </div>

              </div>
            </div>

            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Riwayat Perawatan Pasien</h3>
              </div>

              <div class="card-body">

                <div class="form-group">
                  <label>Apakah Pasien Pernah Dirawat?</label>
                  <select class="custom-select form-control-border" name="pernah_rawat" id="id-pernah-dirawat">
                   <option value="Pernah">Pernah</option>
                   <option value="Tidak Pernah">Tidak Pernah</option>
                 </select>
               </div>

               <div class="form-group">
                <label>Apa Diagnosanya?</label>
                <input type="text" name="pernah_rawat_diagnosa" class="form-control form-control-border" placeholder="Diagnosa" id="id-diagnosa">
              </div>

              <div class="form-group">
                <label>Kapan Pernah Dirawat?</label>
                <input type="date" name="pernah_rawat_kapan" class="form-control form-control-border" placeholder="Kapan Dirawat?" id="id-kapan">
              </div>

              <div class="form-group">
                <label>Pernah Dirawat Dimana?</label>
                <input type="text" name="pernah_rawat_di" class="form-control form-control-border" placeholder="RS atau Klinik mana?" id="id-di">
              </div>

            </div>
          </div>

          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Riwayat Operasi</h3>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label>Apakah Pasien Pernah Operasi?</label>
                <select class="custom-select form-control-border" name="pernah_operasi" id="id-pernah-operasi">
                 <option value="Pernah">Pernah</option>
                 <option value="Tidak Pernah">Tidak Pernah</option>
               </select>
             </div>

             <div class="form-group">
              <label>Jika Pernah, Operasi Apa?</label>
              <input type="text" name="pernah_operasi_jenis" class="form-control form-control-border" placeholder="Operasi Apa?" id="id-operasi">
            </div>

            <div class="form-group">
              <label>Kapan Pernah Operasi?</label>
              <input type="date" name="pernah_operasi_kapan" class="form-control form-control-border" id="id-kapanoperasi">
            </div>

            <div class="form-group">
              <label>Pernah Operasi Dimana?</label>
              <input type="text" name="pernah_operasi_di" class="form-control form-control-border" placeholder="RS atau Klinik mana?" id="id-operasidimana">
            </div>

          </div>
        </div>


        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Obat-obatan yang dikonsumsi pasien</h3>
          </div>

          <div class="card-body">


            <div class="form-group">
              <label>Apakah saat ini mengkonsumsi obat?</label>
              <select class="custom-select form-control-border" name="obatygdikonsumsi" id="id-obat">
               <option value="Ya">Ya</option>
               <option value="Tidak">Tidak</option>
             </select>
           </div>

           <div class="form-group">
            <label>Jika Ya, apa nama obat yang dikonsumsi?</label>
            <input type="text" name="obatygdikonsumsi_jenis" class="form-control form-control-border" placeholder="apa nama obat yang dikonsumsi?" id="id-jenisobat">
          </div>

        </div>
      </div>



    </div>



    <div class="col-sm-6">
      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Riwayat Penyakit Keluarga</h3>
        </div>

        <div class="card-body">




          <div class="form-group">
            <label>Apakah pasien memiliki riwayat penyakit keluarga?</label>
            <select class="custom-select form-control-border" name="riwayat_penyakit_keluarga" id="id-penyakitkeluarga">
             <option value="Ya">Ya</option>
             <option value="Tidak">Tidak</option>
           </select>
         </div>

         <div class="form-group">
          <label>Jika Ya, pilihlah jenis penyakit dibawah ini?</label>
          <select class="custom-select form-control-border" name="riwayat_penyakit_jenis" id="id-penyakitkeluargajenis">
            <option value="-">-</option>
            <option value="Ya">Hipertensi</option>
            <option value="Tidak">Jantung</option>
            <option value="Tidak">Paru</option>
            <option value="Tidak">DM</option>
            <option value="Tidak">Ginjal</option>
          </select>
        </div>

        <div class="form-group">
          <label>Sebutkan nama penyakitnya, jika tidak ada dalam pilihan</label>
          <input type="text" name="penyakit_jenis_lainnya" class="form-control form-control-border" placeholder="nama penyakit keluarga" id="id-penyakitkeluargalain">
        </div>

      </div>
    </div>


    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Riwayat Alergi</h3>
      </div>
      <div class="card-body">
        <div class="form-group">
          <label>Apakah Pasien Memiliki Riwayat Alergi?</label>
          <select class="custom-select form-control-border" name="riwayat_alergi" id="id-alergi">
           <option value="Ya">Ya</option>
           <option value="Tidak">Tidak</option>
         </select>
       </div>

       <div class="form-group">
        <label>Alergi makanan?</label>
        <input type="text" name="alergi_makanan" class="form-control form-control-border" placeholder="nama makanan" id="id-alergimakanan">
      </div>

      <div class="form-group">
        <label>Alergi obat?</label>
        <input type="text" name="alergi_obat" class="form-control form-control-border" placeholder="nama obat" id="id-alergiobat">
      </div>

      <div class="form-group">
        <label>Alergi lainnya?</label>
        <input type="text" name="alergi_lainnya" class="form-control form-control-border" placeholder="sebutkan jenis alrginya" id="id-alergilain">
      </div>

    </div>
  </div>


  <div class="card card-info">
    <div class="card-header">
      <h3 class="card-title">Psikososial</h3>
    </div>
    <div class="card-body">

      <div class="form-group">
        <label>Agama?</label>
        <select class="custom-select form-control-border" name="agama">
         <option value="Islam">Islam</option>
         <option value="Kristen">Kristen</option>
         <option value="Katolik">Katolik</option>
         <option value="Hindu">Hindu</option>
         <option value="Budha">Budha</option>
         <option value="Kong hu cu">Kong hu cu</option>
       </select>
     </div>

     <div class="form-group">
      <label>Pendidikan?</label>
      <select class="custom-select form-control-border" name="pendidikan">
        <option value="SD">SD</option>
        <option value="SMP">SMP</option>
        <option value="SMA">SMA</option>
        <option value="Diploma">Diploma</option>
        <option value="Sarjana">Sarjana</option>
        <option value="Magister">Magister</option>
        <option value="Doktor">Doktor</option>
      </select>
    </div>


    <div class="form-group">
      <label>Kewarganegaraan?</label>
      <select class="custom-select form-control-border" name="kewarganegaraan">
        <option value="WNI">WNI</option>
        <option value="WNA">WNA</option>
      </select>
    </div>

    <div class="form-group">
      <label>Pekerjaan?</label>
      <select class="custom-select form-control-border" name="pekerjaan">
        <option value="PNS">PNS</option>
        <option value="TNI">TNI</option>
        <option value="Polri">Polri</option>
        <option value="Swasta">Swasta</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Pelajar">Pelajar</option>
      </select>
    </div>

    <div class="form-group">
      <label>Status Pernikahan?</label>
      <select class="custom-select form-control-border" name="status_pernikahan">
        <option value="Belum Menikah">Belum Kawin</option>
        <option value="Kawin">Kawin</option>
        <option value="Cerai">Cerai</option>
      </select>
    </div>

    <div class="form-group">
      <label>Apakah Tinggal Dengan Keluarga?</label>
      <select class="custom-select form-control-border" name="tinggal_bersama_keluarga">
        <option value="Ya">Ya</option>
        <option value="Tidak">Tidak</option>
      </select>
    </div>
    <br>

  </div>
</div>

<div align="right">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>



</div>

</div>



<!-- /.card-footer-->
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

