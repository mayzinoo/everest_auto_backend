<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Sale_crm extends CI_Controller
{
    function __construct() 
	{
      parent::__construct();
      error_reporting(1);   
      $this->load->library('ckeditor');
      $this->load->library('ckfinder');
    }
    function index()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $data["salecrm_list"] =$this->db->query("SELECT sale_crm.*,contact_source.name as csname,vehicles.vehicle_no as vehiname FROM sale_crm LEFT JOIN contact_source ON contact_source.id=sale_crm.contact_source LEFT JOIN vehicles ON vehicles.id=sale_crm.adver_veh_no");
            $data['content']="salecrm/salecrm";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function create_form()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {           
            
            $data["getcontactsource"] =$this->Salecrm_model->getcontactsource();
            $data['vehicleslist']=$this->Salecrm_model->getvehicleslist();

            $data['content']="salecrm/createform";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    } 
    function update_form()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {           
            $id=$this->uri->segment(3);
            $data["getcontactsource"] =$this->Salecrm_model->getcontactsource();      
            $data["getcs"] =$this->Salecrm_model->getcs();  
            $data["getcrmtitle_list"] =$this->Salecrm_model->getcrmtitle_list();
            $data['vehicleslist']=$this->Salecrm_model->getvehicleslist();

            $data["salecrmdata"] =$this->db->query("SELECT * FROM sale_crm WHERE id=$id")->row();
            $data['content']="salecrm/updateform";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function generate_systemid(){
        $last_count = $this->db->query("SELECT * FROM sale_crm WHERE MONTH(created_at) = ?  and YEAR(created_at) = ?", [date('m'), date('Y')])->result();        
        $systemId = date('ym').sprintf('%03d', count($last_count));        
        return $systemId;
    }
    function insert()
    {
        $system_id =$this->generate_systemid();        
        $role=$this->session->userdata("role");
        $donotcall=$this->input->post("donotcall");
        if(empty($this->input->post("donotcall"))){
            $donotcall="";
        }
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $data=array(
                "system_id"=>$system_id,
                "sale_crm_no"=>$system_id,
                "title"=>$this->input->post("title"),
                "surname"=>$this->input->post("surname"),
                "given_name"=>$this->input->post("givenname"),
                "contact_source"=>$this->input->post("contactsource"),
                "adver_veh_no"=>$this->input->post("vehno"),
                "mobile_phone"=>$this->input->post("phone"),
                "office_no"=>$this->input->post("officeno"),
                "do_not_call"=>$donotcall,
                "email"=>$this->input->post("email"),
                "company_name"=>$this->input->post("cmyname"),
                "nature_of_business"=>$this->input->post("natureofbusiness"),
                "vehi_own"=>$this->input->post("vehiown"),
                "vehi_leave"=>$this->input->post("vehilease"),

                "sale_man"=>$this->input->post("saleman"),
                "entry_date"=>$this->input->post("entrydate"),
                "entry_time"=>$this->input->post("entrytime"),
                "createdby_name"=>$this->input->post("createbyname"),
                "createdby_date"=>$this->input->post("createbydate"),
                "modifiedby_name"=>$this->session->userdata("firstname"),
                "modifiedby_date"=>date('Y-m-d H:i:s'),

                "nric_no"=>$this->input->post("nricno"),
                "address"=>$this->input->post("address"),
                "postalcode"=>$this->input->post("postalcode"),
                "billing_address"=>$this->input->post("billing_address"),
                "billing_postalcode"=>$this->input->post("billing_postalcode"),
                "fax_no"=>$this->input->post("faxno"),
                "occupation"=>$this->input->post("occupation"),
                "dob"=>$this->input->post("dob"),
                "deci_make_surname"=>$this->input->post("deci_surname"),
                "deci_make_givename"=>$this->input->post("deci_givename"),
                "deci_make_phone"=>$this->input->post("deci_phone"),
                "deci_make_email"=>$this->input->post("deci_email"),
                "coi_surname"=>$this->input->post("coi_surname"),
                "coi_givename"=>$this->input->post("coi_givename"),
                "coi_phone"=>$this->input->post("coi_phone"),
                "coi_email"=>$this->input->post("coi_email"),
                "remark"=>$this->input->post("remark"),
                "vehicle_type"=>$this->input->post("vehitype"),
                "no_of_location"=>$this->input->post("noflocation"),
                "no_of_years_business"=>$this->input->post("nofyearbusiness"),
                "staff_strength"=>$this->input->post("statffstrength"),
                "buy_sell_interest"=>$this->input->post("buysellinterest"),
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("sale_crm", $data);
            $this->session->set_flashdata('success', 'Sale CRM has been created.');
            redirect("sale_crm/");
        }else{
          redirect('/');
        }
    }  
    function update()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->input->post("id");
            $data=array(
                "system_id"=>$this->input->post("systemid"),
                "sale_crm_no"=>$this->input->post("salecrmno"),
                "title"=>$this->input->post("title"),
                "surname"=>$this->input->post("surname"),
                "given_name"=>$this->input->post("givenname"),
                "contact_source"=>$this->input->post("contactsource"),
                "adver_veh_no"=>$this->input->post("vehno"),
                "mobile_phone"=>$this->input->post("phone"),
                "office_no"=>$this->input->post("officeno"),
                "do_not_call"=>$this->input->post("donotcall"),
                "email"=>$this->input->post("email"),
                "company_name"=>$this->input->post("cmyname"),
                "nature_of_business"=>$this->input->post("natureofbusiness"),
                "vehi_own"=>$this->input->post("vehiown"),
                "vehi_leave"=>$this->input->post("vehilease"),
                
                "entry_date"=>$this->input->post("entrydate"),
                "entry_time"=>$this->input->post("entrytime"),
                "createdby_name"=>$this->input->post("createbyname"),
                "createdby_date"=>$this->input->post("createbydate"),
                "modifiedby_name"=>$this->session->userdata("firstname"),
                "modifiedby_date"=>date('Y-m-d H:i:s'),

                "nric_no"=>$this->input->post("nricno"),
                "address"=>$this->input->post("address"),
                "postalcode"=>$this->input->post("postalcode"),
                "billing_address"=>$this->input->post("billing_address"),
                "billing_postalcode"=>$this->input->post("billing_postalcode"),
                "fax_no"=>$this->input->post("faxno"),
                "occupation"=>$this->input->post("occupation"),
                "dob"=>$this->input->post("dob"),
                "deci_make_surname"=>$this->input->post("deci_surname"),
                "deci_make_givename"=>$this->input->post("deci_givename"),
                "deci_make_phone"=>$this->input->post("deci_phone"),
                "deci_make_email"=>$this->input->post("deci_email"),
                "coi_surname"=>$this->input->post("coi_surname"),
                "coi_givename"=>$this->input->post("coi_givename"),
                "coi_phone"=>$this->input->post("coi_phone"),
                "coi_email"=>$this->input->post("coi_email"),
                "remark"=>$this->input->post("remark"),
                "vehicle_type"=>$this->input->post("vehitype"),
                "no_of_location"=>$this->input->post("noflocation"),
                "no_of_years_business"=>$this->input->post("nofyearbusiness"),
                "staff_strength"=>$this->input->post("statffstrength"),
                "buy_sell_interest"=>$this->input->post("buysellinterest")
            );
            $this->db->where('id',$id);
            $this->db->update("sale_crm",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("sale_crm/");
        }else{
          redirect('/');
        }
    }
    function delete()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);
            $this->db->where('id',$id);
            $this->db->delete("sale_crm");
            redirect("sale_crm/");
        }else{
          redirect('/');
        }
    }


    
}
?>