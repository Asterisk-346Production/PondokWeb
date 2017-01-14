<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kkm extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selectTrKKM(){
		$this->db->select('kkm.id_kkm as id_kkm, kkm.nilai as nilai, ta.tahun_awal as tahun_awal, ta.tahun_akhir as tahun_akhir, jp.uraian as uraian, jp.uraian_en as uraian_en, jp.uraian_ar as uraian_ar');
		$this->db->from('tr_kkm as kkm');
		$this->db->join('td_tahun_ajaran as ta', 'kkm.id_ta = ta.id_ta');
		$this->db->join('tr_jenis_pelajaran as jp', 'kkm.id_jns_pelajaran = jp.id_jns_pelajaran');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function inserTrKKM($data){
		$this->db->insert('tr_kkm', $data);
	}

	public function preUpdateTrKKM($id){
		$this->db->where('id_kkm', $id);
		$query = $this->db->get('tr_kkm');
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
