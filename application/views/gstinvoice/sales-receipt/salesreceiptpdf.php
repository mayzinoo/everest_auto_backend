<?php
?>
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
        
	</style>
</head>
<body>
<div id="container">
	<div id="body">
		<div class="col-sm-12" style="text-align: center">
			<img src="<?=base_url()?>/assets/images/everest-logo.jpg" style="width:600px;">
			<p style="font-size: 16px;"><b>SALES RECEIPT</b></p>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width:30%">
				<p>Bill To :<?php echo $salesreceipt->billto;?><br/>
					<?php echo $salesreceipt->address;?>
				</p>
				
			</div>
			<div class="col-sm-6" style="text-align: right;float: right;">
				<p>Date : <?php echo $salesreceipt->date;?><br/>
					Serial No : <?php echo $salesreceipt->serial_no;?><br/>
					Invoice No : <?php echo $salesreceipt->invoice_no;?>
				</p>
			</div>
			
		</div>
		<p>Being the sale of vehicle registration no: <?php echo $salesreceipt->vehiregno;?></p>
		<div class="col-sm-12 smm_toppadding">
			<table width="60%">
				
				<tr>
					<td width="40%">Selling price</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->selling_price, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>LTA transfer fee</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->ltatransfer_fee, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Road Tax ( 1/2 yr)</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->roadtax, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Insurance Premium</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->insurance_premium, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Hp Facilities Fees</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->hp_facilities_fee, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Loan Advance Payment</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->loan_adv_payment, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td><b>TOTAL PAYABLE</b></td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->total_payable, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Less</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->less, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Deposit</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->deposit, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Trade In Vehicle No</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->tradein_vehino, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Trade In Price: </td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->tradein_price, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Less Full Settelment Amount</td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->lessfull_sett_amt, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td><b>LOAN AMOUNT</b></td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->loan_amt, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td>Loan Amount <?php echo $salesreceipt->loan_amt_percent;?> %</td>
					<td style="text-align: right"></td>
				</tr>
				<tr>
					<td>Finance Company</td>
					<td style="text-align: right"><?php echo $salesreceipt->finance_cmy; ?></td>
				</tr>
				<tr>
					<td><b>TOTAL DEDUCTION</b></td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->total_deduction, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td><b>BALANCE DUE</b></td>
					<td style="text-align: right">$ <?php echo number_format((float)$salesreceipt->balance_deduction, 2, '.', ''); ?></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-12 smm_toppadding">
					<p style="text-align: right;">Cash/ Cheque no. <?php echo $salesreceipt->cash_cheque_no; ?></p>
					<p><b>Delivery Acknowledgment</b></p>
					<p>I/We confirm that I/we have examined the above said vehicle is in good order and proper condition and suitable for the purpose for which I/we require it and to my/our satisfaction in every respect and that I/we have to take delivery of the vehicle on (Date) 
						<?php if (empty($salesreceipt->vehion_date)): ?>
		  		 _____________
				<?php else: ?>
				  <?php echo $salesreceipt->vehion_date;?>
				<?php endif; ?> and (Time)

				<?php if (empty($salesreceipt->vehion_time)): ?>
		  		 _____________ .
				<?php else: ?>
				  <?php echo $salesreceipt->vehion_time;?> .
				<?php endif; ?>

						 </p>
					<p>***The Buyer henceforth on accepting delivery of the vehicle on the time indicted about I/we will be fully responsible for the vehicle use including any traffic offence and or illegal acts.</p>
		</div><!--  -->
		<div class="col-sm-12 smm_toppadding">
			<div class="col-sm-6">
					<p>Signed for & behalf of</p>
					<img src="<?php echo base_url() .'upload/sign/'.$salesreceipt->signof_author;?>" class="img-responsive" style="width:30px;height:20px;">
					<p class="sm_toppadding">Authorised Signature</p>
			</div>
			<div class="col-sm-6">
					<p>Agreed & Accepted by Buyer</p>
					<img src="<?php echo base_url() .'upload/sign/'.$salesreceipt->signof_buyer;?>" class="img-responsive" style="width:30px;height:20px;">
					<p class="sm_toppadding">Authorised signature of Buyer<br/>Company Stamp </p>
			</div>
		</div>
	</div>
</div>
</body>
</html>