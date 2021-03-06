<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_skill extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_skill');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['title'] = "List Referensi Jenis Skill";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Skill";
		$data['body'] = "referensi/jenis_skill/select_jenis_skill";

		$data['m_jenis_skill'] = $this->M_jenis_skill->selectReferensiJenisSkill();

		custom_layout($data);
	}

	public function addReferensiJenisSkill(){
		$data['title'] = "Add Referensi Jenis Skill";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Skill";
		$data['body'] = "referensi/jenis_skill/insert_jenis_skill";
		custom_layout($data);
	}

	public function doInsertReferensiJenisSkill(){
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'8',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_skill',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_skill/addReferensiJenisSkill');
		} else {
			$dataLog = array(
				'id_proses'=>'8',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_skill',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_skill->addReferensiJenisSkill($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_skill');
		}
	}

	public function updateReferensiJenisSkill(){
		$data['title'] = "Update Referensi Jenis Skill";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Skill";
		$data['body'] = "referensi/jenis_skill/update_jenis_skill";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_skill'] = $this->M_jenis_skill->preUpdateReferensiJenisSkill($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisSkill(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'8',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_skill',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_skill/updateReferensiJenisSkill');
		} else {
			$dataLog = array(
				'id_proses'=>'8',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_skill',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'keterangan'=>$this->input->post('keterangan'));
			$this->M_jenis_skill->updateReferensiJenisSkill($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_skill');
		}
	}

	public function deleteReferensiJenisSkill(){
		$id = $this->uri->segment(4);
		$this->M_jenis_skill->deleteReferensiJenisskill($id);

		$dataLog = array(
				'id_proses'=>'8',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_skill',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_skill');
	}
}

/* End of file referensi_jenis_pembayaran.php */
/* Location: ./application/controllers/referensi/referensi_jenis_pembayaran.php */
