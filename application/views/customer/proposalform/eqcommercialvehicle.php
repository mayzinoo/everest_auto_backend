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
        margin: 10mm 20mm 10mm 20mm;  /* this affects the margin in the printer settings */
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
        	font-size: 10px;        	
        	border-collapse: collapse;
        }
        table tr td{
        	padding: 3px !important;
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
		<div class="col-sm-12">
			<div class="col-sm-4 header" style="width:25%;float: right;">
				<img src="<?=base_url()?>/assets/images/eqinsurance-logo.jpg" style="width: 170px;">
			</div>			
		</div>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="7" style="background:#231f20;font-size:13px;color:#fff;text-align: center;">PROPOSAL FORM – PRIVATE MOTOR CAR</td>
				</tr>
		</table>
		<div class="col-sm-12">
			<div class="col-sm-7" style="width:60%;text-align: right;float: right;">
				<p style="font-size: 10px;font-style: italic;">
					<b>IMPORTANT NOTICE TO THE PROPOSER</b><br/>
					1. Under Section 25(5) of the Insurance Act (Cap. 142), or any subsequent amendments thereof, you must disclose in this proposal form, fully and faithfully, all the facts which you know or ought to know in respect of the risk proposed; otherwise the policy issued hereunder may be void.<br/>
					2. No insurance is in force until this Proposal has been accepted by the Company.<br/>
					3. Payment Before Cover Warranty (for Private Individual): In accordance to General Insurance Association of Singapore’s Code of Practice For Premium Payment, this Policy issued to Individual Policyholder shall not be in force unless premium is paid to the Company or Intermediary on or before the date of inception of this policy.<br/>
					4. Any accident must be reported to the Motor Accident Response Service (MARS) within 24 hours or latest by the next working day.
				</p>
			</div>			
		</div>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Agent / Broker: <br/>
						<?php echo $eqcommercial->agent_broker;?>
					</td>
					<td style="width: 30%;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Code: <br/>
						<?php echo $eqcommercial->code;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Type of Plan (CLASSIC / PREMIER): <br/>
						<?php echo $eqcommercial->typeof_plan;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">Particulars of Proposer</td>
				</tr>
		</table>
		<table style="width: 100%;border: 1px solid #797777;">
				<tr>
					<td colspan="3" style="width: 550px;height: 38px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Full Name: <?php echo $eqcommercial->name;?>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="height: 38px;width: 75%;vertical-align: top;border-bottom:1px solid #797777">
						Company Address: <?php echo $eqcommercial->cmy_address;?>
					</td>
					<td style="vertical-align: top;border-bottom:1px solid #797777">
						Postal Code ( <?php echo $eqcommercial->postal_code;?> )
					</td>
				</tr>
				<tr>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Contact No.:<br/>						
						(Office:<?php echo $eqcommercial->office_no;?>)
						(Mobile:<?php echo $eqcommercial->mobile_no;?>)
						(Fax:<?php echo $eqcommercial->fax;?>)
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Email: <?php echo $eqcommercial->email;?>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="height: 38px;width: 40% !important;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Occupation (Indoor / Outdoor)*: <?php echo $eqcommercial->occupation;?>
					</td>
					<td style="vertical-align: top;border-bottom:1px solid #797777">
						Nature / Business: <?php echo $eqcommercial->nature_business;?>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="height: 38px;width: 40% !important;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Co. Regn. No.: <?php echo $eqcommercial->co_regn_no;?>
					</td>
					<td style="vertical-align: top;border-bottom:1px solid #797777">
						Hire Purchase (if any): <?php echo $eqcommercial->hire_purchase;?>
					</td>
				</tr>
				
				<tr>
					<td colspan="3" style="height: 38px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Any related account with the Company:
						<span>
							<?php if($eqcommercial->related_acct=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($eqcommercial->related_acct=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span><br/>
						If “Yes”, please give specify: <?php echo $eqcommercial->related_yes;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="width: 550px;height: 38px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						If Proposer is an individual:<?php echo $eqcommercial->proposer_individual;?>
					</td>
				</tr>
				<tr>
					<td style="height: 38px;width: 40% !important;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						NRIC / Passport No.: <?php echo $eqcommercial->nric;?>
					</td>
					<td style="vertical-align: top;border-bottom:1px solid #797777">
						Date of Birth (dd/mm/yyyy): <?php echo $eqcommercial->dob;?>
					</td>
					<td style="vertical-align: top;border-bottom:1px solid #797777">
						Driving Experience (in years): <?php echo $eqcommercial->driving_exp;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">DETAILS OF VEHICLE:</span></td>
				</tr>
		</table>
		<table style="width: 100%;border: 1px solid #797777;">
			<tr>
				<td style="width: 350px;height: 38px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Registration No.: <?php echo $eqcommercial->reg_no;?>
				</td>
				<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Year of Registration (YOR): <?php echo $eqcommercial->yearof_reg;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="height: 38px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Vehicle Model: <?php echo $eqcommercial->model;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Make of Vehicle: <?php echo $eqcommercial->make;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Engine Capacity: <?php echo $eqcommercial->engine_capacity;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="width: 350px;height: 38px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Engine No.: <?php echo $eqcommercial->engineno;?>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					Laden Weight: <?php echo $eqcommercial->laden_weight;?>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					Unladen Weight: <?php echo $eqcommercial->unladen_weight;?>
				</td>
			</tr>
			<tr>
				<td style="width: 350px;height: 38px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Chassis No.: <?php echo $eqcommercial->chassisno;?>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					Seating Capacity: <?php echo $eqcommercial->seating_capacity;?>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
				</td>
			</tr>
			<tr>
				<td colspan="3" style="height: 28px;border-bottom:1px solid #797777">
					Parallel Imported Vehicle:
						<span>
							<?php if($eqcommercial->parallel_import=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($eqcommercial->parallel_import=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="height: 38px;vertical-align: top;border-bottom:1px solid #797777">
					Type of Vehicle:
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					<span>
						<?php if($eqcommercial->typeof_vehi=="Pickup"){ ?>
							<span style="font-size: 14px">&#9745;</span> Pickup
						<?php }else{ ?>
							❑ Pickup
						<?php } ?>					
					</span> <br/>
					<span>
						<?php if($eqcommercial->typeof_vehi=="Bus"){ ?>
							<span style="font-size: 14px">&#9745;</span> Bus
						<?php }else{ ?>
							❑ Bus
						<?php } ?>					
					</span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					<span>
						<?php if($eqcommercial->typeof_vehi=="Van"){ ?>
							<span style="font-size: 14px">&#9745;</span> Van
						<?php }else{ ?>
							❑ Van
						<?php } ?>					
					</span> <br/>
					<span>
						<?php if($eqcommercial->typeof_vehi=="Motorcycle"){ ?>
							<span style="font-size: 14px">&#9745;</span> Motorcycle
						<?php }else{ ?>
							❑ Motorcycle
						<?php } ?>					
					</span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					<span>
						<?php if($eqcommercial->typeof_vehi=="Lorry"){ ?>
							<span style="font-size: 14px">&#9745;</span> Lorry
						<?php }else{ ?>
							❑ Lorry
						<?php } ?>					
					</span> <br/>
					<span>
						<?php if($eqcommercial->typeof_vehi=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							❑ Others
						<?php } ?>					
					</span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					<span>
						<?php if($eqcommercial->typeof_vehi=="Prime Mover"){ ?>
							<span style="font-size: 14px">&#9745;</span> Prime Mover
						<?php }else{ ?>
							❑ Prime Mover
						<?php } ?>					
					</span> <br/>
					<?php echo $eqcommercial->other_vehi;?>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					<span>
						<?php if($eqcommercial->typeof_vehi=="Trailer"){ ?>
							<span style="font-size: 14px">&#9745;</span> Trailer
						<?php }else{ ?>
							❑ Trailer
						<?php } ?>					
					</span> <br/>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					<span>
						<?php if($eqcommercial->typeof_vehi=="Refrigerated Vehicle"){ ?>
							<span style="font-size: 14px">&#9745;</span> Refrigerated Vehicle
						<?php }else{ ?>
							❑ Refrigerated Vehicle
						<?php } ?>					
					</span> <br/>
				</td>
			</tr>
			<tr>
				<td colspan="7" style="height: 28px;border-bottom:1px solid #797777">
					Period of Insurance: From <?php echo $eqcommercial->periodof_insurance_from;?> To <?php echo $eqcommercial->periodof_insurance_to;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">VEHICLE USAGE:</span></td>
				</tr>
		</table>
		<table style="width: 100%;border-top: 1px solid #797777;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="width: 80px;height: 58px;vertical-align: top;border-bottom:1px solid #797777">
					Commercial:
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->commercial=="carriageofgoods"){ ?>
								<span style="font-size: 14px">&#9745;</span> Carriage of goods / passengers in connection with own business but not for hire or reward
							<?php }else{ ?>
								❑ Carriage of goods / passengers in connection with own business but not for hire or reward
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($eqcommercial->commercial=="carriageofgoodsforhire"){ ?>
								<span style="font-size: 14px">&#9745;</span> Carriage of goods for hire or reward
							<?php }else{ ?>
								❑ Carriage of goods for hire or reward
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($eqcommercial->commercial=="carriageofpassenger"){ ?>
								<span style="font-size: 14px">&#9745;</span> Carriage of passengers for hire or reward
							<?php }else{ ?>
								❑ Carriage of passengers for hire or reward
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($eqcommercial->commercial=="rental"){ ?>
								<span style="font-size: 14px">&#9745;</span> Rental to Third Party
							<?php }else{ ?>
								❑ Rental to Third Party
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($eqcommercial->commercial=="other"){ ?>
								<span style="font-size: 14px">&#9745;</span> Other purpose: (please specify)
							<?php }else{ ?>
								❑ Other purpose: (please specify)
							<?php } ?>					
						</span><br/>
				</td>
			</tr>
		</table>
		<table style="width: 100%;margin-top:70px">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">VEHICLE USAGE:</span></td>
				</tr>
		</table>
		<table style="width: 100%;border-top: 1px solid #797777;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="width: 80px;height: 58px;vertical-align: top;border-bottom:1px solid #797777">
					Coverage:
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->coverage=="Comprehensive"){ ?>
								<span style="font-size: 14px">&#9745;</span> Comprehensive
							<?php }else{ ?>
								❑ Comprehensive
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($eqcommercial->coverage=="Third Party Fire & Theft"){ ?>
								<span style="font-size: 14px">&#9745;</span> Third Party Fire & Theft
							<?php }else{ ?>
								❑ Third Party Fire & Theft
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($eqcommercial->coverage=="Third Party"){ ?>
								<span style="font-size: 14px">&#9745;</span> Third Party
							<?php }else{ ?>
								❑ Third Party
							<?php } ?>					
						</span><br/>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Sum Insured (Market Value at Time of Loss): <br/>
					<?php echo $eqcommercial->sum_insured;?>
				</td>
			</tr>			
		</table>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom: 1px solid #797777;">
			<tr>
				<td colspan="5">
					Additional Features to be covered:
				</td>
				<td>
					Sum Insured:
				</td>
			</tr>
			<tr>
				<td style="width:20%;">
					<span>
						<?php if($eqcommercial->additional_features=="Canopy"){ ?>
							<span style="font-size: 14px">&#9745;</span> Canopy
						<?php }else{ ?>
							❑ Canopy
						<?php } ?>					
					</span>
				</td>
				<td>
					<span>
						<?php if($eqcommercial->additional_features=="Box"){ ?>
							<span style="font-size: 14px">&#9745;</span> Box
						<?php }else{ ?>
							❑ Box
						<?php } ?>					
					</span>
				</td>
				<td>
					<span>
						<?php if($eqcommercial->additional_features=="Tinted Glass"){ ?>
							<span style="font-size: 14px">&#9745;</span> Tinted Glass
						<?php }else{ ?>
							❑ Tinted Glass
						<?php } ?>					
					</span>
				</td>
				<td>
					<span>
						<?php if($eqcommercial->additional_features=="Crane"){ ?>
							<span style="font-size: 14px">&#9745;</span> Crane
						<?php }else{ ?>
							❑ Crane
						<?php } ?>					
					</span>
				</td>
				<td>
					<span>
						<?php if($eqcommercial->additional_features=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							❑ Others
						<?php } ?>					
					</span>
				</td>
				<td>
					S$ <?php echo $eqcommercial->additional_suminsured;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">PARTICULARS OF NAMED DRIVER: <span style="font-size:8px">(TO BE COMPLETED ONLY IF PROPOSER IS AN INDIVIDUAL)</span></td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;text-align: center;">
			<tr>
				<td style="width: 120px;height: 20px;border-right:1px solid #797777;border-bottom:1px solid #797777">
					Name
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					Date of Birth (dd/mm/yyyy)
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					Gender
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					Driving Experience
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					Occupation
				</td>
			</tr>
			<tr>
				<td style="height: 20px;border-right:1px solid #797777;border-bottom:1px solid #797777">
					<?php echo $eqcommercial->driver_name;?> 
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					<?php echo $eqcommercial->driver_dob;?> 
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					<?php echo $eqcommercial->driver_gender;?> 
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					<?php echo $eqcommercial->driver_exp1;?> 
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					<?php echo $eqcommercial->driver_occupation;?> 
				</td>
			</tr>
			<tr>
				<td style="height: 20px;border-right:1px solid #797777;border-bottom:1px solid #797777">
					
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">PREVIOUS INSURANCE</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="2" style="height: 30px;border-right:1px solid #797777;border-bottom:1px solid #797777">
					No Claim Discount Entitlement to be transferred to this policy:
					<?php echo $eqcommercial->claim_discount;?> %
				</td>
			</tr>
			<tr>
				<td style="height: 30px;border-right:1px solid #797777;border-bottom:1px solid #797777">
					Name of Insurer: <?php echo $eqcommercial->prev_insurer;?>
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					Policy No.: <?php echo $eqcommercial->policy_no;?>
				</td>
			</tr>
			<tr>
				<td style="height: 30px;border-right:1px solid #797777;border-bottom:1px solid #797777">
					Expiry Date: <?php echo $eqcommercial->expiry_date;?>
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777">
					Vehicle Registration No.: <?php echo $eqcommercial->vehi_regno;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">
					CLAIMS HISTORY OF PROPOSER AND MAIN / AUTHORISED DRIVER(S) <span style="font-size:8px">(LAST 3 YEARS) </span>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="width: 15px;height: 30px;">
					No
				</td>
				<td style="height: 30px;">
					Date of Accident
				</td>
				<td style="height: 30px;">
					Name of Insurance Company
				</td>
				<td style="height: 30px;">
					Details of Claims
				</td>
				<td style="height: 30px;">
					Claim Amount
				</td>
			</tr>
			<tr>
				<td style="width: 15px;">
					1
				</td>
				<td style="height: 30px;">
					<?php echo $eqcommercial->claim_expyes_date;?>
				</td>
				<td style="height: 30px;">
					<?php echo $eqcommercial->nameof_insucmy1;?>
				</td>
				<td style="height: 30px;">
					<?php echo $eqcommercial->detailof_claim1;?>
				</td>
				<td style="height: 30px;">
					<?php echo $eqcommercial->claim_expyes_amt;?>
				</td>
			</tr>
			<tr>
				<td style="width: 15px;">
					2
				</td>
				<td style="height: 20px;">
					
				</td>
				<td style="height: 20px;">
					
				</td>
				<td style="height: 20px;">
					
				</td>
				<td style="height: 20px;">
					
				</td>
			</tr>
			<tr>
				<td style="width: 15px;">
					3
				</td>
				<td style="height: 20px;">
					
				</td>
				<td style="height: 20px;">
					
				</td>
				<td style="height: 20px;">
					
				</td>
				<td style="height: 20px;">
					
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">
					ADDITIONAL INFORMATION: <span style="font-size:8px">(IF THE ANSWER TO ANY QUESTION IS “YES”, PLEASE GIVE FULL DETAILS ON A SEPARATE SHEET OF PAPER.)</span>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="height: 25px;width: 500px;border-bottom:1px solid #797777">
					1. Has any person who will be driving the vehicle been in any motor accident for the past 3 years?
				</td>
				<td style="height: 25px;vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info1=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info1=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="height: 25px;border-bottom:1px solid #797777">
					2. Has any person who will be driving the vehicle been convicted of or having prosecutions pending for any motoring offences (other than parking offences) in the last 3 years?
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info2=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info2=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="height: 25px;border-bottom:1px solid #797777">
					3. Has any person who will be driving the vehicle suffer from any disease or infirmity that could impair the ability to drive?
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info3=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info3=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="height: 25px;border-bottom:1px solid #797777">
					4. Has your vehicle been modified/altered from the original manufacturer’s specification?
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info4=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info4=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="height: 25px;border-bottom:1px solid #797777">
					5. Has any of your motor insurance proposal been declined, cancelled or renewal rejected? 
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info5=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="height: 25px;border-bottom:1px solid #797777">
						<span>
							<?php if($eqcommercial->additional_info5=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">Personal Data Collection Statement</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="line-height: 20px;">
				<p style="font-size: 10px;">
					To evaluate, process and administer this application or transaction, it is necessarily for us to collect, use, disclose and/or process your personal data or personal information about you. Such personal data includes information collected in this form, or in any document provided, or to be provided to us by you or from other sources.</p><br/>
					
				<p style="font-size: 10px;">
					<b>A. Purpose of Collection</b><br/>
					The personal data belonging to you and your insured/s may be collected, used and disclosed for the purposes of:<br/>
					a. carrying out identity checks;<br/>
					b. deciding whether to insure or continue to insure you and your insured persons;<br/>
					c. providing advice for product recommendation based on your profile;<br/>
					d. processing any claims under your policy, including the settlement of claims and any necessary investigations relating to the claims;<br/>
					e. communicating on any matters relating to the services and/or products which you are entitled to under this policy;<br/>
					f. responding to your inquiries or instructions and providing ongoing services, under your policy;<br/>
					g. making or obtaining payments and recovering any debt owed to us;<br/>
					h. detecting and preventing fraud, unlawful or improper activities;<br/>
					i. conducting market research and statistical analysis;<br/>
					j. coaching employees for customer service quality assurance;<br/>
					
				</p><br/>


				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="line-height: 20px;font-size: 11px;">
					<p style="font-size: 10px;">
						k. reinsuring risks and for reinsurance administration;<br/>
						l. complying with all applicable laws, including reporting to regulatory and industry entities; and<br/>
						m. carrying out No-claim discount (NCD) and claims verification from third-parties.
						<br/>
						<b>B. Disclosure of Data</b><br/>
						The personal data belonging to you and your insured/s may be disclosed for the purposes set out in Section A above to the parties below:<br/>
						a. Third party service vendors, suppliers, agents, reinsurers, or intermediaries;<br/>
						b. Medical Professionals and Institutions;<br/>
						c. Local or overseas service third party vendors that provide us with services such as printing, mail distribution, data storage, data entry, marketing and research, disaster recovery or emergency assistance services;			
					</p>
					<p style="font-size: 10px;">
						d. Debt collection agencies;<br/>
						e. Dispute resolution parties;<br/>
						f. Parties that assist us to investigate, administer and adjudicate claims;<br/>
						g. Financial institutions;<br/>
						h. Credit reference agencies;<br/>
						i. Industry associations; and<br/>
						j. To any regulatory, government and statutory body to comply with applicable, laws or regulation or upon their valid request.
					</p><br/>
					<p style="font-size: 10px;">
						<b>C. Personal Data Access and Amendments</b><br/>
						You can request access to your personal data collected by us, and to make any corrections to your personal data so as to keep it updated. We may charge you a reasonable fee for providing you with the service.
					</p><br/>
					<p style="font-size: 10px;">
							<b>D. Marketing Option</b><br/>
							Please indicate if you wish to receive marketing or promotional materials on our products or services via the following modes of communication. ;<br/>
							</p>
					</p>	
					<p style="font-size: 10px;">			
							<span>
								<?php if($eqcommercial->making_option=="Telephone call"){ ?>
									<span style="font-size: 14px">&#9745;</span> Telephone call
								<?php }else{ ?>
									❑ Telephone call
								<?php } ?>					
							</span>
							<span>
								<?php if($eqcommercial->making_option=="Text"){ ?>
									<span style="font-size: 14px">&#9745;</span> Text Message
								<?php }else{ ?>
									❑ Text Message
								<?php } ?>					
							</span>
							<span>
								<?php if($eqcommercial->making_option=="Mail"){ ?>
									<span style="font-size: 14px">&#9745;</span> Mail
								<?php }else{ ?>
									❑ Mail
								<?php } ?>					
							</span>
							<span>
								<?php if($eqcommercial->making_option=="Email"){ ?>
									<span style="font-size: 14px">&#9745;</span> Email
								<?php }else{ ?>
									❑ Email
								<?php } ?>					
							</span>
					</p>
					<p style="font-size: 10px;">
							If you do not indicate your option here, we will follow any existing option you may have indicated previously.
					</p><br/>
					<p style="font-size: 10px;">
						<b>E. Withdrawal Option of the collection and use of your personal data</b><br/>
							You may make your request to withdraw your consent, access or correct your personal data by writing to: The Data Protection Officer, EQ Insurance, 5 Maxwell Road, #17-00 Tower Block, MND Complex, Singapore 069110. Alternatively, you can email to dpo@eqinsurance.com.sg.</p>
					<p style="font-size: 10px;">
							You may make your request to withdraw your consent, access or correct your personal data by writing to: The Data Protection Officer, EQ Insurance, 5 Maxwell Road, #17-00 Tower Block, MND Complex, Singapore 069110. Alternatively, you can email to dpo@eqinsurance.com.sg.</p>
					<p style="font-size: 10px;">
							Altering on this “Personal data collection statement” is strictly prohibited. Any attempt to do so will be of no effect.</p>
					<br/>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">
					DECLARATION:</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="2" style="">
						<p style="font-size: 10px;">(1) I/We have declared to the best of my/our knowledge and belief that all the answers given in this Proposal are true and correct and I/We have not withheld any information likely to affect acceptance of this Proposal.</p><br/>
						<p style="font-size: 10px;">(2) I/We agree that this Proposal shall be the basis of the Contract between me/us and the Company and I/We further agree to accept the Company’s policy subject to the terms exclusions and conditions expressed therein, endorsed thereon or attached thereto.</p><br/>
						<p style="font-size: 10px;">(3) I/We undertake the vehicle to be insured is and will be kept in a GOOD CONDITION, and will not be driven by any person whom to my/our knowledge has been refused motor insurance or continuance therefore.</p><br/>
						<p style="font-size: 10px;">If this Proposal has not been completed by me/us personally, I/we declare that I/we have read the completed form and accept full responsibility for the answers.</p><br/>
					</td>
				</tr>
				<tr>
					<td style="width: 60%;height:80px;vertical-align: bottom;">
						<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$eqcommercial->signof_proposal)); ?>" class="gg" style="width:100px;height: 30px;"><br/>

						<span style="border-top:1px dotted #000">Signature of Proposer (and Company Stamp if Proposer is a Company)</span>
					</td>
					<td style="height:80px;vertical-align: bottom;">
						<?php echo $eqcommercial->sign_date;?><br/>
						<span style="border-top:1px dotted #000">Date</span>
					</td>
				</tr>
		</table>
		<table style="width: 100%;">
			<tr>
				<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">
					FOR OFFICIAL USE
				</td>
			</tr>
		</table>

		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Premium (Including GST): <?php echo $eqcommercial->premium_gst;?>
				</td>
				<td style="height: 28px;width: 25%;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Excess: <?php echo $eqcommercial->excess;?>
				</td>
				<td style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Accepted By: <?php echo $eqcommercial->accepted_by;?>
				</td>
				<td style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Date: <?php echo $eqcommercial->date;?>
				</td>
			</tr>
		</table>

		<div class="col-sm-12" style="margin-top:20px">
			<div class="col-sm-4" style="width:25%;float: right;">
				<img src="<?=base_url()?>/assets/images/eqinsurance-logo.png" style="width: 170px;">
			</div>			
		</div>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="7" style="background:#231f20;font-size:13px;color:#fff;text-align: center;">CREDIT CARD AUTHORISATION FORM</td>
				</tr>
		</table>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width:50%;text-align: right;float: right;">
				<p style="font-size: 10px;font-style: italic;">
					<b>IMPORTANT NOTICE TO THE PROPOSER</b><br/>
					1. I hearby authorise EQ Insurance to charge my credit card (details below) for the Total Insurance Premium due.<br/>
					2. I agree that no reversal is allowed under any circumstances whatsoever, once the payment is charged to my credit card.<br/>
					3. if there is a cancellation to the policy, I fully understand that any refundable premium will be paid to the policyholder of the policy.
				</p>
			</div>			
		</div>
		<table style="width: 100%;">
			<tr>
				<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">
					PAYMENT INSTRUCTION
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="height:28px;width: 400px;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Name of Insured: <?php echo $eqcommercial->insured_name;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					NRIC./Passport No.: <?php echo $eqcommercial->insured_nric;?>
				</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Contact No.: <br/>
					(Home:<?php echo $eqcommercial->payment_home;?>)
					(Office:<?php echo $eqcommercial->payment_office;?>)
					(Mobile:<?php echo $eqcommercial->insured_mobile;?>)
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Email: <?php echo $eqcommercial->insured_email;?>
				</td>
			</tr>
			<tr>
				<td style="height: 70px;vertical-align: top;">
					Policy Type/ Policy no. / Cover Note No. / Invoice No.: <br/>
					
				</td>
				<td style="vertical-align: top;">
					Amount to be charged: <br/>
					<?php echo $eqcommercial->amount;?>
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					Total Insurance Premium
				</td>
				<td>
					<?php echo $eqcommercial->totalinsurance_premium;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
			<tr>
				<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">
					PERSONAL DATA COLLECTION STATEMENT
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="padding:8px">
					<p style="font-size:10px;">I agree and consent that EQI may collect, use and process my personal information obtained in this Credit Card Authorisation Form and disclose such information to third party service vendors and financial instructions for the purpose of processing and making payments EQI.</p><br/>
					<p style="font-size:10px;">Note: Plelase refer to the full version of EQI's Data Privacy found at https://www.eqinsurance.com.sg/CorporatePolicies before providing your consent.</p>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
			<tr>
				<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">
					Credit Card Details (Applicable to MasterCard/Visa)
				</td>
			</tr>
		</table>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;border-top:1px solid #797777;">
				<tr>
					<td colspan="3" style="padding:10px;">
						Premium (including GST): S$ <span class="txt_underline"><?php echo $eqcommercial->cardpremium_gst;?></span><br/>
						I agree that no reversal is allowed under any circumstances whatsoever, once the payment is charged to my credit card<br/>					
					</td>
				</tr>
				<tr>
					<td style="padding:10px;width:20% !important">
						<span>
							<?php if($eqcommercial->visa_card=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Visa / MasterCard* 
							<?php }else{ ?>
								❑ Visa / MasterCard* 
							<?php } ?>					
						</span>
					</td>
					<td style="padding:10px;width:200px !important">
						Name on Credit Card:<span class="txt_underline"><?php echo $eqcommercial->nameon_card;?></span><br/>
						<span style="font-size:8px">(Cardholder must be the Policyholder, Spouse, Parent, Child or Sibling)</span>
					</td>
					<td style="padding:10px;width:100px !important">
						Tel No.:<span class="txt_underline"><?php echo $eqcommercial->tel_no;?></span>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="text-align:center;">
						Card No. <span style="font-size: 20px;">□□□□□□□□□□□□□□□□</span>
						<?php
	                        $cardno = explode(',', $eqcommercial->card_no);
	                    ?>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[0];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[1];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[2];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[3];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[4];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[5];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[6];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[7];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[8];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[9];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[10];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[11];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[12];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[13];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[14];?></span>
	                    <span style="border:1px solid #000;font-size:12px;"><?php echo $cardno[15];?></span>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;">
				<tr>
					<td style="width:380px;text-align: right;">
						<?php
	                        $expdate = explode(',', $eqcommercial->card_expiry_date);
	                    ?>
						Expiry Date <span style="font-size: 20px;">□□</span>
						- <span style="font-size: 20px;">□□□□</span>
					</td>
					<td colspan="2" style="">
						CCV <span style="font-size: 20px;">□□□</span>
					</td>
				</tr>
				
		</table>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777;">
				<tr>
					<td colspan="3" style="padding:10px;width:20% !important">
						<span>
							<?php if($eqcommercial->instalment_plan=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Instalment Plan (only for participating banks with total premiums exceeding S$500)
							<?php }else{ ?>
								❑ Instalment Plan (only for participating banks with total premiums exceeding S$500)
							<?php } ?>					
						</span>
					</td>					
				</tr>
				<tr>
					<td style="padding:10px">
						Participating Bank: 
							<span>
								<?php if($eqcommercial->uob=="Yes"){ ?>
									<span style="font-size: 14px">&#9745;</span> UOB
								<?php }else{ ?>
									❑ UOB
								<?php } ?>	
							</span>	
						
					</td>
					<td colspan="2" style="padding:10px">
						Instalment Period:
							<span>
								<?php if($eqcommercial->instalment_period=="6"){ ?>
									<span style="font-size: 14px">&#9745;</span> 6 Months
								<?php }else{ ?>
									❑ 6 Months
								<?php } ?>	
							</span>	
							<span>
								<?php if($eqcommercial->instalment_period=="12"){ ?>
									<span style="font-size: 14px">&#9745;</span> 12 Months
								<?php }else{ ?>
									❑ 12 Months
								<?php } ?>	
							</span>	
					</td>
				</tr>
				<tr>
					<td style="height: 70px;padding:3px 10px;vertical-align:bottom">
						(* Delete where appropriate)
					</td>
					<td style="height: 70px;padding:3px 10px;vertical-align:bottom">
						
						<span style="border-top: 1px dotted #000;">Signature of Cardholder</span><br/>
						(As in Credit card)
					</td>
					<td style="height: 70px;padding:3px 10px;vertical-align:bottom">
						<?php echo $eqcommercial->cardholdersign_date;?><br/>
						<span style="border-top: 1px dotted #000;">Date(dd/mm/yyyy)</span>
					</td>
				</tr>
		</table>
		<table style="width: 100%;">
			<tr>
				<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">
					FOR OFFICIAL USE
				</td>
			</tr>
		</table>
		<table style="width:100%;border:1px solid #797777">
			<tr>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777;">
					Accepted By: <?php echo $eqcommercial->official_accepted_by;?>
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777;">
					Verified By: <?php echo $eqcommercial->official_verified_by;?>
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777;">
					Date: <?php echo $eqcommercial->official_date;?>
				</td>
			</tr>
		</table>
		<div class="col-sm-12">
			<p style="text-align:center;font-size: 11px;font-style: italic;">
				Submit your COMPLETE APPLICATION form to distribution@eqinsurance.com.sg.
			</p>
		</div>
	</div>
</div>
</body>
</html>