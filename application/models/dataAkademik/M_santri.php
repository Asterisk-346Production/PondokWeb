<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_santri extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectTdSantri(){
		$this->db->select('*');
		$this->db->from('td_santri');
		$this->db->join('tr_jenis_santri','td_santri.id_jns_santri = tr_jenis_santri.id_jns_santri');
		$query =  $this->db->get();
		return $query->result_array();
	}

	public function updateTdSantri($nis,$data){
		$this->db->where('nis', $nis);
		$this->db->update('td_santri', $data);
	}

	public function preUpdateTdSantri($nis) {
		$this->db->select('*');
		$this->db->from('td_santri');
		$this->db->join('tr_jenis_santri', 'td_santri.id_jns_santri = tr_jenis_santri.id_jns_santri');
		$this->db->where('nis', $nis);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function addTdSantri($data){
		$this->db->insert('td_santri', $data);
	}

	public function deleteSantri($nis){
		// $this->db->where('id_td_santri', $id);
		$this->db->where('nis', $nis);
		$this->db->delete('td_santri');
	}
}

/* End of file M_santri.php */
/* Location: ./application/models/dataAkademik/M_santri.php */