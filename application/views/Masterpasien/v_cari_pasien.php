<title><?= $title; ?></title>

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">

      <!-- <div class="flash-flasherorr" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div> -->



      <br><br><br><br>
      <h2 class="text-center display-4">Cari Pasien</h2>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <form action="<?php echo base_url('Ass/MasterPasien/hasil_cari')?>" action="GET">
            <div class="input-group">
              <input type="search" id="cari" name="cari" class="form-control form-control-lg" placeholder="Masukkan Nomor Rekam Medis (RM) Pasien">
              <div class="input-group-append">
                <button type="submit" class="btn btn-lg btn-default" value="Cari">
                  <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
                <br><center><?php echo $this->session->flashdata('pesan') ?>
          </form>
        </div>
      </div>
    </div>
  </section>
</div>





