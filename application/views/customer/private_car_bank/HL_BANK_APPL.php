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
        .text_line p{
        	line-height: 10px;
        }
        img.gg{
        	text-align: center !important;
        }
	</style>
</head>
<body>
<div id="container">
	<div id="body">
		<div class="col-sm-12">
			<div class="col-sm-4 header" style="width:25%">
				<img src="<?=base_url()?>/assets/images/hlbank-logo.png" style="width: 120px;">
			</div>
		</div>
		<div class="col-sm-12" style="margin-top:-25px">
			<p style="text-align: right;font-weight: bold;">HIRE PURCHASE APPLICATION FORM</p>
			<p style="font-size:10px !important;">If you wish to have a free credit report, you may obtain it within 30 calendar days from the date of approval or rejection of this application via the credit bureau website at, www.creditbureau.com.sg. Alternatively, you may bring the approval or rejection letter and your NRIC to the credit bureau's registered office to obtain a free credit report at Credit Bureau (Singapore) Pte Ltd 2 Shenton Way #20-02 SGX Centre 1 Singapore 068804 Tel: (65) 6565 6363.</p>
		</div>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="3" style="background:#c65b63;font-size:12px;font-weight:bold;text-align: center;color:#fff;">FINANCIAL REQUEST</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Amount required : $ <?php echo $customerdata->amount_require;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Repayment Period : <?php echo $customerdata->repayment_period;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Flat (Advance /Arrears) <?php echo $customerdata->flat;?></td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Purpose of Facility : <?php echo $customerdata->purposeof_facility;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Interest Rate : <?php echo $customerdata->loan_rate;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Monthly Rest <?php echo $customerdata->monthly_rest;?></td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="2" style="background:#c65b63;font-size:12px;font-weight:bold;text-align: center;color:#fff;">DESCRIPTION OF GOODS</td>
			</tr>
			<tr>				
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Purchase Price: $ <?php echo $customerdata->purchase_price;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Year of Manufacture: <?php echo $customerdata->yearofmanufacture;?></td>
			</tr>
			<tr>				
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Details of Goods: <?php echo $customerdata->detailsofgoods;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					<?php if($customerdata->type=="New"){ ?>
						<span style="font-size: 11px">&#9745;</span> New 
					<?php }else{ ?>
						□ New
					<?php }?>

					<?php if($customerdata->type=="Second-hand (pre-owned)"){ ?>
						<span style="font-size: 11px">&#9745;</span> Second-hand (pre-owned)
					<?php }else{?>
						□ Second-hand (pre-owned)
					<?php }?>
					<br/>
					Date of Original Registration: <?php echo $customerdata->original_reg_date;?>
				</td>
			</tr>
			<tr>				
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Chassis No.: <?php echo $customerdata->chassisno;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Vehicle Registration / Serial No. : <?php echo $customerdata->vehi_serial_no;?></td>
			</tr>
			<tr>				
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Engine No.: <?php echo $customerdata->engineno;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Vendor: <?php echo $customerdata->vendor;?></td>
			</tr>
		</table>

		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="2" style="background:#c65b63;font-size:12px;font-weight:bold;text-align: center;color:#fff;">APPLICANT PARTICULARS (please tick whichever applicable)</td>
			</tr>
			<tr>	
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
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
				</td>
			</tr>
			<tr>
				<td rowspan="2" style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">Full Name as in NRIC/FIN/Passport/registration with AGRA*: <?php echo $customerdata->name;?></td>	
				<td>Home/ Business Address: <?php echo $customerdata->address;?></td>
			</tr>
			<tr>	
				<td style="border-bottom: 1px solid #797777;">Mailing Address (if different from Above Address): <?php echo $customerdata->mailing_address;?></td>	
			</tr>
			<tr>				
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">NRIC/FIN/Passport No./ Business Registration No.: <?php echo $customerdata->nric;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Date of Birth/ Date of Incorporation : <?php echo $customerdata->dob;?></td>
			</tr>
			<tr>				
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Nationality: <br/>
					<span>
						<?php if($customerdata->nationality=="Singaporean"){ ?>
							<span style="font-size: 14px">&#9745;</span> Singaporean
						<?php }else{ ?>
							□ Singaporean 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->nationality=="PR"){ ?>
							<span style="font-size: 14px">&#9745;</span> PR
						<?php }else{ ?>
							□ PR 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->nationality=="Others, please specify"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others, please specify
						<?php }else{ ?>
							□ Others, please specify 
						<?php } ?>					
					</span>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Place of Incorporation: <br/>
					<span>
						<?php if($customerdata->placeof_incorporation=="Singaporean"){ ?>
							<span style="font-size: 14px">&#9745;</span> Singaporean
						<?php }else{ ?>
							□ Singaporean 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->placeof_incorporation=="Others, please specify"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others, please specify
						<?php }else{ ?>
							□ Others, please specify 
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>				
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Marital Status: <?php echo $customerdata->marital_status;?> / 
					Gender: 
						<span>
							<?php if($customerdata->hirer_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								□ Male 
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->hirer_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								□ Female 
							<?php } ?>					
						</span>
					</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Home No: <?php echo $customerdata->home_no;?> /
					Office No.: <?php echo $customerdata->office_no;?>
				</td>
			</tr>
			<tr>				
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Email Address <?php echo $customerdata->email;?></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Mobile No.: <?php echo $customerdata->mobile_no;?></td>
			</tr>
		</table>

		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="4" style="background:#c65b63;font-size:12px;font-weight:bold;text-align: center;color:#fff;">EMPLOYMENT DETAILS & INCOME DECLARATION (application for individual applicant only)</td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777;width:378px">
				Type of Employment:<br/>
					<span>
						<?php if($customerdata->typeof_employ=="Employed"){ ?>
							<span style="font-size: 14px">&#9745;</span> Employed
						<?php }else{ ?>
							□ Employed 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->typeof_employ=="Self-Employed"){ ?>
							<span style="font-size: 14px">&#9745;</span> Self-Employed
						<?php }else{ ?>
							□ Self-Employed 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->typeof_employ=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							□ Others 
						<?php } ?>					
					</span>

				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
				Monthly Income : 
				</td>
				<td style="border-bottom:1px solid #797777">
				Period of service : 
					
				</td>
			</tr>
			<tr>
				<td rowspan="2" colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Name and Address of Current Employer /Business: <?php echo $customerdata->cmy_name;?>/<?php echo $customerdata->cmy_address;?></td>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Nature of Business : <?php echo $customerdata->natureof_business;?></td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom:1px solid #797777">Position / Title : </td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Name and Address of Previous Employer /Business : <?php echo $customerdata->prev_empr_name;?>/<?php echo $customerdata->prev_empr_address;?> <br/>
					(if current employment is < 1 year)</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">Previous Position / Job Title : <?php echo $customerdata->prev_position;?></td>
				<td style="border-bottom:1px solid #797777">Period of service: <?php echo $customerdata->periodof_service;?></td>
			</tr>

		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="3" style="background:#c65b63;font-size:12px;font-weight:bold;text-align: center;color:#fff;">OTHER FINANCIAL COMMITMENTS</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;">Type of Facility</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;">Bank / Financial Institution</td>
				<td style="border-bottom:1px solid #797777;text-align: center;">Monthly Repayment</td>
			</tr>
			<tr>
				<td style="height: 20px;border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;"></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;"></td>
				<td style="border-bottom:1px solid #797777;text-align: center;"></td>
			</tr>
			<tr>
				<td style="height: 20px;border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;"></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;"></td>
				<td style="border-bottom:1px solid #797777;text-align: center;"></td>
			</tr>
		</table>
		<table style="width: 100%;border-top:1px solid #797777;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td style="background:#c65b63;font-size:12px;font-weight:bold;color:#fff;">DECLARATION BY APPLICANT</td>
			</tr>
			<tr>
				<td>
					1.	[I amNVe are] of full age and have the legal capacity to enter into a Hire Purchase Agreement with HL Bank (the "Bank") and [am/ are] not prohibited in any way from doing so or from driving, operating or possessing any vehicle or any form of machinery.<br/>
					2.	[I/We] acknowledge that the information provided by [me/us] in this application is true, complete and accurate and [I am/we are] aware that the Bank will use, rely and/or act on such information to review and/or assess this application and as such if such information is at any time found to be incomplete, untrue or inaccurate, the Bank is entitled to withdraw/cancel any approval granted for hire purchase.<br/>
					3.	[IM/e] confirm that at the time of this application that [I am/we are] not [an] undischarged bankrupt[s]; [I am/we are] not insolvent or in liquidation; [I/we] have not entered into any arrangement with [my/our creditors]; [I/we] are not in default of any agreement for financing with any person; and [I am/we are] not aware of any current, pending, or threatened legal, enforcement, bankruptcy, winding-up, or insolvency proceedings against [me/us] and [I/we] further confirm that [I am/we are] not subject to any debt repayment scheme under the Bankruptcy Act (Cap. 20).<br/>
					4.	[My/Our] application for hire purchase Is made on the terms herein and in accordance with the terms and conditions under the Bank's hire purchase agreement which is subject to such variations or such other terms and conditions as the Bank may notify [me/us].<br/>
					5.	[I/We] hereby declare as follows:<br/>
					
				</td>
				
			</tr>

		</table>
		<div style="border-left: 1px solid #797777;border-right: 1px solid #797777;">
		<div style="margin-left:30px;" class="text_line">
			<p style="font-size: 10px;margin-top:0px;">(a)	Whether I/we have received any discount, rebate or any other benefit from the vendor of the Goods or any other person:<br/>
			<span>
				<?php if($customerdata->receive_discount=="No"){ ?>
					<span style="font-size: 14px">&#9745;</span> No
				<?php }else{ ?>
					□ No 
				<?php } ?>					
			</span>
			<span>
				<?php if($customerdata->receive_discount=="Yes"){ ?>
					<span style="font-size: 14px">&#9745;</span> Yes
				<?php }else{ ?>
					□ Yes 
				<?php } ?>					
			</span>
			, I/we have received the following: ___________________
			at a total value of S$ ___________________
			</p>

			<p style="font-size: 10px;margin-bottom:0px">(b)	I/we have obtained other credit or hire purchase facility for the purchase or hire (as the case may be) of the Goods:<br/>
			<span>
				<?php if($customerdata->obtain_credit=="No"){ ?>
					<span style="font-size: 14px">&#9745;</span> No
				<?php }else{ ?>
					□ No 
				<?php } ?>					
			</span>
			<span>
				<?php if($customerdata->obtain_credit=="Yes"){ ?>
					<span style="font-size: 14px">&#9745;</span> Yes
				<?php }else{ ?>
					□ Yes 
				<?php } ?>					
			</span>
			, I/we have obtained the following facility from <span style="text-decoration: underline;"><?php echo $customerdata->obtain_facility;?></span>
			for the total aggregate sum of S$ <span style="text-decoration: underline;"><?php echo $customerdata->total_value_credit;?></span>
			</p>
		</div>
		</div>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;">
			<tr>
				<td colspan="2">
					6.	[I/We] agree to bear all cost and expenses in connection with this application, whether or not the application is approved, including but not limited cancellation, valuation and processing fees.<br/>
					7.	[I/We] confirm that all documents signed/pre-signed for this application including but not limited to the Hire Purchase Agreement (where applicable) are signed/pre-signed subject to the Bank's approval and until these are approved, accepted, completed and signed by the Bank, the Bank shall not be bound in any way to approve [my/our] application as such. Where the Hire Purchase Agreement is duly completed and signed by the Bank, [I/we] shall be bound by the Hire Purchase Agreement. [I/We] understand that the Bank has the absolute discretion to grant or refuse this application or to extend its processing time or withdraw any offer without notice to [me/us] without the need to provide any reason.<br/>
					7.	[I/We] confirm that all documents signed/pre-signed for this application including but not limited to the Hire Purchase Agreement (where applicable) are signed/pre-signed subject to the Bank's approval and until these are approved, accepted, completed and signed by the Bank, the Bank shall not be bound in any way to approve [my/our] application as such. Where the Hire Purchase Agreement is duly completed and signed by the Bank, [I/we] shall be bound by the Hire Purchase Agreement. [I/We] understand that the Bank has the absolute discretion to grant or refuse this application or to extend its processing time or withdraw any offer without notice to [me/us] without the need to provide any reason.
				</td>
			</tr>
			<tr>
				<td style="width:400px;border-top:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777">By submitting this application, [I/we] confirm that [I/we] have read, understood and agree to be bound by all the terms found In or incorporated under this application form and all the attachments provided herein and all the declarations [I/we] have made In this application are true, complete and accurate In all respects.</td>
				<td style="width:400px;border-top:1px solid #797777;border-bottom:1px solid #797777;text-align:center">
					<img src="<?php echo base_url() .'upload/sign/'.$customerdata->signof_hirer;?>" class="gg" style="width:100px;height: 50px;"><br/>
				<span>Signature of Applicant</span></td>
			</tr>
		</table>
		<table style="width: 100%;border-top:1px solid #797777;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777;margin-top:30px">
			<tr>
				<td colspan="4" style="background:#c65b63;font-size:12px;font-weight:bold;color:#fff;text-align: center;">GUARANTOR PARTICULARS(please tick whichever applicable)</td>
			</tr>
			<tr>
				<td colspan="4" style="border-bottom: 1px solid #797777;">
					<span>
						<?php if($customerdata->guaran_type=="Individual"){ ?>
							<span style="font-size: 14px">&#9745;</span> Individual
						<?php }else{ ?>
							□ Individual 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guaran_type=="Company / Firm"){ ?>
							<span style="font-size: 14px">&#9745;</span> Company I Firm
						<?php }else{ ?>
							□ Company I Firm 
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Full Name as in NRIC/FIN/Passport/registration with ACRA*: <?php echo $customerdata->guarantor_name;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;">
				Home / Business Address: <?php echo $customerdata->guarantor_address;?> <br/>
				Mailing Address (if different from Above Address): 
				</td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">NRIC/FIN/Passport No./ Business Registration No.: <?php echo $customerdata->guarantor_nric;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Date of Birth / Date of Incorporation : <?php echo $customerdata->guarantor_dob;?></td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
					Nationality : <br/>
					<span>
						<?php if($customerdata->guaran_nationality=="Singaporean"){ ?>
							<span style="font-size: 14px">&#9745;</span> Singaporean
						<?php }else{ ?>
							□ Singaporean 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guaran_nationality=="PR"){ ?>
							<span style="font-size: 14px">&#9745;</span> PR
						<?php }else{ ?>
							□ PR 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guaran_nationality=="Others, please specify"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others, please specify
						<?php }else{ ?>
							□ Others, please specify 
						<?php } ?>					
					</span>
				</td>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
					Place of Incorporation: <br/>
					<span>
						<?php if($customerdata->guaran_placeofincorpor=="Singapore"){ ?>
							<span style="font-size: 14px">&#9745;</span> Singapore
						<?php }else{ ?>
							□ Singapore 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guaran_placeofincorpor=="Others, please specify"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others, please specify
						<?php }else{ ?>
							□ Others, please specify 
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Marital Status: <?php echo $customerdata->guarantor_marital_status;?> /  
					Gender: 
					<span>
						<?php if($customerdata->guaran_gender=="Male"){ ?>
							<span style="font-size: 14px">&#9745;</span> Male
						<?php }else{ ?>
							□ Male 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guaran_placeofincorpor=="Female"){ ?>
							<span style="font-size: 14px">&#9745;</span> Female
						<?php }else{ ?>
							□ Female 
						<?php } ?>					
					</span>
				</td>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
					Home No: <?php echo $customerdata->guaran_homeno;?>
				</td>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
					Office No.: <?php echo $customerdata->guaran_officeno;?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Email Address <?php echo $customerdata->guarantor_email;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Mobile No.: <?php echo $customerdata->guaran_mobileno;?></td>
			</tr>
			<tr>
				<td colspan="4">Relationship with Applicant: <?php echo $customerdata->guarantor_relationship;?></td>
			</tr>
		</table>
		<table style="width: 100%;border-top:1px solid #797777;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777;">
			<tr>
				<td colspan="4" style="background:#c65b63;font-size:12px;font-weight:bold;color:#fff;text-align: center;">EMPLOYMENT DETAILS & INCOME DECLARATION (applicable for individual guarantor only)</td>
			</tr>
			<tr>
				<td colspan="2" style="width: 400px;border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
					Type of Employment: <br/>
					<span>
						<?php if($customerdata->guaran_typeof_employ=="Employed"){ ?>
							<span style="font-size: 14px">&#9745;</span> Employed
						<?php }else{ ?>
							□ Employed 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guaran_typeof_employ=="Self-Employed"){ ?>
							<span style="font-size: 14px">&#9745;</span> Self -Employed
						<?php }else{ ?>
							□ Self -Employed 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guaran_typeof_employ=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others :
						<?php }else{ ?>
							□ Others : 
						<?php } ?>					
					</span>
				</td>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">
					Monthly Income : <?php echo $customerdata->month_income;?>
				</td>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">

				Period of service :</td>
			</tr>
			<tr>
				<td rowspan="2" colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Name and Address of Current Employer /Business: <?php echo $customerdata->guarantor_cmyname;?></td>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Nature of Business : <?php echo $customerdata->guarantor_cmyaddress;?></td>
			</tr>
			<tr>
				<td colspan="2" style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Position / Title : <?php echo $customerdata->guaran_emply_position;?></td>
			</tr>
			<tr>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;width:400px" colspan="2">Name and Address of Previous Employer /Business : <?php echo $customerdata->guaran_emply_prevname;?><br/>
					(if current employment is < 1 year)
				</td>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Previous Position / Job Title : <?php echo $customerdata->guaran_emply_prev_position;?></td>
				<td style="border-bottom: 1px solid #797777;border-right: 1px solid #797777;">Period of service: <?php echo $customerdata->guaran_emply_prev_periodofservice;?></td>
			</tr>
		</table>
		<table style="width: 100%;border-top:1px solid #797777;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777;text-align: center;">
			<tr>
				<td colspan="3" style="background:#c65b63;font-size:12px;font-weight:bold;color:#fff;">EMPLOYMENT DETAILS & INCOME DECLARATION (applicable for individual guarantor only)</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;">Type of Facility</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;">Bank / Financial Institution</td>
				<td style="border-bottom:1px solid #797777;text-align: center;">Monthly Repayment</td>
			</tr>
			<tr>
				<td style="height: 20px;border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;"></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;"></td>
				<td style="border-bottom:1px solid #797777;text-align: center;"></td>
			</tr>
			<tr>
				<td style="height: 20px;border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;"></td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;text-align: center;"></td>
				<td style="border-bottom:1px solid #797777;text-align: center;"></td>
			</tr>
		</table>
		<table style="width: 100%;border-top:1px solid #797777;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777;">
			<tr>
				<td colspan="2" style="background:#c65b63;font-size:12px;font-weight:bold;color:#fff;">DECLARATION BY GUARANTOR</td>
			</tr>
			<tr>
				<td colspan="2">8.		[I/We] confirm that [I/we] agree to be the guarantor of the Hirer under the hire purchase facility if this application is approved and [I/we] will execute a Letter of Guarantee and Indemnity of Hire Purchase Agreement and/or such other document(s) in such form acceptable to the Bank.</td>
			</tr>
			<tr>
				<td style="width:400px;border-top:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777">By submitting this application, [I/we] confirm that [I/we] have read, understood and agree to be bound by all the terms found In or incorporated under this application form and all the attachments provided herein and all the declarations [I/we] have made In this application are true, complete and accurate In all respects.</td>
				<td style="width:400px;border-top:1px solid #797777;border-bottom:1px solid #797777;text-align:center">
					<img src="<?php echo base_url() .'upload/sign/'.$customerdata->signof_guarantor;?>" class="gg" style="width:100px;height: 50px;"><br/>
				<span>Signature of Guarantor</span></td>
			</tr>
		</table>
		<p style="font-size:8px;">
			substantial shareholders means a shareholder having an interest in 5% or more shares in the company.
		</p>
		<table style="width: 100%;border-top:1px solid #797777;border-left:1px solid #797777;border-right:1px solid #797777;margin-top: 5px;">
			<tr>
				<td style="background:#c65b63;font-size:12px;font-weight:bold;color:#fff;">DECLARATION BY GUARANTOR</td>
			</tr>
			<tr>
				<td>9.	[I/We] authorise and give [my/our] consent to the Bank to make any Inqu1r1es with respect to [my/our] employment or employer(s)/busmess for verification of such or further information as the Bank deems necessary for the purposes of this application. [I/We] authorise and give [my/our] consent to the Bank to obtain, collect, use, disclose and/or verify any information relating to [meius] from/with any party or authority as the Bank deems necessary for the purposes of this application or as may be required by any applicable law, rule or regulation without the need to give further notice to or obtain further consent from [me/us]. such party or authority including but not limited to the Bank's head office, representative and branch offices. and related or associated companies, any government or regulatory agency or authorlty, or any other person to whom disclosure is permitted or required by any statutory provision or law.<br/>
				10.	[I/We] acknowledge that [I/we] have read and understood the Bank's privacy policy available at the Bank's website at www.hlbank.com.sq. which explains the purposes for which the Bank may collect, use, disclose and process personal data of natural persons. [I/We] hereby consent to the Bank's collection, use, disclosure and processing of [my/our] personal data in accordance with the Bank's privacy policy (including but not limited to Credit Bureau (Singapore) Pte Ltd as well as its members and members of such other credit bureau or any other authorities established by the Monetary Authority of Singapore). Where I have disclosed the personal data or information of other individuals to the Bank, [I/we) confirm and warrant that [I/we] have provided due notice to and procured the prior consent of such individuals to allow the Bank to process their personal data and information.<br/>
				11.	[My/Our] signature here shall constitute [my/our] written consent for any such disclosure for the purposes of Section 47 of the Banking Act (Cap. 19) or any other disclosure imposed by any applicable law, rule or regulation.<br/>
				For the purpose of this application. [I/we] authorise the Bank to disclose any of [my/our] personal data/information to the [my/our] [Supplier/DealerNendor] whether by phone, short messaging service, electronic mail, facsimile transmission or other means of communication as the Bank deems fit.<br/>
				13.	[I/We] confirm that:- 
				</td>
			</tr>
		</table>
		<div style="border-left: 1px solid #797777;border-right: 1px solid #797777;">
		<div style="margin-left:30px;" class="text_line">
			<p style="font-size: 10px;margin-top:0px;">(a)	none of [rny/our] spouse[s], dependent[s] of [my/our) spouse[s], (my/our] children,spouses of [my/our] children, [my/our] parents, [my/our] siblings and/or spouses of [my/our] siblings are employees/directors of the Bank or its related group of companies (the latter to be referred to hereinafter as the "Hong Leong Group");
			
			</p>

			<p style="font-size: 10px;margin-bottom:0px">(b)	none of[myiour] guarantor[s] is an employee/director or spouse. dependent of the spouse, child, spouse of the child. parent sibling, or spouse of the sibling of an employee/director of the Bank or the Hong Leong Group;
			
			</p>
			<p style="font-size: 10px;margin-bottom:0px">(c)	(if Hirer is a company or none of our directors, managers, agents or guarantors is an employee/director (or spouse, dependent of the spouse, child, spouse of the child, parent, sibling or spouse of the sibling of the employee/director) of the Bank or the Hong Leong Group; and
			
			</p>
			<p style="font-size: 10px;margin-bottom:0px">(d)	(if Hirer is a company) none of our substantial shareholders is an employee/director (or spouse, dependent of the spouse, child, spouse of the child, parent
			
			</p>
			


		</div>
		</div>
		<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777;">
			<tr>
				<td colspan="2">
					14. [I/We) that [Vwe] have appointed the [Supplier/DealerNendor] of the Goods and their representatives as (my/our] authorised agents in respect of this application for hire
					•	purchase and [I/we] agree to be bound by any insertion, amendments and/or representations made by [rr.y1our] [Supplier/DealerNendor] in this application. The Bank is authorised to deal with (my/our] [Supplier/Deale•Nendor] and their representatives directly in finalising the terms for the financing and all communication, correspondence or notice sent oy the Bank to [my/our] [Supplier/DeaierNendor] whether by post_ by hand. by phone. short messaging service, electronic mai!, facsimile transmission or other
					means of communication shall be deemed to have been sent to [me/us] on the date of delivery if delivered by hand or immediately after the date of posting if it is sent by post (notwithstanding that it may be returned to the Bank undelivered) or on the date of documentary of successful transmission if sent by facsimile transmission.
					<br/>
					15.	(l1We] consent to [my/our] personal data being used by the Bank, Hong Leong Group of Companies and/or their third party service providers for sending advertising. marketing
,   and promotional materials in relation to any and all of the Bank and/or Hong Leong Group of Companies· products, services and other related products or services by post, e- mail, phone call, SMS, MMS or fax. [I/we] further consent to the Bank, Hong Leong Group of Companies and/or their third party service providers sending unsolicited messages" as in the POPA via SMS, MMS, fax or phor.e call to (my/our] Singapore telephone number(s). Such consent shall supersede any registration of [my/our] Singapore telephone number(s) that [I/we] have made with the Do Not Call Registry. I/We have the right to withdraw my/our consent to receive advertising, marketing and promotional information by completing the Bank's Withdrawal of Consent form.
					<br/>
					16.	If the hire purchase facility is cancelled or terminated for any reason after it is disbursed or if the hire purchase facility amount is settled in full before the end of the hire purchase facility tenure, [ We] acknowledge and agree that the additional fee(s)/charge(s) as stated in the Hire Purchase Agreement will be payable by [meius].
				</td>
			</tr>
		</table>
	</div><!-- body -->
</div><!-- container -->
</body>
</html>