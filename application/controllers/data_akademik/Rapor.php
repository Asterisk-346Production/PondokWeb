<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapor extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
		if(!$this->session->userdata('logged_in')){
			redirect();
		}
    $this->load->model('Rapor');
  }

  function index()
  {
    custom_layout($data);
  }

  public function getRapor()
  {
    #code
    $kelas_jadwal = $this->input->post('ta');
    $santri = $this->input->post('idSantri');

    $data['nilai'] = $this->Rapor->getNilai($kelas_jadwal, $santri);
    $data['santri'] = $this->Rapor->getSantri($santri);
  }

}
