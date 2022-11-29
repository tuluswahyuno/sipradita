<?php 

class Pasien_m extends CI_Model
{	
	public function get_data($table)
		{
			return $this->db->get($table);
		}

	public function get_data_grafik($id_anamnesis)
	{
		$query = $this->db->query("SELECT * FROM grafik where id_anamnesis = $id_anamnesis;");
		return $query->result();

	}

	public function get_pemberiasuhan(){
     $query = $this->db->get('pemberi_asuhan')->result();
     return $query;
    }

	
	public function get_data_pemberiasuhan()
	{
		$query = $this->db->query("SELECT * FROM pemberi_asuhan;");
		return $query->result();

	}


	public function get_data_grafik_suhu($id_anamnesis)
	{
		$query = $this->db->query("SELECT * FROM grafik where id_anamnesis = $id_anamnesis;");
		return $query->result();
	}


	public function get_data_grafik_waktu($id_anamnesis)
	{
		$query = $this->db->query("SELECT * FROM grafik where id_anamnesis = $id_anamnesis;");
		return $query->result();
	}

	public function update_data($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}

	public function insert_data($data,$table)
	{
		$this->db->insert($table,$data);
	}

	public function delete_data($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function cariOrang()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("SELECT * from data_pasien where nama like '%$cari%' ");
		return $data->result();
	}

