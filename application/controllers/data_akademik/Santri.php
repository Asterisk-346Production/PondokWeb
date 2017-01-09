<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Santri extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->$this->load->model('log/m_log');
		$this->$this->load->model('dataAkademik/M_santri');
		if(!$this->session->userdata('logged_in'))
		{
			redirect();
		}
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = 'Data Santri';
		// $data['body'] ='dataAkademik/selectSantri';
		$data['body'] ='blog/welcome';
		$data['M_data_santri'] = $this->M_santri->selectTdSantri();
		custom_layout($data); 
	} 
}

/* End of file Santri.php */
/* Location: ./application/controllers/data_akademik/Santri.php */