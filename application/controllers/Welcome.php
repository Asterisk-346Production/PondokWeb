<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function Index()
	{
		$data['body'] = "blog/welcome_message";
		custom_layout($data);
	}
}
