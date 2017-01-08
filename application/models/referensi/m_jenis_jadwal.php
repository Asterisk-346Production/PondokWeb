<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_jadwal extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisJadwal(){
		$this->db->select('*');
		$query = $this->db->get('tr_jenis_jadwal');
		return $query->result_array();
	}

	public function addReferensiJenisJadwal($data){
		$this->db->insert('tr_jenis_jadwal',$data);
	}

	public function updateReferensiJenisJadwal($data, $id){
		$this->db->where('id_jns_jadwal', $id);
		$this->db->update('tr_jenis_jadwal', $data);
	}

	public function preUpdateReferensiJenisJadwal($id) {
		$this->db->where('id_jns_jadwal', $id);
		$query = $this->db->get('tr_jenis_jadwal');
		return $query->result_array();
	}

	public function deleteReferensiJenisJadwal($id){
		$this->db->where('id_jns_jadwal', $id);
		$this->db->delete('tr_jenis_jadwal');
	}
}

/* End of file m_jenis_jadwal.php */
/* Location: ./application/models/referensi/m_jenis_jadwal.php */