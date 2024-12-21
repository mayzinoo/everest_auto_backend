<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Sales_admin extends CI_Controller
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
            $data["salesadmin"] =$this->db->query("SELECT sales_admin.*,saleadmin_category.name as name FROM sales_admin LEFT JOIN saleadmin_category ON saleadmin_category.id=sales_admin.category");
            $data['content']="salesadmin/salesadmin";
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
                $this->db->insert("saleadmin_category",$category);
            }
            $data["getcategory"] =$this->Salesadmin_model->getcategory();
            $data['content']="salesadmin/create_salesadmin";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function generate_systemid(){
        $last_count = $this->db->query("SELECT * FROM sales_admin WHERE MONTH(created_at) = ?  and YEAR(created_at) = ?", [date('m'), date('Y')])->result();        
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
                $is_exist = $this->db->from("sales_admin")->where(['category' => $post["category"]])->count_all_results();
                
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
                $this->db->insert("sales_admin",$data);
                
                $saleadmin_id=$this->db->insert_id();

                if(!empty($_FILES['document']['name']) || count(array_filter($_FILES['document']['name'])) > 0)
                  { 
                    
                      
                      $filesCount = count($_FILES['document']['name']); 
                      
                      for($i = 0; $i < $filesCount; $i++){ 
                          $_FILES['file']['name']     = $_FILES['document']['name'][$i]; 
                          $_FILES['file']['type']     = $_FILES['document']['type'][$i]; 
                          $_FILES['file']['tmp_name'] = $_FILES['document']['tmp_name'][$i]; 
                          $_FILES['file']['error']    = $_FILES['document']['error'][$i]; 
                          $_FILES['file']['size']     = $_FILES['document']['size'][$i]; 
                           
                        
                          $uploadPath = 'upload/salesadmin/'; 
                          $config['upload_path'] = $uploadPath; 
                          $config['allowed_types'] = 'pdf|docx|xlsx|csv|xls|ods'; 
                          $config['remove_spaces']=TRUE; 
                         
                         if(!file_exists($config['upload_path'])){
                            mkdir($config['upload_path'], 0777);
                            }
                          $this->load->library('upload', $config); 
                          $this->upload->initialize($config);                           
                          
                          if($this->upload->do_upload('file')){ 
                              
                              $fileDataa = $this->upload->data();                                   
                              // $uploadData[$i] = $fileData['file_name'];  
                              // $documentfile .=$uploadData[$i].','; 
                              $uploadDataa[$i]['saleadmin_id'] =$saleadmin_id; 
                              $uploadDataa[$i]['file'] =$fileDataa['file_name']; 
                              $uploadDataa[$i]['created_at'] = date("Y-m-d"); 
                          }
                      }               
                      $this->db->insert_batch('salesadmin_files',$uploadDataa); 
                      
                    }
                    $this->session->set_flashdata('success', 'Sale admin has been created.');
                }else{
                    $this->session->set_flashdata('error', 'Already exists.');
                } 
            }
            redirect('sales_admin/');
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
            $data["salesadmin"] =$this->db->query("SELECT sales_admin.*,sales_admin.id as saleid,saleadmin_category.name as name FROM sales_admin LEFT JOIN saleadmin_category ON saleadmin_category.id=sales_admin.category WHERE sales_admin.id='$id'")->row();

           

            $data["getcategory"] =$this->Salesadmin_model->getcatego();
            $data["getprivate_car_bank"] =$this->Salesadmin_model->getprivate_car_bank();
            $data['vehicleslist']=$this->Main_model->getvehicleslist();
            $data['customerlist']=$this->Customer_model->getcustomerlist();

            $data['content']="salesadmin/edit_salesadmin";
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
            $id=$this->input->post("saleadminid");
            
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
            $this->db->update("sales_admin",$data);
            if(count(array_filter($_FILES['document']['name'])) > 0)
                  { 
                      // echo "hi";exit();
                      $filesCount = count($_FILES['document']['name']); 
                      
                      for($i = 0; $i < $filesCount; $i++)
                      { 
                          $_FILES['filee']['name']     = $_FILES['document']['name'][$i]; 
                          $_FILES['filee']['type']     = $_FILES['document']['type'][$i]; 
                          $_FILES['filee']['tmp_name'] = $_FILES['document']['tmp_name'][$i]; 
                          $_FILES['filee']['error']     = $_FILES['document']['error'][$i]; 
                          $_FILES['filee']['size']     = $_FILES['document']['size'][$i]; 
                           
                        
                          $uploadPath = 'upload/salesadmin/'; 
                          $config['upload_path'] = $uploadPath; 
                          $config['allowed_types'] = 'pdf|docx|xlsx|csv|xls|ods|doc'; 
                          $config['remove_spaces']=TRUE; 
                         
                         if(!file_exists($config['upload_path'])){
                            mkdir($config['upload_path'], 0777);
                            }
                          $this->load->library('upload', $config); 
                          $this->upload->initialize($config);                           
                          
                          if($this->upload->do_upload('filee')){ 
                              
                              $filedocu = $this->upload->data();                                   
                              
                              $uploadDocu[$i]['saleadmin_id'] =$id; 
                              $uploadDocu[$i]['file'] =$filedocu['file_name']; 
                              $uploadDocu[$i]['created_at'] = date("Y-m-d"); 
                          }
                      }               
                      $this->db->insert_batch('salesadmin_files',$uploadDocu);   
                }
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("sales_admin/");
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
            $this->db->delete("sales_admin");
            redirect("sales_admin/");
        }else
        {
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
            $this->db->delete("salesadmin_files");
            redirect("sales_admin/");
        }else
        {
          redirect('/');
        }
    }
    
    
    function searchmakeandmodel()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $vehinoid=$this->input->post("vehinoid");

            $this->db->where("id",$vehinoid);
            $query = $this->db->get("vehicles")->row_array();
            $result=json_encode($query);
            echo $result;
        }else
        {
          redirect('/');
        }
    }
    function searchcustomerdata()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $cid=$this->input->post("cid");

            $this->db->where("id",$cid);
            $query = $this->db->get("customer")->row_array();
            $result=json_encode($query);
            echo $result;
        }else
        {
          redirect('/');
        }
    }
     function search_document()
    {
        $cid=$this->input->post("cid");
        $this->db->order_by("id","desc");
        $this->db->where("customer_id",$cid);
        $query = $this->db->get("salesadmin_files")->result();
       
        echo json_encode($query);
        
    }
}
?>