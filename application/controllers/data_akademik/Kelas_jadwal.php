<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas_jadwal extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
		$this->load->model('log/M_log');
		$this->load->model('dataAkademik/M_kelas_jadwal');
		$this->load->model('dataAkademik/M_ruangan');
		$this->load->model('dataAkademik/M_kelas');
		$this->load->model('referensi/M_jenis_jadwal');
		$this->load->model('referensi/M_hari');
		$this->load->model('referensi/M_jenis_jam');
		$this->load->model('referensi/M_jenis_pelajaran');

	}

	public function index()
	{
		$data['title'] = "List Jadwa Kelas";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Bayanat";
		$data['body'] = "dataAkademik/kelas_jadwal/select_kelas_jadwal";
		$data['M_kelas_jadwal'] = $this->M_kelas_jadwal->allSelectRelationTdKelasJadwal();
		custom_layout($data);
	}

	public function addTdKelasJadwal(){
		$data['title'] = "Add Data Bayanat";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Bayanat";
		$data['body'] = "dataAkademik/kelas_jadwal/insert_kelas_jadwal";

		$data['M_kelas'] = $this->M_kelas->selectTdKelas();
		$data['M_ruangan'] = $this->M_ruangan->seleselectTdRuangan();
		$data['M_jenis_jadwal'] = $this->M_jenis_jadwal->selectReferensiJenisJadwal();
		$data['M_kelas'] = $this->M_kelas->selectTdKelas();
		$data['M_jenis_pelajaran'] =  $this->M_jenis_pelajaran->selectReferensiJenisPelajaran();

		custom_layout($data);
	}

	public function doInsertTdKelasJadwal(){
		$this->form_validation->set_rules('semester', 'semester', 'trim|required');
		$this->form_validation->set_rules('id_jns_pelajaran', 'id_jns_pelajaran', 'trim|required');
		$this->form_validation->set_rules('id_kelas', 'id_kelas', 'trim|required');
		$this->form_validation->set_rules('tgl_ujian', 'tgl_ujian', 'trim|required');
		$this->form_validation->set_rules('id_jns_jadwal', 'id_jns_jadwal', 'trim|required');
		$this->form_validation->set_rules('id_ruangan', 'id_ruangan', 'trim|required');
		$this->form_validation->set_rules('id_jns_hari', 'id_jns_jam', 'trim|required');
		$this->form_validation->set_rules('jml_jam', 'jml_jam', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : tdKelasJadwal &  tdKelasJadwalDetail',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/bayanat/addBayanat');
		} else {
			# code...
		}
	}


}

/* End of file Kelas_jadwal.php */
/* Location: ./application/controllers/data_akademik/Kelas_jadwal.php */