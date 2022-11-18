<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; IT RSUD dr. Soeratno Gemolong Kab. Sragen 2022 <!-- <a href="https://adminlte.io">AdminLTE.io</a>. --></strong> - All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/template/dist/js/demo.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script src="<?php echo base_url() ?>assets/template/plugins/bs-stepper/js/bs-stepper.min.js"></script>



<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/template/plugins/chart.js/Chart.min.js"></script>



<!-- digunakan untuk menampilkan datatables yaitu search dan pagination pada setiap tabel -->
<script>
  var dttb = $('#table1').DataTable({
      processing: true,
      serverSide: true,
      paging: true,
      initComplete: function(settings, json){
      },
      lengthMenu: [20, 40, 60, 80, 100],
      responsive: true, 
      buttons: ["pdf", "colvis"],
      select: true,
      ajax:{
        url: '<?= site_url('Ass/MasterPasien/json_pasien') ?>',
        // type: 'post'
      },
      columns: [
        {data: 'nama', name: 'nama', searchable: true, width: '7%'},
        {data: 'norm', name: 'norm', searchable: true, width: '15%'},
        {data: 'tempat_lahir', name: 'tempat_lahir', searchable: true, width: '20%'},
        {data: 'tanggal_lahir', name: 'tanggal_lahir', searchable: true},
        // {data: 'tanggal_mulai', name: 'tanggal_mulai', searchable: true, width: '7%'},
        // {data: 'tanggal_selesai', name: 'tanggal_selesai', searchable: true, width: '7%'},
        {data: 'pekerjaan', name: 'pekerjaan', searchable: true},
        
      ],
    });
</script>




<!-- digunakan untuk memanggil sweetalret -->
<script src="<?php echo base_url() ?>assets/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/myscript.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/sweetalert2.min.css">

</body>
</html>


