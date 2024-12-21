<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicles Profit and Loss</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Vehicle No. : <?php echo $vehiclesdetail->vehino;?></h3>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12"> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>VEHICLE NUMBER</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->vehino; ?>
                                                </div>       
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>MAKE AND MODEL</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->make.' '.$vehiclesdetail->model;;?>
                                                </div>
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>BUY CODE</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->buycode; ?>
                                                </div>
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>SELL CODE</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->sellcode; ?>
                                                </div>
                                        </div>
                                        <?php
                                        $broker = explode('}', $vehiclesdetail->broker_payout);
                                        for($i=1;$i<count($broker);$i++)
                                        {
                                          $brokerpayout = explode(',', $broker[$i-1]);
                                             ?>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label><?php echo $brokerpayout[0];?> CODE</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $brokerpayout[1];?>
                                                </div>
                                        </div>
                                        <?php } ?>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>E-Out Date</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->eoutdate; ?>
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>PREV VEHICLE NO.</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $prevvehino->prevvehino; ?>
                                                </div>       
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>GST</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->gst_text; ?>
                                                </div>
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>Purchase Date</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->purchasedate; ?>
                                                </div>
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>Sales Booking Date</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->salesbooking_date; ?>
                                                </div>
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>PURCHASE AGREMENT</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->purchase_agrement; ?>
                                                </div>
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>SALES AGREMENT</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->sales_agrement; ?>
                                                </div>
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>ETS Paper From</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->etspaper_from; ?>
                                                </div>
                                        </div>
                                        <div class="row">                                
                                                <div class="col-md-5">
                                                    <label>ETS Paper To</label>
                                                </div>
                                                <div class="col-md-7">
                                                    : <?php echo $vehiclesdetail->etspaper_to; ?>
                                                </div>
                                        </div>
                                </div>
                            </div>             
                            
                        </div><!-- end -->
                        <div class="col-md-12 smm_toppadding">
                            <div class="row">
                                <table class="table-sm profitloss" style="width:70%;">
                                      <thead>
                                        <tr>                                      
                                              <th style="width:30%"></th>
                                              <th style="width: 5%"></th>
                                              <th style="width: 18%" class="txtright">Amount Value</th>
                                              <th style="width: 18%" class="txtright">GST Value</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        
                                        <tr>
                                            <td>PURCHASE PRICE</td>
                                            <td>:</td>
                                            <td class="txtright"><?php echo number_format((float)$vehiclesdetail->purchase_price, 2, '.', ''); ?></td>
                                            <td class="txtright"><?php echo $vehiclesdetail->net_gst; ?></td>
                                        </tr>
                                        
                                       
                                        <tr>
                                            <td>FLOOR STOCK & PARKING FEE</td>
                                            <td>:</td>
                                            <td class="txtright"><?php echo number_format((float)$vehiclesdetail->floor_loan_amt_total+$vehiclesdetail->net_parkingfee, 2, '.', ''); ?></td>
                                            <td class="txtright">0.00</td>
                                        </tr>
                                        <?php
                                        $costdetail = explode('}', $vehiclesdetail->cost_details);
                                        for($i=1;$i<count($costdetail);$i++)
                                        {
                                          $costdetails = explode(',', $costdetail[$i-1]);
                                             ?>
                                            <tr>
                                                <td><?=$costdetails[0]?></td>
                                                <td>:</td>
                                                <td class="txtright"><?php echo number_format((float)$costdetails[5], 2, '.', ''); ?></td>
                                                <td class="txtright"><?php echo number_format((float)$costdetails[6], 2, '.', ''); ?></td>
                                            </tr>
                                        <?php } ?>
                                        
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright">............................................</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>TOTAL COST PRICE</td>
                                            <td>:</td>
                                            <td class="txtright"><?php echo number_format((float)$vehiclesdetail->totalcostprice, 2, '.', ''); ?></td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <tr>
                                            <td>SELLING PRICE</td>
                                            <td>:</td>
                                            <td class="txtright"><?php echo number_format((float)$vehiclesdetail->sellingprice, 2, '.', ''); ?></td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <tr>
                                            <td>Less SELL-OUT COMMISSION</td>
                                            <td>:</td>
                                            <td class="txtright"><?php echo $vehiclesdetail->commission_total; ?></td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <tr>
                                            <td>Less TOTAL COST PRICE</td>
                                            <td>:</td>
                                            <td class="txtright"><?php echo number_format((float)$vehiclesdetail->totalcostprice, 2, '.', ''); ?></td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright">............................................</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td class="txtright"><?php echo ($vehiclesdetail->sellingprice)-($vehiclesdetail->commission_total+$vehiclesdetail->totalcostprice); ?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>G.S.T Incurred(Input)</td>
                                            <td>:</td>
                                            <td class="txtright">
                                                <?php echo number_format((float)($vehiclesdetail->purchase_price/(103.5 * 3.5)), 2, '.', ''); ?>                       
                                                </td>
                                            <td class="txtright">GST% :7.00</td>
                                        </tr>
                                        <tr>
                                            <td>G.S.T Incurred(Output)</td>
                                            <td>:</td>
                                            <td class="txtright">
                                                <?php echo number_format((float)($vehiclesdetail->sellingprice/(107 * 7)), 2, '.', ''); ?>
                                                </td>
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
                                            <td class="txtright"><?php echo ($vehiclesdetail->sellingprice)-($vehiclesdetail->commission_total+$vehiclesdetail->totalcostprice); ?></td>
                                            <td class="txtright"></td>
                                        </tr>
                                    <?php
                                    $broker = explode('}', $vehiclesdetail->broker_payout);
                                    $totalbroker=0;
                                    
                                    for($i=1;$i<count($broker);$i++)
                                    {
                                      $brokerpayout = explode(',', $broker[$i-1]);
                                       $totalbroker=number_format((float)(($vehiclesdetail->sellingprice)-($vehiclesdetail->commission_total+$vehiclesdetail->totalcostprice))*$brokerpayout[6] / 100, 2, '.', '');
                                        $sum += $totalbroker;                                   
                                      
                                         ?>
                                        <tr>
                                            <td><?php echo $brokerpayout[0];?> (<?php echo $brokerpayout[6];?> %)</td>
                                            <td>:</td>
                                            <td class="txtright">
                                                <?php echo number_format((float)(($vehiclesdetail->sellingprice)-($vehiclesdetail->commission_total+$vehiclesdetail->totalcostprice))*$brokerpayout[6] / 100, 2, '.', ''); ?>
                                                </td>
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
                                            <td class="txtright">
                                                <?php 
                                                $grossprofitloss=($vehiclesdetail->sellingprice)-($vehiclesdetail->commission_total+$vehiclesdetail->totalcostprice);
                                                echo number_format((float)($grossprofitloss-$sum), 2, '.', ''); ?>                                               
                                                    
                                                </td>
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
                </div>
            </div>
            


      </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

