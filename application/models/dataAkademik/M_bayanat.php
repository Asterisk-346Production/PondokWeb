<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bayanat extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function addTdBayanat($data){
		$this->db->insert('td_bayanat', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function addTdKelasNilaionBayanat($data){
		$this->db->insert('td_kelas_nilai', $data);
	}

	public function selectTdBayanat(){
		$this->db->select('*');
		$this->db->from('td_bayanat');
		$this->db->join('td_kelas_jadwal','td_bayanat.id_kelas_jadwal = td_kelas_jadwal.id_kelas_jadwal');
		$this->db->join('td_santri','td_bayanat.nis = td_santri.nis');
		$query =  $this->db->get();
		return $query->result_array();
	}

	public function deleteTdBayanat($id){
		$this->db->where('id_bayanat', $id);
		$this->db->delete('td_bayanat');
	}
}

/* End of file M_bayanat.php */
/* Location: ./application/models/dataAkademik/M_bayanat.php */