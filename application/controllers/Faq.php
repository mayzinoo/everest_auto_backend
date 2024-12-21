<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Faq extends CI_Controller
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
                  $is_exist = $this->db->from("faq")->where(['sub_title' => $post["n_subtitle"]])->count_all_results();

                  if(!$is_exist) {
                      $user = array(
                          'main_title' => $post['n_maintitle'],
                          'sub_title' => $post['n_subtitle'],
                          'description' =>$post['description'],
                          'created_date' => date('Y-m-d')
                      );

                      $this->db->insert("faq", $user);
                      $this->session->set_flashdata('success', 'FAQ has been created.');
                  } else {
                      $this->session->set_flashdata('error', 'Already exists.');
                  }
              }
              
              $data["faq"] =$this->db->query("SELECT * FROM faq order by id desc");  
              $data['content']="faq/faq";
              $this->load->view("template",$data);
          }else{
            redirect('/');
          }
    }
    function update_faq()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
            $id=$this->input->post("id");
            $data = array(
                      'main_title' => $this->input->post('maintitle'),
                      'sub_title' => $this->input->post('subtitle'),
                      'description' =>$this->input->post('faq_description')
                  ); 
            $this->db->where('id',$id);
            $this->db->update("faq",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("faq/");
        }else{
              redirect('/');
            }
    } 
    function showfaqdata($id)
    {
      $data = $this->Main_model->getfaq_by_id($id);
      echo json_encode($data);
    }
    function delete_faq()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
      {
            $id=$this->uri->segment(3);
            $this->db->where('id',$id);
            $this->db->delete("faq");
            redirect("faq/");
      }else{
            redirect('/');
          }
    }

}