<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Referensi_kkm extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
		$this->load->model('log/M_log');
		$this->load->model('referensi/M_kkm');
		$this->load->model('referensi/M_jenis_pelajaran');
		$this->load->model('dataAkademik/M_tahun_ajaran');
	}

	public function index()
	{
		$data['title'] = "List Referensi KKM Pelajaran";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_KKM";
		$data['body'] = "referensi/kkm/select_kkm";

		$data['m_jenis_beasiswa'] = $this->M_kkm->selectTrKKM();

		custom_layout($data);
	}

	public function addTrKKM(){
		$data['title'] = "Add Referensi KKM Pelajaran";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_KKM";
		$data['body'] = "referensi/kkm/insert_kkm";

		$data['m_jenis_pelajaran'] = $this->M_jenis_pelajaran->selectReferensiJenisPelajaran();
		$data['m_tahun_ajaran'] = $this->M_tahun_ajaran->selectTdTahunAjaran();

		custom_layout($data);
	}

	public function doInsertTrKKM(){
		$this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
		$this->form_validation->set_rules('id_ta', 'id_ta', 'trim|required');
		$this->form_validation->set_rules('id_jns_pelajaran', 'id_jns_pelajaran', 'trim|required');


		$nilai = $this->input->post('nilai');
		if($nilai >= 100){
			$this->session->set_flashdata('error', 'nilai cannot be more than 100');
			redirect('referensi/referensi_kkm/addTrKKM');
		}
		else
		{
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error', 'fail to insert data, try insert again');
					$dataLog = array(
						'id_proses'=>'1',
						'nama_proses'=>'insert data',
						'nama_form' => 'referensi_kkm',
						'keterangan'=>'gagal',
						'id_rekam'=>$this->session->userdata('id_user'));
				$this->M_log->recordLog($dataLog);
				redirect('referensi/referensi_kkm/addTrKKM');
			} else {
					$dataLog = array(
						'id_proses'=>'1',
						'nama_proses'=>'insert data',
						'nama_form' => 'referensi_kkm',
						'keterangan'=>'gagal',
						'id_rekam'=>$this->session->userdata('id_user'));

					$data = array(
						'nilai' => $nilai,
						'id_ta' => $this->input->post('id_ta'),
						'id_jns_pelajaran' => $this->input->post('id_jns_pelajaran'),
						);

					$this->M_kkm->inserTrKKM($data);
					$this->M_log->recordLog($dataLog);
					redirect('referensi/Referensi_kkm');
			}
		}


	}

	public function updateTrKKM(){
		$data['title'] = "Update Referensi KKM Pelajaran";
		$data['menu'] = "Referensi";
		$data['submenu'] = "R_KKM";
		$data['body'] = "referensi/kkm/update_kkm";

		$data['slug']= $this->uri->segment(4);
		$id = $this->uri->segment(4);
		$data['m_jenis_jadwal'] = $this->M_jenis_jadwal->preUpdateTrKKM($id);

		custom_layout($data);
	}

	public function doUpdateTrKKM(){
		$this->form_validation->set_rules('nilai', 'nilai', 'trim|required');
		$this->form_validation->set_rules('id_ta', 'id_ta', 'trim|required');
		$this->form_validation->set_rules('id_jns_pelajaran', 'id_jns_pelajaran', 'trim|required');

		$id = $this->input->post('id');
		$nilai = $this->input->post('nilai');
		if($nilai >= 100){
			$this->session->set_flashdata('error', 'nilai cannot be more than 100');
			redirect('referensi/referensi_kkm/addTrKKM');
		}
		else
		{
			if ($this->form_validation->run() == false) {
				$this->session->set_flashdata('error', 'fail to update data, try insert again');
					$dataLog = array(
						'id_proses'=>'1',
						'nama_proses'=>'update data',
						'nama_form' => 'referensi_kkm',
						'keterangan'=>'gagal',
						'id_rekam'=>$this->session->userdata('id_user'));
				$this->M_log->recordLog($dataLog);
				redirect('referensi/referensi_kkm/addTrKKM');
			} else {
					$dataLog = array(
						'id_proses'=>'1',
						'nama_proses'=>'update data',
						'nama_form' => 'referensi_kkm',
						'keterangan'=>'gagal',
						'id_rekam'=>$this->session->userdata('id_user'));

					$data = array(
						'nilai' => $nilai,
						'id_ta' => $this->input->post('id_ta'),
						'id_jns_pelajaran' => $this->input->post('id_jns_pelajaran'),
						);

					$this->M_kkm->updateTrKKM($id,$data);
					$this->M_log->recordLog($dataLog);
					redirect('referensi/Referensi_kkm');
			}
		}
	}

	public function delteTrKKM(){
		$id =  $this->uri->segment(4);
		$this->M_kkm->deleteTrKKm($id);
		redirect('referensi/referensi_kkm');
	}

}

/* End of file referensi_kkm.php */
/* Location: ./application/controllers/referensi/referensi_kkm.php */