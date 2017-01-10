<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_ruangan extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisRuangan(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_ruangan');
	return $query->result_array();
	}

	public function addReferensiJenisRuangan($data){
	$this->db->insert('tr_jenis_ruangan',$data);
	}

	public function updateReferensiJenisRuangan($data, $id){
		$this->db->where('id_jns_ruangan', $id);
		$this->db->update('tr_jenis_ruangan', $data);
	}

	public function preUpdateReferensiJenisRuangan($id) {
		$this->db->where('id_jns_ruangan', $id);
		$query = $this->db->get('tr_jenis_ruangan');
		return $query->result_array();
	}

	public function deleteReferensiJenisRuangan($id){
		$this->db->where('id_jns_ruangan', $id);
		$this->db->delete('tr_jenis_ruangan');
	}

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */