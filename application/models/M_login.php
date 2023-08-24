<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Login extends CI_Model{
	public function ambilogin($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get('akun');
		if ($query->num_rows()>0){
			foreach ($query->result() as $row){
				$cek = array (
					'username'=> $row->username,
					'password' => $row->password
				);
			}
			$this->session->get_userdata($cek);
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
			'nama' => $this->input->POST('nama'),
			'username' => $this->input->POST('username'),
			'email' => $this->input->POST('email'),
			'password' =>$password
		);

		$this->db->insert('akun', $data);
		$this->session->set_flashdata('suc', 'Selamat akun Anda sudah terdaftar:) Silahkan Login');
		redirect(base_url('auth/register'));
	}
  }
}
?>
