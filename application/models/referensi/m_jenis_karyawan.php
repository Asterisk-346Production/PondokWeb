<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_karyawan extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisKaryawan(){
		$this->db->select('*');
		$query = $this->db->get('tr_jenis_karyawan');
		return $query->result_array();
	}

	public function addReferensiJenisKaryawan($data){
		$this->db->insert('tr_jenis_karyawan',$data);
	}

	public function updateReferensiJenisKaryawan($data, $id){
		$this->db->where('id_jns_karyawan', $id);
		$this->db->update('tr_jenis_karyawan', $data);
	}

	public function preUpdateReferensiJenisKaryawan($id) {
		$this->db->where('id_jns_karyawan', $id);
		$query = $this->db->get('tr_jenis_karyawan');
		return $query->result_array();
	}

	public function deleteReferensiJenisKaryawan($id){
		$this->db->where('id_jns_karyawan', $id);
		$this->db->delete('tr_jenis_karyawan');
	}
}

/* End of file m_jenis_karyawan.php */
/* Location: ./application/models/referensi/m_jenis_karyawan.php */