<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_status extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisStatus(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_status');
	return $query->result_array();
	}

	public function addReferensiJenisStatus($data){
	$this->db->insert('tr_jenis_status',$data);
	}

	public function updateReferensiJenisStatus($data, $id){
		$this->db->where('id_jns_status', $id);
		$this->db->update('tr_jenis_status', $data);
	}

	public function preUpdateReferensiJenisStatus($id) {
		$this->db->where('id_jns_status', $id);
		$query = $this->db->get('tr_jenis_status');
		return $query->result_array();
	}

	public function deleteReferensiJenisStatus($id){
		$this->db->where('id_jns_status', $id);
		$this->db->delete('tr_jenis_status');
	}
}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */