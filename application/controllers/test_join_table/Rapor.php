<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapor extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			//Do your magic here
			$this->load->model('m_test_join');
		}	
	public function index()
	{
		$data['arrData'] = $this->m_test_join->testSelect();
		$this->$this->load->view('blog/welcome_message', $data);
	}

}

/* End of file Rapor.php */
/* Location: ./application/controllers/test_join_table/Rapor.php */