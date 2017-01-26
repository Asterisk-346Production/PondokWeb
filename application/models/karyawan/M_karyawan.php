<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_karyawan extends CI_Model {

	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}	

	public function selectTdKaryawan(){
		$this->db->select('td_karyawan.*,tr_jenis_karyawan.uraian as jk_uraian, tr_jenis_status.uraian as js_uraian');
		$this->db->from('td_karyawan');
		$this->db->join('tr_jenis_karyawan', 'td_karyawan.id_jns_karyawan = tr_jenis_karyawan.id_jns_karyawan');
		$this->db->join('tr_jenis_status', 'td_karyawan.id_jns_status = tr_jenis_status.id_jns_status', 'left');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function selectTdKaryawanKompetensi(){
		$this->db->select('td_karyawan_kompetensi.*, tr_jenis_pelajaran.uraian as jp_uraian, tr_jenis_komptensi.uraian as jk_uraian, tr_jenis_skill.uraian as js_uraian');
		$this->db->from('td_karyawan_kompetensi');
		$this->db->join('tr_jenis_pelajaran', 'td_karyawan_kompetensi.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran');
		$this->db->join('tr_jenis_komptensi', 'td_karyawan_kompetensi.id_jns_komptensi = tr_jenis_komptensi.id_jns_komptensi');
		$this->db->join('tr_jenis_skill', 'tr_jenis_pelajaran.id_jns_skill = tr_jenis_skill.id_jns_skill');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function selectTdKaryawanPendidikan(){
		$this->db->select('td_karyawan_pendidikan.*');
	}
}

/* End of file M_karyawan.php */
/* Location: ./application/models/karyawan/M_karyawan.php */