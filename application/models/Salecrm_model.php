<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Salecrm_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
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
	function getcontactsource()
	{
		$query = $this->db->query("SELECT name FROM contact_source");
        return $query->result();
	}
	function getcs()
	{		
		$query = $this->db->get("contact_source");
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
	function getcrmtitle_list()
	{		
		$query = crmtitle_list();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}

}
?>