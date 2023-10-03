<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{
	function getDataUser(){
		$query = $this->db->get('user');
		return $query->result();
	}

	function insertUser ($data){
		$data['password'] = md5($data['password']);
		$this->db->insert('user', $data);
	}

	function getubahData($id){
		$this->db->where('id', $id);
		$query = $this->db->get('user');
		return $query->row();
	}

	function updateUser($id, $data, $password){
		$hash_pw = md5($password);
		
		$this->db->trans_start();
		
		$this->db->where('id', $id);
		$this->db->set('password', $hash_pw);
		$this->db->update('user');

		$this->db->where('id', $id);
		$this->db->update('user', $data);

		$this->db->trans_complete();

		return $this->db->trans_status();
	}

	function deleteUser($id){
		$this->db->where('id', $id);
		$this->db->delete('user');
	}
}
?>
