<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selectTdKelas(){
		$this->db->select('*');
		$this->db->from('td_kelas');
		$this->db->join('tr_jenis_kelas','td_kelas.id_jns_kelas = tr_jenis_kelas.id_jns_kelas');
		$query =  $this->db->get();
		return $query->result_array();
	}

	public function updateTdKelas($id,$data){
		$this->db->where('id_kelas', $id);
		$this->db->update('td_kelas', $data);
	}

	public function preUpdateTdKelas($id) {
		$this->db->where('id_kelas', $id);
		$query = $this->db->get('td_kelas');
		return $query->result_array();
	}

	public function addTdKelas($data){
		$this->db->insert('td_kelas', $data);
	}

	public function deleteKelas($id){
		$this->db->where('id_kelas', $id);
		$this->db->delete('td_kelas');
	}

}

/* End of file M_kelas.php */
/* Location: ./application/models/dataAkademik/M_kelas.php */