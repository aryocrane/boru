<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Bulkupdate extends CI_Controller 
{
	public function __construct()
        {
            //parent::__construct();
		session_start();
		parent::__construct();
		if ( !isset($_SESSION['username']) ) {
         redirect('admin');
      }
        $this->load->model('data_anggota_model');
		$this->load->library('excel');
	}
 
	public function index()
	{   
				$m= date("m"); // Month value
        $de= date("d"); //today's date
        $y= date("Y"); // Year value
	  $data['jumlah'] = $this->data_anggota_model->ultahcount($m,$de,$y);
	  $data['ultah'] = $this->data_anggota_model->listultah($m,$de,$y);
	  
        $this->load->view('v_bulk',$data );
    }

	function update()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'csv';
		$config['max_size']	= '8000';
		//$config['detect_mime']  = FALSE;
		//$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->do_upload('nama_file');

		
			$upload = $this->upload->data();
			//print_r($upload);
			//$this->Csv_model->addfile($upload);
			//$file_arr = $this->Csv_model->getfilepath();
			$file = 'uploads/'.$upload['file_name'];
			//$file = "./".$file_arr['file_name']."";
			//$bulk_id = $file_arr['bulk_id'];
			//$file = "./uploads/test_bulk_sms221.xls";
			//echo $file;	
			if($upload['file_ext'] == ".csv"){
					$csv = fopen($file,"r");
					$row = 0;
					if (($csv) !== FALSE) {
						while (($datacsv = fgetcsv($csv, 1000, ",")) !== FALSE) {
							$num = count($datacsv);
							$row++;
							for ($c=0; $c < $num; $c++) {
								$arr[$row][$c] = $datacsv[$c];
							}
						}
						
						foreach($arr as $num)
						{
							$arr = array(
								'no_anggota' => $num[0],
								'suddud' => $num[1],
								'panggoaran' => $num[2],
								'goar' => $num[3],
								'status' => $num[4],
								'ttl' => $num[5],
								'alamat' => $num[6],
								'telepon' => $num[7],
								'wilayah' => $num[8],
								'komisariat' => $num[9],
								'jabatan' => $num[10],
								'pekerjaan' => $num[11],
								'pendidikan' => $num[12],
							);
							
								$this->data_anggota_model->insert($arr);
								
						}
						
						redirect('index.php/Dashboard','refresh');
					}
			}
		   
		
		
	}

}
?>