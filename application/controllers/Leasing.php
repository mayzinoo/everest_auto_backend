<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
class Leasing extends CI_Controller
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
           
            $data["leasing"] =$this->db->query("SELECT * FROM leasing order by id desc");
            $data["leasingrental"] =$this->db->query("SELECT * FROM leasing_rental order by id desc");

            $data['content']="leasing/leasing";
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
            
            $data['content']="leasing/create_form";
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
                "broker"=>$this->input->post("broker"),
                "car_plate"=>$this->input->post("carplate"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "roadtax_expiry"=>$this->input->post("roadtax_expy"),
                "coe_expiry"=>$this->input->post("coe_expy"),
                "inspection_date"=>$this->input->post("inspection_expy"),
                "out_date"=>$this->input->post("outdate"),
                "in_date"=>$this->input->post("indate"),
                "salesman"=>$this->input->post("salesman"),
                "payment"=>$this->input->post("payment"),
                "booking_date"=>$this->input->post("bookingdate_from").','.$this->input->post("bookingdate_to"),
                "tenure"=>$this->input->post("tenure"),
                "salesman2"=>$this->input->post("salesman2"),

                "hirer_name"=>$this->input->post("hirer_name"),
                "nirc"=>$this->input->post("nirc"),
                "address"=>$this->input->post("address"),
                "contact_no"=>$this->input->post("contact_no"),
                // "vehi_reg_no"=>$this->input->post("vehi_reg_no"),
                // "make"=>$this->input->post("make"),
                // "model"=>$this->input->post("model"),
                "p_plate"=>$this->input->post("p_plate"),
                "gps_rental"=>$this->input->post("gps_rental"),
                "collection_date"=>$this->input->post("collection_date"),
                "return_date"=>$this->input->post("return_date"),
                "no_days"=>$this->input->post("no_days"),
                "rental_amt"=>$this->input->post("rental_amt"),
                "refundable_deposit"=>$this->input->post("refundable_deposit"),
                "total_amt"=>$this->input->post("total_amt"),
                "vehi_delivery_date"=>$this->input->post("vehi_delivery_date"),
                "vehi_delivery_time"=>$this->input->post("vehi_delivery_time"),
                "remark"=>$this->input->post("remark"),
                "checkedout_by"=>$this->input->post("checkedout_by"),
                "mileage_out"=>$this->input->post("mileage_out"),
                "fuel_percent"=>$this->input->post("fuel_percent"),
                // "in_date"=>$this->input->post("in_date"),
                "time"=>$this->input->post("time"),
                "mileage"=>$this->input->post("mileage"),
                "return_fuel_percent"=>$this->input->post("return_fuel_percent"),
                "checkin_by"=>$this->input->post("checkin_by"),


                "created_at"=>date('Y-m-d')
            );
            if(!empty($_FILES['authorised_sign']['name']))
                {
                    $author = $this->_do_upload_authsign();
                    $data['authorised_sign'] = $author;
                }
            if(!empty($_FILES['hirer_sign']['name']))
                {
                    $hirer = $this->_do_upload_hirersign();
                    $data['hirer_sign'] = $hirer;
                }

            if(!empty($_FILES['vehiclephoto']['name']))
                {
                    $carphoto = $this->_do_upload_vehiclephoto();
                    $data['car_photo'] = $carphoto;
                }
            $this->db->insert("leasing",$data);
            $this->session->set_flashdata('success', 'Already created.');
            redirect("leasing/");

        }
    }
    function edit_form()
    {
        $role=$this->session->userdata("role");
        if($this->session->userdata("email") && $this->session->userdata("password") && $role=="admin" || $role=="sale")
        {
            $id=$this->uri->segment(3);
            
            $data["leasing"] =$this->db->query("SELECT * FROM leasing WHERE id='$id'")->row();
            $data['content']="leasing/edit_form";
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
                "broker"=>$this->input->post("broker"),
                "car_plate"=>$this->input->post("carplate"),
                "make"=>$this->input->post("make"),
                "model"=>$this->input->post("model"),
                "roadtax_expiry"=>$this->input->post("roadtax_expy"),
                "coe_expiry"=>$this->input->post("coe_expy"),
                "inspection_date"=>$this->input->post("inspection_expy"),
                "out_date"=>$this->input->post("outdate"),
                "in_date"=>$this->input->post("indate"),
                "salesman"=>$this->input->post("salesman"),
                "payment"=>$this->input->post("payment"),
                "booking_date"=>$this->input->post("bookingdate_from").','.$this->input->post("bookingdate_to"),
                "tenure"=>$this->input->post("tenure"),
                "salesman2"=>$this->input->post("salesman2"),

                "hirer_name"=>$this->input->post("hirer_name"),
                "nirc"=>$this->input->post("nirc"),
                "address"=>$this->input->post("address"),
                "contact_no"=>$this->input->post("contact_no"),
                // "vehi_reg_no"=>$this->input->post("vehi_reg_no"),
                // "make"=>$this->input->post("make"),
                // "model"=>$this->input->post("model"),
                "p_plate"=>$this->input->post("p_plate"),
                "gps_rental"=>$this->input->post("gps_rental"),
                "collection_date"=>$this->input->post("collection_date"),
                "return_date"=>$this->input->post("return_date"),
                "no_days"=>$this->input->post("no_days"),
                "rental_amt"=>$this->input->post("rental_amt"),
                "refundable_deposit"=>$this->input->post("refundable_deposit"),
                "total_amt"=>$this->input->post("total_amt"),
                "vehi_delivery_date"=>$this->input->post("vehi_delivery_date"),
                "vehi_delivery_time"=>$this->input->post("vehi_delivery_time"),
                "remark"=>$this->input->post("remark"),
                "checkedout_by"=>$this->input->post("checkedout_by"),
                "mileage_out"=>$this->input->post("mileage_out"),
                "fuel_percent"=>$this->input->post("fuel_percent"),
                // "in_date"=>$this->input->post("in_date"),
                "time"=>$this->input->post("time"),
                "mileage"=>$this->input->post("mileage"),
                "return_fuel_percent"=>$this->input->post("return_fuel_percent"),
                "checkin_by"=>$this->input->post("checkin_by")
            );
            if(!empty($_FILES['authorised_sign']['name']))
                {
                    $author = $this->_do_upload_authsign();
                    $data['authorised_sign'] = $author;
                }
            if(!empty($_FILES['hirer_sign']['name']))
                {
                    $hirer = $this->_do_upload_hirersign();
                    $data['hirer_sign'] = $hirer;
                }

            if(!empty($_FILES['vehiclephoto']['name']))
                {
                    $carphoto = $this->_do_upload_vehiclephoto();
                    $data['car_photo'] = $carphoto;
                }

            $this->db->where('id',$id);
            $this->db->update("leasing",$data);
            $this->session->set_flashdata('success', 'Already updated.');
            redirect("leasing/");
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
            $this->db->delete("leasing");
            redirect("leasing/");
        }else{
          redirect('/');
        }
    }
    
    function leasingrentalform_pdf()
    {
        $id=$this->uri->segment(3);
        $data["leasingrentalform1"]=$this->db->query("SELECT * FROM leasing WHERE id='$id'")->row();

        $pdf_view=$this->load->view('leasing/leasing_rentalform',$data, true);
        $pdfFilePath = 'LEASING RENTAL AGREEMENT.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
    function leasingrentalform2_pdf()
    {
        $id=$this->uri->segment(3);
        $data["leasingrentalform"]=$this->db->query("SELECT * FROM leasing WHERE id='$id'")->row();

        $pdf_view=$this->load->view('leasing/leasing_rentalform2',$data, true);
        $pdfFilePath = 'LEASING UNDERTAKING FORM.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
    function leasingform_pdf()
    {
        $data["leasing"]=$this->db->query("SELECT * FROM leasing");

        $pdf_view=$this->load->view('leasing/leasingform',$data, true);
        $pdfFilePath = 'EVEREST LEASING.pdf';
        
        $this->load->library('m_pdf');
        $this->m_pdf->simpleTables = true;
        $this->m_pdf->packTableData = true;
        $this->m_pdf->keep_table_proportions = TRUE;
        $this->m_pdf->shrink_tables_to_fit=1;
        $this->m_pdf->pdf->WriteHTML($pdf_view);
        $this->m_pdf->pdf->Output($pdfFilePath, "I"); 
    }
    
    public function leasing_exportdata()
    {        
        $extension = $this->input->post('export_type');
        if(!empty($extension)){
            $extension = $extension;
        } else {
            $extension = 'xlsx';
        }
        $this->load->helper('download');    
        $data = array();
        $data['title'] = 'Export Excel Sheet | Coders Mag';
        // get leasing list
        $empInfo = $this->Main_model->getleasingdata();
        $fileName = 'Everest Leasing-'.time(); 
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        $sheet->setCellValue('A1', 'BROKER');
        $sheet->setCellValue('B1', 'CAR PLATE');
        $sheet->setCellValue('C1', 'MAKE/MODEL');
        $sheet->setCellValue('D1', 'ROADTAX EXPIRY');
        $sheet->setCellValue('E1', 'COE EXPIRY');
        $sheet->setCellValue('F1', 'INSPECTION DATE');
        $sheet->setCellValue('G1', 'OUT DATE');
        $sheet->setCellValue('H1', 'IN DATE');
        $sheet->setCellValue('I1', 'SALESMAN');
        $sheet->setCellValue('J1', 'PAYMENT');
        $sheet->setCellValue('K1', 'BOOKING DATE');
        $sheet->setCellValue('L1', 'TENURE');
        $sheet->setCellValue('M1', 'SALESMAN');


        $rowCount = 2;
        foreach ($empInfo as $element) {
            $sheet->setCellValue('A' . $rowCount, $element['broker']);
            $sheet->setCellValue('B' . $rowCount, $element['car_plate']);
            $sheet->setCellValue('C' . $rowCount, $element['make'].' '.$element['model']);
            $sheet->setCellValue('D' . $rowCount, $element['roadtax_expiry']);
            $sheet->setCellValue('E' . $rowCount, $element['coe_expiry']);
            $sheet->setCellValue('F' . $rowCount, $element['inspection_date']);
            $sheet->setCellValue('G' . $rowCount, $element['out_date']);
            $sheet->setCellValue('H' . $rowCount, $element['in_date']);
            $sheet->setCellValue('I' . $rowCount, $element['salesman']);
            $sheet->setCellValue('J' . $rowCount, $element['payment']);
            $sheet->setCellValue('K' . $rowCount, $element['booking_date']);
            $sheet->setCellValue('L' . $rowCount, $element['tenure']);
            $sheet->setCellValue('M' . $rowCount, $element['salesman2']);

            $sheet->getColumnDimension('A')->setAutoSize(true);
            $sheet->getColumnDimension('B')->setAutoSize(true);
            $sheet->getColumnDimension('C')->setAutoSize(true);
            $sheet->getColumnDimension('D')->setAutoSize(true);
            $sheet->getColumnDimension('E')->setAutoSize(true);
            $sheet->getColumnDimension('F')->setAutoSize(true);
            $sheet->getColumnDimension('G')->setAutoSize(true);
            $sheet->getColumnDimension('H')->setAutoSize(true);
            $sheet->getColumnDimension('I')->setAutoSize(true);
            $sheet->getColumnDimension('J')->setAutoSize(true);
            $sheet->getColumnDimension('K')->setAutoSize(true);
            $sheet->getColumnDimension('L')->setAutoSize(true);
            $sheet->getColumnDimension('M')->setAutoSize(true);
            $rowCount++;
        }
        if($extension == 'csv'){                
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Csv($spreadsheet);
            $fileName = 'EVEREST LEASING.csv';
        } elseif($extension == 'xlsx') {
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
            $fileName = 'EVEREST LEASING.xlsx';
        } else {
            $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xls($spreadsheet);
            $fileName = 'EVEREST LEASING.xls';
        }

        $this->output->set_header('Content-Type: application/vnd.ms-excel');
        $this->output->set_header("Content-type: application/csv");
        $this->output->set_header('Cache-Control: max-age=0');
        // $writer->save(ROOT_UPLOAD_PATH.$fileName); 
        //redirect(HTTP_UPLOAD_PATH.$fileName); 
        $filepath = file_get_contents(ROOT_UPLOAD_PATH.$fileName);
        force_download($fileName, $filepath);
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
 
       if(!$this->upload->do_upload('authorised_sign')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    private function _do_upload_hirersign()
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
 
       if(!$this->upload->do_upload('hirer_sign')) //upload and validate
        {
            $data['inputerror'][] = 'photo';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    private function _do_upload_vehiclephoto()
    {
        $this->load->helper('file'); 
        $this->load->library('upload'); 
                
        $config['upload_path']          = 'upload/files/';
        $config["allowed_types"] ="*";
        $config['remove_spaces']=TRUE;

        if(!file_exists($config['upload_path'])){
            mkdir($config['upload_path'], 0777);
        }
        $this->upload->initialize($config);
 
       if(!$this->upload->do_upload('vehiclephoto')) //upload and validate
        {
            $data['inputerror'][] = 'vehiclephoto';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
}
?>