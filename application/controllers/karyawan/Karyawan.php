<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
	}

	public function index()
	{
		
	}

}

/* End of file Karyawan.php */
/* Location: ./application/controllers/karyawan/Karyawan.php */