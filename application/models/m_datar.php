<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_datar extends CI_Model{	
	
	public function view(){
		return $this->db->get('data_riset')->result(); 
	}

  	// Fungsi untuk melakukan proses upload file
	public function upload_file($filename){
    $this->load->library('upload'); // Load librari upload

    $config['upload_path'] = './excel/';
    $config['allowed_types'] = 'xlsx';
    $config['max_size']  = '2048';
    $config['overwrite'] = true;
    $config['file_name'] = $filename;


    $this->upload->initialize($config); // Load konfigurasi uploadnya
    if($this->upload->do_upload('file')){ // Lakukan upload dan Cek jika proses upload berhasil
      		// Jika berhasil :
      $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
      return $return;
    }else{
      		// Jika gagal :
      $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
      return $return;
    }
  }

  // Buat sebuah fungsi untuk melakukan insert lebih dari 1 data
  public function insert_multiple($data){
    $this->db->insert_batch('data_riset', $data);
  }

  function data_list(){
    $hasil = $this->db->query('SELECT a.id_data, a.id_wilayah, a.id_waktu, a.data_x, a.data_y, a.data_z, a.result, a.categories, c1.nama_desa, c2.waktu FROM data_riset AS a LEFT JOIN wilayah AS c1 ON a.id_wilayah=c1.id_wilayah LEFT JOIN waktu AS c2 ON a.id_waktu = c2.id_waktu');
    return $hasil->result();
  }
}