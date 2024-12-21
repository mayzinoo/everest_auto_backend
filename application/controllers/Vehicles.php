<?php
if(!defined('BASEPATH'))
		exit('No direct script acceess allowed'); 
    
class Vehicles extends CI_Controller
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
    	if($this->session->userdata("email") && $this->session->userdata("password"))
	    { 
	        
	            if($this->session->userdata("role")=="admin"){
                                $this->db->order_by('vehicles.id','desc');
                                $this->db->group_by('vehicles.id');
                                $this->db->select("vehicles.*,vehicles.id as cid,bookings.vehicle_id as vid,bookings.available_date as avidate");
                                $this->db->join("bookings","bookings.vehicle_id=vehicles.id","Left");
	              $data["allvehicleslist"] =$this->db->get('vehicles');
	            }else{
	              $data["allvehicleslist"] =$this->Vehicles_model->vehicleslist("vehicles");  
	            }            
	            $data["getfueltype"] =$this->Vehicles_model->getfueltype();  
	            $data["getbodytype"] =$this->Vehicles_model->getbodytype();  
	            $data["getfeatures"] =$this->Vehicles_model->getfeatures();  
              $data["getbrands"] =$this->Vehicles_model->getbrands(); 
	            $data["getcategory"] =category_list();
	            $data["durationlist"] =$this->Vehicles_model->getdurationlist(); 

	            $data['content']="vehicles/vehicles";
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
            $data["getbrands_list"] =$this->Vehicles_model->getbrands_list();
            $data["getcategory_list"] =$this->Vehicles_model->getcategory_list();
            $data["getfuel_list"] =$this->Vehicles_model->getfuel_list();
            $data["getbodytype_list"] =$this->Vehicles_model->getbodytype_list();
            $data["durationlist"] =$this->Vehicles_model->getdurationlist();
            $data["getfeatures"] =$this->Vehicles_model->getfeatures(); 
            $data["getcolors"] =$this->Vehicles_model->getcolors();  

            $data['content']="vehicles/create_form";
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
            // Insert
              $post = $this->input->post();
              $postby=$this->session->userdata('role');
              
              
              if(!empty($post)) {
                  $color=$post['color'];      
                  $colour=implode(",",$color);

                  $feat=$post['feature'];      
                  $feature=implode(",",$feat);

                  $duration=$post["duration"];
                  $rentalprice=$post["rentalprice"];
                  $vstatus=$post["vstatus"];

                  
                  $is_exist = $this->db->from("vehicles")->where(['model_name' => $post["n_modelname"]])->count_all_results();

                  if(!$is_exist) {
                      $data = array(
                        'model_name' => $post['n_modelname'],
                        'brand_name' => $post['n_brandname'],
                        'vehicle_no' => $post['n_vehicleno'],
                        'tnc' => $post['n_tnc'],
                        'description' => $post['description'],
                        'price_status' => $post['n_pricestatus'],
                        'rental_price' => $post['n_price'],
                        'selling_price' => $post['selling_price'],
                        'color' => $colour,                  
                        'title_status' => $post['category'],
                        'year' => $post['n_year'],
                        'fuel_type' => $post['n_fueltype'],
                        'body_type' => $post['n_bodytype'],
                        'consumption' => $post['n_consumption'],
                        'engine_type' => $post['n_engine'],
                        'door' => $post['n_door'],
                        'seat_qty' => $post['n_seat'],
                        'transmission' => $post['n_transmission'],
                        'features' => $feature,
                        'post_by'=>$postby,
                        'purchase_date' => $post['n_purchase_date'],
                        'registration_date' => $post['n_registeration_date'],
                        'created_date' => date('Y-m-d')
                      );

                    if(!empty($_FILES['cover']['name']))
                      {
                        $upload = $this->_do_upload_cover();
                        $data['photo'] = $upload;                      
                      }                      

                    $this->db->insert('vehicles',$data); 
                    $id=$this->db->insert_id();
                    if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0)
                    { 
                          $filesCountt = count($_FILES['files']['name']); 
                          for($i = 0; $i < $filesCountt; $i++){ 
                              $_FILES['filee']['name']     = $_FILES['files']['name'][$i]; 
                              $_FILES['filee']['type']     = $_FILES['files']['type'][$i]; 
                              $_FILES['filee']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                              $_FILES['filee']['error']     = $_FILES['files']['error'][$i]; 
                              $_FILES['filee']['size']     = $_FILES['files']['size'][$i];

                              $uploadPath = 'upload/files/'; 
                              $config['upload_path'] = $uploadPath; 
                              $config['allowed_types'] = 'jpg|jpeg|png|gif'; 
                             
                             if(!file_exists($config['upload_path'])){
                                mkdir($config['upload_path'], 0777);
                                }
                              $this->load->library('upload', $config); 
                              $this->upload->initialize($config);                           
                            
                              if($this->upload->do_upload('filee')){ 
                                  
                                  $fileDataa = $this->upload->data(); 
                                  $uploadDataa[$i]['vehicle_id'] = $id; 
                                  $uploadDataa[$i]['photos'] = $fileDataa['file_name'];
                                  $uploadDataa[$i]['created_date'] = date("Y-m-d");  
                              } 
                              
                          }  
                          $this->db->insert_batch('vehicle_photos',$uploadDataa);             
                    }/*end files upload*/ 
                    for($i=0;$i<count($rentalprice);$i++)
                        {
                            if($vstatus[$i]=='true')
                            {
                              $beststatus="bestsaver";
                            }
                            else{
                              $beststatus="";
                            }
                            $pkgdata = array(
                                      'vehicle_id' => $id,
                                      'duration' => $duration[$i],
                                      'price' => $rentalprice[$i],
                                      'best' => $vstatus[$i],   
                                      'best_status' => $beststatus,              
                                      'created_date' => date('Y-m-d')
                                  );
                              $this->db->insert('car_package',$pkgdata); 
                        }
                 
                  

                  }/**/
              }
              redirect("vehicles/");
            // end
        }else{
          redirect('/');
        }
    }
    function car_detail()
    {
      if($this->session->userdata("email") && $this->session->userdata("password"))
      {
        
        $id=$this->uri->segment(3); 
        $data["detailsdata"] =$this->db->query("SELECT vehicles.*,vehicles.id as cid,body_type.body_type as bodytype,fuel_type.fuel_type as fueltype FROM vehicles LEFT JOIN body_type ON body_type.id=vehicles.body_type LEFT JOIN fuel_type ON fuel_type.id=vehicles.fuel_type WHERE vehicles.id=$id")->row(); 

        $data['content']="vehicles/car_detail";
        $this->load->view("template",$data);
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
            $data["vehicledata"] = $this->db->query("SELECT vehicles.id as vid,duration.duration as dura,duration.duration_id as duraid,car_package.best as beststatus,car_package.*,car_package.id as pkgid,car_package.duration as pkgduration,car_package.price as pkgprice,vehicles.*,vehicles.title_status as category,vehicles.model_name as model_name,vehicles.description as descrip,car_package.best as best FROM car_package LEFT JOIN vehicles ON vehicles.id = car_package.vehicle_id LEFT JOIN duration ON duration.duration_id=car_package.duration WHERE car_package.vehicle_id = $id")->row();

            $data["vehiclesdata"] = $this->db->query("SELECT * FROM vehicles WHERE id = $id")->row();

            $data["vehiclespkgdata"] = $this->db->query("SELECT vehicles.id as vid,duration.duration as dura,duration.duration_id as duraid,car_package.best as beststatus,car_package.*,car_package.id as pkgid,car_package.duration as pkgduration,car_package.price as pkgprice,vehicles.*,vehicles.title_status as category,vehicles.model_name as model_name,vehicles.description as descrip,car_package.best as best FROM car_package LEFT JOIN vehicles ON vehicles.id = car_package.vehicle_id LEFT JOIN duration ON duration.duration_id=car_package.duration WHERE car_package.vehicle_id = $id");

            $data["getbrands_list"] =$this->Vehicles_model->getbrands_list();
            $data["getcategory_list"] =$this->Vehicles_model->getcategory_list();
            $data["getfuel_list"] =$this->Vehicles_model->getfuel_list();
            $data["getbodytype_list"] =$this->Vehicles_model->getbodytype_list();
            $data["durationlist"] =$this->Vehicles_model->getdurationlist();
            $data["colors_list"] =$this->Vehicles_model->getcolors_list();
            $data["features_list"] =$this->Vehicles_model->getfeatures_list();
            $data["getfeatures"] =$this->Vehicles_model->getfeatures();  
            $data["getcolors"] =$this->Vehicles_model->getcolors();  
            
            $data['content']="vehicles/edit_form";
            $this->load->view("template",$data);
        }else{
          redirect('/');
        }
    }
    // Update
    function update()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password"))
      {  
          $post = $this->input->post();
          $vid=$this->input->post("id");
          $postby=$this->session->userdata('role');

          $color=$this->input->post('color');      
          $colour=implode(",",$color);

          $feat=$this->input->post('feature');      
          $feature=implode(",",$feat);              

          $duration=$post["duration"];
          $rentalprice=$post["rentalprice"];
          $vstatus=$post["vstatus"];

          $data = array(
                  'model_name' => $post['modelname'],
                  'brand_name' => $post['brandname'],
                  'vehicle_no' => $post['vehicleno'],
                  'tnc' => $post['tnc'],
                  'description' => $post['edit_description'],
                  'price_status' => $post['pricestatus'],
                  'rental_price' => $post['price'],
                  'selling_price' => $post['selling_price'],
                  'color' => $colour,                  
                  'title_status' => $post['category'],
                  'year' => $post['year'],
                  'fuel_type' => $post['fueltype'],
                  'body_type' => $post['bodytype'],
                  'consumption' => $post['consumption'],
                  'engine_type' => $post['engine'],
                  'door' => $post['door'],
                  'seat_qty' => $post['seat'],
                  'transmission' => $post['transmission'],
                  'features' => $feature,
                  'post_by'=>$postby,
                  'purchase_date' => $post['purchase_date'],
                  'registration_date' => $post['registeration_date']
              );
            if($this->input->post('remove_photo')) // if remove photo checked
                {
                  if(file_exists('upload/files/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                    unlink('upload/files/'.$this->input->post('remove_photo'));
                  $data['photo'] = '';
                }
            if(!empty($_FILES['cover']['name']))
                {
                  $upload = $this->_do_upload_cover();
                  
                  //delete file
                  $coverphoto = $this->Vehicles_model->getvehicles_by_id($id);
                  if(file_exists('upload/files/'.$coverphoto->photo) && $coverphoto->photo)
                    unlink('upload/files/'.$coverphoto->photo);

                  $data['photo'] = $upload;
                }
          $this->db->where('id',$vid);
          $this->db->update("vehicles",$data); 
          
          $pkgid=$this->input->post("pkgid");

          for($i=0;$i<count($rentalprice);$i++)
          {
            
                  if($vstatus=='true')
                    {
                      $beststatus="bestsaver";
                    }
                    else{
                      $beststatus="";
                    }
                  $pkgdata = array(
                              'vehicle_id' => $vid,
                              'duration' => $duration[$i],
                              'price' => $rentalprice[$i],
                              'best' => $vstatus[$i],   
                              'best_status' => $beststatus
                          );
                  if(empty($pkgid[$i])){
                      $this->db->insert("car_package", $pkgdata);
                  }else{ 
                      $this->db->where('id',$pkgid[$i]);
                      $this->db->update("car_package",$pkgdata); 
                  }
                  
          }
          
          $this->session->set_flashdata('success', 'Already updated.');
          redirect("vehicles/");
      }else{
            redirect('/');
          }
    }
    
    function update_coverImage()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password"))
      {
          $id=$this->input->post("id");
          if($this->input->post('remove_photo')) // if remove photo checked
                {
                  if(file_exists('upload/files/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                    unlink('upload/files/'.$this->input->post('remove_photo'));
                  $data['photo'] = '';
                }
            if(!empty($_FILES['cover']['name']))
                {
                  $upload = $this->_do_upload_cover();
                  
                  //delete file
                  $coverphoto = $this->Vehicles_model->getvehicles_by_id($id);
                  if(file_exists('upload/files/'.$coverphoto->photo) && $coverphoto->photo)
                    unlink('upload/files/'.$coverphoto->photo);

                  $data['photo'] = $upload;

                  $this->db->where('id',$id);
                    $this->db->update("vehicles",$data);
                }
              redirect("vehicles/edit_form/".$id);
      }else{
            redirect('/');
          }
    }
    function add_galleryphotos()
    {
      
        $post = $this->input->post();
        if(!empty($post)) {
            
          $vid=$post["vid"];
          if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0)
          { 
                    $filesCount = count($_FILES['files']['name']); 
                    for($i = 0; $i < $filesCount; $i++){ 
                        $_FILES['file']['name']     = $_FILES['files']['name'][$i]; 
                        $_FILES['file']['type']     = $_FILES['files']['type'][$i]; 
                        $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i]; 
                        $_FILES['file']['error']     = $_FILES['files']['error'][$i]; 
                        $_FILES['file']['size']     = $_FILES['files']['size'][$i]; 
                         
                      
                        $uploadPath = 'upload/files/'; 
                        $config['upload_path'] = $uploadPath; 
                        $config['allowed_types'] = 'jpg|jpeg|png'; 

                        if(!file_exists($config['upload_path'])){
                            mkdir($config['upload_path'], 0777);
                        }
                        $this->load->library('upload', $config); 
                        $this->upload->initialize($config);                         
                      
                        if($this->upload->do_upload('file')){ 
                            
                            $fileData = $this->upload->data(); 
                            $uploadData[$i]['vehicle_id'] = $vid; 
                            $uploadData[$i]['photos'] = $fileData['file_name'];
                            $uploadData[$i]['created_date'] = date("Y-m-d");  
                        }else{  
                            $errorUploadType .= $_FILES['file']['name'].' | ';  
                        } 
                    } 
                     
                    $errorUploadType = !empty($errorUploadType)?'<br/>File Type Error: '.trim($errorUploadType, ' | '):''; 
                    if(!empty($uploadData)){ 
                        
                    $this->db->insert_batch('vehicle_photos',$uploadData);                     
                                  
                    }    
                }
        }
        redirect("vehicles/edit_form/".$vid);
    }
    function update_galleryImage()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password"))
      {
        $id=$this->input->post("id");
        $vid=$this->input->post("vid");

        if($this->input->post('remove_photo')) // if remove photo checked
              {
                if(file_exists('upload/files/'.$this->input->post('remove_photo')) && $this->input->post('remove_photo'))
                  unlink('upload/files/'.$this->input->post('remove_photo'));
                $data['photos'] = '';
              }
          if(!empty($_FILES['cover']['name']))
              {
                $upload = $this->_do_upload_cover();
                
                //delete file
                $galleryphoto = $this->Vehicles_model->getgalleryImage_by_id($id);
                if(file_exists('upload/files/'.$galleryphoto->photos) && $galleryphoto->photos)
                  unlink('upload/files/'.$galleryphoto->photos);

                $data['photos'] = $upload;
              }
            $this->db->where('id',$id);
            $this->db->update("vehicle_photos",$data);
            redirect("vehicles/edit_form/".$vid);
      }else{
            redirect('/');
          }
    }
    function delete_galleryImage()
    {
      $id=$this->uri->segment(3);
      $vid=$this->uri->segment(4);
      $this->db->where('id',$id);
      $this->db->delete("vehicle_photos");
      redirect("vehicles/edit_form/".$vid);
    }
    function showvehiclesphotodata($id)
    {            
      $data = $this->db->query("SELECT * FROM vehicles WHERE id = $id")->row();
      echo json_encode($data);
    }
    function showgalleryImage($id)
    {
      $data = $this->Vehicles_model->getgalleryImage_by_id($id);
      echo json_encode($data);
    }
    function getdurationlist()
    {
      $cid=$this->input->post("cid");
      $query=$this->db->query("Select * from duration")->result();
      echo json_encode($query);
    }
    function showvehiclesdata()
    {      
      $id=$this->input->post("id");
      $data = $this->db->query("SELECT duration.duration as dura,duration.duration_id as duraid,car_package.best as beststatus,car_package.*,car_package.id as pkgid,car_package.duration as pkgduration,car_package.price as pkgprice,vehicles.*,vehicles.title_status as category,vehicles.model_name as model_name,vehicles.description as descrip,car_package.best as best FROM car_package LEFT JOIN vehicles ON vehicles.id = car_package.vehicle_id LEFT JOIN duration ON duration.duration_id=car_package.duration WHERE car_package.vehicle_id = $id")->result();
      echo json_encode($data);
    } 
    function delete_vehicles()
    {
      $role=$this->session->userdata("role");
      if($this->session->userdata("email") && $this->session->userdata("password"))
      {
          $id=$this->uri->segment(3);
          $postby=$this->session->userdata('role');
          $this->db->where('id',$id);
          $this->db->delete("vehicles");
          redirect("vehicles/");     
      }else{
            redirect('/');
          }
    }
    
    function update_vehiclecancel()
    {
        $id=$this->input->post("id");  
        $data=array(
            "show_status"=>"0"
        );
        $this->db->where('id',$id);
        $this->db->update("vehicles",$data);
        redirect("vehicles/");
    }
    function update_vehicleapprove()
    {
        $id=$this->input->post("id");  
        $data=array(
            "show_status"=>"1"
        );
        $this->db->where('id',$id);
        $this->db->update("vehicles",$data);
        redirect("vehicles/");
    }
    function reset_rentedvehicle()
    {
        $id=$this->input->post("id");  
        $data=array(
            "status"=>"0"
        );
        $this->db->where('id',$id);
        $this->db->update("vehicles",$data);
        redirect("vehicles/");
    }
    function _do_upload_cover()
    {
        $this->load->helper('file'); 
        $this->load->library('upload'); 
                
        $config['upload_path']          = 'upload/files/';
        $config['allowed_types']        = 'jpg|png|jpeg';   
        $config['remove_spaces']=TRUE; 
        
        
        $this->upload->initialize($config);
 
       if(!$this->upload->do_upload('cover')) //upload and validate
            {
                $data['inputerror'][] = 'cover';
                $data['error_string'][] = 'Upload error: '.$this->upload->display_errors('',''); //show ajax error  
                $err=$this->upload->display_errors();
                if($err){
                    echo "
                    <script>
                        alert('Your image file type is not allowed !');
                    </script>
                    ";
                }

                
                $this->session->set_flashdata( 'error_msg', $this->upload->display_errors() );
                
              }
        return $this->upload->data('file_name');
    }
    
    function upload_excel()
    {
     $data['content']="vehicles/uploadexcel";
            $this->load->view("template",$data);
    }
    function upload_file()
    {
      $this->load->library('excel');
        if(isset($_FILES["fileupload"]["name"]))
          {        

            $path = $_FILES["fileupload"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
           foreach($object->getWorksheetIterator() as $worksheet)
           {
            $highestRow = $worksheet->getHighestRow();
            $highestColumn = $worksheet->getHighestColumn();
            for($row=2; $row<=$highestRow; $row++)
            {
             // $no = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
             $c1 = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
             $c2 = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
             $c3 = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
             $c4 = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
             $c5 = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
             $c6 = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
             $c7 = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
             $c8 = $worksheet->getCellByColumnAndRow(7, $row)->getValue();
             $c9 = $worksheet->getCellByColumnAndRow(8, $row)->getValue();
             $c10 = $worksheet->getCellByColumnAndRow(9, $row)->getValue();
             $c11 = $worksheet->getCellByColumnAndRow(10, $row)->getValue();
             $c12 = $worksheet->getCellByColumnAndRow(11, $row)->getValue();
             $c13 = $worksheet->getCellByColumnAndRow(12, $row)->getValue();
             $c14 = $worksheet->getCellByColumnAndRow(13, $row)->getValue();
             $c15 = $worksheet->getCellByColumnAndRow(14, $row)->getValue();
             $c16 = $worksheet->getCellByColumnAndRow(15, $row)->getValue();
             $c17 = $worksheet->getCellByColumnAndRow(16, $row)->getValue();

             $c18 = $worksheet->getCellByColumnAndRow(17, $row)->getValue();
             $c19 = $worksheet->getCellByColumnAndRow(18, $row)->getValue();
             $c20 = $worksheet->getCellByColumnAndRow(19, $row)->getValue();
             
             $is_exist_brands = $this->db->from("brands")->where(['brand_name' => $c2])->count_all_results();
             if(!$is_exist_brands) {
                $brands=array(
                  "brand_name"=>$c2,
                  'created_date'=>date('Y-m-d')
                );
                $this->db->insert("brands",$brands);
              }
            $is_exist_fuel = $this->db->from("fuel_type")->where(['fuel_type' => $c7])->count_all_results();
             if(!$is_exist_fuel) {
                $fuel=array(
                  "fuel_type"=>$c7,
                  "created_date" => date('Y-m-d')
                );
                $this->db->insert("fuel_type",$fuel);
              }

            $is_exist_body = $this->db->from("body_type")->where(['body_type' => $c8])->count_all_results();
             if(!$is_exist_body) {
                $body=array(
                  "body_type"=>$c8,
                  "created_date" => date('Y-m-d')
                );
                $this->db->insert("body_type",$body);
              }

            $is_exist_color = $this->db->from("color")->where(['color_name' => $c13])->count_all_results();
             if(!$is_exist_color) {
                $color=array(
                  "color_name"=>$c13
                );
                $this->db->insert("color",$color);
              }
            $is_exist_feature = $this->db->from("features")->where(['name' => $c14])->count_all_results();
             if(!$is_exist_feature) {
                $feature=array(
                  "name"=>$c14,
                  'created_date' => date('Y-m-d')
                );
                $this->db->insert("features",$feature);
              }
             $file[] = array(
                    'model_name'   => $c1,
                    'brand_name'  => $c2,
                    'vehicle_no'    => $c3,                 
                    'tnc'  => $c4,
                    'year'   => $c5,
                    'consumption'    => $c6,
                    'fuel_type'    => $c7,
                    'body_type'    => $c8,
                    'door'  => $c9,
                    'seat_qty'   => $c10,
                    'engine_type'    => $c11,
                    'transmission'  => $c12,
                    'color'    => $c13,
                    'features'    => $c14,
                    'purchase_date'    => date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($c15)),
                    'registration_date'    => date("Y-m-d", PHPExcel_Shared_Date::ExcelToPHP($c16)),
                    'description'    => $c17,
                    'selling_price'    => $c18,
                    'rental_price'    => $c19,
                    'title_status'    => $c20
                   );
            }
           }
           $this->Vehicles_model->exceldata_insert($file); 
           
          } 
        redirect("vehicles/");
    }  


}
