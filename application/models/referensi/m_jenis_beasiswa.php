<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_beasiswa extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisBeasiswa(){
		$this->db->select('*');
		$query = $this->db->get('tr_jenis_beasiswa');
		return $query->result_array();
	}

	public function addReferensiJenisBeasiswa($data){
		$this->db->insert('tr_jenis_beasiswa',$data);
	}

	public function updateReferensiJenisBeasiswa($data, $id){
		$this->db->where('id_jns_beasiswa', $id);
		$this->db->update('tr_jenis_beasiswa', $data);
	}

	public function preUpdateReferensiJenisBeasiswa($id) {
		$this->db->where('id_jns_beasiswa', $id);
		$query = $this->db->get('tr_jenis_beasiswa');
		return $query->result_array();
	}

	public function deleteReferensiJenisBeasiswa($id){
		$this->db->where('id_jns_beasiswa', $id);
		$this->db->delete('tr_jenis_beasiswa');
	}
}

/* End of file m_jenis_beasiswa.php */
/* Location: ./application/models/referensi/m_jenis_beasiswa.php */