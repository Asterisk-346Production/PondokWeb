<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_pembayaran extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisPembayaran(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_pembayaran');
	return $query->result_array();
	}

	public function addReferensiJenisPembayaran($data){
	$this->db->insert('tr_jenis_pembayaran',$data);
	}

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */