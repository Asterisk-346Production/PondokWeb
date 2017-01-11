<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_hari extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_hari');
		$this->load->model('log/M_log');
		if(! $this->session->userdata('logged_in')){
			redirect('');
		}
	}

	public function index()
	{
		$data['title'] = "List Referensi Jenis hari";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Hari";
		$data['body'] = "referensi/jenis_hari/select_jenis_hari";

		$data['m_jenis_hari'] = $this->M_jenis_hari->selectReferensiJenishari();

		custom_layout($data);
	}

	public function addReferensiJenishari(){
		$data['title'] = "Add Referensi Jenis hari";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Hari";
		$data['body'] = "referensi/jenis_hari/insert_jenis_hari";
		custom_layout($data);
	}

	public function doInsertReferensiJenishari(){
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('uraian_en', 'uraian_en', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_hari',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_hari/addReferensiJenishari');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_hari',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'uraian_en'=>$this->input->post('uraian_en'));
			$this->M_jenis_hari->addReferensiJenishari($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_hari');
		}
	}

	public function updateReferensiJenishari(){
		$data['title'] = "Update Referensi Jenis hari";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Hari";
		$data['body'] = "referensi/jenis_hari/update_jenis_hari";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_hari'] = $this->M_jenis_hari->preUpdateReferensiJenishari($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenishari(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('uraian_en', 'uraian_en', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_hari',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_hari/updateReferensiJenishari');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_hari',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'uraian_en'=>$this->input->post('uraian_en'));
			$this->M_jenis_hari->updateReferensiJenishari($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_hari');
		}
	}

	public function deleteReferensiJenishari(){
		$id = $this->uri->segment(4);
		$this->M_jenis_hari->deleteReferensiJenishari($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_hari',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_hari');
	}
}

/* End of file referensi_jenis_hari.php */
/* Location: ./application/controllers/referensi/referensi_jenis_hari.php */
