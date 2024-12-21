<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vehicle Detail/Cost Sheet Report</h1>
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
                        <h3 class="card-title">Create Form</h3>
                    </div>
                    <form method="post" enctype="multipart/form-data" action="<?php echo site_url('vehicles_detail/update') ?>">
                    <input type="hidden" name="id" value="<?php echo $vehiclesdetail->id;?>">
                    <div class="card-body costsheetreport">
                        <div class="col-md-12"> 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>VEHICLE NUMBER</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <?=form_dropdown("vehino",$vehicleslist,$vehiclesdetail->vehino,"class='form-control' onchange=searchmakemodel(this.value)")?>
                                                </div>       
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>MAKE</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="make" value="<?php echo $vehiclesdetail->make;?>" id="make" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>MODEL</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="model" value="<?php echo $vehiclesdetail->model;?>" id="model" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>BUY CODE</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="buycode" value="<?php echo $vehiclesdetail->buycode;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>SELL CODE</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="sellcode" value="<?php echo $vehiclesdetail->sellcode;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>BROKER 1 CODE</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="broker1code" value="<?php echo $vehiclesdetail->broker1code;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>BROKER 2 CODE</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="broker2code" value="<?php echo $vehiclesdetail->broker2code;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>BROKER 3 CODE</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="broker3code" value="<?php echo $vehiclesdetail->broker3code;?>" class="form-control">
                                                </div>
                                        </div>
                                        
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>E-Out Date</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="date" name="eoutdate" value="<?php echo $vehiclesdetail->eoutdate;?>" class="form-control">
                                                </div>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>PREV VEHICLE NO.</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="prev_vehino" value="<?php echo $vehiclesdetail->prev_vehino;?>" class="form-control">
                                                </div>       
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>GST</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="gsttxt" value="<?php echo $vehiclesdetail->gsttxt;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>Purchase Date</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="date" name="purchase_date" value="<?php echo $vehiclesdetail->purchase_date;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>Sales Booking Date</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="date" name="salesbooking_date" value="<?php echo $vehiclesdetail->salesbooking_date;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>PURCHASE AGREMENT</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="purchase_agrement" value="<?php echo $vehiclesdetail->purchase_agrement;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>SALES AGREMENT</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="sales_agrement" value="<?php echo $vehiclesdetail->sales_agrement;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>ETS Paper From</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="etspaper_from" value="<?php echo $vehiclesdetail->etspaper_from;?>" class="form-control">
                                                </div>
                                        </div>
                                        <div class="form-group row">                                
                                                <div class="col-md-4">
                                                    <label>ETS Paper To</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="etspaper_to" value="<?php echo $vehiclesdetail->etspaper_to;?>" class="form-control" >
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
                                        <tr>
                                            <td>BUY-IN COMMISSION</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="buyincommission" value="<?php echo $vehiclesdetail->buyincommission;?>" id="buyincommission" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="buyincommission_gst" value="<?php echo $vehiclesdetail->buyincommission_gst;?>" id="buyincommission_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>REPAIR</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="repair" value="<?php echo $vehiclesdetail->repair;?>" id="repair" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="repair_gst" value="<?php echo $vehiclesdetail->repair_gst;?>" id="repair_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>PETROL</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="petrol" value="<?php echo $vehiclesdetail->petrol;?>" id="petrol" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="petrol_gst" value="<?php echo $vehiclesdetail->petrol_gst;?>" id="petrol_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>CO ADMIN</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="coadmin" value="<?php echo $vehiclesdetail->coadmin;?>" id="coadmin" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="coadmin_gst" value="<?php echo $vehiclesdetail->coadmin_gst;?>" id="coadmin_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>PARKING COUPON</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="parkingcoupon" value="<?php echo $vehiclesdetail->parkingcoupon;?>" id="parkingcoupon" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="parkingcoupon_gst" value="<?php echo $vehiclesdetail->parkingcoupon_gst;?>" id="parkingcoupon_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>COE BY COMPANY</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="coebycompany" value="<?php echo $vehiclesdetail->coebycompany;?>" id="coebycompany" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="coebycompany_gst" value="<?php echo $vehiclesdetail->coebycompany_gst;?>" id="coebycompany_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>OVER TRADE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="overtrade" value="<?php echo $vehiclesdetail->overtrade;?>" id="overtrade" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="overtrade_gst" value="<?php echo $vehiclesdetail->overtrade_gst;?>" id="overtrade_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>MISCELLANEOUS</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="miscellaneous" value="<?php echo $vehiclesdetail->miscellaneous;?>" id="miscellaneous" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="miscellaneous_gst" value="<?php echo $vehiclesdetail->miscellaneous_gst;?>" id="miscellaneous_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>ADVERTISMENT FEE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="advertisment" value="<?php echo $vehiclesdetail->advertisment;?>" id="advertisment" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="advertisment_gst" value="<?php echo $vehiclesdetail->advertisment_gst;?>" id="advertisment_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>SURCHARGE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="surcharge" value="<?php echo $vehiclesdetail->surcharge;?>" id="surcharge" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="surcharge_gst" value="<?php echo $vehiclesdetail->surcharge_gst;?>" id="surcharge_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>OUTSIDE PURCHASE COMM</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="outsidepurchasecomm" value="<?php echo $vehiclesdetail->outsidepurchasecomm;?>" id="outsidepurchasecomm" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="outsidepurchasecomm_gst" value="<?php echo $vehiclesdetail->outsidepurchasecomm_gst;?>" id="outsidepurchasecomm_gst" class="form-control txtright" ></td>
                                        </tr>
                                       
                                        <tr>
                                            <td>OUTSIDE SALE COMM</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="outsidesalecomm" value="<?php echo $vehiclesdetail->outsidesalecomm;?>" id="outsidesalecomm" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="outsidesalecomm_gst" value="<?php echo $vehiclesdetail->outsidesalescomm_gst;?>" id="outsidesalecomm_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>HP ADMIN FEE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="hpadminfee" value="<?php echo $vehiclesdetail->hpadminfee;?>" id="hpadminfee" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="hpadminfee_gst" value="<?php echo $vehiclesdetail->hpadminfee_gst;?>" id="hpadminfee_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>CONVERSION FEE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="conversionfee" value="<?php echo $vehiclesdetail->conversionfee;?>" id="conversionfee" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="conversionfee_gst" value="<?php echo $vehiclesdetail->conversionfee_gst;?>" id="conversionfee_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>DEPOSIT FOREITED</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="depositforeited" value="<?php echo $vehiclesdetail->depositforeited;?>" id="depositforeited" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="depositforeited_gst" value="<?php echo $vehiclesdetail->depositforeited_gst;?>" id="depositforeited_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>E-TRANSFER FEE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="etransferfee" value="<?php echo $vehiclesdetail->etransferfee;?>" id="etransferfee" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="etransferfee_gst" value="<?php echo $vehiclesdetail->etransferfee_gst;?>" id="etransferfee_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>EXTENSION</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="extension" value="<?php echo $vehiclesdetail->extension;?>" id="extension" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="extension_gst" value="<?php echo $vehiclesdetail->extension_gst;?>" id="extension_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>INSPECTION</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="inspection" value="<?php echo $vehiclesdetail->inspection;?>" id="inspection" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="inspection_gst" value="<?php echo $vehiclesdetail->inspection_gst;?>" id="inspection_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>LAY UP</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="layup" value="<?php echo $vehiclesdetail->layup;?>" id="layup" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="layup_gst" value="<?php echo $vehiclesdetail->layup_gst;?>" id="layup_gst" class="form-control txtright" ></td>
                                        </tr>

                                        <tr>
                                            <td>BANK SURCHARGE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="banksurcharge" value="<?php echo $vehiclesdetail->banksurcharge;?>" id="banksurcharge" class="form-control txtright" ></td>
                                            <td class="txtright "><input type="text" name="banksurcharge_gst" value="<?php echo $vehiclesdetail->banksurcharge_gst;?>" id="banksurcharge_gst" class="form-control txtright" ></td>
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
                                            <td class="txtright"><input type="text" name="total_gst" value="<?php echo $vehiclesdetail->total_gst;?>" id="total_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>TOTAL COST PRICE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="totalcostprice" value="<?php echo $vehiclesdetail->totalcostprice;?>" id="totalcostprice" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="totalcostprice_gst" value="<?php echo $vehiclesdetail->totalcostprice_gst;?>" id="totalcostprice_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>Less SELL-OUT ADMIN COMM</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="selloutadmincomm" value="<?php echo $vehiclesdetail->selloutadmincomm;?>" id="selloutadmincomm" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="selloutadmincomm_gst" value="<?php echo $vehiclesdetail->selloutadmincomm_gst;?>" id="selloutadmincomm_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>Less SELL-OUT COMM</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="selloutcomm" value="<?php echo $vehiclesdetail->selloutcomm;?>" id="selloutcomm" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="selloutcomm_gst" value="<?php echo $vehiclesdetail->selloutcomm_gst;?>" id="selloutcomm_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>SELLING PRICE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="sellingprice" value="<?php echo $vehiclesdetail->sellingprice;?>" id="sellingprice" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="sellingprice_gst" value="<?php echo $vehiclesdetail->sellingprice_gst;?>" id="sellingprice_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>INSURANCE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="insurance" value="<?php echo $vehiclesdetail->insurance;?>" id="insurance" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="insurance_gst" value="<?php echo $vehiclesdetail->insurance_gst;?>" id="insurance_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>BANK SURCHARGE</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="banksurcharge2" value="<?php echo $vehiclesdetail->banksurcharge;?>" id="banksurcharge2" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="banksurcharge2_gst" value="<?php echo $vehiclesdetail->banksurcharge_gst;?>" id="banksurcharge2_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>HP/LOAN COMM</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="hploancomm" value="<?php echo $vehiclesdetail->hploancomm;?>" id="hploancomm" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="hploancomm_gst" value="<?php echo $vehiclesdetail->hploancomm_gst;?>" id="hploancomm_gst" class="form-control txtright" ></td>
                                        </tr>
                                        <tr>
                                            <td>ADMIN FEE COLLECTED</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="adminfee" value="<?php echo $vehiclesdetail->adminfee;?>" id="adminfee" class="form-control txtright" ></td>
                                            <td class="txtright"><input type="text" name="adminfee_gst" value="<?php echo $vehiclesdetail->adminfee_gst;?>" id="adminfee_gst" class="form-control txtright" ></td>
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
                                            <td class="txtright"><input type="text" name="totalgst" value="<?php echo $vehiclesdetail->totalgst;?>" class="form-control txtright" ></td>
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
                                        <tr>
                                            <td>BROKER1</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="broker1" value="<?php echo $vehiclesdetail->broker1;?>" id="broker1" class="form-control txtright" > </td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <tr>
                                            <td>BROKER2</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="broker2" value="<?php echo $vehiclesdetail->broker2;?>" id="broker2" class="form-control txtright" > </td>
                                            <td class="txtright"></td>
                                        </tr>
                                        <tr>
                                            <td>BROKER3</td>
                                            <td>:</td>
                                            <td class="txtright"><input type="text" name="broker3" value="<?php echo $vehiclesdetail->broker3;?>" id="broker3" class="form-control txtright" > </td>
                                            <td class="txtright"></td>
                                        </tr>
                                    
                                    
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
                        <div class="col-md-12 smm_toppadding">
                                <p class="formtitle">COST DETAILS </p>
                                <div class="row">
                                <table class="table-sm profitloss" style="width:100%;">
                                          <thead>
                                            <tr>                                      
                                                  <th width="20%">COST TYPE</th>
                                                  <th width="20%">DESCRIPTION</th>
                                                  <th width="10%">REF.DATE</th>
                                                  <th width="10%">REF.NO</th>
                                                  <th width="10%" class="txtright">AMOUNT</th>
                                                  <th width="10%" class="txtright">GST</th>
                                                  <th width="10%" class="txtright">TOTAL</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                                <td>REPAIR</td>
                                                <td><input type="text" name="repair1des" value="<?php echo $vehiclesdetail->repair1des;?>" class="form-control"></td>
                                                <td><input type="date" name="repair1refdate" value="<?php echo $vehiclesdetail->repair1refdate;?>" class="form-control"></td>
                                                <td><input type="text" name="repair1refno" value="<?php echo $vehiclesdetail->repair1refno;?>" class="form-control"></td>
                                                <td><input type="text" name="repair1amount" value="<?php echo $vehiclesdetail->repair1amount;?>" id="repair1amount" class="form-control txtright"></td>
                                                <td><input type="text" name="repair1gst" value="<?php echo $vehiclesdetail->repair1gst;?>" id="repair1gst" class="form-control txtright"></td>
                                                <td><input type="text" name="totalrepair1" value="<?php echo $vehiclesdetail->totalrepair1;?>" id="totalrepair1" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>REPAIR</td>
                                                <td><input type="text" name="repair2des" value="<?php echo $vehiclesdetail->repair2des;?>" class="form-control"></td>
                                                <td><input type="date" name="repair2refdate" value="<?php echo $vehiclesdetail->repair2refdate;?>" class="form-control"></td>
                                                <td><input type="text" name="repair2refno" value="<?php echo $vehiclesdetail->repair2refno;?>" class="form-control"></td>
                                                <td><input type="text" name="repair2amount" value="<?php echo $vehiclesdetail->repair2amount;?>" id="repair2amount" class="form-control txtright"></td>
                                                <td><input type="text" name="repair2gst" value="<?php echo $vehiclesdetail->repair2gst;?>" id="repair2gst" class="form-control txtright"></td>
                                                <td><input type="text" name="totalrepair2" value="<?php echo $vehiclesdetail->totalrepair2;?>" id="totalrepair2" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>REPAIR</td>
                                                <td><input type="text" name="repair3des" value="<?php echo $vehiclesdetail->repair3des;?>" class="form-control"></td>
                                                <td><input type="date" name="repair3refdate" value="<?php echo $vehiclesdetail->repair3refdate;?>" class="form-control"></td>
                                                <td><input type="text" name="repair3refno" value="<?php echo $vehiclesdetail->repair3refno;?>" class="form-control"></td>
                                                <td><input type="text" name="repair3amount" value="<?php echo $vehiclesdetail->repair3amount;?>" id="repair3amount" class="form-control txtright"></td>
                                                <td><input type="text" name="repair3gst" value="<?php echo $vehiclesdetail->repair3gst;?>" id="repair3gst" class="form-control txtright"></td>
                                                <td><input type="text" name="totalrepair3" value="<?php echo $vehiclesdetail->totalrepair3;?>" id="totalrepair3" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>PETROL</td>
                                                <td><input type="text" name="petroldes" value="<?php echo $vehiclesdetail->petroldes;?>" class="form-control"></td>
                                                <td><input type="date" name="petrolrefdate" value="<?php echo $vehiclesdetail->petrolrefdate;?>" class="form-control"></td>
                                                <td><input type="text" name="petrolrefno" value="<?php echo $vehiclesdetail->petrolrefno;?>" class="form-control"></td>
                                                <td><input type="text" name="petrolamount" value="<?php echo $vehiclesdetail->petrolamount;?>" id="petrolamount" class="form-control txtright"></td>
                                                <td><input type="text" name="petrolgst" value="<?php echo $vehiclesdetail->petrolgst;?>" id="petrolgst" class="form-control txtright"></td>
                                                <td><input type="text" name="totalpetrol" value="<?php echo $vehiclesdetail->totalpetrol;?>" id="totalpetrol" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>PARKING COUPON</td>
                                                <td><input type="text" name="parkingdes" value="<?php echo $vehiclesdetail->parkingdes;?>" class="form-control"></td>
                                                <td><input type="date" name="parkingrefdate" value="<?php echo $vehiclesdetail->parkingrefdate;?>" class="form-control"></td>
                                                <td><input type="text" name="parkingrefno" value="<?php echo $vehiclesdetail->parkingrefno;?>" class="form-control"></td>
                                                <td><input type="text" name="parkingamount" value="<?php echo $vehiclesdetail->parkingamount;?>" id="parkingamount" class="form-control txtright"></td>
                                                <td><input type="text" name="parkinggst" value="<?php echo $vehiclesdetail->parkinggst;?>" id="parkinggst" class="form-control txtright"></td>
                                                <td><input type="text" name="totalparkingcoupon" value="<?php echo $vehiclesdetail->totalparkingcoupon;?>" id="totalparkingcoupon" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>ADVERTISMENT FEE</td>
                                                <td><input type="text" name="advertismentdes" value="<?php echo $vehiclesdetail->advertismentdes;?>" class="form-control"></td>
                                                <td><input type="date" name="advertismentrefdate" value="<?php echo $vehiclesdetail->advertismentrefdate;?>" class="form-control"></td>
                                                <td><input type="text" name="advertismentrefno" value="<?php echo $vehiclesdetail->advertismentrefno;?>" class="form-control"></td>
                                                <td><input type="text" name="advertismentamount" value="<?php echo $vehiclesdetail->advertismentamount;?>" id="advertismentamount" class="form-control txtright"></td>
                                                <td><input type="text" name="advertismentgst" value="<?php echo $vehiclesdetail->advertismentgst;?>" id="advertismentgst" class="form-control txtright"></td>
                                                <td><input type="text" name="totaladvertismentfee" value="<?php echo $vehiclesdetail->totaladvertismentfee;?>" id="totaladvertismentfee" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>E-TRANSFER FEE</td>
                                                <td><input type="text" name="etransferdes" value="<?php echo $vehiclesdetail->etransferdes;?>" class="form-control"></td>
                                                <td><input type="date" name="etransferrefdate" value="<?php echo $vehiclesdetail->etransferrefdate;?>" class="form-control"></td>
                                                <td><input type="text" name="etransferrefno" value="<?php echo $vehiclesdetail->etransferrefno;?>" class="form-control"></td>
                                                <td><input type="text" name="etransferamount" value="<?php echo $vehiclesdetail->etransferamount;?>" id="etransferamount" class="form-control txtright"></td>
                                                <td><input type="text" name="etransfergst" value="<?php echo $vehiclesdetail->etransfergst;?>" id="etransfergst" class="form-control txtright"></td>
                                                <td><input type="text" name="totaletransfer" value="<?php echo $vehiclesdetail->totaletransfer;?>" id="totaletransfer" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>BANK SURCHARGE </td>
                                                <td><input type="text" name="banksurchargedes" value="<?php echo $vehiclesdetail->banksurchargedes;?>" class="form-control"></td>
                                                <td><input type="date" name="banksurchargerefdate" value="<?php echo $vehiclesdetail->banksurchargerefdate;?>" class="form-control"></td>
                                                <td><input type="text" name="banksurchargerefno" value="<?php echo $vehiclesdetail->banksurchargerefno;?>" class="form-control"></td>
                                                <td><input type="text" name="banksurchargeamount" value="<?php echo $vehiclesdetail->banksurchargeamount;?>" id="banksurchargeamount" class="form-control txtright"></td>
                                                <td><input type="text" name="banksurchargegst" value="<?php echo $vehiclesdetail->banksurchargegst;?>" id="banksurchargegst" class="form-control txtright"></td>
                                                <td><input type="text" name="totalbanksurcharge" value="<?php echo $vehiclesdetail->totalbanksurcharge;?>" id="totalbanksurcharge" class="form-control txtright"></td>
                                            </tr>
                                            <tr style="border-top: 1px solid #aeacac;">
                                                <td>TOTAL</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><input type="text" name="totalamount" value="<?php echo $vehiclesdetail->totalamount;?>" id="totalamount" class="form-control txtright"></td>
                                                <td><input type="text" name="totalcostgst" value="<?php echo $vehiclesdetail->totalcostgst;?>" id="totalcostgst" class="form-control txtright"></td>
                                                <td><input type="text" name="totalcostdetail" value="<?php echo $vehiclesdetail->totalcostdetail;?>" id="totalcostdetail" class="form-control txtright"></td>
                                            </tr>
                                                
                                          </tbody>
                                    </table>
                                </div>
                        </div><!--  -->    
                        <div class="col-md-12 smm_toppadding">
                                <p class="formtitle">COMMISSION DETAILS</p>
                                <div class="row">
                                    <table class="table-sm profitloss" style="width:100%;">
                                          <thead>
                                            <tr>                                      
                                                  <th width="20%">COMMISSION TYPE</th>
                                                  <th width="20%">DESCRIPTION</th>
                                                  <th width="10%" class="txtright">PAID DATE</th>
                                                  <th width="10%" class="txtright">COMMISSION</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                                <td>BUY-IN COMMISSION</td>
                                                <td><input type="text" name="commi_des1" value="<?php echo $vehiclesdetail->commi_des1;?>" class="form-control"></td>
                                                <td><input type="date" name="commi_paiddate1" value="<?php echo $vehiclesdetail->commi_paiddate1;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="commission1" value="<?php echo $vehiclesdetail->commission1;?>" id="commission1" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>OUTSIDE PURCHASE COMM</td>
                                                <td><input type="text" name="commi_des2" value="<?php echo $vehiclesdetail->commi_des2;?>" class="form-control"></td>
                                                <td><input type="date" name="commi_paiddate2" value="<?php echo $vehiclesdetail->commi_paiddate2;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="commission2" value="<?php echo $vehiclesdetail->commission2;?>" id="commission2" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>Less SELL-OUT ADMIN COMM</td>
                                                <td><input type="text" name="commi_des3" value="<?php echo $vehiclesdetail->commi_des3;?>" class="form-control"></td>
                                                <td><input type="date" name="commi_paiddate3" value="<?php echo $vehiclesdetail->commi_paiddate3;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="commission3" value="<?php echo $vehiclesdetail->commission3;?>" id="commission3" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>Less SELL-OUT COMM</td>
                                                <td><input type="text" name="commi_des4" value="<?php echo $vehiclesdetail->commi_des4;?>" class="form-control"></td>
                                                <td><input type="date" name="commi_paiddate4" value="<?php echo $vehiclesdetail->commi_paiddate4;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="commission4" value="<?php echo $vehiclesdetail->commission4;?>" id="commission4" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>INSURANCE</td>
                                                <td><input type="text" name="commi_des5" value="<?php echo $vehiclesdetail->commi_des5;?>" class="form-control"></td>
                                                <td><input type="date" name="commi_paiddate5" value="<?php echo $vehiclesdetail->commi_paiddate5;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="commission5" value="<?php echo $vehiclesdetail->commission5;?>" id="commission5" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>BANK SURCHARGE </td>
                                                <td><input type="text" name="commi_des6" value="<?php echo $vehiclesdetail->commi_des6;?>" class="form-control"></td>
                                                <td><input type="date" name="commi_paiddate6" value="<?php echo $vehiclesdetail->commi_paiddate6;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="commission6" value="<?php echo $vehiclesdetail->commission6;?>" id="commission6" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>HP/LOAN COMM</td>
                                                <td><input type="text" name="commi_des7" value="<?php echo $vehiclesdetail->commi_des7;?>" class="form-control"></td>
                                                <td><input type="date" name="commi_paiddate7" value="<?php echo $vehiclesdetail->commi_paiddate7;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="commission7" value="<?php echo $vehiclesdetail->commission7;?>" id="commission7" class="form-control txtright"></td>
                                            </tr>
                                            <tr style="border-top: 1px solid #aeacac;">
                                                <td colspan="3">TOTAL</td>
                                                
                                                <td><input type="text" name="totalcommission" value="<?php echo $vehiclesdetail->totalcommission;?>" id="totalcommission" class="form-control txtright"></td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="col-md-12 smm_toppadding">
                                <p class="formtitle">FLOOR STOCK INTEREST</p>
                                <div class="row">
                                    <table class="table-sm profitloss" style="width:100%;">
                                          <thead>
                                            <tr>                                      
                                                  <th width="20%">FLOOR AMOUNT</th>
                                                  <th width="20%">START DATE</th>
                                                  <th width="10%">END DATE</th>
                                                  <th width="10%" class="txtright">TOTAL</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                                <td><input type="text" name="flooramt1" value="<?php echo $vehiclesdetail->flooramt1;?>" class="form-control"></td>
                                                <td><input type="date" name="startdate1" value="<?php echo $vehiclesdetail->startdate1;?>" class="form-control"></td>
                                                <td><input type="date" name="enddate1" value="<?php echo $vehiclesdetail->enddate1;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="total1" value="<?php echo $vehiclesdetail->total1;?>" id="total1" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="flooramt2" value="<?php echo $vehiclesdetail->flooramt2;?>" class="form-control"></td>
                                                <td><input type="date" name="startdate2" value="<?php echo $vehiclesdetail->startdate2;?>" class="form-control"></td>
                                                <td><input type="date" name="enddate2" value="<?php echo $vehiclesdetail->enddate2;?>" class="form-control txtright"></td>
                                                <td><input type="text" name="total2" value="<?php echo $vehiclesdetail->total2;?>" id="total2" class="form-control txtright"></td>
                                            </tr>
                                            
                                            <tr style="border-top: 1px solid #aeacac;">
                                                <td colspan="3">TOTAL</td>
                                                
                                                <td><input type="text" name="totalfloorstock" value="<?php echo $vehiclesdetail->totalfloorstock;?>" id="totalfloorstock" class="form-control txtright"></td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                        </div>
                        <div class="col-md-12 smm_toppadding">
                                <p class="formtitle">BROKERS PAYOUT DETAILS</p>
                                <div class="row">
                                    <table class="table-sm profitloss" style="width:100%;">
                                          <thead>
                                            <tr>                                      
                                                  <th width="20%">BROKER</th>
                                                  <th width="20%">GROSS PROFIT</th>
                                                  <th width="10%">CIF (10%)</th>
                                                  <th width="10%">PAID DATE</th>
                                                  <th width="10%" class="txtright">PAYOUT</th>
                                            </tr>
                                          </thead>
                                          <tbody>
                                            <tr>
                                                <td>BROKER 1 ( 80.00 % )</td>
                                                <td><input type="text" name="profit1" value="<?php echo $vehiclesdetail->profit1;?>" class="form-control"></td>
                                                <td><input type="text" name="cif1" value="<?php echo $vehiclesdetail->cif1;?>" id="cif1" class="form-control"></td>
                                                <td><input type="date" name="broker_paiddate1" value="<?php echo $vehiclesdetail->broker_paiddate1;?>" class="form-control"></td>
                                                <td><input type="text" name="payout1" value="<?php echo $vehiclesdetail->payout1;?>" id="payout1" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>BROKER 2</td>
                                                <td><input type="text" name="profit2" value="<?php echo $vehiclesdetail->profit2;?>" class="form-control"></td>
                                                <td><input type="text" name="cif2" value="<?php echo $vehiclesdetail->cif2;?>" id="cif2" class="form-control"></td>
                                                <td><input type="date" name="broker_paiddate2" value="<?php echo $vehiclesdetail->broker_paiddate2;?>" class="form-control"></td>
                                                <td><input type="text" name="payout2" value="<?php echo $vehiclesdetail->payout2;?>" id="payout2" class="form-control txtright"></td>
                                            </tr>
                                            <tr>
                                                <td>BROKER 3</td>
                                                <td><input type="text" name="profit3" value="<?php echo $vehiclesdetail->profit3;?>" class="form-control"></td>
                                                <td><input type="text" name="cif3" value="<?php echo $vehiclesdetail->cif3;?>" id="cif3" class="form-control"></td>
                                                <td><input type="date" name="broker_paiddate3" value="<?php echo $vehiclesdetail->broker_paiddate3;?>" class="form-control"></td>
                                                <td><input type="text" name="payout3" value="<?php echo $vehiclesdetail->payout3;?>" id="payout3" class="form-control txtright"></td>
                                            </tr>
                                            <tr style="border-top: 1px solid #aeacac;">
                                                <td colspan="4">TOTAL</td>
                                                
                                                <td><input type="text" name="totalbroker" value="<?php echo $vehiclesdetail->totalbroker;?>" id="totalbroker" class="form-control txtright"></td>
                                            </tr>
                                          </tbody>
                                    </table>
                                </div>
                        </div>
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
                </div>
            </div>
            


      </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $('#banksurcharge').keyup(function (){
            $('#banksurcharge2').val($(this).val()); // <-- reverse your selectors here
        });
        $('#banksurcharge_gst').keyup(function (){
            $('#banksurcharge2_gst').val($(this).val()); // <-- and here
        });
