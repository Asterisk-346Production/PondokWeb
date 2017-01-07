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

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */