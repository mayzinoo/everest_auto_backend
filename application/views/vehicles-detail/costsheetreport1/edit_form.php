<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cost Sheet Report 1</h1>
            <?php message(); ?>
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
        <form method="post" enctype="multipart/form-data" action="<?php echo site_url('costsheetreport1/update') ?>">
            <input type="hidden" name="id" value="<?php echo $costsheetreport1data->id;?>">
          <div class="card-body costsheetreport md_bottompadding">                
                <div class="row sm_toppadding">                
                    <div class="col-md-6">
                            <div class="row form-group">                                
                                    <div class="col-md-3">
                                        <label>BROKER 1 80%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="broker1" value="<?php echo $costsheetreport1data->broker1;?>" class="form-control">
                                    </div>                                                   
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-3">
                                        <label>BROKER 2 20%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="broker2" value="<?php echo $costsheetreport1data->broker2;?>" class="form-control">
                                    </div>                                                   
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-3">
                                        <label>BROKER 3 0.00%</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="broker3" value="<?php echo $costsheetreport1data->broker3;?>" class="form-control">
                                    </div>                                                   
                            </div> 
                            <div class="row form-group">                                
                                    <div class="col-md-3">
                                        <label>Car Plate</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="carplate" value="<?php echo $costsheetreport1data->car_plate;?>" class="form-control">
                                    </div>                                                   
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-3">
                                        <label>Make/Model</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="makemodel" value="<?php echo $costsheetreport1data->makemodel;?>" class="form-control">
                                    </div>                                                   
                            </div>                           
                    </div>
                </div>
                <div class="row smm_toppadding"> 
                    <div class="col-md-12">                      
                            <table class="table-sm" style="width:100%;">
                                      <thead>
                                        <tr>                                      
                                              <th width="20%">Description 1</th>
                                              <th width="20%">Description 2</th>
                                              <th width="20%">Description 3</th>
                                              <th width="10%">Date</th>
                                              <th width="10%" class="txtright">Profits</th>
                                              <th width="10%" class="txtright">Costing</th>
                                              <th width="10%" class="txtright">Total</th>
                                              <th width="5%" style="text-align:center !important;"><i class="fa fa-plus btn btn-success btn-xs" onclick="costsheetreportclone()"></i></th>
                                      </tr>
                                        </tr>
                                      </thead>
                            <?php if($costsheetreport1data->costsheetdes==""){ ?>
                                    <tbody id="costsheetdescription">
                                        <tr class="costsheetdes">
                                            <td><input type="text" name="des1[]" class="form-control"></td>
                                            <td><input type="text" name="des2[]" class="form-control"></td>
                                            <td><input type="text" name="des3[]" class="form-control"></td>
                                            <td><input type="date" name="date[]" class="form-control"></td>
                                            <td><input type="text" name="profit[]" class="form-control txtright"></td>
                                            <td><input type="text" name="costing[]" class="form-control txtright"></td>
                                            <td><input type="text" name="total[]" class="form-control txtright"></td>
                                            <td align="center" width="5%"><span class='btn btn-danger btn-xs' onclick="removerdescription(event)" style=""> x </span></td>
                                        </tr>
                                      </tbody>
                                      <tfoot>
                                            <tr style="border-top: 1px solid #000;">
                                                <td colspan="4">Total</td>
                                                <td><input type="text" name="profit_total" id="profit_total" class="form-control txtright"></td>
                                                <td><input type="text" name="costing_total" id="costing_total" class="form-control txtright"></td>
                                                <td><input type="text" name="totalamt" id="totalamt" class="form-control txtright"></td>
                                            </tr>
                                      </tfoot> 
                            <?php }else{ ?>
                                        <tbody id="costsheetdescription">
                                        <?php
                                
                                        $description = explode('}', $costsheetreport1data->costsheetdes);
                                        for($i=1;$i<count($description);$i++)
                                            {
                                              $des = explode(',',$description[$i-1]);
                                            ?>
                                        <tr class="costsheetdes">
                                            <td><input type="text" name="des1[]" class="form-control" value="<?php echo $des[0];?>"></td>
                                            <td><input type="text" name="des2[]" class="form-control" value="<?php echo $des[1];?>"></td>
                                            <td><input type="text" name="des3[]" class="form-control" value="<?php echo $des[2];?>"></td>
                                            <td><input type="date" name="date[]" class="form-control" value="<?php echo $des[3];?>"></td>
                                            <td><input type="text" name="profit[]" class="form-control txtright" value="<?php echo $des[4];?>"></td>
                                            <td><input type="text" name="costing[]" class="form-control txtright" value="<?php echo $des[5];?>"></td>
                                            <td><input type="text" name="total[]" class="form-control txtright" value="<?php echo $des[6];?>"></td>
                                            <td align="center" width="5%"><span class='btn btn-danger btn-xs' onclick="removerdescription(event)" style=""> x </span></td>
                                        </tr>
                                        <?php } ?> 
                                      </tbody>
                                      <tfoot>
                                            <tr style="border-top: 1px solid #000;">
                                                <td colspan="4">Total</td>
                                                <td><input type="text" name="profit_total" id="profit_total" class="form-control txtright" value="<?php echo $costsheetreport1data->profit_total;?>"></td>
                                                <td><input type="text" name="costing_total" id="costing_total" class="form-control txtright" value="<?php echo $costsheetreport1data->costing_total;?>"></td>
                                                <td><input type="text" name="totalamt" id="totalamt" class="form-control txtright" value="<?php echo $costsheetreport1data->totalamt;?>"></td>
                                            </tr>
                                      </tfoot> 
                            <?php } ?>
                                      
                            </table>
                      </div>
                </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12 ">
                        <a href="costsheetreport1/" class="btn mybtn btn-default">Cancel</a>
                        <button type="submit" class="btn mybtn btn-success">Update</button>
                    </div>                    
                </div>
          </div>
          <!-- /.card-footer -->
        </form>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
   
    window.onkeyup=function() {
        
        var items = document.querySelectorAll(".costsheetdes");
        var itemsArray = Array.prototype.slice.call(items,0);
        var profit=0; costing=0; total=0;profittotal=0;costingtotal=0;totalamount = 0;
        itemsArray.forEach(function(el){
            profit = el.querySelector('input[name="profit[]"]').value;
            costing = el.querySelector('input[name="costing[]"]').value;
            total = el.querySelector('input[name="total[]"]').value;
            
            profittotal+=parseFloat(profit);
            costingtotal+=parseFloat(costing);
            totalamount+=parseFloat(total);
        });
        document.getElementById('profit_total').value=profittotal.toFixed(2);
        document.getElementById('costing_total').value=costingtotal.toFixed(2);
        document.getElementById('totalamt').value=totalamount.toFixed(2);
    /*end*/

    }
</script>