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


	public function allSelectRelationTdKelasJadwal(){
		$this->db->select('*');
		$this->db->from('td_kelas_jadwal');
		$this->db->join('td_kelas', 'td_kelas_jadwal.id_kelas = td_kelas.id_kelas');
		$this->db->join('tr_jns_pelajaran', 'td_kelas_jadwal.id_jns_pelajaran = tr_jns_pelajaran.id_jns_pelajaran');
		$this->db->join('tr_jns_jadwal', 'td_kelas_jadwal.id_jns_jadwal = tr_jns_jadwal.id_jns_jadwal');
		$this->db->join('td_ruangan_jadwal', 'td_kelas_jadwal.id_ruangan_jadwal = td_ruangan_jadwal.id_ruangan_jadwal');
		$this->db->join('td_kelas_jadwal_dtl','td_kelas_jadwal.id_kelas_jadwal = td_kelas_jadwal_dtl.id_kelas_jadwal');
	 	$query = $this->db->get();
	 	return $query->result_array();
	}

}

/* End of file M_kelas_jadwal.php */
/* Location: ./application/models/dataAkademik/M_kelas_jadwal.php */