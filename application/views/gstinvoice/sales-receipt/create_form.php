<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sales Receipt</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('sales_receipt/insert') ?>">
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
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Bill To</label>
                                  </div>
                                  <div class="col-md-7">
                                    <input type="text" name="billto" id="billto" class="form-control">
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
                  </div><!--  -->
                  <div class="row sm_toppadding">
                      <div class="col-md-6">                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Selling price</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="sellingprice" id="sellingprice" class="form-control">
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
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Road Tax ( 1/2 yr) </label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="roadtax" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Insurance Premium</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="insurancepremium" class="form-control">
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
                                      <label>Loan Advance Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanadvpayment" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>TOTAL PAYABLE</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totalpayable" id="totalpayable" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="less" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Deposit</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="deposit" id="deposit" class="form-control">
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6">                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Vehicle No </label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradeinvehino" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Price</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradeinprice" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less Full Settelment Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="fullsetteamt" id="fullsetteamt" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>LOAN AMOUNT</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanamt" id="loanamt" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Amount (%)</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanamtpercent" class="form-control">
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
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>TOTAL DEDUCTION</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totaldeduction" id="totaldeduction" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>BALANCE DUE</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="balancedue" id="balancedue" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Cash/ Cheque no</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chashchequeno" class="form-control">
                                  </div>       
                            </div>
                      </div>
                  </div><!--  -->
                  <div class="row sm_toppadding">
                      <div class="col-md-6">                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle on (Date)</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="vehiondate" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Authorised Signature</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="file" name="signof_author" class="form-control">
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6">                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle on (Time)</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="vehiontime" value="<?php echo mdate('%h:%i %A');?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Signature of Buyer</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="file" name="signof_buyer" class="form-control">
                                  </div>       
                            </div>
                      </div>
                  </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="sales_receipt/" class="btn mybtn btn-default">Cancel</a>
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
  $(document).ready(function() {
      //this calculates values automatically 
      gettotalamt();
      $("#totalpayable, #deposit, #fullsetteamt, #loanamt").on("keydown keyup", function() {
          gettotalamt();
      });
  });
  function gettotalamt() 
  {
        var num1 = document.getElementById('deposit').value;
        var num2 = document.getElementById('fullsetteamt').value;
        var num3 = document.getElementById('loanamt').value;

        var num4 = document.getElementById('totalpayable').value;
      
        var result1 = parseFloat(num1) + parseFloat(num2) + parseFloat(num3);
            if (!isNaN(result1)) {                  
              document.getElementById('totaldeduction').value = result1.toFixed(2);
            }
        var result2 = parseFloat(num4) - parseFloat(result1);
            if (!isNaN(result2)) {                  
              document.getElementById('balancedue').value = result2.toFixed(2);
            }
  }
  function searchvehicles(vehiregno)
    {
        data="vehiregno="+vehiregno;
        $.ajax({
            type:"POST",
            url:"sales_receipt/searchvehicles",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#make").val(v.make);
                $("#model").val(v.model);
                $("#billto").val(v.customer_name);
                $("#address").val(v.customer_address);
                $("#date").val(v.date);
                $("#serialno").val(v.serial_no);
                $("#invoiceno").val(v.invoice_no);
                $("#loanamt").val(v.loan_amt);
                $("#sellingprice").val(v.vehi_invoiceprice);
                
                
            }
        });
    }
</script>