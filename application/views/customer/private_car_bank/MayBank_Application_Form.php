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
        margin: 5mm 5mm 0mm 5mm;  /* this affects the margin in the printer settings */
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
	</style>
</head>
<body>
<div id="container">
	<div id="body">
		<div class="col-sm-12">
			<div class="col-sm-4 header" style="width:25%">
				<img src="<?=base_url()?>/assets/images/maybank.jpg">
			</div>
			<div class="col-sm-8" style="width:74%">
				  <p class="text_right" style="margin-bottom:0px">iHP Application Form</p>
				  <div style="padding:0px 0px 0px 10px">
						  <div style="margin-bottom:5px;font-size:10px">
						  	<span>□ Conventional HP </span>
						  	<span style="margin-right:10px">□ Bill of Sale </span>
						  	<span style="">□ A/A No.-------------- </span>
						  </div>
						  <div>
						  	<span class="xs-font">If you wish to have a free credit report, you may obtain it within 30 calendar days from the date of approval or rejection of this application via the credit bureau websites listed below. Alternatively, you may bring the approval or rejection letter and your NRIC to the following credit bureau’s registered office to obtain a free credit report.<br>
						  	 Credit Bureau (Singapore) Pte Ltd<br/>
								www.creditbureau.com.sg</span>
						  </div>
				</div>
			</div>
		</div>	
		<div class="col-sm-12" style="margin-top:-20px">
			<p class="sm-font">Eligibility criteria and conditions apply.<br/>
					All information requested in this form is mandatory and must be completed in full. In the event we receive incomplete or inaccurate information your application/request may be delayed or rejected without further notice to you</p>
		</div>
		
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="4" style="background:#ffc428;font-size:12px;font-weight:bold">FINANCING REQUIREMENTS</td>
			</tr>
			<tr>
				<td rowspan="2" style="border-right: 1px solid #797777;">Finance Amount : S$ <?php echo $customerdata->finance_amt;?></td>
				<td rowspan="2" style="border-right: 1px solid #797777;">Finance Period : <?php echo $customerdata->finance_period;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Financing Rate : <?php echo $customerdata->finance_rate;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Flat (Advance / Arrears) <?php echo $customerdata->flat;?></td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;">Purpose of Facility : <?php echo $customerdata->purposeoffacility;?></td>
				<td style="border-right: 1px solid #797777;">Monthly / Annual Rest <?php echo $customerdata->annual_rest;?></td>
			</tr>
			<!-- end -->
			<tr>
				<td colspan="4" style="background:#ffc428;font-size:12px;font-weight:bold">DETAILS OF SECURITY</td>
			</tr>
			<tr>
				<td colspan="2" rowspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Description : <?php echo $customerdata->description;?>					
				</td>
				<td style="border-right: 1px solid #797777;">
					<?php if($customerdata->type=="New"){ ?>
						<span style="font-size: 11px">&#9745;</span> New 
					<?php }else{ ?>
						□ New
					<?php }?>
				</td>				
				<td style="border-bottom: 1px solid #797777;">Year of Manufacture : <?php echo $customerdata->manufacture_year;?></td>
			</tr>
			<tr>	
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
					<?php if($customerdata->type=="Second-hand (pre-owned)"){ ?>
						<span style="font-size: 11px">&#9745;</span> Second-hand (pre-owned)
					<?php }else{?>
						□ Second-hand (pre-owned)
					<?php }?>
				
				</td>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Purchase Price: <?php echo $customerdata->purchase_price;?></td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Vendor : <?php echo $customerdata->vendor;?></td>				
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Vehicle Registration No. : <?php echo $customerdata->vehiregister_no;?></td>
				<td style="border-bottom: 1px solid #797777;">Chassis No. : <?php echo $customerdata->chassisno;?></td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;">Referred by Dealer : <?php echo $customerdata->referbydealer;?></td>
				<td style="border-right: 1px solid #797777;">Eqpt/Machine Serial No. : <?php echo $customerdata->serial_no;?></td>
				<td>Engine No. : <?php echo $customerdata->engineno;?></td>
			</tr>
			<!-- end -->
			<tr>
				<td colspan="4" style="background:#ffc428;font-size:12px;font-weight:bold">APPLICANT’S PARTICULARS</td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					<p style="font-size:13px;font-weight: bold;">						
						<span>
							<?php if($customerdata->applicant_type=="Individual"){ ?>
								<span style="font-size: 14px">&#9745;</span> Individual
							<?php }else{ ?>
								□ Individual 
							<?php } ?>
						
						</span>
						<span>
							<?php if($customerdata->applicant_type=="Company / Firm"){ ?>
								<span style="font-size: 14px">&#9745;</span> Company / Firm
							<?php }else{ ?>
								□ Company / Firm 
							<?php } ?>
						
						</span>
					</p>
					<p style="font-size:10px">Name / Company Name : <?php echo $customerdata->name;?></p><br/>
					<p style="font-size:10px">Alias (if any) : <?php echo $customerdata->alias;?></p>
				</td>
				<td colspan="2" style="border-bottom:1px solid #797777">Correspondence Address / Business Address : <?php echo $customerdata->address;?></td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
				Gender : 
				<?php if($customerdata->hirer_gender=="Male"){ ?>
					Male / <span style="text-decoration: line-through;"> Female </span>
				<?php }else{ ?>
					<span style="text-decoration: line-through;">Male</span> / Female
				<?php } ?>
				
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">Office No. : <?php echo $customerdata->office_no;?></td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">Office Fax No. : <?php echo $customerdata->officefax_no;?></td>
				<td style="border-bottom: 1px solid #797777;">Home Tel No. : <?php echo $customerdata->hometel_no;?></td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">* Email : <?php echo $customerdata->email;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;">*Mobile Phone No. : <?php echo $customerdata->phone;?></td>
			</tr>
			<tr>
				<td colspan="4" style="border-bottom: 1px solid #797777;">* For Main-Applicant, the mobile no. and email provided above will be used for all your banking services, and the updating of all your existing records.Only SG registered mobile no. will receive SMS, alerts & notifications on all banking services.</td>
			</tr>
			
		</table>	

		<table style="width:100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">NRIC / Passport No. / Business Regn. No. : <?php echo $customerdata->nric;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;">Date of Birth / Date of Incorporation : <?php echo $customerdata->dob;?></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Marital Status : <?php echo $customerdata->marital_status;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;">Country Of Birth : <?php echo $customerdata->countryofbirth;?></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Nationality : <?php echo $customerdata->nationality;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;">Place of Incorporation : <?php echo $customerdata->placeofincorporation;?></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
				If foreigner, PR : Yes / No
					<!-- <?php if($customerdata->foreigner_pr=="Yes"){ ?>
						Yes / <span style="text-decoration: line-through;"> No </span>
					<?php }else{ ?>
						<span style="text-decoration: line-through;">Yes</span> / No
					<?php } ?>  -->
					
				</td>
				<td colspan="2" style="border-bottom: 1px solid #797777;">Principal Place of Operation : <?php echo $customerdata->principal_placeof_operation;?></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Passport Expiry Date : <?php echo $customerdata->passport_expire_date;?></td>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Type of Industry : <?php echo $customerdata->type_of_industry;?></td>
				<td style="border-bottom: 1px solid #797777;">No. of Employees  : <?php echo $customerdata->no_of_employees;?></td>
			</tr>
		</table>

		<table style="width:100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td colspan="2" style="background:#bcbdc0;font-size:12px;font-weight:bold">EMPLOYMENT & INCOME DECLARATION (applicable for individual applicant only)</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Employer Name : <?php echo $customerdata->emplyr_name;?></td>
				<td style="border-bottom: 1px solid #797777;">Employer Address : <?php echo $customerdata->cmy_address;?></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Occupation : <?php echo $customerdata->emplyr_occupation;?></td>
				<td style="border-bottom: 1px solid #797777;">
				Length of Service : 
				<?php
                        $serviceyear = explode(',', $customerdata->yearof_service);
                    ?>
					<span><?php echo $serviceyear[0];?></span> years 
					<span><?php echo $serviceyear[1];?></span> months
				</td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
					Self-Employed : 
					 <?php if($customerdata->typeof_employ=="Self-Employed"){ ?>
							<span style="text-decoration: line-through;">No</span> /  Yes 
						<?php }else{ ?>
							No / <span style="text-decoration: line-through;"> Yes
						<?php } ?>
					
					, no. of employees : <?php echo $customerdata->emply_noof_employee;?></td>
				<td style="border-bottom: 1px solid #797777;">Type of Industry : <?php echo $customerdata->emply_typeof_industry;?></td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid #797777;">
					Monthly Income : S$ <?php echo $customerdata->monthly_income;?>
					<span style="margin-right:20px">
						<?php if($customerdata->income_type=="Fully Salaried"){ ?>
							<span style="font-size: 11px">&#9745;</span> Fully Salaried
						<?php }else{ ?>
							□ Fully Salaried
						<?php } ?>
						
					</span>
					<span>
						<?php if($customerdata->income_type=="Fully Commissioned"){ ?>
							<span style="font-size: 11px">&#9745;</span> Fully Commissioned
						<?php }else{ ?>
							□ Fully Commissioned 
						<?php } ?>
						
					</span>
					<span>
						<?php if($customerdata->income_type=="Freelance / Part-Time"){ ?>
							<span style="font-size: 11px">&#9745;</span> Freelance / Part-Time
						<?php }else{ ?>
							□ Freelance / Part-Time 
						<?php } ?>
						
					</span>
					<span>
						<?php if($customerdata->income_type=="Salary with Commission"){ ?>
							<span style="font-size: 11px">&#9745;</span> Salary with Commission
						<?php }else{ ?>
							□ Salary with Commission
						<?php } ?>
						
					</span>
				</td>
			</tr>
		</table>

				
		<table style="width:100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td colspan="6" style="background:#bcbdc0;font-size:12px;font-weight:bold">OTHER FINANCIAL COMMITMENTS</td>
			</tr>
			<tr>
				
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Financial Institution</span><br/>
					<span style="text-align: center;">S$___________________</span><br/>
					<span>S$___________________</span>
				</td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Type Of Loan</span><br/>
					<span style="text-align: center;">S$___________________</span><br/>
					<span>S$___________________</span>
				</td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Monthly Repayment</span><br/>
					<span style="text-align: center;">S$___________________</span>
					<span>S$___________________</span>
				</td>
				<!--  -->




				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Financial Institution</span>
					<span>___________________</span>
					<span>___________________</span>
				</td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Type Of Loan</span>
					<span>___________________</span>
					<span>___________________</span>
				</td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Monthly Repayment</span>
					<span>S$___________________</span>
					<span>S$___________________</span>
				</td>
			</tr>
		</table>

		<table style="width:100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="background:#bcbdc0;font-size:12px;font-weight:bold">APPLICANT’S DECLARATION</td>
			</tr>
			<tr>
				<td>
					<p style="font-size:9px">1. Did you receive any discount, rebate or any other benefit from the vendor of the vehicle or any other person? (e.g. car servicing/maintenance package, petrol/shopping vouchers, cash discount etc).<br/>
					<span>
						<?php if($customerdata->receive_discount=="No"){ ?>
							<span style="font-size: 11px">&#9745;</span> NO
						<?php }else{ ?>
							□ NO.
						<?php } ?>
						      
					</span>
					<span>
						<?php if($customerdata->receive_discount=="Yes"){ ?>
							<span style="font-size: 11px">&#9745;</span> YES.
						<?php }else{ ?>
							□ YES 
						<?php } ?>
						
					</span>
					, I/We have received the following:
					<span style="text-decoration: underline;"><?php echo $customerdata->receving_type ;?></span> at a total value of S$ <span style="text-decoration: underline;"><?php echo $customerdata->total_discount_value ;?></span><br/>
					<span>
						<?php if($customerdata->receive_discount=="Not Applicable"){ ?>
							<span style="font-size: 11px">&#9745;</span> NOT APPLICABLE
						<?php }else{ ?>
							□ NOT APPLICABLE 
						<?php } ?>
						
					</span>
					
					</p>
					<p style="font-size:9px">
						2. Did you obtain any other credit or hire purchase facility(ies) for the purchase or hire (as the case may be) of the vehicle:<br/>
						<span>
							<?php if($customerdata->receive_discount=="No"){ ?>
								<span style="font-size: 11px">&#9745;</span> NO
							<?php }else{ ?>
								□ NO
							<?php } ?>
						</span>
						<span>
							<?php if($customerdata->receive_discount=="Yes"){ ?>
								<span style="font-size: 11px">&#9745;</span> YES
							<?php }else{ ?>
								□ YES
							<?php } ?>
						</span>
						
						, I/We have received the following: <span style="text-decoration: underline;"><?php echo $customerdata->credit_receiving_type ;?></span> at a total value of S$ <span style="text-decoration: underline;"><?php echo $customerdata->total_credit_value ;?></span><br/>
						<span>
							<?php if($customerdata->receive_discount=="Not Applicable"){ ?>
								<span style="font-size: 11px">&#9745;</span> NOT APPLICABLE
							<?php }else{ ?>
								□ NOT APPLICABLE
							<?php } ?>
						</span>
					</p>
					<p style="font-size:9px;letter-spacing: -0.5px;">
						I/We warrant that the above declaration shall remain true, accurate and complete in all respects and at all times and I/We shall immediately notify you in writing, if otherwise.I/We hereby confirm that I/We have read and understood the “Applicants’ Declaration & Authorisation” and all other pertinent information printed overleaf and agreed that the terms and conditions herein form part of my/our application for hire purchase financing with Maybank Singapore Limited. Further, I/We understand and agree that no partial redemption is allowed upon disbursement.
					</p>
					<p style="font-size:9px;letter-spacing: -0.5px;">
						<span>
							<?php if($customerdata->credit_card_limit=="Yes"){ ?>
								<span style="font-size: 11px">&#9745;</span> Yes
							<?php }else{ ?>
								□ Yes
							<?php } ?>
						</span>
						
						, I agree to apply for a Maybank Family & Friends Card. My Preferred Limit for the Credit Card is S$:    <span style="text-decoration: underline;"><?php echo $customerdata->credit_card_limit_value ;?></span>  / 
						<span>
							<?php if($customerdata->credit_card_limit=="No"){ ?>
								<span style="font-size: 11px">&#9745;</span>
							<?php }else{ ?>
								□ 
							<?php } ?>
						</span>
						I have no preference for the credit limit for the Credit Card applied for in this application (recommended minimum credit limit is S$2,500 and should be in multiples of S$100). I agree that the preferred credit limit is subject to Bank’s approval and will be applied to all your Maybank Credit Cards, if any. In the event if there is no preferred credit limit stated or selection made, I agree that the credit limit will be assigned at the Bank’s discretion. I have read and understood the “Declaration for Credit Card (ref 0816)”, and have completed the Credit Card Application Form in full, I agree and consent to Maybank Singapore Limited to process
