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

	public function htmlto(){
		$mpdf = new mPDF('','A4-L');
		$semester ='1';
		$id_jns_jadwal ='1';

		$css ="<style>
		table, th, td{
			border: 1px solid black;
		}
		</style>";

		$mpdf->WriteHTML($css);

		$a = $this->M_mtest->getSemester($semester);
		if($a == true){
			$b = $this->M_mtest->getKelas2();
			$i = 0;
			foreach($b as $item):
				if($i != 0){
					$mpdf->WriteHTML("<pagebreak/>");
				}
				$i++;

				// Set Incremental Number
				$n = 0;
				// Set Array Nilai
				$score = [];
				// Set Array All Score per Student
				$allscore = [];
				// Get Jenis Pelajaran List
				$data['subject'] = $this->M_mtest->pGetAllSubjects();
				// Get Santri List
				$data['student'] = $this->M_mtest->pGetAllStudents();

				foreach ($data['student'] as $student) {
					# code...
					// Set Santri Name
					$score['santri'] = $student['nama'];
					// Set Incremental Number
					$m = 0;
					foreach ($data['subject'] as $subject) {
						# code...
						// Get Santri Final Score
						$santriscore = $this->M_mtest->pGetScore($student['nis'], $subject['id_jns_pelajaran']);
						// Set Subject Score and check if student didn't have any score then print 0
						$score['subject'.++$m] = ($santriscore == NULL) ? 0 : $santriscore['nilai'];
					}
					// Insert Student Scores to $allscore
					array_push($allscore, $score);
					// Unset $score to
					unset($score);
				}
				// Pass Data to View
				$data['scores'] = $allscore;

				$html = $this->load->view('mtes/getto', $data, TRUE);
				$mpdf->use_kwt = true;
				$mpdf->SetFooter('{PAGENO}');
				$mpdf->WriteHTML($html,2);

				// Unset Score Array
				unset($allscore);
			endforeach;
		}else{
			$mpdf->WriteHTML("Data not available",2);
		}
			$mpdf->Output(time()."-download-rekap-pelajaran.pdf","D");
			redirect('mtest');
	}

	// public function htmlto(){
	// 	$mpdf = new mPDF('','A4-L');
	// 	$semester ='1';
	// 	$id_jns_jadwal ='1';
	//
	// 	$css ="<style>
	// 	table, th, td{
	// 		border: 1px solid black;
	// 	}
	// 	</style>";
	//
	// 	$mpdf->WriteHTML($css);
	//
	// 	$a = $this->M_mtest->getSemester($semester);
	// 	if($a == true){
	// 		$b = $this->M_mtest->getKelas2();
	// 		$i = 0;
	// 		foreach($b as $item):
	// 			if($i != 0){
	// 				$mpdf->WriteHTML("<pagebreak/>");
	// 			}
	// 			$i++;
	// 			$data['data'] = $this->M_mtest->getNilaiKelas($semester,$id_jns_jadwal);
	// 			$html = $this->load->view('mtes/getto', $data, TRUE);
	// 			$mpdf->use_kwt = true;
	// 			$mpdf->SetFooter('{PAGENO}');
	// 			$mpdf->WriteHTML($html,2);
	// 		endforeach;
	// 	}else{
	// 		$mpdf->WriteHTML("Data not available",2);
	// 	}
	// 		$mpdf->Output(time()."-download-rekap-pelajaran.pdf","D");
	// 		redirect('mtest');
	// }

	public function xhtmlto()
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
			$c = $this->M_mtest->getPelajaran2($item['id_jns_kelas']);
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
