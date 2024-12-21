<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insurance_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getcategory()
	{
		$query = $this->db->query("SELECT * FROM insurance_category");
        return $query->result();
	}
	function getcatego()
	{		
		$query = $this->db->get("insurance_category");
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
}
?>