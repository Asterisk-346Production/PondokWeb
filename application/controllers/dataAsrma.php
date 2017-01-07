<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataAsrma extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('asrama_model');
		if(! $this->session->userdata('logged_in')){
			redirect('');
		}
	}
	public function index()
	{
		if($this->session->userdata('level_user') == 3){
			redirect();
		}else{
			$data['level_user'] = $this->session->userdata('level_user');
			$data['id_user'] = $this->session->userdata('id_user');
			$this->load->view('asrama/asramaSelect', $data);
		}
	}

	public function addAsrma(){
		$this->load->view('asrama/asramaInsert', $data);
	}

	public function createAsrma(){
		$this->form_validation->set_rules('namaAsrama', 'namaAsrama', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('alamatAsrama', 'alamatAsrama', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('jumlahKamar', 'jumlahKamar', 'trim|required|min_length[5]|max_length[12]');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_message', 'Some field is Invalid');
			redirect('addAsrma');
		} else {
			$data = array(
				'nama_asrama' => $this->input->post('namaAsrama'),
				'alamatAsrama' => $this->input->post('alamatAsrama'),
				'jumlahKamar' => $this->input->post('jumlahKamar'),
				);
			$this->asrama_model->insertAsrama($data);
			redirect('dataAsrama');
		}

	}

	public function updateAsrama(){
		if($this->session->userdata('level_user') == 3){
			redirect();
		}else{
			$id = $this->uri->segment(3);
			$data['level_user'] = $this->session->userdata('level_user');
			$data['id_user'] = $this->session->userdata('id_user');
			$data['slug'] = $this->asrama_model->readUpdateAsrama($id);
			$this->load->view('asrama/asramaUpdate', $data);
		}
	}

	public function doUpdateAsrama(){
		$this->form_validation->set_rules('namaAsrama', 'namaAsrama', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('alamatAsrama', 'alamatAsrama', 'trim|required|min_length[5]|max_length[12]');
		$this->form_validation->set_rules('jumlahKamar', 'jumlahKamar', 'trim|required|min_length[5]|max_length[12]');
		$id = $this->input->post('id');
		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_message', 'Some field is Invalid');
			redirect('UserList/editUser', $id);
		}else{
			$data = array(
				'pass_user' => $this->input->post('password'),
				'level_user' => $this->input->post('levelUser'),
				'blokir_user' => $this->input->post('blokirUser')
			);
			$this->asrama_model->updateAsrama($id, $data);
			redirect('UserList');
		}

	}

	public function deleteAsrama(){
		$id = $this->uri->segment(3);
		$this->asrama_model->deleteKaryawan($id);
		redirect('karyawan');
	}

}

/* End of file dataAsrma.php */
/* Location: ./application/controllers/dataAsrma.php */