my Credit Card application upon approval of my Hire Purchase application. (Applicable for individual applicant who do not hold any Maybank Credit Card only)
					</p>
				</td>
			</tr>
		</table>

		<table style="width:100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="background:#bcbdc0;font-size:12px;font-weight:bold">MARKETING COMMUNICATIONS (optional and applicable to individual only)</td>
			</tr>
			<tr>
				<td>
					<p style="font-size:9px;letter-spacing: -0.5px;">
						I/We consent1 to Maybank contacting me/us about products and services by<br/>
						[ ] Post [ ] Email [ ] SMS/other messaging services [ ] Phone Call<br/>
						<b>Notes</b><br/>
						I/We hereby consent to the collection, use and disclosure of my/our personal data by Maybank Singapore Limited and its related corporations (collectively, “Maybank”), its agents, business partners, marketing partners and the Co-Brand Partner (as may be relevant, depending on the nature of the product which I/We have applied for), as well as authorised service providers, for the purposes of contacting me/us about your and/or their products and services, benefits, promotions and rewards, via the modes selected above and using my/our contact particulars which Maybank may have in its records from time to time (including where applicable my Singapore telephone number(s).
I/We confirm and agree that my/our consents granted herein do not supersede or replace any other consents which may have previously provided to Maybank in respect of my/our personal data, and are additional to any rights which Maybank may have at law to collect, use or disclose my/our personal data, and that leaving any of the boxes above blank will NOT be treated as a withdrawal of any other consent(s) that I/we may have previously provided to Maybank.<br/>
				</p>
					
				</td>
				
			</tr>
		</table>
		<table style="width:100%;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777;margin-top:-8px">
			<tr>
				<td rowspan="2"><p style="font-size:9px">
					<p style="font-size:9px;letter-spacing: -0.5px;">
						<span><b>Important Notes:</b></span><br/>
						1. The information provided above is solely for the purpose of providing the consent for marketing and does not serve as a notification for update of personal particulars.<br/>
						2. I/We understand that if I/we do not wish for the Bank to collect, use or disclose my/our personal data for suchPromotional Purposes, I/we may withdraw my/our consent at any time via forms available through the Internet Banking (IB) portal or from the Bank’s branches. I/We further understand that if I/we do not wish for third parties (such as the Bank’s business partners or marketing partners) to collect, use or disclose my personal data for such Promotional Purposes, I/we should contact these third parties directly with my/our request.
					</p></td>
					<td style="border: 1px solid #797777;width:200px;height:50px;padding-top:30px;text-align:center;line-height:30px">
						<img src="<?php echo base_url() .'upload/sign/'.$customerdata->signof_hirer;?>" class="img-responsive" style="width:130px;height:35px;">
					</td>
			</tr>
			<tr>			
				<td><p style="font-size:10px">Signature of APPLICANT</p></td>
			</tr>
		</table>
		<div class="col-sm-6" style="margin-top:-6px">
			<p style="font-size:9px;line-height: 8px;">MSL-141i-0921 (1/4)<br/>
Sep 2021</p>
		</div>
		<div class="col-sm-6">
			<p style="font-size:9px;">Maybank Singapore Limited (UEN: 201804195C)</p>
		</div>

		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="4" style="background:#ffc428;font-size:12px;font-weight:bold">GUARANTOR’S PARTICULARS</td>
			</tr>
			<tr>
				<td colspan="2" style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">Name : <?php echo $customerdata->guarantor_name;?></td>
				<td style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">
					Gender : Male / Female
					<!-- <?php if($customerdata->guarantor_gender=="Male"){ ?>
						Male / <span style="text-decoration: line-through;"> Female </span>
					<?php }else{ ?>
						<span style="text-decoration: line-through;">Male</span> / Female
					<?php } ?> -->
				</td>
				<td style="border-bottom: 1px solid #797777;">Marital Status : <?php echo $customerdata->guarantor_marital_status;?></td>
			</tr>
			<tr>
				<td rowspan="3" style="width: 30%;border-right:1px solid #797777;border-bottom: 1px solid #797777;">Correspondence Address : <?php echo $customerdata->guarantor_address;?></td>
				<td style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">Date of Birth : <?php echo $customerdata->guarantor_dob;?></td>
				<td style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">
					If Foreigner, PR : Yes / No
					<!-- <?php if($customerdata->guarantor_foreigner_pr=="Yes"){ ?>
						Yes / <span style="text-decoration: line-through;"> No </span>
					<?php }else{ ?>
						<span style="text-decoration: line-through;">Yes</span> / No
					<?php } ?> -->
					
				</td>
				<td style="border-bottom: 1px solid #797777;">Relationship to Applicant : <?php echo $customerdata->guarantor_relationship;?></td>
			</tr>
			<tr>
				
				<td style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">Nationality : <?php echo $customerdata->guarantor_nationality;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;">Business Regn. No. : <?php echo $customerdata->guarantor_businessreg_no;?></td>
			</tr>
			<tr>
				
				<td style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">NRIC / Passport No. : <?php echo $customerdata->guarantor_nric;?></td>
				<td style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">Occupation : <?php echo $customerdata->guarantor_occupation;?></td>
				<td style="border-bottom: 1px solid #797777;">^ Mobile Phone No. : <?php echo $customerdata->guarantor_phone;?></td>
			</tr>
			<tr>
				<td rowspan="3" colspan="2" style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">Employer Name & Address : <?php echo $customerdata->guarantor_emply_name;?> - <?php echo $customerdata->guarantor_emply_address;?></td>
				<td style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">
					Self-Employed : No / Yes
					<!-- <?php if($customerdata->guarantor_self_emply=="No"){ ?>
						No / <span style="text-decoration: line-through;"> Yes </span>
					<?php }else{ ?>
						<span style="text-decoration: line-through;">No</span> / Yes
					<?php } ?> -->
					
				</td>
				<td style="border-bottom: 1px solid #797777;">^ Email : <?php echo $customerdata->guarantor_email;?></td>				
			</tr>
			<tr>
				
				<td colspan="2" style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">Length of Service : 
					<?php
                        $serviceyear = explode(',', $customerdata->guarantor_yearofservice);
                    ?>
					<span><?php echo $serviceyear[0];?></span> years 
					<span><?php echo $serviceyear[1];?></span> months
				</td>
			</tr>
			<tr>				
				<td style="border-right:1px solid #797777;border-bottom: 1px solid #797777;">Home Tel No. : <?php echo $customerdata->guarantor_telno;?></td>
				<td style="border-bottom: 1px solid #797777;">Office Tel No. : <?php echo $customerdata->guarantor_office_telno;?></td>
			</tr>
			<tr>
				<td>
					Monthly Income : S$ <?php echo $customerdata->guarantor_monthincome;?><br/>
					<span style="margin-right:20px">
						<?php if($customerdata->guarantor_income_type=="Fully Salaried"){ ?>
							<span style="font-size: 11px">&#9745;</span> Fully Salaried
						<?php }else{ ?>
							□ Fully Salaried
						<?php } ?>
						
					</span> <br/>
					<span style="margin-right:20px">
						<?php if($customerdata->guarantor_income_type=="Salary with Commission"){ ?>
							<span style="font-size: 11px">&#9745;</span> Salary with Commission
						<?php }else{ ?>
							□ Salary with Commission
						<?php } ?>
						
					</span>					
				</td>
				<td style="border-right:1px solid #797777;">
					<?php if($customerdata->guarantor_income_type=="Fully Commissioned"){ ?>
						<span style="font-size: 11px">&#9745;</span> Fully Commissioned
					<?php }else{ ?>
						□ Fully Commissioned
					<?php } ?>
					<br/>
					<?php if($customerdata->guarantor_income_type=="Freelance / Part-Time"){ ?>
						<span style="font-size: 11px">&#9745;</span> Freelance / Part-Time
					<?php }else{ ?>
						□ Freelance / Part-Time
					<?php } ?>
					</td>
				<td colspan="2">^ For guarantor, the mobile no. and email provided will be solely used for
contacting purpose pertaining to this Hire Purchase application.</td>
			</tr>
		</table>

		<table style="width:100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td colspan="6" style="background:#bcbdc0;font-size:12px;font-weight:bold">OTHER FINANCIAL COMMITMENTS (for Guarantor)</td>
			</tr>
			<tr>
				
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Financial Institution</span><br/>
					<span style="text-align:center">S$___________________</span>
					<span>S$___________________</span></td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Type Of Loan</span><br/>
					<span style="text-align:center">S$___________________</span>
					<span>S$___________________</span></td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Monthly Repayment</span><br/>
					<span style="text-align:center">S$___________________</span>
					<span>S$___________________</span>
				</td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Financial Institution</span>
					<span>___________________</span>
					<span>___________________</span>
				</td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Type Of Loan</span>
					<span>___________________</span>
					<span>___________________</span>
				</td>
				<td style="padding: 5px 0px;text-align: center;border-bottom: 1px solid #797777;width:16.67%;line-height: 15px;">
					<span style="text-decoration: underline;">Monthly Repayment</span>
					<span>S$___________________</span>
					<span>S$___________________</span>
				</td>
			</tr>
			<tr>
				<td colspan="6">
					<p style="font-size: 9px;">	I hereby represent and warrant that the information given above - and in the table printed immediately below which lists my other financial commitments - is true, complete and
correct and that I have not withheld any material fact, information or document. I authorise Maybank Singapore Limited ("MSL") to obtain any information or document MSL may reasonably require, in order to process this application, from any person or relevant sources. I confirm that I am not insolvent or an undischarged bankrupt. I agree to the purposes set out in MSL’s Data Protection Policy (the link which is provided below) for the collection, use and disclosure of my personal data, including authorising MSL to disclose information
and/or data relating to myself and my accounts (a) to any of MSL’s holding companies, representative and branch offices and to any of MSL's related corporation or associated company, in any jurisdiction; (b) to any government or regulatory agency or authority including but not limited to the Land Transport Authority; (c) to any of MSL's potential assignee or transferee or to any person who has or may enter into contractual relations with MSL in relation to this Loan Application; (d) to any credit bureau (including,without limitation,Credit Bureau (Singapore) Pte Ltd), as well as the members of such credit bureau; (e) to any credit reference or evaluation agencies wherever situated; and (f) to any other person to whom disclosure is permitted or required by any statutory provision or law. The consent in this paragraph shall be in addition to and shall not in any way prejudiced or affected by any other agreement, expresssed or implied, between me and MSL.<br/>
By providing the information in this application form (and any other information that I may provide to you from time to time in connection with MSL products and services): I agree and consent to MSL and its related corporations (collectively, “Maybank”) collecting, using, disclosing and sharing amongst themselves my personal data, and disclosing such personal data to Maybank’s authorised service providers and relevant third parties for purposes reasonably required by Maybank to process the Applicant's application(s), provide the Applicant with the products or services which the Applicant is applying for, as well as the purposes set out in MSL's Data Protection Policy, which is accessible at www.maybank2u.com.sg or which may be provided to me upon request. I confirm that I have read and understood the Data Protection Policy.<br/>
If I should withdraw my consent to the processing or handing of my personal data in respect of any purpose which Maybank may reasonably consider to be essential in order for Maybank to provide the Applicant with the products and/or services applied for, Maybank shall be entitled to treat the hire purchase financing as having been terminated by the Applicant without prejudice to any rights and remedies which it may have at law against the Applicant and me.
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="3"></td>
				<td colspan="3" align="center">
							<img src="<?php echo base_url() .'upload/sign/'.$customerdata->signof_guarantor;?>" class="img-responsive" style="width:120px;height:28px;">
						
						____________________________________________________________<br/>
						Signature of GUARANTOR
					
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="background:#ffc428;font-size:12px;font-weight:bold">APPLICANT’S DECLARATION & AUTHORISATION</td>
			</tr>
			<tr>
				<td>
					<p style="font-size: 7.4px;">
						By submitting this application for hire purchase financing, I/we hereby:-<br/>
						<ul>
							<li style="list-style-type: none !important;">1) Represent and warrant that all information and documents provided by me/us are true, complete and accurate and that I/we have not withheld any material fact, information or document</li>
							<li style="list-style-type: none !important;">2) Agree to provide Maybank Singapore Limited (“MSL”) with all such information and/or documents as MSL may reasonably require from time to time relating to or in connection with my/our application.</li>
							<li style="list-style-type: none !important;">3) Authorise MSL to conduct credit checks and to obtain and/or verify information about me/us in accordance with applicable law</li>
							<li style="list-style-type: none !important;">4) Agree to the purposes set out in MSL’s Data Protection Policy (the link which is provided below) for the collection, use and disclosure of my/our personal data, including authorising MSL to disclose any information and/or data relating to me/us and my/our account(s) with MSL :-
							<ul>
								<li>(a) to any of MSL’s holding companies, representative and branch offices and to any of MSL’s related corporation or associated company, in any jurisdiction;</li>
								<li>(b) to any government or regulatory agency or authority including but not limited to the Land Transport Authority;</li>
								<li>(c) to any of MSL’s potential assignee or transferee or to any person who has or may enter into contractual relations with MSL in relation to this application;</li>
								<li>(d) to any credit bureau (including, without limitation, Credit Bureau (Singapore) Pte Ltd), as well as the members of such credit bureau;</li>
								<li>(e) to any credit reference or evaluation agencies wherever situated;</li>
								<li>(f) the Hire Purchase, Finance and Leasing Association of Singapore (“HPFLAS”), its successors and assigns, any body or organisation assuming the material functions of HPFLAS in replacement of the sam</li>
								<li>(g) where applicable, to any auditors for the time being my/our auditors, any solicitors for the time being my/our solicitors and I/we shall pay all costs, charges, fees and other out-of-pocket expenses, whether legal or otherwise,in respect of such disclosure on an indemnity basis; and</li>
								<li>(h) to any other person to whom disclosure is permitted or required by any statutory provision or law.</li>
							</ul>
							</li>
							<li>5) Confirm that :-
								<ul>
									<li>(i) there are no pending legal, arbitration, enforcement or criminal proceedings commenced against me/us;</li>
									<li>(ii) there are no winding up, bankruptcy, judicial management, receivership, scheme of arrangement, or equivalent proceedings against me/us in any jurisdiction;</li>
									<li>(iii) I am/We are not insolvent and have not filed or passed any resolution for winding up, bankruptcy, judicial management, receivership, scheme of arrangement, or their equivalent;</li>
									<li>(iv) no Statutory Demand under the Bankruptcy Act (Cap. 20) or Companies Act (Cap. 50) has been served on me/us;</li>
									<li>(v) I/We have not stopped, suspended, threatened to stop or suspend my/our indebtedness, propose to make a general assignment or arrangement or composition with or for the benefit of my/our creditors or a moratorium is
