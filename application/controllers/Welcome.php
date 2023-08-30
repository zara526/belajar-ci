<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_user');
		$this->load->model('M_ajax');
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
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$this->load->view('product.php');
		$this->load->view('footer.php');
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
		$posisi = $this->input->POST('posisi');

		$ArrUpdate = array(
			'name' => $nama,
			'posisi' => $posisi
		);

		$this->M_user->updateUser($id, $ArrUpdate);
		$this->session->set_flashdata('status', 'Data berhasil diubah');
		redirect(base_url('welcome/table'));
	}

	public function hapus($id){
		$this->M_user->deleteUser($id);
		$this->session->set_flashdata('s_hapus', 'Data berhasil dihapus');
		redirect(base_url('welcome/table'));
	}

	public function tampilanProd(){
		$querygetData = $this->M_ajax->TampilanProd();
		$data = array('hasil' => $querygetData);
		$this->load->view('product.php', $data);
	}

	public function tambah(){
		$aksi = $this->input->POST('aksi');
		$this->load->view('tambah.php', $aksi);
	}

	public function edit(){
		$kode_prod = $this->load->POST('kode_prod');
		$data['hasil'] = $this->M_ajax->Getkode($kode_prod);
		$this->load->view('edit.php', $data);
	}

	public function hps(){
		$kode_prod = $this->input->post($kode_prod);
		$data['hasil'] = $this->M_ajax->Getkode($kode_prod);
		$this->load->view('hapus.php', $data);
	}

	public function simpanprod(){
		$kode_prod = $this->input->POST('kode_prod');
		$name_prod = $this->input->POST('name_prod'); //yang dipanggil name-nya
		$harga = $this->input->POST('harga');

		$Arrtambah = array(
			'kode_prod' => $kode_prod,
			'name_prod' => $nama,
			'harga' => $harga
		);

		$this->M_ajax>insertProd($Arrtammbah);
	}

	public function ubahprod(){
		$kode_prod = $this->input->POST('kode_prod');
		$name_prod = $this->input->POST('name_prod');
		$harga = $this->input->POST('harga');

		$ArrUpdate = array(
			'name_prod' => $name_prod,
			'harga' => $harga
		);

		$this->M_ajax->updateProd($id, $ArrUpdate);
	}

	public function hpsprod($kode_prod){
		$this->M_ajax->deleteProd($kode_prod);
	}
	/*public function useraktif(){
		$this->db->where('akun.nama', $this->session->userdata('nama'));
		return $this->db->get('akun')->result();
	}*/
}
