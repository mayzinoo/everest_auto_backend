<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicles Cost Sheet Report 3</h1>
            <?php message(); ?>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('costsheetreport3/update') ?>">
          <div class="card-body costsheetreport">
              <div class="row smm_toppadding">                
                    <div class="col-md-6">
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>VEHICLE NUMBER </label>
                                    </div>
                                    <div class="col-md-8">
                                        <?=form_dropdown("vehino",$vehicleslist,"","class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                    </div>                                                   
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>MAKE AND MODEL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="makemodel" id="makemodel" class="form-control">
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Buy Code</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="buycode" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Sell Code</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="sellcode" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>BROKER 1 CODE</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="broker1code" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>BROKER 2 CODE</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="broker2code" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>BROKER 3 CODE</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="broker3code" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>E-OUT DATE</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="eoutdate" class="form-control" >
                                    </div>
                            </div>
                    </div>
                    <div class="col-md-6">
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>PREV VEHICLE NO.</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="prev_vehino" class="form-control">
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>GST</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="gsttxt" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>PURCHASE DATE</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="purchase_date" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>SALES BOOKING DATE</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="salesbooking_date" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>PURCHASE AGREEMENT</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="purchase_agrement" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>SALES AGREEMENT</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="sales_agrement" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>ETS PAPER FROM</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="etspaper_from" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>ETS PAPER TO</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="etspaper_to" class="form-control" >
                                    </div>
                            </div>
                            
                    </div>
                </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12 ">
                        <a href="costsheetreport3/" class="btn mybtn btn-default">Cancel</a>
                        <button type="submit" class="btn mybtn btn-success">Save</button>
                    </div>                    
                </div>
          </div>
          <!-- /.card-footer -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    function searchmakemodel(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"costsheetreport3/searchmakeandmodel",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                $("#makemodel").val(v.makemodel);
                
            }
        });
    }
</script>