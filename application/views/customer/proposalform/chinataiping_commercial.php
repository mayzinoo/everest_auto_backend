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
        margin: 10mm 18mm 10mm 18mm;  /* this affects the margin in the printer settings */
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
        	font-size: 10.5px;        	
        	border-collapse: collapse;
        }
        table tr td{
        	padding: 5px !important;
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
			<div class="col-sm-6 header" style="width:25%;">
				<img src="<?=base_url()?>/assets/images/china_taiping.png" style="width: 170px;">
			</div>	
			<div class="col-sm-6" style="width:45%;float: right;margin-top: 10px;">
				<img src="<?=base_url()?>/assets/images/china_taiping_insurance.png" style="width: 220px;float: right;">
			</div>			
		</div>
		<table style="width: 100%;border: 1px solid #e6e6e6;margin-top: 10px;">
				<tr>
					<td colspan="4" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;font-weight: bold;">
						PRIVATE VEHICLE - MOTOR INSURANCE PROPOSAL FORM
					</td>
				</tr>
				<tr>
					<td style="width: 15%;border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						Policy No.
					</td>
					<td style="width: 45%;border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						<?php echo $chinacommercialvehi->policy_no;?>
					</td>
					<td style="border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						Agent/Broker
					</td>	
					<td style="border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						Agent/Broker Code
					</td>
				</tr>
				<tr>
					<td style="border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						Quotation No.
					</td>
					<td style="border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						<?php echo $chinacommercialvehi->quotation_no;?>
					</td>	
					<td rowspan="2" style="vertical-align: top;border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						<?php echo $chinacommercialvehi->agent_broker;?>
					</td>			
				</tr>
				<tr>
					<td style="border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						Cover Note No.
					</td>
					<td style="border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						<?php echo $chinacommercialvehi->cover_noteno;?>
					</td>
					<td rowspan="2" style="vertical-align: top;border-right:1px solid #e6e6e6;border-bottom:1px solid #e6e6e6">
						<?php echo $chinacommercialvehi->agent_brokercode;?>
					</td>	
				</tr>
		</table>
		<div style="margin-top: -10px;">
			<p style="font-size: 10.5px;">
				Under Section 25(5) of the Insurance Act (Cap 142), you have to disclose to the Insurer in this Proposal Form, fully and faithfully, all the facts which you know or ought to know in respect of the risk that is being proposed; otherwise, the policy issued hereunder may be void.
			</p>
		</div>
		<div style="margin-top: -20px;">
		<p style="font-size: 10.5px;"><b>IMPORTANT</b><br/>
			1. The Liability of the Company does not commence in respect of this proposal until acceptance has been communicated by the Company to proposer or his agent or broker.<br/>
			2. All questions in this Proposal Form must be answered before this Proposal can be considered. Any question not answered will be taken as answered in the negative.<br/>
			3. All policies, renewal certificates, cover notes, endorsements for policies carry a Premium Warranty Clause which requires the premium to be paid in full within a specific period failing which would be no liability under the policy, renewal certificate, cover note, endorsement, etc.<br/>
			4. All amendments and/or corrections are to be initial by the insured.<br/>
			5. <b>Your Personal Data Is Important To Us</b>. This is an application for an insurance product provided by China Taiping Insurance Singapore Pte. Ltd. (“CTPIS” or “Company”). We will use all information provided in this form to assess your application for our insurance product and services. Before you provide any information in this form, please read our Privacy Policy which is made available on our website at www.sg.cntaiping.com/en/privacypolicy <br/>
			6. This policy is protected under the Policy Owners’ Protection Scheme which is administered by the Singapore Deposit Insurance Corporation (SDIC). Coverage for your policy is automatic and no further action is required from you. For more information on the types of benefits that are covered under the scheme as well as the limits of coverage, where applicable, please contact us or visit the GIA / LIA or SDIC websites (www.gia.org.sg or www.lia.org.sg or www.sdic.org.sg).<br/>
		</p>
		</div>
		<div style="margin-top: -20px;">
			<p style="font-size: 10.5px;">
				<i>PLEASE COMPLETE IN BLOCK LETTERS AND INK</i><br/>
				Tick boxes as appropriate and delete at (*) accordingly. Any amendments require the signature of the Proposer.
			</p>
		</div>
		<table style="width: 100%;border: 1px solid #e6e6e6;margin-top: -7px;">
				<tr>
					<td colspan="4" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Details of Proposer
					</td>
				</tr>
				<tr>
					<td colspan="4" style="background: #dce6f2;">
						Name
					</td>
				</tr>
				<tr>
					<td colspan="4" style="height: 20px;">
						<?php echo $chinacommercialvehi->name;?>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="background: #dce6f2;border-right: 1px solid #d1d3d4;">
						NRIC / Passport No. / Company Reg.No
					</td>
					<td colspan="2" style="background: #dce6f2;">
						Date of Birth (dd/mm/yyyy)
					</td>
				</tr>
				<tr>
					<td colspan="2" style="border-right: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->nric;?>
					</td>
					<td colspan="2" style="">
						<?php echo $chinacommercialvehi->dob;?>
					</td>
				</tr>
				
		</table>
		<table style="width: 100%;border: 1px solid #e6e6e6;">
				<tr>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;">
						Marital Status
					</td>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;">
						Gender
					</td>
					<td style="width: 55%;background: #dce6f2;border-right: 1px solid #d1d3d4;">
						Nationality
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #d1d3d4;">
						<span>
							<?php if($chinacommercialvehi->marital_status=="Single"){ ?>
								<span style="font-size: 14px">&#9745;</span> Single
							<?php }else{ ?>
								❑ Single
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->marital_status=="Married"){ ?>
								<span style="font-size: 14px">&#9745;</span> Married
							<?php }else{ ?>
								❑ Married
							<?php } ?>					
						</span>
					</td>
					<td style="border-right: 1px solid #d1d3d4;">
						<span>
							<?php if($chinacommercialvehi->hirer_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->hirer_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
					</td>
					<td style="border-right: 1px solid #d1d3d4;">
						<span>
							<?php if($chinacommercialvehi->nationality=="Singaporean"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singaporean
							<?php }else{ ?>
								❑ Singaporean
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->nationality=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others, please specify: 
							<?php }else{ ?>
								❑ Others, please specify: 
							<?php } ?>					
						</span>
						<?php echo $chinacommercialvehi->name;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="background: #dce6f2;border-right: 1px solid #d1d3d4;">
						Address
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<?php echo $chinacommercialvehi->address;?>
					</td>
					<td>
						Postal Code: <?php echo $chinacommercialvehi->postal_code;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border: 1px solid #e6e6e6;">
				<tr>
					<td colspan="4" style="background: #dce6f2;border-right: 1px solid #d1d3d4;">
						Contact Details
					</td>
				</tr>
				<tr>
					<td style="height: 40px;vertical-align: top;border-right: 1px solid #d1d3d4;">
						Home No.: <br/><?php echo $chinacommercialvehi->home_no;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #d1d3d4;">
						Office No.: <br/><?php echo $chinacommercialvehi->office_no;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #d1d3d4;">
						Mobile No. (Mandatory): <br/><?php echo $chinacommercialvehi->mobile_no;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #d1d3d4;">
						Email Address (Mandatory): <br/><?php echo $chinacommercialvehi->email;?>
					</td>
				</tr>
				
		</table>
		<table style="width: 100%;border: 1px solid #e6e6e6;">
				<tr>
					<td style="width: 40%;background: #dce6f2;border-right: 1px solid #d1d3d4;">
						Date of obtaining Singapore Driving License
					</td>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;">
						Occupation / Business
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->sg_driving_license;?>
					</td>
					<td style="border-right: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->occupation;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border: 1px solid #e6e6e6;margin-top: 0px;">
				<tr>
					<td colspan="4" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Details of Vehicle
					</td>
				</tr>
				<tr>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Registration No
					</td>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Make & Model
					</td>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Year of Make
					</td>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Registration Date
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->reg_no;?>
					</td>
					<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->make;?> <?php echo $chinacommercialvehi->model;?>
					</td>
					<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->manufacture_year;?>
					</td>
					<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->dateof_reg;?>
					</td>
				</tr>
				<tr>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Engine No
					</td>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Chassis No
					</td>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						C.C. / Tonnage
					</td>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Seating Capacity
					</td>
				</tr>
				<tr>
					<td style="height: 20px;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->engineno;?>
					</td>
					<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->chassisno;?>
					</td>
					<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->cctonnage;?>
					</td>
					<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->seating_capacity;?>
					</td>
				</tr>
				<tr>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Body Type <br/>
						<span style="font-size: 8px;">(Tick one)</span>
					</td>
					<td colspan="3" style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<span>
							<?php if($chinacommercialvehi->body_type=="Van"){ ?>
								<span style="font-size: 14px">&#9745;</span> Van
							<?php }else{ ?>
								❑ Van
							<?php } ?>					
						</span>
						
						<span>
							<?php if($chinacommercialvehi->body_type=="Pickup"){ ?>
								<span style="font-size: 14px">&#9745;</span> Pickup
							<?php }else{ ?>
								❑ Pickup
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->body_type=="Lorry"){ ?>
								<span style="font-size: 14px">&#9745;</span> Lorry
							<?php }else{ ?>
								❑ Lorry
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->body_type=="Bus"){ ?>
								<span style="font-size: 14px">&#9745;</span> Bus
							<?php }else{ ?>
								❑ Bus
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->body_type=="Refrigerator Vehicle"){ ?>
								<span style="font-size: 14px">&#9745;</span> Refrigerator Vehicle
							<?php }else{ ?>
								❑ Refrigerator Vehicle
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($chinacommercialvehi->body_type=="Box Van"){ ?>
								<span style="font-size: 14px">&#9745;</span> Box Van
							<?php }else{ ?>
								❑ Box Van
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->body_type=="Tipper"){ ?>
								<span style="font-size: 14px">&#9745;</span> Tipper
							<?php }else{ ?>
								❑ Tipper
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->body_type=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others , please specify:
							<?php }else{ ?>
								❑ Others , please specify:
							<?php } ?>					
						</span>
						<?php echo $chinacommercialvehi->otherbody_type;?>
					</td>
				</tr>
				<tr>
					<td style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Type of Vehicle
					</td>
					<td colspan="3" style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<span>
							<?php if($chinacommercialvehi->typeof_vehi=="Vehiclewithequipment"){ ?>
								<span style="font-size: 14px">&#9745;</span> Vehicle with equipment / fixture. Please specify: 
							<?php }else{ ?>
								❑ Vehicle with equipment / fixture. Please specify: 
							<?php } ?>					
						</span>
						<?php echo $chinacommercialvehi->vehi_equip;?> <br/>
						Sum Insured: <?php echo $chinaprivatecar->vehi_sum_insured;?> <br/>
						<span>
							<?php if($chinacommercialvehi->typeof_vehi=="Parallel Import Models"){ ?>
								<span style="font-size: 14px">&#9745;</span> Parallel Import Models*
							<?php }else{ ?>
								❑ Parallel Import Models*
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td style="height: 28px;background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;vertical-align: top;">
						Hire Purchase Company 
						
					</td>
					<td colspan="3" style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						<?php echo $chinacommercialvehi->hire_purchase_cmy;?>
					</td>
				</tr>
		</table>

		<table style="width: 100%;border: 1px solid #e6e6e6;margin-top: 150px;">
				<tr>
					<td colspan="4" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Coverage Required
					</td>
				</tr>
				<tr>
					<td style="width: 20%;background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Period of Cover
					</td>
					<td colspan="3" style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						From <?php echo $chinacommercialvehi->periodof_cover_from;?> To <?php echo $chinacommercialvehi->periodof_cover_to;?> <span style="text-align: right;">(To coincide with Road Tax expiry date if possible)</span>
					</td>
				</tr>
				<tr>
					<td rowspan="2" style="background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Type of Cover
					</td>
					<td style="width: 60%;">
						<span>
							<?php if($chinacommercialvehi->typeof_cover=="Comprehensive"){ ?>
								<span style="font-size: 14px">&#9745;</span> Comprehensive
							<?php }else{ ?>
								❑ Comprehensive
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->typeof_cover=="Third Party Fire & Theft"){ ?>
								<span style="font-size: 14px">&#9745;</span> Third Party Fire & Theft 
							<?php }else{ ?>
								❑ Third Party Fire & Theft 
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->typeof_cover=="Third Party Only"){ ?>
								<span style="font-size: 14px">&#9745;</span> Third Party Only
							<?php }else{ ?>
								❑ Third Party Only
							<?php } ?>					
						</span><br/>
						<span style="font-size:8.5px">For Comprehensive and Third Party Fire & Theft, coverage is based on market value at the time of loss.</span>
					</td>
					
				</tr>
				<tr>
					<td>
						AutoSafe Scheme<br/>
						<span style="font-size:8.5px">Applicable to Comprehensive Coverage only. Refer to Declaration section on Page 3 for more information.</span>
					</td>
					<td>
						<span>
							<?php if($chinacommercialvehi->autosafe_scheme=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span> 
					</td>
					<td>
						<span>
							<?php if($chinacommercialvehi->autosafe_scheme=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>  
					</td>
				</tr>
		</table>
		<table style="width: 100%;border: 1px solid #e6e6e6;margin-top: -7px;">
				<tr>
					<td colspan="4" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Vehicle Usage
					</td>
				</tr>

				<tr>
					<td rowspan="3" style="width: 20%;background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
						Commercial Vehicle
					</td>
					<td style="width: 60%;">
						(a) Carriage of goods (other than samples) in connection with own business but not for hire or reward?						
					</td>
					<td>
						<span>
							<?php if($chinacommercialvehi->privatecar_q1=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span> 
					</td>
					<td>
						<span>
							<?php if($chinacommercialvehi->privatecar_q1=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>  
					</td>
				</tr>
				<tr>
					<td>
						(b) Carriage of goods for hire or reward?					
					</td>
					<td>
						<span>
							<?php if($chinacommercialvehi->privatecar_q1=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span> 
					</td>
					<td>
						<span>
							<?php if($chinacommercialvehi->privatecar_q1=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>  
					</td>
				</tr>
				<tr>
					<td style="height: 28px;vertical-align: top;">
						(c) Carriage of passengers for hire or reward?		
					</td>
					<td>
						<span>
							<?php if($chinacommercialvehi->privatecar_q1=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span> 
					</td>
					<td>
						<span>
							<?php if($chinacommercialvehi->privatecar_q1=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>  
					</td>
				</tr>
				<tr>
					<td colspan="4" style="height: 100px;border-top: 1px solid #e6e6e6;">
						Excess applicable for Commercial Vehicles policy: <br/>
						1. An additional excess of S$3,000 shall apply to Own Damage Claim for any Authorised Drivers below 22 years old* or less than 1 year driving experience*. <br/>
						2. A flat excess of S$2,000 shall apply to Own Damage Claim for any authorised driver who is 66 years old* and above.<br/><br/>

						<span style="font-size: 8px;">*As at date of accident</span>
					</td>
				</tr>
		</table>
		
		<table style="width: 100%;border: 1px solid #e6e6e6;margin-top: -7px;">
				<tr>
					<td style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Windscreen Replacement <span style="font-size: 8px;">(Automatic Reinstatement)</span>
					</td>
				</tr>
				<tr>
					<td style="line-height: 20px;">
						1. Replace at any of our Authorised Workshops  .........................................................  S$500 <br/>
						2. Non-Authorised Workshops ................................................................................................ . S$500 <br/>
						3. Option to increase coverage at Non-Authorised Workshops <br/>
						
						up to S$3,000/- AP: S$50/- <br/>
						up to S$4,000/- AP: S$100/- <br/>
						<b>Excess S$100/- every claim (unless otherwise stated in the policy schedule).</b>
					</td>
				</tr>
		</table>
		
		<table style="width: 100%;border-top: 1px solid #e6e6e6;border-left: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6;margin-top: -7px;">
				<tr>
					<td colspan="2" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Additional Information
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						1. 
					</td>
					<td>
						Have you or your named drivers been involved in any motor accident for the past 3 years?<br/>
						<span>
							<?php if($chinacommercialvehi->claim_exp=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->claim_exp=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						If yes, please give details: <br/>

						<table style="width: 100%;border: 1px solid #e6e6e6;text-align: center;margin-top: 5px;">
							<tr>
								<td style="width: 20%;color: #006cb7;background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
									Date
								</td>
								<td style="width: 50%;color: #006cb7;background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
									Description of Accident
								</td>
								<td style="color: #006cb7;background: #dce6f2;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
									Claim Amount (S$)
								</td>
							</tr>
							<tr>
								<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
									<?php echo $chinacommercialvehi->claim_expyes_date;?>
								</td>
								<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
									<?php echo $chinacommercialvehi->info_desofaccident;?>
								</td>
								<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
									<?php echo $chinacommercialvehi->claim_expyes_amt;?>
								</td>
							</tr>
							<tr>
								<td style="height: 20px;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
								</td>
								<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
								</td>
								<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
								</td>
							</tr>
							<tr>
								<td style="height: 20px;border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
								</td>
								<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
								</td>
								<td style="border-right: 1px solid #d1d3d4;border-bottom: 1px solid #d1d3d4;">
								</td>
							</tr>
						</table>
					</td>

				</tr>
				<tr><td></td></tr>
				<tr>
					<td style="width:4%;height: 100px;vertical-align: top;">
						2. 
					</td>
					<td style="vertical-align: top;">
						Have you or your named drivers been convicted of or received notice of intended prosecution for any offence in connection with motor car?<br/>
						<span>
							<?php if($chinacommercialvehi->receive_notice=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->receive_notice=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						If yes, please give details: <?php echo $chinaprivatecar->receive_notice_detail;?>
						<br/>
						...................................................................................................................................................................................................................
...................................................................................................................................................................................................................
					</td>
				</tr>
				<tr><td></td></tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						3. 
					</td>
					<td>
						Do you have NCD to be transferred from another Insurer?<br/>
						<span>
							<?php if($chinacommercialvehi->ncd=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
						<span>
							<?php if($chinacommercialvehi->ncd=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						If yes, please provide below details:  <br/><br/>
						<br/>
					</td>
				</tr>
		</table>
		<table style="width:100%;border-left: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6;border-bottom: 1px solid #e6e6e6;">
			<tr>
				<td>
					Present/Previous Insurer: <?php echo $chinacommercialvehi->present_previous_insurer;?>
				</td>
				<td>
					NCD:  <?php echo $chinacommercialvehi->ncd_txt;?>
				</td>
				<td>
					Vehicle No: <?php echo $chinacommercialvehi->vehiname;?>
				</td>
			</tr>
			<tr><td></td></tr>
			<tr>
				<td>
					Policy No: <?php echo $chinacommercialvehi->info_policy_no;?>
				</td>
				<td colspan="2">
					Expiry Date: <?php echo $chinacommercialvehi->expiry_date;?>
				</td>
			</tr>
			<tr><td></td></tr>
		</table>
		<table style="width: 100%;border-top: 1px solid #e6e6e6;border-left: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6;margin-top: 250px !important;">
				<tr>
					<td colspan="2" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Payment Before Cover Warranty <span style="font-size: 8px;">(For Vehicles Registered Under Personal Name)</span>
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						1.
					</td>
					<td style="line-height: 17px;">
						Notwithstanding anything herein contained but subject to clause 2 hereof, it is hereby agreed and declared that the total premium due must be paid and actually received in full by the Company on or before the inception date (“the inception date”) of the coverage under the Policy, Renewal Certificate, Cover Note or Endorsement.
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						2.
					</td>
					<td style="line-height: 17px;">
						In the event that the total premium due is not paid and actually received in full by the Company on or before the inception date referred to above, then the Policy, Renewal Certificate, Cover Note and Endorsement shall be deemed to be cancelled immediately and no benefits whatsoever shall be payable by the Company. Any payment received thereafter shall be of no effect whatsoever on the cancellation of the Policy, Renewal Certificate, Cover Note and Endorsement.
					</td>
				</tr>
				<tr><td></td></tr>
		</table>
		<table style="width: 100%;border-top: 1px solid #e6e6e6;border-left: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6;margin-top: -7px;">
				<tr>
					<td colspan="2" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Premium Payment Warranty <span style="font-size: 8px;">(For Vehicles Registered Under Company’s Name)</span>
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						1.
					</td>
					<td style="line-height: 17px;">
						Notwithstanding anything herein contained but subject to clause 2 hereof, it is hereby agreed and declared that if the period of insurance is 60 days or more, any premium due must be paid and actually received in full by the Company (or the intermediary
through whom the Policy was effected) within 60 days of the:- <br/>
(a) inception date of the coverage under the Policy, Renewal Certificate or Cover Note; or<br/>
(b) effective date of each Endorsement, if any, issued under the Policy, Renewal Certificate or Cover Note.
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						2.
					</td>
					<td style="line-height: 17px;">
						In the event that any premium due is not paid and actually received in full by the Company (or the intermediary through whom this Policy was effected) within the 60-day period referred to above, then:-<br/>
(a) the cover under the Policy, Renewal Certificate, Cover Note or Endorsement shall be deemed to be cancelled immediately after the expiry of the said 60-day period;<br/>
(b) the deemed cancellation of the cover shall be without prejudice to any liability incurred within the said 60-day period; and<br/>
(c) the Company shall be entitled to a pro-rate time on risk premium subject to a minimum of S$50.00
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						3.
					</td>
					<td style="line-height: 17px;">
						If the period of Insurance is less than 60 days, any premium due must be paid and actually received in full by the Company (or the intermediary through whom this policy was effected) within the period of insurance.
					</td>
				</tr>
				<tr><td></td></tr>
		</table>
		<table style="width: 100%;border-top: 1px solid #e6e6e6;border-left: 1px solid #e6e6e6;border-right: 1px solid #e6e6e6;margin-top: -7px;">
				<tr>
					<td colspan="2" style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Declaration
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						1.
					</td>
					<td style="line-height: 17px;">
						I / We hereby declare and agree to insure my Motor Vehicle with China Taiping Insurance (Singapore) Pte. Ltd. (“CTPIS”). and I / We agree to accept the Company’s Policy subject to the provisions and conditions of the Policy. I / We hereby declare that the above mentioned Motor Vehicle is and will be kept in good condition. I / We hereby warrant that all the answers given in this proposal are true and correct, that this proposal and Declaration shall form part of the contract between the Company and myself. Otherwise, I / We understand that the Policy issued may be rendered void.
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						2.
					</td>
					<td style="line-height: 17px;">
						I / We hereby undertake to reimburse the Company on any difference on Premium due to different NCD percentage stated herein from the NCD percentage declared by my / our previous insurer and also difference on Premium due to non-declaration of accidents
from my / our previous insurance company.
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						3.
					</td>
					<td style="line-height: 17px;">
						I / We understand that if I / we opt for the AutoSafe Scheme, in the event of an accident / windscreen damage, I / we MUST sent my / our motor vehicle to CTPIS authorised workshops for all repairs.
					</td>
				</tr>
				<tr>
					<td style="width:4%;vertical-align: top;">
						4.
					</td>
					<td style="line-height: 17px;">
						I / We understand that if my / our vehicle is a parallel imported model, in the event of an accidental windscreen damage or damage to the vehicle / accessories and if the parts are not obtainable from our local workshops, the Insured shall be responsible for all costs including air freight and storage charges due to the delay in repair to his / her vehicle.
					</td>
				</tr>
		</table>
		<table style="width:100%;border:1px solid #e6e6e6">
			<tr>
				<td style="height: 100px;width: 50%;vertical-align: bottom;border-right: 1px solid #e6e6e6;">
					<?php echo $chinacommercialvehi->proposalsign_date;?> <br/>
					Date
				</td>
				<td style="vertical-align: bottom;">
					<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$chinacommercialvehi->signof_proposal)); ?>" class="gg" style="width:100px;height: 30px;"><br/>

					Signature of Proposer / Company Stamp
				</td>
			</tr>
		</table>

		<table style="width: 100%;border: 1px solid #e6e6e6; margin-top: 350px;">
				<tr>
					<td style="font-size: 12px;padding:5px;background: #006cb7;color: #fff;">
						Personal Data Collection Statement
					</td>
				</tr>
				<tr>
					<td style="line-height: 15px;">
						<p style="font-size: 10.5px;"><b>1. Consent to Privacy Policy</b><br/><br/>
							I / We further confirm that I / we have read and understood and hereby consent to the collection, use, disclosure and processing of my / our personal data in accordance with and agree to be bound by China Taiping Insurance (Singapore) Pte. Ltd. (“CTPIS”) Privacy Policy which is made available on our website at www.sg.cntaiping.com/en/privacypolicy, as may be amended from time to time.
						</p><br/>
						<p style="font-size: 10.5px;">
							I / We agree on my / our behalf and on behalf of every insured person that in addition to the release of information to any other entity mentioned in this Application Form, CTPIS is authorised to collect, retain, use and / or disclose as it reasonably deems fit, any information in respect of me / us / any insured person, that is received by CTPIS to its Representatives and relevant third parties, companies within China Taiping Insurance Group, reinsurers, medical organisations, my / our adviser, financial institutions, CPF agent banks, credit agencies, investigators, service providers (who may have to disclose my / our data to their service providers), judicial, regulatory, government, statutory authorities, dispute resolution parties and industry entities) whether within or outside Singapore. As far as reasonably possible, CTPIS will release such information to such parties on the understanding that the information will be kept strictly confidential and be used, disclosed and retained in accordance with relevant law.<br/>
						</p><br/><br/>
						<p style="font-size: 10.5px;">
							<b>2. Say YES to be a China Taiping SG savvy customer! – MARKETING CONSENT</b><br/><br/>
							I / We would like to receive first-hand information about CTPIS’s products, latest promotions, financial tips and news, and I / we consent to receive such marketing updates from CTPIS and its service providers via: <br/><br/>

							<span>
								<?php if($chinacommercialvehi->marketing_consent=="Email"){ ?>
									<span style="font-size: 14px">&#9745;</span> Email
								<?php }else{ ?>
									❑ Email
								<?php } ?>					
							</span>
							<span>
								<?php if($chinacommercialvehi->marketing_consent=="Mail"){ ?>
									<span style="font-size: 14px">&#9745;</span> Mail
								<?php }else{ ?>
									❑ Mail
								<?php } ?>					
							</span>
							<span>
								<?php if($chinacommercialvehi->marketing_consent=="SMS"){ ?>
									<span style="font-size: 14px">&#9745;</span> SMS and other phone-based messages 
								<?php }else{ ?>
									❑ SMS and other phone-based messages 
								<?php } ?>					
							</span>
							<span>
								<?php if($chinacommercialvehi->marketing_consent=="Voice"){ ?>
									<span style="font-size: 14px">&#9745;</span> Voice call
								<?php }else{ ?>
									❑ Voice call
								<?php } ?>					
							</span><br/><br/>
							I / We hereby represent and warrant that I / we am / are the user(s) and / or subscriber(s) of the telephone number provided by me / us in this form or other forms submitted to CTPIS and I / we consent for CTPIS and its service providers to contact me / us. For the avoidance of doubt, where my / our telephone number is a Singapore telephone number, I / we confirm that the foregoing consent applies even though my / our telephone number(s) is / are already registered or may be registered on the National Do Not Call Registry.<br/><br/>

							I / We confirm that:<br/>
(i) I / We have read and understood the provisions in this form;<br/>
(ii) the consent that I / we have provided in this form is in addition to, and does not supersede, vary or nullify the consent which I / we have provided previously unless my / our consent is withdrawn through the withdrawal form at: https://bit.ly/marketingconsent.<br/>
(iii) I / We understand that I / we may withdraw my / our consent through the withdrawal form at any time.<br/>
						</p>
					</td>
				</tr>
		</table>
		<div style="margin:70px 0px 50px 0px">
				<p style="font-size: 10.5px;">I have read and agree to the above.</p>
		</div>
		<div style="marign:20px 0px 20px 0px">
			<p style="font-size: 10.5px;">
				Name: <?php echo $chinacommercialvehi->agree_name;?>
			</p>
		</div>
		<div style="marign:20px 0px 20px 0px">
			<p style="font-size: 10.5px;">
				NRIC No: <?php echo $chinacommercialvehi->agree_nric;?>
			</p>
		</div>
		<div style="marign:20px 0px 20px 0px">
			<p style="font-size: 10.5px;">
				Date: <?php echo $chinacommercialvehi->agree_date;?>
			</p>
		</div>
	</div>
</div>
</body>
</html>
