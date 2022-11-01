<?php 

class Model_grafik extends CI_Model{
   
  function statistik_surat()
 {
  
  $sql= $this->db->query("
  
  select
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=1) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Januari`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=2) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Februari`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=3) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Maret`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=4) AND (YEAR(tgl_kunjungan)=2022))),0) AS `April`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=5) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Mei`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=6) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Juni`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=7) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Juli`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=8) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Agustus`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=9) AND (YEAR(tgl_kunjungan)=2022))),0) AS `September`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=10) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Oktober`, 
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=12) AND (YEAR(tgl_kunjungan)=2022))),0) AS `November`,
  ifnull((SELECT sum(id_pasien) FROM (data_periksa) WHERE ((Month(tgl_kunjungan)=12) AND (YEAR(tgl_kunjungan)=2022))),0) AS `Desember`
  from data_periksa 
  GROUP BY YEAR(tgl_kunjungan); 
  
  ");
  
  return $sql;
 }
 
 

 function statistik_jenis()
 {
  
  $sql= $this->db->query("

  select 
  ifnull ((SELECT count(id_pasien) FROM (data_pasien) WHERE (gender='Laki-laki')),0) AS `Laki-laki`,
  ifnull ((SELECT count(id_pasien) FROM (data_pasien) WHERE (gender='Perempuan')),0) AS `Perempuan`
  from data_pasien
  GROUP BY grafik;
  
  ");
  
  return $sql;
 } 




}


 ?>