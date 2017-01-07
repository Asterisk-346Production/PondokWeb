<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mtest extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getTA($tahun_ajaran){
		if($tahun_ajaran == null || $tahun_ajaran == ""){
			$month = date('n');
			$year = ($month <= 6 ? (date('y') - 1)."".date('y') : date('y')."".(date('y') + 1));
			$semester = ($month <= 6 ? "_2" : "_1");

			$tahun_ajaran = $year."".$semester;
		}

		$this->db->distinct();
		$this->db->select('tahun_semester');
		$this->db->where('tahun_semester', $tahun_ajaran);
    $this->db->from('mtest');
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			return $tahun_ajaran;
		} else {
			return false;
		}
	}

	public function getKelas(){
		$this->db->distinct();
		$this->db->select('kelas');
    $this->db->from('mtest');
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getPelajaran($kelas){
		$this->db->distinct();
		$this->db->select('nm_pelajaran');
    $this->db->from('mtest');
		$this->db->where('kelas', $kelas);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function getNilai($tahun_ajaran, $kelas){
		if($tahun_ajaran == null || $tahun_ajaran == ""){
			$month = date('n');
			$year = ($month <= 6 ? (date('y') - 1)."".date('y') : date('y')."".(date('y') + 1));
			$semester = ($month <= 6 ? "_2" : "_1");

			$tahun_ajaran = $year."".$semester;
		}

		$this->db->select('*');
		$this->db->select('(n_ul1 + n_ul2 + n_uts + n_ul3 + n_ul4 + n_uas + n_semester) as total', false);
		$this->db->select('CAST(((n_ul1 + n_ul2 + n_uts + n_ul3 + n_ul4 + n_uas + n_semester) / 7) as DECIMAL(9,2)) as avg', false);
		$this->db->where('tahun_semester', $tahun_ajaran);
		$this->db->where('kelas', $kelas);
		$this->db->group_by('id');
		$query = $this->db->get('mtest');

		return $query->result_array();
	}

	public function getNilaiBlanko($tahun_ajaran, $kelas, $pelajaran){
		if($tahun_ajaran == null || $tahun_ajaran == ""){
			$month = date('n');
			$year = ($month <= 6 ? (date('y') - 1)."".date('y') : date('y')."".(date('y') + 1));
			$semester = ($month <= 6 ? "_2" : "_1");

			$tahun_ajaran = $year."".$semester;
		}

		$this->db->select('*');
		$this->db->where('tahun_semester', $tahun_ajaran);
		$this->db->where('kelas', $kelas);
		$this->db->where('nm_pelajaran', $pelajaran);
		$query = $this->db->get('mtest');

		return $query->result_array();
	}
}
