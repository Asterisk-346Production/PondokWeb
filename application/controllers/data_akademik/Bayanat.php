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
	}

	public function index()
	{
		$data['title'] = "List Bayanat";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Bayanat";
		$data['body'] = "dataAkademik/bayanat/select_bayanat";
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
		redirect();
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
		$this->M_jenis_karyawan->deleteReferensiJenisKaryawan($id);

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
