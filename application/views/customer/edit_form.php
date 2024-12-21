<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Customer's Data</h1>
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
          
        <form method="post" enctype="multipart/form-data" action="<?php echo site_url('customer/update') ?>">
            <input type="hidden" name="id" value="<?php echo $customer->id;?>">
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
                                                <input type="text" name="registration_no" value="<?php echo $customer->registration_no;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>LOAN PERIOD</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="loan_period" value="<?php echo $customer->loan_period;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>INT RATE</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="loan_rate" value="<?php echo $customer->loan_rate;?>" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6" style="margin-top:45px;">                                 
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>LOAN AMOUNT</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="loan_amt" value="<?php echo $customer->loan_amt;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>PURCHASE PRICE</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="purchase_price" value="<?php echo $customer->purchase_price;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>INSTALLMENT</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="instalment" value="<?php echo $customer->instalment;?>" class="form-control">
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
                                                <input type="text" name="detailsofgoods" value="<?php echo $customer->detailsofgoods;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Chassis No</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="chassisno" value="<?php echo $customer->chassisno;?>" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6" style="margin-top:45px">  
                                        
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Year of Manufacture</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="yearofmanufacture" value="<?php echo $customer->yearofmanufacture;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Engine No</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="engineno" value="<?php echo $customer->engineno;?>" class="form-control">
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
                                                <input type="text" name="finance_period" value="<?php echo $customer->finance_period;?>" class="form-control">
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
                                                <input type="text" name="name" value="<?php echo $customer->name;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>ADDRESS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="address" name="address" value="<?php echo $customer->address;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>NRIC/PASSPORT NO</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="nric" name="nric" value="<?php echo $customer->nric;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>OCCUPATION</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="occupation" name="occupation" value="<?php echo $customer->occupation;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>COMPANY NAME</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="cmy_name" value="<?php echo $customer->cmy_name;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>COMPANY ADDRESS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="cmy_address" value="<?php echo $customer->cmy_address;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>MONTHLY INCOME</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="month_income" value="<?php echo $customer->month_income;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Type of Employment</label>
                                            </div>
                                            <div class="col-md-7">
                                                <?=form_dropdown("typeof_employ",array('Employed'=>'Employed','Self-Employed'=>"Self-Employed",'Others'=>"Others"),$customer->typeof_employ,'class="form-control"')?>
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6" style="margin-top: 45px;">                                   
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>DATE OF BIRTH</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="date" name="dob" value="<?php echo $customer->dob;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Gender</label>
                                            </div>
                                            <div class="col-md-7">
                                                 <?=form_dropdown("hirer_gender",array(''=>'...','Male'=>"Male",'Female'=>"Female"),$customer->hirer_gender,'class="form-control"')?>
                                            </div>       
                                        </div>                                         
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>MARITAL STATUS</label>
                                            </div>
                                            <div class="col-md-7">
                                                 <?=form_dropdown("marital_status",$getmaritalstatus_list,$customer->marital_status,"class='form-control'")?>
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>YEARS OF SERVICE</label>
                                            </div>
                                            <?php
                                                $yearservice = explode(',', $customer->yearof_service);
                                            ?>
                                            <div class="col-md-3">
                                                <input type="text" name="yearof_service_yr" value="<?php echo $yearservice[0];?>" class="form-control" placeholder="yrs">
                                            </div>  
                                            <div class="col-md-4">
                                                <input type="text" name="yearof_service_mth" value="<?php echo $yearservice[1];?>" class="form-control" placeholder="mths">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>EMAIL</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="email" value="<?php echo $customer->email;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>OFC</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="offc" value="<?php echo $customer->offc;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>HP</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="hp" value="<?php echo $customer->hp;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="phone" value="<?php echo $customer->phone;?>" class="form-control">
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
                                                <input type="text" name="guarantor_name" value="<?php echo $customer->guarantor_name;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>ADDRESS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_address" value="<?php echo $customer->guarantor_address;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>NRIC/PASSPORT NO</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_nric" value="<?php echo $customer->guarantor_nric;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>OCCUPATION</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_occupation" value="<?php echo $customer->guarantor_occupation;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>DATE OF BIRTH</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="date" name="guarantor_dob" value="<?php echo $customer->guarantor_dob;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>MARITAL STATUS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <?=form_dropdown("guarantor_marital_status",$getmaritalstatus_list,$customer->guarantor_marital_status,"class='form-control'")?>
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>COMPANY NAME</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_cmyname" value="<?php echo $customer->guarantor_cmyname;?>" class="form-control">
                                            </div>       
                                        </div>                              
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Type of Employment</label>
                                            </div>
                                            <div class="col-md-7">
                                                <?=form_dropdown("guaran_typeof_employ",array('Employed'=>'Employed','Self-Employed'=>"Self-Employed",'Others'=>"Others"),$customer->guaran_typeof_employ,'class="form-control"')?>
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6" style="margin-top:45px">                                 
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>COMPANY ADDRESS</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_cmyaddress" value="<?php echo $customer->guarantor_cmyaddress;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>RELATIONSHIP</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_relationship" value="<?php echo $customer->guarantor_relationship;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>MONTHLY INCOME</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_monthincome" value="<?php echo $customer->guarantor_monthincome;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>YEARS OF SERVICE</label>
                                            </div>
                                            <?php
                                                $guara_yearservice = explode(',', $customer->guarantor_yearofservice);
                                            ?>
                                            <div class="col-md-3">
                                                <input type="text" name="guarantor_yearofservice_yr" value="<?php echo $guara_yearservice[0];?>" class="form-control" placeholder="yrs">
                                            </div> 
                                            <div class="col-md-4">
                                                <input type="text" name="guarantor_yearofservice_mth" value="<?php echo $guara_yearservice[1];?>" class="form-control" placeholder="mths">
                                            </div>      
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>EMAIL</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_email" value="<?php echo $customer->guarantor_email;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>OFC</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_offc" value="<?php echo $customer->guarantor_offc;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>HP</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_hp" value="<?php echo $customer->guarantor_hp;?>" class="form-control">
                                            </div>       
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" name="guarantor_phone" value="<?php echo $customer->guarantor_phone;?>" class="form-control">
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
                                                <?php if($customer->signof_hirer!=""){ ?>
                                                <img src="<?php echo base_url() .'upload/sign/'.$customer->signof_hirer;?>" class="img-responsive" style="width:100px;height:auto;">
                                                <?php }else{ ?>
                                                       No Photo
                                                <?php } ?>
                                                <input type="file" name="signof_hirer" value="<?php echo $customer->signof_hirer;?>" class="form-control">
                                            </div>       
                                        </div>
                                </div>
                                <div class="col-md-6">     
                                        <div class="row form-group">
                                            <div class="col-md-4">
                                                <label>Sign of Guarantor</label>
                                            </div>
                                            <div class="col-md-7">
                                                <?php if($customer->signof_guarantor!=""){ ?>
                                                <img src="<?php echo base_url() .'upload/sign/'.$customer->signof_guarantor;?>" class="img-responsive" style="width:100px;height:auto;">
                                                <?php }else{ ?>
                                                       No Photo
                                                <?php } ?>
                                                <input type="file" name="signof_guarantor" value="<?php echo $customer->signof_guarantor;?>" class="form-control">
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
                                            <input type="text" name="tto" value="<?php echo $customer->tto;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Tel</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="tel" value="<?php echo $customer->tel;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Fax</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="fax" value="<?php echo $customer->fax;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Reply Person</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="reply_person" value="<?php echo $customer->reply_person;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="eapl_date" value="<?php echo $customer->eapl_date;?>" class="form-control">
                                        </div>       
                                    </div>                                
                            </div>
                            <div class="col-md-6">    
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Salesperson</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesperson" value="<?php echo $customer->salesperson;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Mobile (Salesperson)</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesperson_mobile" value="<?php echo $customer->salesperson_mobile;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Fax</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesperson_fax" value="<?php echo $customer->salesperson_fax;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="salesperson_email" value="<?php echo $customer->salesperson_email;?>" class="form-control">
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
                                            <?=form_dropdown("vehi_no",$vehicleslist,$customer->vehi_no,"class='form-control' onchange=searchmakemodel(this.value)")?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Make</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="make" id="make" value="<?php echo $customer->make;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Model</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="model" id="model" value="<?php echo $customer->model;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date of Reg</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="dateof_reg" id="dateof_reg" value="<?php echo $customer->dateof_reg;?>" class="form-control">
                                        </div>       
                                    </div>
                                    
                            </div>
                            <div class="col-md-6" style="margin-top:45px">   
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Manufacture year</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="manufacture_year" id="manufacture_year" value="<?php echo $customer->manufacture_year;?>" class="form-control">
                                        </div>       
                                    </div>                                
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Engine Capacity</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="engine_capacity" id="engine_capacity" value="<?php echo $customer->engine_capacity;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Parallel Import</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("parallel_import",array('Yes'=>"Yes",'No'=>"No"),$customer->parallel_import,'class="form-control"')?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Body Type</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="body_type" id="body_type" value="<?php echo $customer->body_type;?>" class="form-control">
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
                                            <input type="text" name="insured_name" value="<?php echo $customer->insured_name;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>NRIC / Passport / FIN</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_nric" value="<?php echo $customer->insured_nric;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date Of Birth</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="insured_dob" value="<?php echo $customer->insured_dob;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Marital Status</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("insured_marital_status",$getmaritalstatus_list,$customer->insured_marital_status,"class='form-control'")?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("insured_gender",array(''=>'...','Male'=>"Male",'Female'=>"Female"),$customer->insured_gender,'class="form-control"')?>
                                        </div>       
                                    </div>
                            </div>
                            <div class="col-md-6" style="margin-top:45px;">                            
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Occupation</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_occupation" value="<?php echo $customer->insured_occupation;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>License Pass Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="insured_licensepassdate" value="<?php echo $customer->insured_licensepassdate;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_email" value="<?php echo $customer->insured_email;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Insured Mobile</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="insured_mobile" value="<?php echo $customer->insured_mobile;?>" class="form-control">
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
                                            <input type="text" name="prev_insurer" value="<?php echo $customer->prev_insurer;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Vehicle No</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("prev_vehino",$prev_vehicleslist,$customer->prev_vehino,"class='form-control'")?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>NCD</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="prev_ncd" value="<?php echo $customer->prev_ncd;?>" class="form-control">
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
                                            <input type="text" name="driver_name" value="<?php echo $customer->driver_name;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>NRIC / Passport / FIN</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="driver_nric" value="<?php echo $customer->driver_nric;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date Of Birth</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="driver_dob" value="<?php echo $customer->driver_dob;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Marital Status</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("driver_marital_status",$getmaritalstatus_list,$customer->driver_marital_status,"class='form-control'")?>
                                        </div>       
                                    </div>
                            </div>
                            <div class="col-md-6" style="margin-top:45px">                                    
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Gender</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("driver_gender",array(''=>'...','Male'=>"Male",'Female'=>"Female"),$customer->driver_gender,'class="form-control"')?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Occupation</label>
                                        </div>
                                        <div class="col-md-7">
                                            <?=form_dropdown("driver_occupation",array(''=>'...','indoor'=>"indoor",'outdoor'=>"outdoor"),$customer->driver_occupation,'class="form-control"')?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>License Pass Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="driver_licensepassdate" value="<?php echo $customer->driver_licensepassdate;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Relationship with Owner</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="driver_relationship" value="<?php echo $customer->driver_relationship;?>" class="form-control">
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
                                            <?=form_dropdown("claim_exp",array('Yes'=>"Yes",'No'=>"No"),$customer->claim_exp,'class="form-control"')?>
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>If YES (Date)</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="claim_expyes_date" value="<?php echo $customer->claim_expyes_date;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>If YES (Claim AMT)</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="text" name="claim_expyes_amt" value="<?php echo $customer->claim_expyes_amt;?>" class="form-control">
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
                                            <?php if($customer->signof_proposal!=""){ ?>
                                            <img src="<?php echo base_url() .'upload/sign/'.$customer->signof_proposal;?>" class="img-responsive" style="width:100px;height:auto;">
                                            <?php }else{ ?>
                                                   No Photo
                                            <?php } ?>
                                            <input type="file" name="signof_proposal" value="<?php echo $customer->signof_proposal;?>" class="form-control">
                                        </div>       
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Date</label>
                                        </div>
                                        <div class="col-md-7">
                                            <input type="date" name="proposalsign_date" value="<?php echo $customer->proposalsign_date;?>" class="form-control">
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
                                            <?php                                
                                            $quota = explode('}', $customer->quotation_valid);
                                            for($i=1;$i<count($quota);$i++)
                                            {
                                              $quotation = explode(',',$quota[$i-1]);
                                            ?>
                                            <tr class="quotation">                                            
                                                <td><input type="text" name="insurance[]" value="<?php echo $quotation[0];?>" class="form-control"></td>
                                                <td><input type="text" name="premium[]" value="<?php echo $quotation[1];?>" class="form-control"></td>
                                                <td><input type="text" name="excess[]" value="<?php echo $quotation[2];?>" class="form-control"></td>
                                                <td><input type="text" name="windscr[]" value="<?php echo $quotation[3];?>" class="form-control"></td>
                                                <td><input type="text" name="remark[]" value="<?php echo $quotation[4];?>" class="form-control"></td>
                                                <td style="text-align:center !important;"><span class='btn btn-danger btn-xs' onclick="removerquotation(event)"> x </span> </td>
                                            </tr>
                                            <?php } ?> 
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
                            <button type="submit" class="btn mybtn btn-success">Update</button>
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