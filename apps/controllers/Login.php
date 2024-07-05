<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->library(array('session'));
	}

	public function index()
	{
		$this->load->helper('url');

		$this->load->view('login');
	}

	function verifikasi(){
		// call library
		$this->load->library('session');
		// baca data dari view login.php
		$username = $this->input->post("username");
		// session
		$this->session->set_userdata("sess18b",$username);
	}

	public function check_login(){
		if(isset($_POST) && !empty($_POST)){
			//$now = date('Y-m-d H:i:s');
			$usr = $this->input->post("username");
			$pw = $this->input->post("password");
			$this->session->set_userdata("user",true);
			$output = array('error' => false);
			$cek = $this->db->query("SELECT * FROM tbl_user WHERE uname='$usr' AND upass=md5('$pw') ");
			if($cek->num_rows()>0){
				 foreach($cek->result() as $r){
				 	$uname = $r->uname;
				 	$upass = $r->upass;
				 	
				}

				$sess = array(
						'uname' => $uname,
						'upass' => $upass,
						
					);

				 $this->session->set_userdata($sess);

				//$this->db->query("UPDATE tbl_user SET last_login='$now' WHERE uname='$usr' ");

				$output['message'] = 'Logging in. Please wait...';
				// if($level=='MAHASISWA'){
				// 	$output['link'] = base_url('Beranda');
				// }else{
					$output['link'] = base_url('Dashboard');
				//}
			}
			else{
				$output['error'] = true;
				$output['message'] = 'Login Invalid. User not found';
				$output['link'] = base_url('Login');
			}
			echo json_encode($output); 
		}else $this->error();
	}

	public function logout(){
		//hapus semua session ("user" dan "userProfile")
		$this->session->sess_destroy();
		$this->session->userdata('user_logged')=== null;
		//hapus token "googleplus"
		//$this->googleplus->revokeToken();
		//alihkan ke fungsi "index" (baris ke 17)
		redirect(base_url());
	}
}
