<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{
	function getDataUser(){
		$query = $this->db->get('user');
		return $query->result();
	}

	function insertUser ($data){
		$this->db->insert('user', $data);
	}

	function getubahData($id){
		$this->db->where('id', $id);
		$query = $this->db->get('user');
		return $query->row();
	}

	function updateUser($id, $data){
		$this->db->where('id', $id);
		$this->db->update('user', $data);
		return $this->db->affected_rows();
	}

	function deleteUser($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
}
?>
