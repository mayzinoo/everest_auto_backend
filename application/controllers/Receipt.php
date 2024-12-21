<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Receipt extends CI_Controller
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
           
            $data["receiptdata"] =$this->db->query("SELECT receipt.*,vehicles.vehicle_no as vehicle_no FROM receipt LEFT JOIN vehicles ON vehicles.id=receipt.vehi_no");

            $data['content']="receipt/receipt";
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
            $data['vehicleslist']=$this->Main_model->getvehicleslist();

            $data['content']="receipt/create_form";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function searchmodelandprice()
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
    function generate_systemid(){
        $last_count = $this->db->query("SELECT * FROM quotation_request WHERE MONTH(created_at) = ?  and YEAR(created_at) = ?", [date('m'), date('Y')])->result();        
        $systemId = date('ym').sprintf('%02d', count($last_count));        
        return $systemId;
    }
    function insert()
    {
      
       
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            
            $data=array(
                "date"=>$this->input->post("date"),
                "reference_no"=>$this->input->post("referenceno"),
                "uen_nric_no"=>$this->input->post("nricno"),
                "office_address"=>$this->input->post("address"),
                "vehi_no"=>$this->input->post("vehino"),
                "model"=>$this->input->post("model"),
                "price"=>$this->input->post("price"),
                "deposit_paymentbycash_chequeno"=>$this->input->post("deposit"),
                "finance_due"=>$this->input->post("financedue"),
                "paid_to"=>$this->input->post("paidto"),
                "paid_price"=>$this->input->post("paidprice"),
                "balance"=>$this->input->post("balance"),
                "handover_date"=>$this->input->post("handoverdate"),
                "handover_time"=>$this->input->post("handovertime"),
                "created_at"=>date('Y-m-d')
            );
            if(!empty($_FILES['authorise_sign']['name']))
                {
                    $hirer = $this->_do_upload_authsign();
                    $data['authorised_sign'] = $hirer;
                }
            if(!empty($_FILES['authorise_sellersign']['name']))
                {
                    $guarantor = $this->_do_upload_sellersign();
                    $data['authorisedsignofseller'] = $guarantor;
                }
            $this->db->insert("receipt",$data);
            $this->session->set_flashdata('success', 'Has been created.');
            redirect("receipt/");
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
            $data['vehicleslist']=$this->Main_model->getvehicleslist();
            
            $data["receiptdata"] =$this->db->query("SELECT * FROM receipt WHERE id='$id'")->row();
            $data['content']="receipt/edit_form";
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
                "date"=>$this->input->post("date"),
                "uen_nric_no"=>$this->input->post("nricno"),
                "office_address"=>$this->input->post("address"),
                "vehi_no"=>$this->input->post("vehino"),
                "model"=>$this->input->post("model"),
                "price"=>$this->input->post("price"),
                "deposit_paymentbycash_chequeno"=>$this->input->post("deposit"),
                "finance_due"=>$this->input->post("financedue"),
                "paid_to"=>$this->input->post("paidto"),
                "paid_price"=>$this->input->post("paidprice"),
                "balance"=>$this->input->post("balance"),
                "handover_date"=>$this->input->post("handoverdate"),
                "handover_time"=>$this->input->post("handovertime")
            );
            if(!empty($_FILES['authorise_sign']['name']))
                {
                    $hirer = $this->_do_upload_authsign();
                    $data['authorised_sign'] = $hirer;
                }
            if(!empty($_FILES['authorise_sellersign']['name']))
                {
                    $guarantor = $this->_do_upload_sellersign();
                    $data['authorisedsignofseller'] = $guarantor;
                }
            $this->db->where('id',$id);
            $this->db->update("receipt",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("receipt/");
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
            $this->db->delete("receipt");
            redirect("receipt/");
        }else{
          redirect('/');
        }
    }
    function receipt_pdf()
    {
        $id=$this->uri->segment(3);
        $data["receipt"]=$this->db->query("SELECT * FROM receipt WHERE id='$id'")->row();

        $pdf_view=$this->load->view('receipt/receiptpdf_form',$data, true);
        $pdfFilePath = 'Purchase Receipt.pdf';
        
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
 
       if(!$this->upload->do_upload('authorise_sign')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    private function _do_upload_sellersign()
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
 
       if(!$this->upload->do_upload('authorise_sellersign')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
}
?>