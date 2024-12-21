<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>GST Invoice</h1>
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
            <h3 class="card-title">Update Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('gstinvoice/update') ?>">
            <input type="hidden" name="id" value="<?php echo $gstinvoice->id; ?>">
            <div class="card-body">
                  <div class="row sm_toppadding">
                      <div class="col-md-6">      
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Reg No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="vehiregno" value="<?php echo $gstinvoice->vehireg_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Make</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="make" value="<?php echo $gstinvoice->make; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="model" value="<?php echo $gstinvoice->model; ?>" class="form-control">
                                  </div>       
                            </div>                      
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Bill To</label>
                                  </div>
                                  <div class="col-md-7">
                                    <?=form_dropdown("billto",$companylist,$gstinvoice->customer_name,"class='form-control' onchange=searchcompany(this.value)")?>
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea class="form-control" name="address" id="address"><?php echo $gstinvoice->customer_address; ?></textarea>
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Serial No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="serialno" value="<?php echo $gstinvoice->serial_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Invoice No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="invoiceno" value="<?php echo $gstinvoice->invoice_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" value="<?php echo $gstinvoice->date; ?>" class="form-control">
                                  </div>       
                            </div>
                            
                            
                      </div>
                      <div class="col-md-6">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Original Reg Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="originaldate" value="<?php echo $gstinvoice->originalregdate; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Engine No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="engineno" value="<?php echo $gstinvoice->engine_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Chassis No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chassisno" value="<?php echo $gstinvoice->chassis_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Invoice Price</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="vehi_invoiceprice" value="<?php echo $gstinvoice->vehi_invoiceprice; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Deposit paid</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="depositpaid" value="<?php echo $gstinvoice->deposit_paid; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanamt" value="<?php echo $gstinvoice->loan_amt; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Commission</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loancommission" value="<?php echo $gstinvoice->loan_commission; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Incentive</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="incentive" value="<?php echo $gstinvoice->incentive; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>GST</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="gst" value="<?php echo $gstinvoice->gst; ?>" class="form-control">
                                  </div>       
                            </div>
                            
                      </div>
                  </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="gstinvoice/" class="btn mybtn btn-default">Cancel</a>
                          <button type="submit" class="btn mybtn btn-success">Update</button>
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
function searchcompany(cmyname)
    {
        data="cmyname="+cmyname;
        $.ajax({
            type:"POST",
            url:"gstinvoice/searchcompanies",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#address").val(v.address);
                
            }
        });
    }

</script>