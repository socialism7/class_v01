<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Datar extends CI_Controller{
	
	private $filename = "import_data"; // tentukan nama filenya

	public function __construct(){
		parent::__construct();

		$this->load->model('m_datar');
		$this->load->helper('url');
	}

	public function index(){
		$data['data_riset'] = $this->m_datar->view();
		$this->load->view('inputs/inputdatar', $data);
	}

	public function form(){
	    $data = array(); // Buat variabel $data sebagai array
	    
	    if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form
	    	// lakukan upload file dengan memanggil function upload yang ada di m_datar.php
	    	$upload = $this->m_datar->upload_file($this->filename);

	    	if($upload['result'] == "success"){ // Jika proses upload sukses
	    		// Load plugin PHPExcel nya
	    		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
	    		$excelreader = new PHPExcel_Reader_Excel2007();
	    		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang tadi diupload ke folder excel
	    		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	    		// Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
	    		// Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
	    		$data['sheet'] = $sheet; 
	    	}else{ // Jika proses upload gagal
	    		$data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
	    	}
	    }
	    $this->load->view('inputs/inputdatar', $data);
	}

	public function import(){
		// Load plugin PHPExcel nya
		include APPPATH.'third_party/PHPExcel/PHPExcel.php';
		$excelreader = new PHPExcel_Reader_Excel2007();
		$loadexcel = $excelreader->load('excel/'.$this->filename.'.xlsx'); // Load file yang telah diupload ke folder excel
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		// Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
		$data = array();
		$numrow = 1;
		$cat1 = 'Lower Class';
		$cat2 = 'Middle Class';
		$cat3 = 'Upper Class';

		foreach($sheet as $row){
			// Cek $numrow apakah lebih dari 1
			// Artinya karena baris pertama adalah nama-nama kolom
			// Jadi dilewat saja, tidak usah diimport
			if($numrow > 1){
				//Nilai Material suatu objek
				$R 		= $row['E'] - ($row['F'] + $row['G'] + $row['H']);
				//Threshold Pertama (30)
				$Th1	= (($row['E'] / 100) * 30);
				//Threshold Kedua (50)
				$Th2	= (($row['E'] / 100) * 50);

				// Kita push (add) array data ke variabel data
				if ($R < $Th1) {
						# code...	
					
					array_push($data, array(
						'id_data'=>$row['A'],
						'id_waktu'=>$row['B'],
						'id_wilayah'=>$row['C'],
						'id_researcher'=>$row['D'],
						'salary'=>$row['E'],
						'data_x'=>$row['F'],
						'data_y'=>$row['G'],
						'data_z'=>$row['H'],
						'result' => ($row['E'] - ($row['F'] + $row['G'] + $row['H'])),
						'categories'=>$cat1

					//($row['E'] / ($row['F'] + $row['G'] + $row['H']))

					));
				}
				elseif ( ($R >= $Th1) && ($R < $Th2)) {
				# code...
					array_push($data, array(
						'id_data'=>$row['A'],
						'id_waktu'=>$row['B'],
						'id_wilayah'=>$row['C'],
						'id_researcher'=>$row['D'],
						'salary'=>$row['E'],
						'data_x'=>$row['F'],
						'data_y'=>$row['G'],
						'data_z'=>$row['H'],
						'result' => ($row['E'] - ($row['F'] + $row['G'] + $row['H'])),
						'categories'=>$cat2

					//($row['E'] / ($row['F'] + $row['G'] + $row['H']))

					));
				}
				elseif ($R >= $Th2) {
						# code...	
					
					array_push($data, array(
						'id_data'=>$row['A'],
						'id_waktu'=>$row['B'],
						'id_wilayah'=>$row['C'],
						'id_researcher'=>$row['D'],
						'salary'=>$row['E'],
						'data_x'=>$row['F'],
						'data_y'=>$row['G'],
						'data_z'=>$row['H'],
						'result' => ($row['E'] - ($row['F'] + $row['G'] + $row['H'])),
						'categories'=>$cat3

					//($row['E'] / ($row['F'] + $row['G'] + $row['H']))

					));
				}
			}
			$numrow++; // Tambah 1 setiap kali looping
		}
		// Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
		$this->m_datar->insert_multiple($data);

		redirect("datar"); // Redirect ke halaman awal (ke controller datar fungsi index)
	}

}