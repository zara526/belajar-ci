<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{
	public function ambilogin($username){
		$query = $this->db->get_where('user', ['username' => $username]);
		if ($query->num_rows()>0){
			// foreach ($query->result() as $row){
			// 	$cek = array (
			// 		'username'=> $row->username,
			// 		'password' => $row->password
			// 	);
			// }
			$query = $this->db->get('user')->row_array();
			$this->session->set_userdata('user_login',$query);
			$this->session->set_flashdata('info', 'Login berhasil');
			redirect(base_url('welcome/index'));
		}else{
			$this->session->set_flashdata('hayolo', 'Maaf Username dan Password tidak cocok, Silahkan coba lagi!');
			redirect(base_url('auth/login'));
		}
	}

	public function mendaftar(){
		$password = $this->input->POST('password');
		$cfpassword = $this->input->POST('cfpassword');
		if($password!=$cfpassword){
			$this->session->set_flashdata('warn', 'Password tidak sesuai!');
			redirect(base_url('auth/register'));
		}else{
		$data = array(
			'id' => $this->input->POST('id'),
			'name' => $this->input->POST('name'),
			'username' => $this->input->POST('username'),
			'password' => md5($password)
		);

		$this->db->insert('user', $data);
		$this->session->set_flashdata('suc', 'Selamat akun Anda sudah terdaftar:) Silahkan Login');
		redirect(base_url('auth/register'));
	}
  }
}
?>
