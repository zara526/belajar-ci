<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct(){
		parent::__construct(); 
		if(!$this->session->userdata('user_login')) redirect('auth/login');
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

	public function tampilanProd(){
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$data['hasil']= $this->M_ajax->TampilanProd();
		$this->load->view('product.php', $data);
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

	public function simpanprod(){
		$data = array(
			'kode_prod' => $this->input->POST('kode_prod'),
			'name_prod' => $this->input->POST('name_prod'),
			'harga' => $this->input->POST('harga')
		);

		$insert =  $this->M_ajax->simpan_prod($data);
		if($insert>0){
			echo json_encode(["status" => 200,'message'=>'Berhasil Simpan Data.']);
		 return;
		} 
		echo json_encode(["status" => 500,'message'=>'Gagal Simpan Data.']);

	}

	public function get_kodeprod(){
		$kode_prod = $this->input->POST('kode_prod');
		$data = $this->M_ajax->get_Kodeprod($kode_prod);
		echo json_encode($data);
	}

	public function ubahprod(){

		$data = array(
			'name_prod' => $this->input->POST('name_prod'),
			'harga' => $this->input->POST('harga')
		);

		$kode_prod = $this->input->POST('kode_prod');
		$update = $this->M_ajax->update_prod($data, $kode_prod);
		if($update>0){
			echo json_encode(["status" => 200,'message'=>'Berhasil Edit Data.']);
		 return;
		} 
		echo json_encode(["status" => 500,'message'=>'Gagal Menyimpan Perubahan Data.']);
	}

	public function hpsprod($kode_prod){
		$kode_prod = $this->input->post($kode_prod);
		$delete = $this->M_ajax->hapus_prod($kode_prod);
		echo json_encode(array("status" => $delete));
	}
	/*public function useraktif(){
		$this->db->where('akun.nama', $this->session->userdata('nama'));
		return $this->db->get('akun')->result();
	}*/
}
