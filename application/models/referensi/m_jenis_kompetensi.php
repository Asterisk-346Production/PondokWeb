<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_kompetensi extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisKomptensi(){
	$this->db->select('*');
	$query = $this->db->get('tr_jenis_kompetensi');
	return $query->result_array();
	}

	public function addReferensiJenisKomptensi($data){
	$this->db->insert('tr_jenis_kompetensi',$data);
	}

	public function updateReferensiJenisKompetensi($data, $id){
		$this->db->where('id_jns_kompetensi', $id);
		$this->db->update('tr_jenis_kompetensi', $data);
	}

	public function preUpdateReferensiJenisKompetensi($id) {
		$this->db->where('id_jns_kompetensi', $id);
		$query = $this->db->get('tr_jenis_kompetensi');
		return $query->result_array();
	}

	public function deleteReferensiJenisKompetensi($id){
		$this->db->where('id_jns_kompetensi', $id);
		$this->db->delete('tr_jenis_kompetensi');
	}

}

/* End of file m_jenis_kompetensi.php */
/* Location: ./application/models/referensi/m_jenis_kompetensi.php */