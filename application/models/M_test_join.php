<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_test_join extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function testSelect(){
		
	}
}

/* End of file M_test_join.php */
/* Location: ./application/models/M_test_join.php */