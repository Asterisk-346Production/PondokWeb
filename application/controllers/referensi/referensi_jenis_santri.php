<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_santri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_santri');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['title'] = "List Referensi Jenis Santri";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Santri";
		$data['body'] = "referensi/jenis_santri/select_jenis_santri";

		$data['m_jenis_santri'] = $this->M_jenis_santri->selectReferensiJenisSantri();

		custom_layout($data);
	}

	public function addReferensiJenisSantri(){
		$data['title'] = "Add Referensi Jenis Santri";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Santri";
		$data['body'] = "referensi/jenis_santri/insert_jenis_santri";
		custom_layout($data);
	}

	public function doInsertReferensiJenisSantri(){
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'7',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_santri',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_santri/addReferensiJenisSantri');
		} else {
			$dataLog = array(
				'id_proses'=>'7',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_santri',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_santri->addReferensiJenisSantri($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_santri');
		}
	}

	public function updateReferensiJenisSantri(){
		$data['title'] = "Update Referensi Jenis Santri";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Santri";
		$data['body'] = "referensi/jenis_santri/update_jenis_santri";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_santri'] = $this->M_jenis_santri->preUpdateReferensiJenisSantri($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisSantri(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'7',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_santri',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_santri/updateReferensiJenisSantri');
		} else {
			$dataLog = array(
				'id_proses'=>'7',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_santri',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_santri->updateReferensiJenisSantri($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_santri');
		}
	}

	public function deleteReferensiJenissantri(){
		$id = $this->uri->segment(4);
		$this->M_jenis_santri->deleteReferensiJenisSantri($id);

		$dataLog = array(
				'id_proses'=>'7',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_santri',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_santri');
	}
}

/* End of file referensi_jenis_pembayaran.php */
/* Location: ./application/controllers/referensi/referensi_jenis_pembayaran.php */
