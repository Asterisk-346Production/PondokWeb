<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_kompetensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_kompetensi');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis Kompetensi";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Kompetensi";
		$data['body'] = "referensi/jenis_kompetensi/select_jenis_kompetensi";

		$data['m_jenis_kompetensi'] = $this->M_jenis_kompetensi->selectReferensiJenisKomptensi();

		custom_layout($data);
	}

	public function addReferensiJenisKompetensi(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis Kompetensi";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Kompetensi";
		$data['body'] = "referensi/jenis_kompetensi/insert_jenis_kompetensi";
		custom_layout($data);
	}

	public function doInsertReferensiJenisKompetensi(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'there is something wrong on yout field, please check again');
			redirect('referensi/referensi_jenis_kompetensi/addReferensiJenisKomptensi/');

			$dataLog = array(
				'id_proses'=>'2',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_kompetensi',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
		} else {
			$data = array('uraian' => $this->input->post('uraian'));
			$dataLog = array(
				'id_proses'=>'2',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_kompetensi',
				'keterangan'=>'sukses',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_jenis_kompetensi->addReferensiJenisKomptensi($data);
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_kompetensi');
		}

	}

	public function updateReferensiJenisKompetensi(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis Kompetensi";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Kompetensi";
		$data['body'] = "referensi/jenis_kompetensi/update_jenis_kompetensi";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_komptensi'] = $this->M_jenis_kompetensi->preUpdateReferensiJenisKompetensi($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisKompetensi(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'2',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_kompetensi',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_kompetensi/updateReferensiJenisKompetensi');
		} else {
			$dataLog = array(
				'id_proses'=>'2',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_kompetensi',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'));
			$this->M_jenis_kompetensi->updateReferensiJenisKompetensi($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_kompetensi');
		}
	}

	public function deleteReferensiJenisKompetensi(){
		$id = $this->uri->segment(4);
		$this->M_jenis_kompetensi->deleteReferensiJenisKompetensi($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_kompetensi',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_kompetensi');
	}

}

/* End of file referensi_jenis_kompetensi.php */
/* Location: ./application/controllers/referensi/referensi_jenis_kompetensi.php */
