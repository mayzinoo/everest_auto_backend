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
        margin: 10mm 5mm 10mm 5mm;  /* this affects the margin in the printer settings */
    }

	body{
			background-color: #fff;
			margin: 0 auto;
			font-family: Arial,'Wingdings';
		}
		p{
			color: #000;
			line-height: normal;
			font-size: 11.6px !important;
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
			width: 85%;
			margin: 0 auto;
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
        	/*padding: 5px !important;*/
        	line-height: 20px;
        }
        img.img-responsive{
        	display: block;
		    margin-left: 70px;
		    margin-right: auto;
		    text-align: center;
        }
        .text_line p{
        	line-height: 10px;
        }
        img.gg{
        	text-align: center !important;
        }
        .txt_underline{
        	text-decoration: underline;
        }
	</style>
</head>
<body>

<div id="container">
	<div id="body" class="row">
		<div class="col-sm-12" style="text-align: center">
			<img src="<?=base_url()?>/assets/images/everest-logo2.jpg" style="width:600px;">
			
		</div>
		<div class="col-sm-12" style="">
			<div style="text-decoration:underline;text-align:center;font-weight:bold;margin-top:20px;">
				UNDERTAKING FORM
			</div>
			<table style="width:100%;margin-top:20px;">
				<tr>
					<td style="width:33%;padding-left:10px;font-weight: bold;">HIRER NAME :<br> <?php echo $leasingrentalform->hirer_name; ?> </td>
					<td style="width:33%;padding-left:10px;font-weight: bold;">HIRER UEN/IC : <br> <?php echo $leasingrentalform->nirc; ?></td>
					<td style="width:33%;padding-left:10px;font-weight: bold;">HIRER MOBILE: <br> <?php echo $leasingrentalform->contact_no; ?> </td>
				</tr>
			</table>
			<div id="Agreements">
				<p> 1. Hirer stated above, acknowledge the vehicle with the plate no<span style="font-weight: bold;"> <?php echo $leasingrentalform->car_plate; ?></span>  which I have rent from
				<span style="font-weight: bold;"> EVERESTLEASING PTE LTD</span> will not be used for speeding, overseas usage or any unlawful activity. 
				Whilst the vehicle is in your possession and is driven in or outside of Singapore if applicable, you will be held fully responsible for any,but not limited to,
				vehicle accident, damages, lose, fire or theft caused to this vehicle.
				</p>

				<p style="display: table;"><span style="display: table-cell;">2.No speeding, reckless driving, racing or any illegal activities shall be earned out during the use of this vehicle.
				<span style="font-weight: bold;"> EVERESTLEASING PTE LTD</span> reserves the rights to repossess the vehicle with additional
				 SGD$1 500.00/- compensation and any other cost incurred (if any).</span>
				 <span style="padding-left: 30px;"></span>
				</p>
				 <p>3. <span style="font-weight:bold">ONLY</span> the driver above named/authorized may use the vehicle. In any circumstances another driver apart from the named/authorized driver found using the vehicle, the owner will have the right to repossess the
				 vehicle stated above and arise while the driver will be held fully responsible for any, but not limited to,    vehicle accident, damages, loss, fire or theft caused to this vehicle.
				 </p>
				 <p>
				 4. Should the hired vehicle be involved in any traffic offence during the period, the hirer agreed to be liable
				 for any issues with the vehicle that arise under your care and agree to pay all fines and any amount
				 government or semigovernment authorities shall levy or impose.
				 </p>
				 <p>
				 5. If the vehicle which the Hirer rented stated above meet with an accident, the Hirer has to inform
				 <span style="font-weight: bold;"> EVEREST LEASING PTE LTD</span> immediately No repair is to be done without <span style="font-weight: bold;"> EVEREST LEASING PTE LTD</span> approval, If the hirer is found
				 towing and/or repairing the rented vehicle at any workshop unauthorized by us, a penalty of
				 SGD$3,000.00 will be imposed.
				 </p>
				 <p>6. Any damage which includes physical damage or any other general damages to the vehicle, payment of repair cost has to be made immediately unless any other alternatives arrangement is made with it.</p>
				 <p>7. Upon claiming the vehicle Insurance which the Hirer stated above rented, the hirer has to pay excess of SGD$3,500.00 to <span style="font-weight: bold;">EVEREST LEASING PTE LTD</span>.</p>
				 <p>8. The maintenance of the vehicle will be borne by <span style="font-weight: bold;"> EVEREST LEASING PTE LTD</span>. Driver must keep note of the vehicle engine temperature, any overheating due to hirer’s/driver’s negligence, repair and any
				 miscellaneous cost shall be borne by the hirer. If there is any problem due to wear and tear or vehicle
				 breakdown, the driver is to report to Everest Auto immediately and seek for advice/permission before proceed to fix the issue.</p>
				 <p>9.<span style="font-weight: bold;"> EVEREST LEASING PTE LTD</span> will not be responsible for loss of or damage to personal belongings and the contents
				 therein (including any valuables, even if we have been advised) during storage or during the disposal
				 process caused and you hereby release  <span style="font-weight: bold;"> EVEREST LEASING PTE LTD</span>. from any liability in respect thereof.</p>
				 <p>10. Smoking, food consumption or transportation of pets is NOT allowed in the hired vehicle. Hirer is responsible for a penalty of SGD$500.00s</p>
				 <p>11. At any point of time if the vehicle breakdown due to drivers negligence, flat battery, tire puncture, empty fuel tank, loss of keys, keys locked in vehicle or any other breakdown not due to vehicle maintenance or
				 wear and tear, a nominal fee of SGD$50.00 (from Weekdays 12PM to 8PM) and SGD$100.00 (from   8PM to 12PM, Saturday and Sunday, PH 24Hours).
				 </p>
				 <p>12. Should there be any breaches to any of the above clauses, the owner reserves the right to repossess the vehicle without any refund with a compensation of SGD$2,000.00 imposed.</p>
			</div>
		</div>
		<table style="width:100%;text-align:center;">
			<tr>
				<td style="width:25%;">
					<?php if(empty($leasingrentalform->authorised_sign)) { ?>

						<?php }else{ ?>
							<img src="<?php echo base_url() .'upload/sign/'.$leasingrentalform->authorised_sign;?>" class="img-responsive" style="width:100px;height:auto;">
						<?php } ?>
					<br/>
					Authorised Signature
				</td>
				<td style="width:48%">

				</td>
				<td style="width:25%;">
					<?php if(empty($leasingrentalform->hirer_sign)) { ?>

						<?php }else{ ?>
							<img src="<?php echo base_url() .'upload/sign/'.$leasingrentalform->hirer_sign;?>" class="img-responsive" style="width:100px;height:auto;">
						<?php } ?>
					<br/>
				Authorised signature of Hirer<br>
				Company Stamp 
				</td>
			</tr>
		</table>
		
		
	</div><!-- end body -->
</div>
</body>
</html>