<?php

class Dashboard extends CI_Controller
{
    public function index()
    {
        check_not_login();
        
        $data['title'] = " Dashboard ";

        $data['bulan_ini']   = $this->pasien_m->hitung_pasien_bulan_ini();
        $data['tahun_ini']  = $this->pasien_m->hitung_pasien_tahun_ini();
        $data['total_pasien']  = $this->pasien_m->total_pasien();

        // $data3['hitung_antri'] = $this->pasien_m->hitung_antri();
        // $data3['antri_obat'] = $this->pasien_m->antri_obat(); 
        

        foreach($this->model_grafik->statistik_surat()->result_array() as $row)
         {
          $data['grafik'][]=(float)$row['Januari'];
          $data['grafik'][]=(float)$row['Februari'];
          $data['grafik'][]=(float)$row['Maret'];
          $data['grafik'][]=(float)$row['April'];
          $data['grafik'][]=(float)$row['Mei'];
          $data['grafik'][]=(float)$row['Juni'];
          $data['grafik'][]=(float)$row['Juli'];
          $data['grafik'][]=(float)$row['Agustus'];
          $data['grafik'][]=(float)$row['September'];
          $data['grafik'][]=(float)$row['Oktober'];
          $data['grafik'][]=(float)$row['November'];
          $data['grafik'][]=(float)$row['Desember'];
         }


        foreach($this->model_grafik->statistik_jenis()->result_array() as $row)
         {
          $data['grafik1'][]=(float)$row['Laki-laki'];
          $data['grafik1'][]=(float)$row['Perempuan'];
         }

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('admin/v_dashboard_admin',$data);
        $this->load->view('template/footer_admin',$data);
    }
}

?>