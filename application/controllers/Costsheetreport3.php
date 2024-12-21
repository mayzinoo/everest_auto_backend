<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed');     
class Costsheetreport3 extends CI_Controller
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
            $data["costsheet3_data"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.id as vid,vehicles_details.vehi_no as vehi_id,costsheet1_tbl.car_plate FROM vehicles_details LEFT JOIN costsheet1_tbl ON costsheet1_tbl.id=vehicles_details.vehi_no");

            $data['content']="vehicles-detail/costsheetreport3/index";
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

            $data['content']="vehicles-detail/costsheetreport3/create_form";
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
                "vehi_no"=>$this->input->post("vehino"),
                "makemodel"=>$this->input->post("makemodel"),
                "buycode"=>$this->input->post("buycode"),
                "sellcode"=>$this->input->post("sellcode"),
                "broker1code"=>$this->input->post("broker1code"),
                "broker2code"=>$this->input->post("broker2code"),
                "broker3code"=>$this->input->post("broker3code"),
                "eoutdate"=>$this->input->post("eoutdate"),
                "prev_vehino"=>$this->input->post("prev_vehino"),
                "gsttxt"=>$this->input->post("gsttxt"),
                "purchase_date"=>$this->input->post("purchase_date"),
                "salesbooking_date"=>$this->input->post("salesbooking_date"),
                "purchase_agrement"=>$this->input->post("purchase_agrement"),
                "sales_agrement"=>$this->input->post("sales_agrement"),
                "etspaper_from"=>$this->input->post("etspaper_from"),
                "etspaper_to"=>$this->input->post("etspaper_to"),
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("vehicles_details",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("costsheetreport3/");
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
            $data['vehicleslist']=$this->Vehicle_detail_model->getcostsheet_vehicles();

            $data["costsheet3_data"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.id as vid,costsheet1_tbl.car_plate FROM vehicles_details LEFT JOIN costsheet1_tbl ON costsheet1_tbl.id=vehicles_details.vehi_no WHERE vehicles_details.id='$id'")->row();
            
            $data['content']="vehicles-detail/costsheetreport3/edit_form";
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
            $data=array(
                // "vehi_no"=>$this->input->post("vehino"),
                // "makemodel"=>$this->input->post("makemodel"),
                "buycode"=>$this->input->post("buycode"),
                "sellcode"=>$this->input->post("sellcode"),
                "broker1code"=>$this->input->post("broker1code"),
                "broker2code"=>$this->input->post("broker2code"),
                "broker3code"=>$this->input->post("broker3code"),
                "eoutdate"=>$this->input->post("eoutdate"),
                "prev_vehino"=>$this->input->post("prev_vehino"),
                "gsttxt"=>$this->input->post("gsttxt"),
                "purchase_date"=>$this->input->post("purchase_date"),
                "salesbooking_date"=>$this->input->post("salesbooking_date"),
                "purchase_agrement"=>$this->input->post("purchase_agrement"),
                "sales_agrement"=>$this->input->post("sales_agrement"),
                "etspaper_from"=>$this->input->post("etspaper_from"),
                "etspaper_to"=>$this->input->post("etspaper_to")
            );
            $this->db->where('vehi_no',$vehino);
            $this->db->update("vehicles_details",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("costsheetreport3/");
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
            $this->db->delete("costsheet3_tbl");
            redirect("costsheetreport3/");
        }else
        {
          redirect('/');
        }
    }
    function detail()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);
            $data['vehicleslist']=$this->Vehicle_detail_model->getcostsheet_vehicles();
            $data["vehiclesdetail"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.id as vid,vehicles_details.vehi_no as vehi_id,costsheet1_tbl.car_plate FROM vehicles_details LEFT JOIN costsheet1_tbl ON costsheet1_tbl.id=vehicles_details.vehi_no")->row();
           
            $data['content']="vehicles-detail/detail";
            $this->load->view("template",$data);
        }else
        {
          redirect('/');
        }
    }
    function detail_update()
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

            $commontype=$this->input->post("commontype");
            $commi_des=$this->input->post("commi_des");
            $paiddate=$this->input->post("paiddate");
            $commission=$this->input->post("commission");
            $commission_gst=$this->input->post("commission_gst");

            $commissiondetail="";
            for($i=0;$i<count($commontype);$i++)
            {
              $commissiondetail .= $commontype[$i].",". $commi_des[$i].",". $paiddate[$i].",". $commission[$i].",".$commission_gst[$i]."}";        
            }

            $broker=$this->input->post("broker");
            $grossprofit=$this->input->post("broker_grossprofit");
            $cif=$this->input->post("cif");
            $broker_paid_date=$this->input->post("broker_paid_date");
            $payout=$this->input->post("payout");
            $brokerpayout="";
            for($i=0;$i<count($broker);$i++)
            {
              $brokerpayout .= $broker[$i].",".$grossprofit[$i].",". $cif[$i].",". $broker_paid_date[$i].",". $payout[$i]."}";        
            }
            $data=array(               
                "buycode"=>$this->input->post("buycode"),
                "sellcode"=>$this->input->post("sellcode"),
                "broker1code"=>$this->input->post("broker1code"),
                "broker2code"=>$this->input->post("broker2code"),
                "broker3code"=>$this->input->post("broker3code"),
                "eoutdate"=>$this->input->post("eoutdate"),
                "prev_vehino"=>$this->input->post("prev_vehino"),
                "gsttxt"=>$this->input->post("gsttxt"),
                "purchase_date"=>$this->input->post("purchase_date"),
                "salesbooking_date"=>$this->input->post("salesbooking_date"),
                "purchase_agrement"=>$this->input->post("purchase_agrement"),
                "sales_agrement"=>$this->input->post("sales_agrement"),
                "etspaper_from"=>$this->input->post("etspaper_from"),
                "etspaper_to"=>$this->input->post("etspaper_to"),

                "purchase_price"=>$this->input->post("purchase_price"),
                "purchaseprice_gst"=>$this->input->post("purchaseprice_gst"),

                "cost_details"=>$costdetails,
                "cost_amt"=>$this->input->post("cost_amt"),
                "cost_gst"=>$this->input->post("gst_total"),
                "cost_total"=>$this->input->post("cost_total"),

                "total_gst"=>$this->input->post("total_gst"),
                "totalcostprice"=>$this->input->post("totalcostprice"),
                "totalcostprice_gst"=>$this->input->post("totalcostprice_gst"),

                "commission_detail"=>$commissiondetail,
                "lesstotalcostprice"=>$this->input->post("lesstotalcostprice"),
                "totalgst"=>$this->input->post("totalgst"),
                "gstinput"=>$this->input->post("gstinput"),
                "gstout"=>$this->input->post("gstout"),
                "grossprofit"=>$this->input->post("grossprofit"),

                "broker_payout"=>$brokerpayout,
                "netprofitloss"=>$this->input->post("netprofitloss")
            );
            $this->db->where('vehi_no',$vehino);
            $this->db->update("vehicles_details",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("costsheetreport3/");
        }else
        {
          redirect('/');
        }
    }
    function costsheetreport_pdf()
    {
        $id=$this->uri->segment(3);
       
        $data["vehiclesdetail"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.id as vid,vehicles_details.vehi_no as vehi_id,costsheet1_tbl.car_plate FROM vehicles_details LEFT JOIN costsheet1_tbl ON costsheet1_tbl.id=vehicles_details.vehi_no")->row();

        $pdf_view=$this->load->view('vehicles-detail/costsheetreport_pdf',$data, true);
        $pdfFilePath = 'Vehicles_costsheetreport.pdf';
        
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
?>