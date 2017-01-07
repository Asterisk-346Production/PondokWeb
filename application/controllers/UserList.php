<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserList extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		if ( ! $this->session->userdata('logged_in'))
        { 
            redirect();
        }
	}

	public function index()
	{
		$data = $this->admin_model->getListUserAdmin();
		$levels = $this->session->userdata('level_user');
		if($levels == 1){
			$this->load->view('blog/welcome_message', $data);
		}else{
			redirect();
		}
	}

	public function addUser(){
		$data['id_user'] = $this->session->userdata('id_user');
		$data['level_user'] = $this->session->userdata('level_user');
		$this->load->view('admin/admin_user_list/insertUser',$data);
	}

	public function createNewUser(){
		$this->form_validation->set_rules('username', 'username', 'trim|required|is_unique[list_user.id_user]');
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		
		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_message', 'Some field is Invalid');
			redirect('UserList/addUser');
		}else{
			$data = array(
				'id_user' => $this->input->post('username'),
				'pass_user' => $this->input->post('password'),
				'level_user' => $this->input->post('levelUser'),
				'blokir_user' => $this->input->post('blokirUser')
				);
			$this->admin_model->insertListUserAdmin($data);
			redirect('UserList');
		}
	}

	public function editUser(){
		$id = $this->uri->segment(3);
		$data['id_user'] = $this->session->userdata('id_user');
		$data['level_user'] = $this->session->userdata('level_user');
		$data['slug'] = $this->admin_model->readUpdateUserList($id);
		$this->load->view('updateUser', $data);
	}

	public function doUpdateUser(){
		$this->form_validation->set_rules('password', 'password', 'trim|required');
		$dataPassawordUser = $this->input->post('password');
		// $data['']

		$id = $this->input->post('id');
		if($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error_message', 'Some field is Invalid');
			redirect('UserList/editUser', $id);
		}else{
			$data = array(
				'pass_user' => $this->input->post('password'),
				'level_user' => $this->input->post('levelUser'),
				'blokir_user' => $this->input->post('blokirUser')
			);
			$this->admin_model->updateListUserAdmin($id, $data);
			redirect('UserList');
		}
	}

	public function blokirUser(){
		$id = $this->uri->segment(3);
		$this->admin_model->blokirListUserAdmin($id);
		redirect('UserList');
	}

	public function deleteUser(){
		$id = $this->uri->segment(3);
		$this->admin_model->deleteListUserAdmin($id);
		redirect('UserList');
	}

}

/* End of file UserListController */
/* Location: ./application/controllers/UserListController */