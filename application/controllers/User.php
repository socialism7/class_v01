<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_user');
		$this->load->helper('url');

	}

	function index(){
		$data['researcher'] = $this->m_user->show_researcher()->result();
		$this->load->view('show/researcher',$data);
	}

	//----ADD Researcher----//
	function add_new(){
		$this->load->view('inputs/inputresearcher');
	}
	function add_xecution(){
		//save the inputer
		$id_researcher = $this->input->post('id_researcher');
		$nama = $this->input->post('nama');
		$username = $this->input->post('id_researcher');
		$password = $this->input->post('password');
		$hp = $this->input->post('hp');
		$alamat = $this->input->post('alamat');
		//execution
		$data = array(
			'id_researcher' => $id_researcher,
			'nama' => $nama,
			'username' => $username,
			'password' => md5($this->input->post('password')),
			'hp' => $hp,
			'alamat' => $alamat,
		);
		$this->m_user->input_data($data,'researcher');
		redirect('user/');
	}
	//----End of Add----//
	//
	//
	//----EDIT ADMIN/CO----//
	function edit($id_researcher){
		$where = array('id_researcher' => $id_researcher);
		$data['researcher'] = $this->m_user->edit_data($where,'researcher')->result();
		$this->load->view('edits/edit_researcher',$data);
	}
	function update(){
		$id_researcher = $this->input->post('id_researcher');
		$username = $this->input->post('username');
		$nama = $this->input->post('nama');
		$hp = $this->input->post('hp');
		$alamat = $this->input->post('alamat');
		//execution
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'hp' => $hp,
			'alamat' => $alamat
		);

		$where = array(
			'id_researcher' => $id_researcher
		);

		$this->m_user->update_data($where,$data,'researcher');
		redirect('user/');
	}
	//----End Of Edit----//

	function delete($id_researcher){
		$where = array('id_researcher' => $id_researcher);
		$this->m_user->hapus_data($where,'researcher');
		redirect('user/');
	}

	


}