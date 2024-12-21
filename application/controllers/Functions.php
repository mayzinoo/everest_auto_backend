<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Functions extends CI_Controller
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
                    $this->ckeditor->basePath = base_url().'assets/ckeditor/';
                    $this->ckeditor->config['toolbar'] = array(
                                    array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' )
                                                                        );
                    $this->ckeditor->config['language'] = 'it';
                    $this->ckeditor->config['width'] = '730px';
                    $this->ckeditor->config['height'] = '100px';            

                    //Add Ckfinder to Ckeditor
                    $this->ckfinder->SetupCKEditor($this->ckeditor,'../../assets/ckfinder/'); 

                    // Insert
                    $post = $this->input->post();             

                    if(!empty($post["n_fueltype"])) {
                        $fueldata = array(
                            "fuel_type" => $post["n_fueltype"],
                            "created_date" => date('Y-m-d')
                        );
                        $this->db->insert("fuel_type", $fueldata);
                        $this->session->set_flashdata('success', 'Fuel type has been created.');
                    } 
                    if(!empty($post["n_bodytype"])){
                        $bodydata = array(
                            "body_type" => $post["n_bodytype"],
                            "created_date" => date('Y-m-d')
                        );
                        $this->db->insert("body_type", $bodydata);
                        $this->session->set_flashdata('success', 'Body type has been created.');
                    }
                    
                                    
                    $data["bodytype"] =$this->db->query("SELECT * FROM body_type order by id desc");
                    $data["fueltype"] =$this->db->query("SELECT * FROM fuel_type order by id desc");
                    $data["business"] =$this->db->query("SELECT * FROM business order by id desc");
                    $data["category"] =$this->db->query("SELECT * FROM category order by id desc"); 

                    $data['content']="function/functions";
                    $this->load->view("template",$data);
          }else{
            redirect('/');
          }
    }
    function update_fueltype()
    {      
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {  
            $id=$this->input->post("id");
            $data = array(
                      'fuel_type' => $this->input->post('fueltype'),
                      "created_date" => date('Y-m-d')
                  );
            $this->db->where('id',$id);
            $this->db->update("fuel_type",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("functions/");
        }else{
            redirect('/');
          }
    }
    function update_bodytype()
    {    
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
            $id=$this->input->post("id");
            $data = array(
                      'body_type' => $this->input->post('bodytype'),
                      "created_date" => date('Y-m-d')
                  );
            $this->db->where('id',$id);
            $this->db->update("body_type",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("functions/");
        }else{
            redirect('/');
          }
    }
    function showfueltype($id)
    {
      $data = $this->Main_model->getfueltype_by_id($id);
      echo json_encode($data);
    }
    function showbodytype($id)
    {
      $data = $this->Main_model->getbodytype_by_id($id);
      echo json_encode($data);
    }
    function delete_bodytype()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
              $id=$this->uri->segment(3);
              $this->db->where('id',$id);
              $this->db->delete("body_type");
              redirect("functions");
        }else{
            redirect('/');
          }
    }
    function delete_fueltype()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
          $id=$this->uri->segment(3);
          $this->db->where('id',$id);
          $this->db->delete("fuel_type");
          redirect("functions/");
        }else{
            redirect('/');
          }
    }
}