<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Howitwork extends CI_Controller
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
                              array( 'Source', '-', 'Bold', 'Italic', 'Underline', '-','Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo','-','NumberedList','BulletedList' ));
              $this->ckeditor->config['language'] = 'it';
              $this->ckeditor->config['width'] = '550px';
              $this->ckeditor->config['height'] = '100px';            

              //Add Ckfinder to Ckeditor
              $this->ckfinder->SetupCKEditor($this->ckeditor,'../assets/ckfinder/'); 
              $data['admin']=$this->db->query("SELECT * FROM users Where role='admin'")->row(); 
              $data["howitwork"] =$this->db->query("SELECT * FROM how_works order by id desc");   

              $data['content']="howitwork/howitworks";
              $this->load->view("template",$data);
          }else{
            redirect('/');
          }
    }
    function update_howitworks()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
      {
          $id=$this->input->post("id");
          $data = array(
                    'step' => $this->input->post('step'),
                    'title' => $this->input->post('title'),
                    'description' => $this->input->post('description2')
                );
          if($this->input->post('remove_photo')) // if remove photo checked
              {
                if(file_exists('/upload/files/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                  unlink('/upload/files/'.$this->input->post('remove_photo'));
                $data['photo'] = '';
              }
          if(!empty($_FILES['photo']['name']))
              {
                $upload = $this->_do_upload();
                
                //delete file
                $howitwork = $this->Main_model->getbusiness_by_id($id);
                if(file_exists('/upload/files/'.$howitwork->photo) && $howitwork->photo)
                  unlink('/upload/files/'.$howitwork->photo);

                $data['photo'] = $upload;
              }
            $this->db->where('id',$id);
            $this->db->update("how_works",$data);
            redirect("howitwork/");
      }else{
            redirect('/');
          }
    }    
    function showhowitworksdata($id)
    {
      $data = $this->Main_model->gethowitworks_by_id($id);
      echo json_encode($data);
    }
    function delete_howitwork()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
      {
          $id=$this->uri->segment(3);
          $this->db->where('id',$id);
          $this->db->delete("how_works");
          redirect("howitwork/");
      }else{
            redirect('/');
          }
    }
}