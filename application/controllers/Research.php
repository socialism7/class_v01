<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends CI_Controller{
	function __construct(){
		parent::__construct();
		//validasi jika user belum login
		if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
		$this->load->model('m_research');
		$this->load->model('m_user');
		$this->load->model('m_datar');
		$this->load->helper('url');
	}
	
	function index(){
		$this->load->view('home');
	}
	
	//tampil territory untuk admin
	function show_territory(){
		$data['wilayah'] = $this->m_research->show_territory()->result();
		$this->load->view('show/territory',$data);
	}

	//tampil informasi dan waktu untuk admin
	function show_info(){
		$data['informasi'] = $this->m_research->show_home();
		$this->load->view('show/info_',$data);
	}

	function show_time(){
		$data['waktu'] = $this->m_research->show_time();
		$this->load->view('show/time_',$data);
	}
	

	//tampil territory untuk peneliti
	function territory(){
		$data['wilayah'] = $this->m_research->show_territory()->result();
		$this->load->view('show/territory_riset',$data);
	}

	

	//----ADD Territory----//
	function add_territory(){
		$this->load->view('inputs/inputterritory');
	}
	function add_xecution(){
		//save the inputer
		$id_wilayah = $this->input->post('id_wilayah');
		$nama_desa = $this->input->post('nama_desa');
		$nama_kec = $this->input->post('nama_kec');
		$nama_kab_kot = $this->input->post('nama_kab_kot');
		$nama_prov = $this->input->post('nama_prov');
		//execution
		$data = array(
			'id_wilayah' => $id_wilayah,
			'nama_desa' => $nama_desa,
			'nama_kec' => $nama_kec,
			'nama_kab_kot' => $nama_kab_kot,
			'nama_prov' => $nama_prov
		);
		$this->m_research->input_data($data,'wilayah');
		redirect('research/show_territory');
	}
	//----End of Add----//
	//
	//
	//----ADD INFO----//
	function add_info(){
		$this->load->view('inputs/createinfo');
	}
	function executeinfo(){
		//save the inputer
		$isi = $this->input->post('isi');
		//execution
		$data = array(
			'isi' => $isi
		);
		$this->m_research->input_data($data,'informasi');
		redirect('research/show_info');
	}
	//----End of Add----//
	//
	//----ADD TIME----//
	function add_time(){
		$this->load->view('inputs/createtime');
	}
	function executetime(){
		//save the inputer
		$id_waktu = $this->input->post('id_waktu');
		$waktu = $this->input->post('waktu');
		//execution
		$data = array(
			'id_waktu' => $id_waktu,
			'waktu' => $waktu
		);
		$this->m_research->input_data($data,'waktu');
		redirect('research/show_time');
	}
	//----End of Add----//
	//
	//----EDIT Territory----//
	function edit_territory($id_wilayah){
		$where = array('id_wilayah' => $id_wilayah);
		$data['wilayah'] = $this->m_research->edit_data($where,'wilayah')->result();
		$this->load->view('edits/edit_territory',$data);
	}


	function update_territory(){
		$id_wilayah = $this->input->post('id_wilayah');
		$nama_desa = $this->input->post('nama_desa');
		$nama_kec = $this->input->post('nama_kec');
		$nama_kab_kot = $this->input->post('nama_kab_kot');
		$nama_prov = $this->input->post('nama_prov');

		$data = array(
			'nama_desa' => $nama_desa,
			'nama_kec' => $nama_kec,
			'nama_kab_kot' => $nama_kab_kot,
			'nama_prov' => $nama_prov
		);

		$where = array(
			'id_wilayah' => $id_wilayah
		);

		$this->m_research->update_data($where,$data,'wilayah');
		redirect('research/show_territory');
	}
	//----End Of Edit----//
	//
	//
	//----EDIT INFO----//
	function edit_info($id_info){
		$where = array('id_info' => $id_info);
		$data['informasi'] = $this->m_research->edit_data($where,'informasi')->result();
		$this->load->view('edits/edit_info',$data);
	}
	function update_informasi(){
		$id_info = $this->input->post('id_info');
		$isi = $this->input->post('isi');
		
		//execution
		$data = array(
			'isi' => $isi
		);

		$where = array(
			'id_info' => $id_info
		);

		$this->m_research->update_data($where,$data,'informasi');
		redirect('research/show_info');
	}
	//
	//----END of Edit Info
	//
	//----EDIT TIME----//
	function edit_time($id_waktu){
		$where = array('id_waktu' => $id_waktu);
		$data['waktu'] = $this->m_research->edit_data($where,'waktu')->result();
		$this->load->view('edits/edit_time',$data);
	}
	function update_waktu(){
		$id_waktu = $this->input->post('id_waktu');
		$waktu = $this->input->post('waktu');
		
		//execution
		$data = array(
			'waktu' => $waktu
		);

		$where = array(
			'id_waktu' => $id_waktu
		);

		$this->m_research->update_data($where,$data,'waktu');
		redirect('research/show_time');
	}
	//
	//----END of Edit Info
	//
	//----VIEW data
	public function create()
	{
		//$data['waktu'] = $this->m_datar->get();
		//$this->load->view('show/owl', $data);
		$this->load->view('show/choose');
	}
	function data_data(){
		$data=$this->m_datar->data_list();
		echo json_encode($data);
	}
	//END of select
	//
	//----VIEW data
	public function result()
	{
		//$data['waktu'] = $this->m_datar->get();
		//$this->load->view('show/owl', $data);
		$this->load->view('show/result');
	}
	function data_result(){
		$data=$this->m_datar->data_list();
		echo json_encode($data);
	}
	//END of select
	//
	//----Delete Territory----//
	function delete_terriroty($id_wilayah){
		$where = array('id_wilayah' => $id_wilayah);
		$this->m_research->hapus_data($where,'wilayah');
		redirect('research/show_territory');
	}
	//----End Of Delete----//
	//
	//----Delete info----//
	function delete_info($id_info){
		$where = array('id_info' => $id_info);
		$this->m_research->hapus_data($where,'informasi');
		redirect('research/show_info');
	}
	//----End Of Delete----//
	//
	//----Delete info----//
	function delete_waktu($id_waktu){
		$where = array('id_waktu' => $id_waktu);
		$this->m_research->hapus_data($where,'waktu');
		redirect('research/show_time');
	}
	//----End Of Delete----//
}