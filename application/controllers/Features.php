<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Features extends CI_Controller
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
                $is_exist = $this->db->from("features")->where(['name' => $post["n_name"]])->count_all_results();

                if(!$is_exist) {
                    $data = array(
                        'name' => $post['n_name'],
                        'created_date' => date('Y-m-d')
                    );

                    $this->db->insert("features", $data);
                    $this->session->set_flashdata('success', 'Feature has been created.');
                } else {
                    $this->session->set_flashdata('error', 'Already exists.');
                }
            }

            $data["feature"] =$this->db->query("SELECT * FROM features order by id desc"); 
            $data['content']="feature/features";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function update_feature()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
            $id=$this->input->post("id");
            $data = array(
                      'name' => $this->input->post('name'),
                      'created_date' => date('Y-m-d')
                  ); 
            $this->db->where('id',$id);
            $this->db->update("features",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("features/");
        }else{
          redirect('/');
        }
    }
    function showfeaturedata($id)
    {
      $data = $this->Main_model->getfeature_by_id($id);
      echo json_encode($data);
    }
    function delete_features()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
          $id=$this->uri->segment(3);
          $this->db->where('id',$id);
          $this->db->delete("features");
          redirect("features/");
        }else{
              redirect('/');
        }
    }
}