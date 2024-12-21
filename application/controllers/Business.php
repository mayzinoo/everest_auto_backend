<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Business extends CI_Controller
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
        
    }
    function update_business()
    {
        $this->_validate();
        $id=$this->input->post("id");
        $data = array(
                  'title' => $this->input->post('title'),
                  'description' => $this->input->post('business_description'),
                  'created_date'=>date('Y-m-d')
              );
        if($this->input->post('remove_photo')) // if remove photo checked
            {
              if(file_exists('upload/files/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                unlink('upload/files/'.$this->input->post('remove_photo'));
              $data['photo'] = '';
            }
        if(!empty($_FILES['photo']['name']))
            {
              $upload = $this->_do_upload();
              
              //delete file
              $business = $this->Main_model->getbusiness_by_id($id);
              if(file_exists('upload/files/'.$business->photo) && $business->photo)
                unlink('upload/files/'.$business->photo);

              $data['photo'] = $upload;
            }
          $this->db->where('id',$id);
          $this->db->update("business",$data);

          redirect("business/");
    }
    function showbusinessdata($id)
    {
      $data = $this->Main_model->getbusiness_by_id($id);
      echo json_encode($data);
    }
    function delete_business()
    {
      $id=$this->uri->segment(3);
      $this->db->where('id',$id);
      $this->db->delete("business");
      redirect("business/");
    }
}