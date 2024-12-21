<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Invoice extends CI_Controller
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
        if($this->session->userdata("email") && $this->session->userdata("password"))
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

              if($this->session->userdata("role")=="admin"){
                $data["invoicelist"] =$this->Main_model->allinvoicelists("invoice");  
              }else{
                $data["invoicelist"] =$this->Main_model->invoicelists("invoice");   
              }
                

              $data['content']="invoice/invoice";
              $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function delete_invoice()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
      {
          $id=$this->uri->segment(3);
          $this->db->where('id',$id);
          $this->db->delete("invoice");
          redirect("invoice/");
      }else{
          redirect('/');
        }
    }
    function generateinvoicepdf()
    {
        
        $id=$this->uri->segment(3);  
        $ivono=$this->uri->segment(4);      
        $data["invoiceinfo"]=$this->db->query("SELECT users.first_name as fname,users.last_name as lname,users.email as useremail,bookings.billing_address1 as billaddress,bookings.billing_phone as billphone,vehicles.model_name as modelname,bookings.duration as bookingduration,bookings.subscription_price,bookings.total_amt as total_amt,bookings.delivery_remark,invoice.invoice_date,invoice.invoice_name FROM invoice LEFT JOIN bookings ON bookings.id = invoice.booking_id LEFT JOIN users ON users.id=invoice.user_id LEFT JOIN vehicles ON vehicles.id=invoice.vehicle_id WHERE invoice.id = $id")->row();  

        $pdf_view=$this->load->view('invoice/invoicedownload',$data, true);
        $pdfFilePath = 'InvoiceNo-'.$ivono.'.pdf';
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
        
}