<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed');     
class Vehicles_detail extends CI_Controller
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
            $data["vehiclesdetail_list"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.id as vdid,vehicles.*,vehicles.vehicle_no as vehino FROM vehicles_details LEFT JOIN vehicles ON vehicles.id=vehicles_details.vehino");

            $data['content']="vehicles-detail/vehiclesdetail";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    function old()
    {
        $data['content']="vehicles-detail/create_form";
            $this->load->view("template",$data);
    }
    function create_form()
    {
       $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {  
            $data['vehicleslist']=$this->Vehicle_detail_model->getvehicleslist();

            $data['content']="vehicles-detail/costsheetreport_create";
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
                "vehino"=>$this->input->post("vehino"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
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
                "buyincommission"=>$this->input->post("buyincommission"),
                "buyincommission_gst"=>$this->input->post("buyincommission_gst"),
                "repair"=>$this->input->post("repair"),
                "repair_gst"=>$this->input->post("repair_gst"),
                "petrol"=>$this->input->post("petrol"),
                "petrol_gst"=>$this->input->post("petrol_gst"),
                "coadmin"=>$this->input->post("coadmin"),
                "coadmin_gst"=>$this->input->post("coadmin_gst"),
                "parkingcoupon"=>$this->input->post("parkingcoupon"),
                "parkingcoupon_gst"=>$this->input->post("parkingcoupon_gst"),
                "coebycompany"=>$this->input->post("coebycompany"),
                "coebycompany_gst"=>$this->input->post("coebycompany_gst"),
                "overtrade"=>$this->input->post("overtrade"),
                "overtrade_gst"=>$this->input->post("overtrade_gst"),
                "miscellaneous"=>$this->input->post("miscellaneous"),
                "miscellaneous_gst"=>$this->input->post("miscellaneous_gst"),
                "advertisment"=>$this->input->post("advertisment"),
                "advertisment_gst"=>$this->input->post("advertisment_gst"),
                "surcharge"=>$this->input->post("surcharge"),
                "surcharge_gst"=>$this->input->post("surcharge_gst"),
                "outsidepurchasecomm"=>$this->input->post("outsidepurchasecomm"),
                "outsidepurchasecomm_gst"=>$this->input->post("outsidepurchasecomm_gst"),
                "outsidesalecomm"=>$this->input->post("outsidesalecomm"),
                "outsidesalecomm_gst"=>$this->input->post("outsidesalecomm_gst"),
                "hpadminfee"=>$this->input->post("hpadminfee"),
                "hpadminfee_gst"=>$this->input->post("hpadminfee_gst"),
                "conversionfee"=>$this->input->post("conversionfee"),
                "conversionfee_gst"=>$this->input->post("conversionfee_gst"),
                "depositforeited"=>$this->input->post("depositforeited"),
                "depositforeited_gst"=>$this->input->post("depositforeited_gst"),
                "etransferfee"=>$this->input->post("etransferfee"),
                "etransferfee_gst"=>$this->input->post("etransferfee_gst"),
                "extension"=>$this->input->post("extension"),
                "extension_gst"=>$this->input->post("extension_gst"),
                "inspection"=>$this->input->post("inspection"),
                "inspection_gst"=>$this->input->post("inspection_gst"),
                "layup"=>$this->input->post("layup"),
                "layup_gst"=>$this->input->post("layup_gst"),
                "banksurcharge"=>$this->input->post("banksurcharge"),
                "banksurcharge_gst"=>$this->input->post("banksurcharge_gst"),                
                "total_gst"=>$this->input->post("total_gst"),

                "totalcostprice"=>$this->input->post("totalcostprice"),
                "totalcostprice_gst"=>$this->input->post("totalcostprice_gst"),
                "selloutadmincomm"=>$this->input->post("selloutadmincomm"),
                "selloutadmincomm_gst"=>$this->input->post("selloutadmincomm_gst"),
                "selloutcomm"=>$this->input->post("selloutcomm"),
                "selloutcomm_gst"=>$this->input->post("selloutcomm_gst"),
                "sellingprice"=>$this->input->post("sellingprice"),
                "sellingprice_gst"=>$this->input->post("sellingprice_gst"),
                "insurance"=>$this->input->post("insurance"),
                "insurance_gst"=>$this->input->post("insurance_gst"),
                "hploancomm"=>$this->input->post("hploancomm"),
                "hploancomm_gst"=>$this->input->post("hploancomm_gst"),
                "adminfee"=>$this->input->post("adminfee"),
                "adminfee_gst"=>$this->input->post("adminfee_gst"),
                "lesstotalcostprice"=>$this->input->post("lesstotalcostprice"),
                "lesstotalcostprice_gst"=>$this->input->post("lesstotalcostprice_gst"),
                "totalgst"=>$this->input->post("totalgst"),

                "gstinput"=>$this->input->post("gstinput"),
                "gstout"=>$this->input->post("gstout"),

                "grossprofit"=>$this->input->post("grossprofit"),
                "broker1"=>$this->input->post("broker1"),
                "broker2"=>$this->input->post("broker2"),
                "broker3"=>$this->input->post("broker3"),

                "netprofitloss"=>$this->input->post("netprofitloss"),

                "repair1des"=>$this->input->post("repair1des"),
                "repair1refdate"=>$this->input->post("repair1refdate"),
                "repair1refno"=>$this->input->post("repair1refno"),
                "repair1amount"=>$this->input->post("repair1amount"),
                "repair1gst"=>$this->input->post("repair1gst"),
                "totalrepair1"=>$this->input->post("totalrepair1"),

                "repair2des"=>$this->input->post("repair2des"),
                "repair2refdate"=>$this->input->post("repair2refdate"),
                "repair2refno"=>$this->input->post("repair2refno"),
                "repair2refno"=>$this->input->post("repair2refno"),
                "repair2gst"=>$this->input->post("repair2gst"),
                "totalrepair2"=>$this->input->post("totalrepair2"),

                "repair3des"=>$this->input->post("repair3des"),
                "repair3refdate"=>$this->input->post("repair3refdate"),
                "repair3refno"=>$this->input->post("repair3refno"),
                "repair3amount"=>$this->input->post("repair3amount"),
                "repair3gst"=>$this->input->post("repair3gst"),
                "totalrepair3"=>$this->input->post("totalrepair3"),

                "petroldes"=>$this->input->post("petroldes"),
                "petrolrefdate"=>$this->input->post("petrolrefdate"),
                "petrolrefno"=>$this->input->post("petrolrefno"),
                "petrolamount"=>$this->input->post("petrolamount"),
                "petrolgst"=>$this->input->post("petrolgst"),
                "totalpetrol"=>$this->input->post("totalpetrol"),

                "parkingdes"=>$this->input->post("parkingdes"),
                "parkingrefdate"=>$this->input->post("parkingrefdate"),
                "parkingrefno"=>$this->input->post("parkingrefno"),
                "parkingamount"=>$this->input->post("parkingamount"),
                "parkinggst"=>$this->input->post("parkinggst"),
                "totalparkingcoupon"=>$this->input->post("totalparkingcoupon"),

                "advertismentdes"=>$this->input->post("advertismentdes"),
                "advertismentrefdate"=>$this->input->post("advertismentrefdate"),
                "advertismentrefno"=>$this->input->post("advertismentrefno"),
                "advertismentamount"=>$this->input->post("advertismentamount"),
                "advertismentgst"=>$this->input->post("advertismentgst"),
                "totaladvertismentfee"=>$this->input->post("totaladvertismentfee"),

                "etransferdes"=>$this->input->post("etransferdes"),
                "etransferrefdate"=>$this->input->post("etransferrefdate"),
                "etransferrefno"=>$this->input->post("etransferrefno"),
                "etransferamount"=>$this->input->post("etransferamount"),
                "etransfergst"=>$this->input->post("etransfergst"),
                "totaletransfer"=>$this->input->post("totaletransfer"),

                "banksurchargedes"=>$this->input->post("banksurchargedes"),
                "banksurchargerefdate"=>$this->input->post("banksurchargerefdate"),
                "banksurchargerefno"=>$this->input->post("banksurchargerefno"),
                "banksurchargeamount"=>$this->input->post("banksurchargeamount"),
                "banksurchargegst"=>$this->input->post("banksurchargegst"),
                "totalbanksurcharge"=>$this->input->post("totalbanksurcharge"),

                "totalamount"=>$this->input->post("totalamount"),
                "totalcostgst"=>$this->input->post("totalcostgst"),
                "totalcostdetail"=>$this->input->post("totalcostdetail"),

                "commi_des1"=>$this->input->post("commi_des1"),
                "commi_paiddate1"=>$this->input->post("commi_paiddate1"),
                "commission1"=>$this->input->post("commission1"),

                "commi_des2"=>$this->input->post("commi_des2"),
                "commi_paiddate2"=>$this->input->post("commi_paiddate2"),
                "commission2"=>$this->input->post("commission2"),

                "commi_des3"=>$this->input->post("commi_des3"),
                "commi_paiddate3"=>$this->input->post("commi_paiddate3"),
                "commission3"=>$this->input->post("commission3"),

                "commi_des4"=>$this->input->post("commi_des4"),
                "commi_paiddate4"=>$this->input->post("commi_paiddate4"),
                "commission4"=>$this->input->post("commission4"),

                "commi_des5"=>$this->input->post("commi_des5"),
                "commi_paiddate5"=>$this->input->post("commi_paiddate5"),
                "commission5"=>$this->input->post("commission5"),

                "commi_des6"=>$this->input->post("commi_des6"),
                "commi_paiddate6"=>$this->input->post("commi_paiddate6"),
                "commission6"=>$this->input->post("commission6"),

                "commi_des7"=>$this->input->post("commi_des7"),
                "commi_paiddate7"=>$this->input->post("commi_paiddate7"),
                "commission7"=>$this->input->post("commission7"),

                "totalcommission"=>$this->input->post("totalcommission"),

                "flooramt1"=>$this->input->post("flooramt1"),
                "startdate1"=>$this->input->post("startdate1"),
                "enddate1"=>$this->input->post("enddate1"),
                "total1"=>$this->input->post("total1"),

                "flooramt2"=>$this->input->post("flooramt2"),
                "startdate2"=>$this->input->post("startdate2"),
                "enddate2"=>$this->input->post("enddate2"),
                "total2"=>$this->input->post("total2"),

                "totalfloorstock"=>$this->input->post("totalfloorstock"),

                "profit1"=>$this->input->post("profit1"),
                "cif1"=>$this->input->post("cif1"),
                "broker_paiddate1"=>$this->input->post("broker_paiddate1"),
                "payout1"=>$this->input->post("payout1"),

                "profit2"=>$this->input->post("profit2"),
                "cif2"=>$this->input->post("cif2"),
                "broker_paiddate2"=>$this->input->post("broker_paiddate2"),
                "payout2"=>$this->input->post("payout2"),

                "profit3"=>$this->input->post("profit3"),
                "cif3"=>$this->input->post("cif3"),
                "broker_paiddate3"=>$this->input->post("broker_paiddate3"),
                "payout3"=>$this->input->post("payout3"),

                "totalbroker"=>$this->input->post("totalbroker"),
                
                "created_at"=>date('Y-m-d')
            );
            $this->db->insert("vehicles_details",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("vehicles_detail/");
        }else{
          redirect('/');
        }
    }
    function detail()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);
            $data["vehiclesdetail"] =$data["vehiclesdetail"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.purchase_date as purchasedate,vehicles_details.id as vdetail_id,vehicles.*,vehicles.vehicle_no as vehino FROM vehicles_details LEFT JOIN vehicles ON vehicles.id=vehicles_details.vehi_no WHERE vehicles_details.id='$id'")->row();
            $data['content']="vehicles-detail/detail";
            $this->load->view("template",$data);
        }else
        {
          redirect('/');
        }
    }
    function update_form(){
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {           
            $id=$this->uri->segment(3);
            $data['vehicleslist']=$this->Vehicle_detail_model->getvehicleslist();

            $data["vehiclesdetail"] =$this->db->query("SELECT vehicles_details.*,vehicles.vehicle_no FROM vehicles_details LEFT JOIN vehicles ON vehicles.id=vehicles_details.vehino WHERE vehicles_details.id='$id'")->row();
            $data['content']="vehicles-detail/costsheetreport_update";
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
                "vehino"=>$this->input->post("vehino"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
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
                "buyincommission"=>$this->input->post("buyincommission"),
                "buyincommission_gst"=>$this->input->post("buyincommission_gst"),
                "repair"=>$this->input->post("repair"),
                "repair_gst"=>$this->input->post("repair_gst"),
                "petrol"=>$this->input->post("petrol"),
                "petrol_gst"=>$this->input->post("petrol_gst"),
                "coadmin"=>$this->input->post("coadmin"),
                "coadmin_gst"=>$this->input->post("coadmin_gst"),
                "parkingcoupon"=>$this->input->post("parkingcoupon"),
                "parkingcoupon_gst"=>$this->input->post("parkingcoupon_gst"),
                "coebycompany"=>$this->input->post("coebycompany"),
                "coebycompany_gst"=>$this->input->post("coebycompany_gst"),
                "overtrade"=>$this->input->post("overtrade"),
                "overtrade_gst"=>$this->input->post("overtrade_gst"),
                "miscellaneous"=>$this->input->post("miscellaneous"),
                "miscellaneous_gst"=>$this->input->post("miscellaneous_gst"),
                "advertisment"=>$this->input->post("advertisment"),
                "advertisment_gst"=>$this->input->post("advertisment_gst"),
                "surcharge"=>$this->input->post("surcharge"),
                "surcharge_gst"=>$this->input->post("surcharge_gst"),
                "outsidepurchasecomm"=>$this->input->post("outsidepurchasecomm"),
                "outsidepurchasecomm_gst"=>$this->input->post("outsidepurchasecomm_gst"),
                "outsidesalecomm"=>$this->input->post("outsidesalecomm"),
                "outsidesalecomm_gst"=>$this->input->post("outsidesalecomm_gst"),
                "hpadminfee"=>$this->input->post("hpadminfee"),
                "hpadminfee_gst"=>$this->input->post("hpadminfee_gst"),
                "conversionfee"=>$this->input->post("conversionfee"),
                "conversionfee_gst"=>$this->input->post("conversionfee_gst"),
                "depositforeited"=>$this->input->post("depositforeited"),
                "depositforeited_gst"=>$this->input->post("depositforeited_gst"),
                "etransferfee"=>$this->input->post("etransferfee"),
                "etransferfee_gst"=>$this->input->post("etransferfee_gst"),
                "extension"=>$this->input->post("extension"),
                "extension_gst"=>$this->input->post("extension_gst"),
                "inspection"=>$this->input->post("inspection"),
                "inspection_gst"=>$this->input->post("inspection_gst"),
                "layup"=>$this->input->post("layup"),
                "layup_gst"=>$this->input->post("layup_gst"),
                "banksurcharge"=>$this->input->post("banksurcharge"),
                "banksurcharge_gst"=>$this->input->post("banksurcharge_gst"),                
                "total_gst"=>$this->input->post("total_gst"),

                "totalcostprice"=>$this->input->post("totalcostprice"),
                "totalcostprice_gst"=>$this->input->post("totalcostprice_gst"),
                "selloutadmincomm"=>$this->input->post("selloutadmincomm"),
                "selloutadmincomm_gst"=>$this->input->post("selloutadmincomm_gst"),
                "selloutcomm"=>$this->input->post("selloutcomm"),
                "selloutcomm_gst"=>$this->input->post("selloutcomm_gst"),
                "sellingprice"=>$this->input->post("sellingprice"),
                "sellingprice_gst"=>$this->input->post("sellingprice_gst"),
                "insurance"=>$this->input->post("insurance"),
                "insurance_gst"=>$this->input->post("insurance_gst"),
                "hploancomm"=>$this->input->post("hploancomm"),
                "hploancomm_gst"=>$this->input->post("hploancomm_gst"),
                "adminfee"=>$this->input->post("adminfee"),
                "adminfee_gst"=>$this->input->post("adminfee_gst"),
                "lesstotalcostprice"=>$this->input->post("lesstotalcostprice"),
                "lesstotalcostprice_gst"=>$this->input->post("lesstotalcostprice_gst"),
                "totalgst"=>$this->input->post("totalgst"),

                "gstinput"=>$this->input->post("gstinput"),
                "gstout"=>$this->input->post("gstout"),

                "grossprofit"=>$this->input->post("grossprofit"),
                "broker1"=>$this->input->post("broker1"),
                "broker2"=>$this->input->post("broker2"),
                "broker3"=>$this->input->post("broker3"),

                "netprofitloss"=>$this->input->post("netprofitloss"),

                "repair1des"=>$this->input->post("repair1des"),
                "repair1refdate"=>$this->input->post("repair1refdate"),
                "repair1refno"=>$this->input->post("repair1refno"),
                "repair1amount"=>$this->input->post("repair1amount"),
                "repair1gst"=>$this->input->post("repair1gst"),
                "totalrepair1"=>$this->input->post("totalrepair1"),

                "repair2des"=>$this->input->post("repair2des"),
                "repair2refdate"=>$this->input->post("repair2refdate"),
                "repair2refno"=>$this->input->post("repair2refno"),
                "repair2amount"=>$this->input->post("repair2amount"),
                "repair2gst"=>$this->input->post("repair2gst"),
                "totalrepair2"=>$this->input->post("totalrepair2"),

                "repair3des"=>$this->input->post("repair3des"),
                "repair3refdate"=>$this->input->post("repair3refdate"),
                "repair3refno"=>$this->input->post("repair3refno"),
                "repair3amount"=>$this->input->post("repair3amount"),
                "repair3gst"=>$this->input->post("repair3gst"),
                "totalrepair3"=>$this->input->post("totalrepair3"),

                "petroldes"=>$this->input->post("petroldes"),
                "petrolrefdate"=>$this->input->post("petrolrefdate"),
                "petrolrefno"=>$this->input->post("petrolrefno"),
                "petrolamount"=>$this->input->post("petrolamount"),
                "petrolgst"=>$this->input->post("petrolgst"),
                "totalpetrol"=>$this->input->post("totalpetrol"),

                "parkingdes"=>$this->input->post("parkingdes"),
                "parkingrefdate"=>$this->input->post("parkingrefdate"),
                "parkingrefno"=>$this->input->post("parkingrefno"),
                "parkingamount"=>$this->input->post("parkingamount"),
                "parkinggst"=>$this->input->post("parkinggst"),
                "totalparkingcoupon"=>$this->input->post("totalparkingcoupon"),

                "advertismentdes"=>$this->input->post("advertismentdes"),
                "advertismentrefdate"=>$this->input->post("advertismentrefdate"),
                "advertismentrefno"=>$this->input->post("advertismentrefno"),
                "advertismentamount"=>$this->input->post("advertismentamount"),
                "advertismentgst"=>$this->input->post("advertismentgst"),
                "totaladvertismentfee"=>$this->input->post("totaladvertismentfee"),

                "etransferdes"=>$this->input->post("etransferdes"),
                "etransferrefdate"=>$this->input->post("etransferrefdate"),
                "etransferrefno"=>$this->input->post("etransferrefno"),
                "etransferamount"=>$this->input->post("etransferamount"),
                "etransfergst"=>$this->input->post("etransfergst"),
                "totaletransfer"=>$this->input->post("totaletransfer"),

                "banksurchargedes"=>$this->input->post("banksurchargedes"),
                "banksurchargerefdate"=>$this->input->post("banksurchargerefdate"),
                "banksurchargerefno"=>$this->input->post("banksurchargerefno"),
                "banksurchargeamount"=>$this->input->post("banksurchargeamount"),
                "banksurchargegst"=>$this->input->post("banksurchargegst"),
                "totalbanksurcharge"=>$this->input->post("totalbanksurcharge"),

                "totalamount"=>$this->input->post("totalamount"),
                "totalcostgst"=>$this->input->post("totalcostgst"),
                "totalcostdetail"=>$this->input->post("totalcostdetail"),

                "commi_des1"=>$this->input->post("commi_des1"),
                "commi_paiddate1"=>$this->input->post("commi_paiddate1"),
                "commission1"=>$this->input->post("commission1"),

                "commi_des2"=>$this->input->post("commi_des2"),
                "commi_paiddate2"=>$this->input->post("commi_paiddate2"),
                "commission2"=>$this->input->post("commission2"),

                "commi_des3"=>$this->input->post("commi_des3"),
                "commi_paiddate3"=>$this->input->post("commi_paiddate3"),
                "commission3"=>$this->input->post("commission3"),

                "commi_des4"=>$this->input->post("commi_des4"),
                "commi_paiddate4"=>$this->input->post("commi_paiddate4"),
                "commission4"=>$this->input->post("commission4"),

                "commi_des5"=>$this->input->post("commi_des5"),
                "commi_paiddate5"=>$this->input->post("commi_paiddate5"),
                "commission5"=>$this->input->post("commission5"),

                "commi_des6"=>$this->input->post("commi_des6"),
                "commi_paiddate6"=>$this->input->post("commi_paiddate6"),
                "commission6"=>$this->input->post("commission6"),

                "commi_des7"=>$this->input->post("commi_des7"),
                "commi_paiddate7"=>$this->input->post("commi_paiddate7"),
                "commission7"=>$this->input->post("commission7"),

                "totalcommission"=>$this->input->post("totalcommission"),

                "flooramt1"=>$this->input->post("flooramt1"),
                "startdate1"=>$this->input->post("startdate1"),
                "enddate1"=>$this->input->post("enddate1"),
                "total1"=>$this->input->post("total1"),

                "flooramt2"=>$this->input->post("flooramt2"),
                "startdate2"=>$this->input->post("startdate2"),
                "enddate2"=>$this->input->post("enddate2"),
                "total2"=>$this->input->post("total2"),

                "totalfloorstock"=>$this->input->post("totalfloorstock"),

                "profit1"=>$this->input->post("profit1"),
                "cif1"=>$this->input->post("cif1"),
                "broker_paiddate1"=>$this->input->post("broker_paiddate1"),
                "payout1"=>$this->input->post("payout1"),

                "profit2"=>$this->input->post("profit2"),
                "cif2"=>$this->input->post("cif2"),
                "broker_paiddate2"=>$this->input->post("broker_paiddate2"),
                "payout2"=>$this->input->post("payout2"),

                "profit3"=>$this->input->post("profit3"),
                "cif3"=>$this->input->post("cif3"),
                "broker_paiddate3"=>$this->input->post("broker_paiddate3"),
                "payout3"=>$this->input->post("payout3"),

                "totalbroker"=>$this->input->post("totalbroker")
            );
            $this->db->where('id',$id);
            $this->db->update("vehicles_details",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("vehicles_detail/");
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
            $this->db->delete("vehicles_details");
            redirect("vehicles_detail/");
        }else
        {
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
    function profitandloss()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);
            $data["vehiclesdetail"] =$this->db->query("SELECT vehicles_details.*,vehicles_details.selling_price as sellingprice,vehicles_details.purchase_date as purchasedate, vehicles.*,vehicles_details.prev_vehino as prev_vehino,vehicles.vehicle_no as vehino,(vehicles_details.net_amount+vehicles_details.purchase_price+vehicles_details.net_parkingfee+vehicles_details.floor_loan_amt_total) as totalcostprice FROM vehicles_details  LEFT JOIN vehicles ON vehicles.id=vehicles_details.vehi_no WHERE vehicles_details.id='$id'")->row();

            $data["prevvehino"] =$this->db->query("SELECT vehicles.vehicle_no as prevvehino FROM vehicles_details LEFT JOIN vehicles ON vehicles.id=vehicles_details.prev_vehino WHERE vehicles_details.id='$id'")->row();
            $data['content']="vehicles-detail/profitloss";
            $this->load->view("template",$data);
        }else
        {
          redirect('/');
        }
    }
    function costsheetreport_pdf()
    {
        $id=$this->uri->segment(3);
        $data["costsheetreport"]=$this->db->query("SELECT vehicles_details.*,vehicles.vehicle_no FROM vehicles_details LEFT JOIN vehicles ON vehicles.id=vehicles_details.vehino WHERE vehicles_details.id='$id'")->row();

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


}?>
