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
		$data['menu'] = "Pribadi";
		$data['submenu'] = "P_Tabungan";
		$data['body'] = "admin/saldo/saldoSelect";
		custom_layout($data);
	}
}

/* End of file Saldo.php */
/* Location: ./application/controllers/Saldo.php */
