<?php 

/**
 * 
 */
class User_m extends CI_model
{
	
	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('data_user');
		$this->db->where('username', $post['username']);
		$this->db->where('password', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}


	public function cek_login($username,$password){

			$username = set_value('username');
			$password = set_value('password');

			$result = $this->db
						   ->where('username',$username)
						   ->where('password',md5($password))
						   ->limit(1)
						   ->get('data_user');


			if($result->num_rows() > 0){
				return $result->row();
			}else{
				return FALSE;
			}
		}

	public function get($id = null)
	{
		$this->db->from('data_user');
		if($id !=null)
		{
			$this->db->where('id_user', $id);
		}
		$query = $this->db->get();
		return $query;
	}


	public function get_data($table)
	{
		return $this->db->get($table);
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


	public function update_data($table,$data,$where)
	{
		$this->db->update($table,$data,$where);
	}



}


 ?>