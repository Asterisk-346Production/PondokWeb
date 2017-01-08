<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_beasiswa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_beasiswa');
		$this->load->model('log/M_log');
		if(! $this->session->userdata('logged_in')){
			redirect('');
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis beasiswa";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_beasiswa";
		$data['body'] = "referensi/jenis_beasiswa/select_jenis_beasiswa";

		$data['m_jenis_beasiswa'] = $this->M_jenis_beasiswa->selectReferensiJenisbeasiswa();

		custom_layout($data);
	}

	public function addReferensiJenisbeasiswa(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis beasiswa";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_beasiswa";
		$data['body'] = "referensi/jenis_beasiswa/insert_jenis_beasiswa";
		custom_layout($data);
	}

	public function doInsertReferensiJenisbeasiswa(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('donatur', 'donatur', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_beasiswa',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_beasiswa/addReferensiJenisbeasiswa');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_beasiswa',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'donatur'=>$this->input->post('donatur'),
				'jumlah'=>$this->input->post('jumlah'));
			$this->M_jenis_beasiswa->addReferensiJenisbeasiswa($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_beasiswa');
		}
	}

	public function updateReferensiJenisbeasiswa(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis beasiswa";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_beasiswa";
		$data['body'] = "referensi/jenis_beasiswa/update_jenis_beasiswa";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_beasiswa'] = $this->M_jenis_beasiswa->preUpdateReferensiJenisbeasiswa($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisbeasiswa(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('donatur', 'donatur', 'trim|required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_beasiswa',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_beasiswa/updateReferensiJenisbeasiswa');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_beasiswa',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'donatur'=>$this->input->post('donatur'),
				'jumlah'=>$this->input->post('jumlah'));
			$this->M_jenis_beasiswa->updateReferensiJenisbeasiswa($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_beasiswa');
		}
	}

	public function deleteReferensiJenisbeasiswa(){
		$id = $this->uri->segment(4);
		$this->M_jenis_beasiswa->deleteReferensiJenisbeasiswa($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_beasiswa',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_beasiswa');
	}

}

/* End of file referensi_jenis_beasiswa.php */
/* Location: ./application/controllers/referensi/referensi_jenis_beasiswa.php */
