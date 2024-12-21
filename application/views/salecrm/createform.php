<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sale CRM</h1>
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
          <div class="card-header">
            <h3 class="card-title">Create Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('sale_crm/insert') ?>">
          <div class="card-body">
                <div class="row sm_toppadding">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>System ID </label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="systemid" class="form-control" readonly>
                        </div>
                    </div>                    
                </div>
                <div class="row sm_toppadding">
                    <div class="col-md-6">
                        <div class="col-md-4">
                            <label>Sale CRM No.</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="salecrmno" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                
                <div class="row sm_toppadding">                
                    <div class="col-md-6">
                        <p class="formtitle">Contact's Information</p>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Title</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" name="title">
                                    <option value="">&nbsp;</option>
                                    <?php foreach(crmtitle_list() as $key => $status) : ?>
                                    <option value="<?= $status ?>"><?= $status ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>  
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Surname</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="surname" class="form-control">
                            </div>       
                        </div>   

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Given Name *</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="givenname" class="form-control" required>
                            </div>       
                        </div> 

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Contact Source *</label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" name="contactsource" required>
                                        <option value="">&nbsp;</option>
                                        <?php foreach($getcontactsource as $cs) : ?>
                                        
                                        <option value="<?= $cs->id ?>"><?= $cs->name ?></option>
                                        
                                        <?php endforeach; ?>
                                    </select>
                            </div>       
                        </div> 

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Advert. Veh No</label>
                            </div>
                            <div class="col-md-6">
                                <?=form_dropdown("vehno",$vehicleslist,"","class='form-control'")?>
                            </div>       
                        </div> 

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Mobile Phone *</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="phone" class="form-control" required>
                            </div>       
                        </div> 


                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Office No.</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="officeno" class="form-control">
                            </div>       
                        </div> 

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Do Not Call</label>
                            </div>
                            <div class="col-md-1">
                                <input type="checkbox" name="donotcall" class="form-control">
                            </div>       
                        </div> 

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="email" class="form-control">
                            </div>       
                        </div>  

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Company Name</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="cmyname" class="form-control">
                            </div>       
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Nature of Business</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="natureofbusiness" class="form-control">
                            </div>       
                        </div>      

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Vehicles</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="vehiown" class="form-control" placeholder="Own">
                            </div>    
                            <div class="col-md-3">
                                <input type="text" name="vehilease" class="form-control" placeholder="Lease">
                            </div>    
                        </div>       
                    </div><!--  -->

                    <div class="col-md-6">
                        <p class="formtitle">Record Section</p>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Saleman</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="saleman" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                            </div>       
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Entry Date</label>
                            </div>
                            <div class="col-md-3">
                                <input type="date" name="entrydate" value="<?php echo date('Y-m-d');?>" class="form-control" readonly>
                            </div>    
                            <div class="col-md-4 bootstrap-timepicker" >
                                <input type="text" name="entrytime" value="<?php echo mdate('%h:%i %A');?>" class="form-control" readonly>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Created By</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="createbyname" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                            </div>    
                            <div class="col-md-4">
                                <div class='input-group date'>
                                    <input type='text' name="createbydate" value="<?php echo date('Y-m-d H:i:s');?>" class="form-control" readonly/>
                                </div>
                            </div>     
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Last Modified By</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="modifyname" class="form-control" readonly>
                            </div>    
                            <div class="col-md-4">
                                <div class='input-group date'>
                                    <input type='text' name="modifydate" class="form-control" readonly/>  
                                </div>
                            </div>       
                        </div>

                        <p class="formtitle">Additional Info.</p>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>ROC/NRIC No.</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nricno" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Address</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="address" class="form-control" placeholder="Address">
                            </div> 
                            <div class="col-md-3">
                                <input type="text" name="postalcode" class="form-control" placeholder="Postal Code">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Billing Address</label>
                            </div>
                            <div class="col-md-3">
                                <input type="text" name="billing_address" class="form-control" placeholder="Address">
                            </div> 
                            <div class="col-md-3">
                                <input type="text" name="billing_postalcode" class="form-control" placeholder="Postal Code">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Fax No.</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="faxno" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Occupation</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="occupation" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>D.O.B (dd/mm/yyyy)</label>
                            </div>
                            <div class="col-md-6">
                                <input type="date" name="dob" class="form-control">
                            </div>       
                        </div>
                    </div><!--  -->
                </div><!-- first row -->

                <div class="row sm_toppadding">                    
                    <div class="col-md-12">
                        <div class="col-md-2 no_padding">
                            <label>Decision Maker </label>
                        </div>
                        <div class="col-md-8" style="padding-left: 5px !important;padding-right: 5px !important;">
                            <div class="row">
                                <div class="col-md-3 no_leftpadding">                                
                                    <input type="text" name="deci_surname" class="form-control" placeholder="Surname">
                                </div>
                                <div class="col-md-3">                                
                                    <input type="text" name="deci_givename" class="form-control" placeholder="Given Name">
                                </div>
                                <div class="col-md-3">                                
                                    <input type="text" name="deci_phone" class="form-control" placeholder="Mobile Phone">
                                </div>
                                <div class="col-md-3">                                
                                    <input type="text" name="deci_email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- end decision maker -->

                    <div class="col-md-12 sm_toppadding">
                        <div class="col-md-2 no_padding">
                            <label>COI</label>
                        </div>
                        <div class="col-md-8" style="padding-left: 5px !important;padding-right: 5px !important;">
                            <div class="row">
                                <div class="col-md-3 no_leftpadding">                                
                                    <input type="text" name="coi_surname" class="form-control" placeholder="Surname">
                                </div>
                                <div class="col-md-3">                                
                                    <input type="text" name="coi_givename" class="form-control" placeholder="Given Name">
                                </div>
                                <div class="col-md-3">                                
                                    <input type="text" name="coi_phone" class="form-control" placeholder="Mobile Phone">
                                </div>
                                <div class="col-md-3">                                
                                    <input type="text" name="coi_email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            
                        </div>
                    </div><!-- end coi -->

                    <div class="col-md-6 sm_toppadding">
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Remarks</label>
                            </div>
                            <div class="col-md-6">
                                <textarea class="form-control" name="remark"></textarea>
                            </div>  
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Vehicle Type</label>
                            </div>
                            <div class="col-md-6">
                                <?=form_dropdown("vehitype",array(''=>'...','Commercial'=>"Commercial",'Pte Vehs'=>"Pte Vehs"),'','class="form-control"')?>
                            </div>  
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>No. of Locations</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="noflocation" class="form-control">
                            </div>  
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>No. of Years In Business</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nofyearbusiness" class="form-control">
                            </div>  
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Staff Strength</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="statffstrength" class="form-control">
                            </div>  
                        </div>

                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Buy/Sell Interest</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="buysellinterest" class="form-control">
                            </div>  
                        </div>
                    </div>
                </div>
                
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12 ">
                        <a href="sale_crm/" class="btn mybtn btn-default">Cancel</a>
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

