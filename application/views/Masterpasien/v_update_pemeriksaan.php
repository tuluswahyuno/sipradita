<title><?= $title; ?></title>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="col-sm-12">
      <ul class="nav nav-tabs">

      
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('Ass/MasterPasien/pemeriksaan/').$detail->id_anamnesis ?>">Pemeriksaan Umum</a>
        </li>

      </ul>
    </div> 
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">


      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

      <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Pemeriksaan Umum</h3>
        </div>

        <div class="card-body">

          <form method="POST" action="<?php echo base_url('Ass/MasterPasien/update_pemeriksaan_aksi') ?>" enctype="multipart/form-data">

            <div class="row">

              <div class="col-sm-12">
                <label>1. GCS</label><br>
                <input type="hidden" name="id_anamnesis" value="<?php echo $detail->id_anamnesis; ?>">
                <input type="hidden" name="id_pemeriksaan" value="<?php echo $pemeriksaan->id_pemeriksaan; ?>">
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                  <label>E</label>
                  <input type="number" name="e" class="form-control" value="<?php echo $pemeriksaan->e; ?>" required>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                  <label>V</label>
                  <input type="number" name="v" class="form-control" value="<?php echo $pemeriksaan->v; ?>" required>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                  <label>M</label>
                  <input type="number" name="m" class="form-control" value="<?php echo $pemeriksaan->m; ?>" required>
                </div>
              </div>


              <div class="col-sm-3">
                <div class="form-group">
                  <label>BB</label>
                  <input type="number" name="bb" class="form-control" value="<?php echo $pemeriksaan->bb; ?>" required>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>TB</label>
                  <input type="number" name="tb" class="form-control" value="<?php echo $pemeriksaan->tb; ?>" required>
                </div>
              </div>


              <div class="col-sm-12">
                <label>2. Tanda-Tanda Vital</label><br>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>TD</label>
                  <input type="number" name="td" class="form-control" value="<?php echo $pemeriksaan->td; ?>" required>
                </div>
              </div>

              <div class="col-sm-3">
                <div class="form-group">
                  <label>RR</label>
                  <input type="number" name="rr" class="form-control" value="<?php echo $pemeriksaan->rr; ?>" required>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                  <label>N</label>
                  <input type="number" name="n" class="form-control" value="<?php echo $pemeriksaan->n; ?>" required>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                  <label>S</label>
                  <input type="number" name="s" class="form-control" value="<?php echo $pemeriksaan->s; ?>" required>
                </div>
              </div>

              <div class="col-sm-2">
                <div class="form-group">
                  <label>Spo2</label>
                  <input type="number" name="spo" class="form-control" value="<?php echo $pemeriksaan->spo; ?>" required>
                </div>
              </div>


              <div class="col-sm-12">
                <div class="form-group">
                  <label>3. Keadaan Umum </label>
                  <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#exampleModalCenter">
                    Catatan Pengisian <i class="fas fa-info-circle"></i>
                  </button>
                  <select class="form-control" name="keadaan_umum" required>
                    <option value="Baik">Baik</option>
                    <option value="Sedang">Sedang</option>
                    <option value="Buruk">Buruk</option>
                  </select>
                </div>
              </div>

              


            <div class="col-sm-12">
                <label>4. Prosedur Invasif</label><br>
            </div>


            <div class="col-sm-4">
                <div class="form-group">
                  <label>a. IV Line, Terpasang di</label>
                  <input type="text" name="ivline_terpasangdi" class="form-control" value="<?php echo $pemeriksaan->ivline_terpasangdi; ?>">
                </div>
            </div>

            <div class="col-sm-4">
                <div class="form-group">
                  <label>Sebelah</label>
                  <select class="form-control" name="lokasi">
                    <option value="Kanan">Kanan</option>
                    <option value="Kiri">Kiri</option>
                  </select>
                </div>
              </div>

            <div class="col-sm-4">
                <div class="form-group">
                  <label>Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" value="<?php echo $pemeriksaan->tanggal; ?>">
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group">
                  <label>b. Kateter Urine, Terpasang Tanggal</label>
                  <input type="date" name="kateter_terpasang_tgl" class="form-control" value="<?php echo $pemeriksaan->kateter_terpasang_tgl; ?>">
                </div>
            </div>


            <div class="col-sm-6">
                <div class="form-group">
                  <label>c. NGT/OGT, Terpasang Tanggal </label>
                  <input type="date" name="ngtogt_terpasang_tgl" class="form-control" value="<?php echo $pemeriksaan->ngtogt_terpasang_tgl; ?>">
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

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Catatan Pengisian Keadaan Umum</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <style>
                table {
                  /*font-family: verdana, sans-serif;*/
                  border-collapse: collapse;
                  width: 100%;
                }

                td, th {
                  border: 0.5px solid #dddddd;
                  text-align: center;
                  padding: 1px;
                }

                tr:nth-child(even) {
                  background-color: #dddddd;
                }
              </style>
            </head>
            <body>

              <table>
                <tr>
                  <th>BAIK</th>
                  <th>SEDANG</br>
                    (memiliki minimal 3 poin di bawah)
                  </th>
                  <th>BURUK</br>
                  (memiliki minimal 2 poin di bawah)</th>
                </tr>
                <tr>
                  <td>Kesadaran Penuh (CM)</td>
                  <td>Kesadaran penuh s/d apatis</td>
                  <td>Kesadaran apatis s/d coma</td>
                </tr>
                <tr>
                  <td>Tanda-tanda vital stabil</td>
                  <td>Memerlukan tindakan medis dan perlukaan minimal 3 tindakan</td>
                  <td>Tanda-tanda vital tidak stabil</td>
                </tr>
                <tr>
                  <td>Pemenuhan kebutuhan mandiri</td>
                  <td>Tanda-tanda vital stabil</td>
                  <td>Memerlukan observasi /jam</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Memerlukan observasi /3jam</td>
                  <td>Memerlukan tindakan medis minimal 5 tindakan</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Pemenuhan kebutuhan dibantu sebagian s/d seluruhnya</td>
                  <td>Pemenuhan kebutuhan dibantu total</td>
                </tr>

              </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