agreed or declared in respect of or affected my/our indebtedness;</li>
									<li>(vi) I am/We are not in default of and/or in breach of any of my/our loans, borrowings or financing agreements with any banks or financial institutions;</li>
									<li>(vii) none of my/our spouse(s), dependent(s) of my/our spouse(s), my/our children, spouses of my/our children, my/our parents, my/our siblings and/or spouses of my/our siblings are employees/directors of MSL or Malayan Banking Group;</li>
									<li>(viii) none of my/our guarantor(s) is an employee/director or spouse, dependent of the spouse, child, spouse of the child, parent, sibling or spouse of the sibling of the employee/director of MSL or Malayan Banking Group;</li>
									<li>(ix) (if it is a company or firm) none of our directors, managers, agents or guarantors is an employee/director (or spouse, dependent of the spouse, child, spouse of the child, parent, sibling or spouse of the sibling of the employee/director) of MSL or MBB Group;</li>
									<li>
										(X) (if it is a company) none of our substantial shareholders* is an employee/director (or spouse, dependent of the spouse, child, spouse of the child, parent, sibling or spouse of the sibling of the employee/director) of MSL or MBB Group; and
									</li>
									<li>
										(xi) I am/We are applying for this hire purchase facility for my/our own use and not for the benefit of any other party and will inform MSL in writing immediately if this is not the case.
									</li>
								</ul>
							</li>
							<li>6) Declared that I/we have not received any discount, rebate or any other benefit from the vendor or any other person, which has the effect of reducing the True Purchase Price (as defined in MAS 642 dated 25 Feb 13 and as may be replaced, supplemented or amended from time to time), except as already disclosed to you above</li>
							<li>7) I/We have not obtained any other credit facility(ies) for the purchase or hire of the vehicle, except as already disclosed to you above.</li>
							<li>8) Acknowledge that MSL reserves the right to reject my/our application for hire purchase financing at its discretion without giving any reason, and that MSL may refuse to disburse the credit or hire purchase facility (as the case may be), terminate, recall, review, and/or vary such facility or any part thereof at any time and at MSL’s discretion in the event any of the above declarations proves to be untrue, inaccurate or incomplete in any respect of if I/we fail or delay to comply with any request for information or documents as you may reasonably make.</li>
							<li>9) Undertake to pay any abortive costs imposed by MSL at its discretion and to release and hold MSL harmless from and indemnify MSL for all loss, damages, costs (including legal costs on an indemnity basis), expenses and liabilities suffered or incurred by MSL arising from or in connection with any such untrue, inaccurate or incomplete declaration(s), or failure or delay in complying with MSL’s request for information or documents.</li>
							<li>10) Confirm and acknowledge that, if my/our application is approved, MSL shall be entitled at any time without notice, to retain and apply any sale proceeds from the realisation of any goods under any agreement in relation to the hire purchase financing, in or towards any of my debts or liabilities, whether alone or jointly or whether such liabilities be present or future, actual or contingent, primary or collateral and several or join</li>
							<li>11) Acknowledge that my/our email and mobile number will be updated to receive notifications on all banking services including eStatement, SMS-OTP / Authorisation Code, SMS Alert / OTP for card transactions and other SMS eService</li>
							<li>12) (where the Applicant is an individual) agree that by providing the information in this application form (and any other information that I may provide to you from time to time in connection with MSL products and services), I agree and
