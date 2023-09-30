<?php

class M_ajax extends CI_Model
{
	public function TampilanProd(){
		return $this->db->get('product')->result();
	}

	public function simpan_prod($data){
		$this->db->insert('product', $data);
		return $this->db->insert_id();
	}

	public function get_Kodeprod($kode_prod){
		return $this->db->get_where('product', ['kode_prod' => $kode_prod])->row();
	}

	public function update_prod($kode_prod, $data){
		$this->db->where('kode_prod', $kode_prod);
		$this->db->update('product', $data);
	}

	public function hapus_prod($kode_prod){
		return $this->db->delete('product', ['kode_prod' => $kode_prod]);
	}
}
?>
