<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mtest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
		include_once APPPATH.'/third_party/mpdf/mpdf.php';
		$this->load->model('');
	}

	public function index()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['menu'] = "Mtest";
		$data['body'] = "mtes/input";

		custom_layout($data);
	}

  public function htmlto()
	{
		$data['nama'] = $this->input->post('nmt');
		$data['detail'] = $this->input->post('dtt');
		$data['other'] = $this->input->post('orm');

		$html = $this->load->view('mtes/getto', $data);

		$mpdf = new mPDF();

		$html = $this->load->view('mtes/getto', $data, true);
		$stylesheet = file_get_contents(base_url().'/assets/adminLte/css/bootstrap.min.css');
		$stylesheet .= file_get_contents(base_url().'/assets/adminLte/css/bootstrap-theme.css');
		$stylesheet .= file_get_contents(base_url().'/assets/adminLte/css/style.css');
		$stylesheet .= file_get_contents(base_url().'/assets/adminLte/css/style-responsive.css');

		$mpdf->WriteHTML($stylesheet,1);
		$mpdf->WriteHTML($html,2);
		$mpdf->Output(time()."-download.pdf", "D");

		redirect('mtest');
	}

	public function blanko()
	{
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data['title'] = "Blanko Test";
		$data['menu'] = "Mtest";
		$data['body'] = "mtes/blanko";

		// $this->load->view('mtes/blanko', $data);
		$this->load->view('shared/layout', $data);
	}

	public function printBlanko(){
		$data['level_user'] = $this->session->userdata('level_user');
		$data['id_user'] = $this->session->userdata('id_user');

		$data = $this->load->model('Model File');
	}
}
