<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Purchase Receipt</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('receipt/insert') ?>">
            <div class="card-body">
                  <div class="row sm_toppadding">
                      <div class="col-md-6">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Date</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="date" name="date" value="<?php echo date('Y-m-d');?>" class="form-control">
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Reference No</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="referenceno" class="form-control" >
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>UEN / NRIC No</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="nricno" class="form-control" >
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Address</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="address" class="form-control" >
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Vehicle No</label>
                                  </div>
                                  <div class="col-md-6">
                                    <input type="text" name="vehino" class="form-control">                                      
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Model</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="model" id="model" class="form-control" >
                                  </div>       
                            </div>

                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Price</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="price" id="price" class="form-control" >
                                  </div>       
                            </div>
                      </div> 
                      <div class="col-md-6">
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Deposit / Payment by Cash / Cheque No</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="deposit" class="form-control" >
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Finance Due (by cash / cheque no.)</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="financedue" class="form-control" >
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Paid To</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="paidto" class="form-control" >
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Paid Price</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="paidprice" id="paidprice" class="form-control" >
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Balance</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="balance" id="balance" class="form-control" >
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Handover of vehicle Date</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="date" name="handoverdate" class="form-control" >
                                  </div>       
                            </div>
                            <div class="row form-group">
                                  <div class="col-md-4">
                                      <label>Handover of vehicle Time</label>
                                  </div>
                                  <div class="col-md-6">
                                      <input type="text" name="handovertime" value="<?php echo mdate('%h:%i %A');?>" class="form-control">
                                  </div>       
                            </div>
                            
                      </div>                   
                  </div>
                  <div class="row">
                      <div class="col-md-6">
                            <div class="row form-group">
                                      <div class="col-md-4">
                                          <label>Authorised Signature</label>
                                      </div>
                                      <div class="col-md-6">
                                          <input type="file" name="authorise_sign" class="form-control" >
                                      </div>       
                                </div>
                      </div>
                      <div class="col-md-6">
                            <div class="row form-group">
                                      <div class="col-md-4">
                                          <label>Authorised signature of Seller</label>
                                      </div>
                                      <div class="col-md-6">
                                          <input type="file" name="authorise_sellersign" class="form-control" >
                                      </div>       
                                </div>
                      </div>
                  </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                  <div class="row right">
                      <div class="col-md-12">
                          <a href="receipt/" class="btn mybtn btn-default">Cancel</a>
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
<script type="text/javascript">
  $(document).ready(function() {
      //this calculates values automatically 
      getbalance();
      $("#price, #paidprice").on("keydown keyup", function() {
          getbalance();
      });
  });

  function getbalance() 
    {
          var num1 = document.getElementById('price').value;
          var num2 = document.getElementById('paidprice').value;
        
          var result1 = num1 - num2;
              if (!isNaN(result1)) {                  
                document.getElementById('balance').value = result1.toFixed(2);
              }
    }
  function searchmodelandprice(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"receipt/searchmodelandprice",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                
                $("#model").val(v.model_name);
                $("#price").val(v.selling_price);
                
            }
        });
    }

</script>