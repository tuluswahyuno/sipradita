<?php 
	
	/**
	 * 
	 */
	class Auth extends CI_Controller
	{

		public function login()
		{
			check_already_login();
			$this->load->view('login');
		}

		public function landing()
		{
			$this->load->view('template/landing');
		}

		public function maintenance()
		{
			$this->load->view('template/UnderMaintenance');
		}
		
		public function proses()
		{
			
			$username	= $this->input->post('username');
			$password	= md5($this->input->post('password'));


			$cek = $this->user_m->cek_login($username,$password);


				/*var_dump($cek);
				die();*/


				if ($cek == FALSE){
					
					$this->session->set_flashdata('flash', 'User dan Password Anda Benar !');
					redirect('Auth/login');

				}else{

					
					$this->session->set_userdata('username', $cek->username);
				    $this->session->set_userdata('role', $cek->role);
				    $this->session->set_userdata('nama_lengkap', $cek->nama_lengkap);
				    $this->session->set_userdata('id_user', $cek->id_user);


					switch ($cek->role) {
						
						case 1 : redirect('Ass/MasterPasien/cari_pasien');
								 break;

						case 2 : redirect('Ass/MasterPasien/cari_pasien');
								 break;

						default: break;
					}

				}

			}


		public function logout(){
			$this->session->sess_destroy();
			redirect('Auth/login');
		}

		public function ganti_password()
		{
			$this->load->view('template_admin/header');
			$this->load->view('ganti_password');
			$this->load->view('template_admin/footer');
		}

		public function ganti_password_aksi(){
			
			$pass_baru		= $this->input->post('pass_baru');
			$ulang_pass		= $this->input->post('ulang_pass');

			$this->form_validation->set_rules('pass_baru','Password Baru','required|matches[ulang_pass]');
			$this->form_validation->set_rules('ulang_pass','Ulangi Password','required');

			if($this->form_validation->run() !== FALSE ){
				$data 	= array('password' =>md5($pass_baru));
				$id 	= array('id_user' => $this->session->userdata('id_user'));

				$this->lapor_model->update_password($id,$data,'user');

				$this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  Password Berhasil di update, silahkan login !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					redirect('Auth/login');

			}else{				
				$this->load->view('template_admin/header');
				$this->load->view('ganti_password');
				$this->load->view('template_admin/footer');	
			}

			
		}

	}



 ?>