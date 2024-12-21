<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Icqself_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getvehicleno_list()
	{		
		$query = $this->db->get("icqself");
		if($query->num_rows()<=0)
		{
			$tags['']="...".hide();
		}
		$tags['']="...";
		foreach($query->result() as $row):
			$tags[$row->vehicle_no]=$row->vehicle_no;
		endforeach;
		return $tags;
	
	}
	function getvehicleslist()
	{

		$query = $this->db->get("vehicles");
		if($query->num_rows()<=0)
		{
			$tags['']="...";
		}
		$tags['']="...";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->vehicle_no;
		endforeach;
		return $tags;
	}
}

?>