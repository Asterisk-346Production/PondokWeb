<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tahun_ajaran extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selectTdTahunAjaran(){
		$this->db->select('*');
		$query = $this->db->get('td_tahun_ajaran');
		return $query->result_array();
	}

	public function addTdTahunAjaran($data){
		$this->db->insert('td_tahun_ajaran',$data);
	}

	public function updateTdTahunAjaran($data, $id){
		$this->db->where('id_ta', $id);
		$this->db->update('td_tahun_ajaran', $data);
	}

	public function preUpdateTdTahunAjaran($id) {
		$this->db->where('id_ta', $id);
		$query = $this->db->get('td_tahun_ajaran');
		return $query->result_array();
	}

	public function deleteTdTahunAjaran($id){
		$this->db->where('id_ta', $id);
		$this->db->delete('td_tahun_ajaran');
	}

}

/* End of file M_tahun_ajaran.php */
/* Location: ./application/models/dataAkademik/M_tahun_ajaran.php */