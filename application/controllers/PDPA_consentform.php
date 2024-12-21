<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class PDPA_consentform extends CI_Controller
{
    function __construct() 
	{
      parent::__construct();
      error_reporting(1);   
      $this->load->library('ckeditor');
      $this->load->library('ckfinder');
    }
    function edit_form()
    {    
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {                 

            $data["pdpaconsent"]=$this->db->query("SELECT * FROM pdpa_consent WHERE document_name='PDPA Consent Form'")->row();
            $data['customerlist']=$this->Customer_model->getcustomerlist();
            
            $data['content']="insurance/proposalform/pdpa_consent/edit_form";
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
            $docu_name="PDPA Consent Form";
            $data=array(   
                "customer_id"=>$this->input->post("name"),

                "name"=>$this->input->post("name"),
                "nric"=>$this->input->post("nric"),
                "date"=>$this->input->post("date")
            );
            $uuu=array(
                        "insurance_id"=>"1",
                        "customer_id"=>$this->input->post("name"),
                        "document_name"=>$docu_name
                    );
                     $this->db->insert("insurance_files",$uuu);
            if(!empty($_FILES['sign']['name']))
            {
                $hirer = $this->_do_upload_signature();
                $data['sign'] = $hirer;
            }

            $this->db->where('document_name',$docu_name);
            $this->db->update("pdpa_consent",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect('insurance/');

        }else{
              redirect('/');
            }
    }
    function pdpaconsentform_pdf()
    {
        $data["pdpaconsent"]=$this->db->query("SELECT pdpa_consent.*,customer.name as cuname FROM pdpa_consent LEFT JOIN customer ON customer.id=pdpa_consent.customer_id")->row();

        $pdf_view=$this->load->view('insurance/proposalform/pdpa_consent/pdpa_consent',$data, true);
        $pdfFilePath = 'PDPA Consent Form latest 27 October 2015 _Generic_.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    private function _do_upload_signature()
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
 
       if(!$this->upload->do_upload('sign')) //upload and validate
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