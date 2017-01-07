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

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */