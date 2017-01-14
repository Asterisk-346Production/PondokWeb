<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getUserPass($data){
		$this->db->select('*');
		$this->db->where('id_user', $data['username']);
		$this->db->where('pass_user', $data['password']);
		$this->db->where('blokir_user', 'T');
		$query = $this->db->get('list_user');
		
		if ($query->num_rows() == 1) {
			return true;
		} else {
			return false;
		}
	}

	public function getUserInformation($data){
		$this->db->select('id_list_user');
		$this->db->select('id_user');
		$this->db->select('level_user');
		$this->db->where('id_user', $data['username']);
		$this->db->where('pass_user', $data['password']);
		$this->db->where('blokir_user', 'T');
		$query = $this->db->get('list_user');
		return $query->result_array();
	}

}

/* End of file login.php */
/* Location: ./application/models/login.php */