<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('saldo_model');
		if ( ! $this->session->userdata('logged_in'))
        {
            redirect();
        }
	}


	public function index()
	{
		$data['id_user'] = $this->session->userdata('id_user');
		$data['level_user'] = $this->session->userdata('level_user');
 		$this->load->view('admin/saldo/saldoSelect',$data);
	}

}

/* End of file Saldo.php */
/* Location: ./application/controllers/Saldo.php */