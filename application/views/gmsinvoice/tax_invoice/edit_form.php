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
            <h3 class="card-title">Update Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('gms_tax_invoice/update') ?>">
            <div class="card-body">
            <input type="hidden" name="id" value="<?php echo $taxinvoice->id; ?>">
                  <div class="row sm_toppadding">
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Reg No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <?=form_dropdown("vehiregno",$vehilist,$taxinvoice->vehireg_no,"class='form-control' onchange=searchvehicles(this.value)")?>
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Make</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="make" value="<?php echo $taxinvoice->make; ?>" id="make" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="model" value="<?php echo $taxinvoice->model; ?>" id="model" class="form-control">
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Original Reg Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="originalregdate" id="originalregdate" value="<?php echo $taxinvoice->original_reg_date; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Engine No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="engineno" id="engineno" value="<?php echo $taxinvoice->engine_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Chassis No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chassisno" id="chassisno" value="<?php echo $taxinvoice->chassis_no; ?>" class="form-control">
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
                                    <input type="text" name="billto" id="billto" value="<?php echo $taxinvoice->billto; ?>" class="form-control">
                                      <!-- <?=form_dropdown("billto",$customerlist,$customerinvoicedata->billto,"class='form-control' onchange=searchhirer(this.value)")?> -->
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="address" id="address" class="form-control"><?php echo $taxinvoice->address; ?></textarea>
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" id="date" value="<?php echo $taxinvoice->date; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Serial No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="serialno" id="serialno" value="<?php echo $taxinvoice->serial_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Invoice No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="invoiceno" id="invoiceno" value="<?php echo $taxinvoice->invoice_no; ?>" class="form-control">
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
                                      <input type="text" name="vehi_invoiceprice" id="vehi_invoiceprice" value="<?php echo $taxinvoice->vehi_invoice_price; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Hp Facilities Fees</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="facilitiesfee" value="<?php echo $taxinvoice->hp_facilities_fee; ?>" class="form-control">
                                  </div>       
                            </div>
                             <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>LTA transfer fee</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="ltatransferfee" value="<?php echo $taxinvoice->lta_transferfee; ?>" class="form-control">
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
                                      <input type="text" name="insurancepremium" value="<?php echo $taxinvoice->insurance_premium; ?>" class="form-control">
                                  </div>       
                            </div>
                     </div>
                     <div class="col-md-6" style="padding-top:40px">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Advance Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanpayment" value="<?php echo $taxinvoice->loan_advance_payment; ?>" class="form-control">
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
                                      <input type="text" name="deposit" value="<?php echo $taxinvoice->deposit; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Down/Full Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="downfullpayment" value="<?php echo $taxinvoice->down_fullpayment; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Vehicle No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradevehino" value="<?php echo $taxinvoice->trade_in_vehino; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Price</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradeprice" value="<?php echo $taxinvoice->trade_in_price; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Total Invoice Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totalamt" value="<?php echo $taxinvoice->total_invoice_amt; ?>" class="form-control">
                                  </div>       
                            </div>
                     </div>
                     <div class="col-md-6" style="padding-top:40px">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less Full Settelment Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="settelamt" value="<?php echo $taxinvoice->lessfull_sette_amt; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less Trade in Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="lesstradeamt" value="<?php echo $taxinvoice->leasstrade_amt; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Amount</label>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" name="loanamt" value="<?php echo $taxinvoice->loan_amt; ?>" class="form-control" placeholder="Amount">
                                  </div>
                                  <div class="col-md-3">
                                      <input type="text" name="percent" value="<?php echo $taxinvoice->loan_amt_percent; ?>" class="form-control" placeholder="0.00%">
                                  </div>         
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Finance Company</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="financecmy" value="<?php echo $taxinvoice->finance_cmy; ?>" class="form-control">
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