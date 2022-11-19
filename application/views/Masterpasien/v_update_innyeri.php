<title><?= $title; ?></title>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <ul class="nav nav-tabs">
    <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/hasil/').$detail->id_anamnesis ?>">Diagnosa</a>
    </li>
    </ul>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">



      <div class="card card-success">
        <div class="card-header">
          <h3 class="card-title">Intervensi Nyeri</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_intervensinyeri_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_inyeri" value="<?php echo $detail->id_inyeri; ?>" class="form-control">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="a1" value="Yes" <?= ($detail->satu == "Yes" ? "checked" : "") ?>>
                    <label for="a1" class="custom-control-label">Identifikasi lokasi, karakteristik, durasi, frekuensi, kualitas, intensitas nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="a2" value="Yes" <?= ($detail->dua == "Yes" ? "checked" : "") ?>>
                    <label for="a2" class="custom-control-label">Identifikasi skala nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="a3" value="Yes" <?= ($detail->tiga == "Yes" ? "checked" : "") ?>>
                    <label for="a3" class="custom-control-label">Identifikasi respon nyeri Nonverbal </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="a4" value="Yes" <?= ($detail->empat == "Yes" ? "checked" : "") ?>>
                    <label for="a4" class="custom-control-label">Identifikasi faktor yang memperberat dan memperingan nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="a5" value="Yes" <?= ($detail->lima == "Yes" ? "checked" : "") ?>>
                    <label for="a5" class="custom-control-label">Identifikasi pengetahuan dan keyakinan tentang nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="a6" value="Yes" <?= ($detail->enam == "Yes" ? "checked" : "") ?>>
                    <label for="a6" class="custom-control-label">Identifikasi pengaruh budaya terhadap respon nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="a7" value="Yes" <?= ($detail->tujuh == "Yes" ? "checked" : "") ?>>
                    <label for="a7" class="custom-control-label">Identifikasi pengaruh nyeri pada kualitas hidup </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="a8" value="Yes" <?= ($detail->delapan == "Yes" ? "checked" : "") ?>>
                    <label for="a8" class="custom-control-label">Monitor keberhasilan terapi Komplementer yang sudah diberikan </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="a9" value="Yes" <?= ($detail->sembilan == "Yes" ? "checked" : "") ?>>
                    <label for="a9" class="custom-control-label">Monitor efek samping penggunaan analgetik</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sepuluh" type="checkbox" id="a10" value="Yes" <?= ($detail->sepuluh == "Yes" ? "checked" : "") ?>>
                    <label for="a10" class="custom-control-label">Berikan teknik nonfarmakologis untuk mengurangi rasa nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sebelas" type="checkbox" id="a11" value="Yes" <?= ($detail->sebelas == "Yes" ? "checked" : "") ?>>
                    <label for="a11" class="custom-control-label">Kontrol lingkungan yang memperberat rasa nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="duabelas" type="checkbox" id="a12" value="Yes" <?= ($detail->duabelas == "Yes" ? "checked" : "") ?>>
                    <label for="a12" class="custom-control-label">Fasilitasi istirahat dan tidur</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tigabelas" type="checkbox" id="a13" value="Yes" <?= ($detail->tigabelas == "Yes" ? "checked" : "") ?>>
                    <label for="a13" class="custom-control-label">Pertimbangan jenis dan sumber nyeri dalam pemilihan strategi meredakan nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empatbelas" type="checkbox" id="a14" value="Yes" <?= ($detail->empatbelas == "Yes" ? "checked" : "") ?>>
                    <label for="a14" class="custom-control-label">Jelaskan penyebab, periode, dan pemicu nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="limabelas" type="checkbox" id="a15" value="Yes" <?= ($detail->limabelas == "Yes" ? "checked" : "") ?>>
                    <label for="a15" class="custom-control-label">Jelaskan strategi meredakan nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enambelas" type="checkbox" id="a16" value="Yes" <?= ($detail->enambelas == "Yes" ? "checked" : "") ?>>
                    <label for="a16" class="custom-control-label">Jelaskan strategi meredakan nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuhbelas" type="checkbox" id="a17" value="Yes" <?= ($detail->tujuhbelas == "Yes" ? "checked" : "") ?>>
                    <label for="a17" class="custom-control-label">Anjurkan menggunakan analgetik secara tepat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapanbelas" type="checkbox" id="a18" value="Yes" <?= ($detail->delapanbelas == "Yes" ? "checked" : "") ?>>
                    <label for="a18" class="custom-control-label">Ajarkan teknik non farmakologis untuk mengurangi rasa nyeri </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilanbelas" type="checkbox" id="a19" value="Yes" <?= ($detail->sembilanbelas == "Yes" ? "checked" : "") ?>>
                    <label for="a19" class="custom-control-label">Kolaborasi pemberian analgetik</label>
                  </div>

                </div>

              </div>

          
          </div>

          <div align="right">
              <hr>
              <a href="<?php echo base_url('Ass/MasterPasien/hasil/').$detail->id_anamnesis ?>" class="btn btn-secondary"><i class="fas fa-arrow-alt-circle-left"></i> Back</a>
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

