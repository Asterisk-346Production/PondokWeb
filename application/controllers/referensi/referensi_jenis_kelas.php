<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_kelas');
		$this->load->model('log/M_log');
		if(! $this->session->userdata('logged_in')){
			redirect('');
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis kelas";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_kelas";
		$data['body'] = "referensi/jenis_kelas/select_jenis_kelas";

		$data['m_jenis_kelas'] = $this->M_jenis_kelas->selectReferensiJeniskelas();

		custom_layout($data);
	}

	public function addReferensiJeniskelas(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis kelas";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_kelas";
		$data['body'] = "referensi/jenis_kelas/insert_jenis_kelas";
		custom_layout($data);
	}

	public function doInsertReferensiJeniskelas(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_kelas',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_kelas/addReferensiJeniskelas');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_kelas->addReferensiJeniskelas($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_kelas');
		}
	}

	public function updateReferensiJeniskelas(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis kelas";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_kelas";
		$data['body'] = "referensi/jenis_kelas/update_jenis_kelas";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_kelas'] = $this->M_jenis_kelas->preUpdateReferensiJeniskelas($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJeniskelas(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_kelas',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_kelas/updateReferensiJeniskelas');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_kelas->updateReferensiJeniskelas($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_kelas');
		}
	}

	public function deleteReferensiJeniskelas(){
		$id = $this->uri->segment(4);
		$this->M_jenis_kelas->deleteReferensiJeniskelas($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_kelas');
	}

}

/* End of file referensi_jenis_kelas.php */
/* Location: ./application/controllers/referensi/referensi_jenis_kelas.php */
