<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Priceslist extends CI_Controller
{
    function __construct() 
	{
      parent::__construct();
      error_reporting(1);   
      $this->load->library('ckeditor');
      $this->load->library('ckfinder');
    }
    function allpricelist()
    {                
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {    
            if($this->uri->segment(3))
                {
                    $start=$this->uri->segment(3);
                    $i=$start+1;
                }
                else
                {
                    $i=1;
                }
            $data['i']=$i;  
            $post=$this->input->post();    
            if($post){
                    $category=$this->input->post("category");
                    if($category=='1'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='1'");
                    }
                    elseif($category=='2'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='2'");
                    }
                    elseif($category=='3'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='3'");
                    }
                    elseif($category=='4'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='4'");
                    }
                    elseif($category=='5'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='5'");
                    }
                    elseif($category=='6'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='6'");
                    }
                    elseif($category=='7'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='7'");
                    }
                    elseif($category=='8'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='8'");
                    }
                    elseif($category=='9'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='9'");
                    }
                    elseif($category=='10'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='10'");
                    }
                    elseif($category=='11'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='11'");
                    }
                    elseif($category=='12'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='12'");
                    }
                    elseif($category=='13'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='13'");
                    }
                    elseif($category=='14'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='14'");
                    }
                    elseif($category=='15'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='15'");
                    }
                    elseif($category=='16'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='16'");
                    }
                    elseif($category=='17'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='17'");
                    }
                    elseif($category=='18'){
                        $data["priceslist"] =$this->db->query("SELECT * FROM pricelist WHERE category_type='18'");
                    }

            }
            else{

                $data["priceslist"] =$this->Pricelist_model->allpricelist("pricelist");
            }
            
            $data['content']="priceslist/priceslist";
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
            $data['vehicleslist']=$this->Pricelist_model->getvehicleslist();

            $data['content']="priceslist/create_form";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function insert()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $data=array(
                "broker"=>$this->input->post("broker"),
                "reg"=>$this->input->post("reg"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "gst"=>$this->input->post("gst"),
                "col"=>$this->input->post("col"),
                "omv"=>$this->input->post("omv_etran"),
                "ul"=>$this->input->post("ul"),
                "ton"=>$this->input->post("ton"),
                "vehno"=>$this->input->post("vehno"),
                "Q"=>$this->input->post("q"),
                "rdtx"=>$this->input->post("rdtx"),
                "iu"=>$this->input->post("iu"),
                "price"=>$this->input->post("price"),
                "loc"=>$this->input->post("loc"),
                "category_type"=>$this->input->post("type"),
                "created_date"=>date('Y-m-d')
            );
            $this->db->insert("pricelist",$data);
            $this->session->set_flashdata('success', 'Vehicles Price has been created.');
            redirect("priceslist/allpricelist/");
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
            $data["getpricescategory_list"] =$this->Pricelist_model->getpricescategory_list();          
            $data['vehicleslist']=$this->Pricelist_model->getvehicleslist();

            $data["vehipricesdata"] =$this->db->query("SELECT * FROM pricelist WHERE id=$id")->row();
            $data['content']="priceslist/edit_form";
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
                "broker"=>$this->input->post("broker"),
                "reg"=>$this->input->post("reg"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "gst"=>$this->input->post("gst"),
                "col"=>$this->input->post("col"),
                "omv"=>$this->input->post("omv_etran"),
                "ul"=>$this->input->post("ul"),
                "ton"=>$this->input->post("ton"),
                "vehno"=>$this->input->post("vehno"),
                "Q"=>$this->input->post("q"),
                "rdtx"=>$this->input->post("rdtx"),
                "iu"=>$this->input->post("iu"),
                "price"=>$this->input->post("price"),
                "loc"=>$this->input->post("loc"),
                "category_type"=>$this->input->post("type")
            );
            $this->db->where('id',$id);
            $this->db->update("pricelist",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("priceslist/allpricelist/");
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
            $this->db->delete("pricelist");
            redirect("priceslist/allpricelist/");
        }else{
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
    function upload_excel()
    {
      $this->load->view("uploadexcel");
    }
    function upload_file()
    {
        if(isset($_FILES["fileupload"]["name"]))
          {        

            $path = $_FILES["fileupload"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
           foreach($object->getWorksheetIterator() as $worksheet)
           {
            $highestRow = $worksheet->getHighestRow();
            $highestColumn = $worksheet->getHighestColumn();
            for($row=3; $row<=$highestRow; $row++)
            {
             // $no = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
             $c1 = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
             $c2 = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
             $c3 = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
             $c4 = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
             $c5 = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
             $c6 = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
             $c7 = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
             $c8 = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
             $c9 = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
             $c10 = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
             $c11 = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
             $c12 = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
             $c13 = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
             $c14 = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
             
             $filedata[] = array(
              'broker'   => $c1,
              'reg'    => $c2,
              'model'  => $c3,
              'gst'   => $c4,
              'col'    => $c5,
              'omv'  => $c6,
              'ul'   => $c7,
              'ton'    => $c8,
              'vehno'  => $c9,
              'Q'   => $c10,
              'rdtx'   => $c11,
              'iu'   => $c12,
              'price'   => $c13,
              'loc'   => $c14,
              'created_date'=>date("Y-m-d")
             );
            }
           }
           $this->db->insert_batch('pricelist', $filedata);      
          }
        redirect("priceslist/");
    }    
}