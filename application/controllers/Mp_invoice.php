<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Mp_invoice extends CI_Controller
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
            $data["mpinvoice"] =$this->db->query("SELECT * FROM mpinvoice");
            $data['content']="gmsinvoice/mpinvoice/index";
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
            $data['content']="gmsinvoice/mpinvoice/create_form";
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
    function insert()
    {     
       
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            
            $data=array(                
                "billto"=>$this->input->post("billto"),
                "address"=>$this->input->post("address"),
                "date"=>$this->input->post("date"),
                "vehireg_no"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "originalreg_date"=>$this->input->post("originalregdate"),
                "engine_no"=>$this->input->post("engineno"),
                "chassis_no"=>$this->input->post("chassisno"),
                "vehi_invoiceprice"=>$this->input->post("vehiinvoiceprice"),
                "deposit_paid"=>$this->input->post("deposit"),
                "loan_amt"=>$this->input->post("loanamt"),
                "total_amt"=>$this->input->post("totalamt"),
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("mpinvoice",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("mp_invoice/");
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
            $data["mpinvoice"] =$this->db->query("SELECT * FROM mpinvoice WHERE id='$id'")->row();
            $data['content']="gmsinvoice/mpinvoice/edit_form";
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
                "vehireg_no"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "originalreg_date"=>$this->input->post("originalregdate"),
                "engine_no"=>$this->input->post("engineno"),
                "chassis_no"=>$this->input->post("chassisno"),
                "vehi_invoiceprice"=>$this->input->post("vehiinvoiceprice"),
                "deposit_paid"=>$this->input->post("deposit"),
                "loan_amt"=>$this->input->post("loanamt"),
                "total_amt"=>$this->input->post("totalamt")
            );

            $this->db->where('id',$id);
            $this->db->update("mpinvoice",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("mp_invoice/");
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
            $this->db->delete("mpinvoice");
            redirect("mp_invoice/");
        }else{
          redirect('/');
        }
    }
    function mpinvoice_pdf()
    {
        $id=$this->uri->segment(3);
        $data["mpinvoice"]=$this->db->query("SELECT * FROM mpinvoice WHERE id='$id'")->row();

        $pdf_view=$this->load->view('gmsinvoice/mpinvoice/mpinvoiceform',$data, true);
        $pdfFilePath = 'MP INVOICE.pdf';
        
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