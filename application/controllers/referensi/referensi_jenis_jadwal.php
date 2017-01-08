<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_jadwal');
		$this->load->model('log/M_log');
		if(! $this->session->userdata('logged_in')){
			redirect('');
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis jadwal";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_jadwal";
		$data['body'] = "referensi/jenis_jadwal/select_jenis_jadwal";

		$data['m_jenis_jadwal'] = $this->M_jenis_jadwal->selectReferensiJenisjadwal();

		custom_layout($data);
	}

	public function addReferensiJenisjadwal(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis jadwal";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_jadwal";
		$data['body'] = "referensi/jenis_jadwal/insert_jenis_jadwal";
		custom_layout($data);
	}

	public function doInsertReferensiJenisjadwal(){
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
				'nama_form' => 'referensi_jenis_jadwal',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_jadwal/addReferensiJenisjadwal');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_jadwal',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_jadwal->addReferensiJenisjadwal($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_jadwal');
		}
	}

	public function updateReferensiJenisjadwal(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis jadwal";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_jadwal";
		$data['body'] = "referensi/jenis_jadwal/update_jenis_jadwal";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_jadwal'] = $this->M_jenis_jadwal->preUpdateReferensiJenisjadwal($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisjadwal(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_jadwal',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_jadwal/updateReferensiJenisjadwal');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_jadwal',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_jadwal->updateReferensiJenisjadwal($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_jadwal');
		}
	}

	public function deleteReferensiJenisjadwal(){
		$id = $this->uri->segment(4);
		$this->M_jenis_jadwal->deleteReferensiJenisjadwal($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_jadwal',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_jadwal');
	}

}

/* End of file referensi_jenis_jadwal.php */
/* Location: ./application/controllers/referensi/referensi_jenis_jadwal.php */
