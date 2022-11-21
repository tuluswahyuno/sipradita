 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <!-- <img src="<?php echo base_url() ?>assets/template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
      <!-- <i class="far fa-hospital"></i> -->
       <center> 
      <h2><span class="brand-text"><b>SI - PRADITA</b></span></h2>
      </center>
     
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
   

          <li class="nav-header">Assesmen Pasien</li>

          <li class="nav-item">
            <a href="<?php echo base_url('Ass/MasterPasien/cari_pasien') ?>" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Cari Pasien
              </p>
            </a>
          </li>

          <!-- <li class="nav-item">
            <a href="<?php echo base_url('Ass/MasterPasien') ?>" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Form Assesmen
              </p>
            </a>
          </li> -->

          

          <?php $cek = $this->fungsi->user_login()->role;

          if ($cek == '1') {?>

          <li class="nav-header">PENGATURAN USER</li>
          
          <li class="nav-item">
            <a href="<?php echo base_url('admin/User') ?>" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Pengaturan User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo base_url('admin/User/ganti_password') ?>" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Ganti Password
              </p>
            </a>
          </li>
          
          <?php }else{}?>

          <li class="nav-header">KELUAR APLIKASI</li>
          <li class="nav-item mb-5">
            <a href="<?php echo base_url('Auth/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>


          
    </nav>
    </div>
  </aside>