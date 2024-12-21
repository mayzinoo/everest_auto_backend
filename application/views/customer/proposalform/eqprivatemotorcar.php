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
						<?php echo $eqprivatecar->agent_broker;?>
					</td>
					<td style="width: 30%;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Code: <br/>
						<?php echo $eqprivatecar->code;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Type of Plan (CLASSIC / PREMIER): <br/>
						<?php echo $eqprivatecar->typeof_plan;?>
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
						Name / Company Name*:<?php echo $eqprivatecar->name;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Gender
						<span>
							<?php if($eqprivatecar->hirer_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->hirer_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 38px;width: 75%;vertical-align: top;border-bottom:1px solid #797777">
						Residential or Company Address: <?php echo $eqprivatecar->cmy_address;?>
					</td>
					<td style="vertical-align: top;border-bottom:1px solid #797777">
						Postal Code ( <?php echo $eqprivatecar->postal_code;?> )
					</td>
				</tr>
				<tr>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Contact No.:<br/>
						(Home:<?php echo $eqprivatecar->home_no;?>)
						(Office:<?php echo $eqprivatecar->office_no;?>)
						(Mobile:<?php echo $eqprivatecar->mobile_no;?>)
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Email: <?php echo $eqprivatecar->email;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Date of Birth:<?php echo $eqprivatecar->dob;?>
						(dd/mm/yyyy)
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 38px;width: 40% !important;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Occupation (Indoor / Outdoor)*: <?php echo $eqprivatecar->occupation;?>
					</td>
					<td style="vertical-align: top;border-bottom:1px solid #797777">
						Nature / Business: <?php echo $eqprivatecar->nature_business;?>
					</td>
				</tr>
				<tr>
					<td style="height: 38px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						NRIC No. / Business Reg. No.*: <?php echo $eqprivatecar->nric;?>
					</td>
					<td style="width: 20%;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Nationality: <?php echo $eqprivatecar->nationality;?>
					</td>
					<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Driving Experience: <?php echo $eqprivatecar->driving_exp;?><br/>
						(in years)
					</td>
					<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Marital Status: <?php echo $eqprivatecar->marital_status;?>
					</td>
				</tr>
				<tr>
					<td colspan="4" style="height: 38px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Is the vehicle purchased for use by other(s)?
						<span>
							<?php if($eqprivatecar->purchasefor_use=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->purchasefor_use=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span><br/>
						If “Yes”, please give details: <?php echo $eqprivatecar->purchaseforuse_details;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">Details of Main Driver <span style="font-size:8px">(If Registered Owner is NOT driving vehicle to be insured or vehicle registered under company’s name)</span></td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="2" style="height: 38px;width: 390px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Name: 
					<?php echo $eqprivatecar->driver_name;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Occupation / Business: <?php echo $eqprivatecar->driver_occupation;?>(Indoor / Outdoor)*
				</td>
			</tr>
			<tr>
				<td style="height: 38px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Driving Experience: <?php echo $eqprivatecar->driver_exp;?>
				</td>
				<td style="width: 200px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Date of Birth (dd/mm/yyyy): <?php echo $eqprivatecar->driver_dob;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					NRIC / Passport No.: <?php echo $eqprivatecar->driver_nric;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">Particulars of Vehicle <span style="font-size:8px">(Please attach photocopy of Vehicle Registration Card)</span></td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="height: 38px;width: 185px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Registration No.: <?php echo $eqprivatecar->reg_no;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Year of Registration (YOR): <?php echo $eqprivatecar->yearof_reg;?>
				</td>
				<td style="vertical-align: top;width: 25%;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Make of Vehicle: <?php echo $eqprivatecar->make;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Vehicle Model: <?php echo $eqprivatecar->model;?>
				</td>
			</tr>
			<tr>
				<td style="height: 38px;width: 185px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Vehicle Type:  <?php echo $eqprivatecar->vehi_type;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Engine Capacity: <?php echo $eqprivatecar->engine_capacity;?>
				</td>
				<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Engine No.: <?php echo $eqprivatecar->engineno;?>
				</td>
			</tr>
			<tr>
				<td style="height: 38px;width: 185px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Chassis No.:  <?php echo $eqprivatecar->chassisno;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Is this vehicle under Hire Purchase? <br/>
						<span>
							<?php if($eqprivatecar->hirepurchase=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->hirepurchase=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
				<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Name of Finance Company: <?php echo $eqprivatecar->nameof_finance;?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height: 38px;width: 185px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Cover Required (Comprehensive / Third Party Fire & Theft / Third Party)*: <br/>
					<?php echo $eqprivatecar->cover_required;?>
				</td>
				<td style="vertical-align: top;width: 300px;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Seating Capacity (excluding driver): <?php echo $eqprivatecar->seating_capacity;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Off-Peak Car:
						<span>
							<?php if($eqprivatecar->off_peakcar=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->off_peakcar=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="height: 38px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Sum Insured: <?php echo $eqprivatecar->sum_insured;?><br/>
					Market Value at time of loss
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Private Vehicle: <?php echo $eqprivatecar->private_vehi;?><br/>
					(Private Use / Company Use)*
				</td>
				<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Period of Insurance: <br/>
					From ___________________
					To ___________________
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">NCD Entitlement / Confirmation <span style="font-size:8px">(Please attach photocopy of Renewal Notice)</span></td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="height: 28px;width: 352px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					No Claim Discount Entitlement (Existing / Renewal)*: <?php echo $eqprivatecar->discount_entitlement;?> %
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Vehicle No.: <?php echo $eqprivatecar->vehiname;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Existing Insurer: <?php echo $eqprivatecar->existing_insurer;?> %
				</td>
			</tr>
			<tr>
				<td style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Existing Policy No.: <?php echo $eqprivatecar->policy_no;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Expiry Date: <?php echo $eqprivatecar->expiry_date;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					No Claim Discount Protection:<br/>
						<span>
							<?php if($eqprivatecar->discount_protection=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->discount_protection=="No"){ ?>
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
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">Details of Accessories <span style="font-size:8px"> (Other than factory-fitted) you have installed in the vehicle</span></td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="height: 28px;width: 395px;vertical-align: top;">
					1. <span class="txt_underline"><?php echo $eqprivatecar->detailofaccessory1;?></span>
				</td>
				<td style="width: 395px;vertical-align: top;">
					(Value: <span class="txt_underline"><?php echo $eqprivatecar->detailofaccessory1_value;?></span>)
				</td>
			</tr>
			<tr>
				<td style="height: 28px;width: 55%;vertical-align: top;">
					2. <span class="txt_underline"><?php echo $eqprivatecar->detailofaccessory2;?></span>
				</td>
				<td style="width: 395px;vertical-align: top;">
					(Value: <span class="txt_underline"><?php echo $eqprivatecar->detailofaccessory2_value;?></span>)
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">Claims History of Proposer and Main / Authorised Driver(s)  <span style="font-size:8px"> (Last 3 Years)</span></td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="5" style="vertical-align: top;">
					Have you or authorised driver(s) had any motor insurance related claim over the last 3 years?
						<span>
							<?php if($eqprivatecar->claim_exp=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes, see details below.
							<?php }else{ ?>
								❑ Yes, see details below.
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->claim_exp=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="vertical-align: top;">
					No.
				</td>
				<td style="vertical-align: top;">
					Date of Accident
				</td>
				<td style="vertical-align: top;">
					Name of Insurance Company 
				</td>
				<td style="vertical-align: top;">
					Details of Claims
				</td>
				<td style="vertical-align: top;">
					Claim Amount
				</td>
			</tr>
			<tr>
				<td style="height: 60px;width: 10px;vertical-align: top;">
					1.
				</td>
				<td style="vertical-align: top;">
					<span class="txt_underline"><?php echo $eqprivatecar->claim_expyes_date;?></span>
				</td>
				<td style="vertical-align: top;">
					___________________
				</td>
				<td style="vertical-align: top;">
					___________________
				</td>
				<td style="vertical-align: top;">
					<span class="txt_underline"><?php echo $eqprivatecar->claim_expyes_amt;?></span>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">For Comprehensive Private Car Insurance Only – Named Driver/s Declaration</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="3" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					1st Named Driver
				</td>
			</tr>
			<tr>
				<td style="height: 28px;width: 250px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Name: 
					<?php echo $eqprivatecar->driver_name;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					NRIC / Passport No.:<br/>
					<?php echo $eqprivatecar->driver_nric;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Date of Birth (dd/mm/yyyy): <br/>
					<?php echo $eqprivatecar->driver_dob;?>
				</td>
			</tr>
			<tr>
				<td style="height: 28px;width: 380px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Gender: 
						<span>
							<?php if($eqprivatecar->driver_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->driver_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
				</td>
				<td colspan="2" style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Occupation: <?php echo $eqprivatecar->driver_occupation;?> (Indoor / Outdoor)*
				</td>
			</tr>
			<tr>
				<td style="height: 28px;width: 380px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Driving Licence Registration Date: <?php echo $eqprivatecar->driver_licensepassdate;?>
					
				</td>
				<td colspan="2" style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Relationship: <?php echo $eqprivatecar->driver_relationship;?>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					2nd Named Driver (Note: For additional Named drivers, please attach a separate sheet with particulars.)
				</td>
			</tr>
			<tr>
				<td style="height: 28px;width: 250px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Name: <br/>
					<?php echo $eqprivatecar->drivername_2nd;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					NRIC / Passport No.:<br/>
					<?php echo $eqprivatecar->driver_nric_2nd;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Date of Birth (dd/mm/yyyy): <br/>
					<?php echo $eqprivatecar->driver_dob_2nd;?>
				</td>
			</tr>
			<tr>
				<td style="height: 28px;width: 380px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Gender: 
						<span>
							<?php if($eqprivatecar->driver_gender_2nd=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->driver_gender_2nd=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
				</td>
				<td colspan="2" style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Occupation: <?php echo $eqprivatecar->driver_occupation_2nd;?> (Indoor / Outdoor)*
				</td>
			</tr>
			<tr>
				<td style="height: 28px;width: 380px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Driving Licence Registration Date: <?php echo $eqprivatecar->driver_dlr_date_2nd;?>
					
				</td>
				<td colspan="2" style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Relationship: <?php echo $eqprivatecar->driver_relationship_2nd;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">General Questions</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="width: 500px;vertical-align: top;border-bottom:1px solid #797777">
					1. Have you or your authorised driver(s) been convicted of or having prosecutions pending for any motoring offences<br/> (Other than parking offences) in the last 3 years?
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question1=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question1=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					2. Have you or your authorised driver been given / accumulated demerit points during the last 24 months?
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question2=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question2=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					3. Have you or your authorised driver had any motor insurance proposal declined, cancelled or renewal rejected by any insurance Company?
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question3=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question3=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					4. Have you or any of your authorised driver suffered any disease or infirmity that could impair the ability to drive?
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question4=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question4=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
			</tr>
			<tr>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					5. Has your car been modified / altered from the original manufacturer’s specification?<br/>
					If “Yes”, please give details: <span class="txt_underline"><?php echo $eqprivatecar->general_question5_details;?></span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question5=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
						<span>
							<?php if($eqprivatecar->general_question5=="No"){ ?>
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
				<td style="line-height: 20px;font-size: 11px;">
					<p>
					To evaluate, process and administer this application or transaction, it is necessarily for us to collect, use, disclose and/or process your personal data or personal information about you. Such personal data includes information collected in this form, or in any document provided, or to be provided to us by you or from other sources.</p><br/>
					
				<p>
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
					k. reinsuring risks and for reinsurance administration;<br/>
					l. complying with all applicable laws, including reporting to regulatory and industry entities; and<br/>
					m. carrying out No-claim discount (NCD) and claims verification from third-parties.
				</p><br/>

				<p>
					<b>B. Disclosure of Data</b><br/>
					The personal data belonging to you and your insured/s may be disclosed for the purposes set out in Section A above to the parties below:<br/>
					a. Third party service vendors, suppliers, agents, reinsurers, or intermediaries;<br/>
					b. Medical Professionals and Institutions;<br/>
					c. Local or overseas service third party vendors that provide us with services such as printing, mail distribution, data storage, data entry, marketing and research, disaster recovery or emergency assistance services;			
				</p><br/>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="line-height: 20px;font-size: 11px;">
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
					</p><br/>				
							<span>
								<?php if($eqprivatecar->making_option=="Telephone"){ ?>
									<span style="font-size: 14px">&#9745;</span> Telephone call
								<?php }else{ ?>
									❑ Telephone call
								<?php } ?>					
							</span>
							<span>
								<?php if($eqprivatecar->making_option=="Text"){ ?>
									<span style="font-size: 14px">&#9745;</span> Text Message
								<?php }else{ ?>
									❑ Text Message
								<?php } ?>					
							</span>
							<span>
								<?php if($eqprivatecar->making_option=="Mail"){ ?>
									<span style="font-size: 14px">&#9745;</span> Mail
								<?php }else{ ?>
									❑ Mail
								<?php } ?>					
							</span>
							<span>
								<?php if($eqprivatecar->making_option=="Email"){ ?>
									<span style="font-size: 14px">&#9745;</span> Email
								<?php }else{ ?>
									❑ Email
								<?php } ?>					
							</span><br/>
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
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">Personal Accident - Enhanced Cover EXCLUSIVE OFFER!</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td>
					This policy includes a $50,000 Personal Accident whilst driving. You can now enhance it by an additional $100,000 sum insured worldwide coverage for just an additional top-up premium of S$50 (inclusive of GST).<br/>
						<span>
							<?php if($eqprivatecar->enhanced_cover=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes! I want to be covered for S$100,000 Personal Accident at only S$50 (inclusive of GST).
							<?php }else{ ?>
								❑ Yes! I want to be covered for S$100,000 Personal Accident at only S$50 (inclusive of GST).
							<?php } ?>					
						</span>
						<span>
							<?php if($eqprivatecar->enhanced_cover=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
				</td>
				
			</tr>
			<tr>
				<td>
					<b>Declined Risks</b> - Industrial workers using heavy machinery; woodworking related occupation involving aviation activities; armed services personnel, police force personnel and fire fighters; construction or skilled workers; ship crew or workers on board vessels, stevedores, shipbreakers; occupations involving diving, platforms, oil and gas rig and / or offshore work; occupation involving heights, underground, heat and handling of hazardous chemical or electricity; professional sports team; professional divers and jockeys; welders and the like.
				</td>
			</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="padding:8px;font-size:11px;font-weight:bold;text-transform: uppercase;">Declaration</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="2">
					<p style="font-size: 10px;">
						(1) I/We have declared to the best of my/our knowledge and belief that all the answers given in this Proposal are true and correct and I/We have not withheld any information likely to affect acceptance of this Proposal.
					</p><br/>
					<p style="font-size: 10px;">
						(2) I/We agree that this Proposal shall be the basis of the Contract between me/us and the Company and I/We further agree to accept the Company’s policy subject to the terms exclusions and conditions expressed therein, endorsed thereon or attached thereto.
					</p><br/>
					<p style="font-size: 10px;">
						(3) I/We undertake the vehicle to be insured is and will be kept in a GOOD CONDITION, and will not be driven by any person whom to my/our knowledge has been refused motor insurance or continuance therefore.
					</p><br/>
					<p style="font-size: 10px;">
						If this Proposal has not been completed by me/us personally, I/we declare that I/we have read the completed form and accept full responsibility for the answers.
					</p>
				</td>
			</tr>
			<tr>
				<td style="height: 58px;vertical-align: bottom;">
					<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$eqprivatecar->signof_proposal)); ?>" class="gg" style="width:100px;height: 30px;"><br/>

					<span style="border-top: 1px dotted #000;">Signature of Proposer (and Company Stamp if Proposer is a Company) </span>
				</td>
				<td style="height: 78px;vertical-align: bottom;">
					<?php echo $eqprivatecar->proposalsign_date;?><br/>
					<span style="border-top: 1px dotted #000;">Date</span>
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
					Premium (w/GST): <?php echo $eqprivatecar->premium;?>
				</td>
				<td style="height: 28px;width: 25%;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Excess: <?php echo $eqprivatecar->excess;?>
				</td>
				<td style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Accepted By: <?php echo $eqprivatecar->acceptedby;?>
				</td>
				<td style="height: 28px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Date: <?php echo $eqprivatecar->officialuse_date;?>
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
				<td style="height:28px;width: 500px;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Name of Insured: <?php echo $eqprivatecar->insured_name;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					NRIC./Passport No.: <?php echo $eqprivatecar->insured_nric;?>
				</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Contact No.: <br/>
					(Home:<?php echo $eqprivatecar->instruction_home;?>)
					(Office:<?php echo $eqprivatecar->instruction_office;?>)
					(Mobile:<?php echo $eqprivatecar->insured_mobile;?>)
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Email: <?php echo $eqprivatecar->insured_email;?>
				</td>
			</tr>
			<tr>
				<td style="height: 40px;">
					Policy Type/ Policy no. / Cover Note No. / Invoice No.: <br/>
					
				</td>
				<td>
					Amount to be charged: <br/>
					<?php echo $eqprivatecar->amount_charged;?>
				</td>
			</tr>
			<tr>
				<td style="text-align: right;">
					Total Insurance Premium
				</td>
				<td>
					<?php echo $eqprivatecar->total_insurance_premium;?>
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
				<td style="padding:10px">
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
						Premium (including GST): S$ <span class="txt_underline"><?php echo $eqprivatecar->premiumwithgst;?></span><br/>
						I agree that no reversal is allowed under any circumstances whatsoever, once the payment is charged to my credit card<br/>					
					</td>
				</tr>
				<tr>
					<td style="padding:10px;width:20% !important">
						<span>
							<?php if($eqprivatecar->visa_mastercard=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Visa / MasterCard* 
							<?php }else{ ?>
								❑ Visa / MasterCard* 
							<?php } ?>					
						</span>
					</td>
					<td style="padding:10px;width:200px !important">
						Name on Credit Card:<span class="txt_underline"><?php echo $eqprivatecar->creditcard_name;?></span><br/>
						<span style="font-size:8px">(Cardholder must be the Policyholder, Spouse, Parent, Child or Sibling)</span>
					</td>
					<td style="padding:10px;width:100px !important">
						Tel No.:<span class="txt_underline"><?php echo $eqprivatecar->telno;?></span>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="text-align:center;">
						Card No. <span style="font-size: 20px;">□□□□□□□□□□□□□□□□</span>
						<?php
	                        $cardno = explode(',', $eqprivatecar->card_no);
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
					<td style="width:395px;text-align: right;">
						<?php
	                        $expdate = explode(',', $eqprivatecar->card_expiry_date);
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
							<?php if($eqprivatecar->instalment_plan=="Yes"){ ?>
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
								<?php if($eqprivatecar->uob=="Yes"){ ?>
									<span style="font-size: 14px">&#9745;</span> UOB
								<?php }else{ ?>
									❑ UOB
								<?php } ?>	
							</span>	
						
					</td>
					<td colspan="2" style="padding:10px">
						Instalment Period:
							<span>
								<?php if($eqprivatecar->instalment_period=="6"){ ?>
									<span style="font-size: 14px">&#9745;</span> 6 Months
								<?php }else{ ?>
									❑ 6 Months
								<?php } ?>	
							</span>	
							<span>
								<?php if($eqprivatecar->instalment_period=="12"){ ?>
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
						<?php echo $eqprivatecar->cardholdersign_date;?><br/>
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
					Accepted By: <?php echo $eqprivatecar->official_acceptedby;?>
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777;">
					Verified By: <?php echo $eqprivatecar->verifiedby;?>
				</td>
				<td style="border-right:1px solid #797777;border-bottom:1px solid #797777;">
					Date: <?php echo $eqprivatecar->official_date;?>
				</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>