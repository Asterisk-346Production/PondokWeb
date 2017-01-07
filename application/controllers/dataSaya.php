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

		$data['menu'] = "Pribadi";
		$data['submenu'] = "P_Diri";
		$data['body'] = "profile/profileSelect";
		custom_layout($data);
	}
}

/* End of file dataSaya.php */
/* Location: ./application/controllers/dataSaya.php */
