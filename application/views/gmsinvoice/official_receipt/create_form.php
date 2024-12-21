<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Official Receipt</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('gms_official_receipt/insert') ?>">
            <div class="card-body">
                  <div class="row sm_toppadding">
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Vehicle Number</label>
                                  </div>
                                  <div class="col-md-7">
                                    <?=form_dropdown("vehino",$vehilist,"","class='form-control' onchange=searchvehicles(this.value)")?>
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Make</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="make" id="make" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="model" id="model" class="form-control">
                                  </div>       
                            </div>                       
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Bill To</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="billto" id="billto" class="form-control">
                                     
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="address" id="address" class="form-control"></textarea>
                                  </div>       
                            </div>                            
                            
                            
                      </div>
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" id="date" class="form-control">
                                  </div>       
                            </div>    
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Chassis No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chassisno" id="chassisno" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Engine No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="engineno" id="engineno" class="form-control">
                                  </div>       
                            </div>
                            
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Original Reg Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="originalregdate" id="originalregdate" class="form-control">
                                  </div>       
                            </div>                           
                            
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="gms_official_receipt/" class="btn mybtn btn-default">Cancel</a>
                          <button type="submit" class="btn mybtn btn-success">Save</button>
                      </div>                  
                  </div>
            </div>
            <!-- card footer -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
function searchvehicles(vehiregno)
    {
        data="vehiregno="+vehiregno;
        $.ajax({
            type:"POST",
            url:"gms_official_receipt/searchvehicles",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#make").val(v.make);
                $("#model").val(v.model);
                $("#originalregdate").val(v.originalregdate);  
                $("#chassisno").val(v.chassis_no);
                $("#engineno").val(v.engine_no);
               
                $("#billto").val(v.customer_name);
                $("#address").val(v.customer_address);
                $("#date").val(v.date);
            }
        });
    }

</script>