consent to MSL and its related corporations (collectively, “Maybank’’) collecting, using, disclosing and sharing amongst themselves my personal data, and disclosing such personal data to Maybank’s authorised service providers andrelevant third parties for purposes reasonably required by Maybank to process my application(s), provide me with the products or services which I am applying for, as well as the purposes set out in MSL’s Data Protection Policy, which is accessible at www.maybank2u.com.sg or which may be provided to me upon request. I confirm I have read and understood the Data Pretection Policy. If I should withdraw my consent to the processing or handing of my personal data in respect of any purpose which Maybank may reasonably consider to be essential in order for Maybank to provide me with the products and/or services applied for, Maybank shall be entitled to treat my hire purchase financing as having been terminated by me without prejudice to any rights and remedies which it may have at law against me.</li>
							<li>13) (where the Applicant is not a private individual i.e. a company, partnership, limited liability partnership, sole proprietorship or otherwise) agree that we have read, fully understand and accept the terms relating to the collection,
use and disclosure of the relevant information (including personal data) as set out in MSL’s prevailing terms and conditions governing the hire purchase financing. We acknowledge and agree that we are responsible for ensuring thateach individual whose personal data has been provided to MSL (including authorised signatories and authorised persons) pursuant to our application(s) hereto and from time to time consents to the collection, use, disclosure and/or processing of his personal data by MSL and MSL’s authorised service providers for purposes set out in policies, circulars, notices or guidelines governing MSL’s collection, use and/or disclosure of personal data, including MSL’s Data Protection Policy available inter alia at www.maybank2u.com.sg, which MSL may update from time to time (“Data Protection Policies”). We shall ensure that all relevant individuals are furnished with a copy of the terms that apply to the hire purchase financing provided by MSL and the aforesaid Data Protection Polices.<br/>
* “substantial shareholder’’ means a shareholder having an interest in 5% or more shares in the company</li>
						</ul>
					</p>
				</td>
			</tr>
		</table>
		<div class="col-sm-6" style="margin-top:-10px">
			<p style="font-size:9px;line-height: 8px;">MSL-141i-0921 (1/4)<br/>
Sep 2021</p>
		</div>
		<div class="col-sm-6">
			<p style="font-size:9px;">Maybank Singapore Limited (UEN: 201804195C)</p>
		</div>
	</div>

</div>

</body>
</html>