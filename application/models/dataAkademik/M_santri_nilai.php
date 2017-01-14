<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_santri_nilai extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function selectTdSantriNilai(){
		$this->db->select('s.nis as nis, s.nama as santri, jp.uraian as pelajaran, jj.uraian as jadwal, sn.nilai_akhir as nilai_akhir, sn.id_santri_nilai as id');
		$this->db->from('td_santri_nilai as sn');
		$this->db->join('tr_jenis_pelajaran as jp', 'sn.id_jns_pelajaran = jp.id_jns_pelajaran');
		$this->db->join('tr_jenis_jadwal as jj', 'sn.id_jns_jadwal = jj.id_jns_jadwal');
		$this->db->join('td_santri as s', 'sn.nis = s.nis');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function addTdSantriNilai($data){
		$this->db->insert('td_santri_nilai', $data);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function addTdKelasNilaionSantriNilai($data){
		$this->db->insert('td_kelas_nilai', $data);
	}

	public function preUpdateTdSantriNilai($id){
		$this->db->select('*');
		$this->db->from('td_santri_nilai');
		$this->db->join('tr_jenis_pelajaran', 'td_santri_nilai.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran');
		$this->db->join('tr_jenis_jadwal', 'td_santri_nilai.id_jns_jadwal = tr_jenis_jadwal.id_jns_jadwal');
		$this->db->join('td_santri', 'td_santri_nilai.nis = td_santri.nis');
		$this->db->where('id_santri_nilai', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function updateTdSantriNilai($id,$data){
		$this->db->where('id_santri_nilai', $id);
		$this->db->update('td_santri_nilai', $data);
	}

	public function deleteTdSantriNilai($id){
		$this->db->where('id_santri_nilai', $id);
		$this->db->delete('td_santri_nilai');
	}

}

/* End of file M_santri_nilai.php */
/* Location: ./application/models/dataAkademik/M_santri_nilai.php */
