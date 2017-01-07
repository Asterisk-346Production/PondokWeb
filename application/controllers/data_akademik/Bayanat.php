<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayanat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in'))
		{
			redirect();
		}
		$this->load->model('bayanat/M_bayanat');
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$this->load->view('bayanat/select_bayanat', $data);
	}

	public function addBayanat(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$this->load->view('bayanat/insert_bayanat', $data);
	}

	public function doAddBayanat(){

	}

	public function updateBayanat(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$this->load->view('bayanat/update_bayanat', $data);
	}

	public function doUpadteBayanat(){

	}

	public function deleteBayanat(){

		$id = $this->uri->segment(4);
		$this->M_jenis_karyawan->deleteReferensiJenisKaryawan($id);

		$dataLog = array(
				'id_proses'=>'01',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_karyawan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('bayanat/bayanat');	
	}
}

/* End of file Bayanat.php */
/* Location: ./application/controllers/data_akademik/Bayanat.php */