<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Current Renewal</h1>
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
            <h3 class="card-title">Edit Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('inquote/update') ?>">
          <div class="card-body">
                
            <input type="hidden" name="id" value="<?php echo $renewaldata->id; ?>">
                <div class="row sm_padding"> 
                        <div class="col-md-12">
                            <p class="formtitle">Customer Details</p>   
                        </div>                    
                        <div class="col-md-4">  
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Salesman </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="saleman" value="<?php echo $renewaldata->salesman; ?>" class="form-control" readonly>
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Insured/Company Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="cmyname" value="<?php echo $renewaldata->cmyname; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="address" class="form-control"><?php echo $renewaldata->address; ?></textarea>                                       
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Contact Person </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="contactperson" value="<?php echo $renewaldata->contact_person; ?>" class="form-control">
                                    </div>       
                                </div>    
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Inquote Type </label>
                                    </div>
                                    <div class="col-md-2">
                                        <?php if ($renewaldata->open_renewal == 'on') { ?>
                                            <input type="checkbox" name="open" checked class="typechx">
                                        <?php }else{ ?>
                                            <input type="checkbox" name="open" class="typechx">
                                        <?php } ?>
                                        <label>Open</label>
                                    </div>  
                                    <div class="col-md-2">
                                        <?php if ($renewaldata->close_renewal == 'on') { ?>
                                            <input type="checkbox" name="close" checked class="typechx">
                                        <?php }else{ ?>
                                            <input type="checkbox" name="close" class="typechx">
                                        <?php } ?>
                                        
                                        <label>Close</label>
                                    </div>     
                                </div>                              
                        </div>
                        <div class="col-md-4">  
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Phone(HP) </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone_hp" value="<?php echo $renewaldata->phone_hp; ?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Phone(PG) </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone_pg" value="<?php echo $renewaldata->phone_pg; ?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>ROIC/NRIC</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="ic_no" value="<?php echo $renewaldata->ic_no; ?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Contact No</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="contact_no" value="<?php echo $renewaldata->contact_no; ?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Phone(O)</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone_o" value="<?php echo $renewaldata->phone_o; ?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Phone(F)</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone_f" value="<?php echo $renewaldata->phone_f; ?>" class="form-control">
                                    </div>       
                                </div> 
                        </div>
                        <div class="col-md-4"> 
                        <p class="formtitle">Record Section </p>    
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Entry Date</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="date" name="entrydate" value="<?php echo $renewaldata->entry_date; ?>" class="form-control" readonly>
                                </div>    
                                <div class="col-md-5 bootstrap-timepicker no_padding" >
                                    <input type="text" name="entrytime" value="<?php echo $renewaldata->entry_time; ?>" class="form-control" readonly>
                                </div>    
                            </div> 
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Created By</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="createbyname" class="form-control" value="<?php echo $renewaldata->created_name; ?>" readonly>
                                </div>    
                                <div class="col-md-5 no_padding">
                                    <div class='input-group date'>
                                        <input type='text' name="createbydate" value="<?php echo $renewaldata->created_date; ?>" class="form-control" readonly/>
                                    </div>
                                </div>
                                 
                            </div> 
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Modified By</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="modifyname" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                                </div>    
                                <div class="col-md-5 no_padding">
                                    <div class='input-group date'>
                                        <input type='text' name="modifydate" value="<?php echo date('Y-m-d H:i:s'); ?>" class="form-control" readonly/>  
                                    </div>
                                </div>   
                                  
                            </div> 
                        </div>
                </div><!-- end -->


                <div class="row sm_toppadding"> 
                        <div class="col-md-12">
                            <p class="formtitle">Vehicle Details </p>   
                        </div>
                        <div class="col-md-4">
                            <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Vehicle No</label>
                                </div>
                                <div class="col-md-6">
                                    <?=form_dropdown("vehi_no",$vehicleslist,$renewaldata->vehicle_no,"class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                    
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Make</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="make" id="make" value="<?php echo $renewaldata->brand; ?>" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Expiry Date</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="expiry_date" value="<?php echo $renewaldata->expire_date; ?>" class="form-control">
                                </div>       
                            </div>
                            
                        </div> 
                        <div class="col-md-4">
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Model</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="model" id="model" value="<?php echo $renewaldata->model; ?>" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Orig Reg Date</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="reg_date" value="<?php echo $renewaldata->orig_regdate; ?>" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Renewal NCD</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="renewal_ncd" value="<?php echo $renewaldata->renewal_ncd; ?>" class="form-control">
                                </div>       
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Yr Of Mfg</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="yrofmfg" value="<?php echo $renewaldata->yrofmfg; ?>" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Ton</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="ton" value="<?php echo $renewaldata->ton; ?>" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Coverage Type</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="current_convtype" value="<?php echo $renewaldata->current_coverage_type; ?>" class="form-control" placeholder="Current">
                                </div>    
                                <div class="col-md-4" >
                                    <input type="text" name="new_convtype" value="<?php echo $renewaldata->new_coverage_type; ?>" class="form-control" placeholder="New">
                                </div>      
                            </div>
                        </div> 
                </div><!-- end -->
                
                
                <div class="row sm_toppadding">
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Accident Details</label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="accidetail1" value="<?php echo $renewaldata->accident_detail1; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="accidetail2" value="<?php echo $renewaldata->accident_detail2; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="accidetail3" value="<?php echo $renewaldata->accident_detail3; ?>" class="form-control">
                            </div>       
                        </div>
                    </div>
                    
                </div><!-- end -->

                <div class="row sm_toppadding">
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Last Year Premium</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="yearpremium" value="<?php echo $renewaldata->lastyear_premium; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote1</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q1" value="<?php echo $renewaldata->q1; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote2</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q2" value="<?php echo $renewaldata->q2; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote3</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q3" value="<?php echo $renewaldata->q3; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote4</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q4" value="<?php echo $renewaldata->q4; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote5</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q5" value="<?php echo $renewaldatarenewaldata->q5; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote6</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q6" value="<?php echo $renewaldatarenewaldata->q6; ?>" class="form-control">
                            </div>       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Cur. Ins.Co.</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="cur_insco" value="<?php echo $renewaldata->current_ins_co; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno1" value="<?php echo $renewaldata->ins_co1; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno2" value="<?php echo $renewaldata->ins_co2; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno3" value="<?php echo $renewaldata->ins_co3; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno4" value="<?php echo $renewaldata->ins_co4; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno5" value="<?php echo $renewaldata->ins_co5; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno6" value="<?php echo $renewaldata->ins_co6; ?>" class="form-control">
                            </div>       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>LastYear Excess</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="yearexcess" value="<?php echo $renewaldata->lastyear_excess; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess1</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess1" value="<?php echo $renewaldata->excess1; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess2</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess2" value="<?php echo $renewaldata->excess2; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess3</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess3" value="<?php echo $renewaldata->excess3; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess4</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess4" value="<?php echo $renewaldata->excess4; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess5</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess5" value="<?php echo $renewaldata->excess5; ?>" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess6</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess6" value="<?php echo $renewaldata->excess6; ?>" class="form-control">
                            </div>       
                        </div>
                    </div>
                </div><!-- end -->


                <div class="row sm_toppadding">
                    <div class="col-md-12">
                        <p class="formtitle">Call Log</p>   
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Date&Time</label>
                            </div>
                            <div class="col-md-6">
                                <div class='input-group date' id='datetimepicker2'>
                                    <input type='text' name="datetime" value="<?php echo $renewaldata->datetime; ?>" class="form-control" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>   
                                </div>
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Response </label>
                            </div>
                            <div class="col-md-6">
                                <?=form_dropdown("response",$getconsideration_list,$renewaldata->responsekey,"class='form-control'")?>
                            </div>       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Call to Who </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="calltowho" value="<?php echo $renewaldata->calltowho; ?>" class="form-control" placeholder="victoria">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Description </label>
                            </div>
                            <div class="col-md-6">
                                <textarea name="description" class="form-control"><?php echo $renewaldata->description; ?></textarea>
                            </div>       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Next Action </label>
                            </div>
                            <div class="col-md-6">
                                <?=form_dropdown("nextaction",$getnextaction_list,$renewaldata->nextaction,"class='form-control'")?>
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Staff</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="staff" value="<?php echo $renewaldata->staff; ?>" class="form-control" placeholder="csooi">
                            </div>       
                        </div>
                    </div>

                </div><!-- end -->
                
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                        <a href="inquote/open_renewal" class="btn btn-default mybtn">Cancel</a>
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

<script type="text/javascript">
    function searchmakemodel(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"inquote/searchmakeandmodel",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                $("#make").val(v.brand_name);
                $("#model").val(v.model_name);
                
            }
        });
    }
</script>