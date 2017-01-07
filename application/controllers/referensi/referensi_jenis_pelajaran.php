<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_pelajaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_pelajaran');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['m_jenis_pelajaran'] = $this->M_jenis_pelajaran->selectReferensiJenisPelajaran();
		$this->load->view('referensi/jenis_pelajaran/select_jenis_pelajaran', $data);
	}

	public function addReferensiJenisPelajaran(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$this->load->view('referensi/jenis_pelajaran/insert_jenis_pelajaran', $data);
	}

	public function doInsertReferensiJenisPelajaran(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_en', 'uraian_en', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$dataLog = array(
				'id_proses'=>'3',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_pelajaran',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);
		$this->session->set_flashdata('error', 'there is something wrong on yout field, please check again');
		redirect('referensi/referensi_jenis_pelajaran/addReferensiJenisKomptensi/');
		} else {
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_en'=> $this->input->post('uraian_en'),
				'uraian_ar' => $this->input->post('uraian_ar'));
			$dataLog = array(
				'id_proses'=>'3',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_pelajaran',
				'keterangan'=>'sukses',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_jenis_pelajaran->addReferensiJenisPelajaran($data);
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_pelajaran');
		}
	}

	public function updateReferensiJenisPelajaran(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_pelajaran'] = $this->M_jenis_pelajaran->preUpdateReferensiJenisPelajaran($id);
		$this->load->view('referensi/jenis_pelajaran/update_jenis_pelajaran', $data);
	}

	public function doUpdateReferensiJenisPelajaran(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('uraian_en', 'uraian_ar', 'trim|required');
		$this->form_validation->set_rules('uraian_ar', 'uraian_ar', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'3',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_pelajaran',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_pelajaran/updateReferensiJenisPelajaran');
		} else {
			$dataLog = array(
				'id_proses'=>'3',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_pelajaran',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'uraian_ar'=>$this->input->post('uraian_ar'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_pelajaran->updateReferensiJenisPelajaran($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_pelajaran');
		}
	}

	public function deleteReferensiJenisPelajaran(){
		$id = $this->uri->segment(4);
		$this->M_jenis_pelajaran->deleteReferensiJenisPelajaran($id);

		$dataLog = array(
				'id_proses'=>'3',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_pelajaran',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_pelajaran');
	}

}

/* End of file referensi_jenis_kompetensi.php */
/* Location: ./application/controllers/referensi/referensi_jenis_kompetensi.php */