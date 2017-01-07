<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Print_nilai extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}	

	public function getNilaiSantri($id){
		$this->db->where('id_kelas_nilai', $id);
		$query = $this->db->select('td_kelas_nilai');
		return $query->result_array();
	}

	public function getListPelajaran($id){
		$this->db->where('id_jns_pelajaran', $id);
		$query = $this->db->select('tr_jenis_pelajran');
		return $query->result_array();
	}

	public function getListSantri($id){
		$this->db->where(' ', $Value);
	}

	public function getKelasJadwal(){

	}

	public function setNilaiSantri($data){

	}


}

/* End of file print_nilai.php */
/* Location: ./application/models/print_nilai.php */