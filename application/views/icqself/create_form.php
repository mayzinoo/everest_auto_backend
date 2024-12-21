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
            <h3 class="card-title">Create Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('icqself/insert') ?>">
          <div class="card-body">
                
                <div class="row sm_padding">                    
                        <div class="col-md-6">  
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Customer/Company Name </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="cmyname" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>IC/ROC No.</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="icno" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Vehicle No. </label>
                                    </div>
                                    <div class="col-md-6">
                                        <?=form_dropdown("vehino",$vehicleslist,"","class='form-control' id='vehino'")?>
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Insurance Company </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="insurancecmy" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Policy No.</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="policyno" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Period Of Insurance (POI)</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="date" name="poi_start" placeholder="bb" class="form-control">
                                    </div>  
                                    <div class="col-md-3">
                                        <input type="date" name="poi_end" class="form-control">
                                    </div>       
                                </div> 
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Type Of Coverage </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="typeofcoverage" class="form-control">
                                    </div>       
                                </div>
                                <div class="row form-group">
                                    <div class="col-md-5">
                                        <label>Salesman </label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="saleman" class="form-control">
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
