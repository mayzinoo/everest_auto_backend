<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cost Sheet Report 2</h1>
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
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('costsheetreport2/update') ?>">
            <input type="hidden" name="id" value="<?php echo $costsheet2_data->vid;?>">
          <div class="card-body costsheetreport">                
                <div class="row smm_toppadding">                
                    <div class="col-md-6">
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Vehicle Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <?=form_dropdown("vehino",$vehicleslist,$costsheet2_data->vehi_no,"class='form-control' onchange=searchmakemodel(this.value)")?>
                                    </div>                                                   
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Make & Model</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="makemodel" id="makemodel" value="<?php echo $costsheet2_data->makemodel;?>" class="form-control" placeholder="Make">
                                    </div>
                            </div>                            
                    </div>
                </div>
                <div class="col-md-12 smm_toppadding ">      
                        <p class="formtitle">Cost Details</p>
                        
                        <table class="table-sm profitloss" style="width:100%;">
                              <thead>
                                <tr>                                      
                                      <th width="20%">COST TYPE</th>
                                      <th width="20%">DESCRIPTION</th>
                                      <th width="10%">REF.DATE</th>
                                      <th width="10%">REF.NO</th>
                                      <th width="10%" class="txtright">AMOUNT</th>
                                      <th width="10%" class="txtright">GST</th>
                                      <th width="10%" class="txtright" >TOTAL</th>
                                      <th width="5%" style="text-align:center !important;"><i class="fa fa-plus btn btn-success btn-xs" onclick="costdetailcloneform()"></i></th>
                                </tr>
                              </thead>
                            <tbody id="cost_detail">
                                <?php
                                
                                $costdetail = explode('}', $costsheet2_data->cost_details);
                                for($i=1;$i<count($costdetail);$i++)
                                    {
                                      $costdetails = explode(',',$costdetail[$i-1]);
                                    ?>
                                <tr class="costdetail">
                                    <td>
                                        <?=form_dropdown("costtype[]",$getcosttype_list,$costdetails[0],"class='form-control'")?>                                        
                                    </td>
                                    <td><input type="text" name="description[]" value="<?php echo $costdetails[1];?>" class="form-control"></td>
                                    <td><input type="date" name="refdate[]" value="<?php echo $costdetails[2];?>" class="form-control"></td>
                                    <td><input type="text" name="refno[]" value="<?php echo $costdetails[3];?>" class="form-control"></td>
                                    <td><input type="text" name="amount[]" value="<?php echo $costdetails[4];?>" class="form-control txtright"></td>
                                    <td><input type="text" name="gst[]" value="<?php echo $costdetails[5];?>" class="form-control txtright"></td>
                                    <td><input type="text" name="costtotal[]" value="<?php echo $costdetails[6];?>" class="form-control txtright"></td>
                                    <td style="text-align:center !important;"><span class='btn btn-danger btn-xs' onclick="removercostdetail(event)"> x </span> </td>
                                </tr>
                                <?php } ?> 
                            </tbody>
                            <tfoot>
                                <tr style="border-top: 1px solid #cac7c7;">
                                    <td colspan="4">Total</td>
                                    <td><input type="text" name="cost_amt" id="cost_amt" value="<?php echo $costsheet2_data->cost_amt;?>" class="form-control txtright"></td>
                                    <td><input type="text" name="cost_gst" id="cost_gst" value="<?php echo $costsheet2_data->cost_gst;?>" class="form-control txtright"></td>
                                    <td><input type="text" name="cost_total" id="cost_total" value="<?php echo $costsheet2_data->cost_total;?>" class="form-control txtright"></td>
                                </tr>
                            </tfoot>
                        </table> 
                </div><!-- end cost detail clone --> 


                <div class="col-md-12 smm_toppadding ">      
                      <p class="formtitle">Commission Details</p> 
                      <table class="table-sm profitloss" style="width:100%;">
                              <thead>
                                <tr>                                      
                                      <th width="20%">COMMISSION TYPE</th>
                                      <th width="20%">DESCRIPTION</th>
                                      <th width="10%">PAID DATE</th>
                                      <th width="10%" class="txtright">COMMISSION</th>
                                      <th width="5%" style="text-align:center !important;"><i class="fa fa-plus btn btn-success btn-xs" onclick="commissioncloneform()"></i></th>
                                </tr>
                              </thead>
                              <tbody id="commissdetail">
                                <?php                                
                                $commission = explode('}', $costsheet2_data->commission_detail);
                                for($i=1;$i<count($commission);$i++)
                                    {
                                      $commiss = explode(',',$commission[$i-1]);
                                    ?>
                                <tr class="commission">
                                    <td>
                                        <?=form_dropdown("commontype[]",$getcommission_list,$commiss[0],"class='form-control'")?>  
                                    </td>
                                    <td><input type="text" name="commi_des[]" value="<?php echo $commiss[1];?>" class="form-control"></td>
                                    <td><input type="date" name="paiddate[]" value="<?php echo $commiss[2];?>" class="form-control"></td>
                                    <td><input type="text" name="commission[]" value="<?php echo $commiss[3];?>" class="form-control txtright"></td>
                                    <td style="text-align:center !important;"><span class='btn btn-danger btn-xs' onclick="removercommission(event)"> x </span> </td>
                                </tr> 
                                <?php } ?>
                              </tbody>
                              <tfoot>
                                <tr style="border-top: 1px solid #cac7c7;">
                                    <td colspan="3">Total</td>                                    
                                    <td><input type="text" name="commission_total" id="commission_total" value="<?php echo $costsheet2_data->commission_total;?>" class="form-control txtright"></td>
                                </tr>
                            </tfoot>
                      </table>                          
                </div><!-- end commission detail  -->

                <div class="col-md-12 smm_toppadding">      
                      <p class="formtitle">Floor Stock Interest</p>   
                      <table class="table-sm profitloss" style="width:100%;">
                            <thead>
                              <tr>                                      
                                    <th width="20%">FLOOR AMOUNT</th>
                                    <th width="20%">START DATE</th>
                                    <th width="10%">END DATE</th>
                                    <th width="10%" class="txtright">TOTAL</th>
                                    <th width="5%" style="text-align:center !important;"><i class="fa fa-plus btn btn-success btn-xs" onclick="floorstockcloneform()"></i></th>
                              </tr>
                            </thead>
                            <tbody id="floorstockinterest">
                            <?php                                
                            $floorstock = explode('}', $costsheet2_data->floor_stock);
                            for($i=1;$i<count($floorstock);$i++)
                                {
                                  $floor = explode(',',$floorstock[$i-1]);
                                ?>
                              <tr class="floorstock">
                                  <td><input type="text" name="loanamt[]" value="<?php echo $floor[0];?>" class="form-control"></td>
                                  <td><input type="date" name="startdate[]" value="<?php echo $floor[1];?>" class="form-control"></td>
                                  <td><input type="date" name="enddate[]" value="<?php echo $floor[2];?>" class="form-control"></td>
                                  <td><input type="text" name="floortotal[]" value="<?php echo $floor[3];?>" class="form-control txtright"></td>
                                  <td style="text-align:center !important;"><span class='btn btn-danger btn-xs' onclick="removerfloorstock(event)"> x </span> </td>                                  
                              </tr> 
                              <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr style="border-top: 1px solid #cac7c7;">
                                <td colspan="3">Total</td>                                    
                                <td><input type="text" name="floorstock_total" id="floorstock_total" value="<?php echo $costsheet2_data->floor_total;?>" class="form-control txtright"></td>
                            </tr>
                        </tfoot>
                      </table>                 
                </div><!-- end floor stock interest  --> 

                <div class="col-md-12 smm_toppadding">      
                        <p class="formtitle">Broker Payout Details</p> 
                        <table class="table-sm profitloss" style="width:100%;">
                                <thead>
                                  <tr>                                      
                                        <th width="20%">BROKER</th>
                                        <th width="20%">GROSS PROFIT</th>
                                        <th width="10%">CIF (10%)</th>
                                        <th width="10%">PAID DATE</th>
                                        <th width="10%" class="txtright">PAYOUT</th>
                                        <th width="5%" style="text-align:center !important;"><i class="fa fa-plus btn btn-success btn-xs" onclick="brokerpayoutcloneform()"></i></th>
                                  </tr>
                                </thead>
                                <tbody id="brokerpayoutdetail">
                                    <?php                                
                                    $brokerpayout = explode('}', $costsheet2_data->broker_payout);
                                    for($i=1;$i<count($brokerpayout);$i++)
                                        {
                                          $broker = explode(',',$brokerpayout[$i-1]);
                                        ?>
                                  <tr class="brokerpayout">
                                      <td><input type="text" name="broker[]" value="<?php echo $broker[0];?>" class="form-control"></td>
                                      <td><input type="text" name="grossprofit[]" value="<?php echo $broker[1];?>" class="form-control"></td>
                                      <td><input type="text" name="cif[]" id="cif1" value="<?php echo $broker[2];?>" class="form-control"></td>
                                      <td><input type="date" name="broker_paid_date[]" value="<?php echo $broker[3];?>" class="form-control"></td>
                                      <td><input type="text" name="payout[]" value="<?php echo $broker[4];?>" class="form-control txtright"></td>
                                      <td style="text-align:center !important;"><span class='btn btn-danger btn-xs' onclick="removerbrokerpayout(event)"> x </span> </td>
                                  </tr>
                                  <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr style="border-top: 1px solid #cac7c7;">
                                        <td colspan="4">Total</td>                                    
                                        <td><input type="text" name="broker_payout" id="broker_payout" value="<?php echo $costsheet2_data->broker_total;?>" class="form-control txtright"></td>
                                    </tr>
                                </tfoot>
                        </table>                
              </div><!-- broker payout -->  
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12 ">
                        <a href="costsheetreport2/" class="btn mybtn btn-default">Cancel</a>
                        <button type="submit" class="btn mybtn btn-success">Update</button>
                    </div>                    
                </div>
          </div>
          <!-- /.card-footer -->
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
   
    window.onkeyup=function() {
        
        var items = document.querySelectorAll(".costdetail");
        var itemsArray = Array.prototype.slice.call(items,0);
        var amount=0; gst=0; total=0;costamt=0;gsttotal=0;costtotal=0;
        itemsArray.forEach(function(el){
            amount = el.querySelector('input[name="amount[]"]').value;
            gst = el.querySelector('input[name="gst[]"]').value;
            total = el.querySelector('input[name="costtotal[]"]').value;
            
            costamt+=parseFloat(amount);
            gsttotal+=parseFloat(gst);
            costtotal+=parseFloat(total);
        });

        document.getElementById('cost_amt').value=costamt.toFixed(2);
        document.getElementById('cost_gst').value=gsttotal.toFixed(2);
        document.getElementById('cost_total').value=costtotal.toFixed(2);
    /*end costdetail*/

        var items = document.querySelectorAll(".commission");
        var itemsArray = Array.prototype.slice.call(items,0);
        var commission=0; totalcommiss=0;
        itemsArray.forEach(function(el){
            commission = el.querySelector('input[name="commission[]"]').value;
            
            totalcommiss+=parseFloat(commission);
        });

        document.getElementById('commission_total').value=totalcommiss.toFixed(2);
    /*end commission*/

        var items = document.querySelectorAll(".floorstock");
        var itemsArray = Array.prototype.slice.call(items,0);
        var floortotal=0; floorstocktotal=0;
        itemsArray.forEach(function(el){
            floortotal = el.querySelector('input[name="floortotal[]"]').value;
            
            floorstocktotal+=parseFloat(floortotal);
        });

        document.getElementById('floorstock_total').value=floorstocktotal.toFixed(2);
    /*end floor stock*/

        var items = document.querySelectorAll(".brokerpayout");
        var itemsArray = Array.prototype.slice.call(items,0);
        var payout=0; brokerpayout=0;
        itemsArray.forEach(function(el){
            payout = el.querySelector('input[name="payout[]"]').value;
            
            brokerpayout+=parseFloat(payout);
        });

        document.getElementById('broker_payout').value=brokerpayout.toFixed(2);              
    /*end broker payout*/
   }


    function searchmakemodel(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"costsheetreport2/searchmakeandmodel",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                $("#makemodel").val(v.makemodel);
                
            }
        });
    }
</script>