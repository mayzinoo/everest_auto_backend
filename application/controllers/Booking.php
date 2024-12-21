<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Booking extends CI_Controller
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
                  $data["bookinglist"] =$this->Main_model->allbookinglists("bookings");    
                }else{
                  $data["bookinglist"] =$this->Main_model->bookinglists("bookings");   
                }

                $data['content']="booking/booking";
                $this->load->view("template",$data);
          }else{
            redirect('/');
          }
    }
    function update_bookingapprove()
    {
      
      $bid=$this->input->post("bid");
      $approvestatus=$this->input->post("approvestatus");
      $data = array(
                  'check_status' => $approvestatus
                );
      $this->db->where('id',$bid);
      $this->db->update("bookings",$data);

      redirect("booking/");

    }
    function update_bookingstatus()
    {
          $Id=date('d');
          $invoicename='EA'.date('y').date('m').str_pad($Id,3,'0',STR_PAD_LEFT);
          $bid=$this->input->post("bid");
          $vid=$this->input->post("vid");
          $userid=$this->input->post("userid");
          $pmethod=$this->input->post("paymentmethod");
          if($pmethod=="cash"){
            $paymentbank="";
          }else{
            $paymentbank=$this->input->post("paymentbank");
          }
          
          $data = array(
                      'payment_method'=>$pmethod,
                      'bank_name'=>$paymentbank,
                      'reference_date'=>$this->input->post("reference_date"),
                      'confirm_date'=>date('Y-m-d'),
                      'status' => "1"
                    );
          $this->db->where('id',$bid);
          $this->db->update("bookings",$data);

          $vehidata = array(
                      'status' => "1"
                    );
          $this->db->where('id',$vid);
          $this->db->update("vehicles",$vehidata);

          
          $data = array(
                      'user_id'=>$userid,
                      'vehicle_id'=>$vid,
                      'booking_id'=>$bid,
                      'invoice_name'=>$invoicename,
                      'invoice_date'=>date('Y-m-d'),
                      'status'=>'1'
                    );
          $invoicedata=$this->db->query("SELECT * FROM invoice WHERE booking_id=$bid")->row();
          if(!empty($invoicedata)){
            $this->db->where('id',$bid);
            $this->db->update("invoice",$data);
          }else{
            $this->db->insert("invoice",$data);
          }      
          redirect("booking/");
    }
    function booking_detail()
    {
      if($this->session->userdata("email") && $this->session->userdata("password"))
      { 
          $id=$this->uri->segment(3);
          $data["bookingdata"] =$this->db->query("SELECT bookings.*,bookings.status as bstatus,bookings.id as bid, users.*,vehicles.model_name as modelname FROM bookings LEFT JOIN vehicles ON vehicles.id=bookings.vehicle_id LEFT JOIN users ON users.id=bookings.user_id WHERE bookings.id=$id ORDER BY bookings.id DESC ")->row(); 

          $data['content']="booking/booking_detail";
          $this->load->view("template",$data);
      }else{
        redirect('/');
      }
    }
    function generateinvoicepdf(){
        
        $id=$this->uri->segment(3);  
        $ivono=$this->uri->segment(4);      
        $data["invoiceinfo"]=$this->db->query("SELECT users.first_name as fname,users.last_name as lname,users.email as useremail,bookings.billing_address1 as billaddress,bookings.billing_phone as billphone,vehicles.model_name as modelname,bookings.duration as bookingduration,bookings.subscription_price,bookings.total_amt as total_amt,bookings.delivery_remark,invoice.invoice_date,invoice.invoice_name FROM invoice LEFT JOIN bookings ON bookings.id = invoice.booking_id LEFT JOIN users ON users.id=invoice.user_id LEFT JOIN vehicles ON vehicles.id=invoice.vehicle_id WHERE invoice.id = $id")->row();  

        $pdf_view=$this->load->view('invoice/invoicedownload',$data, true);
        $pdfFilePath = 'InvoiceNo-'.$ivono.'.pdf';
        $this->load->library('m_pdf');
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
    function showuserbooking($id)
    {
      $data = $this->Main_model->getuserbooking_by_id($id);
      echo json_encode($data);
    }
    function delete_bookings()
    {
      $id=$this->uri->segment(3);
      $this->db->where('id',$id);
      $this->db->delete("bookings");
      redirect("booking/");
    }
}