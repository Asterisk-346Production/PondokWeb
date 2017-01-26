<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ruangan extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selectTdRuangan(){
		$this->db->select('*');
		$this->db->from('td_ruangan');
		$this->db->join('tr_jenis_ruangan','td_ruangan.id_jns_ruangan = tr_jenis_ruangan.id_jns_ruangan');
		$query =  $this->db->get();
		return $query->result_array();
	}

	public function updateTdRuangan($id,$data){
		$this->db->where('id_ruangan', $id);
		$this->db->update('td_ruangan', $data);
	}

	public function preUpdateTdRuangan($id) {
		$this->db->where('id_ruangan', $id);
		$query = $this->db->get('td_ruangan');
		return $query->result_array();
	}

	public function addTdRuangan($data){
		$this->db->insert('td_ruangan', $data);
	}

	public function deleteRuangan($id){
		$this->db->where('id_ruangan', $id);
		$this->db->delete('td_ruangan');
	}

	public function addTdRuanganJadwal($data){
		$this->db->insert('td_ruangan_jadwal', $data);
	}


}

/* End of file M_ruangan.php */
/* Location: ./application/models/dataAkademik/M_ruangan.php */