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
        .tbl_padding table tr td{
        	padding: 5px 10px;
        }
	</style>
</head>
<body>
<div id="container">
	<div id="body" class="row">
		<div class="col-sm-12" style="width:100%">
			<div class="col-sm-7 header" style="width:60%;">
				<p style="font-size: 10px !important;margin-left:60px">
					Hong Leong Finance Limited<br/>
					Head Office: 16 Raffles Quay #01-05 Hong Leong Building Singapore 048581
				</p>
				<img src="<?=base_url()?>/assets/images/hongkong-logo.png" style="width: 170px;">
			</div>
			<div class="col-sm-5" style="width:39%;text-align: right;margin-top: 30px !important;">
				<p style="font-size: 14px;">
					<b>Application Form For Hire Purchase</b>					
				</p>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width: 100%;padding:0px 5px;">
				<p style="font-size: 10px ;">
					If you wish to have a free credit report, you may obtain it within 30 calendar days from the date of approval or rejection of this application via the credit bureau website at www.creditbureau.com.sg. Alternatively, you may bring the approval or rejection letter and your NRIC to the credit bureau's registered office to obtain a free credit report at Credit Bureau (Singapore) Pte Ltd 2 Shenton Way #20-02 SGX Centre 1 Singapore 068804 Tel:(65) 65656363.
				</p>				
			</div>			
		</div><!-- end -->
		<div class="col-sm-12">
			<div class="col-sm-6" style="width:49%">
				<table style="width: 100%;border:1px solid #797777;">
					<tr>
						<td colspan="2" style="padding: 7px 0px;background:#231f20;font-size:10px;font-weight:bold;color:#fff;text-align: center;">MY PERSONAL INFORMATION (MAIN APPLICANT)</td>
					</tr>
					<tr>
						<td colspan="2" style="height: 60px;border-bottom:1px solid #797777">
							NAME OF APPLICANT (underline surname) <br/><br/>
							(Dr / Mr / Mdm / Mrs / Ms)* : <?php echo $hongleongdata->salutation;?> <?php echo $hongleongdata->name;?>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="border-bottom:1px solid #797777">
							NRIC / PASSPORT / CO CERT NO : <?php echo $hongleongdata->nric;?>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top;height: 50px;border-bottom:1px solid #797777;border-right:1px solid #797777">
							DATE OF BIRTH (DD/MM/YY) : <br/>
							<?php echo $hongleongdata->dob;?>
						</td>
						<td style="vertical-align: top;border-bottom:1px solid #797777">
							RACE <br/>
							<?php echo $hongleongdata->race;?>
						</td>
					</tr>
					<tr>
						<td style="height: 60px;vertical-align: top;border-bottom:1px solid #797777;border-right:1px solid #797777">
							NATIONALITY <br/>
							<span>
								<?php if($hongleongdata->nationality=="Singapore"){ ?>
									<span style="font-size: 14px">&#9745;</span> Singapore
								<?php }else{ ?>
									□ Singapore 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->nationality=="PR"){ ?>
									<span style="font-size: 14px">&#9745;</span> PR
								<?php }else{ ?>
									□ PR 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->nationality=="FOREIGNER"){ ?>
									<span style="font-size: 14px">&#9745;</span> FOREIGNER
								<?php }else{ ?>
									□ FOREIGNER 
								<?php } ?>					
							</span>
						</td>
						<td style="vertical-align: top;border-bottom:1px solid #797777">
							MARITAL STATUS <br/>
							<span>
								<?php if($hongleongdata->marital_status=="Single"){ ?>
									<span style="font-size: 14px">&#9745;</span> SINGLE
								<?php }else{ ?>
									□ SINGLE 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->marital_status=="Married"){ ?>
									<span style="font-size: 14px">&#9745;</span> MARRIED
								<?php }else{ ?>
									□ MARRIED 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->marital_status=="Others"){ ?>
									<span style="font-size: 14px">&#9745;</span> OTHERS
								<?php }else{ ?>
									□ OTHERS 
								<?php } ?>					
							</span>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="vertical-align: top;height: 40px;border-bottom:1px solid #797777">
							NAME OF SPOUSE (according to identity card) <br/>
							<?php echo $hongleongdata->nameof_spouse;?>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="vertical-align: top;height: 80px;border-bottom:1px solid #797777">
							HOME ADDRESS<br/>
							<?php echo $hongleongdata->address;?>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="vertical-align: top;height: 80px;border-bottom:1px solid #797777">
							MAILING ADDRESS (if different from above)<br/>
							<?php echo $hongleongdata->mailing_address;?>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="vertical-align: top;border-bottom:1px solid #797777">
							RESIDNECE 
							<span>
								<?php if($hongleongdata->residence=="OWN HOUSE"){ ?>
									<span style="font-size: 14px">&#9745;</span> OWN HOUSE
								<?php }else{ ?>
									□ OWN HOUSE 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->residence=="RENTED"){ ?>
									<span style="font-size: 14px">&#9745;</span> RENTED
								<?php }else{ ?>
									□ RENTED 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->residence=="OTHERS"){ ?>
									<span style="font-size: 14px">&#9745;</span> OTHERS
								<?php }else{ ?>
									□ OTHERS 
								<?php } ?>					
							</span>
						</td>
					</tr>
					<tr>
						<td style="height: 60px;border-bottom:1px solid #797777;">
							HOME: <?php echo $hongleongdata->home;?><br/><br/>
							OFFICE:  <?php echo $hongleongdata->office;?><br/><br/>
							EMAIL ADDRESS:<?php echo $hongleongdata->email;?>
						</td>
						<td style="border-bottom:1px solid #797777;vertical-align: top;">
							MOBILE: <?php echo $hongleongdata->mobile;?><br/><br/>
							PAGER: <?php echo $hongleongdata->pager;?>
						</td>
					</tr>
				</table>	
			</div>
			<div class="col-sm-6" style="width:49%;float:right">
				<table style="width: 100%;border:1px solid #797777;">
					<tr>
						<td colspan="2" style="padding: 7px 0px;background:#231f20;font-size:10px;font-weight:bold;color:#fff;text-align: center;">GUARANTOR INFORMATION</td>
					</tr>
					<tr>
						<td colspan="2" style="height: 60px;border-bottom:1px solid #797777">
							NAME OF APPLICANT (underline surname) <br/><br/>
							(Dr / Mr / Mdm / Mrs / Ms)*  : <?php echo $hongleongdata->guarantor_salutation;?> <?php echo $hongleongdata->guarantor_name;?>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="border-bottom:1px solid #797777">
							NRIC / PASSPORT / CO CERT NO : <?php echo $hongleongdata->guarantor_nric;?>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top;height: 50px;border-bottom:1px solid #797777;border-right:1px solid #797777">
							DATE OF BIRTH (DD/MM/YY) : <br/>
							<?php echo $hongleongdata->guarantor_dob;?>
						</td>
						<td style="vertical-align: top;border-bottom:1px solid #797777">
							RACE <br/>
							<?php echo $hongleongdata->guarantor_race;?>
						</td>
					</tr>
					<tr>
						<td style="height: 60px;vertical-align: top;border-bottom:1px solid #797777;border-right:1px solid #797777">
							NATIONALITY <br/>
							<span>
								<?php if($hongleongdata->guarantor_nationality=="Singapore"){ ?>
									<span style="font-size: 14px">&#9745;</span> Singapore
								<?php }else{ ?>
									□ Singapore 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->guarantor_nationality=="PR"){ ?>
									<span style="font-size: 14px">&#9745;</span> PR
								<?php }else{ ?>
									□ PR 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->guarantor_nationality=="FOREIGNER"){ ?>
									<span style="font-size: 14px">&#9745;</span> FOREIGNER
								<?php }else{ ?>
									□ FOREIGNER 
								<?php } ?>					
							</span>
						</td>
						<td style="vertical-align: top;border-bottom:1px solid #797777">
							MARITAL STATUS <br/>
							<span>
								<?php if($hongleongdata->guarantor_marital_status=="Single"){ ?>
									<span style="font-size: 14px">&#9745;</span> SINGLE
								<?php }else{ ?>
									□ SINGLE 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->guarantor_marital_status=="Married"){ ?>
									<span style="font-size: 14px">&#9745;</span> MARRIED
								<?php }else{ ?>
									□ MARRIED 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->guarantor_marital_status=="Others"){ ?>
									<span style="font-size: 14px">&#9745;</span> OTHERS
								<?php }else{ ?>
									□ OTHERS 
								<?php } ?>					
							</span>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="vertical-align: top;height: 40px;border-bottom:1px solid #797777">
							NAME OF SPOUSE (according to identity card) <br/>
							<?php echo $hongleongdata->guarantor_nameofspouse;?>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="vertical-align: top;height: 160px;border-bottom:1px solid #797777">
							HOME ADDRESS<br/>
							<?php echo $hongleongdata->guarantor_address;?>
						</td>
					</tr>
					<tr>
						<td colspan="2" style="vertical-align: top;border-bottom:1px solid #797777">
							RESIDNECE 
							<span>
								<?php if($hongleongdata->guarantor_residence=="OWN HOUSE"){ ?>
									<span style="font-size: 14px">&#9745;</span> OWN HOUSE
								<?php }else{ ?>
									□ OWN HOUSE 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->guarantor_residence=="RENTED"){ ?>
									<span style="font-size: 14px">&#9745;</span> RENTED
								<?php }else{ ?>
									□ RENTED 
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->guarantor_residence=="OTHERS"){ ?>
									<span style="font-size: 14px">&#9745;</span> OTHERS
								<?php }else{ ?>
									□ OTHERS 
								<?php } ?>					
							</span>
						</td>
					</tr>
					<tr>
						<td style="height: 60px;border-bottom:1px solid #797777;">
							HOME: <?php echo $hongleongdata->guarantor_home;?><br/><br/>
							OFFICE:  <?php echo $hongleongdata->guarantor_office;?><br/><br/>
							EMAIL ADDRESS:<?php echo $hongleongdata->guarantor_email;?>
						</td>
						<td style="border-bottom:1px solid #797777;vertical-align: top;">
							MOBILE: <?php echo $hongleongdata->guarantor_mobile;?><br/><br/>
							PAGER: <?php echo $hongleongdata->guarantor_pager;?>
						</td>
					</tr>
				</table>	
			</div>
		</div><!-- end -->
		<table style="width: 100%;border:1px solid #797777;margin-top: 0px;">
			<tr>
				<td style="padding: 7px 0px;background:#231f20;font-size:10px;font-weight:bold;color:#fff;text-align: center;">INCOME DECLARATION</td>
			</tr>
		</table>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width:49%">
				<table style="width: 100%;border:1px solid #797777;">
					<tr>
						<td style="height: 40px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							CURRENT EMPLOYER <br/>
							<?php echo $hongleongdata->current_employer;?>
						</td>
						<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							SELF-EMPLOYED<br/>
							<?php echo $hongleongdata->self_employed;?>
						</td>
					</tr>	
					<tr>
						<td colspan="2" style="height: 80px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							COMPANY ADDRESS<br/>
							<?php echo $hongleongdata->cmy_address;?>
						</td>
					</tr>
					<tr>
						<td style="height: 40px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							DESIGNATION<br/>
							<?php echo $hongleongdata->designation;?>
						</td>
						<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							SINCE WHEN/HOW LONG<br/>
							<?php echo $hongleongdata->period;?>
						</td>
					</tr>	
					<tr>
						<td style="height: 40px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							NETT MONTHLY SALARY <br/>
							S$ <?php echo $hongleongdata->month_income;?>
						</td>
						<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							OTHER MONTHLY SALARY <br/>
							S$ <?php echo $hongleongdata->other_salary;?>
						</td>
					</tr>	
					<tr>
						<td style="height: 40px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							NAME OF PREVIOUS EMPLOYER <br/>
							S$ <?php echo $hongleongdata->prev_emplyname;?>
						</td>
						<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							SINCE WHEN/HOW LONG <br/>
							S$ <?php echo $hongleongdata->prev_period;?>
						</td>
					</tr>		
				</table>	
			</div>
			<div class="col-sm-6" style="width:49%;float:right">
				<table style="width: 100%;border:1px solid #797777;">
					<tr>
						<td style="height: 40px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							CURRENT EMPLOYER <br/>
							<?php echo $hongleongdata->guarantor_current_employer;?>
						</td>
						<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							SELF-EMPLOYED<br/>
							<?php echo $hongleongdata->guarantor_self_employed;?>
						</td>
					</tr>	
					<tr>
						<td colspan="2" style="height: 80px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							COMPANY ADDRESS<br/>
							<?php echo $hongleongdata->guarantor_cmyaddress;?>
						</td>
					</tr>
					<tr>
						<td style="height: 40px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							DESIGNATION<br/>
							<?php echo $hongleongdata->guarantor_designation;?>
						</td>
						<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							SINCE WHEN/HOW LONG<br/>
							<?php echo $hongleongdata->guarantor_period;?>
						</td>
					</tr>	
					<tr>
						<td style="height: 40px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							NETT MONTHLY SALARY <br/>
							S$ <?php echo $hongleongdata->guarantor_monthincome;?>
						</td>
						<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							OTHER MONTHLY SALARY <br/>
							S$ <?php echo $hongleongdata->guarantor_other_salary;?>
						</td>
					</tr>	
					<tr>
						<td style="height: 40px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							NAME OF PREVIOUS EMPLOYER <br/>
							S$ <?php echo $hongleongdata->guarantor_prev_emplyname;?>
						</td>
						<td style="vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777">
							SINCE WHEN/HOW LONG <br/>
							S$ <?php echo $hongleongdata->guarantor_prev_period;?>
						</td>
					</tr>		
				</table>	
			</div>
		</div><!-- end -->
		<table style="width: 100%;border:1px solid #797777;margin-top: 0px;">
			<tr>
				<td style="padding: 7px 0px;background:#231f20;font-size:10px;font-weight:bold;color:#fff;text-align: center;">FINANCIAL COMMENTS</td>
			</tr>
		</table>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width:49%">
				<table style="width: 100%;border:1px solid #797777;">
					<tr>
						<td style="border-bottom:1px solid #797777">
							FINANCIAL INSTITUTION / TYPE OF LOAN
						</td>
						<td style="border-bottom:1px solid #797777;">
							MONTHLY REPAYMENT
						</td>
					</tr>
					<tr>
						<td style="height: 25px;border-bottom:1px solid #797777">
							1. <?php echo $hongleongdata->financial_institution;?>
						</td>
						<td style="border-bottom:1px solid #797777">
							$ <?php echo $hongleongdata->month_repayment;?>
						</td>
					</tr>
					<tr>
						<td style="height: 25px;border-bottom:1px solid #797777">
							2. 
						</td>
						<td style="border-bottom:1px solid #797777">
							$  
						</td>
					</tr>
					<tr>
						<td style="height: 25px;border-bottom:1px solid #797777">
							3. 
						</td>
						<td style="border-bottom:1px solid #797777">
							$  
						</td>
					</tr>
					<tr>
						<td colspan="2" style="height: 25px;border-bottom:1px solid #797777">
							
						</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-6" style="width:49%;float:right">
				<table style="width: 100%;border:1px solid #797777;">
					<tr>
						<td style="border-bottom:1px solid #797777">
							FINANCIAL INSTITUTION / TYPE OF LOAN
						</td>
						<td style="border-bottom:1px solid #797777;">
							MONTHLY REPAYMENT
						</td>
					</tr>
					<tr>
						<td style="height: 25px;border-bottom:1px solid #797777">
							1. <?php echo $hongleongdata->guarantor_financial_institution;?>
						</td>
						<td style="border-bottom:1px solid #797777">
							$ <?php echo $hongleongdata->guarantor_month_repayment;?>
						</td>
					</tr>
					<tr>
						<td style="height: 25px;border-bottom:1px solid #797777">
							2. 
						</td>
						<td style="border-bottom:1px solid #797777">
							$  
						</td>
					</tr>
					<tr>
						<td style="height: 25px;border-bottom:1px solid #797777">
							3. 
						</td>
						<td style="border-bottom:1px solid #797777">
							$  
						</td>
					</tr>
					<tr>
						<td colspan="2" style="height: 25px;border-bottom:1px solid #797777">
							
						</td>
					</tr>
				</table>
			</div>
		</div><!-- end -->
		<table style="width: 100%;border:1px solid #797777;margin-top: 0px;">
			<tr>
				<td style="padding: 7px 0px;background:#231f20;font-size:10px;font-weight:bold;color:#fff;text-align: center;">PARTICULARS OF GOODS</td>
			</tr>
		</table>
		<div class="col-sm-12">
			<div class="col-sm-6" style="width:60%">
				<table style="width: 100%;border:1px solid #797777;">
					<tr>
						<td style="height: 30px;">
							GOODS
						</td>
						<td colspan="2">
							<span>
								<?php if($hongleongdata->goods=="NEW"){ ?>
									<span style="font-size: 14px">&#9745;</span> NEW
								<?php }else{ ?>
									❑ NEW
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->goods=="USED"){ ?>
									<span style="font-size: 14px">&#9745;</span> USED
								<?php }else{ ?>
									❑ USED
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->goods=="AUTO"){ ?>
									<span style="font-size: 14px">&#9745;</span> AUTO
								<?php }else{ ?>
									❑ AUTO
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->goods=="MANUAL"){ ?>
									<span style="font-size: 14px">&#9745;</span> MANUAL
								<?php }else{ ?>
									❑ MANUAL
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->goods=="SALOON"){ ?>
									<span style="font-size: 14px">&#9745;</span> SALOON
								<?php }else{ ?>
									❑ SALOON
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->goods=="COMMERCIAL"){ ?>
									<span style="font-size: 14px">&#9745;</span> COMMERCIAL
								<?php }else{ ?>
									❑ COMMERCIAL
								<?php } ?>					
							</span>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							DESCRIPTIONS OF GOODS
						</td>
						<td colspan="2">
							<?php echo $hongleongdata->detailsofgoods;?>
						</td>
					</tr>
					<tr>
						<td style="height: 40px;">
							MAKE / MODEL
						</td>
						<td colspan="2">
							<?php echo $hongleongdata->make;?> <?php echo $hongleongdata->model;?>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							REGISTRATION NO.
						</td>
						<td>
							<?php echo $hongleongdata->registrationno;?>
						</td>
						<td>
							EX.REGN NO.
							<?php echo $hongleongdata->exregn_no;?>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							ORIGINA REGN DATE
						</td>
						<td colspan="2">
							<?php echo $hongleongdata->dateof_reg;?>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							CHASSIS NO.
						</td>
						<td>
							<?php echo $hongleongdata->chassisno;?>
						</td>
						<td>
							ENGINE NO.
							<?php echo $hongleongdata->engineno;?>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							MFG YEAR
						</td>
						<td>
							<?php echo $hongleongdata->yearofmanufacture;?>
						</td>
						<td>
							ENGINE CAP
							<?php echo $hongleongdata->engine_cap;?>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							PARF ELIGIBILITY
						</td>
						<td>
							<span>
								<?php if($hongleongdata->parf_eligibility=="Yes"){ ?>
									<span style="font-size: 14px">&#9745;</span> Yes
								<?php }else{ ?>
									❑ Yes
								<?php } ?>					
							</span>
							<span>
								<?php if($hongleongdata->parf_eligibility=="No"){ ?>
									<span style="font-size: 14px">&#9745;</span> No
								<?php }else{ ?>
									❑ No
								<?php } ?>					
							</span>
						</td>
						<td>
							OMV
							<?php echo $hongleongdata->omv;?>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							COE
						</td>
						<td>
							<?php echo $hongleongdata->coe;?>
						</td>
						<td>
							S$
							
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							INSURANCE CO  
						</td>
						<td colspan="2">
							<?php echo $hongleongdata->insurance_co;?>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							COVER NOTE NO. 
						</td>
						<td colspan="2">
							<?php echo $hongleongdata->cover_note_no;?>
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							SUM INSURED 
						</td>
						<td colspan="2">
							S$ <?php echo $hongleongdata->sum_insured;?> COM/TPFT
						</td>
					</tr>
					<tr>
						<td style="height: 30px;">
							EXPIRY DATE
						</td>
						<td colspan="2">
							<?php echo $hongleongdata->expiry_date;?>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-6" style="width:39.8%">
				<table style="width: 100%;border:1px solid #797777;">
					<tr>
						<td style="height:25px;width:40%">
							CASH PRICE
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							$ <?php echo $hongleongdata->cash_price;?>
						</td>
					</tr>
					<tr>
						<td style="height:25px">
							LESS: Deposit (  %)
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							$ <?php echo $hongleongdata->less_deposit;?>
						</td>
					</tr>
					<tr>
						<td style="height:25px">
							AMOUNT OF FINANCE
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							$ <?php echo $hongleongdata->amountof_finance;?>
						</td>
					</tr>
					<tr>
						<td style="height:25px">
							TERM CHARGES
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							$ <?php echo $hongleongdata->term_charges;?>
						</td>
					</tr>
					<tr>
						<td style="height:25px">
							BALANCE PAYABLE
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							$ <?php echo $hongleongdata->balance_payable;?>
						</td>
					</tr>
					<tr>
						<td style="height:25px">
							HIRE PURCHASE PRICE
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							$ <?php echo $hongleongdata->hire_purchase_price;?>
						</td>
					</tr>
					<tr>
						<td style="height:25px;">
							
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							
						</td>
					</tr>
					<tr>
						<td style="height:25px">
							Repayment Period
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							<?php echo $hongleongdata->loan_period;?> months
						</td>
					</tr>
					<tr>
						<td style="height:25px">
							Interest Rate
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							<?php echo $hongleongdata->interest_rate;?> % p.a.
						</td>
					</tr>
					<tr>
						<td style="height:25px">
							Monthly Instalment
						</td>
						<td style="border-bottom:1px solid #797777;border-left:1px solid #797777;">
							$ <?php echo $hongleongdata->month_installment;?> 
						</td>
					</tr>
					<tr>
						<td style="height:25px;border-right:1px solid #797777;border-bottom:1px solid #797777;">
							Final Instalment
						</td>
						<td style="border-bottom:1px solid #797777;">
							$ <?php echo $hongleongdata->final_installment;?> 
						</td>
					</tr>
					<tr>
						<td style="height:60px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777;">
							Goods were inspected by: 
						</td>
						<td style="vertical-align: top;border-bottom:1px solid #797777;">
							Please Sign / Stamp here : <br/>
							
						</td>
					</tr>
					<tr>
						<td style="height:55px;vertical-align: top;border-right:1px solid #797777;border-bottom:1px solid #797777;">
							Location of Goods (Address where goods are to be located)
						</td>
						<td style="vertical-align: top;border-bottom:1px solid #797777;">
							
							<?php echo $hongleongdata->final_installment;?> 
						</td>
					</tr>
				</table>
			</div>
		</div><!-- end -->
		<table style="width: 100%;border:1px solid #797777;margin-top: 0px;">
			<tr>
				<td colspan="2" style="padding: 7px 0px;background:#231f20;font-size:10px;font-weight:bold;color:#fff;text-align: center;">DECLARATION</td>
			</tr>
			<tr>
				<td colspan="2" style="padding-top: 20px;border-bottom: 1px solid #797777;">
					I/We hereby request you to purchase from <u><?php echo $hongleongdata->purchasefrom;?></u> and to let on hire to me/us upon the terms and conditions of your standard hire-purchase agreement the goods more particularly described above.I/We hereby declare that (1) the aforesaid particulars and answers given by me/us to be true and that they shall be the basis on which the said agreement shall be (2) I/We have not been a bankrupt nor assigned my/our estate for the benefit of creditors (3) I/We will repay the finance in accordance with the terms and conditions of the agreement if my/our applications is approved (4) the aforesaid information is submitted to induce you to extend finance to me/us in consideration of you agreeing to consider my/our application for a hire purchase loan. I/We agree to pay the commitment fee of S$50 (Dollars fifty only) I/We further agree that the commitment fee is not refundable if the hire purchase loan is aborted for any reason whatever provided that if the hire purchase loan is proceeded with the commitment fee shall be treated as part-payment of the 1st instalment of the hire purchase loan. <br>

					I/We further agree that the above term charges are subject to change at your discretion if after 4(four) weeks from the date of application, the Hire Purchase is not proceeded with.<br><br>

					If the goods comprised in the hire purchase is a motor vehicle, I/We represent and warrant to you that the vehicle will only be: <br/><br>
					1. used for lawful purpose;  2. driven by persons who are licensed to drive that class of vehicle; and  3. dirven by me or my/our employees<br><br>

					I authorise you to disclose, at your sole discretion, to any credit bureau of which you are a member or subscriber or to any of their members or subscribers or agents, any information relating to this Application and any loan account that I may have with you. For assessing any credit worthiness, you may at any time and on any number of times, obtain any information relating to me from any credit bureau and I agree to them disclosing such information to you.
				</td>
			</tr>
			<tr>
				<td style="height: 120px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;vertical-align: top;">
					Main Applicant (Registered Owner) <br/>
					<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$hongleongdata->signof_hirer)); ?>" class="img-responsive" style="width:100px;height: 30px;">
					<?php echo $hongleongdata->sign_date;?><br/>
					Signature<br/>
					Name/Date
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;vertical-align: top;">
					Guarantor (if applicable) <br/>
					<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$hongleongdata->signof_guarantor)); ?>" class="img-responsive" style="width:100px;height: 30px;">
					<?php echo $hongleongdata->guarantor_sign_date;?><br/>
					Signature<br/>
					Name/Date
				</td>
			</tr>
		</table>
		<table style="width: 100%;border:1px solid #797777">
			<tr>
				<td colspan="3">REMARKS</td>
			</tr>
			<tr>
				<td style="height:120px;vertical-align:bottom">
					
					RECOMMENDED / DATE<br/>
				</td>
				<td style="vertical-align:bottom">
					
					CONCURRED BY<br/>
				</td>
				<td style="vertical-align:bottom">
					
					APPROVED BY<br/>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="border-top: 1px solid #797777;border-bottom: 1px solid #797777;">
					For Corporate Applicant, complete the following and indicate Name and NRIC/Passport No. of Authorised Signatory in the Signature box.
				</td>
			</tr>
			<tr>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					Name & NRIC
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					Designation
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					Residential Address
				</td>
			</tr>
			<tr>
				<td style="height: 22px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					1). <?php echo $hongleongdata->indicate_name;?> & <?php echo $hongleongdata->indicate_nric;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					<?php echo $hongleongdata->indicate_designation;?>
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					<?php echo $hongleongdata->recommended_date;?>
				</td>
			</tr>
			<tr>
				<td style="height: 22px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					2).
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					
				</td>
			</tr>
			<tr>
				<td style="height: 22px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					3).
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					
				</td>
			</tr>
			<tr>
				<td style="height: 22px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					4).
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					
				</td>
			</tr>
			<tr>
				<td style="height: 22px;border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					5).
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					
				</td>
				<td style="border-right: 1px solid #797777;border-bottom: 1px solid #797777;">
					
				</td>
			</tr>
		</table>
		<p>
			Important - Please read Hong Leong Finance's Form & Notice relating to the PDPA before signing
		</p>
		<div class="col-sm-12" style="margin-top: -10px;" class="tbl_padding">
			<div class="col-sm-6" style="width:49%">
				<table style="width: 100%;border:1px solid #797777;font-size:11px !important">
					<tr>
						<td style="padding: 3px 10px;background:#d7d7d7;font-size:13px;font-weight:bold;">For Hirer (Individual)</td>
					</tr>
					<tr>
						<td>
							<b>Part I - PDPA Declaration and Marketing Consent</b><br/>
							I agree that the Company may collect, use and disclose my personal data in the manner described above and warrant and confirm that any personal data I have or in the future supply or provide to the Company may also be collected, used and disclosed in the manner described above. <br/>
							I also request that the Company market to me products and services of the Company, especially promotions on:<br/>
							(Tick the below relevant options, or leave them blank if you do not want to receive such marketing information)<br/>
							∙ Loans Products<br/>
							∙ Deposits Products<br/>
							and at my telephone number(s) which the Company has or collects from time to time, through the following means:<br/>
							(Tick the below relevant options, or leave them blank if you do not want to receive such marketing information through your telephone numbers - the Compnay may still send such marketing information to you by post)<br/>
							∙ Text messages [  ]<br/>
							∙ Voice calls [  ]<br/>
							∙ Fax messages [  ]<br/>
						</td>

					</tr>
					<tr>
						<td>
							<b>Part II - Tax Declaration</b><br/>
							I declare and confirm that to the best of my knowledge, I have not committed or been convicted of tax evasion crimes under Singapore tax laws or any similar serious tax crimes under any foreign law.
						</td>
					</tr>
					<tr>
						<td>
							<b>Part III - Hire Purchase Declaration</b><br/>
							Hire Purchase of ...............................................................................</u> <br/>
							I declare that I did not obtain any credit facility for the hiring of the above motor vehicle. <br/>
							If the above declaration is incorrect, please delete the declaration and state the amount of the credit facility below: <br/>
							..................................................................<br/>
							
						</td>
					</tr>
					<tr>
						<td style="line-height: 25px;">
							<p>Name : <?php echo $hongleongdata->name;?><br/>
							NRIC/Passport No. : <?php echo $hongleongdata->nric;?><br/>

							<img src="<?php echo base_url() .'upload/sign/'.$hongleongdata->signof_hirer;?>" class="gg" style="width:100px;height: 30px;"><br/>
							Signature : <br/>

							Date : <?php echo $hongleongdata->indivi_hire_signdate;?><br/>
							</p>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-6" style="width:49%">
				<table style="width: 100%;border:1px solid #797777;font-size:11px !important">
					<tr>
						<td style="padding: 3px 10px;background:#d7d7d7;font-size:13px;font-weight:bold;">For Guarantor to Hire (Individual)</td>
					</tr>
					<tr>
						<td>
							<b>Part I - PDPA Declaration and Marketing Consent</b><br/>
							I agree that the Company may collect, use and disclose my personal data in the manner described above and warrant and confirm that any personal data I have or in the future supply or provide to the Company may also be collected, used and disclosed in the manner described above. <br/>
							I also request that the Company market to me products and services of the Company, especially promotions on:<br/>
							(Tick the below relevant options, or leave them blank if you do not want to receive such marketing information)<br/>
							∙ Loans Products<br/>
							∙ Deposits Products<br/>
							and at my telephone number(s) which the Company has or collects from time to time, through the following means:<br/>
							(Tick the below relevant options, or leave them blank if you do not want to receive such marketing information through your telephone numbers - the Compnay may still send such marketing information to you by post)<br/>
							∙ Text messages [  ]<br/>
							∙ Voice calls [  ]<br/>
							∙ Fax messages [  ]<br/>
						</td>

					</tr>
					<tr>
						<td>
							<b>Part II - Tax Declaration</b><br/>
							I declare and confirm that to the best of my knowledge, I have not committed or been convicted of tax evasion crimes under Singapore tax laws or any similar serious tax crimes under any foreign law.
						</td>
					</tr>
					<tr>
						<td style="line-height: 25px;height:243x;vertical-align: top;">
							
							Name : <?php echo $hongleongdata->guarantor_name;?><br/>
							NRIC/Passport No. : <?php echo $hongleongdata->guarantor_nric;?><br/>

							<img src="<?php echo base_url() .'upload/sign/'.$hongleongdata->signof_guarantor;?>" class="gg" style="width:100px;height: 30px;"><br/>
							Signature : <br/>

							Date : <?php echo $hongleongdata->indivi_gurantorhire_signdate;?><br/>
						</td>
					</tr>
				</table>
			</div>
		</div><!-- end -->
		<div class="col-sm-12" style="margin-top:-10px;">
			<p>For completion where the vehicle will be registered in the name of a business or company</p>
		</div>
		<div class="col-sm-12" style="margin-top:-10px;" class="tbl_padding">
			<div class="col-sm-6" style="width:49%">
				<table style="width: 100%;border:1px solid #797777;font-size:11px !important">
					<tr>
						<td style="padding: 3px 10px;background:#d7d7d7;font-size:13px;font-weight:bold;">For Hirer (Corporate)</td>
					</tr>
					<tr>
						<td>
							<b>Part I - Tax Declaration</b><br/>
							I declare and confirm on behalf of ........... ("the Hirer Company") that to the best of our knowledge, the Hirer Company have not committed for been convicted of tax evasion crimes under Singapore tax laws or any similar serious tax crimes under any foreign law.
						</td>
					</tr>
					<tr>
						<td>
							<b>Part II - Hire Purchase Declaration</b><br/>
							Hire Purchase of <u><?php echo $hongleongdata->corporate_hire_purchase;?></u> I declare and confirm on behalf of the Hirer Company that the Hirer Company did not obtain any credit facility for the hiring of the above motor vehicle. If the above declaration is incorrect, please delete the declaration and state the amount of the credit facility below: <br/>
							..................................................................<br/>
							
						</td>
					</tr>
					<tr>
						<td style="line-height:25px;">
							Name of Representative : <?php echo $hongleongdata->corporate_hire_name;?><br/>
							NRIC/Passport No. : <?php echo $hongleongdata->corporate_hire_nric;?><br/>
							Designation : <?php echo $hongleongdata->corporate_hire_designationtion;?><br/>

							
							Signature : <br/>

							Date : <?php echo $hongleongdata->corporate_hire_signdate;?><br/>
						</td>
					</tr>
				</table>
			</div>
			<div class="col-sm-6" style="width:49%">
				<table style="width: 100%;border:1px solid #797777;font-size:11px !important">
					<tr>
						<td style="padding: 3px 10px;background:#d7d7d7;font-size:13px;font-weight:bold;">For Guarantor to Hire (Corporate)</td>
					</tr>
					<tr>
						<td style="">
							<b>Tax Declaration</b><br/>
							I declare and confirm that to the best of my knowledge, I have not committed or been convicted of tax evasion crimes under Singapore tax laws or any similar serious tax crimes under any foreign law.  <br/>
						</td>
					</tr>
					<tr>
						<td style="line-height: 25px;height:265px;vertical-align: top;">
							Name of Representative : <?php echo $hongleongdata->corporate_gurantorhire_name;?><br/>
							NRIC/Passport No. : <?php echo $hongleongdata->corporate_gurantorhire_nric;?><br/>

							
							Signature : <br/>

							Date : <?php echo $hongleongdata->corporate_gurantorhire_signdate;?><br/>
						</td>
					</tr>
				</table>
			</div>
		</div><!-- end -->
	</div>
</div>
</body>
</html>