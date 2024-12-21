<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getcustomerlist()
	{

		$query = $this->db->get("customer");
		if($query->num_rows()<=0)
		{
			$tags['']="...";
		}
		$tags['']="...";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->name;
		endforeach;
		return $tags;
	}
}

?>