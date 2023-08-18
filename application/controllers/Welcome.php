<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
	}
	public function index()
	{
		//$this->load->view('index1.php');
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('content.php');
		$this->load->view('footer.php');
	}

	public function index2(){
		$this->load->view('index-2.php');
	}

	public function index3(){
		$this->load->view('index3.php');
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
		$posisi = $this->input->POST('posisi');

		$ArrInsert = array(
			'id' => $id,
			'name' => $nama,
			'posisi' => $posisi
		);

		$this->M_user->insertUser($ArrInsert);
		redirect(base_url(''));
		
		/* Untuk mengecek apakah sudah terkoneksi atau belum
		Menampilkan data Array
		echo "<pre>";
		print_r($ArrInsert);
		echo "</pre>";*/
	}

	public function ubah(){
		$id = $this->input->POST('id');
		$nama = $this->input->POST('name');
		$posisi = $this->input->POST('posisi');

		$ArrUpdate = array(
			'name' => $nama,
			'posisi' => $posisi
		);

		$this->M_user->updateUser($id, $ArrUpdate);
		redirect(base_url(''));
	}

	public function hapus($id){
		$this->M_user->deleteUser($id);
		redirect(base_url(''));
	}
}
