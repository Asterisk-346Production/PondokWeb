<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_wali extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_wali');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis Wali";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Wali";
		$data['body'] = "referensi/jenis_wali/select_jenis_wali";

		$data['m_jenis_wali'] = $this->M_jenis_wali->selectReferensiJenisWali();

		custom_layout($data);
	}

	public function addReferensiJenisWali(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis Wali";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Wali";
		$data['body'] = "referensi/jenis_wali/insert_jenis_wali";
		custom_layout($data);
	}

	public function doInsertReferensiJenisWali(){
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
				'nama_form' => 'referensi_jenis_wali',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_wali/addReferensiJenisWali');
		} else {
			$dataLog = array(
				'id_proses'=>'11',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_wali',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_wali->addReferensiJenisWali($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_wali');
		}
	}

	public function updateReferensiJenisWali(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis Wali";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Wali";
		$data['body'] = "referensi/jenis_wali/update_jenis_wali";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_wali'] = $this->M_jenis_wali->preUpdateReferensiJenisWali($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJeniswali(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'11',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_wali',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_wali/updateReferensiJenisWali');
		} else {
			$dataLog = array(
				'id_proses'=>'11',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_wali',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_wali->updateReferensiJenisWali($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_wali');
		}
	}

	public function deleteReferensiJenisWali(){
		$id = $this->uri->segment(4);
		$this->M_jenis_wali->deleteReferensiJenisWali($id);

		$dataLog = array(
				'id_proses'=>'11',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_wali',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_wali');
	}
}

/* End of file referensi_jenis_pembayaran.php */
/* Location: ./application/controllers/referensi/referensi_jenis_pembayaran.php */
