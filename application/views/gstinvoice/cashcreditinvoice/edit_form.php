<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cash & Credit Invoice</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('cash_creditinvoice/update') ?>">
            <input type="hidden" name="id" value="<?php echo $creditcashinvoice->id; ?>">
            <div class="card-body">
                  <div class="row sm_toppadding">
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Reg No</label>
                                  </div>
                                  <div class="col-md-7">
                                    <?=form_dropdown("vehiregno",$vehilist,$creditcashinvoice->vehireg_no,"class='form-control' onchange=searchvehicles(this.value)")?>
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Make</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="make" id="make" value="<?php echo $creditcashinvoice->make; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="model" id="model" value="<?php echo $creditcashinvoice->model; ?>" class="form-control">
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Original Reg Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="originalregdate" id="originalregdate" value="<?php echo $creditcashinvoice->originalreg_date; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Engine No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="engineno" id="engineno" value="<?php echo $creditcashinvoice->engine_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Chassis No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chassisno" id="chassisno" value="<?php echo $creditcashinvoice->chassis_no; ?>" class="form-control">
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
                                      <input type="text" name="billto" id="billto" value="<?php echo $creditcashinvoice->billto; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="address" id="address" class="form-control"><?php echo $creditcashinvoice->address; ?></textarea>
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" id="date" value="<?php echo $creditcashinvoice->date; ?>" class="form-control">
                                  </div>       
                            </div>
                            
                      </div>
                      <div class="col-md-6">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Serial No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="serialno" id="serialno" value="<?php echo $creditcashinvoice->serial_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Invoice No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="invoiceno" id="invoiceno" value="<?php echo $creditcashinvoice->invoice_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Hirer</label>
                                  </div>
                                  <div class="col-md-7">
                                    <?=form_dropdown("hirer",$companylist,$creditcashinvoice->hirer,"class='form-control' onchange=searchcompany(this.value)")?>
                                  </div>       
                            </div>
                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Hirer Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="hireraddress" id="hireraddress" class="form-control"><?php echo $creditcashinvoice->hirer_address; ?></textarea>
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
                                      <input type="text" name="vehi_invoiceprice" id="vehi_invoiceprice" value="<?php echo $creditcashinvoice->vehi_invoiceprice; ?>" class="form-control">
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
                                      <input type="text" name="insurancepremium" value="<?php echo $creditcashinvoice->insurance_premium; ?>" class="form-control">
                                  </div>       
                            </div>
                     </div>
                     <div class="col-md-6" style="padding-top:40px">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Advance Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanpayment" value="<?php echo $creditcashinvoice->loan_advpayment; ?>" class="form-control">
                                  </div>       
                            </div>
                     </div>
                  </div><!-- end -->
                  <div class="row sm_toppadding">
                     <div class="col-md-6">
                      <p class="formtitle">Payment Details</p>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="less" value="<?php echo $creditcashinvoice->less; ?>" class="form-control">
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Deposit</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="deposit" value="<?php echo $creditcashinvoice->deposit; ?>" id="deposit" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Total Invoice Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totalamt" id="totalamt" value="<?php echo $creditcashinvoice->total_amt; ?>" class="form-control">
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
                  $inclusive = explode('}', $creditcashinvoice->inclusive_items);

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
                          <a href="cash_creditinvoice/" class="btn mybtn btn-default">Cancel</a>
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
  $(document).ready(function() {
      //this calculates values automatically 
      gettotalamt();
      $("#vehi_invoiceprice, #deposit").on("keydown keyup", function() {

          gettotalamt();
      });
  });
  function gettotalamt() 
  {
        var num1 = document.getElementById('vehi_invoiceprice').value;
        var num2 = document.getElementById('deposit').value;
      
        var result1 = num1 - num2;
            if (!isNaN(result1)) {                  
              document.getElementById('totalamt').value = result1.toFixed(2);
            }
  }
  function searchvehicles(vehiregno)
    {
    
        data="vehiregno="+vehiregno;
        $.ajax({
            type:"POST",
            url:"cash_creditinvoice/searchvehicles",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#make").val(v.make);
                $("#model").val(v.model);
                $("#originalregdate").val(v.originalregdate);  
                $("#chassisno").val(v.chassis_no);
                $("#engineno").val(v.engine_no);
                $("#vehi_invoiceprice").val(v.vehi_invoiceprice);
                $("#deposit").val(v.deposit_paid);
                $("#billto").val(v.customer_name);
                $("#address").val(v.customer_address);
                $("#date").val(v.date);
                $("#serialno").val(v.serial_no);
                $("#invoiceno").val(v.invoice_no);
            }
        });
    }
    function searchcompany(cmyname)
    {
        data="cmyname="+cmyname;
        $.ajax({
            type:"POST",
            url:"cash_creditinvoice/searchcompanies",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#hireraddress").val(v.address);
                
            }
        });
    }
</script>