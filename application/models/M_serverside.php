<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_serverside extends CI_Model
{
	var $table = 'other';
	var $column_order = array('kode','nama','harga','stok');
	var $order =  array('kode','nama','harga','stok');

	private function _get_data_query(){
		$this->db->from($this->table);

		//fungsi search
		if(isset($_POST['search']['value'])){
			$this->db->like('nama', $_POST['search']['value']);
			$this->db->or_like('harga', $_POST['search']['value']);
			$this->db->or_like('stok', $_POST['search']['value']);
			
		}
		if(isset($_POST['order'])){
			$this->db->order_by($this->order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
		}else{
			$this->db->order_by('kode','ASC');
		}
	}

	public function get_datatable(){
		$this->_get_data_query();
		if($_POST['length'] != - 1){
			$this->db->limit($_POST['length'], $_POST['start']);
		}
		$query = $this->db->get();
		return $query->result();
	}


	//untuk memfilter data
	function count_filtered(){
        $this->_get_data_query();
        $query = $this->db->get();
        return $query->num_rows();
    }

	//menghitung semua data yang ada
    public function count_all(){
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

	public function add($data){
		$this->db->insert('other', $data);
		return $this->db->affected_rows();
	}

	public function get_kode($kode){
		return $this->db->get_where($this->table, ['kode' => $kode])->row();
	}

	public function change($where, $data){
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}

	public function delete($kode){
		$this->db->delete($this->table, ['kode' => $kode]);
		return $this->db->affected_rows();
	}
}
?>
