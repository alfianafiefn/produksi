<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_AplicationReport extends CI_Controller {

			
	function __construct()
    {
		parent::__construct();
		$this->load->helper('text_helper');
		$this->load->library('form_validation');
	    $this->load->helper(array('url','html','form'));
	}
	
	public function index(){
			if($this->session->userdata('validated') == FALSE){
            redirect('C_Auth');
			} else {
					$data['noind'] = $this->session->userdata('noind');
					$data['unit'] = $this->session->userdata('unit');
					$data['jabatan'] = $this->session->userdata('jabatan');
					$this->load->view('V_Dashboard', $data );
			}
	}
	
	public function target_produksi(){
		if($this->session->userdata('validated') == FALSE){
            redirect('C_Auth');
			}
		
		$querybarang = $this->db->query("select kode_brg,kode_pro,nama_brg from lkhprktc.tbl_barang");
		$data['barang'] = $querybarang->result();
				
		$local = $this->load->database('local',true);
		$view = $local->query("select * from produksi");
		$data['view'] = $view->result();
		
		$url = $this->uri->segment(3);
				
		$tanggal= addslashes($this->input->post('tanggal_produksi'));
		$shift = addslashes($this->input->post('shift'));
		$nama = addslashes($this->input->post('nama_barang'));
		
				if($url == "add"){
					$add = $local->query("insert into produksi values ('','$tanggal','$shift','$nama')");
					redirect('C_AplicationReport/target_produksi');
				}
				
		$data['noind'] = $this->session->userdata('noind');
		$data['jabatan'] = $this->session->userdata('jabatan');
		$data['unit'] = $this->session->userdata('unit');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('V_productiontarget',$data);
	}
	
	public function target_harian(){
			if($this->session->userdata('validated') == FALSE){
            redirect('C_Auth');
			}
		
		$this->load->model('');
		$querygudang = $this->db->query("select nama_gud from lkhprktc.tbl_gudang");
		$data['gudang'] = $querygudang->result();
		$data['noind'] = $this->session->userdata('noind');
		$data['jabatan'] = $this->session->userdata('jabatan');
		$data['unit'] = $this->session->userdata('unit');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('V_dailytarget',$data);
	}
	
	public function pembagian_kelompok(){
		if($this->session->userdata('validated') == FALSE){
            redirect('C_Auth');
			}
		$data['noind'] = $this->session->userdata('noind');
		$data['jabatan'] = $this->session->userdata('jabatan');
		$data['unit'] = $this->session->userdata('unit');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('V_groupsetting',$data);
	}
	
	public function daily_report() {
			if($this->session->userdata('validated') == FALSE){
            redirect('C_Auth');
			}
													 $section = addslashes($this->input->post('section'));
													 $vacancy = addslashes($this->input->post('vacancy'));
													 $major = addslashes($this->input->post('major'));
													 $date_post = addslashes($this->input->post('date_post'));
													 $post_by = addslashes($this->input->post('post_by'));
													 $placement = addslashes($this->input->post('placement'));
													 $status = addslashes($this->input->post('status'));
													 $work = addslashes($this->input->post('work'));
													 $grade = addslashes($this->input->post('grade'));
													 $gender = addslashes($this->input->post('gender'));
													 $education = addslashes($this->input->post('education'));
													 $description = addslashes($this->input->post('description'));
													 $qualification = addslashes($this->input->post('qualification'));
													 $publish_date = addslashes($this->input->post('publish_date'));
													 $expired_date = addslashes($this->input->post('expired_date'));
													
													 $url = $this->uri->segment(3);
													 $keyword = $this->uri->segment(4);
													 
													 //$perakitanC = $this->load->database('perakitanC');
													 $lokal = $this->load->database('local',true);
													 $view = $lokal->query("select * from report_pekerja as a left join produksi as b on a.kode_produksi=b.kode_produksi");
													 $data['data'] = $view->result();
													 
													 if ($url=="add"){
														$result = array();
														foreach($_POST['noind'] AS $key=> $val){
															$result[] = array(
																"noind" => $_POST['noind'],
																"nama" => $_POST['nama'],
																"target" => $_POST['target'],
																"status" => $_POST['status'],
																"keterangan" => $_POST['keterangan'],
																"keterangan" => $_POST['keterangan']
															);
														}
													 } else if ($url == "delete"){
														 $delete = $this->db->query("delete from addjobs where id_lowongan='$keyword'");
													redirect('C_AdminRecruitment/vacancy');
													 } else if ($url == "edit") {
														 $edit = $this->db->query("select * from addjobs where id_lowongan='$keyword'");
														 $data['edit'] = $edit->result();
														 $this->load->view('edit_vacancy',$data);
													 }
													 
		
		$data['noind'] = $this->session->userdata('noind');
		$data['jabatan'] = $this->session->userdata('jabatan');
		$data['unit'] = $this->session->userdata('unit');
		$data['level'] = $this->session->userdata('level');
		$this->load->view('V_dailyreport',$data);
	}
	
	public function export_report_daily(){
				$this->excel->setActiveSheetIndex(0);
                //name the worksheet
                $this->excel->getActiveSheet()->setTitle('LaporanKerja');
                //set cell A1 content with some text
                $this->excel->getActiveSheet()->setCellValue('B1', 'CV. KARYA HIDUP SENTOSA');
                $this->excel->getActiveSheet()->setCellValue('B2', 'JL. MAGELANG 144');
                $this->excel->getActiveSheet()->setCellValue('B3', 'YOGYAKARTA');
                $this->excel->getActiveSheet()->setCellValue('A4', 'LAPORAN KERJA OPERATOR - SEKSI PERAKITAN MESIN PANEN');
                $this->excel->getActiveSheet()->setCellValue('A6', 'BULAN.');
                $this->excel->getActiveSheet()->setCellValue('E6', 'NOIND');
                $this->excel->getActiveSheet()->setCellValue('C3', 'Nama');
				$this->excel->getActiveSheet()->setCellValue('D3', 'Kodesie');
                $this->excel->getActiveSheet()->setCellValue('E3', 'gpokok');
                $this->excel->getActiveSheet()->setCellValue('F3', 'insabc');
                $this->excel->getActiveSheet()->setCellValue('G3', 'inskedis');
                $this->excel->getActiveSheet()->setCellValue('H3', 'inskepatuhan');
                //merge cell A1 until C1
                $this->excel->getActiveSheet()->mergeCells('A4:H4');
                //set aligment to center for that merged cell (A1 to C1)
                $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                //make the font become bold
                $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
                $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(12);
                $this->excel->getActiveSheet()->getStyle('A1')->getFill()->getStartColor()->setARGB('#333');
				//fungsi bold thead
  //     for ($thead=ord('A3'); $thead<=ord('W3'); $thead++) {
	//				  $this->excel->getActiveSheet()->getStyle(chr($thead))->getFont()->setBold(true);
	//			      $this->excel->getActiveSheet()->getStyle(chr($thead))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
	//			}
                $filename='presensi.xls'; //save our workbook as this file name
                header('Content-Type: application/vnd.ms-excel'); //mime type
                header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
                header('Cache-Control: max-age=0'); //no cache
 
                //save it to Excel5 format (excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
                //if you want to save it as .XLSX Excel 2007 format
                $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
                //force user to download the Excel file without writing it to server's HD
                $objWriter->save('php://output');
	}
}