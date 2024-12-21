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
	<div id="body" >
		<div class="col-sm-12" style="text-align: center;">
			<img src="<?=base_url()?>/assets/images/everest-logo2.jpg" style="width:600px;">
		</div>
		<div class="col-sm-12" style="font-weight:bold; margin-top:20px; text-align:center;">
			RENTAL AGREEMENT / RECEIPT
		</div>
		<div style="margin-top: 10px;">
			<table style="width:100%;border: 1px solid;">
				<tr>
					<td style="height:20px;width:35%; padding-left:5px;font-weight:bold;">
						HIRER PARTICULARS
					</td>
					<th style="width:35%;">
						
					</td>
					<td  style="width:30%;padding-left:5px;font-weight:bold;">
						VEHICLE DETAILS
					</td>
				</tr>
				<tr>
					<td  style="width:35%; padding-left:5px">
						<b>NAME</b> :	<br> <?php echo $leasingrentalform1->hirer_name; ?>
					</td>
					<td  style="width:35%; padding-left:5px">
						<b>UEN / NRIC</b> : <br> <?php echo $leasingrentalform1->nirc; ?>

					</td>
					<td  style="width:30%;padding-left:5px">
						<b>VEHICLE REG NO.</b> <br> <?php echo $leasingrentalform1->car_plate; ?>
					</td>	
				</tr>
				<tr>
				<td class="" style="width:35%; padding-left:5px;border:1px solid">
						<b>ADDRESS</b> : <?php echo $leasingrentalform1->address; ?>
					</td>
					<td class="" style="width:35%;padding-left:5px;border:1px solid">
						<b>CONTACT NO</b> : <br>
						<?php echo $leasingrentalform1->contact_no; ?>
					</td>
					<td class="" style="width:30%;padding-left:5px;border:1px solid">
						<b>MAKE / MODEL</b> : <br>
						<?php echo $leasingrentalform1->make; ?> <?php echo $leasingrentalform1->model; ?>
					</td>
				</tr>
			</table>
			<div style="text-align:center;border: 1px solid;font-weight: bold;">
				<p>THE HIRER IS TO BEAR EXCESS OF SGD $3,500.00 ON ANY THIRD PARTY CLAIM OF THE ABOVE VEHICLE.</p>	
				<p>(EXCLUDING OWN DAMAGE AND REPAIR TO ABOVE RENTED VEHICLE)</p>
				<p>(HIRER TO SIGN ACKNOWLEDGEMENT) <span style="font-weight:bold;"> *Late Charges $50</span></p>
			</div>
			<table style="width:100%;border: 1px solid;">
				<tr>
					<td  style="width:20%;padding-left:5px;border-right:1px solid">
						<b>P-PLATE</b> :<br>
						<?php echo $leasingrentalform1->p_plate; ?>
					</td>
					<td style="width:20%;padding-left:5px;border-right:1px solid">
						<b>GPS-RENTAL</b> :<br>
						<?php echo $leasingrentalform1->gps_rental; ?>
					</td>
					<td style="width:20%;padding-left:5px;border-right:1px solid">
						<b>COLLECTION DATE</b> :<br>
						<?php echo $leasingrentalform1->collection_date; ?>
					</td>
					<td style="width:20%;padding-left:5px;border-right:1px solid">
						<b>RETURN DATE</b> :<br>
						<?php echo $leasingrentalform1->return_date; ?>
					</td>
					<td style="width:20%;padding-left:5px">
						<b>RENTAL AMOUNT</b><br>
						$ <?php echo $leasingrentalform1->rental_amt; ?>
					</td>
				</tr>
			</table>
			<table style="width:100%;border: 1px solid;">
				<tr>
						<td style="width: 40%;padding-left:5px;border-right:1px solid">
							<b>VEHICLE DELIVERY</b> : <br>
							<?php echo $leasingrentalform1->vehi_delivery_date; ?> / <?php echo $leasingrentalform1->vehi_delivery_time; ?>
						</td>
						<td style="width: 35%;padding-left:5px;border-right:1px solid">
							<b>NO. OF DAYS</b> :<br>
							<?php echo $leasingrentalform1->no_days; ?>
						</td>
						<td style="width:25%;padding-left:5px">
							<b>REFUNDABLE DEPOSIT</b> :<br>
							$ <?php echo $leasingrentalform1->refundable_deposit; ?>
						</td>
					</tr>
			</table>
			<table style="width:100%;border: 1px solid">
				<tr>
					<td style="width: 80%;padding-left:5px;border-right:1px solid">
					<b>REMARKS</b>: <br> <?php echo $leasingrentalform1->remark; ?>
					</td>
					<td style="width: 30%;padding-left:5px">
					<b>TOTAL AMOUNT PAID</b> : <br> $ <?php echo $leasingrentalform1->total_amt; ?>
					</td>
				</tr>
			</table>
			<table style="width:100%;border: 1px solid;">
				<tr>
					<td style="height: 180px;">
						<?php if(empty($leasingrentalform1->car_photo)) { ?>

						<?php }else{ ?>
							<img src="<?php echo base_url() .'upload/files/'.$leasingrentalform1->car_photo;?>" class="img-responsive" style="width:200px;height:auto;">
						<?php } ?>
						<br/>
					</td>
				</tr>
			</table>
			<table style="width:100%;border: 1px solid;">
					<tr>
						<th style="width:50%;font-size:12px;">
							COLLECTION OF VEHICLE
						</th>
						<th  style="width:50%;font-size:12px">
							RETURN OF VEHICLE
						</th>
					</tr>
			</table>
			<table style="width:100%;border: 1px solid;">
			<tr>
						<td style="width:15%;">
							CHECKOUT BY :
						</td>
						<td style="width:15%;">
							MILEAGE OUT :
						</td>
						<td  style="width:10%;border-right:1px solid">
							FUEL % :
						</td>
						<td style="width:10%">
							IN DATE :
						</td>
						<td style="width:10%">
							TIME :
						</td>
						<td  style="width:15%">
							MILEAGE :
						</td>
						<td style="width:10%">
							FUEL % :
						</td>
						<td style="width:15%">
							CHECK IN BY :
						</td>
					</tr>
					<tr>
						<td><?php echo $leasingrentalform1->checkedout_by; ?></td>
						<td><?php echo $leasingrentalform1->mileage_out; ?></td>
						<td style="border-right:1px solid"><?php echo $leasingrentalform1->fuel_percent; ?></td>
						<td><?php echo $leasingrentalform1->in_date; ?></td>
						<td><?php echo $leasingrentalform1->time; ?></td>
						<td><?php echo $leasingrentalform1->mileage; ?></td>
						<td><?php echo $leasingrentalform1->return_fuel_percent; ?></td>
						<td><?php echo $leasingrentalform1->checkin_by; ?></td>
					</tr>
			</table>
			<div class="text_center">
				<p>All terms and conditions shall be governed by constructed in accordance to the laws of Republic of </p>
				<p>Singapore. In acknowledgement and agreement to the above terms and conditions of the rental</p>
				<p>agreement contract :</p>
			</div>
			<table style="width:100%;margin-top:60px">
				<tr>
					<td style="width:30%;padding-left:80px;">
						<?php if(empty($leasingrentalform1->authorised_sign)) { ?>

						<?php }else{ ?>
							<img src="<?php echo base_url() .'upload/sign/'.$leasingrentalform1->authorised_sign;?>" class="img-responsive" style="width:100px;height:auto;">
						<?php } ?>
						<br/>
					Authorised Signature
					</td>
					<td style="width:30%;padding-left:80px;">
						<?php if(empty($leasingrentalform1->hirer_sign)) { ?>

						<?php }else{ ?>
							<img src="<?php echo base_url() .'upload/sign/'.$leasingrentalform1->hirer_sign;?>" class="img-responsive" style="width:100px;height:auto;">
						<?php } ?>
						<br/>
					Authorised signature of Hirer <br>
					Company Stamp 
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</body>
</html>