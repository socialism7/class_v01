<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_research extends CI_Model{	
	
	function show_territory(){
		return $this->db->get('wilayah');
	}

	function show_time(){
		return $this->db->get('waktu')->result();
	}

	function show_home(){
		$this->db->order_by('id_info', 'DESC');
		$query = $this->db->get('informasi');
		return $query->result();
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