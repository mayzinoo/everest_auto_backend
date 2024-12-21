<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Inquote extends CI_Controller
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
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
           
            $data["open_renewaldatalist"] =$this->db->query("SELECT openewal.*,vehicles.vehicle_no as vehiname FROM openewal LEFT JOIN vehicles ON vehicles.id=openewal.vehicle_no WHERE open_renewal='on'");
            
            $data["getresponsekey_list"] =$this->Inquote_model->getconsideration_list();
            $data['content']="inquote/openrenewal";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function open_renewal()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            
            $data["open_renewaldatalist"] =$this->db->query("SELECT openewal.*,vehicles.vehicle_no as vehiname FROM openewal LEFT JOIN vehicles ON vehicles.id=openewal.vehicle_no WHERE open_renewal='on'");
            
            $data["getresponsekey_list"] =$this->Inquote_model->getconsideration_list();
            $data['content']="inquote/openrenewal";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function close_renewal()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            
            $data["close_renewaldatalist"] =$this->db->query("SELECT openewal.*,vehicles.vehicle_no as vehiname FROM openewal LEFT JOIN vehicles ON vehicles.id=openewal.vehicle_no WHERE close_renewal='on'");
            
            $data["getresponsekey_list"] =$this->Inquote_model->getconsideration_list();
            $data['content']="inquote/closerenewal";
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
            $data['vehicleslist']=$this->Inquote_model->getvehicleslist();
            
            $data['content']="inquote/create_form";
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
                "salesman"=>$this->input->post("saleman"),
                "cmyname"=>$this->input->post("cmyname"),
                "address"=>$this->input->post("address"),
                "contact_person"=>$this->input->post("contactperson"),
                "phone_hp"=>$this->input->post("phone_hp"),
                "phone_pg"=>$this->input->post("phone_pg"),
                "ic_no"=>$this->input->post("ic_no"),
                "contact_no"=>$this->input->post("contact_no"),
                "phone_o"=>$this->input->post("phone_o"),
                "phone_f"=>$this->input->post("phone_f"),
                "entry_date"=>$this->input->post("entrydate"),
                "entry_time"=>$this->input->post("entrytime"),
                "created_name"=>$this->input->post("createbyname"),
                "created_date"=>$this->input->post("createbydate"),
                "modified_name"=>$this->input->post("modifyname"),
                "modified_date"=>$this->input->post("modifydate"),

                "vehicle_no"=>$this->input->post("vehi_no"),
                "brand"=>$this->input->post("make"),
                "expire_date"=>$this->input->post("expiry_date"),
                "model"=>$this->input->post("model"),
                "orig_regdate"=>$this->input->post("reg_date"),
                "renewal_ncd"=>$this->input->post("renewal_ncd"),
                "yrofmfg"=>$this->input->post("yrofmfg"),
                "ton"=>$this->input->post("ton"),
                "current_coverage_type"=>$this->input->post("current_convtype"),
                "new_coverage_type"=>$this->input->post("new_convtype"),
                "accident_detail1"=>$this->input->post("accidetail1"),
                "accident_detail2"=>$this->input->post("accidetail2"),
                "accident_detail3"=>$this->input->post("accidetail3"),

                "lastyear_premium"=>$this->input->post("yearpremium"),
                "q1"=>$this->input->post("q1"),
                "q2"=>$this->input->post("q2"),
                "q3"=>$this->input->post("q3"),
                "q4"=>$this->input->post("q4"),
                "q5"=>$this->input->post("q5"),
                "q6"=>$this->input->post("q6"),
                "current_ins_co"=>$this->input->post("cur_insco"),
                "ins_co1"=>$this->input->post("icno1"),
                "ins_co2"=>$this->input->post("icno2"),
                "ins_co3"=>$this->input->post("icno3"),
                "ins_co4"=>$this->input->post("icno4"),
                "ins_co5"=>$this->input->post("icno5"),
                "ins_co6"=>$this->input->post("icno6"),
                "lastyear_excess"=>$this->input->post("yearexcess"),
                "excess1"=>$this->input->post("excess1"),
                "excess2"=>$this->input->post("excess2"),
                "excess3"=>$this->input->post("excess3"),
                "excess4"=>$this->input->post("excess4"),
                "excess5"=>$this->input->post("excess5"),
                "excess6"=>$this->input->post("excess6"),

                "datetime"=>$this->input->post("datetime"),
                "responsekey"=>$this->input->post("response"),
                "calltowho"=>$this->input->post("calltowho"),
                "description"=>$this->input->post("description"),
                "nextaction"=>$this->input->post("nextaction"),
                "staff"=>$this->input->post("staff"),
                "open_renewal"=>$this->input->post("open"),
                "close_renewal"=>$this->input->post("close"),
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("openewal",$data);
            $this->session->set_flashdata('success', 'Renewal has been created.');
            redirect("inquote/");
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
            $data["getconsideration_list"] =$this->Inquote_model->getconsideration_list();
            $data["getnextaction_list"] =$this->Inquote_model->getnextaction_list();
            $data['vehicleslist']=$this->Inquote_model->getvehicleslist();

            $data["renewaldata"] =$this->db->query("SELECT * FROM openewal WHERE id='$id'")->row();
            $data['content']="inquote/edit_form";
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
                "salesman"=>$this->input->post("saleman"),
                "cmyname"=>$this->input->post("cmyname"),
                "address"=>$this->input->post("address"),
                "contact_person"=>$this->input->post("contactperson"),
                "phone_hp"=>$this->input->post("phone_hp"),
                "phone_pg"=>$this->input->post("phone_pg"),
                "ic_no"=>$this->input->post("ic_no"),
                "contact_no"=>$this->input->post("contact_no"),
                "phone_o"=>$this->input->post("phone_o"),
                "phone_f"=>$this->input->post("phone_f"),
                "entry_date"=>$this->input->post("entrydate"),
                "entry_time"=>$this->input->post("entrytime"),
                "created_name"=>$this->input->post("createbyname"),
                "created_date"=>$this->input->post("createbydate"),
                "modified_name"=>$this->session->userdata("firstname"),
                "modified_date"=>date('Y-m-d H:i:s'),

                "vehicle_no"=>$this->input->post("vehi_no"),
                "brand"=>$this->input->post("make"),
                "expire_date"=>$this->input->post("expiry_date"),
                "model"=>$this->input->post("model"),
                "orig_regdate"=>$this->input->post("reg_date"),
                "renewal_ncd"=>$this->input->post("renewal_ncd"),
                "yrofmfg"=>$this->input->post("yrofmfg"),
                "ton"=>$this->input->post("ton"),
                "current_coverage_type"=>$this->input->post("current_convtype"),
                "new_coverage_type"=>$this->input->post("new_convtype"),
                "accident_detail1"=>$this->input->post("accidetail1"),
                "accident_detail2"=>$this->input->post("accidetail2"),
                "accident_detail3"=>$this->input->post("accidetail3"),

                "lastyear_premium"=>$this->input->post("yearpremium"),
                "q1"=>$this->input->post("q1"),
                "q2"=>$this->input->post("q2"),
                "q3"=>$this->input->post("q3"),
                "q4"=>$this->input->post("q4"),
                "q5"=>$this->input->post("q5"),
                "q6"=>$this->input->post("q6"),
                "current_ins_co"=>$this->input->post("cur_insco"),
                "ins_co1"=>$this->input->post("icno1"),
                "ins_co2"=>$this->input->post("icno2"),
                "ins_co3"=>$this->input->post("icno3"),
                "ins_co4"=>$this->input->post("icno4"),
                "ins_co5"=>$this->input->post("icno5"),
                "ins_co6"=>$this->input->post("icno6"),
                "lastyear_excess"=>$this->input->post("yearexcess"),
                "excess1"=>$this->input->post("excess1"),
                "excess2"=>$this->input->post("excess2"),
                "excess3"=>$this->input->post("excess3"),
                "excess4"=>$this->input->post("excess4"),
                "excess5"=>$this->input->post("excess5"),
                "excess6"=>$this->input->post("excess6"),

                "datetime"=>$this->input->post("datetime"),
                "responsekey"=>$this->input->post("response"),
                "calltowho"=>$this->input->post("calltowho"),
                "description"=>$this->input->post("description"),
                "nextaction"=>$this->input->post("nextaction"),
                "staff"=>$this->input->post("staff"),            
                "open_renewal"=>$this->input->post("open"),
                "close_renewal"=>$this->input->post("close")
            );
            $this->db->where('id',$id);
            $this->db->update("openewal",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("inquote/");
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
            $this->db->delete("openewal");
            redirect("inquote/");
        }else{
          redirect('/');
        }
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

}