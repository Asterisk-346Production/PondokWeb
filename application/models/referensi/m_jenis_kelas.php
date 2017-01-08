<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_kelas extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisKelas(){
		$this->db->select('*');
		$query = $this->db->get('tr_jenis_kelas');
		return $query->result_array();
	}

	public function addReferensiJenisKelas($data){
		$this->db->insert('tr_jenis_kelas',$data);
	}

	public function updateReferensiJenisKelas($data, $id){
		$this->db->where('id_jns_kelas', $id);
		$this->db->update('tr_jenis_kelas', $data);
	}

	public function preUpdateReferensiJenisKelas($id) {
		$this->db->where('id_jns_kelas', $id);
		$query = $this->db->get('tr_jenis_kelas');
		return $query->result_array();
	}

	public function deleteReferensiJenisKelas($id){
		$this->db->where('id_jns_kelas', $id);
		$this->db->delete('tr_jenis_kelas');
	}
}

/* End of file m_jenis_kelas.php */
/* Location: ./application/models/referensi/m_jenis_kelas.php */