<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getListUserAdmin(){
		$query = $this->db->query("SELECT * FROM list_user");
		return $query->result_array();
	}

	public function insertListUserAdmin($data){
		$this->db->insert('list_user', $data);
	}

	public function readUpdateUserList($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('list_user');
		return $query->result_array();
	}

	public function updateListUserAdmin($id, $data){
		$this->db->where('id_user', $id);
		$this->db->update('list_user', $data);
	}

	public function blokirListUserAdmin($id){
		$this->db->where('id_user',$id);
		$this->db->update('list_user','T');
	}

	public function deleteListUserAdmin($id){
		$this->db->where('id_user', $id);
		$this->db->delete('list_user');
	}

	public function validateLevelUser($id){
		$this->db->where('id_user',$id);
		$this->db->select('level_user');
		$query = $this->db->get('list_user');
		return $query->result_array();
	}

	public function checkOldPassword($id){
		$this->db->where('id_user', $Value);
		// $this->db->select('pass_user');
		$query = $this->db->get('list_user');
		return $query->result_array();
	}

}

/* End of file admin_model.php */
/* Location: ./application/models/admin_model.php */