<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_log extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function recordLog($data)
	{
		$this->db->insert('tp_log', $data);
	}

	public function selectLog(){
		$this->db->select('*');
		$query =  $this->db->get('tp_log');
		return $query->result_array();
	}

}

/* End of file m_log.php */
/* Location: ./application/models/log/m_log.php */