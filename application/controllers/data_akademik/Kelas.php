<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('log/m_log');
		$this->load->model('dataAkademik/M_kelas');
		$this->load->model('dataAkademik/M_santri');
		$this->load->model('dataAkademik/M_tahun_ajaran');
		$this->load->model('dataAkademik/M_kelas_detail');
		$this->load->model('dataAkademik/M_kelas_jadwal');
		$this->load->model('dataAkademik/M_santri_nilai');
		$this->load->model('referensi/M_jenis_kelas');
		$this->load->model('referensi/M_jenis_pelajaran');
		$this->load->model('referensi/M_jenis_hari');
		$this->load->model('referensi/M_jenis_jam');
		$this->load->model('referensi/M_jenis_jadwal');
		$this->load->model('dataAkademik/M_ruangan');
		$this->load->model('referensi/M_jenis_ruangan');
		$this->load->model('log/M_log');
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Kelas";

		$data['title'] = 'Data Kelas';
		$data['body'] ='dataAkademik/kelas/select_Kelas';
		$data['M_kelas'] = $this->M_kelas->selectTdkelas();
		custom_layout($data);
	}

	public function addKelas(){
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Kelas";

		$data['title'] = 'Add Data Kelas';
		$data['body'] ='dataAkademik/kelas/insert_kelas';

		$data['M_jenis_kelas'] = $this->M_jenis_kelas->selectReferensiJeniskelas();
		$data['M_tahun_ajaran'] = $this->M_tahun_ajaran->selectTdTahunAjaran();
		custom_layout($data);
	}

	public function addKelasDetail(){
		// $id =  $this->uri->segment(4);
		$data['slug'] =  $this->uri->segment(4);
		$data['menu'] = "Akademik";
		$data['submenu'] ="Ac_Kelas";

		$data['title'] = "Add Data Kelas Detail";
		$data['body'] = 'dataAkademik/kelas/insert_kelas_detail';
		$data['M_santri_list'] = $this->M_santri->santriHasNotClass();
		custom_layout($data);

	}

	public function addKelasJadwal(){
		$data['slug'] =  $this->uri->segment(4);
		$data['menu'] = "Akademik";
		$data['submenu'] ="Ac_Kelas";

		$data['title'] = "Add Data Kelas Detail";
		// $data['body'] = 'dataAkademik/kelas/insert_kelas_jadwal';
		$data['body'] = 'blog/testing';

		$data['M_jenis_pelajaran'] = $this->M_jenis_pelajaran->selectReferensiJenisPelajaran();
		$data['M_ruangan'] = $this->M_ruangan->selectTdRuangan();
		$data['M_jenis_jadwal'] = $this->M_jenis_jadwal->selectReferensiJenisJadwal();
		$data['M_jenis_hari'] = $this->M_jenis_hari->selectReferensiJenisHari();
		$data['M_jenis_jam'] = $this->M_jenis_jam->selectReferensiJenisJam();

		custom_layout($data);
	}

	public function doInsertKelasJadwal(){
		redirect();
	}

	public function doInsertKelasDetail(){
		$data['data'] = $this->input->post('myField');
		$id = $this->input->post('id');
		$tampung = explode(',',$data['data']);
		foreach ($tampung as $masuk) {
			$data = array(
				'nis' =>  $masuk,
				'id_kelas' => $id
				);
			$this->M_kelas_detail->addTdKelasDetail($data);
		}

		redirect('data_akademik/kelas/detail/'.$id.'');
		// $data['menu'] ="Mtest";
		// $data['body'] = "blog/welcome_message";
		// custom_layout($data); 
	} 

	public function doInsertKelas(){
		$this->form_validation->set_rules('id_ta', 'id_ta', 'required');
		$this->form_validation->set_rules('jumlah', 'jumlah', 'required');
		$this->form_validation->set_rules('tgl_awal', 'tgl_awal', 'required');
		$this->form_validation->set_rules('tgl_akhir', 'tgl_akhir', 'required');
		$this->form_validation->set_rules('id_jns_kelas', 'id_jns_kelas', 'reequired');

		$data = array(
				'id_ta' => $this->input->post('id_ta'),
				'jumlah' => $this->input->post('jumlah'),
				'tgl_awal' => $this->input->post('tgl_awal'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'id_jns_kelas' => $this->input->post('id_jns_kelas')
				);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'insert data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));

		$this->m_log->recordLog($dataLog);
		$this->M_kelas->addTdkelas($data);
		redirect('data_akademik/Kelas');

		// if ($this->form_validation->run() == FALSE ) {
		// 	$this->session->set_flashdata('error', 'fail to insert data, try insert again');
		// 	$dataLog = array(
		// 		'id_proses'=>'1',
		// 		'nama_proses'=>'insert data',
		// 		'nama_form' => 'data_akademik : kelas',
		// 		'keterangan'=>'gagal',
		// 		'id_rekam'=>$this->session->userdata('id_user'));
		// 	$this->M_log->recordLog($dataLog);
		// 	redirect('data_akademik/kelas/addKelas');
		// } else {
		// 	$dataLog = array(
		// 		'id_proses'=>'1',
		// 		'nama_proses'=>'insert data',
		// 		'nama_form' => 'data_akademik : kelas',
		// 		'keterangan'=>'berhasil',
		// 		'id_rekam'=>$this->session->userdata('id_user'));
		// 	$data = array(
		// 		'id_ta' => $this->input->post('id_ta'),
		// 		'jumlah' => $this->input->post('jumlah'),
		// 		'tgl_awal' => $this->input->post('tgl_awal'),
		// 		'tgl_akhir' => $this->input->post('tgl_akhir'),
		// 		'id_jns_kelas' => $this->input->post('id_jns_kelas')
		// 		);
		// 	$this->M_kelas->addTdkelas($data);
		// 	$this->m_log->recordLog($dataLog);

		// 	redirect('data_akademik/Kelas');
		// }

				//fix it later dunno why cann't insert data
	}

	public function updateKelas(){
		$data['title'] = "Update Data kelas";
		$data['menu'] = "Akademik";
		$data['submenu'] = "Ac_Kelas";
		$data['body'] = "dataAkademik/kelas/update_Kelas";
		$data['slug']= $this->uri->segment(4);

		$id = $this->uri->segment(4);
		$data['M_jenis_kelas'] = $this->M_jenis_kelas->selectReferensiJeniskelas();
		$data['M_tahun_ajaran'] = $this->M_tahun_ajaran->selectTdTahunAjaran();
		$data['m_kelas'] = $this->M_kelas->preUpdateTdkelas($id);

		custom_layout($data);
	}

	public function doUpdatekelas(){
		$nis = $this->input->post('nis');

		$this->form_validation->set_rules('jumlah', 'jumlah', 'trim|required');
		$this->form_validation->set_rules('id_ta', 'id_ta', 'trim|required');
		$this->form_validation->set_rules('id_jns_kelas', 'id_jns_kelas', 'trim|required');
		$this->form_validation->set_rules('tgl_awal', 'tgl_awal', 'trim|required');
		$this->form_validation->set_rules('tgl_akhir', 'tgl_akhir', 'trim|required');

		if ($this->form_validation->run() == FALSE ) {
			$this->session->set_flashdata('error', 'fail to insert data, try insert again');
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'gagal',
				'id_rekam'=>$this->session->userdata('id_user'));
			$this->M_log->recordLog($dataLog);
			redirect('data_akademik/kelas/updateKelas');
		} else {
			$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'update data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
			$data = array(
				'id_ta' => $this->input->post('id_ta'),
				'jumlah' => $this->input->post('jumlah'),
				'tgl_awal' => $this->input->post('tgl_awal'),
				'tgl_akhir' => $this->input->post('tgl_akhir'),
				'id_jns_kelas' => $this->input->post('id_jns_kelas')
				);
			$this->M_kelas->updateTdKelas($nis,$data);
			$this->m_log->recordLog($dataLog);

			redirect('data_akademik/Kelas');
		}

	}

	public function deleteKelas(){
		$id = $this->uri->segment(4);
		$this->M_kelas->deletekelas($id);

		$dataLog = array(
				'id_proses'=>'1',
				'nama_proses'=>'delete data',
				'nama_form' => 'data_akademik : kelas',
				'keterangan'=>'berhasil',
				'id_rekam'=>$this->session->userdata('id_user'));
		$this->m_log->recordLog($dataLog);

		redirect('data_akademik/Kelas');
	}

	public function kelasAllRelation(){
		redirect();
	}

	public function detail(){
		$id = $this->uri->segment(4);
		$data['menu'] ="Akademik";
		$data['submenu'] = "Detail List Santri";

		$data['title'] = 'Data Nilai Santri';
		$data['body'] = 'dataAkademik/kelas/select_kelas_detail';

		// $data['M_data_santri'] = $this->M_santri->preUpdateTdSantri($id);
		// $data['M_data_santri_nilai_detail'] = $this->M_santri_nilai->selectTdSantriNilaiWhere($id);
		$data['M_data_kelas'] = $this->M_kelas->selectTdKelasWhereId($id);
		$data['M_data_kelas_list_santri'] = $this->M_kelas->selectTdKelasWhereSantri($id);
		$data['M_data_kelas_jadwal'] = $this->M_kelas_jadwal->allSelectRelationTdKelasJadwalWhere2($id);
		$data['forSemesterTA'] = $this->M_kelas_jadwal->selectTdKelasJadwal(); // will fix later
		// $data['M_data_santri'] =

		custom_layout($data);
	}
}

/* End of file Kelas.php */
/* Location: ./application/controllers/data_akademik/Kelas.php */