<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ruangan_jadwal extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selectTdRuanganJadwal(){
		$this->db->select('*');
		$this->db->from('td_ruangan_jadwal');
		$this->db->join('td_ruangan', 'td_ruangan_jadwal.id_ruangan = td_ruangan.id_ruangan');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function insertTdRuanganJadwal($data){
		$this->db->insert('td_ruangan_jadwal', $data); 
	}

	//TABLE NYA DI DROP TERNYATA GA KEPAKE RUANGAN JADWAL

}

/* End of file M_ruangan_jadwal.php */
/* Location: ./application/models/dataAkademik/M_ruangan_jadwal.php */