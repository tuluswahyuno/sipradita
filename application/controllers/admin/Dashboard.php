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

        $data3['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data3['antri_obat'] = $this->pasien_m->antri_obat(); 
        

        foreach($this->model_grafik->statistik_surat()->result_array() as $row)
         {
          $data2['grafik'][]=(float)$row['Januari'];
          $data2['grafik'][]=(float)$row['Februari'];
          $data2['grafik'][]=(float)$row['Maret'];
          $data2['grafik'][]=(float)$row['April'];
          $data2['grafik'][]=(float)$row['Mei'];
          $data2['grafik'][]=(float)$row['Juni'];
          $data2['grafik'][]=(float)$row['Juli'];
          $data2['grafik'][]=(float)$row['Agustus'];
          $data2['grafik'][]=(float)$row['September'];
          $data2['grafik'][]=(float)$row['Oktober'];
          $data2['grafik'][]=(float)$row['November'];
          $data2['grafik'][]=(float)$row['Desember'];
         }


        foreach($this->model_grafik->statistik_jenis()->result_array() as $row)
         {
          $data2['grafik1'][]=(float)$row['Laki-laki'];
          $data2['grafik1'][]=(float)$row['Perempuan'];
         }

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data3);
        $this->load->view('admin/v_dashboard_admin',$data);
        $this->load->view('template/footer',$data2);
    }
}

?>