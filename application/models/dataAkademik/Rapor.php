<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapor extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  public function getNilai($ta, $santri)
  {
      #code
      $this->db->select('sn.nilai_akhir as nilai, jp.uraian_en as pelajaranEn, jp.uraian_ar as pelajaranAr');
      $this->db->from('td_kelas_nilai as kn');
      $this->db->join('td_santri_nilai as sn', 'kn.id_santri_nilai = sn.id_santri_nilai');
      $this->db->join('tr_jenis_pelajaran as jp', 'sn.id_jns_pelajaran = jp.id_jns_pelajaran');
      $this->db->where('nis', $santri);
      $this->db->where('id_kelas_jadwal', $ta);
      $query = $this->db->get();
      return $query->result_array();
  }

  public function getSantri($santri)
  {
      #code
      $this->db->select('s.nama, s.nama_ar, ');
      $this->db->from('td_santri as s');
      $this->db->join('td_kelas_dtl as kd', 's.nis = kd.nis');
      $this->db->join('td_kelas as k', 'kd.id_kelas = k.id_kelas');
      $this->db->where('nis', $santri);
      $query = $this->db->get();
      return $query->result_array();
  }

}
