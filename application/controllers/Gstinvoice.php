<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Gstinvoice extends CI_Controller
{
    function __construct() 
	{
      parent::__construct();
      error_reporting(1);   
    }
   
    function index()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {           
            $data["gstinvoice"] =$this->db->query("SELECT * FROM gstinvoice WHERE type='gst'");
            $data['content']="gstinvoice/index";
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
            
            $data['companylist']=$this->Gstinvoice_model->getcompanylist();

            $data['content']="gstinvoice/create_form";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function insert()
    {     
       
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            
            $data=array(
                "customer_name"=>$this->input->post("billto"),
                "customer_address"=>$this->input->post("address"),
                "serial_no"=>$this->input->post("serialno"),
                "invoice_no"=>$this->input->post("invoiceno"),
                "date"=>$this->input->post("date"),
                "vehireg_no"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "originalregdate"=>$this->input->post("originaldate"),
                "engine_no"=>$this->input->post("engineno"),
                "chassis_no"=>$this->input->post("chassisno"),
                "vehi_invoiceprice"=>$this->input->post("vehi_invoiceprice"),
                "deposit_paid"=>$this->input->post("depositpaid"),
                "loan_amt"=>$this->input->post("loanamt"),
                "loan_commission"=>$this->input->post("loancommission"),
                "incentive"=>$this->input->post("incentive"),
                "gst"=>$this->input->post("gst"),
                "type"=>"gst",
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("gstinvoice",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("gstinvoice/");
        }else{
          redirect('/');
        }
    }
    function searchcompanies()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $cmyname=$this->input->post("cmyname");

            $this->db->where("cmy_name",$cmyname);
            $query = $this->db->get("company")->row_array();
            $result=json_encode($query);
            echo $result;
        }else
        {
          redirect('/');
        }
    }
    function edit_form()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);
            $data['companylist']=$this->Gstinvoice_model->getcompanylist();

            $data["gstinvoice"] =$this->db->query("SELECT * FROM gstinvoice WHERE id='$id'")->row();
            $data['content']="gstinvoice/edit_form";
            $this->load->view("template",$data);
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
                "customer_name"=>$this->input->post("billto"),
                "customer_address"=>$this->input->post("address"),
                "serial_no"=>$this->input->post("serialno"),
                "invoice_no"=>$this->input->post("invoiceno"),
                "date"=>$this->input->post("date"),
                "vehireg_no"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "originalregdate"=>$this->input->post("originaldate"),
                "engine_no"=>$this->input->post("engineno"),
                "chassis_no"=>$this->input->post("chassisno"),
                "vehi_invoiceprice"=>$this->input->post("vehi_invoiceprice"),
                "deposit_paid"=>$this->input->post("depositpaid"),
                "loan_amt"=>$this->input->post("loanamt"),
                "loan_commission"=>$this->input->post("loancommission"),
                "incentive"=>$this->input->post("incentive"),
                "gst"=>$this->input->post("gst")
            );

            $this->db->where('id',$id);
            $this->db->update("gstinvoice",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("gstinvoice/");
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
            $this->db->delete("gstinvoice");
            redirect("gstinvoice/");
        }else{
          redirect('/');
        }
    }
}
?>