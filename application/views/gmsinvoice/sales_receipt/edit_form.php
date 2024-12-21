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
            <h3 class="card-title">Update Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('gms_sales_receipt/update') ?>">
            <input type="hidden" name="id" value="<?php echo $salesreceipt->id;?>">
            <div class="card-body">
                  <div class="row sm_toppadding">
                      <div class="col-md-6">   
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle Reg No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <?=form_dropdown("vehiregno",$vehilist,$salesreceipt->vehiregno,"class='form-control' onchange=searchvehicles(this.value)")?>
                                  </div>       
                            </div>  
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Make</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="make" id="make" value="<?php echo $salesreceipt->make;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="model" id="model" value="<?php echo $salesreceipt->model;?>" class="form-control">
                                  </div>       
                            </div>                       
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Bill To</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="billto" id="billto" value="<?php echo $salesreceipt->billto;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="address" id="address" class="form-control"><?php echo $salesreceipt->address;?></textarea>
                                  </div>       
                            </div>
                            
                      </div>
                      <div class="col-md-6">                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" id="date" value="<?php echo $salesreceipt->date;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Serial No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="serialno" id="serialno" value="<?php echo $salesreceipt->serial_no;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Invoice No</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="invoiceno" id="invoiceno" value="<?php echo $salesreceipt->invoice_no;?>" class="form-control">
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
                                      <input type="text" name="sellingprice" value="<?php echo $salesreceipt->selling_price;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>LTA transfer fee</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="ltatransferfee" value="<?php echo $salesreceipt->ltatransfer_fee;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Road Tax ( 1/2 yr) </label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="roadtax" value="<?php echo $salesreceipt->roadtax;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Insurance Premium</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="insurancepremium" value="<?php echo $salesreceipt->insurance_premium;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Hp Facilities Fees</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="facilitiesfee" value="<?php echo $salesreceipt->hp_facilities_fee;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Advance Payment</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanadvpayment" value="<?php echo $salesreceipt->loan_adv_payment;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>TOTAL PAYABLE</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totalpayable" value="<?php echo $salesreceipt->total_payable;?>" id="totalpayable" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="less" value="<?php echo $salesreceipt->less;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Deposit</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="deposit" value="<?php echo $salesreceipt->deposit;?>" id="deposit" class="form-control">
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6">                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Vehicle No </label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradeinvehino" value="<?php echo $salesreceipt->tradein_vehino;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Trade In Price</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="tradeinprice" value="<?php echo $salesreceipt->tradein_price;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Less Full Settelment Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="fullsetteamt" value="<?php echo $salesreceipt->lessfull_sett_amt;?>" id="fullsetteamt" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>LOAN AMOUNT</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanamt" value="<?php echo $salesreceipt->loan_amt;?>" id="loanamt" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Loan Amount (%)</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="loanamtpercent" value="<?php echo $salesreceipt->loan_amt_percent;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Finance Company</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="financecmy" value="<?php echo $salesreceipt->finance_cmy;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>TOTAL DEDUCTION</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totaldeduction" value="<?php echo $salesreceipt->total_deduction;?>" id="totaldeduction" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>BALANCE DUE</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="balancedue" value="<?php echo $salesreceipt->balance_deduction;?>" id="balancedue" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Cash/ Cheque no</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chashchequeno" value="<?php echo $salesreceipt->cash_cheque_no;?>" class="form-control">
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
                                      <input type="date" name="vehiondate" value="<?php echo $salesreceipt->vehion_date;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Authorised Signature</label>
                                  </div>
                                  <div class="col-md-7">
                                        <?php if($salesreceipt->signof_author!=""){ ?>
                                        <img src="<?php echo base_url() .'upload/sign/'.$salesreceipt->signof_author;?>" class="img-responsive" style="width:100px;height:auto;">
                                        <?php }else{ ?>
                                               No Photo

                                        <?php } ?>
                                      <input type="file" name="signof_author" value="<?php $salesreceipt->signof_author;?>" class="form-control">
                                  </div>       
                            </div>
                      </div>
                      <div class="col-md-6">                            
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle on (Time)</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="vehiontime" value="<?php echo $salesreceipt->vehion_time;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Signature of Buyer</label>
                                  </div>
                                  <div class="col-md-7">
                                    <?php if($salesreceipt->signof_buyer!=""){ ?>
                                        <img src="<?php echo base_url() .'upload/sign/'.$salesreceipt->signof_buyer;?>" class="img-responsive" style="width:100px;height:auto;">
                                        <?php }else{ ?>
                                               No Photo

                                        <?php } ?>
                                      <input type="file" name="signof_buyer" value="<?php $salesreceipt->signof_buyer;?>" class="form-control">
                                  </div>       
                            </div>
                      </div>
                  </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="gms_sales_receipt/" class="btn mybtn btn-default">Cancel</a>
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
            url:"gms_sales_receipt/searchvehicles",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#make").val(v.make);
                $("#model").val(v.model);
                $("#originalregdate").val(v.originalregdate);  
                $("#chassisno").val(v.chassis_no);
                $("#engineno").val(v.engine_no);
                $("#loanamt").val(v.loan_amt);
                $("#deposit").val(v.deposit_paid);
                $("#billto").val(v.customer_name);
                $("#address").val(v.customer_address);
                $("#date").val(v.date);
                $("#serialno").val(v.serial_no);
                $("#invoiceno").val(v.invoice_no);
            }
        });
    }
</script>