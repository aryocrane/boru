<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
     public function __construct()
        {
            //parent::__construct();
		session_start();
		parent::__construct();
		if ( !isset($_SESSION['username']) ) {
         redirect('admin');
      }
            $this->load->model('data_anggota_model');
        }

	public function index()
        {
            //buat panggil modal edit
			$id = null;
		if($id == null){
				$id = $this->input->post('id');
			}
		$member = $this->data_anggota_model->getmember($id);
		
		$data['id'] = $id;
		$data['no_anggota'] = $member['no_anggota'];
		$data['alamat'] = $member['alamat'];
		$data['panggoaran'] = $member['panggoaran'];
		$data['ttl'] = $member['ttl'];
		$data['status'] = $member['status'];
		$data['telepon'] = $member['telepon'];
		$data['wilayah'] = $member['wilayah'];
		$data['komisariat'] = $member['komisariat'];
		$data['jabatan'] = $member['jabatan'];
		$data['pendidikan'] = $member['pendidikan'];
		$data['pekerjaan'] = $member['pekerjaan'];
		$data['suddud'] = $member['suddud'];			
			$m= date("m"); // Month value
        $de= date("d"); //today's date
        $y= date("Y"); // Year value
	  $data['jumlah'] = $this->data_anggota_model->ultahcount($m,$de,$y);
	  $data['ultah'] = $this->data_anggota_model->listultah($m,$de,$y);
			
			$data['records'] = $this->data_anggota_model->getallanggota($_SESSION['uwilayah']);
			
            $this->load->view('v_dashboard',$data );
        }
        
    public function search()	
	{
		 //buat panggil modal edit
			$id = null;
		if($id == null){
				$id = $this->input->post('id');
			}
		$member = $this->data_anggota_model->getmember($id);
		
		$data['id'] = $id;
		$data['alamat'] = $member['alamat'];
		$data['panggoaran'] = $member['panggoaran'];
		$data['ttl'] = $member['ttl'];
		$data['status'] = $member['status'];
		$data['telepon'] = $member['telepon'];
		$data['wilayah'] = $member['wilayah'];
		$data['komisariat'] = $member['komisariat'];
		$data['jabatan'] = $member['jabatan'];
		$data['no_anggota'] = $member['no_anggota'];
		$data['suddud'] = $member['suddud'];	
		$data['pendidikan'] = $member['pendidikan'];
		$data['pekerjaan'] = $member['pekerjaan'];
		$m= date("m"); // Month value
        $de= date("d"); //today's date
        $y= date("Y"); // Year value
	  $data['jumlah'] = $this->data_anggota_model->ultahcount($m,$de,$y);
	  $data['ultah'] = $this->data_anggota_model->listultah($m,$de,$y);
	/*$panggoaran = $this->input->post('panggoaran');
	echo $panggoaran;
     $data = array(
			'panggoaran'	=> $panggoaran,
			'wilayah' 		=> $this->input->post('wilayah'),
			'komisariat'	=> $this->input->post('komisariat'),
			'raja'			=> $this->input->post('raja'),
			'jabatan'		=> $this->input->post('jabatan'),
			'suddud'		=> $this->input->post('suddud')
	 );*/
	 $data['records'] = $this->data_anggota_model->search_complete();
	 $this->load->view('v_dashboard',$data );
	}
	
	public function komisariat()
	{
		//if (!empty($_GET['q'])){
			//if (ctype_digit($_GET['q'])) 
				$q = $this->input->post('wilayah');
				//$p = $this->input->post('area');
				//$q = ctype_digit($_GET['q']);
				//echo $q;
				$kota = $this->data_anggota_model->getkomisariat($q);
				//print_r ($kota);
				$data = '';
				$data.= "<option value='' >-*-Pilih Komisariat-*-</options>";
				foreach ($kota as $kt) {
					$data.="<option value='$kt[komisariat]' >$kt[komisariat]</option>\n";
				}
				echo $data;
				//}
			//}
	}
	
	public function komisariatmodal()
	{
		//if (!empty($_GET['q'])){
			//if (ctype_digit($_GET['q'])) 
				$q = $this->input->post('wilayahmodal');
				//$p = $this->input->post('area');
				//$q = ctype_digit($_GET['q']);
				//echo $q;
				$kota = $this->data_anggota_model->getkomisariat($q);
				//print_r ($kota);
				$data = '';
				$data.= "<option value='' >-*-Pilih Komisariat-*-</options>";
				foreach ($kota as $kt) {
					$data.="<option value='$kt[komisariat]' >$kt[komisariat]</option>\n";
				}
				echo $data;
				//}
			//}
	}
	public function komisariatmodaledit()
	{
		//if (!empty($_GET['q'])){
			//if (ctype_digit($_GET['q'])) 
				$q = $this->input->post('wilayahmodaledit');
				//$p = $this->input->post('area');
				//$q = ctype_digit($_GET['q']);
				//echo $q;
				$kota = $this->data_anggota_model->getkomisariat($q);
				//print_r ($kota);
				$data = '';
				$data.= "<option value='' >-*-Pilih Komisariat-*-</options>";
				foreach ($kota as $kt) {
					$data.="<option value='$kt[komisariat]' >$kt[komisariat]</option>\n";
				}
				echo $data;
				//}
			//}
	}
	public function addmember(){
		
		$this->data_anggota_model->add();
		redirect('index.php/Dashboard','refresh');
	}
	public function edit($id = null)
	{
		if($id == null){
				$id = $this->input->post('id');
			}
		$member = $this->data_anggota_model->getmember($id);
		
		$data['id'] = $id;
		$data['alamat'] = $member['alamat'];
		$data['panggoaran'] = $member['panggoaran'];
		$data['ttl'] = $member['ttl'];
		$data['status'] = $member['status'];
		$data['telepon'] = $member['telepon'];
		$data['wilayah'] = $member['wilayah'];
		$data['komisariat'] = $member['komisariat'];
		$data['jabatan'] = $member['jabatan'];
		$data['no_anggota'] = $member['no_anggota'];
		$data['suddud'] = $member['suddud'];
		$data['no_anggota'] = $member['no_anggota'];
		$data['pendidikan'] = $member['pendidikan'];
		$data['pekerjaan'] = $member['pekerjaan'];
		
		$this->load->view('editmodal',$data );
	}
	
	public function editmember()
	{
		$id = $this->input->post('id');
		$this->data_anggota_model->update($id);
		redirect('index.php/Dashboard','refresh');
	}
	
	public function deletemember($id = null)
	{
		if($id == null){
				$id = $this->input->post('id');
			}
		$this->data_anggota_model->deletemember($id);
		redirect('index.php/Dashboard','refresh');
	}
}
