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
          <h3 class="card-title">Sistem Pernafasan</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_intervensi_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_ip" value="<?php echo $detail->id_ip; ?>" class="form-control">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="a1" value="Yes" <?= ($detail->satu == "Yes" ? "checked" : "") ?>>
                    <label for="a1" class="custom-control-label">Monitor pola nafas (frekuensi, kedalaman, usaha nafas)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="a2" value="Yes" <?= ($detail->dua == "Yes" ? "checked" : "") ?>>
                    <label for="a2" class="custom-control-label">Monitor bunyi napass tambahan (mis. gurgling, mengi, wheezing, ronkhi kering)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="a3" value="Yes" <?= ($detail->tiga == "Yes" ? "checked" : "") ?>>
                    <label for="a3" class="custom-control-label">Monitor sputum (jumlah, warna, aroma)</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="a4" value="Yes" <?= ($detail->empat == "Yes" ? "checked" : "") ?>>
                    <label for="a4" class="custom-control-label">Pertahankan Kepaten jalan napass dengan head-tilt dan chin-lift </label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="a5" value="Yes" <?= ($detail->lima == "Yes" ? "checked" : "") ?>>
                    <label for="a5" class="custom-control-label">Posisikan semi-fowler atau fowler</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="a6" value="Yes" <?= ($detail->enam == "Yes" ? "checked" : "") ?>>
                    <label for="a6" class="custom-control-label">Berikan minum hangat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tujuh" type="checkbox" id="a7" value="Yes" <?= ($detail->tujuh == "Yes" ? "checked" : "") ?>>
                    <label for="a7" class="custom-control-label">Berikan minum hangat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="delapan" type="checkbox" id="a8" value="Yes" <?= ($detail->delapan == "Yes" ? "checked" : "") ?>>
                    <label for="a8" class="custom-control-label">Lakukan penghisapan lendir kurang dari 15 detik</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sembilan" type="checkbox" id="a9" value="Yes" <?= ($detail->sembilan == "Yes" ? "checked" : "") ?>>
                    <label for="a9" class="custom-control-label">Lakukan hiper Oksigenasi sebelum penghisapan Endotrakeal</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sepuluh" type="checkbox" id="a10" value="Yes" <?= ($detail->sepuluh == "Yes" ? "checked" : "") ?>>
                    <label for="a10" class="custom-control-label">Keluarkan Sumbatan benda padat dengan forsep McGill</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="sebelas" type="checkbox" id="a11" value="Yes" <?= ($detail->sebelas == "Yes" ? "checked" : "") ?>>
                    <label for="a11" class="custom-control-label">Berikan oksigen, jika perlu</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="duabelas" type="checkbox" id="a12" value="Yes" <?= ($detail->duabelas == "Yes" ? "checked" : "") ?>>
                    <label for="a12" class="custom-control-label">Anjurkan asupan cairan 2000 ml/hari jika tidak kontraindikasi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tigabelas" type="checkbox" id="a13" value="Yes" <?= ($detail->tigabelas == "Yes" ? "checked" : "") ?>>
                    <label for="a13" class="custom-control-label">Ajarkan teknik batuk efektif</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empatbelas" type="checkbox" id="a14" value="Yes" <?= ($detail->empatbelas == "Yes" ? "checked" : "") ?>>
                    <label for="a14" class="custom-control-label">Kolaborasi pemberian Bronkodilator, ekspektoran, mukolitik, jika perlu</label>
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

