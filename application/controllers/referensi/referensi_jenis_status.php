<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_status extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_status');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis Status";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Skill";
		$data['body'] = "referensi/jenis_status/select_jenis_status";

		$data['m_jenis_status'] = $this->M_jenis_status->selectReferensiJenisStatus();

		custom_layout($data);
	}

	public function addReferensiJenisStatus(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis Status";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Skill";
		$data['body'] = "referensi/jenis_status/insert_jenis_status";
		custom_layout($data);
	}

	public function doInsertReferensiJenisStatus(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'9',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_status',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_status/addReferensiJenisStatus');
		} else {
			$dataLog = array(
				'id_proses'=>'9',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_status',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_status->addReferensiJenisStatus($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_status');
		}
	}

	public function updateReferensiJenisstatus(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis Status";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Skill";
		$data['body'] = "referensi/jenis_status/update_jenis_status";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_status'] = $this->M_jenis_status->preUpdateReferensiJenisStatus($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisStatus(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'9',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_status',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_status/updateReferensiJenisStatus');
		} else {
			$dataLog = array(
				'id_proses'=>'9',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_status',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_status->updateReferensiJenisStatus($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_status');
		}
	}

	public function deleteReferensiJenisstatus(){
		$id = $this->uri->segment(4);
		$this->M_jenis_status->deleteReferensiJenisStatus($id);

		$dataLog = array(
				'id_proses'=>'9',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_status',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_status');
	}

}

/* End of file referensi_jenis_pembayaran.php */
/* Location: ./application/controllers/referensi/referensi_jenis_pembayaran.php */
