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
        margin: 5mm 7mm 0mm 7mm;  /* this affects the margin in the printer settings */
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
        .txt_underline{
        	text-decoration: underline;
        }
	</style>
</head>
<body>
<div id="container">
	<div id="body" class="row">
		<div class="col-sm-12">
			<div class="col-sm-4 header" style="width:25%">
				<img src="<?=base_url()?>/assets/images/uob-logo2.jpg" style="width: 170px;">
			</div>
			<div class="col-sm-7" style="width:74%;text-align: right;">
				<p style="font-size: 14px;">
					<b>APPLICATION FOR HIRE PURCHASE FACILITY (INDIVIDUAL APPLICANT)</b>					
				</p>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width: 45%;padding:0px 5px;">
				<p style="font-size: 9px ;">
					If you wish to have a free credit report, you may obtain it within 30 calendar days from
the date of approval or rejection of this application via the credit bureau website listed below. Alternatively, you may bring the approval or rejection letter and your NRIC to the following credit bureau’s registered office to obtain a free credit report.
				</p>
				<p style="font-size: 9px ;">
					Credit Bureau (Singapore) Pte Ltd <br/>
					2 Shenton Way, #20-02 SGX Centre 1 <br/>
					Singapore 068804 <br/>
					www.creditbureau.com.sg <br/>
				</p>
			</div>
			<div class="col-sm-6" style="width: 45%;padding:0px 5px;">
				<p style="font-size: 9px;">
				<span style="text-decoration: underline;">Please enclose the following documents with your application:</span><br/>
				1. A photocopy of your NRIC (front and back) or passport<br/>
				2. Copy of the Vehicle Sales & Purchase Agreement<br/>
				3. For salaried employees;<br/>
					<span style="margin-left:40px">
					a. Latest computerized payslip;<br/>
					b. Latest Income Tax Notice of Assessment (NOA); OR<br/>
					c. Latest 6 month’s CPF contribution history.<br/>
					</span>
				4. For self-employed and commission earners, last two years’ Income Tax Notice of
				Assessment<br/>
				<span style="text-decoration: underline;">For Foreigners – Additional documents to be submitted:</span><br/>
				1. Copy of work permit or employment pass<br/>
				<span style="text-decoration: underline;">For Used Passenger Vehicles:</span><br/>
				1. Copy of LTA Vehicle Information
				</p>
			</div>
		</div><!-- end -->
		<div style="margin-top: -5px;">
			<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="7" style="background:#231f20;font-size:9px;font-weight:bold;color:#fff;">APPLICANT – please ✓ in the appropriate ❑</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 45px;width: 350px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						NAME (Underline Surname)
						<span>
							<?php if($uobdata->salutation=="Mr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mr
							<?php }else{ ?>
								❑ Mr
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->salutation=="Mdm"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mdm
							<?php }else{ ?>
								❑ Mdm
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->salutation=="Miss"){ ?>
								<span style="font-size: 14px">&#9745;</span> Miss
							<?php }else{ ?>
								❑ Miss
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->salutation=="Dr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Dr
							<?php }else{ ?>
								❑ Dr
							<?php } ?>					
						</span><br/>
						<?php echo $uobdata->name;?>
					</td>
					<td style="width: 13%;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Date Of Birth<br/>
						<?php echo $uobdata->dob;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Identity / Passport No <br/>
						<?php echo $uobdata->identity_no;?>
						Expiry Date <br/>
						<?php echo $uobdata->expiry_date;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Monthly Salary + Other Income<br/>
						<?php echo $uobdata->month_income;?> + _________
					</td>
				</tr>
				<tr>
					<td colspan="4" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Home Address: 
						<?php echo $uobdata->address;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nationality<br/>
						<span>
							<?php if($uobdata->nationality=="SC"){ ?>
								<span style="font-size: 14px">&#9745;</span> SC
							<?php }else{ ?>
								❑ SC
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->nationality=="PR"){ ?>
								<span style="font-size: 14px">&#9745;</span> PR
							<?php }else{ ?>
								❑ PR
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->nationality=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others
							<?php }else{ ?>
								❑ Others
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Marital Status<br/>
						<span>
							<?php if($uobdata->marital_status=="Single"){ ?>
								<span style="font-size: 14px">&#9745;</span> Single
							<?php }else{ ?>
								❑ Single
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->marital_status=="Married"){ ?>
								<span style="font-size: 14px">&#9745;</span> Married
							<?php }else{ ?>
								❑ Married
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->marital_status=="Divorced"||$uobdata->marital_status=="Widowed"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others
							<?php }else{ ?>
								❑ Others
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Home Tel: <?php echo $uobdata->home_tel;?><br/>
						Mobile No: <?php echo $uobdata->mobile_no;?><br/>
						Office Tel: <?php echo $uobdata->office_tel;?><br/>
					</td>
				</tr>
				<tr>
					<td colspan="4" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Mailing Address (if different from above): <?php echo $uobdata->mailing_address;?>
					</td>
					<td colspan="3" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Email Address: <?php echo $uobdata->email;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employer / Office Address 
						<span>
							<?php if($uobdata->type=="Self-Employed"){ ?>
								<span style="font-size: 14px">&#9745;</span> Self-Employed
							<?php }else{ ?>
								❑ Self-Employed
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->type=="Salaried"){ ?>
								<span style="font-size: 14px">&#9745;</span> Salaried
							<?php }else{ ?>
								❑ Salaried
							<?php } ?>					
						</span><br/>
						<?php echo $uobdata->cmy_address;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Occupation<br/>
						<?php echo $uobdata->occupation;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nature of Business<br/>
						<?php echo $uobdata->natureof_business;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employment Period<br/>
						<?php
	                        $emplyperiod = explode(',', $uobdata->yearof_service);
	                    ?>
						<span style="text-decoration:underlined"><?php echo $emplyperiod[0];?></span> years 
						<span style="text-decoration:underlined"><?php echo $emplyperiod[1];?></span> months
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Previous Employer’s Name (if above employment period is a year or less)<br/>
						<?php echo $uobdata->prev_emplyname;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Occupation<br/>
						<?php echo $uobdata->prev_occupation;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nature of Business<br/>
						<?php echo $uobdata->prev_natureof_business;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employment Period<br/>
						<?php
	                        $prevemplyperiod = explode(',', $uobdata->prev_emplyperiod);
	                    ?>
						_______ years _______ months
					</td>
				</tr>
				<tr>
					<td colspan="7" style="font-weight: bold;text-align: center;border-right: 1px solid #797777;border-bottom:1px solid #797777;">
						APPLICANT’S FACILITIES / COMMITMENTS WITH OTHER BANKS OR FINANCIERS
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 40px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Type of Facilities ► please give details eg. (Credit Card, Car Loan, Housing Loan, etc....) <br/>
						<?php echo $uobdata->typeof_facilities;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Credit Limit <br/>
						<?php echo $uobdata->credit_limit;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Monthly Repayment <br/>
						<?php echo $uobdata->month_repayment;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Outstanding Balance <br/>
						<?php echo $uobdata->outstanding_balance;?>
					</td>
				</tr>
			</table>
		</div><!-- end -->
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td style="width: 525px;background:#231f20;font-size:9px;font-weight:bold;color:#fff;border-right:1px solid #fff">DESCRIPTION OF VEHICLE – please submit your Vehicle Sales Agreement and LTA Vehicle Information.</td>

					<td style="background:#231f20;font-size:9px;font-weight:bold;color:#fff;">
						FINANCIAL REQUEST
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #797777;">
						<p style="font-size: 9px;">Make & Model: <?php echo $uobdata->make;?> <?php echo $uobdata->model;?><br/>
						<span>
							<?php if($uobdata->vehicle_type=="New"){ ?>
								<span style="font-size: 14px">&#9745;</span> New
							<?php }else{ ?>
								❑ New
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->vehicle_type=="Used"){ ?>
								<span style="font-size: 14px">&#9745;</span> Used
							<?php }else{ ?>
								❑ Used
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->vehicle_price_type=="OMV≤$20,000"){ ?>
								<span style="font-size: 14px">&#9745;</span> OMV≤$20,000
							<?php }else{ ?>
								❑ OMV≤$20,000
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->vehicle_price_type=="OMV>$20,000"){ ?>
								<span style="font-size: 14px">&#9745;</span> OMV>$20,000
							<?php }else{ ?>
								❑ OMV>$20,000
							<?php } ?>					
						</span></p><br/>

						<p style="font-size: 9px;"><span style="text-decoration: underline;"><?php echo $uobdata->makemodel;?>				 </span>
						Chassis No : <?php echo $uobdata->chassisno;?></p><br/>

						<p style="font-size: 9px;">Registration/Serial No : ______________________________________</p><br/>

						<p style="font-size: 9px;font-weight: bold;">DETAILS OF VENDOR (Seller) / SUPPLIER</p>
						<br/>
						<p style="font-size: 9px;">Name : ______________________________
						Salesman : ______________________________</p>
						<br/>
						<p style="font-size: 9px;">Address : <span style="text-decoration: underline;"><?php echo $uobdata->address;?> </span></p><br/>
		
					
					</td>
					<td rowspan="3" style="border-bottom: 1px solid #797777;">
						<p style="font-size: 9px;"><b>Purchase Price $</b> : <span style="text-decoration: underline;"><?php echo $uobdata->purchase_price;?> </span></p><br/>

						<p style="font-size: 9px;">Year of Manufacture : <span style="text-decoration: underline;"><?php echo $uobdata->manufacture_year;?> </span></p><br/>

						<p style="font-size: 9px;"><b>Amount Financed $</b> : <span style="text-decoration: underline;"><?php echo $uobdata->amount_finance;?> </span></p><br/>

						<p style="font-size: 9px;">Interest Rate Fixed : <span style="text-decoration: underline;"><?php echo $uobdata->interest_ratefixed;?> </span> % p.a.</p><br/>

						<p style="font-size: 9px;"><b>Repayment Period </b> : <span style="text-decoration: underline;"><?php echo $uobdata->repayment_period;?> </span> <b>months payable by</b> </p><br/>

						<p style="font-size: 9px;"><span style="text-decoration: underline;"><?php echo $uobdata->monthpayable_by;?> </span> <b>monthly installments of $</b> : <span style="text-decoration: underline;"><?php echo $uobdata->month_installment;?> </span></p><br/>

						<p style="font-size: 9px;"><b>and a final installment of $</b> : <span style="text-decoration: underline;"><?php echo $uobdata->final_installment;?> </span></p><br/>

						<p style="font-size: 9px;">or such remaining balance plus outstanding interest.</p>
					</td>
				</tr>
				<tr>
					<td style="border-right: 1px solid #797777;">
						<p style="font-size: 9px;font-weight: bold;">DEALER’s Declaration</p>
						<p style="font-size: 9px;">We confirm that the information given in this application are true and correct and that we have also, verified the identities and personal particulars of the applicant and the guarantor(s) herein against their relevant original documents.</p>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: bottom;height: 40px;text-align: center;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						
							Dealer’s company stamp & signature of authorized signatory / Date
					</td>
				</tr>
				<tr>
					<td colspan="2" style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
						<b>APPLICANT’s Declaration</b> <br/>
						1. Did you receive any discount, rebate or any other benefit from the above Vendor/Supplier or any other third party? (eg. car servicing/maintenance package, petrol/shopping vouchers, cash discount etc).<br/>
<span>
	<?php if($uobdata->discount_receive=="Yes"){ ?>
		<span style="font-size: 14px">&#9745;</span> Yes, the type of discount, rebate and benefit(s) I/we received is/are <span class="txt_underline"><?php echo $uobdata->receive_txt;?></span>  and amount(s) received/value of the item(s) is/are S$ <span class="txt_underline"><?php echo $uobdata->receive_value;?></span><br/>
	<?php }else{ ?>
		❑ Yes, the type of discount, rebate and benefit(s) I/we received is/are ___________________ and amount(s) received/value of the item(s) is/are S$ ___________________<br/>
	<?php } ?>					
</span>
<span>
	<?php if($uobdata->discount_receive=="No"){ ?>
		<span style="font-size: 14px">&#9745;</span> No, I/we did not receive any discount, rebate or benefit(s).<br/>
	<?php }else{ ?>
		❑ No, I/we did not receive any discount, rebate or benefit(s).<br/>
	<?php } ?>					
</span>

2. Did you obtain any other credit facility for the purchase of the above vehicle/goods?<br/>
<span>
	<?php if($uobdata->credit_obtain=="Yes"){ ?>
		<span style="font-size: 14px">&#9745;</span> Yes, the type of credit facility(ies) I/we received is/are <span class="txt_underline"><?php echo $uobdata->obtain_txt;?></span> and amount received is S$ <span class="txt_underline"><?php echo $uobdata->obtain_amount;?></span><br/>
	<?php }else{ ?>
		❑ Yes, the type of credit facility(ies) I/we received is/are ___________________ and amount received is S$ ___________________<br/>
	<?php } ?>					
</span>
<span>
	<?php if($uobdata->credit_obtain=="No"){ ?>
		<span style="font-size: 14px">&#9745;</span> No, I/we did not obtain any credit facility.<br/>
	<?php }else{ ?>
		❑ No, I/we did not obtain any credit facility.<br/>
	<?php } ?>					
</span>

3. I/We undertake to provide United Overseas Bank Limited (the “Bank”) with the actual Open Market Value (OMV) of the vehicle upon registration of the said vehicle.<br/>
4. I/We declare that the information given by me/us is true, complete and correct and that I/we have not willfully withheld any material fact. I/We have never been made bankrupt and there is no litigation or petition filed against me/us in the past or presently.<br/>
5. I/We shall promptly notify the Bank in writing if any information given becomes inaccurate or misleading or changes in any way before this application is approved. I/We shall supply any additional information and documentary proof as the Bank may require from time to time in connection with this application.<br/>
6. I/We hereby authorize and give the Bank my/our irrevocable consent to make such inquiries and conduct all such checks on me/us (including, but not limited to, inquiries and checks with any credit bureau recognised as such by the Monetary Authority of Singapore or other parties relative to this applications) and obtain from and/or verify with any source and/or disclose or release any information relating to me/us or any of my/our account(s) with the Bank to any other party or source (including, but not limited to, any of the Bank’s related companies, advisors, credit bureaus, credit reference agents, insurance providers, Housing Development Board (HDB) or Central Provident Fund (CPF) Board or governmental authorities/agencies) as the Bank may from time to time deem fit at the Bank’s own absolute discretion and without any liability or notice to me/us.<br/>
7. I/We further acknowledge that the Bank reserves the right to reject this application without assigning any reason and retain documents submitted with this application, for the purposes of this application.<br/>
8. I/We hereby authorize the Bank to disclose any information of myself/ourselves and/or data relating to myself/ourselves to the Vendor (Seller), Supplier and/or Dealer by phone, electronic mail, short messaging service (SMS) or any other means of communication which the Bank deems appropriate, for the purposes of this application.<br/>
9. I/We confirm that I/we have read and understood the Bank’s Privacy Notice (Individual) (available at www.uob.com.sg and the Bank’s branches) which forms part of the terms and conditions governing my/our relationship with the Bank. I/We consent to the Bank collecting, using and disclosing my/our personal data for Basic Banking Purposes, Co-branding Purpose, Research Purpose and Marketing Purpose as described in the Bank’s Privacy Notice (Individual). I/We note that (a) I/we may withdraw consent for any or all of the purposes
at any time; (b) if I/we withdraw consent for Basic Banking Purposes and/or Co-branding Purpose, the Bank may not be able to continue to provide the products and services to me/us; (c) if I/we withdraw consent for Research Purpose and Marketing Purpose, my/our personal data will not be used for these purposes unless I/we expressly and separately consent to the same again.<br/>
Applicant’s Signature / Date : 
<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$uobdata->signof_hirer)); ?>" class="img-responsive" style="width:100px;height: 25px;">
<?php echo $uobdata->sign_date;?><br/>
					</td>
				</tr>
				<tr>
					<td>
						<p style="font-size: 9px;" class="txt_underline">
						<b>IMPORTANT NOTICE</b> <span style="font-size: 8px;">for fax / email communication from the Bank</span><br/>
						</p>
						Privileged/Confidential information may be contained in this communication (which includes any attachment). If you are not an intended recipient, please call the sender immediately at the telephone number on the right ➔ and thereafter, destroy all copies of this communication. You must not use, copy, disclose, distribute or retain all or any part of the contents of this communication if it is not meant for you. Thank you for your cooperation.
					</td>
				</tr>
		</table>
		<p><b>APPLICANT’S Name: </b><?php echo $uobdata->name;?></p>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="7" style="background:#231f20;font-size:9px;font-weight:bold;color:#fff;border-right:1px solid #fff">GUARANTOR 1 – please submit your latest Payslip / Tax Assessment & copy of your Identity documents and namecard</td>
				</tr>
				<tr>
					<td colspan="3" style="width: 365px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						NAME (Underline Surname)
						<span>
							<?php if($uobdata->guarantor_salutation=="Mr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mr
							<?php }else{ ?>
								❑ Mr
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->guarantor_salutation=="Mdm"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mdm
							<?php }else{ ?>
								❑ Mdm
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->guarantor_salutation=="Miss"){ ?>
								<span style="font-size: 14px">&#9745;</span> Miss
							<?php }else{ ?>
								❑ Miss
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->guarantor_salutation=="Dr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Dr
							<?php }else{ ?>
								❑ Dr
							<?php } ?>					
						</span>
						<br/>
						<?php echo $uobdata->guarantor_name;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Date Of Birth<br/>
						<?php echo $uobdata->guarantor_dob;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Identity / Passport No <br/>
						<?php echo $uobdata->guarantor_nric;?> <br/>
						Expiry Date __________<br/>
						
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Monthly Salary + Other Income<br/>
						<?php echo $uobdata->guarantor_monthincome;?> + _______
					</td>
				</tr>
				<tr>
					<td colspan="3" style="width: 365px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Home Address <br/>
						<?php echo $uobdata->guarantor_address;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Relationship<br/>
						<?php echo $uobdata->guarantor_relationship;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nationality <br/>
						<span>
							<?php if($uobdata->guarantor_nationality=="SC"){ ?>
								<span style="font-size: 14px">&#9745;</span> SC
							<?php }else{ ?>
								❑ SC
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->guarantor_nationality=="PR"){ ?>
								<span style="font-size: 14px">&#9745;</span> PR
							<?php }else{ ?>
								❑ PR
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->guarantor_nationality=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others
							<?php }else{ ?>
								❑ Others
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Marital Status <br/>
						<span>
							<?php if($uobdata->guarantor_marital_status=="Single"){ ?>
								<span style="font-size: 14px">&#9745;</span> Single
							<?php }else{ ?>
								❑ Single
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->guarantor_marital_status=="Married"){ ?>
								<span style="font-size: 14px">&#9745;</span> Married
							<?php }else{ ?>
								❑ Married
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->guarantor_marital_status=="Divorced"||$uobdata->guarantor_maritalstatus=="Widowed"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others
							<?php }else{ ?>
								❑ Others
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Home Tel: <?php echo $uobdata->guarantor_hometel;?><br/>
						Mobile No : <?php echo $uobdata->guarantor_mobileno;?><br/>
						Office Tel : <?php echo $uobdata->guarantor_officetel;?><br/>
					</td>
				</tr>
				<tr>
					<td colspan="4" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Mailing Address (if different from above):<br/>
						<?php echo $uobdata->guarantor_mailingaddress;?>
					</td>
					<td colspan="3" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Email Address:<br/>
						<?php echo $uobdata->guarantor_email;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employer / Office Address
						<span>
							<?php if($uobdata->guarantor_type=="Self-Employed"){ ?>
								<span style="font-size: 14px">&#9745;</span> Self-Employed
							<?php }else{ ?>
								❑ Self-Employed
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->guarantor_type=="Salaried"){ ?>
								<span style="font-size: 14px">&#9745;</span> Salaried
							<?php }else{ ?>
								❑ Salaried
							<?php } ?>					
						</span><br/>
						<?php echo $uobdata->guarantor_cmyaddress;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Occupation<br/>
						<?php echo $uobdata->guarantor_occupation;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nature of Business<br/>
						<?php echo $uobdata->guarantor_natureofbusiness;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employment Period<br/>
						<?php
	                        $guarantorperiod = explode(',', $uobdata->guarantor_yearofservice);
	                    ?>
						<span style="text-decoration:underlined"><?php echo $guarantorperiod[0];?></span> years 
						<span style="text-decoration:underlined"><?php echo $guarantorperiod[1];?></span> months
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Previous Employer’s Name (if above employment period is a year or less)<br/>
						<?php echo $uobdata->guarantor_prev_emplyname;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Occupation<br/>
						<?php echo $uobdata->guarantor_prev_occupation;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nature of Business<br/>
						<?php echo $uobdata->guarantor_prev_natureofbusiness;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employment Period<br/>
						<?php
	                        $guarantorprevperiod = explode(',', $uobdata->guarantor_prev_period);
	                    ?>
						<span style="text-decoration:underlined"><?php echo $guarantorprevperiod[0];?></span> years 
						<span style="text-decoration:underlined"><?php echo $guarantorprevperiod[1];?></span> months
					</td>
				</tr>
				<tr>
					<td colspan="7" style="text-align: center;font-weight:bold;border-bottom:1px solid #797777">
						GUARANTOR’S FACILITIES / COMMITMENTS WITH OTHER BANKS OR FINANCIERS
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 40px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Type of Facilities please give details eg. (Credit Card, Car Loan, Housing Loan, etc....)<br/>
						<?php echo $uobdata->guarantor_typeoffacilities;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Credit Limit<br/>
						<?php echo $uobdata->guarantor_credit_limit;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Monthly Repayment<br/>
						<?php echo $uobdata->guarantor_monthrepayment;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Outstanding Balance<br/>
						<?php echo $uobdata->guarantor_outstanding_balance;?>
					</td>
				</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="7" style="background:#231f20;font-size:9px;font-weight:bold;color:#fff;border-right:1px solid #fff">GUARANTOR 2 – please submit your latest Payslip / Tax Assessment & copy of your Identity documents and namecard.</td>
				</tr>
				<tr>
					<td colspan="3" style="width: 365px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						NAME (Underline Surname)
						<span>
							<?php if($uobdata->guarantor2_salutation=="Mr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mr
							<?php }else{ ?>
								❑ Mr
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->guarantor2_salutation=="Mdm"){ ?>
								<span style="font-size: 14px">&#9745;</span> Mdm
							<?php }else{ ?>
								❑ Mdm
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->guarantor2_salutation=="Miss"){ ?>
								<span style="font-size: 14px">&#9745;</span> Miss
							<?php }else{ ?>
								❑ Miss
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->guarantor2_salutation=="Dr"){ ?>
								<span style="font-size: 14px">&#9745;</span> Dr
							<?php }else{ ?>
								❑ Dr
							<?php } ?>					
						</span>
						<br/>
						<?php echo $uobdata->guarantor2_name;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Date Of Birth<br/>
						<?php echo $uobdata->guarantor2_dob;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Identity / Passport No <br/>
						<?php echo $uobdata->guarantor2_identityno;?> <br/>
						Expiry Date __________<br/>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Monthly Salary + Other Income<br/>
						<?php echo $uobdata->guarantor2_monthsalary;?> + <?php echo $uobdata->guarantor2_otherincome;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="width: 365px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Home Address <br/>
						<?php echo $uobdata->guarantor2_homeaddress;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Relationship<br/>
						<?php echo $uobdata->guarantor2_ralationship;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nationality <br/>
						<span>
							<?php if($uobdata->guarantor2_nationality=="SC"){ ?>
								<span style="font-size: 14px">&#9745;</span> SC
							<?php }else{ ?>
								❑ SC
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->guarantor2_nationality=="PR"){ ?>
								<span style="font-size: 14px">&#9745;</span> PR
							<?php }else{ ?>
								❑ PR
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->guarantor2_nationality=="Others"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others
							<?php }else{ ?>
								❑ Others
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Marital Status <br/>
						<span>
							<?php if($uobdata->guarantor2_maritalstatus=="Single"){ ?>
								<span style="font-size: 14px">&#9745;</span> Single
							<?php }else{ ?>
								❑ Single
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->guarantor2_maritalstatus=="Married"){ ?>
								<span style="font-size: 14px">&#9745;</span> Married
							<?php }else{ ?>
								❑ Married
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($uobdata->guarantor2_maritalstatus=="Divorced"||$uobdata->guarantor2_maritalstatus=="Widowed"){ ?>
								<span style="font-size: 14px">&#9745;</span> Others
							<?php }else{ ?>
								❑ Others
							<?php } ?>					
						</span>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Home Tel: <?php echo $uobdata->guarantor2_hometel;?><br/>
						Mobile No : <?php echo $uobdata->guarantor2_mobileno;?><br/>
						Office Tel : <?php echo $uobdata->guarantor2_officetel;?><br/>
					</td>
				</tr>
				<tr>
					<td colspan="4" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Mailing Address (if different from above):<br/>
						<?php echo $uobdata->guarantor2_mailingaddress;?>
					</td>
					<td colspan="3" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Email Address:<br/>
						<?php echo $uobdata->guarantor2_email;?>
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employer / Office Address
						<span>
							<?php if($uobdata->guarantor2_type=="Self-Employed"){ ?>
								<span style="font-size: 14px">&#9745;</span> Self-Employed
							<?php }else{ ?>
								❑ Self-Employed
							<?php } ?>					
						</span>
						<span>
							<?php if($uobdata->guarantor2_type=="Salaried"){ ?>
								<span style="font-size: 14px">&#9745;</span> Salaried
							<?php }else{ ?>
								❑ Salaried
							<?php } ?>					
						</span><br/>
						<?php echo $uobdata->guarantor2_officeaddress;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Occupation<br/>
						<?php echo $uobdata->guarantor2_occupation;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nature of Business<br/>
						<?php echo $uobdata->guarantor2_natureofbusiness;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employment Period<br/>
						<?php
	                        $guarantor2period = explode(',', $uobdata->guarantor2_period);
	                    ?>
						<span style="text-decoration:underlined"><?php echo $guarantor2period[0];?></span> years 
						<span style="text-decoration:underlined"><?php echo $guarantor2period[1];?></span> months
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Previous Employer’s Name (if above employment period is a year or less)<br/>
						<?php echo $uobdata->guarantor2_prev_emplyname;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Occupation<br/>
						<?php echo $uobdata->guarantor2_prev_occupation;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Nature of Business<br/>
						<?php echo $uobdata->guarantor2_prev_natureofbusiness;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Employment Period<br/>
						<?php
	                        $guarantor2prevperiod = explode(',', $uobdata->guarantor2_prev_period);
	                    ?>
						<span style="text-decoration:underlined"><?php echo $guarantor2prevperiod[0];?></span> years 
						<span style="text-decoration:underlined"><?php echo $guarantor2prevperiod[1];?></span> months
					</td>
				</tr>
				<tr>
					<td colspan="7" style="text-align: center;font-weight:bold;border-bottom:1px solid #797777">
						GUARANTOR’S FACILITIES / COMMITMENTS WITH OTHER BANKS OR FINANCIERS
					</td>
				</tr>
				<tr>
					<td colspan="3" style="height: 40px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Type of Facilities please give details eg. (Credit Card, Car Loan, Housing Loan, etc....)<br/>
						<?php echo $uobdata->guarantor2_typeoffacilities;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Credit Limit<br/>
						<?php echo $uobdata->guarantor2_credit_limit;?>
					</td>
					<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Monthly Repayment<br/>
						<?php echo $uobdata->guarantor2_monthrepayment;?>
					</td>
					<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
						Outstanding Balance<br/>
						<?php echo $uobdata->guarantor2_outstanding_balance;?>
					</td>
				</tr>
		</table>
		
		<table style="width: 100%;border:1px solid #797777;">
				<tr>
					<td colspan="2" style="background:#231f20;font-size:9px;font-weight:bold;color:#fff;border-right:1px solid #fff">GUARANTOR(S) Declaration</td>
				</tr>
				<tr>
					<td colspan="2">
						1. I/We confirm that I/we am/are agreeable to guarantee the hire purchase facility applied herein.<br/>
2. I/We declare that the information given by me/us is true, complete and correct and that I/we have not wilfully withheld any material fact.<br/>
3. I/We have never been made bankrupt and there is no litigation or petition filed against me/us in the past or presently.<br/>
4. I/We shall promptly notify United Overseas Bank Limited (“Bank”) in writing if any information given becomes inaccurate or misleading or changes in any way before this application is approved. I/We shall supply any additional information and documentary proof as the Bank may require from time to time in connection with this application.<br/>
5. I/We hereby authorize and give the Bank my/our irrevocable consent to make such inquiries and conduct all such checks on me/us (including, but not limited to, inquiries and checks with any credit bureau recognised as such by the Monetary Authority of Singapore or other parties relative to this applications) and obtain from and/or verify with any source and/or disclose or release any information relating to me/us or any of my/our account(s) with the Bank to any other party or source (including, but not limited to, any of the Bank’s related
companies, advisors, credit bureaus, credit reference agents, insurance providers, Housing Development Board (HDB) or Central Provident Fund (CPF) Board or governmental authorities/agencies ) as the Bank may from time to time deem fit at the Bank’s own absolute discretion and without any liability or notice to me/us.<br/>
6. I/We further acknowledge that the Bank reserves the right to reject this application without assigning any reason and retain the documents submitted with this application, for the purposes of this application.<br/>
7. I/We hereby authorize the Bank to disclose any information of myself/ourselves and/or data relating to myself/ourselves to the Vendor (Seller), Supplier and/or Dealer (all referred to over leaf) by phone, electronic mail, short messaging service (SMS) or any other means of communication which the Bank deems appropriate, for the purposes of this application.<br/>
8. I/We confirm that I/we have read and understood the Bank’s Privacy Notice (Individual) (available at www.uob.com.sg and the Bank’s branches) which forms part of the terms and conditions governing my/our relationship with the Bank. I/We consent to the Bank collecting, using and disclosing my/our personal data for Basic Banking Purposes, Co-branding Purpose, Research Purpose and Marketing Purpose as described in the Bank’s Privacy Notice (Individual). I/We note that (a) I/we may withdraw consent for any or all of the purposes
at any time; (b) if I/we withdraw consent for Basic Banking Purposes and/or Co-branding Purpose, the Bank may not be able to continue to provide the products and services to me/us; (c) if I/we withdraw consent for Research Purpose and Marketing Purpose, my/our personal data will not be used for these purposes unless I/we expressly and separately consent to the same again.<br/>
					</td>
				</tr>
				<tr>
					<td style="height: 70px;vertical-align: bottom;text-align: center;">
						<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$uobdata->signof_guarantor)); ?>" class="img-responsive" style="width:100px;height: 30px;"><?php echo $uobdata->sign_date_gurantor1;?><br/>
						Guarantor 1 Signature / Date
					</td>
					<td style="height: 70px;vertical-align: bottom;text-align: center;">
						
						Guarantor 2 Signature / Date
					</td>
				</tr>
		</table>
	</div>
</div>
</body>
</html>