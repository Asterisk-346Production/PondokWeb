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

	public function santriHasNotClass(){
		$querying = "select td_santri.nis,td_santri.nama from td_santri where not exists(select nis from td_kelas_dtl where td_kelas_dtl.nis = td_santri.nis)";
		
		$query  = $this->db->query($querying);
		return $query->result_array();
	}
}

/* End of file M_santri.php */
/* Location: ./application/models/dataAkademik/M_santri.php */