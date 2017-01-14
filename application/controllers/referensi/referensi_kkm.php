<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_kkm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
		$this->load->model('log/M_log');
		$this->load->model('referensi/M_kkm');
		$this->load->model('referensi/M_jenis_pelajaran');
		$this->load->model('dataAkademik/M_tahun_ajaran');
	}

	public function index()
	{
		$data['title'] = "List Referensi KKM Pelajaran";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_KKM";
		$data['body'] = "referensi/kkm/select_kkm";

		$data['m_jenis_beasiswa'] = $this->M_kkm->selectTrKKM();

		custom_layout($data);
	}

	public function addTrKKM(){
		$data['title'] = "Add Referensi KKM Pelajaran";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_KKM";
		$data['body'] = "referensi/kkm/insert_kkm";

		$data['m_jenis_pelajaran'] = $this->M_jenis_pelajaran->selectReferensiJenisPelajaran();
		$data['m_tahun_ajaran'] = $this->M_tahun_ajaran->selectTdTahunAjaran();

		custom_layout($data);
	}

	public function doInsertTrKKM(){
		redirecet();
	}

	public function delteTrKKM(){
		$id =  $this->uri->segment(4);
		$this->M_kkm->deleteTrKKm($id);
		redirect('referensi/referensi_kkm');
	}

}

/* End of file referensi_kkm.php */
/* Location: ./application/controllers/referensi/referensi_kkm.php */