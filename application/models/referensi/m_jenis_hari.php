<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_hari extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisHari(){
		$this->db->select('*');
		$query = $this->db->get('tr_jenis_hari');
		return $query->result_array();
	}

	public function addReferensiJenisHari($data){
		$this->db->insert('tr_jenis_hari',$data);
	}

	public function updateReferensiJenisHari($data, $id){
		$this->db->where('id_jns_hari', $id);
		$this->db->update('tr_jenis_hari', $data);
	}

	public function preUpdateReferensiJenisHari($id) {
		$this->db->where('id_jns_hari', $id);
		$query = $this->db->get('tr_jenis_hari');
		return $query->result_array();
	}

	public function deleteReferensiJenisKHari($id){
		$this->db->where('id_jns_hari', $id);
		$this->db->delete('tr_jenis_hari');
	}
}

/* End of file m_jenis_hari.php */
/* Location: ./application/models/referensi/m_jenis_hari.php */