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
			<p style="font-size: 16px;font-style: italic;text-decoration: underline;"><b>PURCHASE SETTLEMENT</b></p>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width:30%">
				<p>Date :<?php echo $receipt->date;?>
				</p>				
			</div>
			<div class="col-sm-6" style="text-align: right;float: right;">
				<p>Reference No : <?php echo $receipt->reference_no;?>
				</p>
			</div>			
		</div>
		<div class="col-sm-12">
			<p>I / We (refer to as "The Seller") <?php echo $receipt->paid_to;?><br/>
			<?php echo $receipt->office_address;?><br/>
			UEN / NRIC No  : <?php echo $receipt->uen_nric_no;?> 		
			</p>
		</div>
		<p>Agreed to sell the follwing vehicle to Everest Auto Pte Ltd (refer to as "The Buyer"):-</p>
		<div class="col-sm-12 sm_toppadding">
			<table width="100%" style="border:1px solid #000">				
				<tr>
					<td style="border-right: 1px solid #000;">Vehicle No: <?php echo $receipt->vehi_no;?> Model : <?php echo $receipt->model;?></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Price Agreed</td>
					<td style="text-align: right">$ <?php echo number_format((float)$receipt->price, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Deposit / Payment by Cash / Cheque No. </td>
					<td style="text-align: right"><?php echo $receipt->deposit_paymentbycash_chequeno;?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Finance Due (by cash / cheque no.)</td>
					<td style="text-align: right"><?php echo $receipt->finance_due;?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Paid To <?php echo $receipt->paid_to;?></td>
					<td style="text-align: right">$ <?php echo number_format((float)$receipt->paid_price, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Balance</td>
					<td style="text-align: right">$ <?php echo number_format((float)$receipt->balance, 2, '.', ''); ?></td>
				</tr>
				
			</table>
		</div>
		<div class="col-sm-12 smm_toppadding">
					<p>Handover of vehicle Date
						<?php if (empty($receipt->handover_date)): ?>
		  		 _____________
				<?php else: ?>
				  <?php echo $receipt->handover_date;?>
				<?php endif; ?> (Time)

				<?php if (empty($receipt->handover_time)): ?>
		  		 _____________ .
				<?php else: ?>
				  <?php echo $receipt->handover_time;?> .
				<?php endif; ?>
						FREE FROM ALL ENCUMBRANCE."The Purchaser" shall be responsible for any traffic offence and illegal acts arising from the use thereof.
						 </p>
					
		</div><!--  -->
		<div class="col-sm-12 smm_toppadding">
			<div class="col-sm-6">
					<p>Signed for & behalf of</p>
					<img src="<?php echo base_url() .'upload/sign/'.$receipt->authorised_sign;?>" class="img-responsive" style="width:130px;height:20px;">
					<p class="sm_toppadding">Authorised Signature</p>
			</div>
			<div class="col-sm-6">
					<p>Agreed & Accepted by Seller</p>
					<img src="<?php echo base_url() .'upload/sign/'.$receipt->authorisedsignofseller;?>" class="img-responsive" style="width:30px;height:20px;">
					<p class="sm_toppadding">Authorised signature of Seller<br/>Company Stamp </p>
			</div>
		</div>
	</div>
</div>
</body>
</html>