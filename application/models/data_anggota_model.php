<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_anggota_model extends CI_Model {
	var $table = 'data_anggota';
	var $tablewil = 'wilayah';
	var $tablekom = 'komisariat';

 public function getallanggota($wilayah)
  {
      if ($wilayah !='all'){
	  $this->db->where('wilayah',$wilayah);
	  } 
	  $this->db->limit('10');
	  $this->db->order_by('id','desc');
	  $this->db->select('id,no_anggota,suddud, panggoaran,status,ttl,alamat,telepon,wilayah,komisariat,jabatan,pendidikan,pekerjaan');
                $r = $this->db->get($this->table);
                $data['item']   = $r->result_array();
                $data['title']  = array('ID','NO ANGGOTA','SUDDUD','PANGGOARAN', 'STATUS','TANGGAL LAHIR','ALAMAT','TELEPON','WILAYAH','KOMISARIAT','JABATAN','PENDIDIKAN','PEKERJAAN','ACTION');
                return $data;	
	  
  }
  
  public function search_complete()
  {
      $raja = $this->input->get('raja');
	  $wilayah = $this->input->get('wilayah');
	  $komisariat = $this->input->get('komisariat');
	  $panggoaran = $this->input->get('panggoaran');
	  $suddud = $this->input->get('suddud');
	  $jabatan = $this->input->get('jabatan');
	  $usia = $this->input->get('usia');
	  $status = $this->input->get('status');
	  
	  if (!empty($raja) && !empty($suddud) ) {
	  $suddudlengkap = $raja.$suddud;
	  echo $panggoaran;
	  $this->db->where('suddud', $suddudlengkap);
	  } if (!empty($raja))  {
		  $this->db->like('suddud', $raja, 'after');
	  } if (!empty($suddud))  {
		  $this->db->like('suddud', $suddud, 'before');
	  } if (!empty($wilayah))  {
		  $this->db->where('wilayah', $wilayah);
	  } if (!empty($komisariat))  {
		  $this->db->where('komisariat', $komisariat);
	  } if (!empty($jabatan))  {
		  $this->db->where('jabatan', $jabatan);
	  } if (!empty($panggoaran))  {
		  $this->db->like('panggoaran',$panggoaran, 'both');
	  }  if (!empty($status))  {
		  $this->db->where('status',$status);
	  }	if (!empty($usia))  {
		  if ($usia == 'tua'){
			  $datenow = date("Y");
			  $datemin = $datenow - 70;
			  //echo $datemin;exit;
			  $this->db->where("DATE_FORMAT(ttl,'%Y')<",$datemin);
			  $this->db->where("DATE_FORMAT(ttl,'%Y')!=",'0000');
		  }else if ($usia == 'supersenior'){
			  $datenow = date("Y");
			  $datemax = $datenow - 70;
			  $datemin = $datenow - 60;
			  $this->db->where("DATE_FORMAT(ttl,'%Y')>",$datemax);
			  $this->db->where("DATE_FORMAT(ttl,'%Y')<",$datemin);		  
		  }else if ($usia == 'senior'){
			  $datenow = date("Y");
			  $datemax = $datenow - 60;
			  $datemin = $datenow - 40;
			  $this->db->where("DATE_FORMAT(ttl,'%Y')>",$datemax);
			  $this->db->where("DATE_FORMAT(ttl,'%Y')<",$datemin);
		  } else if ($usia == 'dewasa'){
			  $datenow = date("Y");
			  $datemax = $datenow - 39;
			  $datemin = $datenow - 25;
			  $this->db->where("DATE_FORMAT(ttl,'%Y')>",$datemax);
			  $this->db->where("DATE_FORMAT(ttl,'%Y')<",$datemin);
		  } else if ($usia == 'remaja'){
			  $datenow = date("Y");
			  $datemax = $datenow - 25;
			  $datemin = $datenow - 13;
			  $this->db->where("DATE_FORMAT(ttl,'%Y')>",$datemax);
			  $this->db->where("DATE_FORMAT(ttl,'%Y')<",$datemin);
		  } else if ($usia == 'anak'){
			  $datenow = date("Y");
			  $datemin = $datenow;
			  $datemax = $datenow - 13;
			  $this->db->where("DATE_FORMAT(ttl,'%Y')>",$datemax);
			  $this->db->where("DATE_FORMAT(ttl,'%Y')<",$datemin);
		  }
	  }		  
	  $this->db->select('id, no_anggota,suddud, panggoaran,status,ttl,alamat,telepon,wilayah,komisariat,jabatan,pendidikan,pekerjaan');
                $r = $this->db->get($this->table);
                $data['item']   = $r->result_array();
                $data['title']  = array('ID','NO ANGGOTA','SUDDUD','PANGGOARAN', 'STATUS','TANGGAL LAHIR','ALAMAT','TELEPON','WILAYAH','KOMISARIAT','JABATAN','PENDIDIKAN','PEKERJAAN','ACTION');
                return $data;
  
  
  
  
  }
  function ultahcount($m,$de,$y)
  {
                $query = $this->db->query('SELECT count(panggoaran) as jumlah FROM data_anggota WHERE ttl like "%'.$m.'-'.$de.'"');
                foreach ($query->result() as $row)
					{
						return $row->jumlah;
					}
  }
  
  function listultah($m,$de,$y){
	  
	  $tanggalbulan = $m.'-'.$de;
	  if (!empty($tanggalbulan)){
	  $this->db->like('ttl', $tanggalbulan, 'before');
	  $this->db->select('no_anggota,suddud,panggoaran,ttl');
	  $query = $this->db->get($this->table);
	  //$query = $this->db->query('SELECT pso,suddud,panggoaran FROM data_anggota WHERE ttl like "%'.$m.'-'.$de.'"');
				$data['item'] = $query->result_array();
                $data['title']  = array('NO ANGGOTA','SUDDUD','PANGGOARAN', 'STATUS','TANGGAL LAHIR','ALAMAT','TELEPON','WILAYAH','KOMISARIAT','JABATAN');
                return $data;  
	  } 
  }
  
  public function getkomisariat($wilayah){
		$this->db->group_by('komisariat');
        $this->db->where('wilayah',$wilayah);
		$this->db->select('komisariat');
		$query = $this->db->get($this->table);
    		if ($query->num_rows() > 0) {
				return $query->result_array();
				} else{
				return array();
				}
	}
	function add(){
		$wilayah = $this->getwilayahkode($this->input->post('wilayahmodal'));
		$komisariat = $this->getkomisariatkode($this->input->post('komisariatmodal'));
		//echo $komisariat;exit;
		$nomer= $this->maxid();
		$nextnomer = $nomer +1;
		if ($this->input->post('status') == 'Ama'){
			$statusx='A';
		} else if ($this->input->post('status')=='Ina'){
			$statusx='I';
		} else if ($this->input->post('status')=='Boru'){
			$statusx ='B';
		} else {
			$statusx ='N';
		}
		$raja = $this->input->post('raja');
		$suddud = $this->input->post('suddud');
		$suddudlengkap = $raja.$suddud; 
		$data = array(
			'no_anggota' => $wilayah.$komisariat.$statusx.$nextnomer,
			'suddud' => $suddudlengkap,
			'panggoaran' => $this->input->post('panggoaran'),
			'goar' => '',
			'status' => $this->input->post('status'),
			'ttl' => $this->input->post('ttl'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('phone'),
			'wilayah' => $this->input->post('wilayahmodal'),
			'komisariat' => $this->input->post('komisariatmodal'),
			'jabatan' => $this->input->post('jabatan'),
			'pendidikan' => $this->input->post('pendidikan'),
			'pekerjaan' => $this->input->post('pekerjaan'),
		);
		$this->db->insert($this->table,$data);
	}
	function getmember($id)
	{
		$data = array();
		$this->db->where('id',$id);
		$query = $this->db->get($this->table);
		if($query->num_rows() > 0)
		{
			$data = $query->result_array();
			return $data[0];
		}
		
	}
	function getwilayahkode($wilayah)
	{
		
		$this->db->where('nama',$wilayah);
		$query = $this->db->get($this->tablewil);
		
		if($query->num_rows() > 0)
		{
			return $query->row()->kode;
		}
		
	}
	function getkomisariatkode($kom)
	{
		
		$this->db->where('nama',$kom);
		$query = $this->db->get($this->tablekom);
		
		if($query->num_rows() > 0)
		{
			return $query->row()->kode;
		}
		
	}
	function maxid()
	{
		
		$this->db->select_max('id');
		$query = $this->db->get($this->table);
		
		if($query->num_rows() > 0)
		{
			return $query->row()->id;
		}
		
	}
	
	function update($id)
	{
		if (!empty($this->input->post('jabatan'))) {
			$jabatan = $this->input->post('jabatan');
		} else {
			$jabatan = $this->input->post('jabatannow');
		}
		if (!empty($this->input->post('komisariatmodaledit'))) {
			$komisariat = $this->input->post('komisariatmodaledit');
		} else {
			$komisariat = $this->input->post('komisariatnow');
		}
		if (!empty($this->input->post('wilayahmodaledit'))) {
			$wilayah = $this->input->post('wilayahmodaledit');
		} else {
			$wilayah = $this->input->post('wilayahnow');
		}
		
		
		$raja = $this->input->post('raja');
		$suddud = $this->input->post('suddud');
		$suddudlengkap = $raja.$suddud; 
		$data = array(
			'no_anggota' => $this->input->post('noanggota'),
			'suddud' => $suddudlengkap,
			'panggoaran' => $this->input->post('panggoaran'),
			'goar' => '',
			'status' => $this->input->post('status'),
			'ttl' => $this->input->post('ttl'),
			'alamat' => $this->input->post('alamat'),
			'telepon' => $this->input->post('phone'),
			'wilayah' => $wilayah,
			'komisariat' => $komisariat,
			'jabatan' => $jabatan,
			'pendidikan' => $this->input->post('pendidikan'),
			'pekerjaan' => $this->input->post('pekerjaan')
			);
		$this->db->where('id',$id);
		$this->db->update($this->table,$data);
	}
	public function insert($arr){
		if (!empty($arr))
		{
			$data = array(
			'no_anggota' => $arr['no_anggota'],
			'suddud' => $arr['suddud'],
			'panggoaran' => $arr['panggoaran'],
			'goar' => $arr['goar'],
			'status' => $arr['status'],
			'ttl' => $arr['ttl'],
			'alamat' => $arr['alamat'],
			'telepon' => $arr['telepon'],
			'wilayah' => $arr['wilayah'],
			'komisariat' => $arr['komisariat'],
			'jabatan' => $arr['jabatan'],
			'pekerjaan' => $arr['pekerjaan'],
			'pendidikan' => $arr['pendidikan']
			);
		$this->db->insert($this->table,$data);	
		}
	}
	public function deletemember($id)
	{
		$this->db->where('id',$id);
		$this->db->delete($this->table);
	}
}