<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_login');
	}

	public function login(){
		$data = array(
			'title'=> "Login Form"
		);

		$this->load->view('auth/login', $data);
	}

	public function verifikasi(){
		if(isset($_POST['submit'])){
			
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');
		$user = $this->M_login->ambilogin($username);
		if( $user && $user->password === md5($password)){
			$this->session->set_userdata(array('status'=> 'Login sukses'));
			redirect(base_url('welcome'));
		}
	} else {
		redirect(base_url('login'));
	}
   }

   public function register(){
	$data = array(
		'title'=> "Register Form"
	);

	$this->load->view('auth/register', $data);
	}

	public function daftar(){
		$this->M_login->mendaftar();
	}

	public function logout(){
		$this->session->unset_userdata('user_login');
		redirect(base_url(''));
	}
 }
?>
