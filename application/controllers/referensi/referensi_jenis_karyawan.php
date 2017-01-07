<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_karyawan');
		$this->load->model('log/M_log');
		if(! $this->session->userdata('logged_in')){
			redirect('');
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['m_jenis_karyawan'] = $this->M_jenis_karyawan->selectReferensiJenisKaryawan();
		$this->load->view('referensi/jenis_karyawan/select_jenis_karyawan', $data);
	}

	public function addReferensiJenisKaryawan(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$this->load->view('referensi/jenis_karyawan/insert_jenis_karyawan', $data);
	}

	public function doInsertReferensiJenisKaryawan(){
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
				'nama_form' => 'referensi_jenis_karyawan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_karyawan/addReferensiJenisKaryawan');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_karyawan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_karyawan->addReferensiJenisKaryawan($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_karyawan');
		}
	}
	
	public function updateReferensiJenisKaryawan(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_karyawan'] = $this->M_jenis_karyawan->preUpdateReferensiJenisKaryawan($id);
		$this->load->view('referensi/jenis_karyawan/update_jenis_karyawan', $data);
	}

	public function doUpdateReferensiJenisKaryawan(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_karyawan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_karyawan/updateReferensiJenisKaryawan');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_karyawan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_karyawan->updateReferensiJenisKaryawan($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_karyawan');
		}
	}

	public function deleteReferensiJenisKaryawan(){
		$id = $this->uri->segment(4);
		$this->M_jenis_karyawan->deleteReferensiJenisKaryawan($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_karyawan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_karyawan');
	}

}

/* End of file referensi_jenis_karyawan.php */
/* Location: ./application/controllers/referensi/referensi_jenis_karyawan.php */