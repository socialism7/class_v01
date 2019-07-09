<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{	
	
	function show_researcher(){
		return $this->db->get('researcher');
	}
	
	function show_admin(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	//Fungsi Edit Data
	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	// --- end ---//
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	} 
}