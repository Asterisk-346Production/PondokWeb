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
		$this->load->model('M_mtest');
	}

	public function index()
	{
		$data['menu'] = "Mtest";
		$data['body'] = "mtes/input";
		custom_layout($data);
	}

	public function htmlto()
	{
		$mpdf = new mPDF('', 'A4-L');

		$css ="<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>";

	$mpdf->WriteHTML($css);

		$a = $this->M_mtest->getTA(null);	// check if current semester had any data
		if($a == true){
			$b = $this->M_mtest->getKelas();	// get Kelas
			$i=0;
			foreach ($b as $item) {
				if($i != 0){
					$mpdf->WriteHTML("<pagebreak />");
				}
				$i++;
				$data['data'] = $this->M_mtest->getNilai($a, $item['kelas']);	// get Score, Student, etcetera
				$html = $this->load->view('mtes/getto', $data, true);
				$mpdf->use_kwt = true;
				$mpdf->SetFooter('{PAGENO}');
				$mpdf->WriteHTML($html,2);
			}
		} else {
			$mpdf->WriteHTML("Data not available.",2);
		}

		$mpdf->Output(time()."-download-raport.pdf", "D");

		redirect('mtest');
	}

	public function Blanko(){
	$mpdf = new mPDF('','A4');
	$css ="<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>";
	$semester ='1';
	$mpdf->WriteHTML($css);

	$a = $this->M_mtest->getSemester($semester);
	$b = $this->M_mtest->getKelas2();
	$id_kelas_jadwal =  '1';

	if($a == true){
		$i = 0;
		foreach($b as $item){
			$c = $this->M_mtest->getPelajaran2($item['id_jns_pelajaran']);
			$j = 0;
			foreach ($c as $dataItem){
				if($i !=0 || $j != 0){
					$mpdf->WriteHTML("<pagebreak />");
				}
				$j++;
				$data['kelas'] = $item['uraian'];
				$data['pelajaran'] = $dataItem['uraian'];
				$data['semester'] = $semester;
			// $data['data'] = $this->M_mtest->getNilaiBlanko2($semester, $item['id_jns_pelajaran'], $dataitem['id_jns_kelas'],$id_kelas_jadwal);//get score
				$data['data'] = $this->M_mtest->getNilaiBlanko2($id_kelas_jadwal);
				$html = $this->load->view('mtes/blanko', $data, true);
				$mpdf->use_kwt = true;
				$mpdf->SetFooter('{PAGENO}');
				$mpdf->WriteHTML($html,2);
				$i++;
			}
		}
	}else{
		$mpdf->WriteHTML("Data not available.",2);
	}
	
		// $html = $this->load->view('mtes/getto', $data, true);
		$mpdf->Output(time()."-download-blanko.pdf", "D");

		redirect('mtest');
	}





	public function xblanko()
	{
		$mpdf = new mPDF('', 'A4');

		$css ="<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>";

	$mpdf->WriteHTML($css);

		$a = $this->M_mtest->getTA('1617_1');	// check if current semester had any data
		if($a == true){
			// substring year_semester
			$tyear1 = substr($a, 0, 2);
			$tyear2 = substr($a, 2, 2);

			$b = $this->M_mtest->getKelas();	// get Kelas
			$i=0;
			foreach ($b as $item) {
				$c = $this->M_mtest->getPelajaran($item['kelas']);	// get Pelajaran by Kelas
				$j=0;
				foreach ($c as $dataitem) {
					if($i != 0 || $j != 0){
						$mpdf->WriteHTML("<pagebreak />");
					}
					$j++;
					$data['kelas'] = $item['kelas'];	// kelas
					$data['pelajaran'] = $dataitem['nm_pelajaran'];	// nm_pelajaran
					$data['ta'] = "20".$tyear1." - 20".$tyear2;
					$data['data'] = $this->M_mtest->getNilaiBlanko($a, $item['kelas'], $dataitem['nm_pelajaran']);	// get Score, Student, etcetera
					$html = $this->load->view('mtes/blanko', $data, true);
					$mpdf->use_kwt = true;
					$mpdf->SetFooter('{PAGENO}');
					$mpdf->WriteHTML($html,2);
				}
				$i++;
			}
		} else {
			$mpdf->WriteHTML("Data not available.",2);
		}

		// $html = $this->load->view('mtes/getto', $data, true);
		$mpdf->Output(time()."-download-blanko.pdf", "D");

		redirect('mtest');
	}
}
