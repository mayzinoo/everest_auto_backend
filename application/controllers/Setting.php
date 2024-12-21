<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Setting extends CI_Controller
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
        if($this->session->userdata("email") && $this->session->userdata("password"))
        {
            $role=$this->session->userdata("role");

            $data['admin']=$this->db->query("SELECT * FROM users Where role='$role'")->row();
            $data['content']="setting/setting";
            $this->load->view("template",$data);
        }else
        {
          redirect('/');
        }
    }
    function update_setting()
    {      
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password"))
        {
              $id=$this->input->post("id");
              $firstname=$this->input->post("firstname");
              $lastname=$this->input->post("lastname");
              $email=$this->input->post("email");
              $phone=$this->input->post("phone");

              $data = array(
                          'first_name' => $firstname,
                          'last_name' => $lastname,
                          'phone' => $phone,
                          'email' => $email
                      ); 
                $this->db->where('id',$id);
                $this->db->update("users",$data);
                $this->session->set_flashdata('success', 'Already updated.');
                redirect("setting/");
        }else{
          redirect('/');
        }
    }
    function update_password()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password"))
        {
              $this->form_validation->set_rules('password', 'New Password', 'required');
              $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
              $id=$this->input->post("id");

              $data = array(
                          'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT)
                      ); 
              $this->db->where('id',$id);
              $this->db->update("users",$data);      
              $this->session->set_flashdata('success', 'Your password has already updated.');

              echo "<script>
                        alert('Successfully Updated your password');        
                    </script>";
              redirect('setting/',"refresh");
      }else{
          redirect('/');
        }
    }
}