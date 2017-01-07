<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapor extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ( ! $this->session->userdata('logged_in'))
    {
      redirect();
    }
	}

	public function index()
	{
		$data['id_user'] = $this->session->userdata('id_user');
		$data['level_user'] = $this->session->userdata('level_user');

		$data['menu'] = "Pribadi";
		$data['submenu'] = "P_Rapor";
		$data['body'] = "sistemAkademik/raporSelect";
		custom_layout($data);
	}
}

/* End of file rapor.php */
/* Location: ./application/controllers/rapor.php */
