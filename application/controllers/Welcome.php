<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function Index()
	{
<<<<<<< HEAD
<<<<<<< 31ef1817470188be4ee84b253e9369c9b3a7f083
<<<<<<< HEAD
		$this->load->view('blog/welcome_message');
=======
		$data['body'] = "blog/welcome_message";
		custom_layout($data);
>>>>>>> d2af1226ed22e91f3abe8a4fcd8a9319e6ec20cb
=======
<<<<<<< .merge_file_a05060
		$data['body'] = "blog/welcome_message";
		custom_layout($data);
=======
		$this->load->view('blog/welcome_message');
>>>>>>> .merge_file_a05940
>>>>>>> no message
=======
<<<<<<< HEAD
<<<<<<< .merge_file_a05060
		$data['body'] = "blog/welcome_message";
		custom_layout($data);
=======
		$this->load->view('blog/welcome_message');
>>>>>>> .merge_file_a05940
=======
<<<<<<< HEAD
		$this->load->view('blog/welcome_message');
=======
		$data['body'] = "blog/welcome_message";
		custom_layout($data);
>>>>>>> d2af1226ed22e91f3abe8a4fcd8a9319e6ec20cb
>>>>>>> master
>>>>>>> 9973bbc2de617f66ebc4130033483f053b63a4c5
	}
}
