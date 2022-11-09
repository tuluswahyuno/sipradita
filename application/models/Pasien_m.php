<?php 

	class Pasien_m extends CI_Model
	{
		public function get_data_pasien()
	    {
	        $query = $this->db->query("SELECT * FROM data_pasien order by id_pasien;");
	        return $query->result();
	    }


	    public function get_data_pasien_personal($id)
	    {
	        $query = $this->db->query("SELECT * FROM data_pasien where id_pasien='$id' order by id_pasien;");
	        return $query->result();
	    }


	    public function insert_data($data,$table)
		{
			$this->db->insert($table,$data);
		}


		public function get_id_pasien($id)
	    {
	        
	        $hasil = $this->db->query("SELECT * FROM data_pasien where id_pasien='$id';");

	        if($hasil->num_rows() > 0){
	            return $hasil->row();
	        }else{
	            return false;
	        }
	    }


	    public function hasil_diagnosa($idanamnesis)
	    {

	    	$query = $this->db->query("SELECT * FROM data_anamnesis da, sistem_pernafasan sp, sistem_moskuloskelental sm, data_pasien dp where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis AND da.id_anamnesis = sm.id_anamnesis AND da.id_pasien = dp.id_pasien;");

	        return $query->row();
		}

	    public function get_id_anamnesis($idanamnesis)
	    {
	        
	        $hasil = $this->db->query("SELECT * FROM data_anamnesis where id_anamnesis='$idanamnesis';");

	        if($hasil->num_rows() > 0){
	            return $hasil->row();
	        }else{
	            return false;
	        }
	    }


	    public function data_anamnesis($id)
	    {
	        $query = $this->db->query("SELECT * FROM data_anamnesis da, data_pasien dp where da.id_pasien = dp.id_pasien AND da.id_pasien = '$id' order by tgl_mrs DESC;");

	        return $query->result();
	    }


	    public function detail_anamnesis($idanamnesis)
	    {
	        $query = $this->db->query("SELECT * FROM data_anamnesis da, data_pasien dp where id_anamnesis = '$idanamnesis' and da.id_pasien = dp.id_pasien order by tgl_mrs DESC;");

	        return $query->row();
	    }


	    public function data_pemeriksaan($idanamnesis)
	    {
	        $query = $this->db->query("SELECT * FROM data_anamnesis da, data_pemeriksaan sp, data_pasien dp where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis AND da.id_pasien = dp.id_pasien;");

	        return $query->row();
	    }


	    public function data_pernafasan($idanamnesis)
	    {
	        $query = $this->db->query("SELECT * FROM data_anamnesis da, sistem_pernafasan sp, data_pasien dp where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis AND da.id_pasien = dp.id_pasien;");

	        return $query->row();
	    }


	    public function data_moskuloskelental($idanamnesis)
	    {
	        $query = $this->db->query("SELECT * FROM data_anamnesis da, sistem_moskuloskelental sp, data_pasien dp where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis AND da.id_pasien = dp.id_pasien;");

	        return $query->row();
	    }


	    public function data_proteksi($idanamnesis)
	    {
	        $query = $this->db->query("SELECT * FROM data_anamnesis da, sistem_proteksi sp, data_pasien dp where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis AND da.id_pasien = dp.id_pasien;");

	        return $query->result();
	    }


	    public function data_nyeri($idanamnesis)
	    {
	        $query = $this->db->query("SELECT * FROM data_anamnesis da, pengkajian_nyeri sp, data_pasien dp where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis AND da.id_pasien = dp.id_pasien;");

	        return $query->result();
	    }


	    public function cek($idanamnesis)
	    {
	        
	        $hasil = $this->db->query("SELECT * FROM data_pemeriksaan WHERE id_anamnesis = '$idanamnesis';");

	        if($hasil->num_rows() > 0){
	            return $hasil->row();
	        }else{
	            return false;
	        }
	    }


	    public function cek_pernafasan($idanamnesis)
	    {
	        
	        $hasil = $this->db->query("SELECT * FROM sistem_pernafasan WHERE id_anamnesis = '$idanamnesis';");

	        if($hasil->num_rows() > 0){
	            return $hasil->row();
	        }else{
	            return false;
	        }
	    }


	    public function cek_moskuloskelental($idanamnesis)
	    {
	        
	        $hasil = $this->db->query("SELECT * FROM sistem_moskuloskelental WHERE id_anamnesis = '$idanamnesis';");

	        if($hasil->num_rows() > 0){
	            return $hasil->row();
	        }else{
	            return false;
	        }
	    }


	    public function cek_proteksi($idanamnesis)
	    {
	        
	        $hasil = $this->db->query("SELECT * FROM sistem_proteksi WHERE id_anamnesis = '$idanamnesis';");

	        if($hasil->num_rows() > 0){
	            return $hasil->row();
	        }else{
	            return false;
	        }
	    }


	    public function cek_nyeri($idanamnesis)
	    {
	        
	        $hasil = $this->db->query("SELECT * FROM pengkajian_nyeri WHERE id_anamnesis = '$idanamnesis';");

	        if($hasil->num_rows() > 0){
	            return $hasil->row();
	        }else{
	            return false;
	        }
	    }



	    public function get_data_keluhan($id)
	    {
	        
	        $hasil = $this->db->query("SELECT * FROM data_periksa where id_pasien='$id' and status != '2';");
        	return $hasil->result();
	    }


	    public function get_data_periksa_pasien()
	    {
	        $query = $this->db->query("SELECT * FROM data_periksa dpr, data_pasien dps where dpr.id_pasien = dps.id_pasien and status='0' order by tgl_kunjungan ASC;");
	        return $query->result();
	    }


	    public function get_data_antri_obat()
	    {
	        $query = $this->db->query("SELECT * FROM data_periksa dpr, data_pasien dps where dpr.id_pasien = dps.id_pasien and status='1' order by tgl_kunjungan ASC;");
	        return $query->result();
	    }


	    public function get_data_selesai_periksa()
	    {
	        $query = $this->db->query("SELECT * FROM data_periksa dpr, data_pasien dps where dpr.id_pasien = dps.id_pasien and status='2' order by tgl_kunjungan DESC;");
	        return $query->result();
	    }


	    public function riwayat_periksa()
	    {
	        $query = $this->db->query("SELECT * FROM data_periksa dpr, data_pasien dps where dpr.id_pasien = dps.id_pasien and status='2' order by tgl_kunjungan DESC;");
	        return $query->result();
	    }


	    public function hitung_antri()
	    {   
	        $nilaiawal = 0;

	        $query = $this->db->query("SELECT * FROM data_periksa dpr, data_pasien dps where dpr.id_pasien = dps.id_pasien and status='0';");
	        
	        if($query->num_rows()>0)
	        {
	          return $query->num_rows();
	        }
	        else
	        {
	          return 0;
	        }
	    }


	    public function antri_obat()
	    {   
	        $nilaiawal = 0;

	        $query = $this->db->query("SELECT * FROM data_periksa dpr, data_pasien dps where dpr.id_pasien = dps.id_pasien and status='1';");
	        
	        if($query->num_rows()>0)
	        {
	          return $query->num_rows();
	        }
	        else
	        {
	          return 0;
	        }
	    }


	    public function hitung_pasien_bulan_ini()
	    {   
	        $nilaiawal = 0;

	        $query = $this->db->query("SELECT * from data_periksa where month(tgl_kunjungan)=month(now()) and year(tgl_kunjungan) = year(now());");

	        
	        if($query->num_rows()>0)
	        {
	          return $query->num_rows();
	        }
	        else
	        {
	          return 0;
	        }
	    }


	    public function hitung_pasien_tahun_ini()
	    {   
	        $nilaiawal = 0;

	        $query = $this->db->query("SELECT * from data_periksa where year(tgl_kunjungan) = year(now());");

	        
	        if($query->num_rows()>0)
	        {
	          return $query->num_rows();
	        }
	        else
	        {
	          return 0;
	        }
	    }


	    public function total_pasien()
	    {   
	        $nilaiawal = 0;

	        $query = $this->db->query("SELECT * from data_pasien;");

	        
	        if($query->num_rows()>0)
	        {
	          return $query->num_rows();
	        }
	        else
	        {
	          return 0;
	        }
	    }


	    public function get_data_user()
	    {
	        $query = $this->db->query("SELECT * FROM data_user where status_aktif='1' order by id_user;");
	        return $query->result();
	    }



	    function get_no_invoice(){
        $q = $this->db->query("SELECT MAX(RIGHT(no_rm,1)) AS kd_max FROM data_pasien");
        $kd = "";
        if($q->num_rows()>0){
            foreach($q->result() as $k){
                $tmp = ((int)$k->kd_max)+1;
                $kd = sprintf("%04s", $tmp);
            }
        }else{
            $kd = "0001";
        }
        date_default_timezone_set('Asia/Jakarta');
        return date('ym').$kd;
    }

	}

?>