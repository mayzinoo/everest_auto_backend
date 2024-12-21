<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Insurance extends CI_Controller
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
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $data["insurance"] =$this->db->query("SELECT insurance.*,insurance_category.name as name FROM insurance LEFT JOIN insurance_category ON insurance_category.id=insurance.category");
            $data['content']="insurance/insurance";
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
            $post=$this->input->post();
            if(!empty($post)){
                $category=array(
                    "name"=>$this->input->post("name"),
                    "created_at"=>date('Y-m-d')
                );
                $this->db->insert("insurance_category",$category);
            }
            $data["getcategory"] =$this->Insurance_model->getcategory();
            $data['content']="insurance/create_insurance";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function generate_systemid(){
        $last_count = $this->db->query("SELECT * FROM insurance WHERE MONTH(created_at) = ?  and YEAR(created_at) = ?", [date('m'), date('Y')])->result();        
        $systemId = date('ym').sprintf('%03d', count($last_count));        
        return $systemId;
    }
    function insert()
    {     
        $system_id =$this->generate_systemid();  
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        { 
            $post = $this->input->post();
            if(!empty($post)) {
                $is_exist = $this->db->from("insurance")->where(['category' => $post["category"]])->count_all_results();
                
                if(!$is_exist) {
                    $data=array(
                        "system_id"=>$system_id,
                        "category"=>$this->input->post("category"),
                        "remark"=>$this->input->post("remark"),
                        "entry_date"=>$this->input->post("entrydate"),
                        "entry_time"=>$this->input->post("entrytime"),
                        "created_by"=>$this->input->post("createbyname"),
                        "created_date"=>$this->input->post("createbydate"),
                        "lastmodified_by"=>$this->input->post("modifyname"),
                        "lastmodified_Date"=>$this->input->post("modifydate"),
                        "created_at"=>date('Y-m-d')
                    );
                    $this->db->insert("insurance",$data);
                    $insurance_id=$this->db->insert_id();
                    if(!empty($_FILES['document']['name']) || count(array_filter($_FILES['document']['name'])) > 0)
                    { 
                          $documentfile="";
                          $filesCount = count($_FILES['document']['name']); 
                          
                          for($i = 0; $i < $filesCount; $i++){ 
                              $_FILES['file']['name']     = $_FILES['document']['name'][$i]; 
                              $_FILES['file']['type']     = $_FILES['document']['type'][$i]; 
                              $_FILES['file']['tmp_name'] = $_FILES['document']['tmp_name'][$i]; 
                              $_FILES['file']['error']     = $_FILES['document']['error'][$i]; 
                              $_FILES['file']['size']     = $_FILES['document']['size'][$i]; 
                               
                            
                              $uploadPath = 'upload/insurance/'; 
                              $config['upload_path'] = $uploadPath; 
                              $config['allowed_types'] = 'pdf|docx|xlsx|csv|xls|ods|doc'; 
                              $config['remove_spaces']=TRUE; 
                             
                             if(!file_exists($config['upload_path'])){
                                mkdir($config['upload_path'], 0777);
                                }
                              $this->load->library('upload', $config); 
                              $this->upload->initialize($config);                           
                              
                              if($this->upload->do_upload('file')){ 
                                  
                                  $fileData = $this->upload->data();                                   
                                  // $uploadData[$i] = $fileData['file_name'];  
                                  // $documentfile .=$uploadData[$i].','; 
                                  $uploadData[$i]['insurance_id'] =$insurance_id; 
                                  $uploadData[$i]['file'] =$fileData['file_name']; 
                                  $uploadData[$i]['created_at'] = date("Y-m-d"); 
                              }
                          }               
                          $this->db->insert_batch('insurance_files',$uploadData);   
                    }
                    $this->session->set_flashdata('success', 'Insurance has been created.');
                }else{
                    $this->session->set_flashdata('error', 'Already exists.');
                } 
            }

                redirect('insurance/');
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
            $data["insurance"] =$this->db->query("SELECT insurance.*,insurance_category.name as name FROM insurance LEFT JOIN insurance_category ON insurance_category.id=insurance.category WHERE insurance.id='$id'")->row();
            $data["getcategory"] =$this->Insurance_model->getcatego();
            $data['content']="insurance/edit_insurance";
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
                    "system_id"=>$this->input->post("systemid"),
                    "category"=>$this->input->post("category"),
                    "remark"=>$this->input->post("remark"),
                    "entry_date"=>$this->input->post("entrydate"),
                    "entry_time"=>$this->input->post("entrytime"),
                    "created_by"=>$this->input->post("createbyname"),
                    "created_date"=>$this->input->post("createbydate"),
                    "lastmodified_by"=>$this->session->userdata("firstname"),
                    "lastmodified_Date"=>date('Y-m-d H:i:s')
                );
            $this->db->where('id',$id);
            $this->db->update("insurance",$data);
            if(count(array_filter($_FILES['document']['name'])) > 0)
                  { 
                      
                      $filesCount = count($_FILES['document']['name']); 
                      
                      for($i = 0; $i < $filesCount; $i++){ 
                          $_FILES['filee']['name']     = $_FILES['document']['name'][$i]; 
                          $_FILES['filee']['type']     = $_FILES['document']['type'][$i]; 
                          $_FILES['filee']['tmp_name'] = $_FILES['document']['tmp_name'][$i]; 
                          $_FILES['filee']['error']     = $_FILES['document']['error'][$i]; 
                          $_FILES['filee']['size']     = $_FILES['document']['size'][$i]; 
                           
                        
                          $uploadPath = 'upload/insurance/'; 
                          $config['upload_path'] = $uploadPath; 
                          $config['allowed_types'] = 'pdf|docx|xlsx|csv|xls|ods'; 
                          $config['remove_spaces']=TRUE; 
                         
                         if(!file_exists($config['upload_path'])){
                            mkdir($config['upload_path'], 0777);
                            }
                          $this->load->library('upload', $config); 
                          $this->upload->initialize($config);                           
                          
                          if($this->upload->do_upload('filee')){ 
                              
                              $filedocu = $this->upload->data();                                   
                              // $uploadData[$i] = $fileData['file_name'];  
                              // $documentfile .=$uploadData[$i].','; 
                              $uploadDocu[$i]['insurance_id'] =$id; 
                              $uploadDocu[$i]['file'] =$filedocu['file_name']; 
                              $uploadDocu[$i]['created_at'] = date("Y-m-d"); 
                          }
                      }               
                      $this->db->insert_batch('insurance_files',$uploadDocu);   
                }
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("insurance/");
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
            $this->db->delete("insurance");
            redirect("insurance/");
        }else{
          redirect('/');
        }
    }
    function delete_file()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);            
            $this->db->where('id',$id);
            $this->db->delete("insurance_files");
            redirect("insurance/");
        }else
        {
          redirect('/');
        }
    }

}