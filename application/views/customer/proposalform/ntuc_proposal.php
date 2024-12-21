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
        margin: 10mm 15mm 10mm 15mm;  /* this affects the margin in the printer settings */
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
        	font-size: 9.5px;        	
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
			<div class="col-sm-4 header" style="width:25%;padding:10px 0px">
				<img src="<?=base_url()?>/assets/images/ntuc-logo.jpg" style="width: 150px;">
			</div>	
			<div class="col-sm-8" style="width:65%;padding:0px 0px 0px 15px;border-left: 1px solid #000;">
				<p style="font-size:10px;margin-top:0px">
					<b>Income Insurance Limited</b> l UEN: 202135698Wl <br/>
					Income Centre 75 Bras Basah Road Singapore 189557 <br/>
					Tel: 6788 1777 · Fax: 6338 1500 <br/>
					Enquiries: www.income.com.sg/enquiry <br/>
				</p>
			</div>			
		</div>
		<table style="width: 100%;margin-top: 10px;">
				<tr>
					<td style="font-size: 15px;padding:7px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Application for motor insurance
					</td>
				</tr>
				<tr>
					<td style="text-align:center;">
						<b>Statement under section 25(5) of Insurance Act, Cap. 142 (Or any future amendments to it)</b> <br/>
						You must reveal all facts you know, or ought to know, which may affect the insurance cover you are applying. Otherwise, the insurance policy may not be valid.
					</td>
				</tr>
		</table>
		<table style="width: 100%;margin-top: 10px;border:1px solid #acaaaa">
				<tr>
					<td colspan="3" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Details of registered owner
					</td>
				</tr>
				<tr>
					<td style="height: 35px;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Name as shown in NRIC or company name <br/>
						<?php echo $ntucproposal->name;?>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						NRIC or passport or ROC number<br/>
						<?php echo $ntucproposal->nric;?>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Is your company GST registered?
						<span>
							<?php if($ntucproposal->cmy_gst=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->cmy_gst=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span><br/>
						GST registration number : <?php echo $ntucproposal->gst_reg_no;?>
					</td>
				</tr>
				
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="width: 25%;height: 35px;border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Date of birth (dd/mm/yyyy) <br/>
						<?php echo $ntucproposal->dob;?>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Marital status<br/>
						<span>
							<?php if($ntucproposal->marital_status=="Single"){ ?>
								<span style="font-size: 14px">&#9745;</span> Single
							<?php }else{ ?>
								❑ Single
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->marital_status=="Married"){ ?>
								<span style="font-size: 14px">&#9745;</span> Married
							<?php }else{ ?>
								❑ Married
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->marital_status=="Widowed"){ ?>
								<span style="font-size: 14px">&#9745;</span> Widowed
							<?php }else{ ?>
								❑ Widowed
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->marital_status=="Divorced"){ ?>
								<span style="font-size: 14px">&#9745;</span> Divorced
							<?php }else{ ?>
								❑ Divorced
							<?php } ?>					
						</span>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Nationality
						<span>
							<?php if($ntucproposal->nationality=="Singaporean"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singaporean
							<?php }else{ ?>
								❑ Singaporean
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->nationality=="Singapore PR"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singapore PR
							<?php }else{ ?>
								❑ Singapore PR
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($ntucproposal->nationality=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others (Please aƩach documentary proof)
							<?php }else{ ?>
								❑ Others (Please aƩach documentary proof)
							<?php } ?>					
						</span>
					</td>
				</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="width: 10%;height: 35px;border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Sex 
						<span>
							<?php if($ntucproposal->hirer_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($ntucproposal->hirer_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
					</td>
					<td style="width: 38%;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Pass date of driving licence (dd/mm/yyyy)<br/>
						<?php echo $ntucproposal->passdate_dl;?>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Contact number<br/>
						(O) <?php echo $ntucproposal->contact_o;?>
						(H) <?php echo $ntucproposal->contact_h;?>
						(HP) <?php echo $ntucproposal->contact_hp;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;">
				<tr>
					<td colspan="2" style="height: 35px;border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Home or company address<br/>
						<?php echo $ntucproposal->address;?>
					</td>
					
					<td style="width: 25%;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Email<br/>
						<?php echo $ntucproposal->email;?>
					</td>
				</tr>
				<tr>
					<td style="width: 25% !important;height: 35px;border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Is your occupation<br/>
						<span>
							<?php if($ntucproposal->occupation=="indoor"){ ?>
								<span style="font-size: 14px">&#9745;</span> indoor?
							<?php }else{ ?>
								❑ indoor?
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->occupation=="outdoor"){ ?>
								<span style="font-size: 14px">&#9745;</span> outdoor?
							<?php }else{ ?>
								❑ outdoor?
							<?php } ?>					
						</span>
					</td>
					<td style="width: 40%;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Name of employer<br/>
						<?php echo $ntucproposal->emplr_name;?>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Language<br/>
						<?php echo $ntucproposal->language;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 40px;vertical-align: top;border:1px solid #acaaaa">
						Details of main driver if the registered owner does not have a valid driving licence (Name, NRIC number, date of birth, sex, driving experience, occupation <br/>
						- indoor or outdoor?).
					</td>
				</tr>
		</table>

		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td colspan="5" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Details of named drivers for private car
					</td>
				</tr>
				<tr>
					<td colspan="2" style="width: 251px;height: 35px;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						1 Name as shown in NRIC <br/>
						<?php echo $ntucproposal->driver_name;?>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						NRIC or passport number<br/>
						<?php echo $ntucproposal->driver_nric;?>
					</td>
					<td style="width: 70px;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Sex
						<span>
							<?php if($ntucproposal->driver_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($ntucproposal->driver_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Date of birth (dd/mm/yyyy)<br/>
						<?php echo $ntucproposal->driver_dob;?>
					</td>
				</tr>
				
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="height: 35px;width: 220px;border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Pass date of driving licence (dd/mm/yyyy)<br/>
						<?php echo $ntucproposal->driver_licensepassdate;?>
					</td>
					<td style="width: 170px;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Is your occupation<br/>
						<span>
							<?php if($ntucproposal->driver_occupation=="indoor"){ ?>
								<span style="font-size: 14px">&#9745;</span> indoor?
							<?php }else{ ?>
								❑ indoor?
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->driver_occupation=="outdoor"){ ?>
								<span style="font-size: 14px">&#9745;</span> outdoor?
							<?php }else{ ?>
								❑ outdoor?
							<?php } ?>					
						</span>
					</td>
					<td colspan="3" style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Relationship to registered owner<br/>
						<?php echo $ntucproposal->driver_relationship;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				
				<tr>
					<td colspan="2" style="width: 251px;height: 35px;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						2 Name as shown in NRIC <br/>
						<?php echo $ntucproposal->driver2_name;?>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						NRIC or passport number<br/>
						<?php echo $ntucproposal->driver2_nric;?>
					</td>
					<td style="width: 70px;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Sex
						<span>
							<?php if($ntucproposal->driver2_sex=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($ntucproposal->driver2_sex=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
					</td>
					<td style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Date of birth (dd/mm/yyyy)<br/>
						<?php echo $ntucproposal->driver2_dob;?>
					</td>
				</tr>
				
		</table>
		<table style="width: 100%;">
				<tr>
					<td style="height: 35px;width: 220px;border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Pass date of driving licence (dd/mm/yyyy)<br/>
						<?php echo $ntucproposal->driver2_passdate_dl;?>
					</td>
					<td style="width: 170px;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Is your occupation<br/>
						<span>
							<?php if($ntucproposal->driver2_occupation=="indoor"){ ?>
								<span style="font-size: 14px">&#9745;</span> indoor?
							<?php }else{ ?>
								❑ indoor?
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->driver2_occupation=="outdoor"){ ?>
								<span style="font-size: 14px">&#9745;</span> outdoor?
							<?php }else{ ?>
								❑ outdoor?
							<?php } ?>					
						</span>
					</td>
					<td colspan="3" style="border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: top;">
						Relationship to registered owner<br/>
						<?php echo $ntucproposal->driver2_relationship;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td colspan="2" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Details of insurance cover
					</td>
				</tr>
				<tr>
					<td style="height: 30px;border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: bottom;">
						Period (dd/mm/yyyy) From ___________________ To ___________________
					</td>
					<td style="border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;vertical-align: bottom;">
						No-claim discount (NCD) entitlement: <?php echo $ntucproposal->noclaim_discount;?> %
					</td>
				</tr>
				<tr>
					<td colspan="2" style="border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;vertical-align: top;">
						Please provide the details below for us to confirm your enƟtlement to a no-claim discount.<br/><br/>
					</td>
				</tr>
				<tr>
					<td style="">
						Previous insurer : <?php echo $ntucproposal->prev_insurer;?>
					</td>
					<td style="">
						Policy number : <?php echo $ntucproposal->policy_no;?>
					</td>
				</tr>
				<tr>
					<td style="">
						Vehicle number : <?php echo $ntucproposal->prev_vehino;?>
					</td>
					<td style="">
						Expiry date (dd/mm/yyyy) : <?php echo $ntucproposal->expiry_date;?>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="height: 30px;border-left: 1px solid #acaaaa;border-right: 1px solid #acaaaa;vertical-align: top;">
						I will pay any difference in the premium due under the policy issued by Income if my previous insurer says that I am not entitled to NCD or that my NCD entitlement is lower than what is given here.
					</td>
				</tr>
		</table>
		<table style="width: 100%;border-left:1px solid #acaaaa;border-bottom:1px solid #acaaaa;border-right:1px solid #acaaaa;">
			<tr>
				<td rowspan="2" style="width:12%">
					Private car
				</td>
				<td style="border-bottom: 1px solid #acaaaa;">
					<span>
						<?php if($ntucproposal->private_car=="Drivo Premium Plan"){ ?>
							<span style="font-size: 14px">&#9745;</span> Drivo Premium Plan (repair at preferred workshop)
						<?php }else{ ?>
							❑ Drivo Premium Plan (repair at preferred workshop)
						<?php } ?>					
					</span>
					<span>
						<?php if($ntucproposal->private_car=="Drivo Classic Plan"){ ?>
							<span style="font-size: 14px">&#9745;</span> Drivo Classic Plan (repair at quality workshop)
						<?php }else{ ?>
							❑ Drivo Classic Plan (repair at quality workshop)
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>
				<td>
					<span>
						<?php if($ntucproposal->private_car=="Third party fire and theft"){ ?>
							<span style="font-size: 14px">&#9745;</span> Third party fire and theft
						<?php }else{ ?>
							❑ Third party fire and theft
						<?php } ?>					
					</span>
					<span>
						<?php if($ntucproposal->private_car=="Third party"){ ?>
							<span style="font-size: 14px">&#9745;</span> Third party
						<?php }else{ ?>
							❑ Third party
						<?php } ?>					
					</span>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border-left:1px solid #acaaaa;border-bottom:1px solid #acaaaa;border-right:1px solid #acaaaa;">
			<tr>
				<td style="width:40%;height: 25px;">
					Commercial vehicles or motorcycle or others^ 
				</td>
				<td>
					<span>
						<?php if($ntucproposal->motorcycle=="Comprehensive"){ ?>
							<span style="font-size: 14px">&#9745;</span> Comprehensive
						<?php }else{ ?>
							❑ Comprehensive
						<?php } ?>					
					</span>
					<span>
						<?php if($ntucproposal->motorcycle=="Third party fire and theft"){ ?>
							<span style="font-size: 14px">&#9745;</span> Third party fire and theft
						<?php }else{ ?>
							❑ Third party fire and theft
						<?php } ?>					
					</span>
					<span>
						<?php if($ntucproposal->motorcycle=="Third party"){ ?>
							<span style="font-size: 14px">&#9745;</span> Third party
						<?php }else{ ?>
							❑ Third party
						<?php } ?>					
					</span>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border-left:1px solid #acaaaa;border-bottom:1px solid #acaaaa;border-right:1px solid #acaaaa;">
			<tr>
				<td style="height:30px;vertical-align: top;">
					This applies to motorcycles only. Details of one extra named driver - one driver only (Name, NRIC number, date of birth, driving experience, occupation - indoor or outdoor?)
				</td>
			</tr>
		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td colspan="2" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Optional cover
					</td>
				</tr>
				<tr>
					<td rowspan="2" style="width:350px;border-left: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;border-right:1px solid #acaaaa;">
						For Drivo plans only <br/>
						<table style="width: 80%;">
							<tr>
								<td style="vertical-align: top;">
									<span>
										<?php if($ntucproposal->drivo_plans=="Waiver of excess"){ ?>
											<span style="font-size: 14px">&#9745;</span> Waiver of excess
										<?php }else{ ?>
											❑ Waiver of excess
										<?php } ?>					
									</span>
								</td>
								<td>
									<span>
										<?php if($ntucproposal->drivo_plans=="Transport allowance"){ ?>
											<span style="font-size: 14px">&#9745;</span> Transport allowance <br/>($50 a day up to seven days)
										<?php }else{ ?>
											❑ Transport allowance<br/>($50 a day up to seven days)
										<?php } ?>					
									</span>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<span>
										<?php if($ntucproposal->drivo_plans=="NCD protection"){ ?>
											<span style="font-size: 14px">&#9745;</span> NCD protection (Applicable to 30% NCD and above)
										<?php }else{ ?>
											❑ NCD protection (Applicable to 30% NCD and above)
										<?php } ?>					
									</span>
								</td>
							</tr>
							<tr>
								<td>
									Additional excess <br/>
									<span>
										<?php if($ntucproposal->additional_excess=="500"){ ?>
											<span style="font-size: 14px">&#9745;</span> $ 500
										<?php }else{ ?>
											❑ $ 500
										<?php } ?>					
									</span><br/>
									<span>
										<?php if($ntucproposal->additional_excess=="1000"){ ?>
											<span style="font-size: 14px">&#9745;</span> $ 1,000
										<?php }else{ ?>
											❑ $ 1,000
										<?php } ?>					
									</span><br/>
									<span>
										<?php if($ntucproposal->additional_excess=="1500"){ ?>
											<span style="font-size: 14px">&#9745;</span> $ 1,500
										<?php }else{ ?>
											❑ $ 1,500
										<?php } ?>					
									</span><br/>
								</td>
								<td>
									Premium reduction<br/>
									8% <br/>
									12% <br/>
									15% <br/>
								</td>
							</tr>
						</table>
					</td>
					<td style="height: 20px;border-left: 1px solid #acaaaa;border-bottom: 1px solid #acaaaa;border-right:1px solid #acaaaa;">
						<span>
							<?php if($ntucproposal->notwantto_insure=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Do not want to insure COE and PARF value (This does not apply to third party cover.)
							<?php }else{ ?>
								❑ Do not want to insure COE and PARF value (This does not apply to third party cover.)
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td style="height:70px;border-left:1px solid #acaaaa;border-bottom:1px solid #acaaaa;border-right:1px solid #acaaaa;vertical-align: top;">
						Accessories (not factory-fitted) <br/>
						i Description of accessories: <br/>
						<?php echo $ntucproposal->accessories;?>

						<br/><br/><br/><br/>
						ii Total value of accessories: <?php echo $ntucproposal->total_accessories;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td colspan="6" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Type and details of motor vehicle
					</td>
				</tr>
				<tr>
					<td rowspan="3" style="width: 6%;vertical-align: top;">
						Type
					</td>
					<td style="border-bottom:1px solid #acaaaa;vertical-align:top">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Private car"){ ?>
								<span style="font-size: 14px">&#9745;</span> Private car
							<?php }else{ ?>
								❑ Private car
							<?php } ?>					
						</span>
					</td>
					<td style="border-bottom:1px solid #acaaaa">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Saloon"){ ?>
								<span style="font-size: 14px">&#9745;</span> Saloon
							<?php }else{ ?>
								❑ Saloon
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="SUV"){ ?>
								<span style="font-size: 14px">&#9745;</span> SUV
							<?php }else{ ?>
								❑ SUV
							<?php } ?>					
						</span>
					</td>
					<td style="border-bottom:1px solid #acaaaa">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Off-peak car"){ ?>
								<span style="font-size: 14px">&#9745;</span> Off-peak car
							<?php }else{ ?>
								❑ Off-peak car
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Station wagon or MPV"){ ?>
								<span style="font-size: 14px">&#9745;</span> Station wagon or MPV
							<?php }else{ ?>
								❑ Station wagon or MPV
							<?php } ?>					
						</span>
					</td>
					<td colspan="2" style="border-bottom:1px solid #acaaaa">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Coupe"){ ?>
								<span style="font-size: 14px">&#9745;</span> Coupe
							<?php }else{ ?>
								❑ Coupe
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="High-performance or turbo"){ ?>
								<span style="font-size: 14px">&#9745;</span> High-performance or turbo
							<?php }else{ ?>
								❑ High-performance or turbo
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #acaaaa;vertical-align: top;">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Commercial vehicle"){ ?>
								<span style="font-size: 14px">&#9745;</span> Commercial vehicle
							<?php }else{ ?>
								❑ Commercial vehicle
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Bus"){ ?>
								<span style="font-size: 14px">&#9745;</span> Bus
							<?php }else{ ?>
								❑ Bus
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Tourist"){ ?>
								<span style="font-size: 14px">&#9745;</span> Tourist
							<?php }else{ ?>
								❑ Tourist
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Non-tourist"){ ?>
								<span style="font-size: 14px">&#9745;</span> Non-tourist
							<?php }else{ ?>
								❑ Non-tourist
							<?php } ?>					
						</span> <br/>
					</td>
					<td style="border-bottom:1px solid #acaaaa">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Standard van"){ ?>
								<span style="font-size: 14px">&#9745;</span> Standard van
							<?php }else{ ?>
								❑ Standard van
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Standard lorry with crane"){ ?>
								<span style="font-size: 14px">&#9745;</span> Standard lorry with crane
							<?php }else{ ?>
								❑ Standard lorry with crane
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Mixer"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mixer
							<?php }else{ ?>
								❑ Mixer
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Tanker"){ ?>
								<span style="font-size: 14px">&#9745;</span> Tanker
							<?php }else{ ?>
								❑ Tanker
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others (give details):
							<?php }else{ ?>
								❑ Others (give details):
							<?php } ?>					
						</span>
						<?php echo $ntucproposal->other_vehitype;?>
					</td>
					<td style="border-bottom:1px solid #acaaaa">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Standard lorry or pickup"){ ?>
								<span style="font-size: 14px">&#9745;</span> Standard lorry or pickup
							<?php }else{ ?>
								❑ Standard lorry or pickup
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Standard lorry with tailgate or power gate"){ ?>
								<span style="font-size: 14px">&#9745;</span> Standard lorry with tailgate or power gate
							<?php }else{ ?>
								❑ Standard lorry with tailgate or power gate
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Prime mover"){ ?>
								<span style="font-size: 14px">&#9745;</span> Prime mover
							<?php }else{ ?>
								❑ Prime mover
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Ambulance"){ ?>
								<span style="font-size: 14px">&#9745;</span> Ambulance
							<?php }else{ ?>
								❑ Ambulance
							<?php } ?>					
						</span> <br/>
					</td>
					<td style="border-bottom:1px solid #acaaaa;vertical-align: top;">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Refrigerated vehicle"){ ?>
								<span style="font-size: 14px">&#9745;</span> Refrigerated vehicle
							<?php }else{ ?>
								❑ Refrigerated vehicle
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Trailer"){ ?>
								<span style="font-size: 14px">&#9745;</span> Trailer
							<?php }else{ ?>
								❑ Trailer
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Tow truck"){ ?>
								<span style="font-size: 14px">&#9745;</span> Tow truck
							<?php }else{ ?>
								❑ Tow truck
							<?php } ?>					
						</span> <br/>
					</td>
					<td style="border-bottom:1px solid #acaaaa;vertical-align: top;">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Hood or canopy"){ ?>
								<span style="font-size: 14px">&#9745;</span> Hood or canopy
							<?php }else{ ?>
								❑ Hood or canopy
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Garbage truck"){ ?>
								<span style="font-size: 14px">&#9745;</span> Garbage truck
							<?php }else{ ?>
								❑ Garbage truck
							<?php } ?>					
						</span> <br/>
						<span>
							<?php if($ntucproposal->motor_vehitype=="Tipper"){ ?>
								<span style="font-size: 14px">&#9745;</span> Tipper
							<?php }else{ ?>
								❑ Tipper
							<?php } ?>					
						</span> <br/>
					</td>
				</tr>
				<tr>
					<td style="border-bottom:1px solid #acaaaa;">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Motorcycle"){ ?>
								<span style="font-size: 14px">&#9745;</span> Motorcycle
							<?php }else{ ?>
								❑ Motorcycle
							<?php } ?>					
						</span>
					</td>
					<td colspan="4">
						<span>
							<?php if($ntucproposal->motor_vehitype=="Side car"){ ?>
								<span style="font-size: 14px">&#9745;</span> Side car
							<?php }else{ ?>
								❑ Side car
							<?php } ?>					
						</span>
					</td>
				</tr>
		</table>
		<table style="width:100%;border-left:1px solid #acaaaa;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;">
			<tr>
				<td colspan="2" style="weight: 50%;height: 35px;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					Make and model<br/>
					<?php echo $ntucproposal->make;?> <?php echo $ntucproposal->model;?>
				</td>
				<td colspan="2" style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					Usage
						<span>
							<?php if($ntucproposal->vehi_usage=="Private"){ ?>
								<span style="font-size: 14px">&#9745;</span> Private
							<?php }else{ ?>
								❑ Private
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->vehi_usage=="Company"){ ?>
								<span style="font-size: 14px">&#9745;</span> Company
							<?php }else{ ?>
								❑ Company
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($ntucproposal->vehi_usage=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others (give details):
							<?php }else{ ?>
								❑ Others (give details):
							<?php } ?>					
						</span>
						<?php echo $ntucproposal->other_usage;?>
				</td>
			</tr>
			<tr>
				<td style="width: 25%;height: 35px;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					Registration number <br/>
					<?php echo $ntucproposal->reg_no;?>
				</td>
				<td style="width: 27%;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					Original registration date (dd/mm/yyyy)<br/>
					<?php echo $ntucproposal->dateof_reg;?>
				</td>
				<td style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					Engine number<br/>
					<?php echo $ntucproposal->engineno;?>
				</td>
				<td style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					Chassis number<br/>
					<?php echo $ntucproposal->chassisno;?>
				</td>
			</tr>
			<tr>
				<td style="height: 35px;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					Seating capacity (including driver)<br/>
					<?php echo $ntucproposal->seating_capacity;?>
				</td>
				<td style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					CC or Tonnage ^<br/>
					<?php echo $ntucproposal->cc_tonnage;?>
				</td>
				<td colspan="2" style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					(For commercial vehicle only) <br/>
					Unladen weight: <?php echo $ntucproposal->unladen_weight;?>
					Laden weight: <?php echo $ntucproposal->laden_weight;?>
				</td>
			</tr>
			<tr>
				<td colspan="4" style="height: 35px;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
					Name of finance company (if under a hire-purchase agreement)<br/>
					<?php echo $ntucproposal->financecmy_name;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td colspan="6" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Other details
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 40px;border-bottom:1px solid #acaaaa;vertical-align: top;">
						Have you or your named drivers been convicted of any driving offences (not including parking) in the past three years? Yes No If Yes, please give details.
					</td>
					<td style="border-bottom:1px solid #acaaaa;vertical-align: top;">
						<span>
							<?php if($ntucproposal->otherdetails_q1=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->otherdetails_q1=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 30px;vertical-align: top;">
						Have you or your named drivers been involved in any motor accident in the past three years? Yes No If Yes, please give details below.
					</td>
					<td style="vertical-align: top;">
						<span>
							<?php if($ntucproposal->otherdetails_q2=="Yes"){ ?>
								<span style="font-size: 14px">&#9745;</span> Yes
							<?php }else{ ?>
								❑ Yes
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->otherdetails_q2=="No"){ ?>
								<span style="font-size: 14px">&#9745;</span> No
							<?php }else{ ?>
								❑ No
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td style="height:20px;vertical-align:top">	
						Date of accident
					</td>
					<td style="vertical-align:top">	
						Name of insurance company
					</td>
					<td style="vertical-align:top">	
						Type of claim (own damage or third party property or third party injury)
					</td>
					<td style="vertical-align:top">	
						Amount of claim
					</td>
				</tr>
				<tr>
					<td style="height:15px;vertical-align:top">
						<?php echo $ntucproposal->claim_expyes_date;?>
					</td>
					<td style="vertical-align:top">
						___________________
					</td>
					<td style="vertical-align:top">
						___________________
					</td>
					<td style="vertical-align:top">
						<?php echo $ntucproposal->claim_expyes_amt;?>
					</td>
				</tr>
				<tr>
					<td style="height:15px;vertical-align:top">
						___________________
					</td>
					<td style="vertical-align:top">
						___________________
					</td>
					<td style="vertical-align:top">
						___________________
					</td>
					<td style="vertical-align:top">
						___________________
					</td>
				</tr>
				<tr>
					<td style="height:15px;vertical-align:top">
						___________________
					</td>
					<td style="vertical-align:top">
						___________________
					</td>
					<td style="vertical-align:top">
						___________________
					</td>
					<td style="vertical-align:top">
						___________________
					</td>
				</tr>

		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td colspan="6" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Personal data collection statement
					</td>
				</tr>
				<tr>
					<td style="line-height: 15px;">
						Income recognises its obligations under the Personal Data ProtecƟon Act 2012 (PDPA) which include the collecƟon, use and disclosure of personal data for the purpose for which an individual has given consent to. <br/><br/>

						The personal data collected by Income includes all personal data provided in this form, or in any document provided, or to be provided to us by you or your insured persons or from other sources, for the purpose of this insurance applicaƟon or transacƟon. It includes all personal data for us to evaluate or administer this applicaƟon or transacƟon. For example, if you are applying for an insurance policy, in addiƟon to the personal data provided in the application form, the personal data will also include any subsequent information we collect on health or financial situaƟon, or any information that is necessary for us to decide whether to insure and on what terms to insure, such as test results, medical examinaƟon results, and health records from medical practitioners or other insurance companies. <br/><br/>

						You may not alter any of the wording in this ‘Personal data collection statement’. Any attempt to do so will be of no effect.<br/><br/>

						<b>1. Purpose of collection </b><br/>
We may collect and use the personal data to:<br/>
(a) carry out identity checks;<br/>
(b) carry out No-claim discount (NCD) and claims verification;<br/>
(c) communicate on purposes relating to an application or policy;<br/>
(d) decide whether to insure or continue to insure you and your insured persons;<br/>
(e) determine and verify your creditworthiness for the financial and insurance products you apply for;<br/>
(f) provide financial advice for product recommendation based on your financial needs analysis;<br/>
(g) provide ongoing services and respond to your inquiries or instructions;<br/>
(h) make or obtain payments;<br/>
(i) investigate and settle claims;<br/>
(j) recover any debt owed to us;<br/>
(k) detect and prevent fraud, unlawful or improper activiti es;<br/>
(l) conduct research and statistical analysis;<br/>
(m) coach employees and monitor for quality assurance;<br/>
(n) reinsure risks and for reinsurance administration;<br/>
(o) comply with all applicable laws, including reporting to regulatory and industry entities; and<br/>
(p) inform you of our philanthropic and charity initiatives, i.e. OrangeAid, including soliciting donations, acknowledging donations, and facilitating tax exemption.<br/><br/>

If you give your consent under Section 5, we may also collect and use your personal data to contact you on our marketing or promotional materials relating to our financial products or services via telephone calls, text messages, faxes, mails, or emails.
					</td>
				</tr>
		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td style="line-height: 15px;">
						<b>2. Disclosure of personal data</b><br/>
						We may disclose personal data belonging to you and your insured persons for the purposes set out in Section 1 above to these parties:<br/>
(a) insurance intermediaries;<br/>
(b) medical professionals and institutions;<br/>
(c) insurers and reinsurers;<br/>
(d) local or overseas service providers to provide us with services such as printing, mail distribution, data storage, data entry, marketing and research,<br/>
disaster recovery or emergency assistance services;<br/>
(e) debt collection agencies;<br/>
(f) dispute resolution parties;<br/>
(g) parties that assist us to investigate, administer and adjudicate claims;<br/>
(h) financial instituti ons;<br/>
(i) credit reference agencies;<br/>
(j) industry associations; and<br/>
(k) regulators, law enforcement and government agencies.<br/>

<b>3. Consequence of withdrawing consent to the collection, use and disclosure of personal data</b><br/>

You may refuse or withdraw your consent for us to collect, use or disclose your personal data and your insured persons’ personal data by giving us reasonable notice so long as there are no legal or contractual restrictions preventing you from doing so. For example, you may withdraw your consent for your personal data to be used for marketing purposes, and this withdrawal will not affect our ability to provide you with the products and services that you asked for or have with us. <br/>
But if you withdraw your consent for us to use your personal data for your insurance matters, this will affect our ability to provide you with the products and services that you asked for or have with us, including preventing us from keeping your insurance cover in force or properly assessing and processing your claim. Withdrawing such consent will require you to surrender or terminate all your policies with us.<br>

<b>4. Access and correction rights</b><br/>
You can request access to any personal data of yours that we have, and request to know how it is being used and disclosed for the last 12 months to the extent your right is allowed by law. If we allow you access, we may charge you a reasonable fee. You also have the right to request correction of your personal data.
<br>

<b>5. Consent to receive marketing materials</b><br/>
By signing up for this product or service, I give my consent to Income to collect, use and disclose my personal data, and contact me via email and post, for both rewards and privileges, marketing and promotional purposes. <br/>
In addition, by checking the boxes below, I consent to being contacted by you via telephone calls, SMS and other phone number-based messaging about products and services offered by Income, regardless of my registration(s) with the Do Not Call registry.<br>

						<span>
							<?php if($ntucproposal->marketing_materials=="Call"){ ?>
								<span style="font-size: 14px">&#9745;</span> Call
							<?php }else{ ?>
								❑ Call
							<?php } ?>					
						</span>
						<span>
							<?php if($ntucproposal->marketing_materials=="SMS"){ ?>
								<span style="font-size: 14px">&#9745;</span> Text messages/SMS
							<?php }else{ ?>
								❑ Text messages/SMS
							<?php } ?>					
						</span><br>
I agree that Income will use the contact particulars, including any update that I have given to Income, to contact me. I may withdraw my above consent by contacting Income Contact Center at 6788 1777 or DPO@income.com.sg.Please refer to www.income.com.sg/privacy-policy for more information.
					</td>
				</tr>

		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td colspan="6" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						Declaration by person applying
					</td>
				</tr>
				<tr>
					<td colspan="2" style="line-height: 15px;">
						I declare that the motor vehicle described above will be kept in an efficient and roadworthy condition, and that the above information is true, correct and complete, otherwise, I understand that you may make this policy void or refuse a claim.<br/>

						I agree that this application and other statements, information or declaration I have made or which has been made on my behalf (including declarations made over the phone and internet) will form the basis of the contract of insurance between me and you (Income).<br/>
I understand and agree to the ‘Personal data collection statement’.<br/>
You will not be legally responsible for any claims until you have accepted this application and I have paid the premium in full.<br/>
I agree that if I or any * Relevant Person is found to be a + Prohibited Person, you are entitled not to accept this application. If any policy is issued, you can terminate or void the policy, or not make any transaction under the policy such as not pay any benefit. Your decision will be final. I will inform you immediately if there is any change in my or any Relevant Person’s identity, status or idenƟfication documents.<br/>

* Relevant Person includes insured, trustee, assignee, beneficiary, beneficial owner or nominee and mortgagee or financier.<br/>
+ Prohibited Person means a person or entity who is subject to laws, regulations or sanctions administered by any governmental or regulatory authorities or law enforcement in any country, which will prohibit you from providing insurance cover or paying any benefit.<br/>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: bottom;height:30px;text-align: center;">
						<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$ntucproposal->signof_proposal)); ?>" class="gg" style="width:100px;height: 30px;"><br/>
						Your signature and company stamp (if this applies)
					</td>
					<td style="text-align: center;vertical-align: bottom;">
						<?php echo $ntucproposal->proposalsign_date;?><br/>
						Date (dd/mm/yyyy)
					</td>
				</tr>
				<tr>
					<td colspan="2" style="line-height: 12px;">
						<b>Important notes to registered owner/policyholder</b><br/>
						1 Please answer all the questions or write ‘NIL’ or ‘NA’ where appropriate.<br/>
2 If the registered owner does not have a valid driving licence, you must give the details of the main driver in this application form.<br/>
3 All private car policyholders are responsible for an unnamed driver excess of $2,500, as well as other excess shown under the policy contract, if the unnamed driver is under 27 years old or has less than one year’s relevant driving experience. The unnamed driver excess is $500 if the unnamed driver is aged 27 years old or above or has at least one year’s driving experience.<br/>
4 All motorcycle policyholders (for company registered vehicle) are responsible for an extra excess of $500 if the authorised driver is under 22 years old or has less than two years’ driving experience.
					</td>
				</tr>
		</table>
		<table style="width: 100%;margin-top: 0px;border:1px solid #acaaaa">
				<tr>
					<td colspan="3" style="font-size: 12px;padding:5px;background: #f47521;color: #fff;font-weight: bold;text-align: center;">
						For official use
					</td>
				</tr>
				<tr>
					<td style="width: 40%;height: 35px;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
						Representative’s name <br/>
						<?php echo $ntucproposal->representative_name;?>
					</td>
					<td style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
						Representative’s code<br/>
						<?php echo $ntucproposal->representative_code;?>
					</td>
					<td style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
						Policy number<br/>
						<?php echo $ntucproposal->policy_no;?>
					</td>
				</tr>
				<tr>
					<td style="width: 40%;height: 35px;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
						Checked by<br/>
						<?php echo $ntucproposal->checked_by;?>
					</td>
					<td style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
						Date (dd/mm/yyyy)<br/>
						<?php echo $ntucproposal->officialuse_date;?>
					</td>
					<td style="border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
						Premium<br/>
						<?php echo $ntucproposal->premium;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 35px;border-right:1px solid #acaaaa;border-bottom:1px solid #acaaaa;vertical-align: top;">
						Remarks <br/>
						<?php echo $ntucproposal->remarks;?>
					</td>
				</tr>
		</table>
	</div><!-- end -->
</div>
</body>
</html>