<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ultah extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('data_anggota_model');
  }
  
   public function index()
   {
      $m= date("m"); // Month value
        $de= date("d"); //today's date
        $y= date("Y"); // Year value
	  $data['jumlah'] = $this->data_anggota_model->ultahcount($m,$de,$y);
	  $data['ultah'] = $this->data_anggota_model->listultah($m,$de,$y);
	  //$jml = $this->data_anggota_model->ultahcount($m,$de,$y);
	  //echo $jml;
	  $this->load->view('templates/v_header',$data);
	  //$this->load->view('v_dashboard',$data);
   }
	
  
}