<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_jenis_jam extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('referensi/M_jenis_jam');
		$this->load->model('log/M_log');
		if(! $this->session->userdata('logged_in')){
			redirect('');
		}
	}

	public function index()
	{
		$data['title'] = "List Referensi Jenis jam";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Jam";
		$data['body'] = "referensi/jenis_jam/select_jenis_jam";

		$data['m_jenis_jam'] = $this->M_jenis_jam->selectReferensiJenisjam();

		custom_layout($data);
	}

	public function addReferensiJenisjam(){
		$data['title'] = "Add Referensi Jenis jam";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Jam";
		$data['body'] = "referensi/jenis_jam/insert_jenis_jam";
		custom_layout($data);
	}

	public function doInsertReferensiJenisjam(){
		$this->form_validation->set_rules('jam_awal', 'jam_awal', 'required');
		$this->form_validation->set_rules('jam_akhir', 'jam_akhir', 'required');

		$jam_awal = $this->input->post('jam_awal');
		$jam_akhir = $this->input->post('jam_akhir');

		$date_awal = new DateTime($jam_awal);
		$date_akhir = new DateTime($jam_akhir);

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_jam',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_jam/addReferensiJenisjam');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'referensi_jenis_jam',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'jam_awal' => $date_awal->format('H'),
				'menit_awal' => $date_awal->format('i'),
				'jam_akhir' => $date_akhir->format('H'),
				'menit_akhir' => $date_akhir->format('i')
				);
			$this->M_jenis_jam->addReferensiJenisjam($data);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_jam');
		}
	}

	public function updateReferensiJenisjam(){
		$data['title'] = "Update Referensi Jenis jam";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_Jam";
		$data['body'] = "referensi/jenis_jam/update_jenis_jam";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_jam'] = $this->M_jenis_jam->preUpdateReferensiJenisjam($id);

		custom_layout($data);
	}

	public function doUpdateReferensiJenisjam(){
		$id = $this->input->post('id');
		$this->form_validation->set_rules('jam_awal', 'jam_awal', 'required');
		$this->form_validation->set_rules('jam_akhir', 'jam_akhir', 'required');

		$jam_awal = $this->input->post('jam_awal');
		$jam_akhir = $this->input->post('jam_akhir');

		$date_awal = new DateTime($jam_awal);
		$date_akhir = new DateTime($jam_akhir);

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_jam',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('referensi/referensi_jenis_jam/updateReferensiJenisjam');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'referensi_jenis_jam',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'jam_awal' => $date_awal->format('H'),
				'menit_awal' => $date_awal->format('i'),
				'jam_akhir' => $date_akhir->format('H'),
				'menit_akhir' => $date_akhir->format('i')
				);
			$this->M_jenis_jam->updateReferensiJenisjam($data,$id);
			$this->M_log->recordLog($dataLog);

			redirect('referensi/referensi_jenis_jam');
		}
	}

	public function deleteReferensiJenisjam(){
		$id = $this->uri->segment(4);
		$this->M_jenis_jam->deleteReferensiJenisjam($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'referensi_jenis_jam',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('referensi/referensi_jenis_jam');
	}
}

/* End of file referensi_jenis_jam.php */
/* Location: ./application/controllers/referensi/referensi_jenis_jam.php */
