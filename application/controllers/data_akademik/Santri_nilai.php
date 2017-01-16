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
		$this->load->model('dataAkademik/M_kelas_jadwal');
		$this->load->model('referensi/M_jenis_jadwal');
	}

	public function index()
	{
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_SantriNilai";

		$data['title'] = 'Data Nilai Santri';
		$data['body'] ='dataAkademik/santri_nilai/select_santri_nilai';
		$data['M_data_santri_nilai'] = $this->M_santri_nilai->selectTdSantriNilai();
		custom_layout($data);
	}

	public function detail(){
		$id = $this->uri->segment(4);
		$data['menu'] ="Akademik";
		$data['submenu'] = "Data Nilai Santri";

		$data['title'] = 'Data Nilai Santri';
		$data['body'] = 'dataAkademik/santri_nilai/select_santri_nilai_detail';

		$data['M_data_santri'] = $this->M_santri->preUpdateTdSantri($id);
		$data['M_data_santri_nilai_detail'] = $this->M_santri_nilai->selectTdSantriNilaiWhere($id);

		$data['forSemesterTA'] = $this->M_kelas_jadwal->selectTdKelasJadwal(); // will fix later

		custom_layout($data);
	}

	public function addTdSantriNilai(){
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_SantriNilai";
		$data['title'] = 'Data Nilai Santri';
		$data['body'] ='dataAkademik/santri_nilai/insert_santri_nilai';
		$data['M_santri'] = $this->M_santri->selectTdSantri();
		$data['M_kelas_jadwal'] = $this->M_kelas_jadwal->selectTdKelasJadwal();
		$data['M_jenis_pelajaran'] = $this->M_jenis_pelajaran->selectReferensiJenisPelajaran();
		$data['M_jenis_jadwal'] = $this->M_jenis_jadwal->selectReferensiJenisJadwal();
		custom_layout($data);
	}

	public function doInsertSantriNilai(){
		$this->form_validation->set_rules('nis', 'nis', 'trim|required');

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
					$max_value = $this->M_santri_nilai->countJumlahJenisPelajaran();
					for($i = 1; $i <= $max_value; $i++){
						//code insert here
					$id_jns_pelajaran =  "id_jns_pelajaran".$i;
					$jenis_jadwal =  "jenis_jadwal".$i;
					$nilai =  "nilai_akhir".$i;

					$dataLog = array(
						'id_proses'=>'1',
						'nama_proses'=>'insert data',
						'nama_form' => 'data_akademik : santri_nilai',
						'keterangan'=>'berhasil',
						'id_rekam'=>$this->session->userdata('id_user'));
					$data = array(
						'nis' => $this->input->post('nis'),
						'id_jns_pelajaran' => $this->input->post($id_jns_pelajaran),
						'id_jns_jadwal' => $this->input->post($jenis_jadwal),
						'nilai_akhir' => $this->input->post($nilai)
						);

					$insert_id =  $this->M_santri_nilai->addTdSantriNilai($data);
					$data_nilai = array(
						'id_kelas_jadwal' => $this->input->post('id_kelas_jadwal'),
						'id_santri_nilai' => $insert_id,
						'nis' => $this->input->post('nis'),
						'nilai_ujian'  => $this->input->post($nilai),
						'nilai_akhir' => $this->input->post($nilai)
						);

					$this->M_santri_nilai->addTdKelasNilaionSantriNilai($data_nilai);
					$this->M_log->recordLog($dataLog);
					}
					redirect('data_akademik/santri_nilai');
				}
			}
		}

	public function updateTdSantriNilai(){
		$id = $this->uri->segment(4);
		$data['title'] = "Update Data Bayanat";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_SantriNilai";
		$data['M_data_santri_nilai'] =  $this->M_santri_nilai->preUpdateTdSantriNilai($id);
		$data['M_data_santri'] = $this->M_santri->preUpdateTdSantri($id);
		$data['M_kelas_jadwal'] = $this->M_kelas_jadwal->selectTdKelasJadwal();
		$data['M_jenis_pelajaran'] = $this->M_jenis_pelajaran->selectReferensiJenisPelajaran();
		$data['M_jenis_jadwal'] = $this->M_jenis_jadwal->selectReferensiJenisJadwal();

		$data['body'] = "dataAkademik/bayanat/update_bayanat";

		custom_layout($data);
	}

	public function deleteSantriNilai(){
		$id = $this->uri->segment(4);
		$this->M_santri_nilai->deleteTdSantriNilai($id);

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
