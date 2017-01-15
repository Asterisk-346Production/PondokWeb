<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_santri_wali extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selectTdSantriWali(){
		$this->db->select('td_santri_wali.*,s.nis as nis_santri, s.nama as nama_santri, tr_jenis_wali.*');
		$this->db->from('td_santri_wali');
		$this->db->join('td_santri as s', 'td_santri_wali.nis = s.nis');
		$this->db->join('tr_jenis_wali','td_santri_wali.id_jns_wali = tr_jenis_wali.id_jns_wali');
		$query =  $this->db->get();
		return $query->result_array();
	}

	public function updateTdSantriWali($id,$data){
		$this->db->where('id_santri_wali', $id);
		$this->db->update('td_santri_wali', $data);
	}

	public function preUpdateTdSantriWali($id) {
		$this->db->select('td_santri_wali.*,s.nis as nis_santri, s.nama as nama_santri, tr_jenis_wali.*');
		$this->db->from('td_santri_wali');
		$this->db->join('td_santri as s', 'td_santri_wali.nis = s.nis');
		$this->db->join('tr_jenis_wali','td_santri_wali.id_jns_wali = tr_jenis_wali.id_jns_wali');
		$this->db->where('id_santri_wali', $id);

		$query = $this->db->get();
		return $query->result_array();
	}

	public function addTdSantriWali($data){
		$this->db->insert('td_santri_wali', $data);
	}

	public function deleteSantriWali($id){
		$this->db->where('id_santri_wali', $id);
		// $this->db->where('nis', $nis);
		$this->db->delete('td_santri_wali');
	}

}

/* End of file M_santri_wali.php */
/* Location: ./application/models/dataAkademik/M_santri_wali.php */