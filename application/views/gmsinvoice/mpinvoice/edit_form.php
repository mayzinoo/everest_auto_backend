<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MP Invoice</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('mp_invoice/update') ?>">
            <input type="hidden" name="id" value="<?php echo $mpinvoice->id; ?>">
            <div class="card-body">
                  <div class="row sm_toppadding">
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Reg No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <?=form_dropdown("vehiregno",$vehilist,$mpinvoice->vehireg_no,"class='form-control' onchange=searchvehicles(this.value)")?>
                                      
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Make</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="make" id="make" value="<?php echo $mpinvoice->make; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="model" id="model" value="<?php echo $mpinvoice->model; ?>" class="form-control">
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Original Reg Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="originalregdate" id="originalregdate" value="<?php echo $mpinvoice->originalreg_date; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Engine No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="engineno" id="engineno" value="<?php echo $mpinvoice->engine_no; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Chassis No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chassisno" id="chassisno" value="<?php echo $mpinvoice->chassis_no; ?>" class="form-control">
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
                                      <input type="text" name="billto" id="billto" value="<?php echo $mpinvoice->billto; ?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="address" id="address" class="form-control"><?php echo $mpinvoice->address; ?></textarea>
                                  </div>       
                            </div>
                           
                      </div>
                      <div class="col-md-6">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" id="date" value="<?php echo $mpinvoice->date; ?>" class="form-control">
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
                                      <input type="text" name="vehiinvoiceprice" value="<?php echo $mpinvoice->vehi_invoiceprice; ?>" id="vehiinvoiceprice" class="form-control">
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Deposit Paid</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="deposit" value="<?php echo $mpinvoice->deposit_paid; ?>" id="deposit" class="form-control">
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanamt" value="<?php echo $mpinvoice->loan_amt; ?>" id="loanamt" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Total Invoice Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totalamt" value="<?php echo $mpinvoice->total_amt; ?>" id="totalamt" class="form-control">
                                  </div>       
                            </div>
                            
                     </div>
                     
                  </div><!-- end -->
                
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="mp_invoice/" class="btn mybtn btn-default">Cancel</a>
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
        var num1 = document.getElementById('vehiinvoiceprice').value;
        var num2 = document.getElementById('deposit').value;
      
        var result1 = num1 - num2;
            if (!isNaN(result1)) {                  
              document.getElementById('loanamt').value = result1.toFixed(2);
              document.getElementById('totalamt').value = result1.toFixed(2);
            }
  }
  function searchvehicles(vehiregno)
    {
        data="vehiregno="+vehiregno;
        $.ajax({
            type:"POST",
            url:"mp_invoice/searchvehicles",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#make").val(v.make);
                $("#model").val(v.model);
                $("#originalregdate").val(v.originalregdate);  
                $("#chassisno").val(v.chassis_no);
                $("#engineno").val(v.engine_no);
                $("#vehiinvoiceprice").val(v.vehi_invoiceprice);
                $("#deposit").val(v.deposit_paid);
                $("#billto").val(v.customer_name);
                $("#address").val(v.customer_address);
                $("#date").val(v.date);
            }
        });
    }

</script>