<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sica extends CI_Controller{
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
		$this->load->model('m_user');
		$this->load->model('m_research');
		$this->load->helper('url');
	}
	
	function index(){
		$data['informasi'] = $this->m_research->show_home();
		$this->load->view('home',$data);
	}
	function show(){
		$data['user'] = $this->m_user->show_admin()->result();
		$this->load->view('show/admin',$data);
	}	
	function data_researcher(){
    // function ini hanya boleh diakses oleh admin dan co-admin
		if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
			$this->load->view('v_researcher');
		}else{
			echo "Anda tidak berhak mengakses halaman ini";
		}
	}

	//----ADD Admin/Co----//
	function add_new(){
		$this->load->view('inputs/inputadmin');
	}
	function add_xecution(){
		//save the inputer
		$nama = $this->input->post('nama');
		$id_user = $this->input->post('username');
		$username = $this->input->post('username');
		$hp = $this->input->post('hp');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		//execution
		$data = array(
			'id_user' => $id_user,
			'nama' => $nama,
			'username' => $username,
			'password' => md5($this->input->post('password')),
			'hp' => $hp,
			'level' => $level
		);
		$this->m_user->input_data($data,'user');
		redirect('sica/show');
	}
	//----End of Add----//
	//
	//
	//----EDIT ADMIN/CO----//
	function edit($id_user){
		$where = array('id_user' => $id_user);
		$data['user'] = $this->m_user->edit_data($where,'user')->result();
		$this->load->view('edits/edit_admin',$data);
	}
	function update(){
		$id_user = $this->input->post('id_user');
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$hp = $this->input->post('hp');
		$level = $this->input->post('level');

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'hp' => $hp,
			'level' => $level
		);

		$where = array(
			'id_user' => $id_user
		);

		$this->m_user->update_data($where,$data,'user');
		redirect('sica/show');
	}
	//----End Of Edit----//

	function delete($id_user){
		$where = array('id_user' => $id_user);
		$this->m_user->hapus_data($where,'user');
		redirect('sica/show');
	}
}