<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends MY_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('M_ajax');
	}
	
	public function tampilanProd()
	{
		$this->load->view('header.php');
		$this->load->view('sidebar.php');
		$data['hasil'] = $this->M_ajax->TampilanProd();
		$this->load->view('product.php', $data);
		$this->load->view('footer.php');
	}

	public function simpanprod()
	{
		$data = array(
			'kode_prod' => $this->input->POST('kode_prod'),
			'name_prod' => $this->input->POST('name_prod'),
			'harga' => $this->input->POST('harga')
		);

		$insert =  $this->M_ajax->simpan_prod($data);
		if ($insert > 0) {
			echo json_encode(["status" => 200, 'message' => 'Berhasil Simpan Data.']);
			return;
		}
		echo json_encode(["status" => 500, 'message' => 'Gagal Simpan Data.']);
	}

	public function get_kodeprod()
	{
		$kode_prod = $this->input->POST('kode_prod');
		$data = $this->M_ajax->get_Kodeprod($kode_prod);
		echo json_encode($data);
	}

	public function ubahprod()
	{
		$kode_prod = $this->input->POST('kode_prod');
		$data = array(
			'name_prod' => $this->input->POST('name_prod'),
			'harga' => $this->input->POST('harga')
		);

		$this->M_ajax->update_prod($kode_prod, $data);
		$update = $this->db->affected_rows();
		if ($update > 0) {
			echo json_encode(["status" => 200, 'message' => 'Berhasil Edit Data.']);
			return;
		}
		echo json_encode(["status" => 500, 'message' => 'Gagal Menyimpan Perubahan Data.']);
	}

	public function hpsprod()
	{
		$kode_prod = $this->input->POST('kode_prod');
		$delete = $this->M_ajax->hapus_prod($kode_prod);
		echo json_encode(array("status" => $delete));
	}

	public function _validation()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = true;

		if ($this->input->post('nama') == '') {
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Harap mengisi nama produk';
			$data['status'] = false;
		}

		if ($this->input->post('harga') == '') {
			$data['inputerror'][] = 'harga';
			$data['error_string'][] = 'Harap mengisi harga produk';
			$data['status'] = false;
		}

		if ($this->input->post('stok') == '') {
			$data['inputerror'][] = 'stok';
			$data['error_string'][] = 'Harap mengisi stok produk';
			$data['status'] = false;
		}

		if ($data['status'] == false) {
			echo json_encode($data);
			exit();
		}
	}
}
