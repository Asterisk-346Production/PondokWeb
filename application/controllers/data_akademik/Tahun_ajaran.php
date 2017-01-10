<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_ajaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('log/m_log');
		$this->load->model('dataAkademik/M_tahun_ajaran');
		if(!$this->session->userdata('logged_in'))
		{
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "List Tahun Ajaran";
		$data['menu'] = "Data Akademik";
		$data['submenu'] = "Tahun Ajaran";
		$data['body'] = "dataAkademik/tahun_ajaran/select_Tahun_ajaran";

		$data['m_tahun_ajaran'] = $this->M_tahun_ajaran->selectTdTahunAjaran();

		custom_layout($data);
	}

	public function addTdTahunAjaran(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Insert Tahun AJaran";
		$data['menu'] = "Data Akademik";
		$data['submenu'] = "Tahun Ajaran";
		$data['body'] = "data_akademik/tahun_ajaran/insert_tahun_ajaran";
		custom_layout($data);
	}

	public function doInsertTdTahunAjaran(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$this->form_validation->set_rules('tanggal_awal', 'tanggal_awal', 'required');
		$this->form_validation->set_rules('tanggal_akhir', 'tanggal_akhir', 'required');

		$tanggal_awal = $this->input->post('tanggal_awal');
		$tanggal_akhir = $this->input->post('tanggal_akhir');

		$tahun_awal = new DateTime($tanggal_awal);
		$tahun_akhir = new DateTime($tanggal_akhir);

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data akademik : Tahun Ajaran',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/tahun_ajaran/addTdTahunAjaran');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data akademik : Tahun Ajaran',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'tahun_awal' => $tahun_awal->format('yyyy'),
				'tahun_akhir' => $tahun_akhir->format('yyyy'),
				'tgl_awal' => $tanggal_awal,
				'tgl_akhir' => $tanggal_akhir
				);
			$this->M_jenis_jam->addTdTahunAjaran($data);
			$this->M_log->recordLog($dataLog);

			redirect('data_akademik/tahun_ajaran');
		}
	}

	public function updateTdTahunAjaran(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Update Tahun Ajaran";
		$data['menu'] = "Data Akdemik";
		$data['submenu'] = "tahun jaran";
		$data['body'] = "dataAkademik/tahun_ajaran/update_tahun_ajaran";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_jam'] = $this->M_jenis_jam->preUpdateTdTahunAjaran($id);

		custom_layout($data);
	}

	public function doUpdateTdTahunAjaran(){
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

}

/* End of file Tahun_ajaran.php */
/* Location: ./application/controllers/data_akademik/Tahun_ajaran.php */