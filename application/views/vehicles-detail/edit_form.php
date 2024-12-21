<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicles Detail</h1>
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
            <h3 class="card-title">Edit Form</h3>               
          </div>
          <!-- /.card-header -->
          <form method="post" enctype="multipart/form-data" action="<?php echo site_url('vehicles_detail/update') ?>">
        <input type="hidden" name="id" value="<?php echo $vehiclesdetail->vdetail_id;?>">
          <div class="card-body">
                
                <div class="row smm_toppadding">      
                    <div class="col-md-6">
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Vehicle Number</label>
                                    </div>
                                    <div class="col-md-8">
                                        <?=form_dropdown("vehino",$vehicleslist,$vehiclesdetail->vehi_no,"class='form-control' id='vehino' onchange=searchmakemodel(this.value)")?>
                                    </div>                                                   
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Make & Model</label>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="make" id="make" class="form-control" value="<?php echo $vehiclesdetail->make;?>">
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" name="model" id="model" class="form-control" value="<?php echo $vehiclesdetail->model;?>">
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Buy Code</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="buycode" value="<?php echo $vehiclesdetail->buycode;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Sell Code</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="sellcode" value="<?php echo $vehiclesdetail->sellcode;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Purchase Price</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="purchase_price" value="<?php echo $vehiclesdetail->purchase_price;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Selling Price</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="selling_price" value="<?php echo $vehiclesdetail->sellingprice;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>E-Out Date</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="eoutdate" value="<?php echo $vehiclesdetail->eoutdate;?>" class="form-control" >
                                    </div>
                            </div>
                    </div>          
                    <div class="col-md-6">
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Prev Vehicle No.</label>
                                    </div>
                                    <div class="col-md-8">
                                        <?=form_dropdown("prev_vehino",$vehicleslist,$vehiclesdetail->prev_vehino,"class='form-control'")?>
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>GST</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="gsttxt" value="<?php echo $vehiclesdetail->gst_text;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Purchase Date</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="date" name="purchase_date" value="<?php echo $vehiclesdetail->purchasedate;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Sales Booking Date</label>
                                    </div>
                                    <div class="col-md-8">
                                    <input type="date" name="salesbooking_date" value="<?php echo $vehiclesdetail->salesbooking_date;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Purchase Agrement</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="purchase_agrement" value="<?php echo $vehiclesdetail->purchase_agrement;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>Sales Agrement</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="sales_agrement" value="<?php echo $vehiclesdetail->sales_agrement;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>ETS Paper From</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="etspaper_from" value="<?php echo $vehiclesdetail->etspaper_from;?>" class="form-control" >
                                    </div>
                            </div>
                            <div class="row form-group">                                
                                    <div class="col-md-4">
                                        <label>ETS Paper To</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="etspaper_to" value="<?php echo $vehiclesdetail->etspaper_to;?>" class="form-control" >
                                    </div>
                            </div>
                            
                    </div>
                </div>
                
                
            <div class="col-md-12 smm_toppadding choosepackage">      
                <p class="formtitle">Cost Details</p>
                <h4 class="new-costdetail"><span class="text-right btn" onclick="costdetailcloneform(event)" style="color:#900C12;"><i class="fa fa-plus"></i> Add New</span>
                </h4>  
                <div class="col-md-2"><input type="hidden" name="net_amount" id="net_amount" value="<?php echo $vehiclesdetail->net_amount;?>" class="form-control"></div>
                <div class="col-md-2"><input type="hidden" name="net_gst" id="net_gst" value="<?php echo $vehiclesdetail->net_gst;?>" class="form-control"></div>
                <div class="col-md-2"><input type="hidden" name="cost_total" id="cost_total" value="<?php echo $vehiclesdetail->cost_total;?>" class="form-control"></div>
                <div id="cost_detail">
                    <?php
                    $cost = explode('}', $vehiclesdetail->cost_details);

                    for($i=1;$i<count($cost);$i++)
                    {
                      $costdetail = explode(',', $cost[$i-1]);

                         ?>
                        <div class="costdetail row">
                            <div class="col-md-4">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Cost Type</label>
                                        </div>
                                        <div class="col-md-8">
                                            <?=form_dropdown("costtype[]",$getcosttype_list,$costdetail[0],"class='form-control'")?>
                                        </div>  
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Description</label>
                                        </div>
                                        <div class="col-md-8">
                                            <textarea name="description[]" class="form-control"><?php echo $costdetail[1];?></textarea>
                                        </div>       
                                    </div>   

                                    
                            </div>
                            <div class="col-md-4">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Vendor</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="vendor[]" class="form-control" value="<?php echo $costdetail[2];?>">
                                        </div>       
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Ref. Date</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" name="refdate[]" class="form-control" value="<?php echo $costdetail[3];?>">
                                        </div>       
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Ref. Number</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="refno[]" class="form-control" value="<?php echo $costdetail[4];?>">
                                        </div>       
                                    </div> 

                                    
                            </div>
                            <div class="col-md-3">
                                    <div class="row form-group">
                                        <div class="col-md-3">
                                            <label>Amount</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="amount[]" id="amount" class="form-control" value="<?php echo $costdetail[5];?>">
                                        </div>       
                                    </div> 


                                    <div class="row form-group">
                                        <div class="col-md-3">
                                            <label>GST</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="gst[]" id="gst" class="gst form-control" value="<?php echo $costdetail[6];?>">
                                        </div>       
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col-md-3">
                                            <label>Total</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="total[]" id="total" class="form-control" value="<?php echo $costdetail[7];?>">
                                        </div>       
                                    </div> 

                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <span class='btn btn-danger' onclick="removercostdetail(event)" style=""> x </span>
                                </div>  
                            </div>
                        </div> 
                        <?php } ?>
                    </div>
            </div> <!-- end cost detail clone -->   

            <div class="col-md-12 smm_toppadding choosepackage">      
                <p class="formtitle">Floor Stock Interest</p>   
                <h4 class="new-costdetail"><span class="text-right btn" onclick="floorstockcloneform(event)" style="color:#900C12;"><i class="fa fa-plus"></i> Add New</span>
                </h4> 
                <input type="hidden" name="net_loanamt" id="net_loanamt" value="<?php echo $vehiclesdetail->floor_loan_amt_total;?>" class="form-control">  
                <input type="hidden" name="net_interestamt" id="net_interestamt" value="<?php echo $vehiclesdetail->floor_interest_amt_total;?>" class="form-control"> 
                <div id="floorstockinterest">      
                <?php
                    $floor = explode('}', $vehiclesdetail->floor_stock);

                    for($i=1;$i<count($floor);$i++)
                    {
                      $floorstock = explode(',', $floor[$i-1]);

                         ?> 
                    <div class="floorstock row">
                        <div class="col-md-4">
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Loan Amount</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="loanamt[]" class="form-control" value="<?php echo $floorstock[0];?>">
                                </div>  
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Start Date</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="date" name="startdate[]" class="form-control" value="<?php echo $floorstock[1];?>">
                                </div>       
                            </div>  
                        </div>
                        <div class="col-md-4">
                            <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>End Date</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="enddate[]" class="form-control" value="<?php echo $floorstock[2];?>">
                                    </div>       
                                </div> 

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Interest Amount </label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="interestamt[]" class="form-control" value="<?php echo $floorstock[3];?>">
                                    </div>       
                                </div> 
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                <div class="col-md-3">
                                    <label>Type</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="type[]" class="form-control" value="<?php echo $floorstock[4];?>">
                                </div>       
                            </div> 
                        </div>

                        <div class="col-md-1">
                            <div class="form-group">
                                <span class='btn btn-danger' onclick="removerfloorstock(event)" style=""> x </span>
                            </div> 
                        </div>
                       
                        
                    </div> 
                    <?php } ?> 
                </div>
            </div><!-- end floor stock interest  --> 

            <div class="col-md-12 smm_toppadding choosepackage">      
                <p class="formtitle">Broker Payout Details</p>  
                <h4 class="new-costdetail"><span class="text-right btn" onclick="brokerpayoutcloneform(event)" style="color:#900C12;"><i class="fa fa-plus"></i> Add New</span>
                </h4>  
                <input type="hidden" name="net_payout" id="net_payout" value="<?php echo $vehiclesdetail->broker_total;?>" class="form-control">  
                <div id="brokerpayoutdetail">  
                <?php
                    $broker = explode('}', $vehiclesdetail->broker_payout);

                    for($i=1;$i<count($broker);$i++)
                    {
                      $brokerpayout = explode(',', $broker[$i-1]);

                         ?>     
                    <div class="brokerpayout row">
                        <div class="col-md-4">
                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Broker</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="broker[]" class="form-control" value="<?php echo $brokerpayout[0];?>" >
                                </div> 
                                <div class="col-md-5">
                                    <input type="text" name="brokercode[]" class="form-control" value="<?php echo $brokerpayout[1];?>" >
                                </div>       
                                   
                            </div>   

                            <div class="row form-group">
                                <div class="col-md-4">
                                    <label>Gross Profit</label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" name="grossprofit[]" class="form-control" value="<?php echo $brokerpayout[2];?>">
                                </div>       
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>CIF (30%)</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="cif[]" class="form-control" value="<?php echo $brokerpayout[3];?>">
                                    </div>       
                                </div>   

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Paid Date</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="broker_paid_date[]" class="form-control" value="<?php echo $brokerpayout[4];?>">
                                    </div>       
                                </div> 
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Payout</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="payout[]" class="form-control" value="<?php echo $brokerpayout[5];?>">
                                    </div>       
                            </div> 
                            <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Percent(%)</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="percent[]" class="form-control" placeholder="0.00" value="<?php echo $brokerpayout[6];?>">
                                    </div>       
                            </div> 
                        </div>
                        
                        <div class="col-md-1">
                            <div class="form-group">
                                <span class='btn btn-danger' onclick="removerbrokerpayout(event)" style=""> x </span>
                            </div> 
                        </div>
                    </div> 
                    <?php } ?> 
                </div>
                     
            </div><!-- broker payout -->

            <div class="col-md-12 smm_toppadding choosepackage">      
                <p class="formtitle">Commission Details</p> 
                <h4 class="new-costdetail"><span class="text-right btn" onclick="commissioncloneform(event)" style="color:#900C12;"><i class="fa fa-plus"></i> Add New</span>
                </h4>  
                <input type="hidden" name="net_commission" id="net_commission" value="<?php echo $vehiclesdetail->commission_total;?>" class="form-control">  
                    <div id="commissdetail"> 
                    <?php
                    $commission = explode('}', $vehiclesdetail->commission_detail);

                    for($i=1;$i<count($commission);$i++)
                    {
                      $commissiondetail = explode(',', $commission[$i-1]);

                         ?>       
                        <div class="commission row">
                            <div class="col-md-3">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Code</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="code[]" class="form-control" value="<?php echo $commissiondetail[0];?>">
                                        </div>  
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Common. Type</label>
                                        </div>
                                        <div class="col-md-8">
                                            <?=form_dropdown("commontype[]",$getcommission_list,$commissiondetail[1],"class='form-control'")?>
                                        </div>       
                                    </div>   

                                    
                            </div>
                            <div class="col-md-3">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Tran. Dt</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" name="trandt[]" class="form-control" value="<?php echo $commissiondetail[2];?>">
                                        </div>       
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Notes</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="notes[]" class="form-control" value="<?php echo $commissiondetail[3];?>">
                                        </div>       
                                    </div> 
                            </div>
                            <div class="col-md-2">
                                <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Commission</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="commission[]" id="commission" class="form-control" value="<?php echo $commissiondetail[4];?>">
                                        </div>       
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Put to Cost</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="puttocost[]" class="form-control" value="<?php echo $commissiondetail[5];?>">
                                        </div>       
                                    </div> 
                            </div>
                            <div class="col-md-3">
                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Cheque</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="cheque[]" class="form-control" value="<?php echo $commissiondetail[6];?>">
                                        </div>       
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col-md-4">
                                            <label>Paid Date</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="date" name="paiddate[]" class="form-control" value="<?php echo $commissiondetail[7];?>">
                                        </div>       
                                    </div> 
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <span class='btn btn-danger' onclick="removercommission(event)" style=""> x </span>
                                </div> 
                            </div>
                        </div>
                        <?php } ?>   
                    </div>
            </div><!-- end commission detail  -->

                
            <div class="col-md-12 smm_toppadding choosepackage">      
                <p class="formtitle">Parking Fee</p>   
                <h4 class="new-costdetail"><span class="text-right btn" onclick="parkingfeecloneform(event)" style="color:#900C12;"><i class="fa fa-plus"></i> Add New</span>
                </h4> 
                <input type="hidden" name="net_parkingfee" id="net_parkingfee" value="<?php echo $vehiclesdetail->net_parkingfee;?>" class="form-control">  
                <div id="parkingfee">   
                <?php
                    $parking = explode('}', $vehiclesdetail->parking_fee);

                    for($i=1;$i<count($parking);$i++)
                    {
                      $parkingfee = explode(',', $parking[$i-1]);

                         ?>      
                    <div class="parking row">
                        <div class="col-md-2">
                            <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Rate (%)</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="rate[]" class="form-control" value="<?php echo $parkingfee[0];?>">
                                    </div>  
                                </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Start Date</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="parking_start_date[]" class="form-control" value="<?php echo $parkingfee[1];?>">
                                    </div>       
                                </div> 
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>End Date</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="date" name="parking_end_date[]" class="form-control" value="<?php echo $parkingfee[2];?>">
                                    </div>       
                                </div> 
                        </div>
                        <div class="col-md-3">
                            <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Total Parking Fee</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="total_parkingfee[]" id="parkingfee" class="form-control" value="<?php echo $parkingfee[3];?>">
                                    </div>       
                                </div> 
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <span class='btn btn-danger' onclick="removerparking(event)" style=""> x </span>
                            </div> 
                        </div>
                    </div> 
                    <?php } ?>    
                    </div>  
            </div><!-- parking fee -->

                <div class="col-md-12 smm_toppadding">      
                <p class="formtitle">Transaction Type</p>          
                    <div class="row">
                        <div class="col-md-4">
                                
                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Purchase</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="purchase" class="form-control" value="<?php echo $vehiclesdetail->purchase;?>">
                                    </div>       
                                </div>   

                                <div class="row form-group">
                                    <div class="col-md-4">
                                        <label>Sales</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="sales" class="form-control" value="<?php echo $vehiclesdetail->sales;?>">
                                    </div>       
                                </div> 
                        </div>

                        
                    </div>  
                </div><!-- transaction type -->

                
                
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
                <div class="row right">
                    <div class="col-md-12 ">
                        <a href="vehicles_detail/" class="btn mybtn btn-default">Cancel</a>
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

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
   
    window.onkeyup=function() {
        
        var items = document.querySelectorAll(".costdetail");
        var itemsArray = Array.prototype.slice.call(items,0);
        var amount, gst, total, netamt = 0,netgst = 0,netcosttotal = 0;
        itemsArray.forEach(function(el){
            amount = el.querySelector('input[name="amount[]"]').value;
            gst = el.querySelector('input[name="gst[]"]').value;
           
            total = +amount + +gst;
            el.querySelector('input[name="total[]"]').value = total;
            netamt+=parseFloat(amount);
            netgst+=parseFloat(gst);
            netcosttotal+=parseFloat(total);
        });
        document.getElementById('net_amount').value=netamt.toFixed(2);
        document.getElementById('net_gst').value=netgst.toFixed(2);
        document.getElementById('cost_total').value=netcosttotal.toFixed(2);
    /*end costdetail*/

        var items = document.querySelectorAll(".commission");
        var itemsArray = Array.prototype.slice.call(items,0);
        var commission, netcommission = 0;
        itemsArray.forEach(function(el){
            commission = el.querySelector('input[name="commission[]"]').value;
            
            netcommission+=parseFloat(commission);
        });
        document.getElementById('net_commission').value=netcommission.toFixed(2);
    /*end commission*/

        var items = document.querySelectorAll(".floorstock");
        var itemsArray = Array.prototype.slice.call(items,0);
        var loanamt,interestamt, netloanamt = 0, netinterestamt = 0;
        itemsArray.forEach(function(el){
            loanamt = el.querySelector('input[name="loanamt[]"]').value;
            interestamt= el.querySelector('input[name="interestamt[]"]').value;

            netloanamt+=parseFloat(loanamt);
            netinterestamt+=parseFloat(interestamt);
        });
        document.getElementById('net_loanamt').value=netloanamt.toFixed(2);
        document.getElementById('net_interestamt').value=netinterestamt.toFixed(2);
    /*end floor stock*/

        var items = document.querySelectorAll(".brokerpayout");
        var itemsArray = Array.prototype.slice.call(items,0);
        var payout, netpayout = 0;
        itemsArray.forEach(function(el){
            payout = el.querySelector('input[name="payout[]"]').value;

            netpayout+=parseFloat(payout);
            
        });
        document.getElementById('net_payout').value=netpayout.toFixed(2);
        
    /*end broker payout*/
        var items = document.querySelectorAll(".parking");
        var itemsArray = Array.prototype.slice.call(items,0);
        var parkingfee, netparkingfee = 0;
        itemsArray.forEach(function(el){
            parkingfee = el.querySelector('input[name="total_parkingfee[]"]').value;
            
            netparkingfee+=parseFloat(parkingfee);
        });
        document.getElementById('net_parkingfee').value=netparkingfee.toFixed(2);
    /*end parking fee*/
   }

   function searchmakemodel(vehinoid)
    {
        data="vehinoid="+vehinoid;
        $.ajax({
            type:"POST",
            url:"vehicles_detail/searchmakeandmodel",
            data:data,

            success : function(e)
            {
               var v=JSON.parse(e);
                $("#make").val(v.brand_name);
                $("#model").val(v.model_name);
                
            }
        });
    }
</script>