<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insurance Coverage Quote (ICQ)(Self)</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('icqself/update') ?>">
          <div class="card-body">
            <input type="hidden" name="id" value="<?php echo $icqselfdata->id;?>">
                <div class="row sm_padding">                    
                        <div class="col-md-6">  
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Customer/Company Name </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="cmyname" value="<?php echo $icqselfdata->cmyname;?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>IC/ROC No.</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="icno" value="<?php echo $icqselfdata->ic_no;?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Vehicle No. </label>
                                    </div>
                                    <div class="col-md-6">
                                        <?=form_dropdown("vehino",$vehicleslist,$icqselfdata->vehicle_no,"class='form-control' id='vehino'")?>
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Insurance Company </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="insurancecmy" value="<?php echo $icqselfdata->insurance_cmy;?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Policy No.</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="policyno" value="<?php echo $icqselfdata->policy_no;?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Period Of Insurance (POI)</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="poi_start" value="<?php echo $icqselfdata->poi_startdate;?>" class="form-control">
                                    </div>  
                                    <div class="col-md-3">
                                        <input type="date" name="poi_end" value="<?php echo $icqselfdata->poi_enddate;?>" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Type Of Coverage </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="typeofcoverage" value="<?php echo $icqselfdata->typeofcoverage;?>" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Salesman </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="saleman" value="<?php echo $icqselfdata->saleman;?>" class="form-control">
                                    </div>       
                                </div>
                        </div>
                </div>
                
            
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12">
                            <a href="icqself/" class="btn btn-default mybtn">Cancel</a>
                            <button type="submit" class="btn mybtn btn-success">Save</button>
                    </div>
                </div>
          <!-- /.card-footer -->
            </div>
        </form>
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
