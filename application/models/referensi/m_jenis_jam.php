<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_jam extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisJam(){
		$this->db->select('*');
		$query = $this->db->get('tr_jenis_jam');
		return $query->result_array();
	}

	public function addReferensiJenisJam($data){
		$this->db->insert('tr_jenis_jam',$data);
	}

	public function updateReferensiJenisJam($data, $id){
		$this->db->where('id_jns_jam', $id);
		$this->db->update('tr_jenis_jam', $data);
	}

	public function preUpdateReferensiJenisJam($id) {
		$this->db->where('id_jns_jam', $id);
		$query = $this->db->get('tr_jenis_jam');
		return $query->result_array();
	}

	public function deleteReferensiJenisJam($id){
		$this->db->where('id_jns_jam', $id);
		$this->db->delete('tr_jenis_jam');
	}
}

/* End of file m_jenis_jam.php */
/* Location: ./application/models/referensi/m_jenis_jam.php */