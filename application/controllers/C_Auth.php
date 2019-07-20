<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Auth extends CI_Controller {
   function __construct() {
        parent::__construct();
    }
	public function index()
	{
		$this->load->view('login');
	}
        
		
	public function login()
	{
		$noind = $this->security->xss_clean($this->input->post('noind'));
		$pass = $this->security->xss_clean($this->input->post('password'));
		$local= $this->load->database('local',true);
		$q_cek = $local->query("select * from master_login where unit='$noind' and password='$pass'");
		$j_cek = $q_cek->num_rows();
		$d_cek = $q_cek->row();
		
		if ($j_cek == 1){
			$data = array(
			'noind' => $d_cek->noind,
			'pass' => $d_cek->password,
			'unit' => $d_cek->unit,
			'jabatan' => $d_cek->jabatan,
			'validated' => true
			);
			$this->session->set_userdata($data);
			redirect('C_AplicationReport',$data);
		} else {
			$this->session->set_flashdata("k","<div class=\'alert alert-error\'>username or password is not valid</div>");
			redirect ('C_Auth');
		}
	}
	
	
	public function account(){
			if($this->session->userdata('validated') == FALSE){
            redirect('C_Auth');
			} 
					$username = $this->session->userdata('user');
					$data['username'] = $this->session->userdata('user');
					$data['level'] = $this->session->userdata('level');
					
				$this->load->view('account', $data );
	}
        
        public function logout()
	{
        $this->session->sess_destroy();
        redirect('C_Auth');
	}
	
		public function forgot_password(){
			 $encrypted_id = md5($nik);
		
    $this->load->library('email');
    $config = array();
    $config['charset'] = 'utf-8';
    $config['useragent'] = 'Codeigniter';
    $config['protocol']= "smtp";
    $config['mailtype']= "html";
    $config['smtp_host']= "ssl://smtp.gmail.com";
    $config['smtp_port']= "465";
    $config['smtp_timeout']= "400";
    $config['smtp_user']= "cuma.buat.tes.doank@gmail.com"; 
    $config['smtp_pass']= "cumabuattesdoank"; 
    $config['crlf']="\r\n"; 
    $config['newline']="\r\n"; 
    $config['wordwrap'] = TRUE;
   
    $this->email->initialize($config);
    
    $this->email->from($config['smtp_user']);
    $this->email->to($email);
    $this->email->subject("Verifikasi Akun");
    $this->email->message(
     "terimakasih telah melakuan registrasi, untuk memverifikasi silahkan klik tautan dibawah ini<br><br>".
      site_url("register/verification/$encrypted_id")
    );
		}
}
