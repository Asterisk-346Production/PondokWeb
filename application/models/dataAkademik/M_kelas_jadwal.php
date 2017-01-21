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
		$last_id =  $this->db->insert_id();
		return $last_id;
	}

	public function addTdKelasJadwalDetail($data){
		$this->db->insert('td_kelas_jadwal_dtl',$data);
	}

	public function selectTdKelasJadwal(){
		$this->db->select('*');
		$this->db->from('td_kelas_jadwal');
		$query = $this->db->get();
		return $query->result_array();
	}


	public function allSelectRelationTdKelasJadwal(){
		/*
			fix using this 13/01/2017
			select * from td_kelas_jadwal a
			join tr_jenis_pelajaran on a.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran
			join td_kelas_jadwal_dtl on a.id_kelas_jadwal = td_kelas_jadwal_dtl.id_kelas_jadwal
			join td_ruangan on a.id_ruangan = td_ruangan.id_ruangan
			join td_kelas on a.id_kelas = td_kelas.id_kelas
			join tr_jenis_jadwal on a.id_jns_jadwal = tr_jenis_jadwal.id_jns_jadwal
			join tr_hari on td_kelas_jadwal_dtl.id_jns_hari = tr_hari.id_jns_hari
			join tr_jenis_jam on td_kelas_jadwal_dtl.id_jns_jam = tr_jenis_jam.id_jns_jam
		*/

		$this->db->select('*,tr_jenis_pelajaran.uraian as uraian_jp, tr_jenis_jadwal.uraian as uraian_jj, tr_hari.uraian as uraian_jh,
			td_ruangan.nama as nama_kelas, tr_jenis_ruangan.uraian as uraian_jr');
		$this->db->from('td_kelas_jadwal');
		$this->db->join('tr_jenis_pelajaran', 'td_kelas_jadwal.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran');
		$this->db->join('td_kelas_jadwal_dtl', 'td_kelas_jadwal.id_kelas_jadwal = td_kelas_jadwal_dtl.id_kelas_jadwal');
		$this->db->join('td_ruangan_jadwal', 'td_kelas_jadwal.id_kelas_jadwal = td_ruangan_jadwal.id_kelas_jadwal');
		$this->db->join('td_ruangan', 'td_ruangan_jadwal.id_ruangan = td_ruangan.id_ruangan');
		$this->db->join('tr_jenis_ruangan', 'td_ruangan.id_jns_ruangan = tr_jenis_ruangan.id_jns_ruangan', 'left');
		$this->db->join('td_kelas', 'td_kelas_jadwal.id_kelas = td_kelas.id_kelas');
		$this->db->join('tr_jenis_jadwal', 'td_kelas_jadwal.id_jns_jadwal = tr_jenis_jadwal.id_jns_jadwal');
		$this->db->join('tr_hari', 'td_kelas_jadwal_dtl.id_jns_hari = tr_hari.id_jns_hari');
		$this->db->join('tr_jenis_jam', 'td_kelas_jadwal_dtl.id_jns_jam = tr_jenis_jam.id_jns_jam');
	 	
	 	$query = $this->db->get();
	 	return $query->result_array();
	}

	public function allSelectRelationTdKelasJadwalWhere($id){
		/* 
			select * from td_kelas_jadwal a
			join tr_jenis_pelajaran on a.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran
			join td_kelas_jadwal_dtl on a.id_kelas_jadwal = td_kelas_jadwal_dtl.id_kelas_jadwal
			join td_ruangan on a.id_ruangan = td_ruangan.id_ruangan
			join td_kelas on a.id_kelas = td_kelas.id_kelas
			join tr_jenis_jadwal on a.id_jns_jadwal = tr_jenis_jadwal.id_jns_jadwal
			join tr_hari on td_kelas_jadwal_dtl.id_jns_hari = tr_hari.id_jns_hari
			join tr_jenis_jam on td_kelas_jadwal_dtl.id_jns_jam = tr_jenis_jam.id_jns_jam
			where a.id_kelas_jadwal ='1'
		*/
		$this->db->select('*,tr_jenis_pelajaran.uraian as uraian_jp, tr_jenis_jadwal.uraian as uraian_jj, tr_hari.uraian as uraian_jh,
			td_ruangan.nama as nama_kelas, tr_jenis_ruangan.uraian as uraian_jr');
		$this->db->from('td_kelas_jadwal');
		$this->db->join('tr_jenis_pelajaran', 'td_kelas_jadwal.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran');
		$this->db->join('td_kelas_jadwal_dtl', 'td_kelas_jadwal.id_kelas_jadwal = td_kelas_jadwal_dtl.id_kelas_jadwal');
		$this->db->join('td_ruangan_jadwal', 'td_kelas_jadwal.id_kelas_jadwal = td_ruangan_jadwal.id_kelas_jadwal');
		$this->db->join('td_ruangan', 'td_ruangan_jadwal.id_ruangan = td_ruangan.id_ruangan');
		$this->db->join('tr_jenis_ruangan', 'td_ruangan.id_jns_ruangan = tr_jenis_ruangan.id_jns_ruangan', 'left');
		$this->db->join('td_kelas', 'td_kelas_jadwal.id_kelas = td_kelas.id_kelas');
		$this->db->join('tr_jenis_jadwal', 'td_kelas_jadwal.id_jns_jadwal = tr_jenis_jadwal.id_jns_jadwal');
		$this->db->join('tr_hari', 'td_kelas_jadwal_dtl.id_jns_hari = tr_hari.id_jns_hari');
		$this->db->join('tr_jenis_jam', 'td_kelas_jadwal_dtl.id_jns_jam = tr_jenis_jam.id_jns_jam');
		$this->db->where('id_kelas_jadwal', $id);

		$query = $this->db->get();
	 	return $query->result_array();
	}

	public function allSelectRelationTdKelasJadwalWhere2($id){
		/* 
			select * from td_kelas_jadwal a
			join tr_jenis_pelajaran on a.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran
			join td_kelas_jadwal_dtl on a.id_kelas_jadwal = td_kelas_jadwal_dtl.id_kelas_jadwal
			join td_ruangan on a.id_ruangan = td_ruangan.id_ruangan
			join td_kelas on a.id_kelas = td_kelas.id_kelas
			join tr_jenis_jadwal on a.id_jns_jadwal = tr_jenis_jadwal.id_jns_jadwal
			join tr_hari on td_kelas_jadwal_dtl.id_jns_hari = tr_hari.id_jns_hari
			join tr_jenis_jam on td_kelas_jadwal_dtl.id_jns_jam = tr_jenis_jam.id_jns_jam
			where a.id_kelas_jadwal ='1'
		*/
		$this->db->select('*,tr_jenis_pelajaran.uraian as uraian_jp, tr_jenis_jadwal.uraian as uraian_jj, tr_hari.uraian as uraian_jh,
			td_ruangan.nama as nama_kelas, tr_jenis_ruangan.uraian as uraian_jr');
		$this->db->from('td_kelas_jadwal');
		$this->db->join('tr_jenis_pelajaran', 'td_kelas_jadwal.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran');
		$this->db->join('td_kelas_jadwal_dtl', 'td_kelas_jadwal.id_kelas_jadwal = td_kelas_jadwal_dtl.id_kelas_jadwal');
		$this->db->join('td_ruangan_jadwal', 'td_kelas_jadwal.id_kelas_jadwal = td_ruangan_jadwal.id_kelas_jadwal');
		$this->db->join('td_ruangan', 'td_ruangan_jadwal.id_ruangan = td_ruangan.id_ruangan');
		$this->db->join('tr_jenis_ruangan', 'td_ruangan.id_jns_ruangan = tr_jenis_ruangan.id_jns_ruangan', 'left');
		$this->db->join('td_kelas', 'td_kelas_jadwal.id_kelas = td_kelas.id_kelas');
		$this->db->join('tr_jenis_jadwal', 'td_kelas_jadwal.id_jns_jadwal = tr_jenis_jadwal.id_jns_jadwal');
		$this->db->join('tr_hari', 'td_kelas_jadwal_dtl.id_jns_hari = tr_hari.id_jns_hari');
		$this->db->join('tr_jenis_jam', 'td_kelas_jadwal_dtl.id_jns_jam = tr_jenis_jam.id_jns_jam');
		$this->db->where('td_kelas_jadwal.id_kelas', $id);

		$query = $this->db->get();
	 	return $query->result_array();
	}

}

/* End of file M_kelas_jadwal.php */
/* Location: ./application/models/dataAkademik/M_kelas_jadwal.php */