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
          <h3 class="card-title">Kriteria Nyeri</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_kriterianyeri_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

              <div class="col-md-12">
                <div class="form-group">

                  <div class="custom-control custom-checkbox">
                    <input type="hidden" name="id_kriterianyeri" value="<?php echo $detail->id_kriterianyeri; ?>" class="form-control">
                    <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>" class="form-control">
                    <input class="custom-control-input" name="satu" type="checkbox" id="a1" value="Yes" <?= ($detail->satu == "Yes" ? "checked" : "") ?>>
                    <label for="a1" class="custom-control-label">Meningkatnya kemampuan pasien dalam melaporkan nyeri terkontrol</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="dua" type="checkbox" id="a2" value="Yes" <?= ($detail->dua == "Yes" ? "checked" : "") ?>>
                    <label for="a2" class="custom-control-label">Meningkatnya kemampuan mengenali onset nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="tiga" type="checkbox" id="a3" value="Yes" <?= ($detail->tiga == "Yes" ? "checked" : "") ?>>
                    <label for="a3" class="custom-control-label">Meningkatnya kemampuan pasien mengenali penyebab nyeri</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="empat" type="checkbox" id="a4" value="Yes" <?= ($detail->empat == "Yes" ? "checked" : "") ?>>
                    <label for="a4" class="custom-control-label">Meningkatnya kemampuan teknis non farmakologi</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="lima" type="checkbox" id="a5" value="Yes" <?= ($detail->lima == "Yes" ? "checked" : "") ?>>
                    <label for="a5" class="custom-control-label">Meningkatnya dukungan orang terdekat</label>
                  </div>

                  <div class="custom-control custom-checkbox">
                    <input class="custom-control-input" name="enam" type="checkbox" id="a6" value="Yes" <?= ($detail->enam == "Yes" ? "checked" : "") ?>>
                    <label for="a6" class="custom-control-label">Menurunnya penggunanan analgesik</label>
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

