<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bayanat extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in'))
		{
			redirect();
		}
		$this->load->model('dataAkademik/M_bayanat');
		$this->load->model('dataAkademik/M_santri');
		$this->load->model('dataAkademik/M_kelas_jadwal');
		$this->load->model('log/M_log');
	}

	public function index()
	{
		$data['title'] = "List Bayanat";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Bayanat";
		$data['body'] = "dataAkademik/bayanat/select_bayanat";
		$data['M_bayanat'] = $this->M_bayanat->selectTdBayanat();
		custom_layout($data);
	}

	public function addBayanat(){
		$data['title'] = "Add Data Bayanat";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Bayanat";
		$data['body'] = "dataAkademik/bayanat/insert_bayanat";

		$data['M_kelas_jadwal'] = $this->M_kelas_jadwal->selectTdKelasJadwal();
		$data['M_santri'] = $this->M_santri->selectTdSantri();

		custom_layout($data);
	}

	public function doInsertBayanat(){
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('nomor', 'nomor', 'trim|required');
		$this->form_validation->set_rules('id_kelas_jadwal', 'id_kelas_jadwal', 'trim|required');
		$this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
		$this->form_validation->set_rules('tgl_ujian', 'tgl_ujian', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : bayanat',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/bayanat/addBantri');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : bayanat',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'nis' => $this->input->post('nis'),
				'nomor' => $this->input->post('nomor'),
				'id_kelas_jadwal' => $this->input->post('id_kelas_jadwal'),
				'nilai' => $this->input->post('nilai'),
				'tgl_ujian' => $this->input->post('tgl_ujian')
				);

			$this->M_santri->addTdSantri($data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/bayanat');
		}
	}

	public function updateBayanat(){
		$data['title'] = "Update Data Bayanat";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Bayanat";
		$data['body'] = "dataAkademik/bayanat/update_bayanat";
		custom_layout($data);
	}

	public function doUpadteBayanat(){
		redirect();

	}

	public function deleteBayanat(){
		$id = $this->uri->segment(4);
		$this->M_bayanat->deleteTdBayanat($id);

		$dataLog = array(
				'id_proses'=>'01',
				'nama_proses'=>'delete data',
				'nama_form' => 'dataAkademik : Bayanat',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('data_akademik/bayanat');
	}
}

/* End of file Bayanat.php */
/* Location: ./application/controllers/data_akademik/Bayanat.php */
