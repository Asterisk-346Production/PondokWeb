<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_Demo extends CI_Controller {

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
		$data['body'] = "admin/home_demo";
		custom_layout($data);
	}
}

/* End of file ikeh.php */
/* Location: ./application/controllers/kimochi/ikeh.php */
