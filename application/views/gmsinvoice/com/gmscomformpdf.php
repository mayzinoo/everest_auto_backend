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
			<!-- <p style="font-size: 16px;"><b>TAX INVOICE</b></p> -->
		</div>
		<div class="col-sm-12 smm_toppadding">
			<div class="col-sm-6" style="width:30%">
				<p>Date : <?php echo $gmscom->date;?></p>
				<p><?php echo $gmscom->billto;?><br/>
					<?php echo $gmscom->address;?>
				</p>
				
			</div>
			
		</div>
		
		<div class="col-sm-12 smm_toppadding">
			<table width="100%" style="border:1px solid #000">
				<tr>
					<td colspan="2" style="border-right: 1px solid #000;border-bottom: 1px solid #000;">Description</td>
				</tr>
				<tr>
					<td>Vehicle Number</td>
					<td style="border-right:1px solid #000">: <?php echo $gmscom->vehi_no;?></td>
					
				</tr>
				<tr>
					<td>Make</td>
					<td style="border-right:1px solid #000">: <?php echo $gmscom->make;?></td>
					
				</tr>
				<tr>
					<td>Model</td>
					<td style="border-right:1px solid #000">: <?php echo $gmscom->model;?></td>
					
				</tr>
				<tr>
					<td>Chasis Number</td>
					<td style="border-right:1px solid #000">: <?php echo $gmscom->chassis_no;?></td>
					
				</tr>
				<tr>
					<td>A/C</td>
					<td style="border-right:1px solid #000">: <?php echo $gmscom->ac;?></td>
					
				</tr>
				<tr>
					<td>Commisson</td>
					<td style="border-right:1px solid #000">: $ <?php echo number_format((float)$gmscom->commission, 2, '.', ''); ?></td>
					
				</tr>
				<tr>
					<td>Incentive</td>
					<td style="border-right:1px solid #000">: $ <?php echo number_format((float)$gmscom->incentive, 2, '.', ''); ?></td>
					
				</tr>
				<tr>
					<td>GST (<?php echo $gmscom->gst_percent;?> %)</td>
					<td style="border-right:1px solid #000">: $ <?php echo number_format((float)$gmscom->gst, 2, '.', ''); ?></td>
					
				</tr>
				<tr>
					<td style="border-top: 1px solid #000;">Total</td>
					<td style="border-top: 1px solid #000;">: $ <?php echo number_format((float)$gmscom->total_amt, 2, '.', ''); ?></td>
				</tr>
			</table>
			<p>EVEREST AUTO PTE LTD <br/>
				DBS CURRENT ACCOUNT-0724745338
			</p>
		</div>

	</div>
</div>
</body>
</html>