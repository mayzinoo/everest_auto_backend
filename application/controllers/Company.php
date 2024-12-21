<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Company extends CI_Controller
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
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {        
            $data["company"] =$this->db->query("SELECT * FROM company");         
            $data['content']="company/index";
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

            $data['content']="company/create_form";
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
                "cmy_name"=>$this->input->post("cmyname"),
                "address"=>$this->input->post("address"),
                
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("company",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("company/");
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
            
            $data["company"] =$this->db->query("SELECT * FROM company WHERE id='$id'")->row();
            $data['content']="company/edit_form";
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
                "cmy_name"=>$this->input->post("cmyname"),
                "address"=>$this->input->post("address")
            );
            $this->db->where('id',$id);
            $this->db->update("company",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("company/");
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
            $this->db->delete("company");
            redirect("company/");
        }else{
          redirect('/');
        }
    }

}?>