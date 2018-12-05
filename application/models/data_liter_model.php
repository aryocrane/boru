<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_liter_model extends CI_Model {
	var $table = 'data_liter';

 public function getallnozen()
  {
      $query = $this->db->get('data_liter');
	  return $query->result_array();	
  }
  
  public function gettotalliter()
  {
      $this->db->select_sum('grossdeliver');
	  $this->db->select('site');
	  $this->db->group_by('site');
	  $query = $this->db->get('data_liter');
	  //return $query->result_array();
          if($query->num_rows() > 0)
                {
                        return $query->result();
                }
          
  }
  function get_detail()
        {
                //$user =  $this->input->post('user');
                $this->db->order_by('id','desc');
                //$this->db->where('created_by',$user);
                //$this->db->where('bulk_id',0);
                //$this->db->limit(10);
                $this->db->select('site, finishdate,grossdeliver, avgflow,  meter_number,unitid');
                $r = $this->db->get($this->table);
                $data['item']   = $r->result_array();
                $data['title']  = array('SITE','DATE','GROSS LITER','AVG FLOW', 'METER NUMBER','UNIT ID');
                return $data;
        }
}