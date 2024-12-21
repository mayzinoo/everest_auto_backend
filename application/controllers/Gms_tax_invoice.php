<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Gms_tax_invoice extends CI_Controller
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
            $data["customerinvoice"] =$this->db->query("SELECT * FROM customertax_invoice WHERE type='gms'");
            $data['content']="gmsinvoice/tax_invoice/index";
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
            
            $data['customerlist']=$this->Gstinvoice_model->gethirerlist();
            $data['vehilist']=$this->Gstinvoice_model->getvehilist();

            $data['content']="gmsinvoice/tax_invoice/create_form";
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
                "serial_no"=>$this->input->post("serialno"),
                "invoice_no"=>$this->input->post("invoiceno"),
                "vehireg_no"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "original_reg_date"=>$this->input->post("originalregdate"),
                "engine_no"=>$this->input->post("engineno"),
                "chassis_no"=>$this->input->post("chassisno"),
                "vehi_invoice_price"=>$this->input->post("vehi_invoiceprice"),
                "hp_facilities_fee"=>$this->input->post("facilitiesfee"),
                "lta_transferfee"=>$this->input->post("ltatransferfee"),
                
                "insurance_premium"=>$this->input->post("insurancepremium"),
                "loan_advance_payment"=>$this->input->post("loanpayment"),
                "deposit"=>$this->input->post("deposit"),
                "down_fullpayment"=>$this->input->post("downfullpayment"),
                "trade_in_vehino"=>$this->input->post("tradevehino"),
                "trade_in_price"=>$this->input->post("tradeprice"),
                "lessfull_sette_amt"=>$this->input->post("settelamt"),
                "leasstrade_amt"=>$this->input->post("lesstradeamt"),
                "loan_amt"=>$this->input->post("loanamt"),
                "loan_amt_percent"=>$this->input->post("percent"),
                "finance_cmy"=>$this->input->post("financecmy"),
                "total_invoice_amt"=>$this->input->post("totalamt"),
                "type"=>"gms",
                "created_at"=>date('Y-m-d')

            );
            $this->db->insert("customertax_invoice",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("gms_tax_invoice/");
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
            $data["taxinvoice"] =$this->db->query("SELECT * FROM customertax_invoice WHERE id='$id'")->row();
            $data['content']="gmsinvoice/tax_invoice/edit_form";
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
                "serial_no"=>$this->input->post("serialno"),
                "invoice_no"=>$this->input->post("invoiceno"),
                "vehireg_no"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "original_reg_date"=>$this->input->post("originalregdate"),
                "engine_no"=>$this->input->post("engineno"),
                "chassis_no"=>$this->input->post("chassisno"),
                "vehi_invoice_price"=>$this->input->post("vehi_invoiceprice"),
                "hp_facilities_fee"=>$this->input->post("facilitiesfee"),
                "lta_transferfee"=>$this->input->post("ltatransferfee"),
                
                "insurance_premium"=>$this->input->post("insurancepremium"),
                "loan_advance_payment"=>$this->input->post("loanpayment"),
                "deposit"=>$this->input->post("deposit"),
                "down_fullpayment"=>$this->input->post("downfullpayment"),
                "trade_in_vehino"=>$this->input->post("tradevehino"),
                "trade_in_price"=>$this->input->post("tradeprice"),
                "lessfull_sette_amt"=>$this->input->post("settelamt"),
                "leasstrade_amt"=>$this->input->post("lesstradeamt"),
                "loan_amt"=>$this->input->post("loanamt"),
                "loan_amt_percent"=>$this->input->post("percent"),
                "finance_cmy"=>$this->input->post("financecmy"),
                "total_invoice_amt"=>$this->input->post("totalamt")
            );
            
            $this->db->where('id',$id);
            $this->db->update("customertax_invoice",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("gms_tax_invoice/");
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
            $this->db->delete("customertax_invoice");
            redirect("gms_tax_invoice/");
        }else{
          redirect('/');
        }
    }
    function taxinvoiceform_pdf()
    {
        $id=$this->uri->segment(3);
        $data["taxinvoice"]=$this->db->query("SELECT * FROM customertax_invoice WHERE id='$id'")->row();

        $pdf_view=$this->load->view('gmsinvoice/tax_invoice/taxinvoiceform',$data, true);
        $pdfFilePath = 'Customer TAX INV.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
}?>