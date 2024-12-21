<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Users extends CI_Controller
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
              $is_exist = $this->db->from("users")->where(['email' => $post["user_email"]])->count_all_results();

              if(!$is_exist) {
                  $user = array(
                      "first_name" => $post["user_firstname"],
                      "last_name" => $post["user_lastname"],
                      "phone" => $post["user_phone"],
                      "email" => $post["user_email"],
                      "password"=>password_hash($post["password"], PASSWORD_DEFAULT),
                      "role" => $post["role"],
                      "created_date" => mdate('Y-m-d H:i:s')
                  );

                  $this->db->insert("users", $user);
                  $this->session->set_flashdata('success', 'User has been created.');
              } else {
                  $this->session->set_flashdata('error', 'Email already exists.');
              }
          }
          
          $data["userslist"] =$this->db->query("SELECT * FROM users order by id desc");
          $data['content']="user/users";
          $this->load->view("template",$data);
      }else{
        redirect('/');
      }
    }
    
    function update_users()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
      {
            $post = $this->input->post();
            $id=$this->input->post("id");

            $password=$post['password'];
            if(!empty($password)){
                $data = array(
                      "first_name" => $this->input->post("firstname"),
                      "last_name" => $this->input->post("lastname"),
                      "phone" => $this->input->post("phone"),
                      "email" => $this->input->post("email"),
                      "password" => password_hash($password, PASSWORD_DEFAULT),
                      "role" => $this->input->post("role")
                  );
            }else{
                $data = array(
                      "first_name" => $this->input->post("firstname"),
                      "last_name" => $this->input->post("lastname"),
                      "phone" => $this->input->post("phone"),
                      "email" => $this->input->post("email"),
                      "role" => $this->input->post("role")
                  );
            }
             
            $this->db->where('id',$id);
            $this->db->update("users",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("users/");
      }else{
        redirect('/');
      }  
    }

    function showusersdata($id)
    {
      $data = $this->Main_model->getusers_by_id($id);
      echo json_encode($data);
    }
    
    function delete_users()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
      {
          $id=$this->uri->segment(3);
          $this->db->where('id',$id);
          $this->db->delete("users");
          redirect("users/");
      }else{
        redirect('/');
      }
    }



}