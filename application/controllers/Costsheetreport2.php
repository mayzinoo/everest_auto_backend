<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed');     
class Costsheetreport2 extends CI_Controller
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

            $data["costsheet2_data"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.id as vid,costsheet1_tbl.car_plate FROM vehicles_details LEFT JOIN costsheet1_tbl ON costsheet1_tbl.id=vehicles_details.vehi_no");

            $data['content']="vehicles-detail/costsheetreport2/index";
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
            $data['vehicleslist']=$this->Vehicle_detail_model->getcostsheet_vehicles();

            $data['content']="vehicles-detail/costsheetreport2/create_form";
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
            $vehino=$this->input->post("vehino");

            $costtype=$this->input->post("costtype");
            $description=$this->input->post("description");
            $refdate=$this->input->post("refdate");
            $refno=$this->input->post("refno");
            $amount=$this->input->post("amount");
            $gst=$this->input->post("gst");
            $costtotal=$this->input->post("costtotal");

            $costdetails="";
            for($i=0;$i<count($costtype);$i++)
            {
              $costdetails .= $costtype[$i].",". $description[$i].",". $refdate[$i].",". $refno[$i].",". $amount[$i].",". $gst[$i].",". $costtotal[$i]."}";        
            }
            $cost=$costdetails."CO ADMIN,,,,,0,0"."}"."COE BY COMPANY,,,,,0,0"."}"."OVER TRADE,,,,,0,0"."}"."MISCELLANEOUS,,,,,0,0"."}"."SURCHARGE,,,,,0,0"."}"."OUTSIDE PURCHASE COMM,,,,,0,0"."}"."OUTSIDE SALE COMM,,,,,0,0"."}"."HP ADMIN FEE,,,,,0,0"."}"."CONVERSION FEE,,,,,0,0"."}"."DEPOSIT FOREITED,,,,,0,0"."}"."EXTENSION,,,,,0,0"."}"."INSPECTION,,,,,0,0"."}"."LAY UP,,,,,0,0"."}";

            $commontype=$this->input->post("commontype");
            $commi_des=$this->input->post("commi_des");
            $paiddate=$this->input->post("paiddate");
            $commission=$this->input->post("commission");

            $commissiondetail="";
            for($i=0;$i<count($commontype);$i++)
            {
              $commissiondetail .= $commontype[$i].",". $commi_des[$i].",". $paiddate[$i].",". $commission[$i].",0"."}";        
            }

            $loanamt=$this->input->post("loanamt");
            $startdate=$this->input->post("startdate");
            $enddate=$this->input->post("enddate");
            $floortotal=$this->input->post("floortotal");

            $floorstock="";
            for($i=0;$i<count($loanamt);$i++)
            {
              $floorstock .= $loanamt[$i].",". $startdate[$i].",". $enddate[$i].",". $floortotal[$i]."}";        
            }

            $broker=$this->input->post("broker");
            $grossprofit=$this->input->post("grossprofit");
            $cif=$this->input->post("cif");
            $broker_paid_date=$this->input->post("broker_paid_date");
            $payout=$this->input->post("payout");

            $brokerpayout="";
            for($i=0;$i<count($broker);$i++)
            {
              $brokerpayout .= $broker[$i].",".$grossprofit[$i].",". $cif[$i].",". $broker_paid_date[$i].",". $payout[$i]."}";        
            }

            $data=array(
                "vehi_no"=>$this->input->post("vehino"),
                "makemodel"=>$this->input->post("makemodel"),

                "cost_details"=>$cost,
                "cost_amt"=>$this->input->post("cost_amt"),
                "cost_gst"=>$this->input->post("cost_gst"),
                "cost_total"=>$this->input->post("cost_total"),

                "commission_detail"=>$commissiondetail,
                "commission_total"=>$this->input->post("commission_total"),

                "floor_stock"=>$floorstock,
                "floor_total"=>$this->input->post("floorstock_total"),

                "broker_payout"=>$brokerpayout,
                "broker_total"=>$this->input->post("broker_payout"),

                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("vehicles_details",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("costsheetreport2/");
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
            $data["getcosttype_list"] =$this->Vehicle_detail_model->getcosttype_list();
            $data["getcommission_list"] =$this->Vehicle_detail_model->getcommission_list();
            $data['vehicleslist']=$this->Vehicle_detail_model->getcostsheet_vehicles();

            $data["costsheet2_data"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.id as vid,costsheet1_tbl.car_plate FROM vehicles_details LEFT JOIN costsheet1_tbl ON costsheet1_tbl.id=vehicles_details.vehi_no WHERE vehicles_details.id='$id'")->row();
            
            $data['content']="vehicles-detail/costsheetreport2/edit_form";
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
            $vehino=$this->input->post("vehino");

            $costtype=$this->input->post("costtype");
            $description=$this->input->post("description");
            $refdate=$this->input->post("refdate");
            $refno=$this->input->post("refno");
            $amount=$this->input->post("amount");
            $gst=$this->input->post("gst");
            $costtotal=$this->input->post("costtotal");

            $costdetails="";
            for($i=0;$i<count($costtype);$i++)
            {
              $costdetails .= $costtype[$i].",". $description[$i].",". $refdate[$i].",". $refno[$i].",". $amount[$i].",". $gst[$i].",". $costtotal[$i]."}";        
            }
            

            $commontype=$this->input->post("commontype");
            $commi_des=$this->input->post("commi_des");
            $paiddate=$this->input->post("paiddate");
            $commission=$this->input->post("commission");

            $commissiondetail="";
            for($i=0;$i<count($commontype);$i++)
            {
              $commissiondetail .= $commontype[$i].",". $commi_des[$i].",". $paiddate[$i].",". $commission[$i].",0"."}";         
            }

            $loanamt=$this->input->post("loanamt");
            $startdate=$this->input->post("startdate");
            $enddate=$this->input->post("enddate");
            $floortotal=$this->input->post("floortotal");

            $floorstock="";
            for($i=0;$i<count($loanamt);$i++)
            {
              $floorstock .= $loanamt[$i].",". $startdate[$i].",". $enddate[$i].",". $floortotal[$i]."}";        
            }

            $broker=$this->input->post("broker");
            $grossprofit=$this->input->post("grossprofit");
            $cif=$this->input->post("cif");
            $broker_paid_date=$this->input->post("broker_paid_date");
            $payout=$this->input->post("payout");

            $brokerpayout="";
            for($i=0;$i<count($broker);$i++)
            {
              $brokerpayout .= $broker[$i].",".$grossprofit[$i].",". $cif[$i].",". $broker_paid_date[$i].",". $payout[$i]."}";        
            }

            $data=array(
                "vehi_no"=>$this->input->post("vehino"),
                "makemodel"=>$this->input->post("makemodel"),

                "cost_details"=>$costdetails,
                "cost_amt"=>$this->input->post("cost_amt"),
                "cost_gst"=>$this->input->post("cost_gst"),
                "cost_total"=>$this->input->post("cost_total"),

                "commission_detail"=>$commissiondetail,
                "commission_total"=>$this->input->post("commission_total"),

                "floor_stock"=>$floorstock,
                "floor_total"=>$this->input->post("floorstock_total"),

                "broker_payout"=>$brokerpayout,
                "broker_total"=>$this->input->post("broker_payout")
            );

            $this->db->where('id',$id);
            $this->db->update("vehicles_details",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("costsheetreport2/");
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
            $this->db->delete("costsheet2_tbl");
            redirect("costsheetreport2/");
        }else
        {
          redirect('/');
        }
    }
    function costsheetreport_pdf()
    {
        $id=$this->uri->segment(3);
       
        $data["vehiclesdetail"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.id as vid,vehicles_details.vehi_no as vehi_id,costsheet1_tbl.car_plate FROM vehicles_details LEFT JOIN costsheet1_tbl ON costsheet1_tbl.id=vehicles_details.vehi_no")->row();

        $pdf_view=$this->load->view('vehicles-detail/costsheetreport2/costsheet2report_pdf',$data, true);
        $pdfFilePath = 'Vehicles_costsheet2report.pdf';
        
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
            $query = $this->db->get("costsheet1_tbl")->row_array();
            $result=json_encode($query);
            echo $result;
        }else
        {
          redirect('/');
        }
    }
}
