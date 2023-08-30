<?php

class M_ajax extends CI_Model
{
	public function TampilanProd(){
		$query = $this->db->get('product');
		return $query->result();
	}

	public function Getkode($kode_prod = ' '){
		return $this->db->get_where('product', array('kode_prod' => $kode_prod))->row();
	}

	function insertProd ($data){
		$this->db->insert('product', $data);
	}

	function updateProd($kode_prod, $data){
		$this->db->where('kode_prod', $kode_prod);
		$this->db->update('product', $data);
		return $this->db->affected_rows();
	}

	function deleteProd($kode_prod){
		$this->db->where('kode_prod', $kode_prod);
		$this->db->delete('product');
	}

}
?>
