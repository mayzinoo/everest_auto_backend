<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Cash_creditinvoice extends CI_Controller
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
            $data["cashcredit"] =$this->db->query("SELECT * FROM cashcreditinvoice");
            $data['content']="gstinvoice/cashcreditinvoice/index";
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
            $data['vehilist']=$this->Gstinvoice_model->gstvehilist();
            $data['companylist']=$this->Gstinvoice_model->getcompanylist();
            $data['content']="gstinvoice/cashcreditinvoice/create_form";
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
            $this->db->where("type","gst");
            $query = $this->db->get("gstinvoice")->row_array();
            $result=json_encode($query);
            echo $result;
        }else
        {
          redirect('/');
        }
    }
    function searchcompanies()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $cmyname=$this->input->post("cmyname");

            $this->db->where("cmy_name",$cmyname);
            $query = $this->db->get("company")->row_array();
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
            $item=$this->input->post("item");
            $name=$this->input->post("name");
            $amt=$this->input->post("amt");
            $inclusiveitem="";
            for($i=0;$i<count($item);$i++)
            {
              $inclusiveitem .= $item[$i].",". $name[$i].",". $amt[$i]."}";        
            }
            $data=array(
                "billto"=>$this->input->post("billto"),
                "address"=>$this->input->post("address"),
                "date"=>$this->input->post("date"),
                "serial_no"=>$this->input->post("serialno"),
                "invoice_no"=>$this->input->post("invoiceno"),
                "hirer"=>$this->input->post("hirer"),
                "hirer_address"=>$this->input->post("hireraddress"),

                "vehireg_no"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "originalreg_date"=>$this->input->post("originalregdate"),
                "engine_no"=>$this->input->post("engineno"),
                "chassis_no"=>$this->input->post("chassisno"),
                "vehi_invoiceprice"=>$this->input->post("vehi_invoiceprice"),

                "inclusive_items"=>$inclusiveitem,

                "insurance_premium"=>$this->input->post("insurancepremium"),
                "loan_advpayment"=>$this->input->post("loanpayment"),
                "less"=>$this->input->post("less"),  
                "deposit"=>$this->input->post("deposit"),
                "total_amt  "=>$this->input->post("totalamt"),
                
                "created_at"=>date('Y-m-d')

            );
            $this->db->insert("cashcreditinvoice",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("cash_creditinvoice/");
        }else{
          redirect('/');
        }        
    }
    function searchhirer()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $hirername=$this->input->post("hirername");
            
            $this->db->where("customer_name",$hirername);
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
            $data['companylist']=$this->Gstinvoice_model->getcompanylist();
            $data['vehilist']=$this->Gstinvoice_model->gstvehilist();
            $data["creditcashinvoice"] =$this->db->query("SELECT * FROM cashcreditinvoice WHERE id='$id'")->row();
            $data['content']="gstinvoice/cashcreditinvoice/edit_form";
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
            $item=$this->input->post("item");
            $name=$this->input->post("name");
            $amt=$this->input->post("amt");
            $inclusiveitem="";
            for($i=0;$i<count($item);$i++)
            {
              $inclusiveitem .= $item[$i].",". $name[$i].",". $amt[$i]."}";        
            }
            $data=array(
                "billto"=>$this->input->post("billto"),
                "address"=>$this->input->post("address"),
                "date"=>$this->input->post("date"),
                "serial_no"=>$this->input->post("serialno"),
                "invoice_no"=>$this->input->post("invoiceno"),
                "hirer"=>$this->input->post("hirer"),
                "hirer_address"=>$this->input->post("hireraddress"),

                "vehireg_no"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "originalreg_date"=>$this->input->post("originalregdate"),
                "engine_no"=>$this->input->post("engineno"),
                "chassis_no"=>$this->input->post("chassisno"),
                "vehi_invoiceprice"=>$this->input->post("vehi_invoiceprice"),

                "inclusive_items"=>$inclusiveitem,

                "insurance_premium"=>$this->input->post("insurancepremium"),
                "loan_advpayment"=>$this->input->post("loanpayment"),
                "less"=>$this->input->post("less"),  
                "deposit"=>$this->input->post("deposit"),
                "total_amt  "=>$this->input->post("totalamt")
            );
            $this->db->where('id',$id);
            $this->db->update("cashcreditinvoice",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("cash_creditinvoice/");
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
            $this->db->delete("cashcreditinvoice");
            redirect("cash_creditinvoice/");
        }else{
          redirect('/');
        }
    }
    function cashandcreditinvoiceform_pdf()
    {
        $id=$this->uri->segment(3);
        $data["cashcreditinvoice"]=$this->db->query("SELECT * FROM cashcreditinvoice WHERE id='$id'")->row();

        $pdf_view=$this->load->view('gstinvoice/cashcreditinvoice/cashcreditinvoiceform',$data, true);
        $pdfFilePath = 'Cash & Credit Invoice.pdf';
        
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