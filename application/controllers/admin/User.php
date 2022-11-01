<?php 

/**
 * 
 */
class User extends CI_Controller
{
	
	public function index()
	{
		check_not_login();

		$data['user'] = $this->pasien_m->get_data_user();
		$data['title'] = "Manajemen Data User";

		$data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat();

        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
		$this->load->view('admin/v_user',$data);
		$this->load->view('template/footer');
	}


	public function excel()
        {
            if(isset($_FILES["file"]["name"])){
                  // upload
                $file_tmp = $_FILES['file']['tmp_name'];
                $file_name = $_FILES['file']['name'];
                $file_size =$_FILES['file']['size'];
                $file_type=$_FILES['file']['type'];
                // move_uploaded_file($file_tmp,"uploads/".$file_name); // simpan filenya di folder uploads
                
                $object = PHPExcel_IOFactory::load($file_tmp);
        
                foreach($object->getWorksheetIterator() as $worksheet){
        
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
        
                    for($row=8; $row<=$highestRow; $row++){
        
                    $nama = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                    $nip = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $pangkat = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                    $jabatan = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                    $divisi = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
                    $profesi = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
                    $status = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
                    $email = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
                    $hp = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
                    $alamat = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
                    $password = md5($worksheet->getCellByColumnAndRow(10, $row)->getValue());
                    $role = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
                        

                        $data[] = array(
                            'nama_lengkap'      => $nama,
                            'nip'               => $nip,
                            'pangkat'           => $pangkat,
                            'jabatan'           => $jabatan,
                            'divisi'            => $divisi,
                            'profesi'           => $profesi,
                            'status_pegawai'    => $status,
                            'email'             => $email,
                            'no_hp'             => $hp,
                            'alamat'             => $alamat,
                            'password'          => $password,
                            'role'              => $role,
                        );
        
                    } 
        
                }
        
                $this->db->insert_batch('data_pegawai', $data);
        
                $message = array(
                    'message'=>'<div class="alert alert-success">Import file excel berhasil disimpan di database</div>',
                );
                
                // $this->session->set_flashdata($message);
                // redirect('import');

                $this->session->set_flashdata('flash', 'Diimport');
				redirect('admin/User');
            }
            else
            {
                 $message = array(
                    'message'=>'<div class="alert alert-danger">Import file gagal, coba lagi</div>',
                );
                
                // $this->session->set_flashdata($message);
                // redirect('import');

                $this->session->set_flashdata('flash', 'Diupdate');
				redirect('admin/User');
            }
        }


	public function ganti_password()
	{
		check_not_login();

		$data['user'] = $this->pasien_m->get_data_user();
		$data['title'] = "Manajemen Data User";

		$data['hitung_antri'] = $this->pasien_m->hitung_antri();
        $data['antri_obat'] = $this->pasien_m->antri_obat();
		
        $this->load->view('template/header');
        $this->load->view('template/sidebar',$data);
		$this->load->view('admin/v_user_ganti_password',$data);
		$this->load->view('template/footer');
	}


	public function tambah_user()
	{
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$username			= $this->input->post('username');
			$password			= md5($this->input->post('password'));
			$role				= $this->input->post('role');

			$data = array(
				'nama_lengkap' 		=> $nama_lengkap,
				'username' 			=> $username,
				'password' 			=> $password,
				'role' 				=> $role,
			);

			$this->user_m->insert_data($data,'data_user');
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('admin/User');	
	}


	public function update_user()
	{
			$id					= $this->input->post('id_user');
			$nama_lengkap		= $this->input->post('nama_lengkap');
			$username			= $this->input->post('username');
			// $password			= md5($this->input->post('password'));
			$role				= $this->input->post('role');
			$status_aktif		= $this->input->post('status_aktif');
			$update_at 			= date('Y-m-d H:i:s');

			date_default_timezone_set('Asia/Jakarta');

			$data = array(
				'nama_lengkap' 		=> $nama_lengkap,
				'username' 			=> $username,
				// 'password' 			=> $password,
				'role' 				=> $role,
				'status_aktif' 		=> $status_aktif,
				'update_at' 		=> date('Y-m-d H:i:s')
			);

			$where = array(
				'id_user' => $id
			);


			$this->user_m->update_data('data_user',$data,$where);

			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('admin/User');
	}


	public function update_password()
	{
			$id_user			= $this->input->post('id_user');
			$password			= md5($this->input->post('password'));
			$update_at 			= date('Y-m-d H:i:s');

			date_default_timezone_set('Asia/Jakarta');

			$data = array(
				'password'		=> $password,
				'update_at' 	=> date('Y-m-d H:i:s')
			);

			$where = array(
				'id_user' => $id_user
			);


			$this->user_m->update_data('data_user',$data,$where);

			$this->session->set_flashdata('flash', 'Diupdate');
			redirect('admin/User/ganti_password');
	}

	public function delete_user($id){
		$where = array('id_user' => $id);

		$this->user_m->delete_data($where, 'data_user');
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('admin/User');

	}

}

?>