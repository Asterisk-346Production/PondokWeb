<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_ruangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_ruangan');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['title'] = "List Referensi Jenis Ruangan";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Ruangan";
		$data['body'] = "referensi/jenis_ruangan/select_jenis_ruangan";

		$data['m_jenis_ruangan'] = $this->M_jenis_ruangan->selectReferensiJenisRuangan();

		custom_layout($data);
	}

	public function addReferensiJenisRuangan(){
		$data['title'] = "Add Referensi Jenis Ruangan";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Ruangan";
		$data['body'] = "referensi/jenis_ruangan/insert_jenis_ruangan";
		custom_layout($data);
	}

	public function doInsertReferensiJenisRuangan(){
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('uraian_en', 'uraian_en', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'6',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_ruangan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_ruangan/addReferensiJenisRuangan');
		} else {
			$dataLog = array(
				'id_proses'=>'6',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_ruangan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'uraian_en' =>$this->input->post('uraian_en'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_ruangan->addReferensiJenisRuangan($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_ruangan');
		}
	}

	public function updateReferensiJenisRuangan(){
		$data['title'] = "Update Referensi Jenis Ruangan";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Ruangan";
		$data['body'] = "referensi/jenis_ruangan/update_jenis_ruangan";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_ruangan'] = $this->M_jenis_ruangan->preUpdateReferensiJenisRuangan($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisruangan(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('uraian_en','uraian_en','trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'6',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_ruangan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_ruangan/updateReferensiJenisRuangan');
		} else {
			$dataLog = array(
				'id_proses'=>'6',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_ruangan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'uraian_en' => $this->input->post('uraian_en'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_ruangan->updateReferensiJenisRuangan($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_ruangan');
		}
	}

	public function deleteReferensiJenisruangan(){
		$id = $this->uri->segment(4);
		$this->M_jenis_ruangan->deleteReferensiJenisRuangan($id);

		$dataLog = array(
				'id_proses'=>'6',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_ruangan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_ruangan');
	}
}

/* End of file referensi_jenis_pembayaran.php */
/* Location: ./application/controllers/referensi/referensi_jenis_pembayaran.php */
