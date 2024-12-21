<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicles Detail</h1>
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
            <h3 class="card-title">Cost Sheet Report</h3>               
          </div>
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('costsheetreport3/detail_update') ?>">
            <!-- /.card-header -->
            <input type="hidden" name="vehid" value="<?php echo $vehiclesdetail->vehi_no;?>">
            <div class="card-body costsheetreport">
                
                <div class="row smm_toppadding">   
                    <table class="table-sm" style="width:100%;">
                        <tr>
                            <td>VEHICLE NUMBER :</td>
                            <td><?=form_dropdown("vehino",$vehicleslist,$vehiclesdetail->vehi_no,"class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?></td>
                            <td>PREV VEHICLE NO :</td>
                            <td><input type="text" name="prev_vehino" value="<?php echo $vehiclesdetail->prev_vehino;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>MAKE AND MODEL</td>
                            <td><input type="text" name="makemodel" value="<?php echo $vehiclesdetail->makemodel;?>" class="form-control"></td>
                            <td>GST</td>
                            <td><input type="text" name="gsttxt" value="<?php echo $vehiclesdetail->gsttxt;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>BUY CODE</td>
                            <td><input type="text" name="buycode" value="<?php echo $vehiclesdetail->buycode;?>" class="form-control"></td>
                            <td>PURCHASE DATE</td>
                            <td><input type="date" name="purchase_date" value="<?php echo $vehiclesdetail->purchase_date;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>SELL CODE</td>
                            <td><input type="text" name="sellcode" value="<?php echo $vehiclesdetail->sellcode;?>" class="form-control"></td>
                            <td>SALES BOOKING DATE</td>
                            <td><input type="date" name="salesbooking_date" value="<?php echo $vehiclesdetail->salesbooking_date;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>BROKER 1 CODE</td>
                            <td><input type="text" name="broker1code" value="<?php echo $vehiclesdetail->broker1code;?>" class="form-control"></td>
                            <td>PURCHASE AGREEMENT</td>
                            <td><input type="text" name="purchase_agrement" value="<?php echo $vehiclesdetail->purchase_agrement;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>BROKER 2 CODE</td>
                            <td><input type="text" name="broker2code" value="<?php echo $vehiclesdetail->broker2code;?>" class="form-control"></td>
                            <td>SALES AGREEMENT</td>
                            <td><input type="text" name="sales_agrement" value="<?php echo $vehiclesdetail->sales_agrement;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>BROKER 3 CODE</td>
                            <td><input type="text" name="broker3code" value="<?php echo $vehiclesdetail->broker3code;?>" class="form-control"></td>
                            <td>ETS PAPER FROM</td>
                            <td><input type="text" name="etspaper_from" value="<?php echo $vehiclesdetail->etspaper_from;?>" class="form-control"></td>
                        </tr>
                        <tr>
                            <td>E-OUT DATE</td>
                            <td><input type="date" name="eoutdate" value="<?php echo $vehiclesdetail->eoutdate;?>" class="form-control"></td>
                            <td>ETS PAPER TO</td>
                            <td><input type="text" name="etspaper_to" value="<?php echo $vehiclesdetail->etspaper_to;?>" class="form-control"></td>
                        </tr>
                    </table>             
                
                </div><!--  -->
                <div class="col-md-12 smm_toppadding">
                            <div class="row">
                                <table class="table-sm profitloss" style="width:70%;">
                                      <thead>
                                        <tr>                                      
                                              <th style="width:30%"></th>
                                              <th style="width: 5%"></th>
                                              <th style="width: 18%;text-decoration: underline;" class="txtright">Amount Value</th>
                                              <th style="width: 18%;text-decoration: underline;" class="txtright">GST Value</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td>PURCHASE PRICE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="purchase_price" value="<?php echo $vehiclesdetail->purchase_price;?>" id="purchase_price" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="purchaseprice_gst" value="<?php echo $vehiclesdetail->purchaseprice_gst;?>" id="purchaseprice_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <?php
                                
                                        $costdetail = explode('}', $vehiclesdetail->cost_details);
                                        for($i=1;$i<count($costdetail);$i++)
                                            {
                                              $costdetails = explode(',',$costdetail[$i-1]);

                                            ?>
                                            <tr class="costdetails">

                                                <td><?php echo $costdetails[0];?></td>
                                                <td>:</td>
                                                <input type="hidden" name="costtype[]" value="<?php echo $costdetails[0];?>" class="form-control">
                                                <input type="hidden" name="description[]" value="<?php echo $costdetails[1];?>" class="form-control">
                                                <input type="hidden" name="refdate[]" value="<?php echo $costdetails[2];?>" class="form-control">
                                                <input type="hidden" name="refno[]" value="<?php echo $costdetails[3];?>" class="form-control">
                                                <input type="hidden" name="amount[]" value="<?php echo $costdetails[4];?>" class="form-control">
                                                <td><input type="text" name="costtotal[]" value="<?php echo $costdetails[6];?>" class="form-control txtright"></td>
                                                <td><input type="text" name="gst[]" value="<?php echo $costdetails[5];?>" class="form-control txtright"></td>
                                            </tr>
                                    <?php } ?>  
                                            
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright">............................................</td>
                                            <td class="txtright">............................................</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright"></td>
                                            <td class="txtright"><input type="text" name="total_gst" value="<?php echo $vehiclesdetail->total_gst;?>" id="total_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>TOTAL COST PRICE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="totalcostprice" value="<?php echo $vehiclesdetail->totalcostprice;?>" id="totalcostprice" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="totalcostprice_gst" value="<?php echo $vehiclesdetail->totalcostprice_gst;?>" id="totalcostprice_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <?php
                                
                                        $commission = explode('}', $vehiclesdetail->commission_detail);
                                        for($i=1;$i<count($commission);$i++)
                                            {
                                              $commiss = explode(',',$commission[$i-1]);
                                              if($commiss[0]!="Less SELL-OUT ADMIN COMM" && $commiss[0]!="Less SELL-OUT COMM"){
                                            ?>
                                            <tr class="commissiondetails">
                                                <td><?php echo $commiss[0];?></td>
                                                <td>:</td>
                                                <input type="hidden" name="commontype[]" value="<?php echo $commiss[0];?>" class="form-control">
                                                <input type="hidden" name="commi_des[]" value="<?php echo $commiss[1];?>" class="form-control">
                                                <input type="hidden" name="paiddate[]" value="<?php echo $commiss[2];?>" class="form-control">
                                                <td class="txtright"><input type="text" name="commission[]" value="<?php echo $commiss[3];?>" class="form-control txtright" ></td>
                                                <td class="txtright "><input type="text" name="commission_gst[]" value="<?php echo $commiss[4];?>" id="commission_gst" class="form-control txtright" ></td>
                                            </tr>                                         
                                            <?php }else{ ?>
                                            <tr class="lesscommissiondetails">
                                                <td><?php echo $commiss[0];?></td>
                                                <td>:</td>

                                                <input type="hidden" name="commontype[]" value="<?php echo $commiss[0];?>" class="form-control">
                                                <input type="hidden" name="commi_des[]" value="<?php echo $commiss[1];?>" class="form-control">
                                                <input type="hidden" name="paiddate[]" value="<?php echo $commiss[2];?>" class="form-control">
                                                <td class="txtright"><input type="text" name="commission[]" value="<?php echo $commiss[3];?>" class="form-control txtright" ></td>
                                                <td class="txtright "><input type="text" name="commission_gst[]" value="<?php echo $commiss[4];?>" class="form-control txtright" ></td>
                                            </tr>        
                                            <?php } ?>

                                          
                                        <?php } ?> 
                                            
                                            <tr>
                                                <td>SELLING PRICE</td>
                                                <td>:</td>
                                                <td class="txtright"><input type="text" name="sellingprice" value="<?php echo $vehiclesdetail->sellingprice;?>" id="sellingprice" class="form-control txtright" ></td>
                                                <td class="txtright"><input type="text" name="sellingprice_gst" value="<?php echo $vehiclesdetail->sellingprice_gst;?>" id="sellingprice_gst" class="form-control txtright" ></td>
                                            </tr>
                                            <tr>
                                                <td>Less TOTAL COST PRICE</td>
                                                <td>:</td>
                                                <td class="txtright"><input type="text" name="lesstotalcostprice" value="<?php echo $vehiclesdetail->lesstotalcostprice;?>" id="lesstotalcostprice" class="form-control txtright" ></td>
                                                <td class="txtright"><input type="text" name="lesstotalcostprice_gst" value="<?php echo $vehiclesdetail->lesstotalcostprice_gst;?>" id="lesstotalcostprice_gst" class="form-control txtright" ></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright">............................................</td>
                                            <td class="txtright">............................................</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright"></td>
                                            <td class="txtright"><input type="text" name="totalgst" value="<?php echo $vehiclesdetail->totalgst;?>" id="totalgst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>G.S.T Incurred(Input)</td>
                                            <td>:</td>
                                            <td class="txtright">
                                                <input type="text" name="gstinput" value="<?php echo $vehiclesdetail->gstinput;?>" class="form-control txtright" >               
                                                </td>
                                            <td class="txtright">GST% :7.00</td>
                                        </tr>
                                        <tr>
                                            <td>G.S.T Incurred(Output)</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="gstout" value="<?php echo $vehiclesdetail->gstout;?>" id="gstout" class="form-control txtright" > </td>
                                            <td class="txtright">GST% :7.00</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright">............................................</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>GROSS PROFIT/LOSS</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="grossprofit" value="<?php echo $vehiclesdetail->grossprofit;?>" id="grossprofit" class="form-control txtright" > </td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <?php                                
                                        $brokerpayout = explode('}', $vehiclesdetail->broker_payout);
                                        for($i=1;$i<count($brokerpayout);$i++)
                                            {
                                              $broker = explode(',',$brokerpayout[$i-1]);
                                            ?>
                                        <tr class="brokerpayout">
                                            <td><?php echo $broker[0];?></td>
                                            <td>:</td>
                                            <input type="hidden" name="broker[]" value="<?php echo $broker[0];?>">
                                            <input type="hidden" name="cif[]" value="<?php echo $broker[2];?>">
                                            <input type="hidden" name="broker_paid_date[]" value="<?php echo $broker[3];?>">
                                            <input type="hidden" name="payout[]" value="<?php echo $broker[4];?>">
                                            <td class="txtright"><input type="text" name="broker_grossprofit[]" value="<?php echo $broker[1];?>" class="form-control txtright" > </td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <?php } ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright">............................................</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>NET PROFIT/LOSS</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="netprofitloss" value="<?php echo $vehiclesdetail->netprofitloss;?>" id="netprofitloss" class="form-control txtright" ></td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright">==============</td>
                                            <td></td>
                                        </tr>
                                      </tbody>
                                </table>
                            
                            </div>
                        </div><!--  -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                    <div class="row right">
                        <div class="col-md-12 ">
                            <a href="costsheetreport3/" class="btn mybtn btn-default">Cancel</a>
                            <button type="submit" class="btn mybtn btn-success">Update</button>
                        </div>                    
                    </div>
            </div>
            <!-- /.card-footer -->

          </form>
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

    var items = document.querySelectorAll(".costdetails");
        var itemsArray = Array.prototype.slice.call(items,0);
        var costdetail=0; costtotal=0;gst=0;gsttotal=0;
        itemsArray.forEach(function(el){
            costdetail = el.querySelector('input[name="costtotal[]"]').value;
            gst = el.querySelector('input[name="gst[]"]').value;
            
            costtotal+=parseFloat(costdetail);
            gsttotal+=parseFloat(gst);
        });

    var items = document.querySelectorAll(".commissiondetails");
        var itemsArray = Array.prototype.slice.call(items,0);
        var commis=0; commissiontotal=0;
        itemsArray.forEach(function(el){
            commis = el.querySelector('input[name="commission[]"]').value;
            
            commissiontotal+=parseFloat(commis);
        });

    var items = document.querySelectorAll(".lesscommissiondetails");
        var itemsArray = Array.prototype.slice.call(items,0);
        var lesscommis=0;lesscommission=0;
        itemsArray.forEach(function(el){
            lesscommis = el.querySelector('input[name="commission[]"]').value;
            lesscommission+=parseFloat(lesscommis);
        });

        var num1 = document.getElementById('purchase_price').value;        

        var num15 = document.getElementById('purchaseprice_gst').value;
        

        var num29 = document.getElementById('sellingprice').value;
        // var num30 = document.getElementById('commission').value;
        var num31 = document.getElementById('totalcostprice').value

        var result1 = costtotal + parseFloat(num1);

        var result2 = gsttotal + parseFloat(num15);

        document.getElementById('totalcostprice').value=result1.toFixed(2);
        document.getElementById('total_gst').value=result2.toFixed(2);

        var result3 = parseFloat(num29) + commissiontotal  - parseFloat(num31) - lesscommission;
        document.getElementById('lesstotalcostprice').value=result3.toFixed(2);

        var result4 = (parseFloat(num29) - parseFloat(num1)) / 107*7;
            if (!isNaN(result4)) {    
              document.getElementById('gstout').value = result4.toFixed(2);   
            }

        var num32 = document.getElementById('lesstotalcostprice').value;
        var num33 = document.getElementById('gstout').value;

        var result5 = parseFloat(num32) - parseFloat(num33);
            if (!isNaN(result5)) {    
              document.getElementById('grossprofit').value = result5.toFixed(2);   
            }
/**/
        var num34 = document.getElementById('grossprofit').value;

        var items = document.querySelectorAll(".brokerpayout");
        var itemsArray = Array.prototype.slice.call(items,0);
        var broker=0;grossprofit=0;
        itemsArray.forEach(function(el){
            broker = el.querySelector('input[name="broker_grossprofit[]"]').value;
            grossprofit+=parseFloat(broker);
        });

        var result6 = parseFloat(num34) - grossprofit;
            if (!isNaN(result6)) {    
              document.getElementById('netprofitloss').value = result6.toFixed(2);   
            }
/**/
        var num35 = document.getElementById('totalcostprice_gst').value;
        var num36 = document.getElementById('sellingprice_gst').value;
        var num37 = document.getElementById('lesstotalcostprice_gst').value;

        var item = document.querySelectorAll(".commissiondetails");
        var itemsArray = Array.prototype.slice.call(item,0);
        var commisgst=0;commistotalgst=0;
        itemsArray.forEach(function(el){
            commisgst = el.querySelector('input[name="commission_gst[]"]').value;
            commistotalgst+=parseFloat(commisgst);
        });

        var result7 = commistotalgst + parseFloat(num35) + parseFloat(num36) + parseFloat(num37);
            if (!isNaN(result7)) {    
              document.getElementById('totalgst').value = result7.toFixed(2);   
            }
/**/
  }
</script>