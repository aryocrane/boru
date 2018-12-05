<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

   public function __construct()
   {
		session_start();
		parent::__construct();
   }

	public function index()
   {
      if ( isset($_SESSION['username']) ) {
         redirect('Dashboard');
		 //echo $_SESSION['username'];
      }

	  $this->load->model('Admin_model');
      $this->load->library('form_validation');
      $this->form_validation->set_rules('user_name', 'Username', 'required');
      $this->form_validation->set_rules('password', 'Password', 'required|min_length[4]');

      if ( $this->form_validation->run() !== false ) {
         // then validation passed. Get from db
        $res = $this
                ->Admin_model
                ->verify_user(
                    $this->input->post('user_name'), 
                    $this->input->post('password')
                  );
		$utype = $this->Admin_model->getPriv($this->input->post('user_name'));
		$uwilayah = $this->Admin_model->getwilayah($this->input->post('user_name'));
		//exit;
		
         if ( $res !== false ) {
            $_SESSION['username'] = $this->input->post('user_name');
			$_SESSION['utype'] = $utype;
			$_SESSION['uwilayah'] = $uwilayah;
			//exit;
            redirect('Dashboard');
         }
      }

      $this->load->view('v_login');
   }

   public function logout()
   {
      session_destroy();
      $this->load->view('v_login');
   }
}

