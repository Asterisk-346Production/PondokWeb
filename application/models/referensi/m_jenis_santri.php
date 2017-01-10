<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_santri extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisSantri(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_santri');	
	return $query->result_array();
	}

	public function addReferensiJenisSantri($data){
	$this->db->insert('tr_jenis_santri',$data);
	}

	public function updateReferensiJenisSantri($data, $id){
		$this->db->where('id_jns_pelajaran', $id);
		$this->db->update('tr_jenis_pelajaran', $data);
	}

	public function preUpdateReferensiJenisSantri($id) {
		$this->db->where('id_jns_santri', $id);
		$query = $this->db->get('tr_jenis_santri');
		return $query->result_array();
	}

	public function deleteReferensiJenisSantri($id){
		$this->db->where('id_jns_santri', $id);
		$this->db->delete('tr_jenis_santri');
	}

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */