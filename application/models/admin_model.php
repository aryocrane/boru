<?php

class Admin_model extends CI_Model {
var $table = 'pengguna';
	function _construct(){
		parent::_construct();
	}

   public function verify_user($user, $password)
   {
      $q = $this
          ->db
           ->where('USERNAME', $user)
           ->where('PASSWORD', md5($password))
           // ->limit(1)
          ->get($this->table);
		//$q = $this->db->query('select * from PENGGUNA where username ='.'.''.$user.' and password ='.'.''.md5($password).'');
      if ( $q->num_rows > 0 ) {
         // person has account with us
         return $q->row();
      }
      return false;
   }
   
   function getPriv($user)
   {
		while( isset($user)) 
		{
			$q = $this->db
				->select('TYPE')
				->where('USERNAME',$user)
				->get($this->table);
				if ( $q->num_rows > 0 )
				return $q->row()->TYPE;
		}
   }
   function getwilayah($user)
   {
		while( isset($user)) 
		{
			$q = $this->db
				->select('WILAYAH')
				->where('USERNAME',$user)
				->get($this->table);
				if ( $q->num_rows > 0 )
				return $q->row()->WILAYAH;
		}
   }
   function getalluser()
   {
		$this->db->order_by('USER_ID');
	  $this->db->select('USER_ID, USERNAME, EMAIL, TYPE, WILAYAH');
                $r = $this->db->get($this->table);
                $data['item']   = $r->result_array();
                $data['title']  = array('ID','USERNAME','EMAIL','TYPE', 'WILAYAH');
                return $data;
   }
   
   function add(){
		
		$data = array(
			'USERNAME' => $this->input->post('username'),
			'EMAIL' => $this->input->post('email'),
			'PASSWORD' => md5($this->input->post('password')),
			'TYPE' => $this->input->post('type'),
			'WILAYAH' => $this->input->post('wilayah'),
			
		);
		$this->db->insert($this->table,$data);
	}
	
	function update($id)
	{				
		$data = array(
			'USERNAME' => $this->input->post('username'),
			'EMAIL' => $this->input->post('email'),
			'PASSWORD' => md5($this->input->post('password')),
			'TYPE' => $this->input->post('type'),
			'WILAYAH' => $this->input->post('wilayah'),
			
		);
		$this->db->where('USER_ID',$id);
		$this->db->update($this->table,$data);
	}
	
	function deleted($id)
	{
		$this->db->where('USER_ID',$id);
		$this->db->delete($this->table);
	}
	
	function getuser($id)
	{
		$data = array();
		$this->db->where('USER_ID',$id);
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0)
		{
			$data = $query->result_array();
			return $data[0];
		}
		
	}
}
?>