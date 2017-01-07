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

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */