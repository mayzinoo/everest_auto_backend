<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Quotationrequest_model extends CI_Model {
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
	function getsaletype_list()
	{		
		$query = saletype_list();
		$tags['']="";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getvehiclesource_list()
	{		
		$query = vehiclesource_list();
		$tags['']="";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getsbu_list()
	{		
		$query = sbu_list();
		$tags['']="";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getmaritalstatus_list()
	{		
		$query = maritalstatus_list();
		$tags['']="";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getaccessories_list()
	{		
		$query = accessories_list();
		$tags['']="";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getncd_list()
	{		
		$query = ncd_list();
		$tags['']="";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getcoverage_list()
	{		
		$query = coverage_list();
		$tags['']="";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}

	function getvehicletype()
	{		
		$query = $this->db->get("vehicle_type");
		if($query->num_rows()<=0)
		{
			$tags['']="";
		}
		$tags['']="";
		foreach($query->result() as $row):
			$tags[$row->vehicletype_name]=$row->vehicletype_name;
		endforeach;
		return $tags;
	}
	function quotation_request_list()
	{
		$config["base_url"]=base_url()."quotation_request/insurance_quotationrequest/"; 
	    $config['total_rows'] = $this->db->get('quotation_request')->num_rows();
	    $config['per_page'] = 30;
	    $config['uri_segment'] = 3;
	    $config['num_links'] = 3;
	    $config['full_tag_open'] = '<ul class="pagegi">';
	    $config['full_tag_close'] = '</ul>';
	    $config['num_tag_open'] = '<li>';
	    $config['num_tag_close'] = '</li>';
	    $config['cur_tag_open'] = '<li><a class="current">';
	    $config['cur_tag_close'] = '</a></li>';
	    $config['prev_tag_open'] = '<li>';
	    $config['prev_tag_close'] = '</li>';
	    $config['next_tag_open'] = '<li>';
	    $config['next_tag_close'] = '</li>';
	    $config['prev_link'] = 'Prev';
	    $config['next_link'] = 'Next';  

	    $this->pagination->initialize($config);

		$query=$this->db->get('quotation_request',$config['per_page'],$this->uri->segment(3));
		return $query;	
	}
}
?>