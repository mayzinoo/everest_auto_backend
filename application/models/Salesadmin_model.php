<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salesadmin_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getcategory()
	{
		$query = $this->db->query("SELECT * FROM saleadmin_category");
        return $query->result();
	}
	function getcatego()
	{		
		$query = $this->db->get("saleadmin_category");
		if($query->num_rows()<=0)
		{
			$tags['']="...".hide();
		}
		$tags['']="...";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->name;
		endforeach;
		return $tags;
	
	}
	function getprivate_car_bank()
	{		
		$query = getprivate_car_bank();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function multipledoc_insert($data) {
	$res = $this->db->insert_batch('salesadmin_files',$data);
		if($res){
			return TRUE;
		}else{
			return FALSE;
		}
	}
}
?>