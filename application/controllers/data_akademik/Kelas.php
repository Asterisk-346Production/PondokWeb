<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('log/m_log');
		$this->load->model('dataAkademik/M_kelas');
		$this->load->model('referensi/M_jenis_kelas');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Kelas";

		$data['title'] = 'Data Kelas';
		$data['body'] ='dataAkademik/kelas/select_Kelas';
		$data['M_data_kelas'] = $this->M_kelas->selectTdkelas();
		custom_layout($data);
	}

	public function addKelas(){
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Kelas";

		$data['title'] = 'Add Data Kelas';
		$data['body'] ='dataAkademik/kelas/insert_Kelas';

		$data['M_jenis_kelas'] = $this->M_jenis_kelas->selectReferensiJeniskelas();
		custom_layout($data);
	}

	public function doInsertKelas(){
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
		$this->form_validation->set_rules('id_jns_kelas', 'id_jns_kelas', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/kelas/addKelas');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nis' => $this->input->post('nis'),
				'nisn' => $this->input->post('nisn'),
				'nama' => $this->input->post('nama'),
				);
			$this->M_kelas->addTdkelas($data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/Kelas');
		}
	}

	public function updateKelas(){
		$data['title'] = "Update Data kelas";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Kelas";
		$data['body'] = "dataAkademik/kelas/update_Kelas";
		$data['slug']= $this->uri->segment(4);

		$id = $this->uri->segment(4);
		$data['m_jenis_kelas']	= $this->M_jenis_kelas->selectReferensiJeniskelas();
		$data['m_kelas'] = $this->M_kelas->preUpdateTdkelas($id);

		custom_layout($data);
	}

	public function doUpdatekelas(){
		$nis = $this->input->post('nis');

		$this->form_validation->set_rules('nisn', 'nisn', 'trim|required');
		$this->form_validation->set_rules('id_jns_kelas', 'id_jns_kelas', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/kelas/updateKelas');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nisn' => $this->input->post('nisn'),
				'nama' => $this->input->post('nama'),
				'nama_ar' => $this->input->post('nama_ar'),
				'id_jns_kelas' => $this->input->post('id_jns_kelas'),
				'tempat_lahir' => $this->input->post('tempat_lahir'),
				);
			$this->M_kelas->updateTdKelas($nis,$data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/Kelas');
		}

	}

	public function deleteKelas(){
		$id = $this->uri->segment(4);
		$this->M_kelas->deletekelas($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->m_log->recordLog($dataLog);

		redirect('data_akademik/Kelas');
	}

	public function kelasAllRelation(){
		redirect();
	}

}

/* End of file Kelas.php */
/* Location: ./application/controllers/data_akademik/Kelas.php */