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
            <h3 class="card-title">Create Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('inquote/insert') ?>">
          <div class="card-body">
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
                                        <input type="text" name="saleman" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Insured/Company Name</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="cmyname" class="form-control" required>
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Address</label>
                                    </div>
                                    <div class="col-md-6">
                                        <textarea name="address" class="form-control"></textarea>                                       
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Contact Person </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="contactperson" class="form-control">
                                    </div>       
                                </div>    
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Inquote Type </label>
                                    </div>
                                    <div class="col-md-2">
                                        <input type="checkbox" name="open" class="typechx" required>
                                        <label>Open</label>
                                    </div>  
                                    <div class="col-md-2">
                                        <input type="checkbox" name="close" class="typechx" required>
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
                                        <input type="text" name="phone_hp" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Phone(PG) </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone_pg" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>ROIC/NRIC</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="ic_no" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Contact No</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="contact_no" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Phone(O)</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone_o" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Phone(F)</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="phone_f" class="form-control">
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
                                    <input type="date" name="entrydate" value="<?php echo date('Y-m-d');?>" class="form-control" readonly>
                                </div>    
                                <div class="col-md-5 no_padding" >
                                    <input type="text" name="entrytime" value="<?php echo mdate('%h:%i %A');?>" class="form-control" readonly>
                                </div>   
                            </div> 
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Created By</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="createbyname" class="form-control" value="<?php echo $this->session->userdata("firstname"); ?>" readonly>
                                </div>    
                                <div class="col-md-5 no_padding">
                                    <div class='input-group date'>
                                        <input type='text' name="createbydate" value="<?php echo date('Y-m-d H:i:s');?>" class="form-control" readonly/>
                                    </div>
                                </div>   
                            </div> 
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Modified By</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="modifyname" class="form-control" readonly>
                                </div>    
                                <div class="col-md-5 no_padding">
                                    <div class='input-group date'>
                                        <input type='text' name="modifydate" class="form-control" readonly/> 
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
                                    <?=form_dropdown("vehi_no",$vehicleslist,"","class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Make</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="make" id="make" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-5">
                                    <label>Expiry Date</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="expiry_date" class="form-control">
                                </div>       
                            </div>
                            
                        </div> 
                        <div class="col-md-4">
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Model</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="model" id="model" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Orig Reg Date</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="date" name="reg_date" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Renewal NCD</label>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="renewal_ncd" class="form-control">
                                </div>       
                            </div>
                            
                        </div>
                        <div class="col-md-4">
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Yr Of Mfg</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="yrofmfg" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Ton</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="ton" class="form-control">
                                </div>       
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Coverage Type</label>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="current_convtype" class="form-control" placeholder="Current" required>
                                </div>    
                                <div class="col-md-4 bootstrap-timepicker" >
                                    <input type="text" name="new_convtype" class="form-control" placeholder="New" required>
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
                                <input type="text" name="accidetail1" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="accidetail2" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                            </div>
                            <div class="col-md-7">
                                <input type="text" name="accidetail3" class="form-control">
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
                                <input type="text" name="yearpremium" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote1</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q1" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote2</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q2" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote3</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q3" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote4</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q4" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote5</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q5" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Quote6</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="q6" class="form-control">
                            </div>       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Cur. Ins.Co.</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="cur_insco" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno1" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno2" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno3" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno4" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno5" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="icno6" class="form-control">
                            </div>       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>LastYear Excess</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="yearexcess" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess1</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess1" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess2</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess2" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess3</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess3" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess4</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess4" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess5</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess5" class="form-control">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Excess6</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="excess6" class="form-control">
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
                                    <input type='text' name="datetime" class="form-control" />
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
                                <select class="form-control" name="response" data-placeholder="Consideration">
                                    <option value="">&nbsp;</option>
                                    <?php foreach(consideration_list() as $key => $status) : ?>
                                    <option value="<?= $key ?>"><?= $status ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Call to Who </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="calltowho" class="form-control" placeholder="victoria">
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Description </label>
                            </div>
                            <div class="col-md-6">
                                <textarea name="description" class="form-control" placeholder="more quote"></textarea>
                            </div>       
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Next Action </label>
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" name="nextaction" data-placeholder="Re-Quote">
                                    <option value="">&nbsp;</option>
                                    <?php foreach(requote_list() as $key => $status) : ?>
                                    <option value="<?= $key ?>"><?= $status ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>       
                        </div>
                        <div class="row form-group">
                            <div class="col-md-5">
                                <label>Staff</label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="staff" class="form-control" placeholder="csooi">
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

