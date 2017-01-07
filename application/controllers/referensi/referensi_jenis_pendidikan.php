<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_pendidikan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_pendidikan');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Referensi Jenis Pendidikan";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Pendidikan";
		$data['body'] = "referensi/jenis_pendidikan/select_jenis_pendidikan";

		$data['m_jenis_pendidikan'] = $this->M_jenis_pendidikan->selectReferensiJenisPendidikan();

		custom_layout($data);
	}

	public function addReferensiJenisPendidikan(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Add Referensi Jenis Pendidikan";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Pendidikan";
		$data['body'] = "referensi/jenis_pendidikan/insert_jenis_pendidikan";
		custom_layout($data);
	}

	public function doInsertReferensiJenisPendidikan(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('fl_formal', 'fl_formal', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'5',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_pendidikan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_pendidikan/addReferensiJenisPendidikan');
		} else {
			$dataLog = array(
				'id_proses'=>'5',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_pendidikan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'fl_formal'=>$this->input->post('fl_formal'));
			$this->M_jenis_pendidikan->addReferensiJenisPendidikan($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_pendidikan');
		}
	}

	public function updateReferensiJenisPendidikan(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Referensi Jenis Pendidikan";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Pendidikan";
		$data['body'] = "referensi/jenis_pendidikan/update_jenis_pendidikan";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_pendidikan'] = $this->M_jenis_pendidikan->preUpdateReferensiJenisPendidikan($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisPendidikan(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('uraian', 'uraian', 'trim|required');
		$this->form_validation->set_rules('fl_formal', 'fl_formal', 'trim|required');
		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'5',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_pendidikan',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_pendidikan/updateReferensiJenispendidikan');
		} else {
			$dataLog = array(
				'id_proses'=>'5',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_pendidikan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'uraian' => $this->input->post('uraian'),
				'fl_formal'=>$this->input->post('fl_formal'));
			$this->M_jenis_pendidikan->updateReferensiJenisPendidikan($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_pendidikan');
		}
	}

	public function deleteReferensiJenisPendidikan(){
		$id = $this->uri->segment(4);
		$this->M_jenis_pendidikan->deleteReferensiJenisPendidikan($id);

		$dataLog = array(
				'id_proses'=>'5',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_pendidikan',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_pendidikan');
	}

}

/* End of file referensi_jenis_pembayaran.php */
/* Location: ./application/controllers/referensi/referensi_jenis_pembayaran.php */
