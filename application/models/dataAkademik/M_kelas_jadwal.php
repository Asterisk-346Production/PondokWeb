<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas_jadwal extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function addTdKelasJadwal($data){
		$this->db->insert('td_kelas_jadwal', $data);
	}

	public function selectTdKelasJadwal(){
		$this->db->select('*');
		$this->db->from('td_kelas_jadwal');
		$query = $this->db->get();
		return $query->result_array();
	}

}

/* End of file M_kelas_jadwal.php */
/* Location: ./application/models/dataAkademik/M_kelas_jadwal.php */