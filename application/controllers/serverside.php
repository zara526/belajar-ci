<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serverside extends MY_Controller{
	public function	__construct(){
		parent::__construct();
		$this->load->model('M_serverside');
	}

	public function index(){
		$this->load->view('other.php');
	}

	public function get_data(){
		$list = $this->M_serverside->get_datatable();
		$data = [];
		$no = $_POST['start'];
		foreach ($list as $item){
			$row = array();
			$no++;
			$row[] = $no;
			$row[] = $item->kode;
			$row[] = $item->nama;
            $row[] = $item->harga;
			$row[] = $item->stok;
            $row[] = '
				<a href="#" class="btn btn-outline-success btn-sm" onclick="get_kode('."'".$item->kode."', 'edit'".')">Edit</a>
				<a href="#" class="btn btn-outline-danger btn-sm" onclick="get_kode('."'".$item->kode."', 'delete'".')">Delete</a>
			';

			$data[] = $row;

		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_serverside->count_all(),
			"recordsFiltered" => $this->M_serverside->count_filtered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function create(){
		$this->_validation();
		$data = [
			'kode' =>  htmlspecialchars($this->input->post('kode')),
			'nama' => htmlspecialchars($this->input->post('nama')),
			'harga' => htmlspecialchars($this->input->post('harga')),
			'stok' => htmlspecialchars($this->input->post('stok'))
		];

		$insert = $this->M_serverside->add($data);
		if($insert > 0){
			$message['status'] = 'success';
		}else{
			$message['status'] = 'failed';
		}
		echo json_encode($message);
	}

	public function get_kode($kode){
		$data = $this->M_serverside->get_Kode($kode);
		echo json_encode($data);
	}

	public function update(){
		$this->_validation();
		$data = [
			'nama' => htmlspecialchars($this->input->post('nama')),
			'harga' => htmlspecialchars($this->input->post('harga')),
			'stok' => htmlspecialchars($this->input->post('stok'))
		];

		if($this->M_serverside->change(array('kode' => $this->input->post('kode')), $data) > 0){
			$message['status'] = 'success';
		}else{
			$message['status'] = 'failed';
		}
		echo json_encode($message);
	}

	public function delete($kode){
		if($this->M_serverside->delete($kode) > 0){
			$message['status'] = 'success';
		}else{
			$message['status'] = 'failed';
		}
		echo json_encode($message);
	}

	public function _validation(){
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = true;

		if($this->input->post('nama') == ''){
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Harap mengisi nama produk';
			$daa['status'] = false;
		}

		if($this->input->post('harga') == ''){
			$data['inputerror'][] = 'harga';
			$data['error_string'][] = 'Harap mengisi harga produk';
			$daa['status'] = false;
		}

		if($this->input->post('nama') == ''){
			$data['inputerror'][] = 'nama';
			$data['error_string'][] = 'Harap mengisi stok produk';
			$daa['status'] = false;
		}

		if($data['status'] == false){
			echo json_encode($data);
			exit();
		}
	}
}
?>
