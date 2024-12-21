<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Gms_sales_receipt extends CI_Controller
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
            $data["salesreceipt"] =$this->db->query("SELECT * FROM sales_receipt WHERE type='gms'");
            $data['content']="gmsinvoice/sales_receipt/index";
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
            $data['content']="gmsinvoice/sales_receipt/create_form";
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
                "vehiregno"=>$this->input->post("vehiregno"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "date"=>$this->input->post("date"),
                "serial_no"=>$this->input->post("serialno"),
                "invoice_no"=>$this->input->post("invoiceno"),

                "selling_price"=>$this->input->post("sellingprice"),
                "ltatransfer_fee"=>$this->input->post("ltatransferfee"),
                "roadtax"=>$this->input->post("roadtax"),
                "insurance_premium"=>$this->input->post("insurancepremium"),
                "hp_facilities_fee"=>$this->input->post("facilitiesfee"),
                "loan_adv_payment"=>$this->input->post("loanadvpayment"),
                "total_payable"=>$this->input->post("totalpayable"),
                "less"=>$this->input->post("less"),   
                "deposit"=>$this->input->post("deposit"), 

                "tradein_vehino"=>$this->input->post("tradeinvehino"),
                "tradein_price"=>$this->input->post("tradeinprice"),
                "lessfull_sett_amt"=>$this->input->post("fullsetteamt"),
                "loan_amt"=>$this->input->post("loanamt"),
                "loan_amt_percent"=>$this->input->post("loanamtpercent"),
                "finance_cmy"=>$this->input->post("financecmy"),
                "total_deduction"=>$this->input->post("totaldeduction"),
                "balance_deduction"=>$this->input->post("balancedue"),   
                "cash_cheque_no"=>$this->input->post("chashchequeno"),    

                "vehion_date"=>$this->input->post("vehiondate"),   
                "vehion_time"=>$this->input->post("vehiontime"),   
                "type"=>"gms",            
                
                "created_at"=>date('Y-m-d')
            );
            if(!empty($_FILES['signof_author']['name']))
                {
                    $author = $this->_do_upload_authsign();
                    $data['signof_author'] = $author;
                }
            if(!empty($_FILES['signof_buyer']['name']))
                {
                    $buyer = $this->_do_upload_buyersign();
                    $data['signof_buyer'] = $buyer;
                }
            $this->db->insert("sales_receipt",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("gms_sales_receipt/");
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
            $data["salesreceipt"] =$this->db->query("SELECT * FROM sales_receipt WHERE id='$id'")->row();
            $data['content']="gmsinvoice/sales_receipt/edit_form";
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
                    "vehiregno"=>$this->input->post("vehiregno"),
                    "make"=>$this->input->post("make"),
                    "model"=>$this->input->post("model"),
                    "date"=>$this->input->post("date"),
                    "serial_no"=>$this->input->post("serialno"),
                    "invoice_no"=>$this->input->post("invoiceno"),

                    "selling_price"=>$this->input->post("sellingprice"),
                    "ltatransfer_fee"=>$this->input->post("ltatransferfee"),
                    "roadtax"=>$this->input->post("roadtax"),
                    "insurance_premium"=>$this->input->post("insurancepremium"),
                    "hp_facilities_fee"=>$this->input->post("facilitiesfee"),
                    "loan_adv_payment"=>$this->input->post("loanadvpayment"),
                    "total_payable"=>$this->input->post("totalpayable"),
                    "less"=>$this->input->post("less"),   
                    "deposit"=>$this->input->post("deposit"), 

                    "tradein_vehino"=>$this->input->post("tradeinvehino"),
                    "tradein_price"=>$this->input->post("tradeinprice"),
                    "lessfull_sett_amt"=>$this->input->post("fullsetteamt"),
                    "loan_amt"=>$this->input->post("loanamt"),
                    "loan_amt_percent"=>$this->input->post("loanamtpercent"),
                    "finance_cmy"=>$this->input->post("financecmy"),
                    "total_deduction"=>$this->input->post("totaldeduction"),
                    "balance_deduction"=>$this->input->post("balancedue"),   
                    "cash_cheque_no"=>$this->input->post("chashchequeno"),    

                    "vehion_date"=>$this->input->post("vehiondate"),   
                    "vehion_time"=>$this->input->post("vehiontime")
            );
            if(!empty($_FILES['signof_author']['name']))
                {
                    $hirer = $this->_do_upload_authsign();
                    $data['signof_author'] = $hirer;
                }
            if(!empty($_FILES['signof_buyer']['name']))
                {
                    $guarantor = $this->_do_upload_buyersign();
                    $data['signof_buyer'] = $guarantor;
                }
            $this->db->where('id',$id);
            $this->db->update("sales_receipt",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("gms_sales_receipt/");
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
            $this->db->delete("sales_receipt");
            redirect("gms_sales_receipt/");
        }else{
          redirect('/');
        }
    }
    function salesreceipt_pdf()
    {
        $id=$this->uri->segment(3);
        $data["salesreceipt"]=$this->db->query("SELECT * FROM sales_receipt WHERE id='$id'")->row();

        $pdf_view=$this->load->view('gmsinvoice/sales_receipt/salesreceiptpdf',$data, true);
        $pdfFilePath = 'Sales Receipt.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }

    
    private function _do_upload_authsign()
    {
        $this->load->helper('file'); 
        $this->load->library('upload'); 
                
        $config['upload_path']          = 'upload/sign/';
        $config['allowed_types']        = 'jpg|png|jpeg';   
        $config['remove_spaces']=TRUE;

        if(!file_exists($config['upload_path'])){
            mkdir($config['upload_path'], 0777);
        }
        $this->upload->initialize($config);
 
       if(!$this->upload->do_upload('signof_author')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    private function _do_upload_buyersign()
    {
        $this->load->helper('file'); 
        $this->load->library('upload'); 
                
        $config['upload_path']          = 'upload/sign/';
        $config['allowed_types']        = 'jpg|png|jpeg';   
        $config['remove_spaces']=TRUE;

        if(!file_exists($config['upload_path'])){
            mkdir($config['upload_path'], 0777);
        }
        $this->upload->initialize($config);
 
       if(!$this->upload->do_upload('signof_buyer')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }



}?>