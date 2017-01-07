<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IndexAdmin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if ( !$this->session->userdata('logged_in') || $this->session->userdata('level_user') != 1)
    {
      redirect();
    }
		// $this->load->model('');
		// $this->load->helper('date');
	}

	public function index()
	{
		$data['menu'] = "Admin";
		$data['submenu'] = "Adm_Admin";
		$data['body'] = "admin/home";
		custom_layout($data);
	}
}

/* End of file indexAdmin.php */
/* Location: ./application/controllers/indexAdmin.php */