$(document).ready(function() {
      //this calculates values automatically 

      gettotalamt();
      $("#purchase_price, #buyincommission, #repair, #petrol, #coadmin, #parkingcoupon, #coebycompany, #overtrade, #miscellaneous, #advertisment, #surcharge, #outsidepurchasecomm, #outsidesalecomm, #hpadminfee, #conversionfee, #depositforeited, #etransferfee, #extension, #inspection, #layup, #banksurcharge,#purchaseprice_gst, #buyincommission_gst, #repair_gst, #petrol_gst, #coadmin_gst, #parkingcoupon_gst, #coebycompany_gst, #overtrade_gst, #miscellaneous_gst, #advertisment_gst, #surcharge_gst, #outsidepurchasecomm_gst, #outsidesalecomm_gst, #hpadminfee_gst, #conversionfee_gst, #depositforeited_gst, #etransferfee_gst, #extension_gst, #inspection_gst, #layup_gst, #banksurcharge_gst, #selloutadmincomm, #selloutcomm, #sellingprice, #insurance,#banksurcharge2, #hploancomm, #adminfee,#totalcostprice_gst, #selloutadmincomm_gst, #selloutcomm_gst, #sellingprice_gst, #insurance_gst,#banksurcharge2_gst, #hploancomm_gst, #adminfee_gst, #lesstotalcostprice, #gstout,#grossprofit,#broker1,#broker2,#broker3,#broker4,#totalrepair1,#totalrepair2,#totalrepair3,#totalpetrol,#totalparkingcoupon,#totaladvertismentfee,#totaletransfer,#totalbanksurcharge,#repair1gst,#repair2gst,#repair3gst,#petrolgst,#parkinggst,#advertismentgst,#etransfergst,#banksurchargegst,#repair1amount,#repair2amount,#repair3amount,#petrolamount,#parkingamount,#advertismentamount,#etransferamount,#banksurchargeamount,#commission1,#commission2,#commission3,#commission4,#commission5,#commission6,#commission7,#total1,#total2,#cif1,#cif2,#payout1,#payout2,#payout3").on("keydown keyup", function() {

          gettotalamt();
      });
  });
  function gettotalamt() 
  {
        var num1 = document.getElementById('purchase_price').value;
        var num2 = document.getElementById('buyincommission').value;
        var num3 = document.getElementById('repair').value;
        var num4 = document.getElementById('petrol').value;
        var num5 = document.getElementById('coadmin').value;
        var num6 = document.getElementById('parkingcoupon').value;
        var num7 = document.getElementById('coebycompany').value;
        var num8 = document.getElementById('overtrade').value;
        var num9 = document.getElementById('miscellaneous').value;
        var num10 = document.getElementById('advertisment').value;
        var num11 = document.getElementById('surcharge').value;
        var num12 = document.getElementById('outsidepurchasecomm').value;
        var num13 = document.getElementById('outsidesalecomm').value;
        var num14 = document.getElementById('hpadminfee').value;
        var num15 = document.getElementById('conversionfee').value;
        var num16 = document.getElementById('depositforeited').value;
        var num17 = document.getElementById('etransferfee').value;
        var num18 = document.getElementById('extension').value;
        var num19 = document.getElementById('inspection').value;
        var num20 = document.getElementById('layup').value;
        var num21 = document.getElementById('banksurcharge').value;

        var num22 = document.getElementById('purchaseprice_gst').value;
        var num23 = document.getElementById('buyincommission_gst').value;
        var num24 = document.getElementById('repair_gst').value;
        var num25 = document.getElementById('petrol_gst').value;
        var num26 = document.getElementById('coadmin_gst').value;
        var num27 = document.getElementById('parkingcoupon_gst').value;
        var num28 = document.getElementById('coebycompany_gst').value;
        var num29 = document.getElementById('overtrade_gst').value;
        var num30 = document.getElementById('miscellaneous_gst').value;
        var num31 = document.getElementById('advertisment_gst').value;
        var num32 = document.getElementById('surcharge_gst').value;
        var num33 = document.getElementById('outsidepurchasecomm_gst').value;
        var num34 = document.getElementById('outsidesalecomm_gst').value;
        var num35 = document.getElementById('hpadminfee_gst').value;
        var num36 = document.getElementById('conversionfee_gst').value;
        var num37 = document.getElementById('depositforeited_gst').value;
        var num38 = document.getElementById('etransferfee_gst').value;
        var num39 = document.getElementById('extension_gst').value;
        var num40 = document.getElementById('inspection_gst').value;
        var num41 = document.getElementById('layup_gst').value;
        var num42 = document.getElementById('banksurcharge_gst').value;

        var num43 = document.getElementById('totalcostprice').value;
        var num44 = document.getElementById('selloutadmincomm').value;
        var num45 = document.getElementById('selloutcomm').value;
        var num46 = document.getElementById('sellingprice').value;
        var num47 = document.getElementById('insurance').value;
        var num48 = document.getElementById('banksurcharge2').value;
        var num49 = document.getElementById('hploancomm').value;
        var num50 = document.getElementById('adminfee').value;

        var num51 = document.getElementById('totalcostprice_gst').value;
        var num52 = document.getElementById('selloutadmincomm_gst').value;
        var num53 = document.getElementById('selloutcomm_gst').value;
        var num54 = document.getElementById('sellingprice_gst').value;
        var num55 = document.getElementById('insurance_gst').value;
        var num56 = document.getElementById('banksurcharge2_gst').value;
        var num57 = document.getElementById('hploancomm_gst').value;
        var num58 = document.getElementById('adminfee_gst').value;

        var num59 = document.getElementById('lesstotalcostprice').value;
        var num60 = document.getElementById('gstout').value;

        var num61 = document.getElementById('cif1').value;
        var num62 = document.getElementById('cif2').value;
        // var num63 = document.getElementById('broker2_cif').value;
        // var num64 = document.getElementById('broker2_payout').value;

        var num65 = document.getElementById('grossprofit').value;
        var num66 = document.getElementById('broker1').value;
        var num67 = document.getElementById('broker2').value;
        var num68 = document.getElementById('broker3').value;

        var num69 = document.getElementById('totalrepair1').value;
        var num70 = document.getElementById('totalrepair2').value;
        var num71 = document.getElementById('totalrepair3').value;
        var num72 = document.getElementById('totalpetrol').value;
        var num73 = document.getElementById('totalparkingcoupon').value;
        var num74 = document.getElementById('totaladvertismentfee').value;
        var num75 = document.getElementById('totaletransfer').value;
        var num76 = document.getElementById('totalbanksurcharge').value;

        var num77 = document.getElementById('repair1gst').value;
        var num78 = document.getElementById('repair2gst').value;
        var num79 = document.getElementById('repair3gst').value;
        var num80 = document.getElementById('petrolgst').value;
        var num81 = document.getElementById('parkinggst').value;
        var num82 = document.getElementById('advertismentgst').value;
        var num83 = document.getElementById('etransfergst').value;
        var num84 = document.getElementById('banksurchargegst').value;

        var num85 = document.getElementById('repair1amount').value;
        var num86 = document.getElementById('repair2amount').value;
        var num87 = document.getElementById('repair3amount').value;
        var num88 = document.getElementById('petrolamount').value;
        var num89 = document.getElementById('parkingamount').value;
        var num90 = document.getElementById('advertismentamount').value;
        var num91 = document.getElementById('etransferamount').value;
        var num92 = document.getElementById('banksurchargeamount').value;


        var num93 = document.getElementById('commission1').value;
        var num94 = document.getElementById('commission2').value;
        var num95 = document.getElementById('commission3').value;
        var num96 = document.getElementById('commission4').value;
        var num97 = document.getElementById('commission5').value;
        var num98 = document.getElementById('commission6').value;
        var num99 = document.getElementById('commission7').value;

        var num100 = document.getElementById('total1').value;
        var num101 = document.getElementById('total2').value;

        var num102 = document.getElementById('payout1').value;
        var num103 = document.getElementById('payout2').value;
        var num104 = document.getElementById('payout3').value;
      
        var result1 = parseFloat(num1) + parseFloat(num2) + parseFloat(num3) + parseFloat(num4) + parseFloat(num5) + parseFloat(num6) + parseFloat(num7) + parseFloat(num8) + parseFloat(num9) + parseFloat(num10) + parseFloat(num11) + parseFloat(num12) + parseFloat(num13) + parseFloat(num14) + parseFloat(num15) + parseFloat(num16) + parseFloat(num17) + parseFloat(num18) + parseFloat(num19) + parseFloat(num20) + parseFloat(num21);
            if (!isNaN(result1)) {    
              document.getElementById('totalcostprice').value = result1.toFixed(2);   
            }

        var result2 = parseFloat(num22) + parseFloat(num23) + parseFloat(num24) + parseFloat(num25) + parseFloat(num26) + parseFloat(num27) + parseFloat(num28) + parseFloat(num29) + parseFloat(num30) + parseFloat(num31) + parseFloat(num32) + parseFloat(num33) + parseFloat(num34) + parseFloat(num35) + parseFloat(num36) + parseFloat(num37) + parseFloat(num38) + parseFloat(num39) + parseFloat(num40) + parseFloat(num41) + parseFloat(num42);
            if (!isNaN(result2)) {    
              document.getElementById('total_gst').value = result2.toFixed(2);   
            }       
        
        var result3 = parseFloat(num46) + parseFloat(num47) + parseFloat(num48) + parseFloat(num49) + parseFloat(num50) - parseFloat(num43) - parseFloat(num44) - parseFloat(num45);
            if (!isNaN(result3)) {    
              document.getElementById('lesstotalcostprice').value = result3.toFixed(2);   
            }

        var result4 = parseFloat(num51) + parseFloat(num52) + parseFloat(num53) + parseFloat(num54) + parseFloat(num55) + parseFloat(num56) + parseFloat(num57) + parseFloat(num58);
            if (!isNaN(result4)) {    
              document.getElementById('totalgst').value = result4.toFixed(2);   
            }

        var result5 = (parseFloat(num46) - parseFloat(num1)) / 107*7;
            if (!isNaN(result5)) {    
              document.getElementById('gstout').value = result5.toFixed(2);   
            }

        var result6 = parseFloat(num59) - parseFloat(num60);
            if (!isNaN(result6)) {    
              document.getElementById('grossprofit').value = result6.toFixed(2);   
            }

        var result7 = parseFloat(num61) + parseFloat(num102);
            if (!isNaN(result7)) {    
              document.getElementById('broker1').value = result7.toFixed(2);   
            }

        var result8 = parseFloat(num62) + parseFloat(num103);
            if (!isNaN(result8)) {    
              document.getElementById('broker2').value = result8.toFixed(2);   
            }

        var result9 = parseFloat(num65) - parseFloat(num66) - parseFloat(num67) - parseFloat(num68);
            if (!isNaN(result9)) {    
              document.getElementById('netprofitloss').value = result9.toFixed(2);   
            }

        var result10 = parseFloat(num69) + parseFloat(num70) + parseFloat(num71) + parseFloat(num72) + parseFloat(num73) + parseFloat(num74) + parseFloat(num75) + parseFloat(num76);
            if (!isNaN(result10)) {    
              document.getElementById('totalcostdetail').value = result10.toFixed(2);   
            }

        var result11 = parseFloat(num77) + parseFloat(num78) + parseFloat(num79) + parseFloat(num80) + parseFloat(num81) + parseFloat(num82) + parseFloat(num83) + parseFloat(num84);
            if (!isNaN(result11)) {    
              document.getElementById('totalcostgst').value = result11.toFixed(2);   
            }

        var result12 = parseFloat(num85) + parseFloat(num86) + parseFloat(num87) + parseFloat(num88) + parseFloat(num89) + parseFloat(num90) + parseFloat(num91) + parseFloat(num92);
            if (!isNaN(result12)) {    
              document.getElementById('totalamount').value = result12.toFixed(2);   
            }

        var result13 = parseFloat(num93) + parseFloat(num94) + parseFloat(num95) + parseFloat(num96) + parseFloat(num97) + parseFloat(num98) + parseFloat(num99);
            if (!isNaN(result13)) {    
              document.getElementById('totalcommission').value = result13.toFixed(2);   
            }

        var result14 = parseFloat(num100) + parseFloat(num101);
            if (!isNaN(result14)) {    
              document.getElementById('totalfloorstock').value = result14.toFixed(2);   
            }

        var result15 = parseFloat(num102) + parseFloat(num103) + parseFloat(num104);
            if (!isNaN(result15)) {    
              document.getElementById('totalbroker').value = result15.toFixed(2);   
            }
        
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