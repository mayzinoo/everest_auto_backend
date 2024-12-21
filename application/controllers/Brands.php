<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Brands extends CI_Controller
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
                $is_exist = $this->db->from("brands")->where(['brand_name' => $post["n_brandname"]])->count_all_results();

                if(!$is_exist) {
                    $data = array(
                        'brand_name' => $post['n_brandname'],
                        'created_date'=>date('Y-m-d')
                    );
                    if(!empty($_FILES['photo']['name']))
                    {
                        $upload = $this->_do_upload();
                        $data['brand_photo'] = $upload;
                    }

                    $this->db->insert("brands", $data);
                    $this->session->set_flashdata('success', 'Brand has been created.');
                } else {
                    $this->session->set_flashdata('error', 'Already exists.');
                }
            }

            $data["brandlist"] =$this->db->query("SELECT * FROM brands order by id desc");
            $data['content']="brand/brands";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function update_brands()
    {
       $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
            $id=$this->input->post("id");
            $data = array(
                      'brand_name' => $this->input->post('brandname'),
                      'created_date'=>date('Y-m-d')
                  );
            if($this->input->post('remove_photo')) // if remove photo checked
                {
                  if(file_exists('/upload/files/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                    unlink('/upload/files/'.$this->input->post('remove_photo'));
                  $data['brand_photo'] = '';
                }
            if(!empty($_FILES['photo']['name']))
                {
                  $upload = $this->_do_upload();
                  
                  //delete file
                  $brands = $this->Main_model->get_by_id($this->input->post('id'));
                  if(file_exists('/upload/files/'.$brands->brand_photo) && $brands->brand_photo)
                    unlink('/upload/files/'.$brands->brand_photo);

                  $data['brand_photo'] = $upload;
                }
              $this->db->where('id',$id);
              $this->db->update("brands",$data);
              $this->session->set_flashdata('success', 'Already updated.');
              redirect("brands/");
        }else{
          redirect('/');
        }
    } 
    function showbrandsdata($id)
    {
      $data = $this->Main_model->get_by_id($id);
      echo json_encode($data);
    }
    function delete_brands()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {
          $id=$this->uri->segment(3);
          $this->db->where('id',$id);
          $this->db->delete("brands");
          redirect("brands/");
      }else{
              redirect('/');
            }
    }
    private function _do_upload()
    {
        $this->load->helper('file'); 
        $this->load->library('upload'); 
                
        $config['upload_path']          = 'upload/files/';
        $config['allowed_types']        = 'jpg|png|jpeg';   
        $config['remove_spaces']=TRUE;

        if(!file_exists($config['upload_path'])){
            mkdir($config['upload_path'], 0777);
        }
        $this->upload->initialize($config);
 
       if(!$this->upload->do_upload('photo')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
}