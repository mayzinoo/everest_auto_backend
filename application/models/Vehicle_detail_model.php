<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vehicle_detail_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	function getcosttype_list()
	{
		$query = costtype_list();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getcommission_list()
	{
		$query = commissiontype_list();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
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
	function getcostsheet_vehicles()
	{

		$query = $this->db->get("costsheet1_tbl");
		if($query->num_rows()<=0)
		{
			$tags['']="...";
		}
		$tags['']="...";
		foreach($query->result() as $row):
			$tags[$row->id]=$row->car_plate;
		endforeach;
		return $tags;
	}
	function getvehicle_type()
	{
		$query = type_of_vehicle();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getvehicle_commercial()
	{
		$query = commercial_vehicles();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$key]=$status;
		endforeach;
		return $tags;
	}
	function get_typeofchinaprivatecar()
	{
		$query = china_typeofvehicle();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function get_vehibodytype()
	{
		$query = china_bodytype();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function get_motorvehicletype()
	{
		$query = motor_vehicle_type();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
}
?>