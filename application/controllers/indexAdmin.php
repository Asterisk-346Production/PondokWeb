<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexAdmin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$level_user_for_valid = $this->session->userdata('level_user');
		if ( !$this->session->userdata('logged_in') && $level_user_for_valid ==1)
        { 
            redirect();
        }
		// $this->load->model('');
		// $this->load->helper('date');
	}

	public function index()
	{
		$levels = $this->session->userdata('level_user');
		if($levels == 1){
			$this->load->view('admin/home');
		}else{
			redirect();
		}
	}

}

/* End of file indexAdmin.php */
/* Location: ./application/controllers/indexAdmin.php */