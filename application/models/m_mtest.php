<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_mtest extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getSemester($semester){

		$retVal = false;
		if($semester != null){
			$this->db->distinct();
			$this->db->select('semester');
			$this->db->from('td_kelas_jadwal');
			$query = $this->db->get();
			if($query->num_rows()> 0){
				 $retVal = true;
				 return $retVal;
			}else{
				return $retVal;
			}
		}else{
			return $retVal;
		}
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

	public function getKelas2(){
		$this->db->distinct();
		$this->db->select('tr_jenis_kelas.uraian,tr_jenis_kelas.id_jns_kelas');
		$this->db->from('td_kelas_jadwal');
		$this->db->join('td_kelas', 'td_kelas_jadwal.id_kelas = td_kelas.id_kelas');
    	$this->db->join('tr_jenis_kelas', 'td_kelas.id_jns_kelas = tr_jenis_kelas.id_jns_kelas');
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

	public function getPelaJaran2($id){
		$this->db->distinct();
		$this->db->select('uraian');
		$this->db->from('tr_jenis_pelajaran');
		$this->db->where('id_jns_pelajaran', $id);
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

	public function getNilaiKelas($semester,$id_jns_jadwal)
	{
		$this->db->select('td_kelas_nilai.nilai_akhir, td_santri.nis, td_santri.nama,tr_jenis_pelajaran.uraian,tr_jenis_jadwal.uraian as uraian_jj ');
		$this->db->from('td_kelas_nilai');
		$this->db->join('td_kelas_jadwal', 'td_kelas_nilai.id_kelas_jadwal = td_kelas_jadwal.id_kelas_jadwal');
		$this->db->join('td_santri', 'td_kelas_nilai.nis = td_santri.nis');
		$this->db->join('tr_jenis_pelajaran', 'td_kelas_jadwal.id_jns_pelajaran = tr_jenis_pelajaran.id_jns_pelajaran');
		$this->db->join('tr_jenis_jadwal', 'td_kelas_jadwal.id_jns_jadwal = tr_jenis_jadwal.id_jns_jadwal');
		$this->db->where('td_kelas_jadwal.semester', $semester);
		$this->db->where('td_kelas_jadwal.id_jns_jadwal', $id_jns_jadwal);
		$query = $this->db->get();
		return $query->result_array();
		// $this->db->join('Table', 'table.column = table.column', 'left');
		// $this->db->where('td_kelas_jadwal.id_kelas_jadwal', $id_kelas_jadwal);

	}

	public function getNilaiBlanko2($id_kelas_jadwal){

		// $this->M_mtest->getNilaiBlanko2($semester, $item['uraian'], $dataitem['uraian']);

		$this->db->select('td_kelas_nilai.nilai_akhir');
		$this->db->from('td_kelas_jadwal');
		// $this->db->join('td_kelas', 'td_kelas_jadwal.id_kelas = td_kelas.id_kelas');
		$this->db->join('td_kelas_nilai', 'td_kelas_jadwal.id_kelas_jadwal = td_kelas_nilai.id_kelas_jadwal');
		// $this->db->join('tr_jenis_kelas', 'td_kelas.id_jns_kelas = tr_jenis_kelas.id_jns_kelas');
		// $this->db->where('td_kelas_jadwal.id_kelas', $id_kelas);
		// $this->db->where('td_kelas_jadwal.semester', $semester);
		// $this->db->where('td_kelas_jadwal.id_jns_pelajaran', $id_jns_pelajaran);
		$this->db->where('td_kelas_jadwal.id_kelas_jadwal', $id_kelas_jadwal);
		$query =$this->db->get();
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
