<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_ujian extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisUjian(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_ujian');
	return $query->result_array();
	}

	public function addReferensiJenisUjian($data){
	$this->db->insert('tr_jenis_ujian',$data);
	}

	public function updateReferensiJenisUjian($data, $id){
		$this->db->where('id_jns_ujian', $id);
		$this->db->update('tr_jenis_ujian', $data);
	}

	public function preUpdateReferensiJenisUjian($id) {
		$this->db->where('id_jns_ujian', $id);
		$query = $this->db->get('tr_jenis_ujian');
		return $query->result_array();
	}

	public function deleteReferensiJenisUjian($id){
		$this->db->where('id_jns_ujian', $id);
		$this->db->delete('tr_jenis_ujian');
	}
}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */