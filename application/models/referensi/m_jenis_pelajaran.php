<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_pelajaran extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisPelajaran(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_pelajaran');
	return $query->result_array();
	}

	public function addReferensiJenisPelajaran($data){
	$this->db->insert('tr_jenis_pelajaran',$data);
	}

	public function updateReferensiJenisPelajaran($data, $id){
		$this->db->where('id_jns_pelajaran', $id);
		$this->db->update('tr_jenis_pelajaran', $data);
	}

	public function preUpdateReferensiJenisPelajaran($id) {
		$this->db->where('id_jns_pelajaran', $id);
		$query = $this->db->get('tr_jenis_pelajaran');
		return $query->result_array();
	}

	public function deleteReferensiJenisPelajaran($id){
		$this->db->where('id_jns_pelajaran', $id);
		$this->db->delete('tr_jenis_pelajaran');
	}

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */