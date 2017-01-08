<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_transaksi extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function selectReferensiJenisTransaksi(){
		$this->db->select('*');
		$query = $this->db->get('tr_jenis_transaksi');
		return $query->result_array();
	}

	public function addReferensiJenisTransaksi($data){
		$this->db->insert('tr_jenis_transaksi',$data);
	}

	public function updateReferensiJenisTransaksi($data, $id){
		$this->db->where('id_jns_transaksi', $id);
		$this->db->update('tr_jenis_transaksi', $data);
	}

	public function preUpdateReferensiJenisTransaksi($id) {
		$this->db->where('id_jns_transaksi', $id);
		$query = $this->db->get('tr_jenis_transaksi');
		return $query->result_array();
	}

	public function deleteReferensiJenisTransaksi($id){
		$this->db->where('id_jns_transaksi', $id);
		$this->db->delete('tr_jenis_transaksi');
	}
}

/* End of file m_jenis_transaksi.php */
/* Location: ./application/models/referensi/m_jenis_transaksi.php */