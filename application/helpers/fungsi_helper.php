<?php 

	function check_already_login()
	{
		$ci =& get_instance();
		$user_session = $ci->session->userdata('id_user');
		$role = $ci->session->userdata('role');
		if($user_session && $role == 1){
			redirect('Ass/MasterPasien/cari_pasien');
		}elseif($user_session && $role == 2){
			redirect('Ass/MasterPasien/cari_pasien');
		}
	}


	function check_not_login()
	{
		$ci =& get_instance();
		$user_session = $ci->session->userdata('id_user');
		if(!$user_session)
		{
			redirect('Auth/login');
		}
	}


 ?>