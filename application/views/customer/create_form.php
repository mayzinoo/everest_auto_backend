<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer's Data</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header" id="exTab3">
                <ul  class="nav nav-pills">
                    <li class="active">
                        <a  href="#1b" data-toggle="tab">EA Loan</a>
                    </li>
                    <li>
                        <a href="#2b" data-toggle="tab">EAPL Quotation</a>
                    </li>
                </ul>            
          </div>
          <!-- /.card-header -->
          
        <form method="post" enctype="multipart/form-data" action="<?php echo site_url('customer/insert') ?>">
            <div class="card-body">
               <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1b">
                        <div class="row sm_padding"> 
                                <div class="col-md-6">  
                                    <p class="formtitle">LOAN DETAILS</p>                                  
                                        
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>REGISTRATION NO</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="registration_no" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>LOAN PERIOD</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="loan_period" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>INT RATE</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="loan_rate" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6" style="margin-top:45px;">                                 
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>LOAN AMOUNT</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="loan_amt" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>PURCHASE PRICE</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="purchase_price" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>INSTALLMENT</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="instalment" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                        </div>
                        <div class="row sm_padding"> 
                                <div class="col-md-6">  
                                    <p class="formtitle">DESCRIPTION OF GOODS</p>
                                        
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Details of Goods</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="detailsofgoods" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Chassis No</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="chassisno" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6" style="margin-top:45px">  
                                        
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Year of Manufacture</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="yearofmanufacture" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Engine No</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="engineno" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                        </div>
                        <div class="row sm_padding"> 
                                
                                <div class="col-md-6">  
                                    <p class="formtitle">FINANCING REQUIREMENTS</p>
                                        
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Finance Period</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="finance_period" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                        </div>
                        <div class="row sm_padding"> 
                                <div class="col-md-6">  
                                    <p class="formtitle">HIRER DETAILS</p>                                  
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>NAME AS PER NRIC</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="name" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>ADDRESS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="address" name="address" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>NRIC/PASSPORT NO</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="nric" name="nric" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>OCCUPATION</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="occupation" name="occupation" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>COMPANY NAME</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="cmy_name" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>COMPANY ADDRESS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="cmy_address" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>MONTHLY INCOME</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="month_income" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Type of Employment</label>
                                            </div>
                                            <div class="col-md-7">
                                                <?=form_dropdown("typeof_employ",array('Employed'=>'Employed','Self-Employed'=>"Self-Employed",'Others'=>"Others"),"",'class="form-control"')?>
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 45px;">                                   
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>DATE OF BIRTH</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="date" name="dob" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-7">
                                                 <?=form_dropdown("hirer_gender",array(''=>'...','Male'=>"Male",'Female'=>"Female"),"",'class="form-control"')?>
                                            </div>       
                                        </div>                                         
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>MARITAL STATUS</label>
                                            </div>
                                            <div class="col-md-7">
                                                 <?=form_dropdown("marital_status",$getmaritalstatus_list,"","class='form-control'")?>
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>YEARS OF SERVICE</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" name="yearof_service_yr" class="form-control" placeholder="yrs">
                                            </div>  
                                            <div class="col-md-4">
                                                <input type="text" name="yearof_service_mth" class="form-control" placeholder="mths">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>EMAIL</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="email" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>OFC</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="offc" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>HP</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="hp" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="phone" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                                
                        </div><!--  -->
                        <div class="row sm_padding"> 
                                <div class="col-md-6">  
                                    <p class="formtitle">GUARANTOR DETAILS</p>    
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>NAME AS PER NRIC</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_name" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>ADDRESS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_address" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>NRIC/PASSPORT NO</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_nric" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>OCCUPATION</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_occupation" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>DATE OF BIRTH</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="date" name="guarantor_dob" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>MARITAL STATUS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <?=form_dropdown("guarantor_marital_status",$getmaritalstatus_list,"","class='form-control'")?>
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>COMPANY NAME</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_cmyname" class="form-control">
                                            </div>       
                                        </div>   
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Type of Employment</label>
                                            </div>
                                            <div class="col-md-7">
                                                <?=form_dropdown("guaran_typeof_employ",array('Employed'=>'Employed','Self-Employed'=>"Self-Employed",'Others'=>"Others"),"",'class="form-control"')?>
                                            </div>       
                                        </div>                           
                                        
                                </div>
                                <div class="col-md-6" style="margin-top:45px">                                 
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>COMPANY ADDRESS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_cmyaddress" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>RELATIONSHIP</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_relationship" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>MONTHLY INCOME</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_monthincome" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>YEARS OF SERVICE</label>
                                            </div>
                                            <div class="col-md-3">
                                                <input type="text" name="guarantor_yearofservice_yr" class="form-control" placeholder="yrs">
                                            </div> 
                                            <div class="col-md-4">
                                                <input type="text" name="guarantor_yearofservice_mth" class="form-control" placeholder="mths">
                                            </div>      
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>EMAIL</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_email" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>OFC</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_offc" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>HP</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_hp" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_phone" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                                
                        </div><!--  -->
                        <div class="row sm_padding"> 
                                <div class="col-md-6">     
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Sign of Hirer</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="file" name="signof_hirer" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6">     
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Sign of Guarantor</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="file" name="signof_guarantor" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                        </div><!--  -->
                    </div><!-- first -->
                    <div class="tab-pane" id="2b"> 
                        <div class="row sm_padding"> 
                            <div class="col-md-6">     
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>To</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="tto" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Tel</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="tel" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Fax</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="fax" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Reply Person</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="reply_person" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="eapl_date" class="form-control">
                                        </div>       
                                    </div>                                
                            </div>
                            <div class="col-md-6">    
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Salesperson</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesperson" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Mobile (Salesperson)</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesperson_mobile" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Fax</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesperson_fax" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesperson_email" class="form-control">
                                        </div>       
                                    </div>                              
                            </div>
                        </div>
                        <div class="row sm_padding"> 
                            <div class="col-md-6">  
                                <p class="formtitle">VEHICLE PARTICULARS</p>                                  
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Vehicle No</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("vehi_no",$vehicleslist,"","class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Make</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="make" id="make" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Model</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="model" id="model" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date of Reg</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="dateof_reg" id="dateof_reg" class="form-control">
                                        </div>       
                                    </div>
                            </div>
                            <div class="col-md-6" style="margin-top:45px">     
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Manufacture year</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="manufacture_year" id="manufacture_year" class="form-control">
                                        </div>       
                                    </div>                              
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Engine Capacity</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="engine_capacity" id="engine_capacity" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Parallel Import</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("parallel_import",array('Yes'=>"Yes",'No'=>"No"),"",'class="form-control"')?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Body Type</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="body_type" id="body_type" class="form-control">
                                        </div>       
                                    </div>
                            </div>
                        </div><!--  -->
                        <div class="row sm_padding"> 
                            <div class="col-md-6">  
                                <p class="formtitle">INSURED PARTICULARS</p>                                  
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Insured Name</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_name" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>NRIC / Passport / FIN</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_nric" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date Of Birth</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="insured_dob" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Marital Status</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_marital_status" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("insured_gender",array(''=>'...','Male'=>"Male",'Female'=>"Female"),"",'class="form-control"')?>
                                        </div>       
                                    </div>
                            </div>
                            <div class="col-md-6" style="margin-top:45px;">                            
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Occupation</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_occupation" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>License Pass Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="insured_licensepassdate" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_email" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Insured Mobile</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_mobile" class="form-control">
                                        </div>       
                                    </div>
                            </div>
                        </div><!--  -->
                        <div class="row sm_padding"> 
                            <div class="col-md-6">  
                                <p class="formtitle">PREVIOUS INSURANCE</p>                                  
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Previous Insurer</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="prev_insurer" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Vehicle No</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("prev_vehino",$prev_vehicleslist,"","class='form-control'")?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>NCD</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="prev_ncd" class="form-control">
                                        </div>       
                                    </div>
                            </div>
                        </div><!--  -->
                        <div class="row sm_padding"> 
                            <div class="col-md-6">  
                                <p class="formtitle">NAMED DRIVER PARTICULARS</p>                                  
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Named Driver</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="driver_name" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>NRIC / Passport / FIN</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="driver_nric" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date Of Birth</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="driver_dob" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Marital Status</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("driver_marital_status",$getmaritalstatus_list,"","class='form-control'")?>
                                        </div>       
                                    </div>
                            </div>
                            <div class="col-md-6" style="margin-top:45px">                                    
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("driver_gender",array(''=>'...','Male'=>"Male",'Female'=>"Female"),"",'class="form-control"')?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Occupation</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("driver_occupation",array(''=>'...','indoor'=>"indoor",'outdoor'=>"outdoor"),"",'class="form-control"')?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>License Pass Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="driver_licensepassdate" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Relationship with Owner</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="driver_relationship" class="form-control">
                                        </div>       
                                    </div>
                            </div>
                        </div><!--  -->
                        <div class="row sm_padding"> 
                            <div class="col-md-6">  
                                <p class="formtitle">CLAIMS HISTORY</p>                                  
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>CLAIM EXP FOR PAST 3 YEARS?</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("claim_exp",array('Yes'=>"Yes",'No'=>"No"),"",'class="form-control"')?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>If YES (Date)</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="claim_expyes_date" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>If YES (Claim AMT)</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="claim_expyes_amt" class="form-control">
                                        </div>       
                                    </div>
                            </div>
                        </div><!--  -->
                        <div class="row sm_padding"> 
                            <div class="col-md-6">                                    
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Signature of Proposal</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="file" name="signof_proposal" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="proposalsign_date" class="form-control">
                                        </div>       
                                    </div>
                            </div>
                            
                        </div><!--  -->
                        <div class="row sm_padding"> 
                            <div class="col-md-12">  
                                <p class="formtitle">Quotation Valid 7-14 Days</p>                                 
                                    <table class="table-sm profitloss" style="width:100%;">
                                          <thead>
                                            <tr>                                      
                                                  <th width="20%">Insurance Com</th>
                                                  <th width="20%">Premium</th>
                                                  <th width="10%">Excess</th>
                                                  <th width="10%">Windscreen Excess</th>
                                                  <th width="10%">Remarks</th>                
                                                  <th width="5%" style="text-align:center !important;">
                                                    <i class="fa fa-plus btn btn-success btn-xs" onclick="quotationcloneform()"></i>
                                                  </th>
                                            </tr>
                                          </thead>
                                        <tbody id="quotation_valid">
                                            <tr class="quotation">                                            
                                                <td><input type="text" name="insurance[]" class="form-control"></td>
                                                <td><input type="text" name="premium[]" class="form-control"></td>
                                                <td><input type="text" name="excess[]" class="form-control"></td>
                                                <td><input type="text" name="windscr[]" class="form-control "></td>
                                                <td><input type="text" name="remark[]" class="form-control "></td>
                                                <td style="text-align:center !important;"><span class='btn btn-danger btn-xs' onclick="removerquotation(event)"> x </span> </td>
                                            </tr>
                                        </tbody>                                    
                                    </table> 
                            </div>
                        </div><!--  -->
                        
                    </div><!-- second -->           
                
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                    <div class="row right">
                        <div class="col-md-12">
                            <a href="customer" class="btn mybtn btn-default">Cancel</a>
                            <button type="submit" class="btn mybtn btn-success">Save</button>
                        </div>                    
                    </div>
            </div>          
            <!-- /.card-footer -->
        </form>
          
          
         
          
          
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
<script>

function searchmakemodel(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"customer/searchmakeandmodel",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                $("#make").val(v.brand_name);
                $("#model").val(v.model_name);
                $("#dateof_reg").val(v.registration_date);
                $("#manufacture_year").val(v.year);
                $("#engine_capacity").val(v.engine_type);
                // $("#body_type").val(v.body_type);
            }
        });
    }
</script>