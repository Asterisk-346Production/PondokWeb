<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kkm extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selectTrKKM(){
		$this->db->select('*');
		$this->db->from('tr_kkm');
		$this->db->join('td_tahun_ajaran', 'tr_kkm.id_ta = td_tahun_ajaran.id_ta');
		$this->db->join('tr_jenis_pelajaran', 'tr_kkm.id_jns_pelajaran = td_tahun_ajaran.id_jns_pelajaran');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function inserTrKKM($data){
		$this->db->insert('tr_kkm', $data);
	}

	public function preUpdateTrKKM($id){
		$this->db->select('*');
		$this->db->from('tr_kkm');
		$this->db->join('td_tahun_ajaran', 'tr_kkm.id_ta = td_tahun_ajaran.id_ta');
		$this->db->join('tr_jenis_pelajaran', 'tr_kkm.id_jns_pelajaran = td_tahun_ajaran.id_jns_pelajaran');
		$this->db->where('id_kkm', $id);
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function updateTrKKM($id,$data){
		$this->db->where('id_kkm', $id);
		$this->db->update('tr_kkm', $data);
	}

	public function deleteTrKKm($id){
		$this->db->where('id_kkm', $id);
		$this->db->delete('tr_kkm');
	}
}

/* End of file m_kkm.php */
/* Location: ./application/models/referensi/m_kkm.php */