<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Customer extends CI_Controller
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
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin")
        {        
            $data["customerdata"] =$this->db->query("SELECT customer.*,vehicles.vehicle_no as vehiname FROM customer LEFT JOIN vehicles ON vehicles.id=customer.vehi_no");        
            $data['content']="customer/index";
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
            $data["getmaritalstatus_list"] =$this->Main_model->getmaritalstatus_list();
            $data['vehicleslist']=$this->Main_model->getvehicleslist();
            $data['prev_vehicleslist']=$this->Main_model->getprev_vehicleslist();
            
            $data['content']="customer/create_form";
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
            $insurance=$this->input->post("insurance");
            $premium=$this->input->post("premium");
            $excess=$this->input->post("excess");
            $windscr=$this->input->post("windscr");
            $remark=$this->input->post("remark");

            $quotat="";
            for($i=0;$i<count($insurance);$i++)
            {
              $quotat .= $insurance[$i].",". $premium[$i].",". $excess[$i].",". $windscr[$i].",". $remark[$i]."}";        
            }

            $data=array(
                "registration_no"=>$this->input->post("registration_no"),
                "loan_period"=>$this->input->post("loan_period"),
                "loan_rate"=>$this->input->post("loan_rate"),
                "loan_amt"=>$this->input->post("loan_amt"),
                "purchase_price"=>$this->input->post("purchase_price"),
                "instalment"=>$this->input->post("instalment"),

                "detailsofgoods"=>$this->input->post("detailsofgoods"),
                "chassisno"=>$this->input->post("chassisno"),
                // "yearofmanufacture"=>$this->input->post("yearofmanufacture"),
                "engineno"=>$this->input->post("engineno"),
                "typeof_employ"=>$this->input->post("typeof_employ"),
                "finance_period"=>$this->input->post("finance_period"),
                "guaran_typeof_employ"=>$this->input->post("guaran_typeof_employ"),

                "name"=>$this->input->post("name"),
                "address"=>$this->input->post("address"),
                "nric"=>$this->input->post("nric"),
                "occupation"=>$this->input->post("occupation"),
                "cmy_name"=>$this->input->post("cmy_name"),
                "cmy_address"=>$this->input->post("cmy_address"),
                "month_income"=>$this->input->post("month_income"),
                "dob"=>$this->input->post("dob"),
                "hirer_gender"=>$this->input->post("hirer_gender"),
                "marital_status"=>$this->input->post("marital_status"),
                "yearof_service"=>$this->input->post("yearof_service_yr").",".$this->input->post("yearof_service_mth"),
                "email"=>$this->input->post("email"),
                "offc"=>$this->input->post("offc"),
                "hp"=>$this->input->post("hp"),
                "phone"=>$this->input->post("phone"),

                "guarantor_name"=>$this->input->post("guarantor_name"),
                "guarantor_address"=>$this->input->post("guarantor_address"),
                "guarantor_nric"=>$this->input->post("guarantor_nric"),
                "guarantor_occupation"=>$this->input->post("guarantor_occupation"),
                "guarantor_dob"=>$this->input->post("guarantor_dob"),
                "guarantor_marital_status"=>$this->input->post("guarantor_marital_status"),
                "guarantor_cmyname"=>$this->input->post("guarantor_cmyname"),
                "guarantor_cmyaddress"=>$this->input->post("guarantor_cmyaddress"),
                "guarantor_relationship"=>$this->input->post("guarantor_relationship"),
                "guarantor_monthincome"=>$this->input->post("guarantor_monthincome"),
                "guarantor_yearofservice"=>$this->input->post("guarantor_yearofservice_yr").",".$this->input->post("guarantor_yearofservice_mth"),
                "guarantor_email"=>$this->input->post("guarantor_email"),
                "guarantor_offc"=>$this->input->post("guarantor_offc"),
                "guarantor_hp"=>$this->input->post("guarantor_hp"),
                "guarantor_phone"=>$this->input->post("guarantor_phone"),

                "tto"=>$this->input->post("tto"),
                "tel"=>$this->input->post("tel"),
                "fax"=>$this->input->post("fax"),
                "reply_person"=>$this->input->post("reply_person"),
                "eapl_date"=>$this->input->post("eapl_date"),
                "salesperson"=>$this->input->post("salesperson"),
                "salesperson_mobile"=>$this->input->post("salesperson_mobile"),
                "salesperson_fax"=>$this->input->post("salesperson_fax"),
                "salesperson_email"=>$this->input->post("salesperson_email"),

                "vehi_no"=>$this->input->post("vehi_no"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "dateof_reg"=>$this->input->post("dateof_reg"),
                "manufacture_year"=>$this->input->post("manufacture_year"),
                "engine_capacity"=>$this->input->post("engine_capacity"),
                "parallel_import"=>$this->input->post("parallel_import"),
                "body_type"=>$this->input->post("body_type"),

                "insured_name"=>$this->input->post("insured_name"),
                "insured_nric"=>$this->input->post("insured_nric"),
                "insured_dob"=>$this->input->post("insured_dob"),
                "insured_marital_status"=>$this->input->post("insured_marital_status"),
                "insured_gender"=>$this->input->post("insured_gender"),
                "insured_occupation"=>$this->input->post("insured_occupation"),
                "insured_licensepassdate"=>$this->input->post("insured_licensepassdate"),
                "insured_email"=>$this->input->post("insured_email"),
                "insured_mobile"=>$this->input->post("insured_mobile"),

                "prev_insurer"=>$this->input->post("prev_insurer"),
                "prev_vehino"=>$this->input->post("prev_vehino"),
                "prev_ncd"=>$this->input->post("prev_ncd"),

                "driver_name"=>$this->input->post("driver_name"),
                "driver_nric"=>$this->input->post("driver_nric"),
                "driver_dob"=>$this->input->post("driver_dob"),
                "driver_marital_status"=>$this->input->post("driver_marital_status"),
                "driver_gender"=>$this->input->post("driver_gender"),
                "driver_occupation"=>$this->input->post("driver_occupation"),
                "driver_licensepassdate"=>$this->input->post("driver_licensepassdate"),
                "driver_relationship"=>$this->input->post("driver_relationship"),

                "claim_exp"=>$this->input->post("claim_exp"),
                "claim_expyes_date"=>$this->input->post("claim_expyes_date"),
                "claim_expyes_amt"=>$this->input->post("claim_expyes_amt"),
                "quotation_valid"=>$quotat,
                "proposalsign_date"=>$this->input->post("proposalsign_date"),
                                
                "created_at"=>date('Y-m-d')
            );
            if(!empty($_FILES['signof_hirer']['name']))
            {
                $hirer = $this->_do_upload_hirersign();
                $data['signof_hirer'] = $hirer;
            }
            if(!empty($_FILES['signof_guarantor']['name']))
            {
                $hirer = $this->_do_upload_guarantorsign();
                $data['signof_guarantor'] = $hirer;
            }
            if(!empty($_FILES['signof_proposal']['name']))
            {
                $hirer = $this->_do_upload_proposalsign();
                $data['signof_proposal'] = $hirer;
            }
            $this->db->insert("customer",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("customer/");
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
            $data["customer"] =$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();
            $data["getmaritalstatus_list"] =$this->Main_model->getmaritalstatus_list();
            $data['vehicleslist']=$this->Main_model->getvehicleslist();
            $data['prev_vehicleslist']=$this->Main_model->getprev_vehicleslist();

            $data['content']="customer/edit_form";
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
            $insurance=$this->input->post("insurance");
            $premium=$this->input->post("premium");
            $excess=$this->input->post("excess");
            $windscr=$this->input->post("windscr");
            $remark=$this->input->post("remark");

            $quotat="";
            for($i=0;$i<count($insurance);$i++)
            {
              $quotat .= $insurance[$i].",". $premium[$i].",". $excess[$i].",". $windscr[$i].",". $remark[$i]."}";        
            }

            $data=array(
                "registration_no"=>$this->input->post("registration_no"),
                "loan_period"=>$this->input->post("loan_period"),
                "loan_rate"=>$this->input->post("loan_rate"),
                "loan_amt"=>$this->input->post("loan_amt"),
                "purchase_price"=>$this->input->post("purchase_price"),
                "instalment"=>$this->input->post("instalment"),

                "detailsofgoods"=>$this->input->post("detailsofgoods"),
                "chassisno"=>$this->input->post("chassisno"),
                // "yearofmanufacture"=>$this->input->post("yearofmanufacture"),
                "engineno"=>$this->input->post("engineno"),
                "typeof_employ"=>$this->input->post("typeof_employ"),
                "finance_period"=>$this->input->post("finance_period"),
                "guaran_typeof_employ"=>$this->input->post("guaran_typeof_employ"),

                "name"=>$this->input->post("name"),
                "address"=>$this->input->post("address"),
                "nric"=>$this->input->post("nric"),
                "occupation"=>$this->input->post("occupation"),
                "cmy_name"=>$this->input->post("cmy_name"),
                "cmy_address"=>$this->input->post("cmy_address"),
                "month_income"=>$this->input->post("month_income"),
                "dob"=>$this->input->post("dob"),
                "hirer_gender"=>$this->input->post("hirer_gender"),
                "marital_status"=>$this->input->post("marital_status"),
                "yearof_service"=>$this->input->post("yearof_service_yr").",".$this->input->post("yearof_service_mth"),
                "email"=>$this->input->post("email"),
                "offc"=>$this->input->post("offc"),
                "hp"=>$this->input->post("hp"),
                "phone"=>$this->input->post("phone"),

                "guarantor_name"=>$this->input->post("guarantor_name"),
                "guarantor_address"=>$this->input->post("guarantor_address"),
                "guarantor_nric"=>$this->input->post("guarantor_nric"),
                "guarantor_occupation"=>$this->input->post("guarantor_occupation"),
                "guarantor_dob"=>$this->input->post("guarantor_dob"),
                "guarantor_marital_status"=>$this->input->post("guarantor_marital_status"),
                "guarantor_cmyname"=>$this->input->post("guarantor_cmyname"),
                "guarantor_cmyaddress"=>$this->input->post("guarantor_cmyaddress"),
                "guarantor_relationship"=>$this->input->post("guarantor_relationship"),
                "guarantor_monthincome"=>$this->input->post("guarantor_monthincome"),
                "guarantor_yearofservice"=>$this->input->post("guarantor_yearofservice_yr").",".$this->input->post("guarantor_yearofservice_mth"),
                "guarantor_email"=>$this->input->post("guarantor_email"),
                "guarantor_offc"=>$this->input->post("guarantor_offc"),
                "guarantor_hp"=>$this->input->post("guarantor_hp"),
                "guarantor_phone"=>$this->input->post("guarantor_phone"),

                "tto"=>$this->input->post("tto"),
                "tel"=>$this->input->post("tel"),
                "fax"=>$this->input->post("fax"),
                "reply_person"=>$this->input->post("reply_person"),
                "eapl_date"=>$this->input->post("eapl_date"),
                "salesperson"=>$this->input->post("salesperson"),
                "salesperson_mobile"=>$this->input->post("salesperson_mobile"),
                "salesperson_fax"=>$this->input->post("salesperson_fax"),
                "salesperson_email"=>$this->input->post("salesperson_email"),

                "vehi_no"=>$this->input->post("vehi_no"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "dateof_reg"=>$this->input->post("dateof_reg"),
                "manufacture_year"=>$this->input->post("manufacture_year"),
                "engine_capacity"=>$this->input->post("engine_capacity"),
                "parallel_import"=>$this->input->post("parallel_import"),
                "body_type"=>$this->input->post("body_type"),

                "insured_name"=>$this->input->post("insured_name"),
                "insured_nric"=>$this->input->post("insured_nric"),
                "insured_dob"=>$this->input->post("insured_dob"),
                "insured_marital_status"=>$this->input->post("insured_marital_status"),
                "insured_gender"=>$this->input->post("insured_gender"),
                "insured_occupation"=>$this->input->post("insured_occupation"),
                "insured_licensepassdate"=>$this->input->post("insured_licensepassdate"),
                "insured_email"=>$this->input->post("insured_email"),
                "insured_mobile"=>$this->input->post("insured_mobile"),

                "prev_insurer"=>$this->input->post("prev_insurer"),
                "prev_vehino"=>$this->input->post("prev_vehino"),
                "prev_ncd"=>$this->input->post("prev_ncd"),

                "driver_name"=>$this->input->post("driver_name"),
                "driver_nric"=>$this->input->post("driver_nric"),
                "driver_dob"=>$this->input->post("driver_dob"),
                "driver_marital_status"=>$this->input->post("driver_marital_status"),
                "driver_gender"=>$this->input->post("driver_gender"),
                "driver_occupation"=>$this->input->post("driver_occupation"),
                "driver_licensepassdate"=>$this->input->post("driver_licensepassdate"),
                "driver_relationship"=>$this->input->post("driver_relationship"),

                "claim_exp"=>$this->input->post("claim_exp"),
                "claim_expyes_date"=>$this->input->post("claim_expyes_date"),
                "claim_expyes_amt"=>$this->input->post("claim_expyes_amt"),
                "quotation_valid"=>$quotat,
                "proposalsign_date"=>$this->input->post("proposalsign_date"),
                                
                "created_at"=>date('Y-m-d')
            );
            if(!empty($_FILES['signof_hirer']['name']))
            {
                $hirer = $this->_do_upload_hirersign();
                $data['signof_hirer'] = $hirer;
            }
            if(!empty($_FILES['signof_guarantor']['name']))
            {
                $hirer = $this->_do_upload_guarantorsign();
                $data['signof_guarantor'] = $hirer;
            }
            if(!empty($_FILES['signof_proposal']['name']))
            {
                $hirer = $this->_do_upload_proposalsign();
                $data['signof_proposal'] = $hirer;
            }
            $this->db->where('id',$id);
            $this->db->update("customer",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("customer/");
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
            $this->db->delete("customer");
            redirect("customer/");
        }else{
          redirect('/');
        }
    }
    function download_document()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);    

            $data['content']="customer/download_document";
            $this->load->view("template",$data);
        }else{
            redirect('/');
        }
    }
    function loanproposal_pdf()
    {
        
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);    

            $data["customerdata"]=$this->db->query("SELECT customer.*,vehicles.vehicle_no as vehiname FROM customer LEFT JOIN vehicles ON vehicles.id=customer.vehi_no WHERE customer.id='$id'")->row();

            $pdf_view=$this->load->view('customer/private_car_bank/Abwin_Group_Proposal_Form_wef_25032021',$data, true);
            $pdfFilePath = 'Abwin_Group_Proposal_Form_wef.pdf';
            
            $this->load->library('m_pdf');
            $this->m_pdf->showImageErrors = true;
            $this->m_pdf->simpleTables = true;
            $this->m_pdf->packTableData = true;
            $this->m_pdf->keep_table_proportions = TRUE;
            $this->m_pdf->shrink_tables_to_fit=1;
            $this->m_pdf->pdf->WriteHTML($pdf_view);
            $this->m_pdf->pdf->Output($pdfFilePath, "I");
        }else{
            redirect('/');
        }
    }
    function maybankapplicationform_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["customerdata"]=$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();

        $pdf_view=$this->load->view('customer/private_car_bank/MayBank_Application_Form',$data, true);
        $pdfFilePath = 'MayBank Application Form 2021_09_.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
    function hlbankapplicationform_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["customerdata"]=$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();

        $pdf_view=$this->load->view('customer/private_car_bank/HL_BANK_APPL',$data, true);
        $pdfFilePath = 'HL BANK 1219 APPL.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function dbsform_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["customerdata"]=$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();

        $pdf_view=$this->load->view('customer/private_car_bank/dbs',$data, true);
        $pdfFilePath = 'DBS.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->showImageErrors = true;
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function uobform_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["customerdata"]=$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();

        $pdf_view=$this->load->view('customer/private_car_bank/uob',$data, true);
        $pdfFilePath = 'UOB_Company.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function uobindividualapp_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["uobdata"]=$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();

        $pdf_view=$this->load->view('customer/private_car_bank/uob_individual',$data, true);
        $pdfFilePath = 'UOB INDIVIDUAL APPLICATION _R6_16_.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function hongleongfinance_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["hongleongdata"]=$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();

        $pdf_view=$this->load->view('customer/private_car_bank/hongleong',$data, true);
        $pdfFilePath = 'HONG LEONG FINANCE.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function eqprivatemotorcarform_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["eqprivatecar"]=$this->db->query("SELECT customer.*,vehicles.vehicle_no as vehiname FROM customer LEFT JOIN vehicles ON vehicles.id=customer.vehi_no WHERE customer.id='$id'")->row();

        $pdf_view=$this->load->view('customer/proposalform/eqprivatemotorcar',$data, true);
        $pdfFilePath = 'EQ proposal _ Private Car Latest Version 7.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function eqcommercialproposal_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["eqcommercial"]=$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();

        $pdf_view=$this->load->view('customer/proposalform/eqcommercialvehicle',$data, true);
        $pdfFilePath = 'EQ proposal _ Commercial Vehicle Latest Version 7.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function chinataipingprivatecarproposal_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["chinaprivatecar"]=$this->db->query("SELECT customer.*,vehicles.vehicle_no as vehiname FROM customer LEFT JOIN vehicles ON vehicles.id=customer.vehi_no WHERE customer.id='$id'")->row();

        $pdf_view=$this->load->view('customer/proposalform/chinaprivatecar',$data, true);
        $pdfFilePath = 'China Taiping Private Car Proposal Form Latest 2022.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function chinataiping_commercialvehicle_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["chinacommercialvehi"]=$this->db->query("SELECT customer.*,vehicles.vehicle_no as vehiname FROM customer LEFT JOIN vehicles ON vehicles.id=customer.vehi_no WHERE customer.id='$id'")->row();

        $pdf_view=$this->load->view('customer/proposalform/chinataiping_commercial',$data, true);
        $pdfFilePath = 'China Taiping Commercial Vehicle Proposal Form Latest 2022.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function ntucproposal_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["ntucproposal"]=$this->db->query("SELECT customer.*,vehicles.vehicle_no as vehiname FROM customer LEFT JOIN vehicles ON vehicles.id=customer.vehi_no WHERE customer.id='$id'")->row();

        $pdf_view=$this->load->view('customer/proposalform/ntuc_proposal',$data, true);
        $pdfFilePath = 'NTUC_Proposal Form 1.9.22.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function acknowledgementforvehicle_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["acknowledgeforvehicle"]=$this->db->query("SELECT customer.*,vehicles.vehicle_no as vehiname FROM customer LEFT JOIN vehicles ON vehicles.id=customer.vehi_no WHERE customer.id='$id'")->row();

        $pdf_view=$this->load->view('customer/proposalform/acknowledgeforvehicle',$data, true);
        $pdfFilePath = 'LATEST ACKNOWLEDGEMENT LETTER FOR COMMERCIAL VEHICLE.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function chinataipingautosafe_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["chinataiping_autosafe"]=$this->db->query("SELECT customer.*,vehicles.vehicle_no as vehiname FROM customer LEFT JOIN vehicles ON vehicles.id=customer.vehi_no WHERE customer.id='$id'")->row();

        $pdf_view=$this->load->view('customer/proposalform/chinataiping_autosafe',$data, true);
        $pdfFilePath = 'CHINA TAIPING_Autosafe SchemeForm.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }
    function pdpaconsentform_pdf()
    {
        $id=$this->uri->segment(3); 
        $data["pdpaconsent"]=$this->db->query("SELECT * FROM customer WHERE id='$id'")->row();

        $pdf_view=$this->load->view('customer/proposalform/pdpa_consent',$data, true);
        $pdfFilePath = 'PDPA Consent Form latest 27 October 2015 _Generic_.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I");
    }

    function searchmakeandmodel()
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
    
    private function _do_upload_hirersign()
    {
        $this->load->helper('file'); 
        $this->load->library('upload'); 
                
        $config['upload_path']          = 'upload/sign/';
        $config['allowed_types']        = 'png|jpg|jpeg';   
        $config['remove_spaces']=TRUE;

        if(!file_exists($config['upload_path'])){
            mkdir($config['upload_path'], 0777);
        }
        $this->upload->initialize($config);
 
       if(!$this->upload->do_upload('signof_hirer')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    private function _do_upload_guarantorsign()
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
 
       if(!$this->upload->do_upload('signof_guarantor')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    private function _do_upload_proposalsign()
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
 
       if(!$this->upload->do_upload('signof_proposal')) //upload and validate
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