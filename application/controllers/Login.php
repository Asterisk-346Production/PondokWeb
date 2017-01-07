<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	 public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Login');
		if ($this->session->userdata('logged_in')) {
			$allowed = array('logout');
			if ( ! in_array($this->router->fetch_method(), $allowed)) {
				// redirect('indexAdmin');
				redirect('demo/home_demo');
			}
        }
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function loginProcess(){
		$this->form_validation->set_rules('username', 'Username', 'trim|required|strtolower');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|strtolower');

		if($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password')
			);
			$result = $this->M_Login->getUserPass($data);
			if($result == TRUE){
				$result = $this->M_Login->getUserInformation($data);
				$sess_array = array();
				foreach ($result as $row) {
					$sess_array =array(
						# code...
						'id_list_user'=> $row['id_list_user'],
						'id_user' => $row['id_user'],
						'level_user' => $row['level_user'],
						'logged_in'=> TRUE
					);
					$this->session->set_userdata($sess_array);
				}
				// redirect('indexAdmin');
				redirect('demo/home_demo');
			}else{
				$this->session->set_flashdata('error_message', 'Invalid Username or Password');
				redirect('Login');
			}
		}
	}

	public function logout() {
		/*$sess = array(
			'id',
			'typeuser',
			'idkary',
			'logged_in'=> FALSE
		);
		$this->session->unset_userdata($sess);*/
		$this->session->sess_destroy();
		redirect('Login');

	}
}

/* End of file loginController.php */
/* Location: ./application/controllers/loginController.php */
