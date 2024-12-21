<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>COM</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('com/update') ?>">
            <input type="hidden" name="id" value="<?php echo $com->id; ?>">
            <div class="card-body">
                  <div class="row sm_toppadding">
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Vehicle Number</label>
                                  </div>
                                  <div class="col-md-7">
                                    <?=form_dropdown("vehino",$vehilist,$com->vehi_no,"class='form-control' onchange=searchvehicles(this.value)")?>
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Make</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="make" value="<?php echo $com->make;?>" id="make" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="model" value="<?php echo $com->model;?>" id="model" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="date" name="date" id="date" value="<?php echo $com->date;?>" class="form-control">
                                  </div>       
                            </div>                           
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Bill To</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="billto" id="billto" value="<?php echo $com->billto;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-7">
                                      <textarea name="address" id="address" class="form-control"><?php echo $com->address;?></textarea>
                                  </div>       
                            </div>
                            
                            
                            
                      </div>
                      <div class="col-md-6"> 
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Chasis Number</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="chasisno" value="<?php echo $com->chassis_no;?>" id="chassisno" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>A/C</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="ac" value="<?php echo $com->ac;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Commisson</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="commisson" value="<?php echo $com->commission;?>" id="commission" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Incentive</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="incentive" value="<?php echo $com->incentive;?>" id="incentive" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>GST</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="gst" value="<?php echo $com->gst;?>" id="gst" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>GST (%)</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="gstpercent" value="<?php echo $com->gst_percent;?>" class="form-control">
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-3">
                                      <label>Total Amount</label>
                                  </div>
                                  <div class="col-md-7">
                                      <input type="text" name="totalamt" value="<?php echo $com->total_amt;?>" id="totalamt" class="form-control">
                                  </div>       
                            </div>
                      </div>
                    </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="com/" class="btn mybtn btn-default">Cancel</a>
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
      $("#commission, #incentive, #gst").on("keydown keyup", function() {

          gettotalamt();
      });
  });
  function gettotalamt() 
  {
        var num1 = document.getElementById('commission').value;
        var num2 = document.getElementById('incentive').value;
        var num3 = document.getElementById('gst').value;
      
        var result1 = parseFloat(num1) + parseFloat(num2) + parseFloat(num3);
            if (!isNaN(result1)) {                  
              document.getElementById('totalamt').value = result1.toFixed(2);
            }
  }
  function searchvehicles(vehiregno)
    {
        data="vehiregno="+vehiregno;
        $.ajax({
            type:"POST",
            url:"com/searchvehicles",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#make").val(v.make);
                $("#model").val(v.model);
                $("#chassisno").val(v.chassis_no);
                $("#billto").val(v.customer_name);
                $("#address").val(v.customer_address);
                $("#date").val(v.date);
                $("#commission").val(v.loan_commission);
                $("#incentive").val(v.incentive);
                $("#gst").val(v.gst);
            }
        });
    }

</script>