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
			<p style="font-size: 16px;"><b>TAX INVOICE</b></p>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width:30%">
				<p>Bill To :<?php echo $cashcreditinvoice->billto;?><br/>
					<?php echo $cashcreditinvoice->address;?>
				</p>
				<p>
					Hirer : <?php echo $cashcreditinvoice->hirer;?><br/>
					<?php echo $cashcreditinvoice->hirer_address;?>
				</p>
			</div>
			<div class="col-sm-6" style="text-align: right;float: right;">
				<p>Date : <?php echo $cashcreditinvoice->date;?><br/>
					Serial No : <?php echo $cashcreditinvoice->serial_no;?><br/>
					Invoice No : <?php echo $cashcreditinvoice->invoice_no;?>
				</p>
			</div>
		</div>
		<div class="col-sm-12 smm_toppadding">
			<table width="100%" style="border:1px solid #000">
				<tr>
					<td>Vehicle Reg No.</td>
					<td style="border-right:1px solid #000">: <?php echo $cashcreditinvoice->vehireg_no;?></td>
					<td>Engine No</td>
					<td>: <?php echo $cashcreditinvoice->engine_no;?></td>
				</tr>
				<tr>
					<td>Make</td>
					<td style="border-right:1px solid #000">: <?php echo $cashcreditinvoice->make;?></td>
					<td>Chassis No</td>
					<td>: <?php echo $cashcreditinvoice->chassis_no;?></td>
				</tr>
				<tr>
					<td>Model</td>
					<td style="border-right:1px solid #000">: <?php echo $cashcreditinvoice->model;?></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td>Original Reg Date</td>
					<td style="border-right:1px solid #000">: <?php echo $cashcreditinvoice->originalreg_date;?></td>
					<td></td>
					<td></td>
				</tr>
			</table>
		</div>
		<div class="col-sm-12 smm_toppadding">
			<table width="100%" style="border:1px solid #000">
				<tr>
					<td width="70%" style="border-right: 1px solid #000;border-bottom: 1px solid #000;">Description</td>
					<td style="text-align: right;border-bottom: 1px solid #000;">Amount</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Vehicle Invoice Price</td>
					<td style="text-align: right;">$ <?php echo number_format((float)$cashcreditinvoice->vehi_invoiceprice, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;"><b>Inclusive Items</b></td>
					<td></td>
				</tr>
				<?php
                    $cashcreditinv = explode('}', $cashcreditinvoice->inclusive_items);
                    for($i=1;$i<count($cashcreditinv);$i++)
                    {
                      $cashcredit = explode(',', $cashcreditinv[$i-1]);
                    ?> 
						<tr>
							<td style="border-right: 1px solid #000;"><?php echo $cashcredit[0];?> : <?php echo $cashcredit[1];?></td>
							<td style="text-align: right;">$ <?php echo number_format((float)$cashcredit[2], 2, '.', ''); ?></td>
						</tr>
				<?php } ?>

				<tr>
					<td style="border-right: 1px solid #000;"><b>Fees received on behalf of other agency and company:</b></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Insurance Premium</td>
					<td style="text-align: right;">$ <?php echo number_format((float)$cashcreditinvoice->insurance_premium, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Loan Advance Payment</td>
					<td style="text-align: right;">$ <?php echo number_format((float)$cashcreditinvoice->loan_advpayment, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;"><b>Payment Details:</b></td>
					<td></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Less</td>
					<td style="text-align: right;">$ <?php echo number_format((float)$cashcreditinvoice->less, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;">Deposit</td>
					<td style="text-align: right;">$ <?php echo number_format((float)$cashcreditinvoice->deposit, 2, '.', ''); ?></td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #000;border-top: 1px solid #000;">Total Invoice Amount</td>
					<td style="text-align: right;border-top: 1px solid #000;">$ <?php echo number_format((float)$cashcreditinvoice->total_amt, 2, '.', ''); ?></td>
				</tr>
			</table>
		</div>

	</div>
</div>
</body>
</html>