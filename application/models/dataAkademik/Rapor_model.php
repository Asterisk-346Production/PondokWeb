<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rapor_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->database();
  }

  public function getNilai($santri, $ta, $start, $take)
  {
      #code
      $this->db->select('sn.nilai_akhir as nilai, jp.uraian_en as pelajaranEn, jp.uraian_ar as pelajaranAr');
      $this->db->from('td_kelas_nilai as kn');
      $this->db->join('td_santri_nilai as sn', 'kn.id_santri_nilai = sn.id_santri_nilai');
      $this->db->join('tr_jenis_pelajaran as jp', 'sn.id_jns_pelajaran = jp.id_jns_pelajaran');
      $this->db->where('sn.nis', $santri);
      $this->db->where('kn.id_kelas_jadwal', $ta);
      $query = $this->db->get('');
      return $query->result_array();
  }

  public function getSantri($santri)
  {
      #code
      $this->db->select('s.nama, s.nama_ar, jk.uraian, ta.tahun_awal, ta.tahun_akhir, ta.tgl_akhir');
      $this->db->from('td_santri as s');
      $this->db->join('td_kelas_dtl as kd', 's.nis = kd.nis');
      $this->db->join('td_kelas as k', 'kd.id_kelas = k.id_kelas');
      $this->db->join('tr_jenis_kelas as jk', 'k.id_jns_kelas = jk.id_jns_kelas');
      $this->db->join('td_tahun_ajaran as ta', 'k.id_ta = ta.id_ta');
      $this->db->where('s.nis', $santri);
      $query = $this->db->get();
      return $query->result_array();
  }

  public function getCountNilai($santri, $ta)
  {
    # code...
    $this->db->from('td_kelas_nilai as kn');
    $this->db->join('td_santri_nilai as sn', 'kn.id_santri_nilai = sn.id_santri_nilai');
    $this->db->where('sn.nis', $santri);
    $this->db->where('kn.id_kelas_jadwal', $ta);
    $query = $this->db->get();
    return count($query);
  }

}
