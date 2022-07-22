<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function getUsers()
	{
		$this->db->select('user_id, username, nama, email');
		return $this->db->get('tb_user')->result_array();
	}

}

/* End of file home_model.php */
/* Location: ./application/models/home_model.php */