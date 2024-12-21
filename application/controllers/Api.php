<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Api extends CI_Controller {    

    public function __construct() {
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    $method = $_SERVER['REQUEST_METHOD'];
        if($method == "OPTIONS") {
            die();
        }
       parent::__construct();
       
    }
	public function login() {
        $return = array("status" => 0, "data" => "Invalid Username or Password.");
        $data = json_decode(file_get_contents('php://input'));

        $user = $this->db->query("SELECT * FROM users WHERE email = ? LIMIT 1", array($data->email))->row();

        if($user) {
            if($user->role=='customer'){
                    $is_valid = password_verify($data->password, $user->password);
                    if($is_valid) {
                        $return = array("status" => 1, "data" => $user);
                    }
            }
            else{
                $return = array("status" => 0, "message" => "You can't login !");
            }
        }        
        echo json_encode($return);
    }
    
    public function getfuel(){
        $fuel = $this->Vehicles_model->getfueltype();
        echo json_encode($fuel);
    }
    public function getvehicles(){
        $cars = $this->Main_model->getvehicles();
        echo json_encode($cars);
    }    
    public function getvehiclesdetail($vid)
    {
        $json = file_get_contents('php://input');
        $vehi = json_decode($json);

        $data = array();
        $cars = $this->Main_model->getvehiclesdetail($vid);
        // $data['color'] = $this->Main_model->getvehiclescolor($vid);
        echo json_encode($cars);
    }
    public function getvehiclescolor($vid)
    {
        $json = file_get_contents('php://input');
        $vehi = json_decode($json);

        $data = array();
        
        $data = $this->Main_model->getvehiclescolor($vid);
        echo json_encode($data);
    }
    public function getvehiclesfeatures($vid)
    {
        $json = file_get_contents('php://input');
        $vehi = json_decode($json);

        $data = array();        
        $data = $this->Main_model->getvehiclesfeatures($vid);
        echo json_encode($data);
    }
    public function getvehiclespkg($vid)
    {
        $json = file_get_contents('php://input');
        $vehi = json_decode($json);

        $data = array();
        
        $data = $this->Main_model->getvehiclespkg($vid);
        echo json_encode($data);
    }
    
    public function getvehiclesphotos($vid)
    {
        $json = file_get_contents('php://input');
        $vehi = json_decode($json);

        $data = array();
        
        $data = $this->Main_model->getvehiclesphotos($vid);
        echo json_encode($data);
    }
    public function getvehiclescatetgory($categoryid)
    {
        $json = file_get_contents('php://input');
        $vehi = json_decode($json);

        $cars = $this->Main_model->getcategorytitle($categoryid);
        echo json_encode($cars);
    }
    public function gethowitworks(){
        $data = $this->Main_model->gethowitworks();
        echo json_encode($data);
    }
    public function getpromotionmsg(){
        $data = $this->Main_model->getpromotionmsg();
        echo json_encode($data);
    }
    public function getbrands(){
        $brands = $this->Vehicles_model->getbrands();
        echo json_encode($brands);
    }
    public function getbodytype(){
        $body = $this->Vehicles_model->getbodytype();
        echo json_encode($body);
    }

    public function getfaq(){
        $faq = $this->Main_model->getfaq();
        echo json_encode($faq);
    }
    public function getfeature(){
        $feature = $this->Main_model->getfeatures();
        echo json_encode($feature);
    }
    public function getservice(){
        $service = $this->Main_model->getservices();
        echo json_encode($service);
    }
    public function getbusiness(){
        $business = $this->Main_model->getbusiness();
        echo json_encode($business);
    }
    public function getduration()
    {
        $business = $this->Main_model->getduration();
        echo json_encode($business);
    }


    /*insert*/
    public function addusers() {       

        $return = array("status" => 0, "data" => "Invalid Username or Password.");
        $_data = json_decode(file_get_contents('php://input')); 

        $data = array(
            "first_name" => $_data->first_name,
            "last_name" => $_data->last_name,
            "email" => $_data->email,
            "phone" => $_data->phNumber,
            "role"=>"customer",
            "password" => password_hash($_data->password, PASSWORD_DEFAULT),
            "created_date"=>date('Y-m-d H:i:s')
        );
        $this->db->select('*');
          $this->db->from('users');
          $this->db->where(array('email'=>$_data->email));
          $query=$this->db->get();

          if($query->num_rows()==1)
          {
                $return = array("status" => 0, "message" => "Already registered and use other email address !");
                echo json_encode($return);
          }else{
                $this->db->insert("users", $data); 
                $user = $this->db->query("SELECT * FROM users WHERE email = ? LIMIT 1", array($_data->email))->row();
                $return = array("status" => 1, "data" => $user);
                echo json_encode($return); 
          }        
        
    }
    public function addbusiness_users(){
        $return = array("status" => 0, "data" => "Invalid Username or Password.");
        $_data = json_decode(file_get_contents('php://input')); 

        $data = array(
            "first_name" => $_data->firstName,
            "last_name" => $_data->lastName,
            "email" => $_data->email,
            "cmy_name" => $_data->companyName,
            "phone" => $_data->phonenumber,
            "interesting_option" => $_data->interest_option,
            "qty_of_cars" => $_data->qtyofcars,
            "business_register_no" => $_data->registerno,
            "office_no" => $_data->officeno,
            "message" => $_data->message,
            "role" => "dealer",
            "status" => "0",
            "created_date"=>date('Y-m-d H:i:s')
        );
        $this->db->select('*');
          $this->db->from('users');
          $this->db->where(array('email'=>$_data->email));
          $query=$this->db->get();

          if($query->num_rows()==1)
          {
                $return = array("status" => 0, "message" => "Already messaged and use other email address !");
                echo json_encode($return);
          }else{
                $this->db->insert("users", $data); 
                $businessuser = $this->db->query("SELECT * FROM users WHERE email = ? LIMIT 1", array($_data->email))->row();
                $return = array("status" => 1, "data" => $businessuser);
                echo json_encode($return);
            }
        
    }
    public function adduserbookings() {       

        $return = array("status" => 0, "data" => "Invalid Booking ID");
        $_data = json_decode(file_get_contents('php://input')); 

        $userid=$_data->user_id;
        $cid=$_data->vehicle_id;
        $bookdate=$_data->delivery_date;
       
        $month=$_data->duration;
        $avilabledate=date('Y-m-d',strtotime("+$month month",strtotime($bookdate)));

        $price=$_data->price;
        $total=$price*$month;
        
        $data = array(
            "booking_no" => date('ymdhis'),
            "vehicle_id" => $_data->vehicle_id,
            "user_id" => $userid,
            "duration" => $_data->duration,
            "subscription_price" => $_data->price,
            "color" => $_data->color,
            "payment_method" => $_data->payment,
            "delivery_date" => $_data->delivery_date,
            "delivery_time" => $_data->deliveryTime,
            "delivery_address1" => $_data->deliAddressLine1,
            "delivery_address2" => $_data->deliAddressLine2,
            "delivery_postcode" => $_data->deliPostcode,
            "delivery_remark" => $_data->deliRemark,
            "deli_phone" => $_data->deliveryPhNumber,
            "billing_address1" => $_data->billingAddressLine1,
            "billing_address2" => $_data->billingAddressLine2,
            "billing_phone" => $_data->billingPhNumber,
            "billing_postcode" => $_data->billingPostcode,
            "country" => $_data->billingCountry,
            "state" => $_data->billingState,
            "billing_postcode" => $_data->billingPostcode,
            "available_date" => $avilabledate,  
            "total_amt"=>$total,
            "created_date"=>date('Y-m-d')
        );
        $cardata = array(
                    "available_date" => $avilabledate
                );
        $this->db->where('id',$cid);
        $this->db->update("vehicles",$cardata);

        $this->db->insert("bookings", $data);
        $bid=$this->db->insert_id();
        

        $booking = $this->db->query("SELECT * FROM bookings WHERE id = $bid")->row();
        $return = array("status" => 1, "data" => $booking);
        echo json_encode($return);
    }
    public function checkbookings()
    {
        $return = array("status" => 0, "data" => "Invalid Booking ID");
        $_data = json_decode(file_get_contents('php://input')); 

        $bid=$_data->bid;
        $vehicleid=$_data->vehicle_id;
        $checkstatus=$_data->check_status;
        if($checkstatus=="true")
            {
                $data = array(
                    "check_status" => "1"
                );
                $this->db->where('id',$bid);
                $this->db->update("bookings",$data);

                $data = array(
                        "status" =>"1"
                    );
                $this->db->where('id',$vehicleid);
                $this->db->update("vehicles",$data);
            }
            else{
                $this->db->where('id',$bid);
                $this->db->delete("bookings");
            }
        
        $return = array("status" => 1);
        echo json_encode($return);    
    }
    public function bookingslist()
    {
        $return = array("status" => 0, "data" => "Invalid Booking ID");
        $_data = json_decode(file_get_contents('php://input')); 

        $userid=$_data->userid;
        $bookingtab=$_data->bookingtab;
        if($bookingtab=='1'){
        $booking = $this->db->query("SELECT bookings.*,bookings.id as bid,vehicles.photo as photo,vehicles.model_name as model_name FROM bookings LEFT JOIN vehicles ON vehicles.id=bookings.vehicle_id WHERE (bookings.check_status = '1' OR bookings.check_status = '2' OR bookings.check_status='4') AND (bookings.user_id=$userid)")->result(); 
        }else if($bookingtab=='2'){
            $booking = $this->db->query("SELECT bookings.*,bookings.id as bid,vehicles.photo as photo,vehicles.model_name as model_name FROM bookings LEFT JOIN vehicles ON vehicles.id=bookings.vehicle_id WHERE bookings.check_status = '3' AND bookings.user_id=$userid")->result();  
        }
        
        $return = array("status" => 1, "data" => $booking);
        echo json_encode($return);
    }
    public function uploaduserbookingfiles() {   

        $post = $this->input->post(); 
        if($post) {
                $bid=$post["booking_id"];

                if(!empty($_FILES['driving_license_front']))
                {
                    $dvfront_upload = $this->_do_upload();                                       
                } 
                if(!empty($_FILES['driving_license_back']['name']))
                {
                    $dvback_upload = $this->_do_upload_drback();
                }
                if(!empty($_FILES['national_id_front']['name']))
                {
                    $nrcfront_upload = $this->_do_upload_nrcfront();                    
                }
                if(!empty($_FILES['national_id_back']['name']))
                {
                    $nrcback_upload = $this->_do_upload_nrcback();                    
                }
                $data=array(
                        'driving_license_front'=>$dvfront_upload,
                        'driving_license_back'=>$dvback_upload,
                        'national_id_front'=>$nrcfront_upload,
                        'national_id_back'=>$nrcback_upload,
                        'check_status'=>'2'
                    ); 
                $this->db->where('id',$bid);
                $this->db->update("bookings",$data);      
        }
                
                $booking = $this->db->query("SELECT * FROM bookings WHERE id='$bid'")->row();
                $return = array("status" => true, "data" => $booking);
                echo json_encode($return);        
    }
    public function _do_upload()
    {
        $config['upload_path']          = 'upload/usersinfo';
        $config['allowed_types']        = 'jpg|png';        
 
        $this->upload->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
 
       if(!$this->upload->do_upload('driving_license_front')) //upload and validate
        {
            $data['inputerror'][] = 'driving_license_front';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    public function _do_upload_drback()
    {
        $config['upload_path']          = 'upload/usersinfo';
        $config['allowed_types']        = 'jpg|png';        
 
        $this->upload->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
 
       if(!$this->upload->do_upload('driving_license_back')) //upload and validate
        {
            $data['inputerror'][] = 'driving_license_back';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    public function _do_upload_nrcfront()
    {
        $config['upload_path']          = 'upload/usersinfo';
        $config['allowed_types']        = 'jpg|png';        
 
        $this->upload->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
 
       if(!$this->upload->do_upload('national_id_front')) //upload and validate
        {
            $data['inputerror'][] = 'national_id_front';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    public function _do_upload_nrcback()
    {
        $config['upload_path']          = 'upload/usersinfo';
        $config['allowed_types']        = 'jpg|png';        
 
        $this->upload->initialize($config);
        $this->image_lib->resize();
        $this->image_lib->clear();
 
       if(!$this->upload->do_upload('national_id_back')) //upload and validate
        {
            $data['inputerror'][] = 'national_id_back';
            $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error
            $data['status'] = FALSE;
            echo json_encode($data);
            exit();
        }
        return $this->upload->data('file_name');
    }
    public function getbookingid($bid) { 
        $json = file_get_contents('php://input');
        $dd = json_decode($json);
        
        $data = array();
        
        $data = $this->db->query("SELECT bookings.*,bookings.id as bid,vehicles.photo,bookings.model_name as modelname,bookings.duration as bookduration,bookings.subscription_price FROM bookings LEFT JOIN vehicles ON vehicles.id=bookings.vehicle_id WHERE bookings.id = $bid")->row();
        echo json_encode($data);
    }
    public function getuserinvoice($uid){
        $json = file_get_contents('php://input');
        $invoice = json_decode($json);
        
        $data = array();        
        $data = $this->db->query("SELECT invoice.*,invoice.id as ivoid,bookings.payment_method as paymethod,bookings.total_amt as totalamt FROM invoice LEFT JOIN bookings ON bookings.id=invoice.booking_id WHERE invoice.user_id = $uid")->result();
        echo json_encode($data);
    }
    public function getuserinvoice_detail($invoiceid){
        $json = file_get_contents('php://input');
        $invoice = json_decode($json);
        
        $data = array();        
        $data = $this->db->query("SELECT users.first_name as fname,users.last_name as lname,users.email as useremail,bookings.billing_address1 as billaddress,bookings.billing_phone as billphone,vehicles.model_name as modelname,bookings.duration as bookingduration,bookings.subscription_price,invoice.total_amt as totalamt,invoice.id as ivoid,bookings.delivery_remark,invoice.invoice_date,invoice.invoice_name FROM invoice LEFT JOIN bookings ON bookings.id = invoice.booking_id LEFT JOIN users ON users.id=invoice.user_id LEFT JOIN vehicles ON vehicles.id=invoice.vehicle_id WHERE invoice.id = $invoiceid")->row(); 
         echo json_encode($data); 
    }

    public function userprofileupdate() {
        $return = array("status" => 0, "data" => "Invalid User ID.");
        $_data = json_decode(file_get_contents('php://input'));
        
        $userid=$_data->id;
        $data = array(
            "first_name" => $_data->first_name,
            "last_name" => $_data->last_name,
            "email" => $_data->email,
            "phone" => $_data->phone           
        );

        $this->db->where('id',$userid);
        $this->db->update("users",$data);
        $user = $this->db->query("SELECT * FROM users WHERE id = $userid")->row();
        $return = array("status" => 1, "data" => $user);
        echo json_encode($return);
    }
    public function checkforgetpassword()
    {
        $return = array("status" => 0, "data" => "Invalid Email Address");
        $data = json_decode(file_get_contents('php://input'));

        $user = $this->db->query("SELECT * FROM users WHERE email = ? LIMIT 1", array($data->email))->row();

        if($user) {            
            $return = array("status" => 1,"data"=>$user->id);
        }else{
            $return = array("status" => 0,"message"=>"Invalid Email Address");
        }
        echo json_encode($return);
    }
    public function updateforgetpassword()
    {
        $return = array("status" => 0, "data" => "Invalid Password");
        $_data = json_decode(file_get_contents('php://input'));
        
        $userid=$_data->id;
        $data = array(            
            "password" => password_hash($_data->password, PASSWORD_DEFAULT)         
        );

        $this->db->where('id',$userid);
        $this->db->update("users",$data);
        $user = $this->db->query("SELECT * FROM users WHERE id = $userid")->row();
        $return = array("status" => 1, "data" => $user);
        echo json_encode($return);
    }
    public function changepassword()
    {
        $return = array("status" => 0, "data" => "Invalid Email Address");
        $data = json_decode(file_get_contents('php://input'));

        $userid=$data->id;       
        
        $userdata = $this->db->query("SELECT * FROM users WHERE id = $userid")->row();

        if($userdata) {
                $is_valid=password_verify($data->password, $userdata->password);
                if($is_valid) {   
                    $data = array(            
                                "password" => password_hash($data->newpassword, PASSWORD_DEFAULT)         
                            );
                    $this->db->where('id',$userid);
                    $this->db->update("users",$data);
                    $return = array("status" => 1);

                }else{
                    $return = array("status" => 0,"message"=>"Wrong Password !");
                }
        }
        echo json_encode($return);
    }
    public function resizeImage($filename)
    {
        $source_path = "uploads/uersinfo/$filename";
        $target_path = "uploads/uersinfo/$filename";
        $config_manip = array(
            'image_library' => 'gd2',
            'source_image' => $source_path,
            'new_image' => $target_path,
            'maintain_ratio' => TRUE,
            'width' => 150,
            'height' => 100
        );

        $this->load->library('image_lib');
        $this->image_lib->initialize($config_manip);
        if (!$this->image_lib->resize()) {
            echo json_encode(array("status" => false, "message" => $this->image_lib->display_errors()));
            die();
        }

        $this->image_lib->clear();
    }
    public function vehicles_search()
    {
        $return = array("status" => 0, "data" => "Invalid Name");
        $_data = json_decode(file_get_contents('php://input'));
        
        $name=$_data->name;
        $duration=$_data->duration;
        $brand=$_data->brand;
        $bodytype=$_data->bodytype;
        $fueltype=$_data->fueltype;

        if(!empty($name) && empty($duration) && empty($brand) && empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE model_name LIKE'%$name%' OR brand_name LIKE'%$name%' OR body_type LIKE'%$name%' OR fuel_type LIKE'%$name%' OR duration LIKE'%$name%'AND show_status!='0' ORDER BY id DESC")->result();
            
        }
        elseif(empty($name) && !empty($duration) && empty($brand) && empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE car_package.duration=$duration AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
            
        }
        elseif(empty($name) && empty($duration) && !empty($brand) && empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE brand_name='$brand'' AND show_status!='0' ORDER BY id DESC")->result();
           
        }
        elseif(empty($name) && empty($duration) && empty($brand) && !empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE body_type=$bodytype AND show_status!='0' ORDER BY id DESC")->result();
          
        }
        elseif(empty($name) && empty($duration) && empty($brand) && empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE fuel_type=$fueltype AND show_status!='0' ORDER BY id DESC")->result();
        }
        // -------------
        elseif(empty($name) && !empty($duration) && !empty($brand) && empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE car_package.duration=$duration AND brand_name='$brand' AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
        }
        elseif(empty($name) && !empty($duration) && empty($brand) && !empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE duration=$duration AND body_type=$bodytype AND show_status!='0' ORDER BY id DESC")->result();
        }
        elseif(empty($name) && !empty($duration) && empty($brand) && empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE car_package.duration=$duration AND fuel_type=$fueltype AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
        }
        // -----------
        elseif(empty($name) && empty($duration) && !empty($brand) && !empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE brand_name='$brand' AND body_type=$bodytype AND show_status!='0' ORDER BY id DESC")->result();
        }
        elseif(empty($name) && empty($duration) && !empty($brand) && empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE brand_name='$brand' AND fuel_type=$fueltype AND show_status!='0' ORDER BY id DESC")->result();
        }
        // -------------
        elseif(empty($name) && empty($duration) && empty($brand) && !empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE body_type=$bodytype AND fuel_type=$fueltype AND show_status!='0' ORDER BY id DESC")->result();
        }
        // ----------------
        elseif(empty($name) && !empty($duration) && !empty($brand) && !empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE car_package.duration=$duration AND brand_name='$brand' AND body_type=$bodytype AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
        }
        elseif(empty($name) && empty($duration) && !empty($brand) && !empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE brand_name='$brand' AND body_type=$bodytype AND fuel_type=$fueltype AND show_status!='0' ORDER BY id DESC")->result();
        }
        elseif(empty($name) && !empty($duration) && !empty($brand) && empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE car_package.duration=$duration AND brand_name='$brand' AND fuel_type=$fueltype AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
        }
        // ----------------
        elseif(!empty($name) && !empty($duration) && empty($brand) && empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE model_name LIKE'%$name%' OR brand_name LIKE'%$name%' OR body_type LIKE'%$name%' OR fuel_type LIKE'%$name%' AND car_package.duration=$duration AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
            
        }
        elseif(!empty($name) && empty($duration) && !empty($brand) && empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE model_name LIKE'%$name%' OR body_type LIKE'%$name%' OR fuel_type LIKE'%$name%' OR duration LIKE'%$name%' AND brand_name='$brand' AND show_status!='0' ORDER BY id DESC")->result();
            
        }
        elseif(!empty($name) && empty($duration) && empty($brand) && !empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE model_name LIKE'%$name%' OR brand_name LIKE'%$name%' OR fuel_type LIKE'%$name%' OR duration LIKE'%$name%' AND body_type=$bodytype AND show_status!='0' ORDER BY id DESC")->result();
            
        }
        elseif(!empty($name) && empty($duration) && empty($brand) && empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE model_name LIKE'%$name%' OR brand_name LIKE'%$name%' OR body_type LIKE'%$name%' OR duration LIKE'%$name%' AND fuel_type=$fueltype AND show_status!='0' ORDER BY id DESC")->result();
            
        }
        // --------------
        elseif(!empty($name) && !empty($duration) && !empty($brand) && empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE model_name LIKE'%$name%' OR body_type LIKE'%$name%' OR fuel_type LIKE'%$name%' AND car_package.duration=$duration AND brand_name='$brand' AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
            
        }
        elseif(!empty($name) && !empty($duration) && empty($brand) && !empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE model_name LIKE'%$name%' OR brand_name LIKE'%$name%' OR fuel_type LIKE'%$name%' AND car_package.duration=$duration AND body_type=$bodytype' AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
            
        }
        elseif(!empty($name) && !empty($duration) && empty($brand) && empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE model_name LIKE'%$name%' OR brand_name LIKE'%$name%' OR body_type LIKE'%$name%' AND car_package.duration=$duration AND fuel_type=$fueltype AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
           
        }
        // --------------
        elseif(!empty($name) && empty($duration) && !empty($brand) && !empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE model_name LIKE'%$name%' OR duration LIKE'%$name%' AND brand_name='$brand' AND body_type=$bodytype AND fuel_type=$fueltype AND show_status!='0' ORDER BY id DESC")->result();
            
        }
        elseif(!empty($name) && !empty($duration) && !empty($brand) && !empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE model_name LIKE'%$name%' OR fuel_type LIKE'%$name%' AND car_package.duration=$duration AND brand_name='$brand' AND body_type=$bodytype AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
            
        }
        elseif(empty($name) && !empty($duration) && !empty($brand) && !empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE car_package.duration=$duration AND brand_name='$brand' AND body_type=$bodytype AND fuel_type=$fueltype AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
        }
        // --------------
        elseif(empty($name) && !empty($duration) && empty($brand) && !empty($bodytype) && !empty($fueltype))
        {
            $query=$this->db->query("SELECT vehicles.* FROM vehicles LEFT JOIN car_package ON car_package.vehicle_id=vehicles.id WHERE car_package.duration=$duration AND body_type=$bodytype AND fuel_type=$fueltype AND vehicles.show_status!='0' ORDER BY vehicles.id DESC")->result();
        }
        // --------------
        elseif(empty($name) && empty($duration) && empty($brand) && empty($bodytype) && empty($fueltype))
        {
            $query=$this->db->query("SELECT * FROM vehicles WHERE show_status!='0' ORDER BY id DESC")->result();

        }

        echo json_encode($query);
    }



}