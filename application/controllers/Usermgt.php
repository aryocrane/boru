<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Usermgt extends CI_Controller 
{
	public function __construct()
    {
            //parent::__construct();
		session_start();
		parent::__construct();
		if ( !isset($_SESSION['username']) ) {
         redirect('admin');
      }
        $this->load->model('admin_model');
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
		$data['records'] = $this->admin_model->getalluser();
	  
        $this->load->view('v_user',$data );
    }

	public function addmember(){
		
		$this->admin_model->add();
		redirect('index.php/Usermgt','refresh');
	}
	public function edit($id = null)
	{
		if($id == null){
				$id = $this->input->post('id');
			}
		$member = $this->admin_model->getuser($id);
		
		$data['USER_ID'] = $id;
		$data['USERNAME'] = $member['USERNAME'];
		$data['PASSWORD'] = $member['PASSWORD'];
		$data['TYPE'] = $member['TYPE'];
		$data['WILAYAH'] = $member['WILAYAH'];
		$data['EMAIL'] = $member['EMAIL'];
				
		$this->load->view('useredit',$data );
	}
		   
	public function editmember()
	{
		$id = $this->input->post('id');
		$this->admin_model->update($id);
		redirect('index.php/Usermgt','refresh');
	}	
	
	public function delete($id = null)
	{
		if($id == null){
				$id = $this->input->post('id');
			}
		$this->admin_model->deleted($id);
		redirect('index.php/Usermgt','refresh');
	}	
}
?>