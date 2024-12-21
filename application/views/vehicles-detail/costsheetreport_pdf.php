<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo base_url(); ?>">
	<meta charset="utf-8">
	<title>PDF</title>
	<link rel="stylesheet" type="text/css" href="assets/css/gistfile1.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	@page 
    {
        size:  auto;   /* auto is the initial value */
        margin: 10mm 10mm 0mm 10mm;  /* this affects the margin in the printer settings */
    }
	body{
			background-color: #fff;
			margin: 0 auto;
			font-family: Arial;
		}
		p{
			color: #000;
			line-height: normal;
			font-size: 12px !important;
		}		
		.padding_md{
			padding-top:50px;
			padding-bottom:50px;
		}
		.padding_sm{
			padding-top:10px;
			padding-bottom:10px;
		}
		.bottompadding_sm{
			padding-bottom: 10px;
		}
		.toppadding_md{
			padding-top:50px;
		}
		.toppadding_sm{
			padding-top:10px;
		}
		.leftpadding_sm{
			padding-left: 10px;
			padding-right: 10px;
		}
		.leftpadding_xs{
			padding-left: 5px;
			padding-right: 5px;
		}
		.nopadding{
			padding: 0px !important;
		}
		.right_info{
            float: right;
            text-align: right;
        }
        .right{
        	float: right !important;
        }
		#container{
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		}
		#body{
			color: #000 !important;
		}
		.content{
			border: 1px solid #000;
		}
		.content_wrapper table th{
			border_bottom: 1px solid #000;
		}		
		.sm-font{
			font-size: 8px !important;
		}
		.xs-font{
			font-size: 7px !important;
		}
		.md-font{
			font-size: 14px !important;
		}        
        .text_center{
        	text-align: center;
        }
        .text_right{
        	text-align: right;
        }
        table{
        	font-size: 12px;        	
        	border-collapse: collapse;
        }
        table tr td{
        	padding: 3px !important;
        }
        .txtright{
        	text-align: right !important;
        }
        .txtleft{
        	text-align: left !important;
        }
	</style>
