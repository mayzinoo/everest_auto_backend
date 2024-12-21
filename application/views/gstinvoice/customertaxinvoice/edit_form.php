<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Customer Tax Invoice</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('customertaxinvoice/update') ?>">
            <div class="card-body">
            <input type="hidden" name="id" value="<?php echo $customerinvoicedata->id; ?>">
                  <div class="row sm_toppadding">
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Reg No</label>
                                  </div>
                                  <div class="col-md-7">
                                    <?=form_dropdown("vehiregno",$vehilist,$customerinvoicedata->vehireg_no,"class='form-control' onchange=searchvehicles(this.value)")?>
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Make</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="make" value="<?php echo $customerinvoicedata->make; ?>" id="make" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="model" value="<?php echo $customerinvoicedata->model; ?>" id="model" class="form-control">
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Original Reg Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="originalregdate" id="originalregdate" value="<?php echo $customerinvoicedata->original_reg_date; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Engine No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="engineno" id="engineno" value="<?php echo $customerinvoicedata->engine_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Chassis No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chassisno" id="chassisno" value="<?php echo $customerinvoicedata->chassis_no; ?>" class="form-control">
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
                                    <input type="text" name="billto" id="billto" class="form-control" value="<?php echo $customerinvoicedata->billto; ?>">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="address" id="address" class="form-control"><?php echo $customerinvoicedata->address; ?></textarea>
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" value="<?php echo $customerinvoicedata->date; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Serial No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="serialno" id="serialno" value="<?php echo $customerinvoicedata->serial_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Invoice No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="invoiceno" id="invoiceno" value="<?php echo $customerinvoicedata->invoice_no; ?>" class="form-control">
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
                                      <input type="text" name="vehi_invoiceprice" id="vehi_invoiceprice" value="<?php echo $customerinvoicedata->vehi_invoice_price; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Hp Facilities Fees</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="facilitiesfee" value="<?php echo $customerinvoicedata->hp_facilities_fee; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Others - CANOPY</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="others" value="<?php echo $customerinvoicedata->others_canopy; ?>" class="form-control">
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
                                      <input type="text" name="insurancepremium" value="<?php echo $customerinvoicedata->insurance_premium; ?>" class="form-control">
                                  </div>       
                            </div>
                     </div>
                     <div class="col-md-6" style="padding-top:40px">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Advance Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanpayment" value="<?php echo $customerinvoicedata->loan_advance_payment; ?>" class="form-control">
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
                                      <input type="text" name="deposit" id="deposit" value="<?php echo $customerinvoicedata->deposit; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Down/Full Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="downfullpayment" value="<?php echo $customerinvoicedata->down_fullpayment; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Vehicle No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradevehino" value="<?php echo $customerinvoicedata->trade_in_vehino; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Price</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradeprice" value="<?php echo $customerinvoicedata->trade_in_price; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Total Invoice Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totalamt" value="<?php echo $customerinvoicedata->total_invoice_amt; ?>" class="form-control">
                                  </div>       
                            </div>
                     </div>
                     <div class="col-md-6" style="padding-top:40px">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less Full Settelment Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="settelamt" value="<?php echo $customerinvoicedata->lessfull_sette_amt; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less Trade in Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="lesstradeamt" value="<?php echo $customerinvoicedata->leasstrade_amt; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Amount</label>
                                  </div>
                                  <div class="col-md-4">
                                      <input type="text" name="loanamt" value="<?php echo $customerinvoicedata->loan_amt; ?>" class="form-control" placeholder="Amount">
                                  </div>
                                  <div class="col-md-3">
                                      <input type="text" name="percent" value="<?php echo $customerinvoicedata->loan_amt_percent; ?>" class="form-control" placeholder="0.00%">
                                  </div>         
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Finance Company</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="financecmy" value="<?php echo $customerinvoicedata->finance_cmy; ?>" class="form-control">
                                  </div>       
                            </div>
                     </div>
                  </div><!-- end -->

                <div class="col-md-12 smm_toppadding choosepackage">      
                  <p class="formtitle">Inclusive Items</p>
                  <h4 class="new-costdetail"><span class="text-right btn" onclick="inclusivecloneform(event)" style="color:#900C12;"><i class="fa fa-plus"></i> Add New</span>
                  </h4>  
                
                <div id="inclusiveitem">
                  <?php
                  $inclusive = explode('}', $customerinvoicedata->inclusive_items);

                  for($i=1;$i<count($inclusive);$i++)
                  {
                    $inclusiveitem = explode(',', $inclusive[$i-1]);

                       ?>
                        <div class="inclusive row">
                            <div class="col-md-4">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Item</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="item[]" value="<?php echo $inclusiveitem[0];?>" class="form-control">
                                        </div>  
                                    </div>                                    
                            </div>
                            <div class="col-md-4">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="name[]" value="<?php echo $inclusiveitem[1];?>" class="form-control">
                                        </div>  
                                    </div>                                    
                            </div>
                            <div class="col-md-3">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Amount</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="amt[]" value="<?php echo $inclusiveitem[2];?>" class="form-control">
                                        </div>  
                                    </div>                                    
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <span class='btn btn-danger' onclick="removerinclusive(event)" style=""> x </span>
                                </div>  
                            </div>
                        </div> 
                    <?php } ?> 
                </div>
                
                </div> <!-- end cost detail clone --> 
                
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="customertaxinvoice/" class="btn mybtn btn-default">Cancel</a>
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
  function searchvehicles(vehiregno)
    {
        data="vehiregno="+vehiregno;
        $.ajax({
            type:"POST",
            url:"customertaxinvoice/searchvehicles",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#make").val(v.make);
                $("#model").val(v.model);
                $("#billto").val(v.customer_name);
                $("#address").val(v.customer_address);
                $("#date").val(v.date);                
                $("#originalregdate").val(v.originalregdate);  
                $("#chassisno").val(v.chassis_no);
                $("#engineno").val(v.engine_no);
                
                $("#vehi_invoiceprice").val(v.vehi_invoiceprice);
                $("#deposit").val(v.deposit_paid);
                
                $("#serialno").val(v.serial_no);
                $("#invoiceno").val(v.invoice_no);
            }
        });
    }

</script>