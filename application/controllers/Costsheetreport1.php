<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed');     
class Costsheetreport1 extends CI_Controller
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
            $data["costsheetreport1data"] =$this->db->query("SELECT * FROM costsheet1_tbl");

            $data['content']="vehicles-detail/costsheetreport1/index";
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
            
            $data['content']="vehicles-detail/costsheetreport1/create_form";
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
            $des1=$this->input->post("des1");
            $des2=$this->input->post("des2");
            $des3=$this->input->post("des3");
            $date=$this->input->post("date");
            $profit=$this->input->post("profit");
            $costing=$this->input->post("costing");
            $total=$this->input->post("total");

            $costsheetdes="";
            for($i=0;$i<count($des1);$i++)
            {
              $costsheetdes .= $des1[$i].",". $des2[$i].",". $des3[$i].",". $date[$i].",". $profit[$i].",". $costing[$i].",". $total[$i]."}";        
            }
            $data=array(
                "broker1"=>$this->input->post("broker1"),
                "broker2"=>$this->input->post("broker2"),
                "broker3"=>$this->input->post("broker3"),
                "car_plate"=>$this->input->post("carplate"),
                "makemodel"=>$this->input->post("makemodel"),
                "costsheetdes"=>$costsheetdes,
                "profit_total"=>$this->input->post("profit_total"),
                "costing_total"=>$this->input->post("costing_total"),
                "totalamt"=>$this->input->post("totalamt"),
                "created_at"=>date('Y-m-d')
              );

            $this->db->insert("costsheet1_tbl",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("costsheetreport1/");
        }else{
          redirect('/');
        }
    }
    function edit_form(){
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {           
            $id=$this->uri->segment(3);

            $data["costsheetreport1data"] =$this->db->query("SELECT * FROM costsheet1_tbl WHERE id='$id'")->row();
            $data['content']="vehicles-detail/costsheetreport1/edit_form";
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

            $des1=$this->input->post("des1");
            $des2=$this->input->post("des2");
            $des3=$this->input->post("des3");
            $date=$this->input->post("date");
            $profit=$this->input->post("profit");
            $costing=$this->input->post("costing");
            $total=$this->input->post("total");

            $costsheetdes="";
            for($i=0;$i<count($des1);$i++)
            {
              $costsheetdes .= $des1[$i].",". $des2[$i].",". $des3[$i].",". $date[$i].",". $profit[$i].",". $costing[$i].",". $total[$i]."}";        
            }
            $data=array(
                "broker1"=>$this->input->post("broker1"),
                "broker2"=>$this->input->post("broker2"),
                "broker3"=>$this->input->post("broker3"),
                "car_plate"=>$this->input->post("carplate"),
                "makemodel"=>$this->input->post("makemodel"),
                "costsheetdes"=>$costsheetdes,
                "profit_total"=>$this->input->post("profit_total"),
                "costing_total"=>$this->input->post("costing_total"),
                "totalamt"=>$this->input->post("totalamt")
              );

            $this->db->where('id',$id);
            $this->db->update("costsheet1_tbl",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("costsheetreport1/");
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
            $this->db->delete("costsheet1_tbl");
            redirect("costsheetreport1/");
        }else
        {
          redirect('/');
        }
    }

    function costsheetreport1_pdf()
    {
        $id=$this->uri->segment(3);
       
        $data["vehiclesdetail"] =$this->db->query("SELECT * FROM costsheet1_tbl WHERE id='$id'")->row();

        $pdf_view=$this->load->view('vehicles-detail/costsheetreport1/costsheet1report_pdf',$data, true);
        $pdfFilePath = 'Vehicles_costsheet1report.pdf';
        
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