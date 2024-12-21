<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Gms_com extends CI_Controller
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
            $data["gmscom"] =$this->db->query("SELECT * FROM com WHERE type='gms'");
            $data['content']="gmsinvoice/com/index";
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

            $data['content']="gmsinvoice/com/create_form";
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
                "billto"=>$this->input->post("billto"),
                "address"=>$this->input->post("address"),
                "date"=>$this->input->post("date"),
                "vehi_no"=>$this->input->post("vehino"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "chassis_no"=>$this->input->post("chasisno"),
                "ac"=>$this->input->post("ac"),
                "commission"=>$this->input->post("commisson"),
                "incentive"=>$this->input->post("incentive"),
                "gst"=>$this->input->post("gst"),
                "gst_percent"=>$this->input->post("gstpercent"),
                "total_amt"=>$this->input->post("totalamt"),    
                "type"=>"gms",             
                
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("com",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("gms_com/");
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
    function edit_form()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);
            $data['vehilist']=$this->Gstinvoice_model->getvehilist();
            $data["gmscom"] =$this->db->query("SELECT * FROM com WHERE id='$id'")->row();
            $data['content']="gmsinvoice/com/edit_form";
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
                    "billto"=>$this->input->post("billto"),
                    "address"=>$this->input->post("address"),
                    "date"=>$this->input->post("date"),
                    "vehi_no"=>$this->input->post("vehino"),
                    "make"=>$this->input->post("make"),
                    "model"=>$this->input->post("model"),
                    "chassis_no"=>$this->input->post("chasisno"),
                    "ac"=>$this->input->post("ac"),
                    "commission"=>$this->input->post("commisson"),
                    "incentive"=>$this->input->post("incentive"),
                    "gst"=>$this->input->post("gst"),
                    "gst_percent"=>$this->input->post("gstpercent"),
                    "total_amt"=>$this->input->post("totalamt")
            );
            $this->db->where('id',$id);
            $this->db->update("com",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("gms_com/");
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
            $this->db->delete("com");
            redirect("gms_com/");
        }else{
          redirect('/');
        }
    }
    function gmscom_pdf()
    {
        $id=$this->uri->segment(3);
        $data["gmscom"]=$this->db->query("SELECT * FROM com WHERE id='$id'")->row();

        $pdf_view=$this->load->view('gmsinvoice/com/gmscomformpdf',$data, true);
        $pdfFilePath = 'GMS COM.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
}
?>