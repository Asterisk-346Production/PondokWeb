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
		$data['title'] = "List Tahun Ajaran";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_TahunAjaran";
		$data['body'] = "dataAkademik/tahun_ajaran/select_Tahun_ajaran";

		$data['m_tahun_ajaran'] = $this->M_tahun_ajaran->selectTdTahunAjaran();

		custom_layout($data);
	}

	public function addTdTahunAjaran(){
		$data['title'] = "Insert Tahun AJaran";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_TahunAjaran";
		$data['body'] = "data_akademik/tahun_ajaran/insert_tahun_ajaran";
		custom_layout($data);
	}

	public function doInsertTdTahunAjaran(){
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
				'tahun_awal' => $tahun_awal->format('Y'),
				'tahun_akhir' => $tahun_akhir->format('Y'),
				'tgl_awal' => $tanggal_awal,
				'tgl_akhir' => $tanggal_akhir
				);
			$this->M_jenis_jam->addTdTahunAjaran($data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/tahun_ajaran');
		}
	}

	public function updateTdTahunAjaran(){
		$data['title'] = "Update Tahun Ajaran";
		$data['menu'] = "Akdemik";
		$data['submenu'] = "Ac_TahunAjaran";
		$data['body'] = "dataAkademik/tahun_ajaran/update_tahun_ajaran";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_tahun_ajaran'] = $this->M_jenis_jam->preUpdateTdTahunAjaran($id);

		custom_layout($data);
	}

	public function doUpdateTdTahunAjaran(){
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
				'nama_proses'=>'update data',
				'nama_form' => 'dataAkademik : tahun_ajaran',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->m_log->recordLog($dataLog);
			redirect('data_akademik/tahun_ajaran/updateTdTahunAjaran');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'dataAkademik : tahun_ajaran',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'tahun_awal' => $tahun_awal->format('Y'),
				'tahun_akhir' => $tahun_akhir->format('Y'),
				'tgl_awal' => $tanggal_awal,
				'tgl_akhir' => $tanggal_akhir
				);
			$this->M_jenis_jam->updateTdTahunAjaran($data,$id);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/tahun_ajaran');
		}
	}

	public function deleteTdTahunAjaran(){
		$id = $this->uri->segment(4);
		$this->M_jenis_jam->deleteTdTahunAjaran($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'dataAkademik : tahun_ajaran',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('data_akademik/tahun_ajaran');
	}
}

/* End of file Tahun_ajaran.php */
/* Location: ./application/controllers/data_akademik/Tahun_ajaran.php */
