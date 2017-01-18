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
    include_once APPPATH.'/third_party/mpdf/mpdf.php';
    $this->load->model('dataAkademik/Rapor_model');
  }

  function index()
  {
    custom_layout($data);
  }

  public function getRapor()
  {
    #code
    $mpdf = new mPDF('utf-8','A3');
    $mpdf->autoScriptToLang = true;
    $mpdf->autoLangToFont = true;
    $mpdf->baseScript = 1;
    $mpdf->autoArabic = true;

    $semester ='1';
    $id_jns_jadwal ='1';

    $css ="<style>
    table, th, td{
      border: 1px solid black;
    }
    </style>";

    $mpdf->WriteHTML($css);

    $kelas_jadwal = $this->input->post('ta');
    $santri = $this->input->post('idSantri');

    $nilai = $this->Rapor_model->getCountNilai($kelas_jadwal, $santri);
    $data['santri'] = $this->Rapor_model->getSantri($santri);
    if($nilai > 0){
      if($nilai < 5){
        $data['nilai1'] = '';
        $data['nilai2'] = $this->Rapor_model->getCountNilai($kelas_jadwal, $santri, 0, $nilai);
        $data['pos'] = 'less';
      } elseif ($nilai == 5) {
        # code...
        $data['pos'] = 'same';
        $data['nilai1'] = '';
        $data['nilai2'] = $this->Rapor_model->getCountNilai($kelas_jadwal, $santri, 0, $nilai);
      } else {
        # code...
        if($nilai % 2 == 1){
          $data['pos'] = 'more-odd';
          $data['nilai1'] = $this->Rapor_model->getCountNilai($kelas_jadwal, $santri, 0, (($nilai+5)/2));
          $data['nilai2'] = $this->Rapor_model->getCountNilai($kelas_jadwal, $santri, ((($nilai+5)/2)-1), (($nilai+5)/2));
        } else {
          # code...
          $data['pos'] = 'more-even';
          $data['nilai1'] = $this->Rapor_model->getCountNilai($kelas_jadwal, $santri, 0, (($nilai + 6)/2));
          $data['nilai2'] = $this->Rapor_model->getCountNilai($kelas_jadwal, $santri, ((($nilai+6)/2)-1), (($nilai+4)/2));
        }
      }
      $html = $this->load->view('dataAkademik/rapor/rapor', $data, TRUE);
      $mpdf->use_kwt = true;
      $mpdf->SetFooter('{PAGENO}');
      $mpdf->WriteHTML($html,2);
    }else{
      $mpdf->WriteHTML("Data not available",2);
    }
    $mpdf->Output(time()."-download-rapor.pdf","D");
  }

}
