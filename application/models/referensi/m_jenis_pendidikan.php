<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_pendidikan extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisPendidikan(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_pendidikan');
	return $query->result_array();
	}

	public function addReferensiJenisPendidikan($data){
	$this->db->insert('tr_jenis_pendidikan',$data);
	}

	public function updateReferensiJenisPendidikan($data, $id){
		$this->db->where('id_jns_pendidikan', $id);
		$this->db->update('tr_jenis_pendidikan', $data);
	}

	public function preUpdateReferensiJenisPendidikan($id) {
		$this->db->where('id_jns_pendidikan', $id);
		$query = $this->db->get('tr_jenis_pendidikan');
		return $query->result_array();
	}

	public function deleteReferensiJenisPendidikan($id){
		$this->db->where('id_jns_pendidikan', $id);
		$this->db->delete('tr_jenis_pendidikan');
	}
}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */