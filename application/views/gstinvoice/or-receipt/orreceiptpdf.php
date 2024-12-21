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
        	line-height: 30px;
        }
        
	</style>
</head>
<body>
<div id="container">
	<div id="body">
		<div class="col-sm-12" style="text-align: center">
			<img src="<?=base_url()?>/assets/images/everest-logo.jpg" style="width:600px;">
			
		</div>
		<div class="col-sm-12 smm_toppadding">
			<div class="col-sm-6" style="width:30%">
				<p>Date : <?php echo $orreceipt->date;?></p>
				<p><?php echo $orreceipt->billto;?><br/>
					<?php echo $orreceipt->address;?>
				</p>
				
			</div>
			
		</div>
		<p style="font-size: 16px;text-align: center;"><b>OFFICIAL RECEIPT</b></p>
		<p class="smm_toppadding">I/WE CONFIRM SOLD AND RECEIVED FULL PAYMENT FROM CASH&CREDIT AUTO PTE LTD FOR THE FOLLOWING  VEHICLE :</p>
		<div class="col-sm-12 sm_toppadding">
			<table width="100%" style="">
				
				<tr>
					<td width="30%">MAKE </td>
					<td style="">: <?php echo $orreceipt->make;?></td>
					
				</tr>
				<tr>
					<td>MODEL</td>
					<td style="">: <?php echo $orreceipt->model;?></td>
					
				</tr>
				<tr>
					<td>CHASSIS NO</td>
					<td style="">: <?php echo $orreceipt->chassis_no;?></td>
					
				</tr>
				<tr>
					<td>ENGINE NO</td>
					<td style="">: <?php echo $orreceipt->engine_no;?></td>
					
				</tr>
				<tr>
					<td>VEHICLE NUMBER</td>
					<td style="">: <?php echo $orreceipt->vehi_no;?></td>
					
				</tr>
				<tr>
					<td>ORIGINAL REG DATE</td>
					<td style="">: <?php echo $orreceipt->originalreg_date;?></td>
					
				</tr>
				
			</table>
			
		</div>

	</div>
</div>
</body>
</html>