<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas_detail extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

	public function selectTdKelasDetail($id){
		$this->db->select('*');
		$this->db->from('td_kelas_dtl');
		$this->db->join('td_kelas', 'td_kelas_dtl.id_kelas = td_kelas.id_kelas');
		$this->db->join('td_santri', 'td_kelas_dtl.nis = td_santri.nis');
		$this->db->where('td_kelas_dtl.id_kelas', $id);
		$query = $this->db->get();
		return $query->result_array();
	}	

	public function preUpdateTdKelasDetail($id){
		$this->db->select('*');
		$this->db->from('td_kelas_dtl');
		$this->db->join('td_kelas', 'td_kelas_dtl.id_kelas = td_kelas.id_kelas');
		$this->db->join('td_santri', 'td_kelas_dtl.nis = td_santri.nis');
		$this->db->where('td_kelas_dtl.id_kelas', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function addTdKelasDetail($data){
		$this->db->insert('td_kelas_dtl', $data);
	}

	public function updateTdKelasDetail($id,$data){
		$this->db->update('td_kelas_dtl', $data);
		$this->db->where('id_kelas_dtl', $id);
	}

	public function deleteTdKelasDetail($id){
		$this->db->delete('td_kelas_dtl');
		$this->db->where('id_kelas_dtl', $id);
	}

}

/* End of file M_kelas_detail.php */
/* Location: ./application/models/dataAkademik/M_kelas_detail.php */