</head>
<body>
<div id="container">
	<div id="body">
		<div class="col-sm-12">
			<div class="col-sm-8" style="width:50%">
				<p style="font-size: 16px;"><b>Vehicle Detail/Cost Sheet Report</b></p>	
				<p>Company Name: Everest Auto Pte Ltd</p>			
			</div>
			<div class="col-sm-4" style="text-align: right;float: right">
				<img src="<?=base_url()?>/assets/images/logo.png" style="width:100px;height:auto;margin-top: -20px;">
			</div>
		</div>
		<div class="col-sm-12">
			<table width="100%">
				<tr>
					<td>VEHICLE NUMBER</td>
					<td width="30%">: <?php echo $vehiclesdetail->car_plate;?></td>
					<td>PREV VEHICLE NO</td>
					<td>: <?php echo $vehiclesdetail->prev_vehino;?></td>
				</tr>
				<tr>
					<td>MAKE AND MODEL</td>
					<td>: <?php echo $vehiclesdetail->makemodel;?></td>
					<td>GST</td>
					<td>: <?php echo $vehiclesdetail->gsttxt;?></td>					
				</tr>
				<tr>
					<td>BUY CODE</td>
					<td>: <?php echo $vehiclesdetail->buycode;?></td>
					<td>PURCHASE DATE</td>
					<td>: <?php echo $vehiclesdetail->purchase_date;?></td>
				</tr>
				<tr>
					<td>SELL CODE</td>
					<td>: <?php echo $vehiclesdetail->sellcode;?></td>
					<td>SALES BOOKNG DATE</td>
					<td>: <?php echo $vehiclesdetail->salesbooking_date;?></td>
				</tr>
				<tr>
					<td>BROKER 1 CODE</td>
					<td>: <?php echo $vehiclesdetail->broker1code;?></td>
					<td>PURCHASE AGREEMENT</td>
					<td>: <?php echo $vehiclesdetail->purchase_agrement;?></td>
				</tr>
				<tr>
					<td>BROKER 2 CODE</td>
					<td>: <?php echo $vehiclesdetail->broker2code;?></td>
					<td>SALES AGREEMENT</td>
					<td>: <?php echo $vehiclesdetail->sales_agrement;?></td>
				</tr>
				<tr>
					<td>BROKER 3 CODE</td>
					<td>: <?php echo $vehiclesdetail->broker3code;?></td>
					<td>ETS PAPER FROM</td>
					<td>: <?php echo $vehiclesdetail->etspaper_from;?></td>
				</tr>
				<tr>
					<td>E-OUT DATE</td>
					<td>: <?php echo $vehiclesdetail->sellcode;?></td>
					<td>ETS PAPER TO</td>
					<td>: <?php echo $vehiclesdetail->etspaper_to;?></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-12 smm_toppadding">
			<table class="table-sm" style="width:80%;">
	                <tr>                                      
	                      <th style="width:30%"></th>
	                      <th style="width: 5%;"></th>
	                      <th style="width: 18%;text-decoration: underline;" class="txtright">Amount Value</th>
	                      <th style="width: 18%;text-decoration: underline;" class="txtright">GST Value</th>
	                </tr>
	                <tr>
	                    <td>PURCHASE PRICE</td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $vehiclesdetail->purchase_price;?></td>
	                    <td class="txtright "><?php echo $vehiclesdetail->purchaseprice_gst;?></td>
	                </tr>
	                <?php                                
                    $costdetail = explode('}', $vehiclesdetail->cost_details);
                    for($i=1;$i<count($costdetail);$i++)
                        {
                          $costdetails = explode(',',$costdetail[$i-1]);

                        ?>
	                <tr>
	                    <td><?php echo $costdetails[0];?></td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $costdetails[6];?></td>
	                    <td class="txtright "><?php echo $costdetails[5];?></td>
	                </tr>
	                <?php } ?> 
	                
	                
	                
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td class="txtright">...........................</td>
	                    <td class="txtright">...........................</td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td class="txtright"></td>
	                    <td class="txtright"><?php echo $vehiclesdetail->total_gst;?></td>
	                </tr>
	                <tr>
	                    <td>TOTAL COST PRICE</td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $vehiclesdetail->totalcostprice;?></td>
	                    <td class="txtright"><?php echo $vehiclesdetail->totalcostprice_gst;?></td>
	                </tr>
	                <?php                                
                    $commission = explode('}', $vehiclesdetail->commission_detail);
                    for($i=1;$i<count($commission);$i++)
                        {
                          $commiss = explode(',',$commission[$i-1]);
                          
                        ?>
	                <tr>
	                    <td><?php echo $commiss[0];?></td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $commiss[3];?></td>
	                    <td class="txtright"><?php echo $commiss[4];?></td>
	                </tr>
	                <?php } ?>
	                
	                <tr>
	                    <td>SELLING PRICE</td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $vehiclesdetail->sellingprice;?></td>
	                    <td class="txtright"><?php echo $vehiclesdetail->sellingprice_gst;?></td>
	                </tr>
	                
	                <tr>
	                    <td>Less TOTAL COST PRICE</td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $vehiclesdetail->lesstotalcostprice;?></td>
	                    <td class="txtright"><?php echo $vehiclesdetail->lesstotalcostprice_gst;?></td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td class="txtright">............................</td>
	                    <td class="txtright">............................</td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td class="txtright"></td>
	                    <td class="txtright"><?php echo $vehiclesdetail->totalgst;?></td>
	                </tr>
	                <tr>
	                    <td>G.S.T Incurred(Input)</td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $vehiclesdetail->gstinput;?></td>
	                    <td class="txtright">GST% :7.00</td>
	                </tr>
	                <tr>
	                    <td>G.S.T Incurred(Output)</td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $vehiclesdetail->gstout;?></td>
	                    <td class="txtright">GST% :7.00</td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td class="txtright">............................</td>
	                    <td></td>
	                </tr>
	                <tr>
	                    <td>GROSS PROFIT/LOSS</td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $vehiclesdetail->grossprofit;?></td>
	                    <td class="txtright"></td>
	                </tr>
	                <?php                                
                    $brokerpayout = explode('}', $vehiclesdetail->broker_payout);
                    for($i=1;$i<count($brokerpayout);$i++)
                        {
                          $broker = explode(',',$brokerpayout[$i-1]);
                        ?>
	                <tr>
	                    <td><?php echo $broker[0];?></td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $broker[1];?></td>
	                    <td class="txtright"></td>
	                </tr>
	                <?php } ?>
	                	            
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td class="txtright">............................</td>
	                    <td></td>
	                </tr>
	                <tr>
	                    <td>NET PROFIT/LOSS</td>
	                    <td>:</td>
	                    <td class="txtright"><?php echo $vehiclesdetail->netprofitloss;?></td>
	                    <td class="txtright"></td>
	                </tr>
	                <tr>
	                    <td></td>
	                    <td></td>
	                    <td class="txtright">==========</td>
	                    <td></td>
	                </tr>
	        </table>
		</div>
		
	</div>
</div>
</body>
</html>