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
        	font-size: 9px;        	
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
				<img src="<?=base_url()?>/assets/images/uob-logo.jpg" style="width: 120px;">
			</div>
			<div class="col-sm-7" style="width:74%;text-align: right;">
				<p>
					<b>APPLICATION FOR HIRE PURCHASE FACILITY <br/>(BUSINESS) <br/></b>
					Please ✓ in the appropriate 
					<span>
						<?php if($customerdata->guarantor=="Guarantor"){ ?>
							<span style="font-size: 14px">&#9745;</span> 
						<?php }else{ ?>
							❑
						<?php } ?>					
					</span><br/>
					for Guarantor(s), please turnover<br/>
				</p>
			</div>
		</div>
		<div class="col-sm-12" style="margin-top:-55px;margin-left: -50px;">
			<p style="text-align: center;font-weight: bold;">				
			Application date: <?php echo $customerdata->application_date;?></p>
		</div>
		<div style="margin-top: -10px;">
			<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="6" style="background:#231f20;font-size:10px;font-weight:bold;color:#fff;">APPLICANT – please submit your latest financial statements & last 3 months bank’s statements.</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 45px;width: 370px;border-right: 1px solid #797777;border-bottom:1px solid #797777;vertical-align: top;">
						Registered Company Name:
						<?php echo $customerdata->cmy_name;?>
					</td>
					<td colspan="3" style="border-right: 1px solid #797777;border-bottom:1px solid #797777;vertical-align: top;">
						Company Registration Number :
						<?php echo $customerdata->cmyreg_no;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Registered Business Address:<br/>
						<?php echo $customerdata->cmy_address;?>
						<br/>
						<br/>
						Postal Code: <?php echo $customerdata->postal_code;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Country of Incorporation<br/>
						<span>
							<?php if($customerdata->countryof_incorporation=="Singapore"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singapore
							<?php }else{ ?>
								❑ Singapore
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->countryof_incorporation=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others
							<?php }else{ ?>
								❑ Others
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Constitution Type<br/>
						<span>
							<?php if($customerdata->constitution_type=="Sole Proprietorship"){ ?>
								<span style="font-size: 14px">&#9745;</span> Sole Proprietorship
							<?php }else{ ?>
								❑ Sole Proprietorship
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->constitution_type=="Partnership"){ ?>
								<span style="font-size: 14px">&#9745;</span> Partnership
							<?php }else{ ?>
								❑ Partnership
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->constitution_type=="Private Limited"){ ?>
								<span style="font-size: 14px">&#9745;</span> Private Limited
							<?php }else{ ?>
								❑ Private Limited
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->constitution_type=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others___________________
							<?php }else{ ?>
								□ Others___________________
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Key Contact Person<br/>
						Office Tel : <?php echo $customerdata->office_tel;?><br/>
						Mobile No : <?php echo $customerdata->mobile_no;?>
					</td>

				</tr>
				<tr>
					<td colspan="3" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Mailing Address (if different from Registered Business Address)<br/>
						<?php echo $customerdata->mailing_address;?>
						<br/>
						<br/>
						Postal Code: <?php echo $customerdata->mailing_postalcode;?>
					</td>
					<td style="vertical-align: top;border-bottom:1px solid #797777">
						Business Activity<br/>
						<span>
							<?php if($customerdata->business_activity=="Manufacturing"){ ?>
								<span style="font-size: 14px">&#9745;</span> Manufacturing
							<?php }else{ ?>
								❑ Manufacturing
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->business_activity=="Property"){ ?>
								<span style="font-size: 14px">&#9745;</span> Property
							<?php }else{ ?>
								❑ Property
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->business_activity=="Retail"){ ?>
								<span style="font-size: 14px">&#9745;</span> Retail
							<?php }else{ ?>
								❑ Retail
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->business_activity=="F&B/Hospitality"){ ?>
								<span style="font-size: 14px">&#9745;</span> F&B/Hospitality
							<?php }else{ ?>
								❑ F&B/Hospitality
							<?php } ?>					
						</span>
					</td>
					<td style="border-bottom:1px solid #797777">
						<span>
							<?php if($customerdata->business_activity=="Building & Construction"){ ?>
								<span style="font-size: 14px">&#9745;</span> Building & Construction
							<?php }else{ ?>
								❑ Building & Construction
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->business_activity=="Logistics/Warehousing"){ ?>
								<span style="font-size: 14px">&#9745;</span> Logistics/Warehousing
							<?php }else{ ?>
								❑ Logistics/Warehousing
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->business_activity=="Servicing"){ ?>
								<span style="font-size: 14px">&#9745;</span> Servicing
							<?php }else{ ?>
								❑ Servicing
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->business_activity=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others(please specify): ___________________
							<?php }else{ ?>
								❑ Others(please specify): ___________________
							<?php } ?>					
						</span><br/>
					</td>
					<td style="border-bottom:1px solid #797777">
						<span>
							<?php if($customerdata->business_activity=="Electronics"){ ?>
								<span style="font-size: 14px">&#9745;</span> Electronics
							<?php }else{ ?>
								❑ Electronics
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->business_activity=="Transportation/Storage"){ ?>
								<span style="font-size: 14px">&#9745;</span> Transportation/Storage
							<?php }else{ ?>
								❑ Transportation/Storage
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->business_activity=="Professional Practices"){ ?>
								<span style="font-size: 14px">&#9745;</span> Professional Practices
							<?php }else{ ?>
								❑ Professional Practices
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					
				</tr>
			</table>
			<table style="width: 100%;border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777;">
				<tr>
					<td colspan="6" style="font-size:10px;font-weight:bold;text-align: center;border-bottom:1px solid #797777">APPLICANT’S FACILITIES / COMMITMENTS WITH OTHER BANKS OR FINANCIERS</td>
				</tr>
				<tr>					
					<td colspan="3" style="height: 35px;width: 370px;border-right: 1px solid #797777;border-bottom:1px solid #797777;vertical-align: top;">
						Type of Facilities ► please give details eg. (Credit Card, Car Loan, Housing Loan, etc....<br/>
						<?php echo $customerdata->typeof_facilities;?>
					</td>
					<td style="vertical-align: top;text-align: center;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Credit Limit <br/>
						<?php echo $customerdata->credit_limit;?>
					</td>
					<td style="vertical-align: top;text-align: center;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Monthly Repayment<br/>
						<?php echo $customerdata->month_repayment;?>
					</td>
					<td style="vertical-align: top;text-align: center;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Outstanding Balance<br/>
						<?php echo $customerdata->outstanding_balance;?>
					</td>
				</tr>
			</table>
		</div>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="2" style="background:#231f20;font-size:10px;font-weight:bold;color:#fff;">DESCRIPTION OF EQUIPMENT/VEHICLE – please submit your Vehicle Sales Agreement and a copy of the Registration Card.</td>
				</tr>
				<tr>
					<td style="vertical-align: top;height: 100px;width: 470px;border-right: 1px solid #797777;border-bottom:1px solid #797777;border-left:1px solid #797777">
						Make & Model: <?php echo $customerdata->make;?> <?php echo $customerdata->model;?><br/>
						<span>
							<?php if($customerdata->type=="New"){ ?>
								<span style="font-size: 14px">&#9745;</span> New
							<?php }else{ ?>
								❑ New
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->type=="Used"){ ?>
								<span style="font-size: 14px">&#9745;</span> Used
							<?php }else{ ?>
								❑ Used
							<?php } ?>					
						</span>
						(Year of Manufacture: <span style="text-decoration: underline;"><?php echo $customerdata->yearof_manufacture;?></span>) 
						<br/>
						<span>
							<?php if($customerdata->vehicle_type=="Vehicle"){ ?>
								<span style="font-size: 14px">&#9745;</span> Vehicle
							<?php }else{ ?>
								❑ Vehicle
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->vehicle_type=="Lorry"){ ?>
								<span style="font-size: 14px">&#9745;</span> Lorry
							<?php }else{ ?>
								❑ Lorry
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->vehicle_type=="Bus"){ ?>
								<span style="font-size: 14px">&#9745;</span> Bus
							<?php }else{ ?>
								❑ Bus
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->vehicle_type=="Passenger Car"){ ?>
								<span style="font-size: 14px">&#9745;</span> Passenger Car
							<?php }else{ ?>
								❑ Passenger Car
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->vehicle_type=="Equipment"){ ?>
								<span style="font-size: 14px">&#9745;</span> Equipment: (to describe)
							<?php }else{ ?>
								❑ Equipment: (to describe): <?php echo $customerdata->equipment;?>
							<?php } ?>					
						</span>
					</td>
					
					<td rowspan="5" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						<table style="width:100%">
							<tr>
								<td>Value of equipment/vehicle</td>
								<td>$ ___________________</td>
							</tr>
							<tr>
								<td>COE</td>
								<td>$ ___________________+</td>
							</tr>
							<tr>
								<td>Total Value + COE</td>
								<td>$ ___________________</td>
							</tr>
							<tr>
								<td>Regn Fee/Road Tax</td>
								<td>$ ___________________</td>
							</tr>
							<tr>
								<td>Insurance</td>
								<td>$ ___________________+</td>
							</tr>
							<tr>
								<td>Total Cash Price</td>
								<td>$ ___________________</td>
							</tr>
							<tr>
								<td>Deposit- Cash</td>
								<td>$ ___________________</td>
							</tr>
							<tr>
								<td>Trade-in</td>
								<td>$ ___________________+</td>
							</tr>
							<tr>
								<td></td>
								<td>$</td>
							</tr>
							<tr>
								<td colspan="2">
									<span style="font-weight: bold;">Amount Financed</span>
								</td>
								
							</tr>
							<tr>
								<td colspan="2">
									Term Charges @
								</td>
							</tr>
							<tr>
								<td>❑ - Fixed ......................... </td>
								<td>% p.a.</td>
							</tr>
							<tr>
								<td>below Board Rate (interest subject to change)</td>
								<td></td>
							</tr>
							<tr>
								<td>❑ - Advance ❑ - Arrears</td>
								<td>$ ___________________+</td>
							</tr>
							<tr>
								<td><span style="font-weight: bold;">Total Rent Payable</span></td>
								<td>$ ___________________</td>
							</tr>
							<tr>
								<td><span style="font-weight: bold;">Processing Fee</span></td>
								<td>$ ___________________</td>
							</tr>
							<tr>
								<td colspan="2"><span style="font-weight: bold;">Repayment Period</span> : ___________________months payable by________monthly installments of $ ________________and a final installment of $ ________________or such remaining balance plus outstanding interest.</td>
								
							</tr>
						</table>
						
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;border-left:1px solid #797777">
						<span style="font-size:8px;font-weight:bold">INSURANCE for the equipment/vehicle</span> –<span style="font-size:7px !Important;"> must be comprehensive insurance cover with United Overseas Bank Ltd endorsed as Owner</span>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;height: 60px;border-right: 1px solid #797777;border-bottom:1px solid #797777;border-left:1px solid #797777">
						DETAILS OF VENDOR (Seller) / SUPPLIER <br/>
						Name : ___________________________________ salesperson : ________________________________<br/>
						Address:_________________________________________________________________________________
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-left:1px solid #797777">
						<span style="font-weight: bold;">DEALER’s Declaration</span>
						<p style="font-size: 9px;">We confirm that the information given in this application is true and correct, and that we have also verified the identities and personal particulars of the approved person(s) of the Applicant and the guarantor(s) herein against their relevant original documents.</p>
						<p style="font-size: 9px;">We further confirm that we have obtained the consent of the relevant parties for the disclosure, collection and use of such information to/by UOB, for the purposes of this application.</p>
						
					</td>
				</tr>
				<tr>
					<td style="height: 28px;text-align: center;border-right: 1px solid #797777;border-bottom: 1px solid #797777;border-left:1px solid #797777">
						
						<span style="border-top:1px dotted #000;width:90px">
							Dealer’s company stamp & signature of authorized signatory	
						</span>
					</td>
									
				</tr>
				<tr>
					<td colspan="2" style="border-left:1px solid #797777;border-right:1px solid #797777">
						<span style="font-weight: bold;">APPLICANT’S DECLARATION</span><br/>
						To: United Overseas Bank Limited (“UOB”)<br/>
						We, the aforesaid Applicant named in this application, through our approved person(s) named below:<br/>
						1. confirm that the Memorandum and Articles of Association of the Applicant attached hereto is the most up-to-date copy and it contains a provision for the directors to
exercise all the powers of the Applicant to borrow money.<br/>
2. represent and warrant that all the information and declarations given to us is true and correct and that we have not withheld any material fact.<br/>
3. acknowledge that UOB may reject this application at its discretion without assigning any reason and retain documents submitted with this application, for business and/or regulatory purposes.<br/>
4. confi rm that we have read and understood UOB’s Privacy Notice (which forms part of the terms and conditions governing our relationship with UOB and a copy of which is available to us at www.uob.com.sg and at UOB’s branches). By providing the Personal Data of our shareholders, beneficial owners, directors, employees, guarantors or authorized representatives (“Relevant Individuals(s)”) as the case may be to UOB, we represent and warrant to UOB that we have obtained the consent of the Relevant Individual(s) for UOB’s collection, use and disclosure of such Personal Data in accordance with the terms of the Privacy Notice and for the purposes set out in the Privacy Notice, namely Basic Banking Purposes, Co-Branding Purpose, Research Purpose and Marketing Purpose (as defined in the Privacy Notice).<br/>
5. consent and authorize UOB to conduct any credit checks on us (including but not limited to checks with any credit bureau recognized by the Monetary Authority of Singapore) as may be required from time to time; and to obtain from, disclose or release to, and/or to verify with any party or source UOB may consider appropriate,
any information pertaining to us as UOB deems fit at its discretion, without notice or liability to us.<br/>
6. confi rm that neither the undersigned nor any of our partners, directors are the subject of any litigation proceedings. We further confirm that no application has been made or petition presented for the appointment of any of a receiver and/or manager or a judicial manager to take over the vehicle/goods; and no resolution or application has been made or petition presented for the appointment of a liquidator for winding up.<br/>
7. where the hire purchase facility herein applied for is in respect of a passenger vehicle,<br/>
(a) further warrant and represent to UOB that:<br/>
❑ we did not receive whether from the above vendor, supplier or otherwise, any discount, rebate, credit or any other benefit (including but not limited to car servicing or maintenance packages, petrol or shopping vouchers, credit facilities)(collectively, “Benefits”)for the purchase of the said passenger vehicle.<br/>
❑ we received the following Benefits from the above vendor/supplier for the purchase of the said passenger vehicle:<span style="text-decoration: underline;"><?php echo $customerdata->typeof_benefit;?></span> (state the type of Benefit and the monetary amount/value of the Benefit)
(b) undertake to provide UOB with the actual Open Market Value (OMV) of the said passenger vehicle upon registration of the vehicle, and provide such other documentary evidence in form and substance satisfactory to UOB evidencing the OMV of the vehicle.<br/>
(c) warrant and represent that we do not have any other credit facilities with any other bank or financiers apart from the information provided herein. We confirm that if we obtain any credit facilities with any other bank or financiers in the future, we will furnish the details to UOB immediately.<br/>
(d) confi rm that the said passenger vehicle is for commercial/personal* use<br/>
*please delete where inapplicable<br/><br/>


					</td>
				</tr>
				<tr>
					<td colspan="2" style="height: 38px;vertical-align: bottom; border-left:1px solid #797777;border-right:1px solid #797777;border-bottom:1px solid #797777">
						Signature of Approved Person/Name:  .................................................................................<br/>
NRIC/Passport No.: .................................................................................<br/>
					</td>
				</tr>
		</table>
		<p style="font-size: 10px;">WHOLESALE LOAN OPERATIONS CENTRE 156 Cecil Street #05-01 Far Eastern Bank Building, Singapore 069544<br/><span style="font-size: 9px;">United Overseas Bank Limited Co. Reg. No. 193500026Z</span></p>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="">
					<span style="font-weight: bold;text-decoration: underline;">IMPORTANT NOTICE for fax / email communication from the Bank</span><br/>
Privileged/Confidential information may be contained in this communication (which includes any attachment). If you are not an intended recipient, please call the sender immediately at the telephone
number on the right ➔ and thereafter, destroy all copies of this communication. You must not use, copy, disclose, distribute or retain all or any part of the contents of this communication if it is not
meant for you. Thank you for your cooperation
				</td>
			</tr>
		</table>
		<p style="font-weight: bold;">APPLICANT’S Name: <?php echo $customerdata->name;?> </p>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="6" style="background:#231f20;font-size:10px;font-weight:bold;color:#fff;">GUARANTOR 1 – please submit your latest Tax Assessment, copy of your Identity documents and namecard.</td>
				</tr>
				<tr>
					<td colspan="3" style="width:370px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						NAME (Underline Surname)
						<span>
							<?php if($customerdata->guarantor_salutation=="Mr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mr
							<?php }else{ ?>
								❑ Mr
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_salutation=="Mdm"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mdm
							<?php }else{ ?>
								❑ Mdm
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_salutation=="Miss"){ ?>
								<span style="font-size: 14px">&#9745;</span> Miss
							<?php }else{ ?>
								❑ Miss
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_salutation=="Dr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Dr
							<?php }else{ ?>
								❑ Dr
							<?php } ?>					
						</span><br/>
						<?php echo $customerdata->guarantor_name;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Date Of Birth <br/>
						<?php echo $customerdata->guarantor_dob;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Identity / Passport No <br/>
						<?php echo $customerdata->guarantor_identity_no;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Gender <br/>
						<span>
							<?php if($customerdata->guarantor_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="width:370px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Home Address:<?php echo $customerdata->guarantor_home_address;?><br/>
						<span>
							<?php if($customerdata->guarantor_address_type=="HDB"){ ?>
								<span style="font-size: 14px">&#9745;</span> HDB
							<?php }else{ ?>
								❑ HDB
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_address_type=="EC"){ ?>
								<span style="font-size: 14px">&#9745;</span> EC
							<?php }else{ ?>
								❑ EC
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_address_type=="Condo"){ ?>
								<span style="font-size: 14px">&#9745;</span> Condo
							<?php }else{ ?>
								❑ Condo
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_address_type=="House"){ ?>
								<span style="font-size: 14px">&#9745;</span> House
							<?php }else{ ?>
								❑ House
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->guarantor_address_type=="Owned"){ ?>
								<span style="font-size: 14px">&#9745;</span> Owned
							<?php }else{ ?>
								❑ Owned
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_address_type=="Mortgaged"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mortgaged
							<?php }else{ ?>
								❑ Mortgaged
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_address_type=="Rented"){ ?>
								<span style="font-size: 14px">&#9745;</span> Rented
							<?php }else{ ?>
								❑ Rented
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor_address_type=="Boarding"){ ?>
								<span style="font-size: 14px">&#9745;</span> Boarding
							<?php }else{ ?>
								❑ Boarding
							<?php } ?>					
						</span>
						<br/>
						
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Nationality<br/>
						<span>
							<?php if($customerdata->guarantor_nationality=="Singaporean"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singaporean
							<?php }else{ ?>
								❑ Singaporean
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->guarantor_nationality=="Singapore PR"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singapore PR
							<?php }else{ ?>
								❑ Singapore PR
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Home Tel : <?php echo $customerdata->guarantor_home_tel;?><br/>
						Mobile No : <?php echo $customerdata->guarantor_mobile_no;?><br/>
						Office Tel : <?php echo $customerdata->guarantor_office_tel;?><br/>
					</td>
				</tr>
				<tr>
					<td colspan="6" style="text-align: center;border-bottom: 1px solid #797777;">
						APPLICANT’S FACILITIES / COMMITMENTS WITH OTHER BANKS OR FINANCIERS
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 50px;vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Type of Facilities please give details eg. (Credit Card, Car Loan, Housing Loan, etc....<br/>
						<?php echo $customerdata->guarantor_applicant_typeof_facilities;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Credit Limit<br/>
						<?php echo $customerdata->guarantor_applicant_credit_limit;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Monthly Repayment<br/>
						<?php echo $customerdata->guarantor_applicant_month_repayment;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Outstanding Balance<br/>
						<?php echo $customerdata->guarantor_applicant_outstanding_balance;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="6" style="background:#231f20;font-size:10px;font-weight:bold;color:#fff;">GUARANTOR 2 – please submit your latest Payslip or Tax Assessment & copy of your Identity documents and namecard.</td>
				</tr>
				<tr>
					<td colspan="3" style="width:370px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						NAME (Underline Surname)
						<span>
							<?php if($customerdata->guarantor2_salutation=="Mr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mr
							<?php }else{ ?>
								❑ Mr
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_salutation=="Mdm"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mdm
							<?php }else{ ?>
								❑ Mdm
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_salutation=="Miss"){ ?>
								<span style="font-size: 14px">&#9745;</span> Miss
							<?php }else{ ?>
								❑ Miss
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_salutation=="Dr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Dr
							<?php }else{ ?>
								❑ Dr
							<?php } ?>					
						</span><br/>
						<?php echo $customerdata->guarantor2_name;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Date Of Birth <br/>
						<?php echo $customerdata->guarantor2_dob;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Identity / Passport No <br/>
						<?php echo $customerdata->guarantor2_identity_no;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Gender <br/>
						<span>
							<?php if($customerdata->guarantor2_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="width:370px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Home Address:<?php echo $customerdata->guarantor2_home_address;?><br/>
						<span>
							<?php if($customerdata->guarantor2_address_type=="HDB"){ ?>
								<span style="font-size: 14px">&#9745;</span> HDB
							<?php }else{ ?>
								❑ HDB
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_address_type=="EC"){ ?>
								<span style="font-size: 14px">&#9745;</span> EC
							<?php }else{ ?>
								❑ EC
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_address_type=="Condo"){ ?>
								<span style="font-size: 14px">&#9745;</span> Condo
							<?php }else{ ?>
								❑ Condo
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_address_type=="House"){ ?>
								<span style="font-size: 14px">&#9745;</span> House
							<?php }else{ ?>
								❑ House
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->guarantor2_address_type=="Owned"){ ?>
								<span style="font-size: 14px">&#9745;</span> Owned
							<?php }else{ ?>
								❑ Owned
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_address_type=="Mortgaged"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mortgaged
							<?php }else{ ?>
								❑ Mortgaged
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_address_type=="Rented"){ ?>
								<span style="font-size: 14px">&#9745;</span> Rented
							<?php }else{ ?>
								❑ Rented
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor2_address_type=="Boarding"){ ?>
								<span style="font-size: 14px">&#9745;</span> Boarding
							<?php }else{ ?>
								❑ Boarding
							<?php } ?>					
						</span>
						<br/>
						
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Nationality<br/>
						<span>
							<?php if($customerdata->guarantor2_nationality=="Singaporean"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singaporean
							<?php }else{ ?>
								❑ Singaporean
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->guarantor2_nationality=="Singapore PR"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singapore PR
							<?php }else{ ?>
								❑ Singapore PR
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Home Tel : <?php echo $customerdata->guarantor2_home_tel;?><br/>
						Mobile No : <?php echo $customerdata->guarantor2_mobile_no;?><br/>
						Office Tel : <?php echo $customerdata->guarantor2_office_tel;?><br/>
					</td>
				</tr>
				<tr>
					<td colspan="6" style="text-align: center;border-bottom: 1px solid #797777;">
						APPLICANT’S FACILITIES / COMMITMENTS WITH OTHER BANKS OR FINANCIERS
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 50px;vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Type of Facilities please give details eg. (Credit Card, Car Loan, Housing Loan, etc....<br/>
						<?php echo $customerdata->guarantor2_typeof_facilities;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Credit Limit<br/>
						<?php echo $customerdata->guarantor2_credit_limit;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Monthly Repayment<br/>
						<?php echo $customerdata->guarantor2_month_repayment;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Outstanding Balance<br/>
						<?php echo $customerdata->guarantor2_outstanding_balance;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="6" style="background:#231f20;font-size:10px;font-weight:bold;color:#fff;">GUARANTOR 3 – please submit your latest Payslip or Tax Assessment & copy of your Identity documents and namecard.</td>
				</tr>
				<tr>
					<td colspan="3" style="width:370px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						NAME (Underline Surname)
						<span>
							<?php if($customerdata->guarantor3_salutation=="Mr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mr
							<?php }else{ ?>
								❑ Mr
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_salutation=="Mdm"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mdm
							<?php }else{ ?>
								❑ Mdm
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_salutation=="Miss"){ ?>
								<span style="font-size: 14px">&#9745;</span> Miss
							<?php }else{ ?>
								❑ Miss
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_salutation=="Dr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Dr
							<?php }else{ ?>
								❑ Dr
							<?php } ?>					
						</span><br/>
						<?php echo $customerdata->guarantor3_name;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Date Of Birth <br/>
						<?php echo $customerdata->guarantor3_dob;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Identity / Passport No <br/>
						<?php echo $customerdata->guarantor3_identity_no;?>
					</td>
					<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Gender <br/>
						<span>
							<?php if($customerdata->guarantor3_gender=="Male"){ ?>
								<span style="font-size: 14px">&#9745;</span> Male
							<?php }else{ ?>
								❑ Male
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_gender=="Female"){ ?>
								<span style="font-size: 14px">&#9745;</span> Female
							<?php }else{ ?>
								❑ Female
							<?php } ?>					
						</span>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="width:370px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Home Address:<?php echo $customerdata->guarantor3_home_address;?><br/>
						<span>
							<?php if($customerdata->guarantor3_address_type=="HDB"){ ?>
								<span style="font-size: 14px">&#9745;</span> HDB
							<?php }else{ ?>
								❑ HDB
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_address_type=="EC"){ ?>
								<span style="font-size: 14px">&#9745;</span> EC
							<?php }else{ ?>
								❑ EC
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_address_type=="Condo"){ ?>
								<span style="font-size: 14px">&#9745;</span> Condo
							<?php }else{ ?>
								❑ Condo
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_address_type=="House"){ ?>
								<span style="font-size: 14px">&#9745;</span> House
							<?php }else{ ?>
								❑ House
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->guarantor3_address_type=="Owned"){ ?>
								<span style="font-size: 14px">&#9745;</span> Owned
							<?php }else{ ?>
								❑ Owned
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_address_type=="Mortgaged"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mortgaged
							<?php }else{ ?>
								❑ Mortgaged
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_address_type=="Rented"){ ?>
								<span style="font-size: 14px">&#9745;</span> Rented
							<?php }else{ ?>
								❑ Rented
							<?php } ?>					
						</span>
						<span>
							<?php if($customerdata->guarantor3_address_type=="Boarding"){ ?>
								<span style="font-size: 14px">&#9745;</span> Boarding
							<?php }else{ ?>
								❑ Boarding
							<?php } ?>					
						</span>
						<br/>
						
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Nationality<br/>
						<span>
							<?php if($customerdata->guarantor3_nationality=="Singaporean"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singaporean
							<?php }else{ ?>
								❑ Singaporean
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->guarantor3_nationality=="Singapore PR"){ ?>
								<span style="font-size: 14px">&#9745;</span> Singapore PR
							<?php }else{ ?>
								❑ Singapore PR
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Home Tel : <?php echo $customerdata->guarantor3_home_tel;?><br/>
						Mobile No : <?php echo $customerdata->guarantor3_mobile_no;?><br/>
						Office Tel : <?php echo $customerdata->guarantor3_office_tel;?><br/>
					</td>
				</tr>
				<tr>
					<td colspan="6" style="text-align: center;border-bottom: 1px solid #797777;">
						APPLICANT’S FACILITIES / COMMITMENTS WITH OTHER BANKS OR FINANCIERS
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 50px;vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Type of Facilities please give details eg. (Credit Card, Car Loan, Housing Loan, etc....<br/>
						<?php echo $customerdata->guarantor3_typeof_facilities;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Credit Limit<br/>
						<?php echo $customerdata->guarantor3_credit_limit;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Monthly Repayment<br/>
						<?php echo $customerdata->guarantor3_month_repayment;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						Outstanding Balance<br/>
						<?php echo $customerdata->guarantor3_outstanding_balance;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="3" style="background:#231f20;font-size:10px;font-weight:bold;color:#fff;">GUARANTOR(S) Declaration</td>
				</tr>
				<tr>
					<td colspan="3">
						I/we, the aforesaid Guarantor(s) named in this application:<br/>
						1. confirm that I/we agree to guarantee the hire purchase facility applied herein.<br/>
2. declare that the information and declarations given by me/us is true and correct and that I/we have not withheld any material fact.<br/>
3. acknowledge that UOB may reject this application at its discretion, without assigning any reasons and retain documents submittion with this application, for business and/or regulatory purposes.<br/>
4. I/we hereby confirm that I/we have read and understood UOB’s Privacy Notice (which forms part of the terms and conditions governing my/our relationship with UOB and a copy of which is available to me/us at www.uob.com.sg or UOB’s branches) and consent to UOB collecting, using and disclosing my/our Personal Data in accordance with the terms of the Privacy Notice and for the purposes set out in UOB’s Privacy Notice, namely Basic Banking Purposes, Co-Branding Purpose, Research Purpose and Marketing Purpose (as defined in the Privacy Notice) and in relation to the provision of this guarantee. I/we note that I/we may at any time withdraw all or part of the above consents at any branch and any withdrawal of consent for Research Purpose and Marketing Purpose will remain valid until I/we give my specifi c consent.<br/>
5. consent and authorize UOB to conduct any credit checks on me/us (including but not limited to checks with any credit bureau recognized by the Monetary Authority of Singapore) as may be required from time to time; and to obtain from, disclose or release to, and/or to verify with with any party UOB may consider appropriate, any information pertaining to me/us for the purposes of this application, and as UOB deems fit at its discretion, without notice or liability to me/us.<br/>
6. warrant and represent that I/we have never been adjudged bankrupt, no steps have been taken to obtain an interim order under the Bankruptcy Act, Singapore (Cap. 20), no bankruptcy petition has been presented, no bankruptcy order has been made, and no litigation proceedings have been filed against me/us in the past or presently.
					</td>

				</tr>
				<tr>
					<td>
						<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$customerdata->signof_guarantor)); ?>" class="img-responsive" style="width:100px;"><br/>
						<span style="border-top:1px dotted #000;">Signature of Guarantor 1</span>
					</td>
					<td style="vertical-align:bottom;">
						
						<span style="border-top:1px dotted #000;">Signature of Guarantor 2</span>
					</td>
					<td style="vertical-align:bottom;">
						
						<span style="border-top:1px dotted #000;">Signature of Guarantor 3</span>
					</td>
				</tr>
		</table>
	</div>
</div>
</body>
</html>