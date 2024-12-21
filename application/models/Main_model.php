<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function save($data)
	{
		$this->db->insert($this->table, $data);
		return $this->db->insert_id();
	}
	public function update($where, $data)
	{
		$this->db->update($this->table, $data, $where);
		return $this->db->affected_rows();
	}
	public function delete_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete($this->table);
	}
	public function get_by_id($id)
	{
		$this->db->from("brands");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function getpromotext_by_id($id)
	{
		$this->db->from("promotion");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function getbusiness_by_id($id)
	{
		$this->db->from("business");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function getbodytype_by_id($id)
	{
		$this->db->from("body_type");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function getfueltype_by_id($id)
	{
		$this->db->from("fuel_type");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function gethowitworks_by_id($id)
	{
		$this->db->from("how_works");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function getfaq_by_id($id)
	{
		$this->db->from("faq");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}	
	public function getfeature_by_id($id)
	{
		$this->db->from("features");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function getservices_by_id($id)
	{
		$this->db->from("services");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	function getleasingdata(){
 		$response = array();
		$this->db->select('*');
		$q = $this->db->get('leasing');
		$response = $q->result_array();
	 	return $response;
	}
	

	public function getcategoryname($id)
	{
		$this->db->from("category");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function getusers_by_id($id)
	{
		$this->db->from("users");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	public function getuserbooking_by_id($id)
	{
		$this->db->from("bookings");
		$this->db->where('id',$id);
		$query = $this->db->get();

		return $query->row();
	}
	
	function getduration()
	{
		$query = $this->db->query("SELECT * FROM duration");
        return $query->result();
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
	function getprev_vehicleslist()
	{

		$query = $this->db->get("vehicles");
		if($query->num_rows()<=0)
		{
			$tags['']="...";
		}
		$tags['']="...";
		foreach($query->result() as $row):
			$tags[$row->vehicle_no]=$row->vehicle_no;
		endforeach;
		return $tags;
	}
	function getmaritalstatus_list()
	{		
		$query = maritalstatus_list();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}
	function getbusiness_activitylist()
	{		
		$query = business_activity_list();
		$tags['']="...";
		foreach($query as $key => $status):
			$tags[$status]=$status;
		endforeach;
		return $tags;
	}

	/*Call Api*/
	function getvehicles()
	{
		$query = $this->db->query("SELECT * FROM vehicles WHERE show_status!='0'");
        return $query->result();
	}
	function getvehiclesdetail($vid){        
        
        $data = $this->db->query("SELECT * FROM vehicles WHERE vehicles.id=$vid");	
      	return $data->result();
    }
    function getvehiclesphotos($vid){
        $data = $this->db->query("SELECT * FROM vehicle_photos WHERE vehicle_id=$vid");
      	return $data->result();
    }
	function getvehiclescolor($vid){
        
        $this->db->select("vehicles.color as colr");
		$this->db->join("bookings","bookings.vehicle_id=vehicles.id","Left");
		$this->db->join("features","features.id=vehicles.features","Left");
        $data = $this->db->get_where("vehicles",array("vehicles.id"=>$vid))->row();
        $color=$data->colr;        
        $tags = explode(',' , $color);        		
		return $tags;		
    }
    function getvehiclesfeatures($vid){        

		$bb=$this->db->query("SELECT * FROM vehicles WHERE vehicles.id=$vid")->row();		        
        $fea=$bb->features;  
        $tags = explode(',', $fea); 
        return $tags;
    }
    function getvehiclespkg($vid){
        
        $data = $this->db->query("SELECT car_package.*,duration.duration_id as duraid,duration.duration as duration_name FROM car_package LEFT JOIN duration ON duration.duration_id=car_package.duration WHERE car_package.vehicle_id=$vid");
      	return $data->result(); 
    }
    function getcategorytitle($categoryid){        
        
        $data = $this->db->query("SELECT * FROM vehicles WHERE title_status='$categoryid' AND show_status!='0'");
       
        return $data->result();
    }
    function gethowitworks()
    {
    	$query = $this->db->query("SELECT * FROM how_works");
        return $query->result();
    }
    function getpromotionmsg()
    {
    	$query = $this->db->query("SELECT * FROM promotion");
        return $query->result();
    }
    
    function getfaq()
    {
    	$query = $this->db->query("SELECT * FROM faq");
        return $query->result();
    }    
    function getservices()
    {
    	$query = $this->db->query("SELECT * FROM services");
        return $query->result();
    }
    function getbusiness()
    {
    	$query = $this->db->query("SELECT * FROM business");
        return $query->result();
    }
    function getbookingslist()
	{
		$query = $this->db->query("SELECT * FROM vehicles");
        return $query->result();
	}
	

    /*end*/
	function fetch_data($query)
	{
		$config["base_url"]=base_url()."vehicles/"; 
	    $config['total_rows'] = $this->db->get('vehicles')->num_rows();
	    $config['per_page'] = 5;
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
		if($query != '')
		{
			$this->db->like('model_name', $query);
			$this->db->or_like('brand_name', $query);
		}
		$this->db->order_by('id','desc');
		$query=$this->db->get('vehicles',$config['per_page'],$this->uri->segment(3));
		return $query;
	}
	
	function allbookinglists()
	{
		$config["base_url"]=base_url()."dashboard/allbookings/"; 
	    $config['total_rows'] = $this->db->get('bookings')->num_rows();
	    $config['per_page'] = 10;
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

		$query=$this->db->select("bookings.*,bookings.status as bstatus,invoice.invoice_name as ivono, bookings.check_status as checkstatus, bookings.id as bid,users.*,users.first_name as name,invoice.id as ivoid,vehicles.model_name as modelname,bookings.duration as pkgduration")
	                    ->join("users","bookings.user_id=users.id", 'left')
	                    ->join("vehicles","vehicles.id=bookings.vehicle_id", 'left')
	                    ->join("invoice","bookings.id=invoice.booking_id", 'left')
	                    ->order_by("bookings.id","desc")
	                    ->get('bookings',$config['per_page'],$this->uri->segment(3));
		return $query;
	}
	function bookinglists()
	{
		$role=$this->session->userdata('role');
		$config["base_url"]=base_url()."dashboard/booking/"; 
	    $config['total_rows'] = $this->db->get('bookings')->num_rows();
	    $config['per_page'] = 10;
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

		$query=$this->db->select("bookings.*,bookings.status as bstatus,invoice.invoice_name as ivono, bookings.check_status as checkstatus, bookings.id as bid,users.*,users.first_name as name,invoice.id as ivoid,vehicles.model_name as modelname,bookings.duration as pkgduration")
	                    ->join("users","bookings.user_id=users.id", 'left')
	                    ->join("vehicles","vehicles.id=bookings.vehicle_id", 'left')
	                    ->join("invoice","bookings.id=invoice.booking_id", 'left')
	                    ->order_by("bookings.id","desc")
	                    ->get_where('bookings',array('vehicles.post_by'=>$role),$config['per_page'],$this->uri->segment(3));
		return $query;
	}
	function allinvoicelists()
	{
		$config["base_url"]=base_url()."invoice/"; 
	    $config['total_rows'] = $this->db->get('invoice')->num_rows();
	    $config['per_page'] = 10;
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

		$query=$this->db->select("invoice.*,invoice.id as ivoid,invoice.invoice_name as ivono, bookings.status as bstatus,bookings.id as bid,users.*,users.first_name as name,bookings.total_amt as totalamt,bookings.delivery_date as delidate")
	                    ->join("users","invoice.user_id=users.id", 'left')
	                    ->join("bookings","bookings.id=invoice.booking_id", 'left')
	                    ->join("vehicles","vehicles.id=invoice.vehicle_id", 'left')
	                    ->order_by("bookings.id","desc")
	                    ->get('invoice',$config['per_page'],$this->uri->segment(3));
		return $query;
	}
	function invoicelists()
	{
		$role=$this->session->userdata('role');
		$config["base_url"]=base_url()."invoice/"; 
	    $config['total_rows'] = $this->db->get('invoice')->num_rows();
	    $config['per_page'] = 10;
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

		$query=$this->db->select("invoice.*,invoice.id as ivoid,invoice.invoice_name as ivono,  bookings.status as bstatus,bookings.id as bid,users.*,users.first_name as name,bookings.total_amt as totalamt,bookings.delivery_date as delidate")
	                    ->join("users","invoice.user_id=users.id", 'left')
	                    ->join("bookings","bookings.id=invoice.booking_id", 'left')
	                    ->join("vehicles","vehicles.id=invoice.vehicle_id", 'left')
	                    ->order_by("bookings.id","desc")
	                    ->get_where('invoice',array('vehicles.post_by'=>$role),$config['per_page'],$this->uri->segment(3));
		return $query;
	}
	function img_upload($files,$folder)
	{
		ini_set('upload_max_filesize','30M');
		ini_set('post_max_size','30M');
		if(!$files){
				return false;
		}else
		{					
			$path='/upload/'.$folder.'/';
			$config['overwrite']=TRUE;
		 	$config['upload_path']=$path;	
		 	$config['remove_spaces'] = TRUE;	
		   	$config['allowed_types'] = 'jpeg';				   		
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload($files))
			{
				echo $this->upload->display_errors();
			}
			else
			{							
				return true;
			}
		}
	}

}