	public function cariOrangGos()
	{
		$cari = $this->input->GET('cari', TRUE);
		$data = $this->db->query("
			SELECT pasien.nama,
	        pasien.norm,
	        pasien.tempat_lahir,
	        pasien.tanggal_lahir,
	        referensi.deskripsi as pekerjaan,
	        pasien.jenis_kelamin,
	        pasien.alamat,
	        kontak_pasien.nomor as nohp,
	        kartu_identitas_pasien.nomor as nik,
	        pasien.agama
	        from master.pasien pasien
	        left outer join master.kartu_identitas_pasien kartu_identitas_pasien
	        on kartu_identitas_pasien.norm = pasien.norm
	        left outer join master.kontak_pasien kontak_pasien
	        on kontak_pasien.norm = pasien.norm
	        left outer join master.referensi referensi 
	        on referensi.jenis = 4 and referensi.id = pasien.pekerjaan
	        where pasien.status = 1
	        AND pasien.nama = '$cari' OR pasien.norm = '$cari' ");
			return $data->result();
	}

	public function intervensi_nafas($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM intervensi_pernafasan WHERE id_anamnesis = '$idanamnesis';");

		return $query->row();
	}


	public function intervensi_mol($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM intervensi_moskuloskelental WHERE id_anamnesis = '$idanamnesis';");

		return $query->row();
	}

	public function intervensi_proteksi($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM intervensi_proteksi WHERE id_anamnesis = '$idanamnesis';");

		return $query->row();
	}


	public function intervensi_nyeri($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM intervensi_nyeri WHERE id_anamnesis = '$idanamnesis';");

		return $query->row();
	}

	public function kriteria_mol($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM kriteria_moskuloskelental WHERE id_anamnesis = '$idanamnesis';");

		return $query->row();
	}

	public function kriteria_pro($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM kriteria_proteksi WHERE id_anamnesis = '$idanamnesis';");

		return $query->row();
	}


	public function kriteria_nyeri($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM kriteria_nyeri WHERE id_anamnesis = '$idanamnesis';");

		return $query->row();
	}

	public function kriteria_nafas($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM kriteria_pernafasan WHERE id_anamnesis = '$idanamnesis';");

		return $query->row();
	}


	public function cek_intervensipersafasan($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM intervensi_pernafasan WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}


	public function cek_intervensimos($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM intervensi_moskuloskelental WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}


	public function cek_intervensipro($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM intervensi_proteksi WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}


	public function cek_intervensinyeri($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM intervensi_nyeri WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}


	public function cek_kriteriapersafasan($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM kriteria_pernafasan WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}

	public function cek_kriteriamol($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM kriteria_moskuloskelental WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}

	public function cek_kriteriapro($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM kriteria_proteksi WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}


	public function cek_kriterianyeri($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM kriteria_nyeri WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}

	public function cek_sistempersafasan($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM sistem_pernafasan WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}

	public function cek_sistemmol($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM sistem_moskuloskelental WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}

	public function cek_sistempro($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM sistem_proteksi WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}


	public function cek_sistemnyeri($idanamnesis)
	{

		$hasil = $this->db->query("SELECT * FROM pengkajian_nyeri WHERE id_anamnesis = '$idanamnesis';");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}

	public function gr_nadi($idanamnesis)
	{
		$query = $this->db->query("SELECT * FROM grafik WHERE id_anamnesis = '$idanamnesis';");

		return $query->result();
	}


	public function gr_suhu($idanamnesis)
	{
		$query = $this->db->query("SELECT suhu FROM grafik WHERE id_anamnesis = '$idanamnesis';");

		return $query->result_array();
	}


	public function get_data_tekanandarah($idanamnesis)
	{
		$query = $this->db->query("SELECT * FROM grafik WHERE id_anamnesis = '$idanamnesis';");

		return $query->result();
	}

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


	public function get_id_pasien($id)
	{

		$hasil = $this->db->query("

		SELECT 
        pasien.nama,pasien.norm,pasien.tempat_lahir,pasien.tanggal_lahir,
        referensi.deskripsi as pekerjaan,pasien.jenis_kelamin,
        pasien.alamat,kontak_pasien.nomor as nohp,
        kartu_identitas_pasien.nomor as nik,
        pasien.agama
        from master.pasien pasien
        left outer join master.kartu_identitas_pasien kartu_identitas_pasien
        on kartu_identitas_pasien.norm = pasien.norm
        left outer join master.kontak_pasien kontak_pasien
        on kontak_pasien.norm = pasien.norm
        left outer join master.referensi referensi 
        on referensi.jenis = 4 and referensi.id = pasien.pekerjaan
        where pasien.status = 1
        AND pasien.norm = '$id';


		;");

		if($hasil->num_rows() > 0){
			return $hasil->row();
		}else{
			return false;
		}
	}

	// public function get_id_pasien($id)
	// {

	// 	$hasil = $this->db->query("SELECT * FROM data_pasien where id_pasien='$id';");

	// 	if($hasil->num_rows() > 0){
	// 		return $hasil->row();
	// 	}else{
	// 		return false;
	// 	}
	// }


	public function hasil_pernafasan($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM sistem_pernafasan where id_anamnesis = '$idanamnesis';");
		return $query->row();
	}

	public function hasil_mol($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM sistem_moskuloskelental where id_anamnesis = '$idanamnesis';");
		return $query->row();
	}

	public function hasil_proteksi($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM sistem_proteksi where id_anamnesis = '$idanamnesis';");
		return $query->row();
	}

	public function hasil_nyeri($idanamnesis)
	{

		$query = $this->db->query("SELECT * FROM pengkajian_nyeri where id_anamnesis = '$idanamnesis';");
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


	public function get_anamnesis($idanamnesis)
	{
		$query = $this->db->query("SELECT * FROM data_anamnesis where id_anamnesis = '$idanamnesis';");

		return $query->row();
	}


	public function data_anamnesis($id)
	{
		$query = $this->db->query("
		SELECT * from sipradita.data_anamnesis da, 
		master.pasien pasien where da.id_pasien = pasien.norm 
		AND da.id_pasien = '$id' order by tgl_mrs DESC;");

		return $query->result();
	}


	// public function data_anamnesis($id)
	// {
	// 	$query = $this->db->query("SELECT * FROM data_anamnesis da, data_pasien dp where da.id_pasien = dp.id_pasien AND da.id_pasien = '$id' order by tgl_mrs DESC;");

	// 	return $query->result();
	// }


	public function detail_anamnesis($idanamnesis)
	{
		$query = $this->db->query("
		SELECT * FROM sipradita.data_anamnesis da, master.pasien pasien 
		where da.id_anamnesis = '$idanamnesis' AND da.id_pasien = pasien.norm 
		order by tgl_mrs DESC;");

		return $query->row();
	}


	public function data_pemeriksaan($idanamnesis)
	{
		$query = $this->db->query("
		SELECT * from sipradita.data_anamnesis da, data_pemeriksaan sp, 
		master.pasien pasien WHERE da.id_anamnesis = '$idanamnesis' 
		AND da.id_anamnesis = sp.id_anamnesis 
		AND da.id_pasien = pasien.norm;");

		return $query->row();
	}


	// public function data_pemeriksaan($idanamnesis)
	// {
	// 	$query = $this->db->query("SELECT * FROM data_anamnesis da, data_pemeriksaan sp, data_pasien dp where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis AND da.id_pasien = dp.id_pasien;");

	// 	return $query->row();
	// }


	public function data_pernafasan($idanamnesis)
	{
		$query = $this->db->query("
			SELECT * FROM data_anamnesis da, sistem_pernafasan sp, master.pasien pasien
			where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis 
			AND da.id_pasien = pasien.norm;");

		return $query->row();
	}


	public function data_moskuloskelental($idanamnesis)
	{
		$query = $this->db->query("
			SELECT * from sipradita.data_anamnesis da, sistem_moskuloskelental sp, 
			master.pasien pasien WHERE da.id_anamnesis = '$idanamnesis' 
			AND da.id_anamnesis = sp.id_anamnesis 
			AND da.id_pasien = pasien.norm;");

		return $query->row();
	}


	// public function data_moskuloskelental($idanamnesis)
	// {
	// 	$query = $this->db->query("SELECT * FROM data_anamnesis da, sistem_moskuloskelental sp, data_pasien dp where da.id_anamnesis = '$idanamnesis' AND da.id_anamnesis = sp.id_anamnesis AND da.id_pasien = dp.id_pasien;");

	// 	return $query->row();
	// }


	public function data_proteksi($idanamnesis)
	{
		$query = $this->db->query("
			SELECT * FROM data_anamnesis da, sistem_proteksi sp,
			master.pasien pasien WHERE da.id_anamnesis = '$idanamnesis' 
			AND da.id_anamnesis = sp.id_anamnesis 
			AND da.id_pasien = pasien.norm;");

		return $query->row();
	}


	public function data_nyeri($idanamnesis)
	{
		$query = $this->db->query("
			SELECT * FROM data_anamnesis da, pengkajian_nyeri sp, 
			master.pasien pasien WHERE da.id_anamnesis = '$idanamnesis' 
			AND da.id_anamnesis = sp.id_anamnesis 
			AND da.id_pasien = pasien.norm;");

		return $query->row();
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


	public function get_data_tkd_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM grafik where id_grafik = $id;");
		return $query->row();
	}


	public function get_data_soap_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM soap where id_soap = $id;");
		return $query->row();
	}


	public function get_data_innafas_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM intervensi_pernafasan where id_ip = $id;");
		return $query->row();
	}


	public function get_data_innyeri_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM intervensi_nyeri where id_inyeri = $id;");
		return $query->row();
	}


	public function get_data_kriterianafas_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM kriteria_pernafasan where id_kriterianafas = $id;");
		return $query->row();
	}


	public function get_data_kriterianyeri_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM kriteria_nyeri where id_kriterianyeri = $id;");
		return $query->row();
	}


	public function get_data_inmos_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM intervensi_moskuloskelental where id_imos = $id;");
		return $query->row();
	}

	public function get_data_inpro_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM intervensi_proteksi where id_ipro = $id;");
		return $query->row();
	}

	public function get_data_kriteriamol_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM kriteria_moskuloskelental where id_kriteriamos = $id;");
		return $query->row();
	}


	public function get_data_kriteriapro_by_id($id)
	{
		$query = $this->db->query("SELECT * FROM kriteria_proteksi where id_kriteriaproteksi = $id;");
		return $query->row();
	}

	public function get_data_soap($idanamnesis)
	{
		$query = $this->db->query("SELECT * FROM soap where id_anamnesis = $idanamnesis order by create_at DESC;");
		return $query->result();
	}


	public function data_pasien_all()
	{

	$query = $this->db->query("
	SELECT pasien.nama,
	pasien.norm,
	pasien.tempat_lahir,
	pasien.tanggal_lahir,
	referensi.deskripsi as pekerjaan,
	pasien.jenis_kelamin,
	pasien.alamat,
	kontak_pasien.nomor as nohp,
	kartu_identitas_pasien.nomor as nik,
	pasien.agama
	from master.pasien pasien
	left outer join master.kartu_identitas_pasien kartu_identitas_pasien
	on kartu_identitas_pasien.norm = pasien.norm
	left outer join master.kontak_pasien kontak_pasien
	on kontak_pasien.norm = pasien.norm
	left outer join master.referensi referensi 
	on referensi.jenis = '4' and referensi.id = pasien.pekerjaan
	where pasien.status = '1';");

	return $query->result();
	}

}

?>