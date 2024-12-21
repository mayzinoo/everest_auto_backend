<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tax Invoice</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('gms_tax_invoice/insert') ?>">
            <div class="card-body">
                  <div class="row sm_toppadding">
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Reg No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <?=form_dropdown("vehiregno",$vehilist,"","class='form-control' onchange=searchvehicles(this.value)")?>
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
                      </div>
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Original Reg Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="originalregdate" id="originalregdate" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Engine No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="engineno" id="engineno" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Chassis No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chassisno" id="chassisno" class="form-control">
                                  </div>       
                            </div>
                      </div>
                  </div><!-- end -->
                  <div class="row sm_toppadding">
                      <div class="col-md-6">                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Bill To</label>
                                  </div>
                                  <div class="col-md-7">
                                    <input type="text" name="billto" id="billto" class="form-control">
                                      <!-- <?=form_dropdown("billto",$customerlist,"","class='form-control' onchange=searchhirer(this.value)")?> -->
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="address" id="address" class="form-control"></textarea>
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" id="date" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Serial No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="serialno" id="serialno" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Invoice No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="invoiceno" id="invoiceno" class="form-control">
                                  </div>       
                            </div>
                      </div>
                  </div><!-- end -->

                  

                  <div class="row sm_toppadding">
                     <div class="col-md-6">
                      <p class="formtitle">Description</p>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Invoice Price</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="vehi_invoiceprice" id="vehi_invoiceprice" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Hp Facilities Fees</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="facilitiesfee" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>LTA transfer fee</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="ltatransferfee" class="form-control">
                                  </div>       
                            </div>
                     </div>
                  </div><!-- end -->

                 
                  <div class="row sm_toppadding">
                     <div class="col-md-6">
                      <p class="formtitle">Fees received on behalf of other agency and company</p>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Insurance Premium</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="insurancepremium" class="form-control">
                                  </div>       
                            </div>
                     </div>
                     <div class="col-md-6" style="padding-top:40px">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Advance Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanpayment" class="form-control">
                                  </div>       
                            </div>
                     </div>
                  </div><!-- end -->
                  <div class="row sm_toppadding">
                     <div class="col-md-6">
                      <p class="formtitle">Payment Details</p>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Deposit</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="deposit" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Down/Full Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="downfullpayment" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Vehicle No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradevehino" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Price</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradeprice" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Total Invoice Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totalamt" class="form-control">
                                  </div>       
                            </div>
                     </div>
                     <div class="col-md-6" style="padding-top:40px">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less Full Settelment Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="settelamt" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less Trade in Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="lesstradeamt" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Amount</label>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" name="loanamt" class="form-control" placeholder="Amount">
                                  </div>
                                  <div class="col-md-3">
                                      <input type="text" name="percent" class="form-control" placeholder="0.00%">
                                  </div>         
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Finance Company</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="financecmy" class="form-control">
                                  </div>       
                            </div>
                     </div>
                  </div><!-- end -->

               
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="gms_tax_invoice/" class="btn mybtn btn-default">Cancel</a>
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
  function searchhirer(hirername)
    {
        data="hirername="+hirername;
        $.ajax({
            type:"POST",
            url:"customertaxinvoice/searchhirer",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#serialno").val(v.serial_no);
                $("#invoiceno").val(v.invoice_no);
                $("#address").val(v.customer_address);
                $("#originalregdate").val(v.originalregdate);
                $("#vehiregno").val(v.vehireg_no);
                $("#engineno").val(v.engine_no);
                $("#chassisno").val(v.chassis_no);
                $("#make").val(v.make);
                $("#model").val(v.model);
                $("#vehi_invoiceprice").val(v.vehi_invoiceprice);
            }
        });
    }
    function searchvehicles(vehiregno)
    {
        data="vehiregno="+vehiregno;
        $.ajax({
            type:"POST",
            url:"gms_tax_invoice/searchvehicles",
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
                $("#serialno").val(v.serial_no);
                $("#invoiceno").val(v.invoice_no);
            }
        });
    }
</script>