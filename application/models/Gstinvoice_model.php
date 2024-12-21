<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gstinvoice_model extends CI_Model {
	public function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
	function gethirerlist()
		{

			$query = $this->db->get("gstinvoice");
			if($query->num_rows()<=0)
			{
				$tags['']="...";
			}
			$tags['']="...";
			foreach($query->result() as $row):
				$tags[$row->customer_name]=$row->customer_name;
			endforeach;
			return $tags;
		}
	function getvehilist()
		{
			$this->db->where("type","gms");
			$query = $this->db->get("gstinvoice");
			if($query->num_rows()<=0)
			{
				$tags['']="...";
			}
			$tags['']="...";
			foreach($query->result() as $row):
				$tags[$row->vehireg_no]=$row->vehireg_no;
			endforeach;
			return $tags;
		}
	function gstvehilist()
		{
			$this->db->where("type","gst");
			$query = $this->db->get("gstinvoice");
			if($query->num_rows()<=0)
			{
				$tags['']="...";
			}
			$tags['']="...";
			foreach($query->result() as $row):
				$tags[$row->vehireg_no]=$row->vehireg_no;
			endforeach;
			return $tags;
		}

	function getcompanylist()
		{

			$query = $this->db->get("company");
			if($query->num_rows()<=0)
			{
				$tags['']="...";
			}
			$tags['']="...";
			foreach($query->result() as $row):
				$tags[$row->cmy_name]=$row->cmy_name;
			endforeach;
			return $tags;
		}
}
?>