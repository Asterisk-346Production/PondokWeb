<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_ujian extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_ujian');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis Ujian";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Ujian";
		$data['body'] = "referensi/jenis_ujian/select_jenis_ujian";

		$data['m_jenis_ujian'] = $this->M_jenis_ujian->selectReferensiJenisUjian();

		custom_layout($data);
	}

	public function addReferensiJenisUjian(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis Ujian";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Ujian";
		$data['body'] = "referensi/jenis_ujian/insert_jenis_ujian";
		custom_layout($data);
	}

	public function doInsertReferensiJenisUjian(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_ujian',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_ujian/addReferensiJenisUjian');
		} else {
			$dataLog = array(
				'id_proses'=>'10',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_Ujian',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_ujian->addReferensiJenisUjian($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_ujian');
		}
	}

	public function updateReferensiJenisujian(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis Ujian";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Ujian";
		$data['body'] = "referensi/jenis_ujian/update_jenis_ujian";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_ujian'] = $this->M_jenis_ujian->preUpdateReferensiJenisUjian($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisUjian(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'10',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_ujian',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_ujian/updateReferensiJenisUjian');
		} else {
			$dataLog = array(
				'id_proses'=>'10',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_ujian',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_ujian->updateReferensiJenisUjian($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_ujian');
		}
	}

	public function deleteReferensiJenisUjian(){
		$id = $this->uri->segment(4);
		$this->M_jenis_ujian->deleteReferensiJenisUjian($id);

		$dataLog = array(
				'id_proses'=>'10',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_ujian',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_ujian');
	}
}

/* End of file referensi_jenis_pembayaran.php */
/* Location: ./application/controllers/referensi/referensi_jenis_pembayaran.php */
