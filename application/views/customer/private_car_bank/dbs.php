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
				<img src="<?=base_url()?>/assets/images/dbs-logo.jpg" style="width: 120px;">
			</div>
		</div>
		<div class="col-sm-12" style="margin-top:-65px;margin-bottom: -10px;">

			<p style="text-align: right;font-weight: bold;">
				<img src="<?=base_url()?>/assets/images/R78.jpg" style="width: 50px;"><br/>
			<span style="font-size: 18px !important;">Auto Loans</span></p>
			<p style="font-size:10px !important;border:1px solid #797777;padding:5px;">Access to credit report: You may obtain a free credit report within 30 calendar days from the date of approval or rejection of this application. There are two ways to obtain a free credit report. You can go to the credit bureau website listed below or bring your approval or rejection letter and your original NRIC to the credit bureau’s registered offi ce. Credit Bureau (Singapore) Pte Ltd is located at 2 Shenton Way #20-02 SGX Centre 1 Singapore 068804 Tel: (65) 6565 6363 Website: www.creditbureau.com.sg</p>
		</div>

		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td style="border-bottom:1px solid #797777;vertical-align: top;">
					<b>Please enclose the following documents with your application:</b><br/>
					• Copy of your NRIC (front and back) or passport with validity of more than 6 months<br/>
					• Proof of income (refer to the right)<br/>
					• Copy of Vehicle Sales & Purchase Agreement<br/>
					<b>Additional documents to be submitted:</b><br/>
					<span>
						<?php if($customerdata->additional_docu=="For Foreigners"){ ?>
							<span style="font-size: 14px">&#9745;</span> For foreigners: Copy of Work Permit with validity of more than 6 months
						<?php }else{ ?>
							□ For foreigners: Copy of Work Permit with validity of more than 6 months
						<?php } ?>					
					</span><br/>
					<span>
						<?php if($customerdata->additional_docu=="For use vehicles purchase"){ ?>
							<span style="font-size: 14px">&#9745;</span> For used vehicle purchase: Copy of LTA Acknowledgement
						<?php }else{ ?>
							□ For used vehicle purchase: Copy of LTA Acknowledgement
						<?php } ?>					
					</span><br/>
					<b>If you have rental income:</b><br/>
						<span>
							<?php if($customerdata->rental_income=="Latest Income Tax Notice"){ ?>
								<span style="font-size: 14px">&#9745;</span> Latest Income Tax Notice of Assessment OR
							<?php }else{ ?>
								□ Latest Income Tax Notice of Assessment OR
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->rental_income=="Copy of signed Tenancy Agreement"){ ?>
								<span style="font-size: 14px">&#9745;</span> Copy of signed Tenancy Agreement
							<?php }else{ ?>
								□ Copy of signed Tenancy Agreement
							<?php } ?>					
						</span>
					
				</td>
				<td style="border-bottom:1px solid #797777">
					<b>Proof of income:</b><br/>
						• For Salaried employee:<br/>
						<span>
							<?php if($customerdata->proofincome_salaryincome=="Latest computerised payslip OR"){ ?>
								<span style="font-size: 14px">&#9745;</span> Latest computerised payslip, OR
							<?php }else{ ?>
								□ Latest computerised payslip, OR
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->proofincome_salaryincome=="Last 3 months CPF Contribution History OR"){ ?>
								<span style="font-size: 14px">&#9745;</span> Last 12 months’ CPF Contribution History OR
							<?php }else{ ?>
								□ Last 12 months’ CPF Contribution History OR
							<?php } ?>					
						</span><br/>
						<span>
							<?php if($customerdata->proofincome_salaryincome=="Latest Income Tax Notice of Assessment"){ ?>
								<span style="font-size: 14px">&#9745;</span> Latest Income Tax Notice of Assessment
							<?php }else{ ?>
								□ Latest Income Tax Notice of Assessment
							<?php } ?>					
						</span><br/>

						• For self-employed and commission earners:<br/>
						<span>
							<?php if($customerdata->proofincome_selfemply=="Latest 2years Income Tax Notice of Assessment"){ ?>
								<span style="font-size: 14px">&#9745;</span> Latest 2years Income Tax Notice of Assessment
							<?php }else{ ?>
								□ Latest 2years Income Tax Notice of Assessment
							<?php } ?>					
						</span><br/>
						• For Companies:<br/>
						<span>
							<?php if($customerdata->proofincome_company=="Memorandum and Articles of Association"){ ?>
								<span style="font-size: 14px">&#9745;</span> Memorandum and Articles of Association
							<?php }else{ ?>
								□ Memorandum and Articles of Association
							<?php } ?>					
						</span> and Bank Statements for the last 3 months (if operating account is not maintained with DBS)<br/>
						You can now print your Notices of Assessment at myTax Portal with your SingPass or IRAS PIN.
				</td>
			</tr>
			<tr>
				<td>
					Please indicate: 
					<span>
						<?php if($customerdata->indicate=="OMV S$20,000, max LTV 70%"){ ?>
							<span style="font-size: 14px">&#9745;</span> OMV S$20,000, max LTV 70%
						<?php }else{ ?>
							□ OMV S$20,000, max LTV 70%
						<?php } ?>					
					</span> , 
					<span>
						<?php if($customerdata->indicate=="OMV S$20,000, max LTV 60%"){ ?>
							<span style="font-size: 14px">&#9745;</span> OMV S$20,000, max LTV 60%
						<?php }else{ ?>
							□ OMV S$20,000, max LTV 60%
						<?php } ?>					
					</span>
				</td>
			</tr>
		</table>

		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="4" style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">PERSONAL PARTICULARS</td>
			</tr>
			<tr>
				<td colspan="2" style="width: 230px;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Main Applicant
				</td>
				<td style="border-bottom:1px solid #797777">
					<span>
						<?php if($customerdata->applicant_type=="Joint Applicant"){ ?>
							<span style="font-size: 14px">&#9745;</span> Joint Applicant
						<?php }else{ ?>
							□ Joint Applicant 
						<?php } ?>					
					</span>
				</td>
				<td style="border-bottom:1px solid #797777">
					<span>
						<?php if($customerdata->applicant_type=="Guarantor"){ ?>
							<span style="font-size: 14px">&#9745;</span> Guarantor (Please tick one)
						<?php }else{ ?>
							□ Guarantor (Please tick one)
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Salutation <br/>
					<span>
						<?php if($customerdata->main_salutation=="Dr"){ ?>
							<span style="font-size: 14px">&#9745;</span> Dr
						<?php }else{ ?>
							□ Dr 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_salutation=="Mr"){ ?>
							<span style="font-size: 14px">&#9745;</span> Mr
						<?php }else{ ?>
							□ Mr 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_salutation=="Mdm"){ ?>
							<span style="font-size: 14px">&#9745;</span> Mdm
						<?php }else{ ?>
							□ Mdm 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_salutation=="Mrs"){ ?>
							<span style="font-size: 14px">&#9745;</span> Mrs
						<?php }else{ ?>
							□ Mrs 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_salutation=="Ms"){ ?>
							<span style="font-size: 14px">&#9745;</span> Ms
						<?php }else{ ?>
							□ Ms 
						<?php } ?>					
					</span>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Marital Status <br/>
					<span>
						<?php if($customerdata->marital_status=="Single"){ ?>
							<span style="font-size: 14px">&#9745;</span> Single
						<?php }else{ ?>
							□ Single 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->marital_status=="Married"){ ?>
							<span style="font-size: 14px">&#9745;</span> Married
						<?php }else{ ?>
							□ Married 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->marital_status=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							□ Others 
						<?php } ?>					
					</span>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Salutation <br/>
					<span>
						<?php if($customerdata->joint_salutation=="Dr"){ ?>
							<span style="font-size: 14px">&#9745;</span> Dr
						<?php }else{ ?>
							□ Dr 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_salutation=="Mr"){ ?>
							<span style="font-size: 14px">&#9745;</span> Mr
						<?php }else{ ?>
							□ Mr 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_salutation=="Mdm"){ ?>
							<span style="font-size: 14px">&#9745;</span> Mdm
						<?php }else{ ?>
							□ Mdm 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_salutation=="Mrs"){ ?>
							<span style="font-size: 14px">&#9745;</span> Mrs
						<?php }else{ ?>
							□ Mrs 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_salutation=="Ms"){ ?>
							<span style="font-size: 14px">&#9745;</span> Ms
						<?php }else{ ?>
							□ Ms 
						<?php } ?>					
					</span>
				</td>
				<td style="border-bottom:1px solid #797777">
					Marital Status <br/>
					<span>
						<?php if($customerdata->guarantor_marital_status=="Single"){ ?>
							<span style="font-size: 14px">&#9745;</span> Single
						<?php }else{ ?>
							□ Single 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guarantor_marital_status=="Married"){ ?>
							<span style="font-size: 14px">&#9745;</span> Married
						<?php }else{ ?>
							□ Married 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->guarantor_marital_status=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							□ Others 
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height: 35px;border-right: 1px solid #797777;border-bottom:1px solid #797777;vertical-align: top;">
				Full Name as in NRIC/Passport (underline surname) / ACRA for Companies <br/><?php echo $customerdata->name;?>
				</td>
				<td colspan="2" style="border-bottom:1px solid #797777;vertical-align: top;">
					Full Name as in NRIC/Passport (underline surname) <br/><?php echo $customerdata->guarantor_name;?>
				</td>
			</tr>
			<tr>
				<td style="height: 35px;border-right: 1px solid #797777;border-bottom:1px solid #797777;vertical-align: top;">
					NRIC/Passport No. /Company Reg. No. <br/><?php echo $customerdata->nric;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;vertical-align: top;">
					Date of Birth (dd/mm/yyyy) <br/><?php echo $customerdata->dob;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777;vertical-align: top;">
					NRIC/Passport No. <br/><?php echo $customerdata->guarantor_nric;?>
				</td>
				<td style="border-bottom:1px solid #797777;vertical-align: top;">
					Date of Birth (dd/mm/yyyy) <br/><?php echo $customerdata->guarantor_dob;?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Nationality <br/>
					<span>
						<?php if($customerdata->main_nationality=="Singaporean/Singapore PR"){ ?>
							<span style="font-size: 14px">&#9745;</span> Singaporean/Singapore PR
						<?php }else{ ?>
							□ Singaporean/Singapore PR 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_nationality=="Malaysian"){ ?>
							<span style="font-size: 14px">&#9745;</span> Malaysian
						<?php }else{ ?>
							□ Malaysian 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_nationality=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							□ Others 
						<?php } ?>					
					</span>
					<br/>
					Other Nationality: <?php echo $customerdata->main_other_nationality;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Nationality <br/>
					<span>
						<?php if($customerdata->joint_nationality=="Singaporean/Singapore PR"){ ?>
							<span style="font-size: 14px">&#9745;</span> Singaporean/Singapore PR
						<?php }else{ ?>
							□ Singaporean/Singapore PR 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_nationality=="Malaysian"){ ?>
							<span style="font-size: 14px">&#9745;</span> Malaysian
						<?php }else{ ?>
							□ Malaysian 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_nationality=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							□ Others 
						<?php } ?>					
					</span>
					<br/>
					Other Nationality: <?php echo $customerdata->joint_other_nationality;?>
				</td>
				<td style="border-bottom:1px solid #797777">
					Relationship with Main Applicant <br/>
					<span>
						<?php if($customerdata->joint_relationship=="Spouse"){ ?>
							<span style="font-size: 14px">&#9745;</span> Spouse
						<?php }else{ ?>
							□ Spouse 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_relationship=="Parent"){ ?>
							<span style="font-size: 14px">&#9745;</span> Parent
						<?php }else{ ?>
							□ Parent 
						<?php } ?>					
					</span>
					<br/>
					<span>
						<?php if($customerdata->joint_relationship=="Sibling"){ ?>
							<span style="font-size: 14px">&#9745;</span> Sibling
						<?php }else{ ?>
							□ Sibling 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_relationship=="Children"){ ?>
							<span style="font-size: 14px">&#9745;</span> Children
						<?php }else{ ?>
							□ Children 
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height: 40px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Residential Address: <?php echo $customerdata->address;?>
				</td>
				<td colspan="2" style="vertical-align: top;border-bottom:1px solid #797777">
					Residential Address: <?php echo $customerdata->guarantor_address;?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Mailing Address (if different from above) : <?php echo $customerdata->main_mailingaddress;?>
				</td>
				<td colspan="2" style="vertical-align: top;border-bottom:1px solid #797777">
					Mailing Address (if different from above): <?php echo $customerdata->joint_mailingaddress;?>
				</td>
			</tr>
			<tr>
				<td style="height: 25px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Mobile No.: <?php echo $customerdata->main_mobileno;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Home/Office No.: <?php echo $customerdata->main_homeno;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Mobile No.: <?php echo $customerdata->joint_mobileno;?>
				</td>
				<td style="vertical-align: top;border-bottom:1px solid #797777">
					Home/Office No.: <?php echo $customerdata->joint_homeno;?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Email Address: <?php echo $customerdata->email;?>
				</td>
				<td colspan="2" style="vertical-align: top;border-bottom:1px solid #797777">
					Email Address: <?php echo $customerdata->guarantor_email;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="4" style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">EMPLOYMENT DETAILS</td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Employment Status 
					<span>
						<?php if($customerdata->main_emplystatus_type=="Employee"){ ?>
							<span style="font-size: 14px">&#9745;</span> Employee
						<?php }else{ ?>
							□ Employee 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_emplystatus_type=="Self-Employed"){ ?>
							<span style="font-size: 14px">&#9745;</span> Self-Employed
						<?php }else{ ?>
							□ Self-Employed 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_emplystatus_type=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							□ Others <span style="text-decoration: underline"><?php echo $customerdata->main_emplystatus_other;?></span>
						<?php } ?>					
					</span>
				</td>
				<td colspan="2" style="border-bottom:1px solid #797777">
					Employment Status 
					<span>
						<?php if($customerdata->joint_emplystatus_type=="Employee"){ ?>
							<span style="font-size: 14px">&#9745;</span> Employee
						<?php }else{ ?>
							□ Employee 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_emplystatus_type=="Self-Employed"){ ?>
							<span style="font-size: 14px">&#9745;</span> Self-Employed
						<?php }else{ ?>
							□ Self-Employed 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_emplystatus_type=="Others"){ ?>
							<span style="font-size: 14px">&#9745;</span> Others
						<?php }else{ ?>
							□ Others <span style="text-decoration: underline"><?php echo $customerdata->joint_emplystatus_other;?></span>
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height: 40px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Company Name & Address: <?php echo $customerdata->cmy_name;?> / <?php echo $customerdata->cmy_address;?>
				</td>
				<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Company Name & Address: <?php echo $customerdata->guarantor_cmyname;?> / <?php echo $customerdata->guarantor_cmyaddress;?>
				</td>
			</tr>
			<tr>
				<td style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Occupation: <br/>
					<?php echo $customerdata->main_occupation;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Length of Service <br/>
					<?php
	                    $lengthofservice = explode(',', $customerdata->main_lengthofservice);
	                ?>
	                <span style="text-decoration: underline;"><?php echo $lengthofservice[0];?> </span>yrs
	                <span style="text-decoration: underline;"><?php echo $lengthofservice[1];?> </span>mths
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Occupation:  <br/>
					<?php echo $customerdata->joint_occupation;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Length of Service <br/>
					<?php
	                    $jointlengthofservice = explode(',', $customerdata->joint_lengthofservice);
	                ?>
	                <span style="text-decoration: underline;"><?php echo $jointlengthofservice[0];?> </span>yrs
	                <span style="text-decoration: underline;"><?php echo $jointlengthofservice[1];?> </span>mths
				</td>
			</tr>
			<tr>
				<td style="height: 40px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Monthly Fixed Income <br/>
					S$ <?php echo $customerdata->main_monthincome;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Other Monthly Income & Source <br/>
					S$ <?php echo $customerdata->main_otherincome;?> / <?php echo $customerdata->main_othersource;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Monthly Fixed Income <br/>
					S$ <?php echo $customerdata->joint_monthincome;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Other Monthly Income & Source <br/>
					S$ <?php echo $customerdata->joint_otherincome;?> / <?php echo $customerdata->joint_othersource;?>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Salary-crediting to DBS/POSB Account
					<span>
						<?php if($customerdata->main_salarycredit=="Yes"){ ?>
							<span style="font-size: 14px">&#9745;</span> Yes
						<?php }else{ ?>
							□ Yes 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_salarycredit=="No"){ ?>
							<span style="font-size: 14px">&#9745;</span> No
						<?php }else{ ?>
							□ No 
						<?php } ?>					
					</span>
				</td>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Salary-crediting to DBS/POSB Account
					<span>
						<?php if($customerdata->joint_salarycredit=="Yes"){ ?>
							<span style="font-size: 14px">&#9745;</span> Yes
						<?php }else{ ?>
							□ Yes 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_salarycredit=="No"){ ?>
							<span style="font-size: 14px">&#9745;</span> No
						<?php }else{ ?>
							□ No 
						<?php } ?>					
					</span>
				</td>
			</tr>
			<tr>
				<td colspan="2" style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Name of Previous Employer / Business (if current employment is < 1 yr) <br/>
					<?php echo $customerdata->main_prev_emplyname;?>
				</td>
				<td colspan="2" style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Name of Previous Employer / Business (if current employment is < 1 yr) <br/>
					<?php echo $customerdata->joint_prev_emplyname;?>
				</td>
			</tr>
			<tr>
				<td style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Previous Occupation: <br/>
					<?php echo $customerdata->main_prev_occupation;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Length of Service <br/>
					<?php
	                    $lengthofservice = explode(',', $customerdata->main_prev_lengthofservice);
	                ?>
	                <span style="text-decoration: underline;"><?php echo $lengthofservice[0];?> </span>yrs
	                <span style="text-decoration: underline;"><?php echo $lengthofservice[1];?> </span>mths
				</td>
				<td style="height: 35px;vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Previous Occupation:  <br/>
					<?php echo $customerdata->joint_prev_occupation;?>
				</td>
				<td style="vertical-align: top;border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Length of Service <br/>
					<?php
	                    $jointlengthofservice = explode(',', $customerdata->joint_prev_lengthofservice);
	                ?>
	                <span style="text-decoration: underline;"><?php echo $jointlengthofservice[0];?> </span>yrs
	                <span style="text-decoration: underline;"><?php echo $jointlengthofservice[1];?> </span>mths
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="6" style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">FINANCIAL COMMITMENTS</td>
			</tr>
			<tr>
				<td style="width:16.7%">
					Type of Facilities (Housing Loan, Car Loan, etc.)<br/>
					
				</td>
				<td style="vertical-align: top;width:16.7%">
					Financial Institution<br/>
					
				</td>
				<td style="width:16.7%;border-right: 1px solid #797777;vertical-align: top;">
					Monthly Repayment<br/>
					
				</td>

				<td style="width:16.7%">
					Type of Facilities (Housing Loan, Car Loan, etc.)<br/>
					
				</td>
				<td style="width:16.7%;vertical-align: top;">
					Financial Institution<br/>
					
				</td>
				<td style="width:16.7%;vertical-align: top;">
					Monthly Repayment<br/>
					
				</td>
			</tr>
			<tr>
				<td style="height:25%">1.___________________</td>
				<td>___________________</td>
				<td style="border-right: 1px solid #797777;vertical-align: top;">
					___________________
				</td>
				<td style="height:25%">1.___________________</td>
				<td>___________________</td>
				<td>___________________</td>
			</tr>
			<tr>
				<td style="height:25%">2.___________________</td>
				<td>___________________</td>
				<td style="border-right: 1px solid #797777;vertical-align: top;">
					___________________
				</td>
				<td style="height:25%">2.___________________</td>
				<td>___________________</td>
				<td>___________________</td>
			</tr>
			<tr>
				<td style="height:25%">3.___________________</td>
				<td>___________________</td>
				<td style="border-right: 1px solid #797777;vertical-align: top;">
					___________________
				</td>
				<td style="height:25%">3.___________________</td>
				<td>___________________</td>
				<td>___________________</td>
			</tr>
			<tr>
				<td colspan="3" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Trading-in existing car?
					<span>
						<?php if($customerdata->main_trading=="Yes"){ ?>
							<span style="font-size: 14px">&#9745;</span> Yes
						<?php }else{ ?>
							□ Yes 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->main_trading=="No"){ ?>
							<span style="font-size: 14px">&#9745;</span> No
						<?php }else{ ?>
							□ No 
						<?php } ?>					
					</span>
				</td>
				<td colspan="3" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Trading-in existing car?
					<span>
						<?php if($customerdata->joint_trading=="Yes"){ ?>
							<span style="font-size: 14px">&#9745;</span> Yes
						<?php }else{ ?>
							□ Yes 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->joint_trading=="No"){ ?>
							<span style="font-size: 14px">&#9745;</span> No
						<?php }else{ ?>
							□ No 
						<?php } ?>					
					</span>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="4" style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">VEHICLE INFORMATION</td>
			</tr>
			<tr>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Vehicle Type: 
					<span>
						<?php if($customerdata->vehicle_type=="New"){ ?>
							<span style="font-size: 14px">&#9745;</span> New
						<?php }else{ ?>
							□ New 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->vehicle_type=="Used"){ ?>
							<span style="font-size: 14px">&#9745;</span> Used
						<?php }else{ ?>
							□ Used 
						<?php } ?>					
					</span>
					<span>
						<?php if($customerdata->vehicle_type=="Light Commercial Vehicle"){ ?>
							<span style="font-size: 14px">&#9745;</span> Light Commercial Vehicle
						<?php }else{ ?>
							□ Light Commercial Vehicle 
						<?php } ?>					
					</span>
				</td>
				<td colspan="2" style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					If you are refinancing your used vehicle, please state: <br/>
					<?php echo $customerdata->refinancing_vehicle;?>
				</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Purchase Price S$ <br/>
					<?php echo $customerdata->purchase_price;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Make/ Model<br/>
					<?php echo $customerdata->make;?> <?php echo $customerdata->model;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Financing Institution<br/>
					<?php echo $customerdata->finance_institution;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					First Disbursement Date<br/>
					<?php echo $customerdata->first_disburse_date;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;margin-top: 20px;">
			<tr>
				<td style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">LOAN SERVICING ACCOUNT</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Please debit my DBS/POSB Account No: <span style="text-decoration: underline;"><?php echo $customerdata->dbs_accountno;?></span> for my monthly repayments and all other sums due and owing once application is approved. (Note: POSB Current Account and Joint-all Account for single application are not applicated)
				</td>
				
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="3" style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">FINANCIAL REQUEST</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Amount Required S$ <br/>
					<?php echo $customerdata->amount_required;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Repayment Period <br/>
					<span style="text-decoration: underline;"><?php echo $customerdata->repayment_period;?></span> mths
				</td>
				<td style="border-right: 1px solid #797777;border-bottom:1px solid #797777">
					Applied Interest Rate <br/>
					<?php echo $customerdata->applied_interest_rate;?>
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;font-size: 9.3px !important;">
			<tr>
				<td colspan="2" style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">BENEFITS & CREDIT FACILITIES RECEIVED</td>
			</tr>
			<tr>
				<td style="width: 15px;vertical-align: top;">
					1.
				</td>
				<td>
					Did you receive any discount, rebate or any other benefit from the vendor? (e.g. vehicle servicing/maintenance package, petrol/shopping vouchers, cash discount etc.)<br/>
					□ Yes ,the type of benefit(s) I/we received is/are ___________________ and amount received/value of the item is S$ ___________________<br/>
					□ No, I/we did not receive any benefit(s).
				</td>
			</tr>
			<tr>
				<td style="width: 15px;border-bottom:1px solid #797777;vertical-align: top;">					
					2. 
				</td>
				<td>
					Did you obtain any other credit facility for the purchase of the motor vehicle?<br/>
					□ Yes, the type of credit facility(ies) I/we received is/are ___________________ and amount received is S$ ___________________ <br>
								
					□ No, I/we did not obtain any credit facility.
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;font-size: 9.3px !important;">
			<tr>
				<td style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">DECLARATION BY HIRER(S) / GUARANTOR</td>
			</tr>
			<tr>
				<td>
					<span style="font-weight: bold;">BY HIRER(S): </span> <br/>
					1. I am/We are of full age and am/are not bound or affected by any legal impediment from entering into a Hire Purchase Agreement with you or from driving any vehicle.
2. I/We hereby declare that no person whom I intend to authorise to drive the vehicle is bound or affected by any legal impediment from driving any vehicle.<br/>
3. I/We agree that this facility is granted by you in reliance upon my/our representations as declared herein and such other correspondence between us in relation thereto.
If what I/we have told you is incomplete or inaccurate in any way, I/we agree that you reserve the right to reduce, cancel or not approve the facility.<br/>
4. I/We undertake to pay any and all out-of-pocket expenses and/or charges including cancellation fees incurred in relation to my/our loan application when my/our loan
application is approved.<br/>
5. I/We understand that you reserve the right to decline the application without giving any reason(s) whatsoever.<br/>
6. I/We consent to the Bank distributing, disclosing or using the Standard Vehicle Assessment Report or its equivalent (duly filled and signed by me/us and the car dealer),
for such purpose as it deems necessary in connection with this application and the loan.<br/>
7. I/We undertake to provide you with the actual Open Market Value (OMV) of the vehicle upon registration of the said vehicle.<br/>
8. I/We undertake to provide you with documents in such form satisfactory to you (including where applicable to you, documents evidencing the date of the agreement to purchase/hire the vehicle, or the date on which I/we had successfully bid for a Certificate Of Entitlement (COE), or the original registration date and the first registration date of the vehicle, or in the case of refinancing or subsequent hire purchase facility documents evidencing the First Disbursement as defined under clause 11 herein) that you may reasonably require for the purpose of this application.<br/>
9. Except as already disclosed to you, I/we declare that I/we have not received any discount, rebate or any other benefit from the vendor or any other person, which has the effect of reducing the True Purchase Price (as defined in MAS 642 dated 25 Feb 13 and as may be replaced, supplemented or amended from time to time).<br/>
10. Except as already disclosed to you, I/we have not obtained any other credit facility for the purchase or hire of the vehicle.<br/>
11. Where I/we am/are applying for a refinancing facility or subsequent hire purchase in respect of any balance outstanding under a loan for the purchase of a vehicle or the balance outstanding under a refinancing facility in respect of that vehicle, I/we acknowledge that you will not be able to grant to *me/us a loan tenor in respect of the refinancing or subsequent hire purchase facility that exceeds 5 years (“Refinancing Tenor”). The Refinancing Tenor is arrived at by taking the sum of the tenor of the refinancing or subsequent hire purchase facility and the number of years since the first disbursement (“First Disbursement”) of that vehicle loan first granted to me/us for the purchase of that vehicle. I/We declare that the First Disbursement date as provided by me/us to you herein is true and accurate.<br/>
12. Except as already disclosed to you, I am not a physically disabled person or a caregiver of a physically disabled person (both as defined in MAS 642 dated 8 Mar 13 and as may be replaced, supplemented or amended from time to time).<br/>
13. In the event that I am a physically disabled person or a caregiver of a physically disabled person (both as defined in MAS 642 dated 8 Mar 13 and as may be replaced, supplemented or amended from time to time), I acknowledge that paragraphs 7, 9, 10 and 11 herein will not apply.<br/>
<br/>
<span style="font-weight: bold;">BY HIRER(S) AND GUARANTOR: </span> <br/>
14. I/We hereby authorise you to enquire from my/our employer(s), particulars of my/our employment with my/our employer(s) and to obtain and verify such further information about me/us as you deem necessary, for the purposes of this application.<br/>
15. I/We authorise you to obtain and/or verify and/or disclose and/or release any information about me/us and/or any information or any particulars of my/our accounts and credit facilities from/with such party or person(s) as you deem necessary for the purposes of this application.<br/>
16. I/We hereby authorise and give you consent to conduct credit checks on me/us (including but not limited to checks with any credit bureau recognized as such by the Monetary Authority of Singapore) and to obtain, verify and/or to disclose or release any information relating to me/us and/or any of my/our account(s) with you from/
with/to any other party or person(s) as you deem necessary for the purposes of this application.<br/>
17. My/Our signing hereunder shall constitute my/our written consent for any such disclosure for the purposes of Section 47 of the Banking Act or any other disclosure imposed by law.<br/>
18. Applicable where:<br/>
i) Purchase Price of Vehicle less COE is S$55,000 and below I/We acknowledge and confirm that before I/we sign this application form, I/we have pursuant to the provisions of the Hire Purchase Act, Cap.125 received a
written statement from the dealer/supplier, or its servant or agent (“Dealer”), which contains the items set out in the Second Schedule to the Act and have read and agree to be bound by the terms therein which have been explained to me/us by the Dealer. I/We further acknowledge that I/we have read and agree to be
bound by the terms in this application form and in the Hire Purchase Agreement.<br/>
ii) Purchase Price of Vehicle less COE is above S$55,000 I/We acknowledge that I/we have read and agree to be bound by the terms in this application form and in the Hire Purchase Agreement.<br/>
19. I/We authorize you (i) to disclose any information provided by me/us in relation to this application, or (ii) to provide this application form duly filled and signed by me/us,
to any car dealership or such other third party that you in good faith deem it reasonable to make such disclosure for any purposes in connection with this application and the loan, or as may be required by any applicable law, court, regulatory or legal process, without any liability or notice to me/us.<br/>
20. If this application and such other form or instruction (“Instruction”) is or is purported to be given or sent by me/us to you by electronic or facsimile transmission, you are hereby authorized by me/us, but are not obliged to accept, rely upon and act in accordance with the electronic or facsimile copy of the Instruction, without waiting for the original Instruction and without any liability to me/us. In consideration of you agreeing to act on my/our authorization, I/we undertake to indemnify you against all liabilities, claims, demands, actions, proceedings, losses, damages, costs (including legal costs on a full indemnity basis), expenses and all other liabilities which you may directly or indirectly suffer.<br/>
21. If there is a cancellation or termination of the loan after the loan is disbursed or if the loan amount is settled in full before the end of the loan tenor, I/we acknowledge that the fees as stated in the Hire Purchase Agreement will be payable by me/us.<br/>
22. I/We further confirm that I/we have read and understood and hereby agree to be bound by the DBS Privacy Policy. I/We have obtained a copy of the DBS Privacy Policy by:<br/>
i) downloading a soft copy from http://www.dbs.com/privacy; or<br/>
ii) obtaining a hard copy from a DBS/POSB branch.<br/>
23. I/We hereby consent to the collection, use, disclosure and processing of my/our personal data in accordance with the terms and conditions governing the products and/or services applied for herein and the DBS Privacy Policy, as may be amended by the Bank from time to time.<br/>
24. I am the borrower of the loan and shall only use the loan for legal purposes.<br/>
25. I/We am/are aware that the Dealer, through whom this application was given to me/us or by whom the vehicle is to be/was supplied, is not an agent of the Bank for any purpose. The Bank shall not be liable for any acts and/or omissions made by any such person as aforesaid.<br/>
<br/>
<span style="font-weight: bold;">BY GUARANTOR: </span> <br/>
I agree to be the guarantor under this hire purchase facility and shall execute a guarantee and/or such other document(s) in such form acceptable to you.
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777;">
			<tr>
				<td colspan="2" style="background:#ec1b24;font-size:12px;font-weight:bold;text-align: center;color:#fff;">DECLARATION</td>
			</tr>
			<tr>
				<td colspan="2">
					By signing below, I/we confirm that I/we have read, understood and agree to be bound by the terms herein including the fees payable should I repay the loan before the end of the loan tenor. <br/>
				</td>
			</tr>
			<tr style="margin: 100px;">
				<td>
					<img src="<?php echo 'data:image/jpg;data:image/png;base64,'.base64_encode(file_get_contents('./upload/sign/'.$customerdata->signof_hirer)); ?>" class="img-responsive" style="width:130px;height:50px;"><br/>

					<span style="padding: 100px;border-top: 1px solid #000;">
					Signature of Main Applicant & Date </span><br/>
					<span style="font-size: 8px;">For Corporate application, please indicate name and NRIC/ Passport No. of authorised signatory.</span>
				</td>
				<td>
					<img src="<?php echo base_url() .'upload/sign/'.$customerdata->signof_guarantor;?>" class="gg" style="width:100px;height: 50px;"><br/>

					<span style="padding: 100px;border-top: 1px solid #000;">
					Signature of Joint Applicant/ Guarantor & Date</span>
				</td>
			</tr>
		</table>
	</div>
</div>
</body>
</html>