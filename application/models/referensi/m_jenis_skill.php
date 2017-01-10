<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_skill extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisSkill(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_skill');
	return $query->result_array();
	}

	public function addReferensiJenisSkill($data){
	$this->db->insert('tr_jenis_skill',$data);
	}

	public function updateReferensiJenisSkill($data, $id){
		$this->db->where('id_jns_skill', $id);
		$this->db->update('tr_jenis_skill', $data);
	}

	public function preUpdateReferensiJenisSkill($id) {
		$this->db->where('id_jns_skill', $id);
		$query = $this->db->get('tr_jenis_skill');
		return $query->result_array();
	}

	public function deleteReferensiJenisSkill($id){
		$this->db->where('id_jns_skill', $id);
		$this->db->delete('tr_jenis_skill');
	}

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */