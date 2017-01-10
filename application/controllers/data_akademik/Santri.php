<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('log/m_log');
		$this->load->model('dataAkademik/M_santri');
		$this->load->model('referensi/M_jenis_santri');
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
		$data['submenu'] = "Santri";

		$data['title'] = 'Data Santri';
		$data['body'] ='dataAkademik/santri/select_Santri';
		$data['M_data_santri'] = $this->M_santri->selectTdSantri();
		custom_layout($data); 
	} 

	public function addSantri(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		
		$data['menu'] = "Data Akademik";
		$data['submenu'] = "Santri";

		$data['title'] = 'Add Data Santri';
		$data['body'] ='dataAkademik/santri/insert_Santri';

		$data['M_jenis_santri'] = $this->M_jenis_santri->selectReferensiJenisSantri();
		custom_layout($data);
	}

	public function doInsertSantri(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
		$this->form_validation->set_rules('id_jns_santri', 'id_jns_santri', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nama_ar', 'nama_ar', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_awal', 'tgl_awal', 'trim|required');
		$this->form_validation->set_rules('daerah', 'daerah', 'trim|required');
		$this->form_validation->set_rules('daerah_ar', 'daerah_ar', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : santri',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/santri/addSantri');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : santri',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nis' => $this->input->post('nis'),
				'nisn' => $this->input->post('nisn'),
				'nama' => $this->input->post('nama'),
				'nama_ar' => $this->input->post('nama_ar'),
				'id_jns_santri' => $this->input->post('id_jns_santri'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'daerah' => $this->input->post('daerah'),
				'daerah_ar' => $this->input->post('daerah_ar'),
				'tgl_awal' => $this->input->post('tgl_awal'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'tgl_awal' => $this->input->post('tgl_awal'),
				);
			$this->M_santri->addTdSantri($data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/santri');
		}

	}

	public function updateSantri(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Data Santri";
		$data['menu'] = "Data Akademik";
		$data['submenu'] = "Santri";
		$data['body'] = "dataAkademik/santri/update_Santri";
		$data['slug']= $this->uri->segment(4);

		$id = $this->uri->segment(4);
		$data['m_jenis_santri']	= $this->M_jenis_santri->selectReferensiJenisSantri();
		$data['m_santri'] = $this->M_santri->preUpdateTdSantri($id);

		custom_layout($data);
	}

	public function doUpdateSantri(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$nis = $this->input->post('nis');

		$this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
		$this->form_validation->set_rules('id_jns_santri', 'id_jns_santri', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nama_ar', 'nama_ar', 'trim|required');
		$this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'trim|required');
		$this->form_validation->set_rules('tempat_lahir', 'tempat_lahir', 'trim|required');
		$this->form_validation->set_rules('tgl_awal', 'tgl_awal', 'trim|required');
		$this->form_validation->set_rules('daerah', 'daerah', 'trim|required');
		$this->form_validation->set_rules('daerah_ar', 'daerah_ar', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'data_akademik : santri',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/santri/updateSantri');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'data_akademik : santri',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nisn' => $this->input->post('nisn'),
				'nama' => $this->input->post('nama'),
				'nama_ar' => $this->input->post('nama_ar'),
				'id_jns_santri' => $this->input->post('id_jns_santri'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'daerah' => $this->input->post('daerah'),
				'daerah_ar' => $this->input->post('daerah_ar'),
				'tgl_awal' => $this->input->post('tgl_awal'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'tgl_awal' => $this->input->post('tgl_awal'),
				);
			$this->M_santri->updateTdSantri($nis,$data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/santri');
		}

	}

	public function deleteSantri(){
		$id = $this->uri->segment(4);
		$this->M_santri->deleteSantri($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'data_akademik : santri',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->m_log->recordLog($dataLog);

		redirect('data_akademik/santri');
	}
}

/* End of file Santri.php */
/* Location: ./application/controllers/data_akademik/Santri.php */