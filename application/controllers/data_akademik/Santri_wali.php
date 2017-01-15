<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri_wali extends CI_Controller {

	public public function __construct()
	{
		parent::__construct();

		if(!$this->session->userdata('logged_in')){
		redirect();	
		}

		$this->load->model('log/M_log');
		$this->load->model('dataAkademik/M_santri_wali');
		$this->load->model('dataAkademik/M_santri');
		$this->load->model('referensi/M_jenis_santri');
	}

	public function index()
	{
		
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Santri";

		$data['title'] = 'Data Wali Santri';
		$data['body'] ='dataAkademik/santri_wali/select_Santri_wali';
		$data['M_data_santri_wali'] = $this->M_wali->selectTdWali();
		custom_layout($data);
	}

	public function addSantriWali(){
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Santri";

		$data['title'] = 'Add Data Wali Santri';
		$data['body'] ='dataAkademik/santri_wali/insert_Santri_wali';

		$data['M_data_santri'] = $data['M_data_santri'] = $this->M_santri->selectTdSantri();
		$data['M_jenis_santri_wali'] = $this->M_jenis_wali->selectReferensiJenisWali();
		custom_layout($data);
	}
	
	public function doInsertSantriWali(){
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('id_jns_wali', 'id_jns_wali', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nama_ar', 'nama_ar', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
		$this->form_validation->set_rules('no_telp2', 'no_telp2', 'trim');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('fl_wali', 'fl_wali', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : santri_Wali',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/santri_wali/addSantriWali');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : santri_Wali',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nis' => $this->input->post('nis'),
				'nama' => $this->input->post('nama'),
				'nama_ar' => $this->input->post('nama_ar'),
				'id_jns_wali' => $this->input->post('id_jns_wali'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'no_telp2' => $this->input->post('no_telp2'),
				'fl_wali' => $this->input->post('fl_wali'),
				'email' => $this->input->post('email')
				);
			$this->M_santri_wali->addTdSantri($data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/santri');
		}
	}

	public function updateSantriWali(){
		$data['title'] = "Update Data Santri";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Santri";
		$data['body'] = "dataAkademik/santri/update_Santri";
		$data['slug']= $this->uri->segment(4);

		$id = $this->uri->segment(4);
		$data['M_jenis_santri_wali']	= $this->M_jenis_wali->selectReferensiJenisWali();
		$data['m_santri_wali'] = $this->M_santri->preUpdateTdSantriWali($id);

		custom_layout($data);
	}

	public function doUpdateSantriWali(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('id_jns_wali', 'id_jns_wali', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('nama_ar', 'nama_ar', 'trim|required');
		$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
		$this->form_validation->set_rules('no_telp', 'no_telp', 'trim|required');
		$this->form_validation->set_rules('no_telp2', 'no_telp2', 'trim');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('fl_wali', 'fl_wali', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'data_akademik : santri_Wali',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/santri_wali/updateSantriWali');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'data_akademik : santri_Wali',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nis' => $this->input->post('nis'),
				'nama' => $this->input->post('nama'),
				'nama_ar' => $this->input->post('nama_ar'),
				'id_jns_wali' => $this->input->post('id_jns_wali'),
				'alamat' => $this->input->post('alamat'),
				'no_telp' => $this->input->post('no_telp'),
				'no_telp2' => $this->input->post('no_telp2'),
				'fl_wali' => $this->input->post('fl_wali'),
				'email' => $this->input->post('email')
				);
			$this->M_santri_wali->updateTdSantriWali($id,$data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/santri');
		}
	}

	public function deleteSantriWali(){
		$id = $this->uri->segment(4);
		$this->M_bayanat->deleteSantriWali($id);

		$dataLog = array(
				'id_proses'=>'01',
				'nama_proses'=>'delete data',
				'nama_form' => 'dataAkademik : santri_wali',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('data_akademik/santri_wali');
	}

}

/* End of file Santri_wali.php */
/* Location: ./application/controllers/data_akademik/Santri_wali.php */