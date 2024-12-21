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
					<td width="20%">VEHICLE NUMBER</td>
					<td>: <?php echo $vehiclesdetail->car_plate;?></td>
				</tr>
				<tr>
					<td>MAKE AND MODEL</td>
					<td>: <?php echo $vehiclesdetail->makemodel;?></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-12 sm_toppadding">
			<p class="formtitle">COST DETAILS</p>
				<table class="table-sm" style="width:100%;">                    
                    <tr>                                      
                          <th width="20%" class="txtleft">COST TYPE</th>
                          <th width="20%" class="txtleft">DESCRIPTION</th>
                          <th width="10%" class="txtleft">REF.DATE</th>
                          <th width="10%" class="txtleft">REF.NO</th>
                          <th width="10%" class="txtright">AMOUNT</th>
                          <th width="10%" class="txtright">GST</th>
                          <th width="10%" class="txtright">TOTAL</th>
                    </tr>
                    <?php
                                
                    $costdetail = explode('}', $vehiclesdetail->cost_details);
                    for($i=1;$i<count($costdetail);$i++)
                        {
                          $costdetails = explode(',',$costdetail[$i-1]);
                        ?>
                    <tr>
                        <td><?php echo $costdetails[0];?></td>
                        <td><?php echo $costdetails[1];?></td>
                        <td><?php echo $costdetails[2];?></td>
                        <td><?php echo $costdetails[3];?></td>
                        <td class="txtright"><?php echo $costdetails[4];?></td>
                        <td class="txtright"><?php echo $costdetails[5];?></td>
                        <td class="txtright"><?php echo $costdetails[6];?></td>
                    </tr>
                    <?php } ?>  
                    
                    <tr style="border-top: 1px solid #aeacac;">
                        <td style="border-top: 1px solid #aeacac;">TOTAL</td>
                        <td style="border-top: 1px solid #aeacac;"></td>
                        <td style="border-top: 1px solid #aeacac;"></td>
                        <td style="border-top: 1px solid #aeacac;"></td>
                        <td class="txtright" style="border-top: 1px solid #aeacac;"><?php echo $vehiclesdetail->cost_amt;?></td>
                        <td class="txtright" style="border-top: 1px solid #aeacac;"><?php echo $vehiclesdetail->cost_gst;?></td>
                        <td class="txtright" style="border-top: 1px solid #aeacac;"><?php echo $vehiclesdetail->cost_total;?></td>
                    </tr>
                </table>
		</div>
		<div class="col-sm-12 sm_toppadding">
			<p class="formtitle">COMMISSION DETAILS</p>
			<table class="table" style="width:100%;">
                
                    <tr>                                      
                          <th width="20%" class="txtleft">COMMISSION TYPE</th>
                          <th width="20%" class="txtleft">DESCRIPTION</th>
                          <th width="10%" class="txtright">PAID DATE</th>
                          <th width="10%" class="txtright">COMMISSION</th>
                    </tr>
                	<?php                                
                    $commission = explode('}', $vehiclesdetail->commission_detail);
                    for($i=1;$i<count($commission);$i++)
                        {
                          $commiss = explode(',',$commission[$i-1]);
                          
                        ?>
                    <tr>
                        <td><?php echo $commiss[0];?></td>
                        <td><?php echo $commiss[1];?></td>
                        <td class="txtright"><?php echo $commiss[2];?></td>
                        <td class="txtright"><?php echo $commiss[3];?></td>
                    </tr>
                    <?php } ?>
                    
                  
            </table>
		</div>

		<div class="col-md-12 sm_toppadding">
            <p class="formtitle">FLOOR STOCK INTEREST</p>
            <div class="row">
                <table class="table-sm" style="width:100%;">
                      <thead>
                        <tr>                                      
                              <th width="20%" class="txtleft">FLOOR AMOUNT</th>
                              <th width="20%" class="txtleft">START DATE</th>
                              <th width="10%" class="txtleft">END DATE</th>
                              <th width="10%" class="txtright">TOTAL</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php                                
                            $floorstock = explode('}', $vehiclesdetail->floor_stock);
                            for($i=1;$i<count($floorstock);$i++)
                                {
                                  $floor = explode(',',$floorstock[$i-1]);
                                ?>
                        <tr>
                            <td><?php echo $floor[0];?></td>
                            <td><?php echo $floor[1];?></td>
                            <td><?php echo $floor[2];?></td>
                            <td class="txtright"><?php echo $floor[3];?></td>
                        </tr>
                        <?php } ?>
                        
                        
                        <tr style="border-top: 1px solid #aeacac;">
                            <td colspan="3" style="border-top: 1px solid #aeacac;">TOTAL</td>
                            
                            <td class="txtright" style="border-top: 1px solid #aeacac;"><?php echo $costsheetreport->totalfloorstock;?></td>
                        </tr>
                      </tbody>
                </table>
            </div>
    	</div>
    	<div class="col-md-12 smm_toppadding">
                <p class="formtitle">BROKERS PAYOUT DETAILS</p>
                <div class="row">
                    <table class="table-sm" style="width:100%;">
                          <thead>
                            <tr>                                      
                                  <th width="20%" class="txtleft">BROKER</th>
                                  <th width="20%" class="txtleft">GROSS PROFIT</th>
                                  <th width="10%" class="txtleft">CIF (10%)</th>
                                  <th width="10%" class="txtleft">PAID DATE</th>
                                  <th width="10%" class="txtright">PAYOUT</th>
                            </tr>
                          </thead>
                          <tbody>
                          	<?php                                
                                $brokerpayout = explode('}', $vehiclesdetail->broker_payout);
                                for($i=1;$i<count($brokerpayout);$i++)
                                    {
                                      $broker = explode(',',$brokerpayout[$i-1]);
                                    ?>
                            <tr>
                                <td><?php echo $broker[0];?></td>
                                <td><?php echo $broker[1];?></td>
                                <td><?php echo $broker[2];?></td>
                                <td><?php echo $broker[3];?></td>
                                <td class="txtright"><?php echo $broker[4];?></td>
                            </tr>
                            <?php } ?>
                            
                            <tr>
                                <td colspan="4" style="border-top: 1px solid #aeacac;">TOTAL</td>
                                
                                <td class="txtright" style="border-top: 1px solid #aeacac;"><?php echo $vehiclesdetail->broker_total;?></td>
                            </tr>
                          </tbody>
                    </table>
                </div>
        	</div>
	</div>
</div>
</body>
</html>