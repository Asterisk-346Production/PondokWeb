<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataSaya extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('m_profile');
		$level_user_for_valid = $this->session->userdata('level_user');
		if ( !$this->session->userdata('logged_in'))
        { 
            redirect();
        }
	}

	public function index()
	{
		$data['id_user'] = $this->session->userdata('id_user');
		$data['level_user'] = $this->session->userdata('level_user');
		$this->load->view('profile/profileSelect', $data, FALSE);	
	}


}

/* End of file dataSaya.php */
/* Location: ./application/controllers/dataSaya.php */