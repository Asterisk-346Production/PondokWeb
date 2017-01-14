<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri_nilai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
		$this->load->model('log/M_log');
		$this->load->model('dataAkademik/M_santri');
		$this->load->model('dataAkademik/M_santri_nilai');
		$this->load->model('referensi/M_jenis_pelajaran');
		$this->load->model('referensi/M_jenis_jadwal');
	}

	public function index()
	{
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Santri";

		$data['title'] = 'Data Nilai Santri';
		$data['body'] ='dataAkademik/santri/select_Santri';
		$data['M_data_santri_nilai'] = $this->M_santri_nilai->selectTdSantriNilai();
		custom_layout($data);
	}

	public function addTdSantriNilai(){
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Santri";
		$data['title'] = 'Data Nilai Santri';
		$data['body'] ='dataAkademik/santri/select_Santri';
		$data['M_santri'] = $this->M_santri->selectTdSantri();
		$data['M_jenis_pelajaran'] = $this->M_jenis_pelajaran->selectReferensiJenisPelajaran();
		$data['M_jenis_jadwal'] = $this->M_jenis_jadwal->selectReferensiJenisJadwal();
		custom_layout($data);
	}

	public function doInsertSantriNilai(){
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');
		$this->form_validation->set_rules('id_jns_pelajaran', 'id_jns_pelajaran', 'trim|required');
		$this->form_validation->set_rules('id_jns_jadwal', 'id_jns_jadwal', 'trim|required');
		$this->form_validation->set_rules('nilai_akhir', 'nilai_akhir', 'trim|required');
		
		if($this->input->post('nilai_akhir') >= 100){
			$this->session->set_flashdata('error', 'nilai cannot be more than 100');
			redirect('data_akademik/santri_nilai/addTdSantri_nilai');
		}else{
				if ($this->form_validation->run() == FALSE) {
					$this->session->set_flashdata('error', 'fail to insert data, try insert again');
					$dataLog = array(
						'id_proses'=>'1',
						'nama_proses'=>'insert data',
						'nama_form' => 'data_akademik : santri_nilai',
						'keterangan'=>'gagal',
						'id_rekam'=>$this->session->userdata('id_user'));
					$this->M_log->recordLog($dataLog);
					redirect('data_akademik/santri_nilai/addTdSantri_nilai');
				} else {
					$dataLog = array(
						'id_proses'=>'1',
						'nama_proses'=>'insert data',
						'nama_form' => 'data_akademik : santri_nilai',
						'keterangan'=>'berhasil',
						'id_rekam'=>$this->session->userdata('id_user'));
					$data = array(
						'nis' => $this->input->post('nis'),
						'id_jns_pelajaran' => $this->input->post('nomor'),
						'id_jns_jadwal' => $this->input->post('id_kelas_jadwal'),
						'nilai_akhir' => $this->input->post('nilai')
						);

					$insert_id =  $this->M_santri_nilai->addTdsantri_nilai($data);
					$data_nilai = array(
						'id_kelas_jadwal' => $this->input->post('id_kelas_jadwal'),
						'id_santri_nilai' => $insert_id,
						'nis' => $this->input->post('nis'),
						'nilai_ujian'  => $this->input->post('nilai'),
						'nilai_akhir' => $this->input->post('nilai')
						);

					$this->M_santri_nilai->addTdKelasNilaionsantri_nilai($data_nilai);
					$this->M_log->recordLog($dataLog);

					redirect('data_akademik/santri_nilai');
				}
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

	public function deleteSantriNilai(){
		$id = $this->uri->segment(4);
		$this->M_bayanat->deleteTdBayanat($id);

		$dataLog = array(
				'id_proses'=>'01',
				'nama_proses'=>'delete data',
				'nama_form' => 'dataAkademik : santri_nilai',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->M_log->recordLog($dataLog);

		redirect('data_akademik/santri_nilai');
	}

}

/* End of file Santri_nilai.php */
/* Location: ./application/controllers/data_akademik/Santri_nilai.php */