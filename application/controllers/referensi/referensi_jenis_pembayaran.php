<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_pembayaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_pembayaran');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis Pembayaran";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Pembayaran";
		$data['body'] = "referensi/jenis_pembayaran/select_jenis_pembayaran";

		$data['m_jenis_pembayaran'] = $this->M_jenis_pembayaran->selectReferensiJenisPembayaran();

		custom_layout($data);
	}

	public function addReferensiJenisPembayaran(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis Pembayaran";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Pembayaran";
		$data['body'] = "referensi/jenis_pembayaran/insert_jenis_pembayaran";
		custom_layout($data);
	}

	public function doInsertJenisPembayaran(){
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$dataLog = array(
				'id_proses'=>'4',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_pembayaran',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);
		$this->session->set_flashdata('error', 'there is something wrong on yout field, please check again');
		redirect('referensi/referensi_jenis_pembayaran/addReferensiPembayaran/');
		} else {
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=> $this->input->post('keterangan'));
			$dataLog = array(
				'id_proses'=>'4',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_pembayaran',
				'keterangan'=>'sukses',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_jenis_pembayaran->addReferensiJenisPembayaran($data);
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_pembayaran');
		}
	}

	public function updateReferensiJenisPembayaran(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis Pembayaran";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Pembayaran";
		$data['body'] = "referensi/jenis_pembayaran/update_jenis_pembayaran";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_pembayaran'] = $this->M_jenis_pembayaran->preUpdateReferensiJenispembayaran($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisPembayaran(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_pembayaran',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_pembayaran/updateReferensiJenisPembayaran');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_pembayaran',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_pembayaran->updateReferensiJenisPembayaran($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_pembayaran');
		}
	}

	public function deleteReferensiJenisPembayaran(){
		$id = $this->uri->segment(4);
		$this->M_jenis_pembayaran->deleteReferensiJenisPembayaran($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_pembayaran',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_pembayaran');
	}

}

/* End of file referensi_jenis_pembayaran.php */
/* Location: ./application/controllers/referensi/referensi_jenis_pembayaran.php */
