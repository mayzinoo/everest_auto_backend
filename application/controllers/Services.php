<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Services extends CI_Controller
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
            $post = $this->input->post();
            if(!empty($post)) {
                $is_exist = $this->db->from("services")->where(['name' => $post["n_name"]])->count_all_results();

                if(!$is_exist) {
                    $data = array(
                        'name' => $post['n_name'],
                        'created_date' => date('Y-m-d')
                    );

                    $this->db->insert("services", $data);
                    $this->session->set_flashdata('success', 'Service has been created.');
                } else {
                    $this->session->set_flashdata('error', 'Already exists.');
                }
            }
            
            $data["service"] =$this->db->query("SELECT * FROM services order by id desc");      
            $data['content']="service/services";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function update_services()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
            $id=$this->input->post("id");
            $data = array(
                      'name' => $this->input->post('name')
                  ); 
            $this->db->where('id',$id);
            $this->db->update("services",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("services/");
        }else{
          redirect('/');
        }
    }
    function showservicesdata($id)
    {
      $data = $this->Main_model->getservices_by_id($id);
      echo json_encode($data);
    }
    function delete_services()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
              $id=$this->uri->segment(3);
              $this->db->where('id',$id);
              $this->db->delete("services");
              redirect("services/");
        }else{
          redirect('/');
        }
    }


}