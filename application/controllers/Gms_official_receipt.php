<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Gms_official_receipt extends CI_Controller
{
    function __construct() 
	{
      parent::__construct();
      error_reporting(1);   
    }
   
    function index()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {           
            $data["gmsorreceipt"] =$this->db->query("SELECT * FROM or_tbl WHERE type='gms'");
            $data['content']="gmsinvoice/official_receipt/index";
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
            $data['vehilist']=$this->Gstinvoice_model->getvehilist();
            $data['content']="gmsinvoice/official_receipt/create_form";
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
                "date"=>$this->input->post("date"),
                "billto"=>$this->input->post("billto"),
                "address"=>$this->input->post("address"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "chassis_no"=>$this->input->post("chassisno"),
                "engine_no"=>$this->input->post("engineno"),
                "vehi_no"=>$this->input->post("vehino"),
                "originalreg_date"=>$this->input->post("originalregdate"),
                "type"=>"gms",  
                
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("or_tbl",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("gms_official_receipt/");
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
            $data['vehilist']=$this->Gstinvoice_model->getvehilist();
            $data["orreceipt"] =$this->db->query("SELECT * FROM or_tbl WHERE id='$id'")->row();
            $data['content']="gmsinvoice/official_receipt/edit_form";
            $this->load->view("template",$data);
        }else{
            redirect('/');
        }
    }
    function searchvehicles()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $vehiregno=$this->input->post("vehiregno");

            $this->db->where("vehireg_no",$vehiregno);
            $this->db->where("type","gms");
            $query = $this->db->get("gstinvoice")->row_array();
            $result=json_encode($query);
            echo $result;
        }else
        {
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
                    "date"=>$this->input->post("date"),
                    "billto"=>$this->input->post("billto"),
                    "address"=>$this->input->post("address"),
                    "make"=>$this->input->post("make"),
                    "model"=>$this->input->post("model"),
                    "chassis_no"=>$this->input->post("chassisno"),
                    "engine_no"=>$this->input->post("engineno"),
                    "vehi_no"=>$this->input->post("vehino"),
                    "originalreg_date"=>$this->input->post("originalregdate")
            );
            $this->db->where('id',$id);
            $this->db->update("or_tbl",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("gms_official_receipt/");
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
            $this->db->delete("or_tbl");
            redirect("gms_official_receipt/");
        }else{
          redirect('/');
        }
    }
    function gms_officialreceipt_pdf()
    {
        $id=$this->uri->segment(3);
        $data["orreceipt"]=$this->db->query("SELECT * FROM or_tbl WHERE id='$id'")->row();

        $pdf_view=$this->load->view('gmsinvoice/official_receipt/officialreceiptpdf',$data, true);
        $pdfFilePath = 'GMS Offical Receipt.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
}?>