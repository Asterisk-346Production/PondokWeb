<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('log/m_log');
		$this->load->model('dataAkademik/M_ruangan');
		$this->load->model('referensi/M_jenis_ruangan');
		if(!$this->session->userdata('logged_in'))
		{
			redirect();
		}
		
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['menu'] = "Data Akademik";
		$data['submenu'] = "Ruangan";

		$data['title'] = 'Data Ruangan';
		$data['body'] ='dataAkademik/ruangan/select_Ruangan';
		$data['M_data_ruangan'] = $this->M_ruangan->selectTdRuangan();
		custom_layout($data); 
	}

	public function addRuangan(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		
		$data['menu'] = "Data Akademik";
		$data['submenu'] = "Ruangan";

		$data['title'] = 'Add Data Ruangan';
		$data['body'] ='dataAkademik/ruangan/insert_Ruangan';

		$data['M_jenis_ruangan'] = $this->M_jenis_ruangan->selectReferensiJenisRuangan();
		custom_layout($data);
	}

	public function doInsertRuangan(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nama_ar', 'nama_ar', 'trim|required');
		$this->form_validation->set_rules('alias', 'alias', 'trim|required');
		$this->form_validation->set_rules('ur_alias', 'ur_alias', 'trim|required');
		$this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
		$this->form_validation->set_rules('id_jns_ruangan', 'id_jns_ruangan', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : ruangan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/ruangan/addRuangan');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : ruangan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nama' => $this->input->post('nama'),
				'nama_ar' => $this->input->post('nama_ar'),
				'alias' => $this->input->post('alias'),
				'ur_alias' => $this->input->post('ur_alias'),
				'kapasitas' => $this->input->post('kapasitas'),
				'id_jns_ruangan' => $this->input->post('id_jns_ruangan')
				);
			$this->M_ruangan->addTdruangan($data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/ruangan');
		}
	}

	public function updateTdRuangan(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Data ruangan";
		$data['menu'] = "Data Akademik";
		$data['submenu'] = "ruangan";
		$data['body'] = "dataAkademik/ruangan/update_ruangan";
		$data['slug']= $this->uri->segment(4);

		$id = $this->uri->segment(4);
		$data['m_jenis_ruangan']	= $this->M_jenis_ruangan->selectReferensiJenisRuangan();
		$data['m_ruangan'] = $this->M_ruangan->preUpdateTdRuangan($id);

		custom_layout($data);
	}

	public function doUpdateRuangan(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nama_ar', 'nama_ar', 'trim|required');
		$this->form_validation->set_rules('alias', 'alias', 'trim|required');
		$this->form_validation->set_rules('ur_alias', 'ur_alias', 'trim|required');
		$this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
		$this->form_validation->set_rules('id_jns_ruangan', 'id_jns_ruangan', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : ruangan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/ruangan/updateRuangan');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : ruangan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nama' => $this->input->post('nama'),
				'nama_ar' => $this->input->post('nama_ar'),
				'alias' => $this->input->post('alias'),
				'ur_alias' => $this->input->post('ur_alias'),
				'kapasitas' => $this->input->post('kapasitas'),
				'id_jns_ruangan' => $this->input->post('id_jns_ruangan')
				);
			$this->M_ruangan->updateTdruangan($id,$data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/ruangan');
		}

	}

	public function deleteTdRuangan(){
		$id = $this->uri->segment(4);
		$this->M_ruangan->deleteRuangan($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'data_akademik : ruangan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->m_log->recordLog($dataLog);

		redirect('data_akademik/ruangan');
	}

}

/* End of file Ruangan.php */
/* Location: ./application/controllers/data_akademik/Ruangan.php */