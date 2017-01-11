<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_transaksi');
		$this->load->model('log/M_log');
		if(! $this->session->userdata('logged_in')){
			redirect('');
		}
	}

	public function index()
	{
		$data['title'] = "List Referensi Jenis transaksi";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Transaksi";
		$data['body'] = "referensi/jenis_transaksi/select_jenis_transaksi";

		$data['m_jenis_transaksi'] = $this->M_jenis_transaksi->selectReferensiJenistransaksi();

		custom_layout($data);
	}

	public function addReferensiJenistransaksi(){
		$data['title'] = "Add Referensi Jenis transaksi";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Transaksi";
		$data['body'] = "referensi/jenis_transaksi/insert_jenis_transaksi";
		custom_layout($data);
	}

	public function doInsertReferensiJenistransaksi(){
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('kode', 'kode', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_transaksi',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_transaksi/addReferensiJenistransaksi');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_transaksi',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'kode'=>$this->input->post('kode'));
			$this->M_jenis_transaksi->addReferensiJenistransaksi($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_transaksi');
		}
	}

	public function updateReferensiJenistransaksi(){
		$data['title'] = "Update Referensi Jenis transaksi";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Transaksi";
		$data['body'] = "referensi/jenis_transaksi/update_jenis_transaksi";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_transaksi'] = $this->M_jenis_transaksi->preUpdateReferensiJenistransaksi($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenistransaksi(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('kode', 'kode', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_transaksi',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_transaksi/updateReferensiJenistransaksi');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_transaksi',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'kode'=>$this->input->post('kode'),
				);
			$this->M_jenis_transaksi->updateReferensiJenistransaksi($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_transaksi');
		}
	}

	public function deleteReferensiJenistransaksi(){
		$id = $this->uri->segment(4);
		$this->M_jenis_transaksi->deleteReferensiJenistransaksi($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_transaksi',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_transaksi');
	}
}

/* End of file referensi_jenis_transaksi.php */
/* Location: ./application/controllers/referensi/referensi_jenis_transaksi.php */
