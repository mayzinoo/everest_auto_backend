<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Quotation_request extends CI_Controller
{
    function __construct() 
	{
      parent::__construct();
      error_reporting(1);   
      $this->load->library('ckeditor');
      $this->load->library('ckfinder'); 
    }
    function insurance_quotationrequest()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
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
                   
            $data["quotationrequest"] =$this->db->query("SELECT quotation_request.*,vehicles.vehicle_no as vehiname FROM quotation_request LEFT JOIN vehicles ON vehicles.id=quotation_request.vehi_no");
            $data['content']="quotationrequest/quotation_request";
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
            $data['vehicletypelist']=$this->Quotationrequest_model->getvehicletype();
            $data['vehicleslist']=$this->Quotationrequest_model->getvehicleslist();

            $data['content']="quotationrequest/create_form";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function generate_systemid(){
        $last_count = $this->db->query("SELECT * FROM quotation_request WHERE MONTH(created_at) = ?  and YEAR(created_at) = ?", [date('m'), date('Y')])->result();        
        $systemId = date('ym').sprintf('%03d', count($last_count));        
        return $systemId;
    }
    function insert()
    {
        $system_id =$this->generate_systemid();
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            if(!empty($_FILES['document']['name']))
            {
                $upload = $this->_do_upload_document();
            }else{
                $upload ="";
            }
            $data=array(
                "system_id"=>$system_id,
                "vehicle_type"=>$this->input->post("vehitype"),
                "vehicletype_detail"=>$this->input->post("vehitype_detail"),
                "sale_type"=>$this->input->post("saletype"),
                "vehicle_source"=>$this->input->post("vehisource"),
                "sbu"=>$this->input->post("sbu"),
                "cmyname"=>$this->input->post("cmyname"),
                "address"=>$this->input->post("address"),
                "ic_no"=>$this->input->post("icno"),
                "co_regdate"=>$this->input->post("co_regdate"),
                "gender_status"=>$this->input->post("gender"),
                "marital_status"=>$this->input->post("marital"),
                "occupation"=>$this->input->post("occupation"),
                "dl_passdate"=>$this->input->post("dlpassdate"),
                "vehi_no"=>$this->input->post("vehino"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "loan"=>$this->input->post("loan"),
                "accessories"=>$this->input->post("accessories"),
                "tonnage"=>$this->input->post("tonnage"),
                "laden"=>$this->input->post("laden"),
                "unladen"=>$this->input->post("unladen"),
                "yearofmanufacture"=>$this->input->post("yrofmanufacture"),
                "registration_date"=>$this->input->post("regdate"),
                "consent_form"=>$this->input->post("consentform"),
                "pdpaform"=>$upload,
                "entry_date"=>$this->input->post("entrydate"),
                "entry_time"=>$this->input->post("entrytime"),
                "createdby_name"=>$this->input->post("createbyname"),
                "createdby_date"=>$this->input->post("createbydate"),
                "modifiedby_name"=>$this->input->post("modifyname"),
                "modifiedby_date"=>$this->input->post("modifydate"),
                "exist_insurance_co"=>$this->input->post("existinsurance"),
                "previous_vehi_no"=>$this->input->post("prv_vehino"),
                "claim_exp"=>$this->input->post("claimexp"),
                "ncd"=>$this->input->post("ncd"),
                "coverage"=>$this->input->post("coverage"),
                "sum_insured"=>$this->input->post("suminsured"),
                "remarks"=>$this->input->post("remark"),
                "contact_no"=>$this->input->post("contactno"),
                "email"=>$this->input->post("email"),
                "insco1"=>$this->input->post("insco1"),
                "insco2"=>$this->input->post("insco2"),
                "insco3"=>$this->input->post("insco3"),
                "insco4"=>$this->input->post("insco4"),
                "insco5"=>$this->input->post("insco5"),
                "insco6"=>$this->input->post("insco6"),
                "ins_type1"=>$this->input->post("instype1"),
                "ins_type2"=>$this->input->post("instype2"),
                "ins_type3"=>$this->input->post("instype3"),
                "ins_type4"=>$this->input->post("instype4"),
                "ins_type5"=>$this->input->post("instype5"),
                "ins_type6"=>$this->input->post("instype6"),
                "premium1"=>$this->input->post("premium1"),
                "premium2"=>$this->input->post("premium2"),
                "premium3"=>$this->input->post("premium3"),
                "premium4"=>$this->input->post("premium4"),
                "premium5"=>$this->input->post("premium5"),
                "premium6"=>$this->input->post("premium6"),
                "excess1"=>$this->input->post("excess1"),
                "excess2"=>$this->input->post("excess2"),
                "excess3"=>$this->input->post("excess3"),
                "excess4"=>$this->input->post("excess4"),
                "excess5"=>$this->input->post("excess5"),
                "excess6"=>$this->input->post("excess6"),
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("quotation_request",$data);
            $this->session->set_flashdata('success', 'Insurance quotation request has been created.');
            redirect("quotation_request/insurance_quotationrequest");
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
            $data['vehicletypelist']=$this->Quotationrequest_model->getvehicletype();
            $data["getsalestype_list"] =$this->Quotationrequest_model->getsaletype_list();
            $data["getvehiclesource_list"] =$this->Quotationrequest_model->getvehiclesource_list();
            $data["getsbu_list"] =$this->Quotationrequest_model->getsbu_list();
            $data["getmaritalstatus_list"] =$this->Quotationrequest_model->getmaritalstatus_list();
            $data["getaccessories_list"] =$this->Quotationrequest_model->getaccessories_list();
            $data["getncd_list"] =$this->Quotationrequest_model->getncd_list();
            $data["getcoverage_list"] =$this->Quotationrequest_model->getcoverage_list();
            $data['vehicleslist']=$this->Quotationrequest_model->getvehicleslist();

            $data["quotationrequestdata"] =$this->db->query("SELECT * FROM quotation_request WHERE id='$id'")->row();
            $data['content']="quotationrequest/edit_form";
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
            if(!empty($_FILES['document']['name']))
            {
                $upload = $this->_do_upload_document();
            }else{
                $upload =$this->input->post("document");;
            }
            $data=array(
                "system_id"=>$this->input->post("systemid"),
                "vehicle_type"=>$this->input->post("vehitype"),
                "vehicletype_detail"=>$this->input->post("vehitype_detail"),
                "sale_type"=>$this->input->post("saletype"),
                "vehicle_source"=>$this->input->post("vehisource"),
                "sbu"=>$this->input->post("sbu"),
                "cmyname"=>$this->input->post("cmyname"),
                "address"=>$this->input->post("address"),
                "ic_no"=>$this->input->post("icno"),
                "co_regdate"=>$this->input->post("co_regdate"),
                "gender_status"=>$this->input->post("gender"),
                "marital_status"=>$this->input->post("marital"),
                "occupation"=>$this->input->post("occupation"),
                "dl_passdate"=>$this->input->post("dlpassdate"),
                "vehi_no"=>$this->input->post("vehino"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "loan"=>$this->input->post("loan"),
                "accessories"=>$this->input->post("accessories"),
                "tonnage"=>$this->input->post("tonnage"),
                "laden"=>$this->input->post("laden"),
                "unladen"=>$this->input->post("unladen"),
                "yearofmanufacture"=>$this->input->post("yrofmanufacture"),
                "registration_date"=>$this->input->post("regdate"),
                "consent_form"=>$this->input->post("consentform"),
                "pdpaform"=>$upload,

                "entry_date"=>$this->input->post("entrydate"),
                "entry_time"=>$this->input->post("entrytime"),
                "createdby_name"=>$this->input->post("createbyname"),
                "createdby_date"=>$this->input->post("createbydate"),
                "modifiedby_name"=>$this->session->userdata("firstname"),
                "modifiedby_date"=>date('Y-m-d H:i:s'),
                
                "exist_insurance_co"=>$this->input->post("existinsurance"),
                "previous_vehi_no"=>$this->input->post("prv_vehino"),
                "claim_exp"=>$this->input->post("claimexp"),
                "ncd"=>$this->input->post("ncd"),
                "coverage"=>$this->input->post("coverage"),
                "sum_insured"=>$this->input->post("suminsured"),
                "remarks"=>$this->input->post("remark"),
                "contact_no"=>$this->input->post("contactno"),
                "email"=>$this->input->post("email"),
                "insco1"=>$this->input->post("insco1"),
                "insco2"=>$this->input->post("insco2"),
                "insco3"=>$this->input->post("insco3"),
                "insco4"=>$this->input->post("insco4"),
                "insco5"=>$this->input->post("insco5"),
                "insco6"=>$this->input->post("insco6"),
                "ins_type1"=>$this->input->post("instype1"),
                "ins_type2"=>$this->input->post("instype2"),
                "ins_type3"=>$this->input->post("instype3"),
                "ins_type4"=>$this->input->post("instype4"),
                "ins_type5"=>$this->input->post("instype5"),
                "ins_type6"=>$this->input->post("instype6"),
                "premium1"=>$this->input->post("premium1"),
                "premium2"=>$this->input->post("premium2"),
                "premium3"=>$this->input->post("premium3"),
                "premium4"=>$this->input->post("premium4"),
                "premium5"=>$this->input->post("premium5"),
                "premium6"=>$this->input->post("premium6"),
                "excess1"=>$this->input->post("excess1"),
                "excess2"=>$this->input->post("excess2"),
                "excess3"=>$this->input->post("excess3"),
                "excess4"=>$this->input->post("excess4"),
                "excess5"=>$this->input->post("excess5"),
                "excess6"=>$this->input->post("excess6")
            );
            $this->db->where('id',$id);
            $this->db->update("quotation_request",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("quotation_request/insurance_quotationrequest");
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
            $this->db->delete("quotation_request");
            redirect("quotation_request/insurance_quotationrequest");
        }else{
          redirect('/');
        }
    }
    function searchvehicletypedetail()
    {
        $vehitype=$this->input->post("vehitype");
        $this->db->where("vehicletype",$vehitype);
        $query = $this->db->get("vehicle_type_detail");
        // $result=$query->num_rows();
        // echo $result;exit;
        echo "<option value=''>".''."</option>";
        foreach($query->result() as $row):

        echo "<option value='".$row->detail_name."'>".$row->detail_name."</option>";
        endforeach;
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
    function _do_upload_document()
    {
        $this->load->helper('file'); 
        $this->load->library('upload'); 
                
        $config['upload_path']          = 'upload/insurancequotation';
        $config['allowed_types']        = 'pdf|docx|xlsx|csv|xls|ods';   
        $config['remove_spaces']=TRUE; 
        
        
        $this->upload->initialize($config);
 
       if(!$this->upload->do_upload('document')) //upload and validate
            {
                $data['inputerror'][] = 'document';
                $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('','');           
                
              }
        return $this->upload->data('file_name');
    }

}?>