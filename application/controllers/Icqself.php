<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Icqself extends CI_Controller
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
            
            $data["icqselfdata"] =$this->db->query("SELECT icqself.*,vehicles.vehicle_no as vehiname FROM icqself LEFT JOIN vehicles ON vehicles.id=icqself.vehicle_no");
            

            // $data["getvehicleno_list"] =$this->Icqself_model->getvehicleno_list();

            $data['content']="icqself/icqself";
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
            $data['vehicleslist']=$this->Icqself_model->getvehicleslist();

            $data['content']="icqself/create_form";
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
                "vehicle_no"=>$this->input->post("vehino"),
                "cmyname"=>$this->input->post("cmyname"),
                "ic_no"=>$this->input->post("icno"),
                "insurance_cmy"=>$this->input->post("insurancecmy"),
                "policy_no"=>$this->input->post("policyno"),
                "poi_startdate"=>$this->input->post("poi_start"),
                "poi_enddate"=>$this->input->post("poi_end"),
                "typeofcoverage"=>$this->input->post("typeofcoverage"),
                "saleman"=>$this->input->post("saleman"),
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("icqself",$data);
            $this->session->set_flashdata('success', 'ICQ has been created.');
            redirect("icqself/");
        }else{
          redirect('/');
        }
    }
    function edit_form()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);
            $data["icqselfdata"] =$this->db->query("SELECT * FROM icqself WHERE id=$id")->row();
            $data['vehicleslist']=$this->Icqself_model->getvehicleslist();
            
            $data['content']="icqself/edit_form";
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
                    "vehicle_no"=>$this->input->post("vehino"),
                    "cmyname"=>$this->input->post("cmyname"),
                    "ic_no"=>$this->input->post("icno"),
                    "insurance_cmy"=>$this->input->post("insurancecmy"),
                    "policy_no"=>$this->input->post("policyno"),
                    "poi_startdate"=>$this->input->post("poi_start"),
                    "poi_enddate"=>$this->input->post("poi_end"),
                    "typeofcoverage"=>$this->input->post("typeofcoverage"),
                    "saleman"=>$this->input->post("saleman")
                );
            $this->db->where('id',$id);
            $this->db->update("icqself",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("icqself/");
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
            $this->db->delete("icqself");
            redirect("icqself/");
        }else{
          redirect('/');
        }
    }


}?>