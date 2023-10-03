<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct(){
		parent::__construct(); 
		if(!$this->session->userdata('user_login')) redirect('auth/login');
		$this->load->model('M_user');
	}

	public function index()
	{
		//$data['nama'] = $this->M_login->useraktif();
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('content.php');
		$this->load->view('footer.php');
	}

	public function index2(){
		$this->load->view('index-2.php');
	}

	public function index3(){
		$this->load->view('index-3.php');
	}

	public function table(){
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$querygetData = $this->M_user->getDataUser();
		$DATA = array('queryAllU' => $querygetData); //buat array supaya ringkas
		$this->load->view('user.php', $DATA);	
		$this->load->view('footer.php');
	}

	public function add_user(){
		$this->load->view('add_user.php');
	}

	public function edit_user($id){
		$queryubahUser = $this->M_user->getubahData($id);
		$DATA = array('queryUbahu'=> $queryubahUser);
		$this->load->view('edit_user.php', $DATA);
	}

	public function tambahin(){
		$id = $this->input->POST('id');
		$nama = $this->input->POST('name'); //yang dipanggil name-nya
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');

		$ArrInsert = array(
			'id' => $id,
			'name' => $nama,
			'username' => $username,
			'password' => $password
		);

		$this->M_user->insertUser($ArrInsert);
		$this->session->set_flashdata('status', 'Data berhasil ditambahkan');
		redirect(base_url('welcome/table'));
		
		/* Untuk mengecek apakah sudah terkoneksi atau belum
		Menampilkan data Array
		echo "<pre>";
		print_r($ArrInsert);
		echo "</pre>";*/
	}

	public function ubah(){
		$id = $this->input->POST('id');
		$nama = $this->input->POST('name');
		$username = $this->input->POST('username');
		$password = $this->input->POST('password');

		$ArrUpdate = array(
			'name' => $nama,
			'username' => $username,
		);

		$this->M_user->updateUser($id, $ArrUpdate, $password);
		$this->session->set_flashdata('status', 'Data berhasil diubah');
		redirect(base_url('welcome/table'));
	}

	public function hapus($id){
		$this->M_user->deleteUser($id);
		$this->session->set_flashdata('s_hapus', 'Data berhasil dihapus');
		redirect(base_url('welcome/table'));
	}

	
	/*public function useraktif(){
		$this->db->where('akun.nama', $this->session->userdata('nama'));
		return $this->db->get('akun')->result();
	}*/
}
