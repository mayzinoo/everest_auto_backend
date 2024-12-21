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
        margin: 10mm 15mm;  /* this affects the margin in the printer settings */
    }

	body{
			background-color: #fff;
			margin: 0 auto;
			font-family: Arial;
			color: #4F5155;
		}
		p{color: #000;line-height: normal;font-size: 12px !important;}
		
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
		.nopadding{
			padding: 0px !important;
		}
		.right_info{
            float: right;
            text-align: right;
        }
		#container{
		/*margin: 10px;*/
		/*border: 1px solid #D0D0D0;*/
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		}
		#body{
			color: #000 !important;
		}
		.content{
			border-left: 1px solid #000;
			border-right: 1px solid #000;
			/*border-bottom: 1px solid #000;*/
			/*padding: 0px 10px;*/
		}
		.content_wrapper table th{
			border_bottom: 1px solid #000;
		}
		.content_title h4{
			font-size: 13px;
			border-top: 1px solid #000;
			border-bottom: 1px solid #000;
			margin-top: 0px;
		}
		.sm-font{
			font-size: 12px !important;
		}
		.md-font{
			font-size: 14px !important;
		}
        .form-group{
        	line-height: 32px !important;
        }
        .input_data{
        	border-bottom: 1px solid black;
        	display: block;
        	height: 15px;
        	line-height: 6px;
        	margin-top:15px
        }
        .input_data span,
        .footer_input_data span{
        	font-size: 12px;
        }
        .inner_content{
        	padding: 0px 10px;
        	margin-top: -15px;
        }
        .footer_content{
        	border: 1px solid #000;        	
        }
        .footer_input_data{
        	border-top: 1px solid black;        	
        	height: 25px;
        	line-height: 16px;
        	text-align: center;
        }
        .text_center{
        	text-align: center;
        }
        .footer_text{
        	padding: 0px 10px 5px 10px;
        }
        .right_title{
        	font-size: 22px;
        	margin-bottom: 0px;
        	padding-top:20px;
        	font-weight: bold;
        }
	</style>
</head>
<body>

<div id="container">
	<div id="body">
		<div class="col-sm-6 header">
			<img src="<?=base_url()?>/assets/images/abwin-logo.jpg" style="width:150px;">
				<!-- <h3 class="default-color">ABWIN</h3> -->
		</div>
		<div class="col-sm-6 right_info">
			  <p class="right_title">Loan Proposal Form</p>
		</div>
		
		<div class="col-sm-12 content">			    
			<div class="content_title">
				<h4 class="leftpadding_sm">LOAN DETAIL</h4>
			</div>
			<div class="inner_content">
				<div class="col-sm-6 bottompadding_sm">
					
						<div class="form-group">
								<div class="col-sm-4" style="width: 40%;">
									<span class="sm-font" style="">Make & Model</span>
								</div>
								
								<div class="col-sm-8" style="width:60%;">								
									<div class="input_data">
										<span style=""><?php echo $customerdata->make; ?> <?php echo $customerdata->model; ?></span>
									</div>
								</div>
						</div>	
						
						<div class="form-group">
								<div class="col-sm-4" style="width: 40%;">
									<span class="sm-font">Car Price</span>
								</div>
								<div class="col-sm-8" style="width:60%;">
									<div class="input_data">
										<span style=""></span>
									</div>
								</div>
						</div>	

						<div class="form-group">
								<div class="col-sm-4" style="width: 40%;">
									<span class="sm-font">Loan Period / Int. Rate</span>
								</div>
								<div class="col-sm-8" style="width:60%;">
									<div class="input_data">
										<span style=""><?php echo $customerdata->loan_period; ?> / <?php echo $customerdata->loan_rate; ?></span>
									</div>
								</div>
						</div>
				</div>
				<div class="col-sm-6">
						<div class="form-group">
								<div class="col-sm-4" style="width: 40%;">
									<span class="sm-font">Vehicle No.</span>
								</div>
								<div class="col-sm-8" style="width:60%;">
									<div class="input_data">
										<span><?php echo $customerdata->vehiname; ?></span>
									</div>
								</div>
						</div>	
						
						<div class="form-group">
								<div class="col-sm-4" style="width: 40%;">
									<span class="sm-font">Loan Amount</span>
								</div>
								<div class="col-sm-8" style="width:60%;">
									<div class="input_data">
										<span><?php echo $customerdata->loan_amt; ?></span>
									</div>
								</div>
						</div>	

						<div class="form-group">
								<div class="col-sm-4" style="width: 40%;">
									<span class="sm-font">Monthly Instalmen</span>
								</div>
								<div class="col-sm-8" style="width:60%;">
									<div class="input_data">
										<span><?php echo $customerdata->instalment; ?></span>
									</div>
								</div>
						</div>
				</div>		
			</div>
		</div><!-- loan detail -->

		<div class="content">			    
			<div class="content_title">
				<h4 class="leftpadding_sm">APPLICANT DETAILS</h4>
			</div>			
			
			<div class="col-sm-12 padding_sm">
				<div class="inner_content">
						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Name</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<span><?php echo $customerdata->name; ?></span>
								</div>
							</div>
						</div>
							

						<div class="form-group">
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">ROC / NRIC / FIN</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->nric; ?></span>
										</div>
									</div>
							</div>
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">Date of Reg. / DOB</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->dob; ?></span>
										</div>
									</div>
							</div>
						</div>		

						<div class="form-group">
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">Occupation</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->occupation; ?></span>
										</div>
									</div>
							</div>
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">Marital Status</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->marital_status; ?></span>
										</div>
									</div>
							</div>
						</div>			
						
						
						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Reg. / Home Address</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<span><?php echo $customerdata->address; ?></span>
								</div>
							</div>
						</div>	
						

						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Mailing Address (if any)</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Contact Number</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<div class="col-sm-4"><span>(Home)</span></div>
									<div class="col-sm-4"><span>(Office) <?php echo $customerdata->offc; ?></span></div>
									<div class="col-sm-4"><span>(HP) <?php echo $customerdata->hp; ?></span></div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Email address</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<span><?php echo $customerdata->email; ?></span>
								</div>
							</div>
						</div>

						<h5 style="font-size: 13px !important;font-style: italic;margin-bottom: 5px;">EMPLOYMENT DETAILS (if applicant is personnel)</h5>	
							
							<div class="form-group">
								<div class="col-sm-4" style="width: 20%;">
									<span class="sm-font">Employment Company</span>
								</div>
								<div class="col-sm-8" style="width:80%;">
									<div class="input_data">
										<span><?php echo $customerdata->cmy_name; ?></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-4" style="width: 20%;">
									<span class="sm-font">Employment Address </span>
								</div>
								<div class="col-sm-8" style="width:80%;">
									<div class="input_data">
										<span><?php echo $customerdata->cmy_address; ?></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-6">
										<div class="col-sm-2" style="width: 40%;">
											<span class="sm-font">Annual Income</span>
										</div>
										<div class="col-sm-4" style="width:60%;">
											<div class="input_data">
												<span><?php echo $customerdata->month_income; ?></span>
											</div>
										</div>
								</div>
								<div class="col-sm-6">
										<div class="col-sm-2" style="width: 40%;">
											<span class="sm-font">Yrs of Service</span>
										</div>
										<div class="col-sm-4" style="width:60%;">
											<div class="input_data">
												<?php
			                                        $serviceyear = explode(',', $customerdata->yearof_service);
			                                    ?>
	                                        	<div class="col-sm-6" style="text-align: right;"><span><?php echo $serviceyear[0]; ?> yrs</span></div>
												<div class="col-sm-6" style="text-align: right;"><span><?php echo $serviceyear[1]; ?> mths</span></div>
											</div>
										</div>
								</div>
							</div>	
				</div><!-- inner content -->
			</div>
		</div><!-- applicant detail -->

		<div class="content">			    
			<div class="content_title">
				<h4 class="leftpadding_sm">GUARANTOR DETAILS</h4>
			</div>			
			
			<div class="col-sm-12 padding_sm">
				<div class="inner_content">
						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Name</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<span><?php echo $customerdata->guarantor_name; ?></span>
								</div>
							</div>
						</div>
							

						<div class="form-group">
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">NRIC / FIN</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->guarantor_nric; ?></span>
										</div>
									</div>
							</div>
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">Date of Birth</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->guarantor_dob; ?></span>
										</div>
									</div>
							</div>
						</div>		

						<div class="form-group">
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">Occupation</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->guarantor_occupation; ?></span>
										</div>
									</div>
							</div>
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">Marital Status</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->guarantor_marital_status; ?></span>
										</div>
									</div>
							</div>
						</div>			
						
						
						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Address</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<span><?php echo $customerdata->guarantor_address; ?></span>
								</div>
							</div>
						</div>	
						

						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Contact Number</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<div class="col-sm-4"><span>(HM)</span></div>
									<div class="col-sm-4"><span>(OFF) <?php echo $customerdata->guarantor_offc; ?></span></div>
									<div class="col-sm-4"><span>(HP) <?php echo $customerdata->guarantor_hp; ?></span></div>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Email address</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<span><?php echo $customerdata->guarantor_email; ?></span>
								</div>
							</div>
						</div>
							
						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Employment Company</span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<span><?php echo $customerdata->guarantor_cmyname; ?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-4" style="width: 20%;">
								<span class="sm-font">Employment Address </span>
							</div>
							<div class="col-sm-8" style="width:80%;">
								<div class="input_data">
									<span><?php echo $customerdata->guarantor_cmyaddress; ?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">Annual Income</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<span><?php echo $customerdata->guarantor_monthincome; ?></span>
										</div>
									</div>
							</div>
							<div class="col-sm-6">
									<div class="col-sm-2" style="width: 40%;">
										<span class="sm-font">Yrs of Service</span>
									</div>
									<div class="col-sm-4" style="width:60%;">
										<div class="input_data">
											<?php
		                                        $guarantor_serviceyear = explode(',', $customerdata->guarantor_yearofservice);
		                                    ?>
											<div class="col-sm-6" style="text-align: right;"><span><?php echo $guarantor_serviceyear[0]; ?> yrs</span></div>
											<div class="col-sm-6" style="text-align: right;"><span><?php echo $guarantor_serviceyear[1]; ?> mths</span></div>
										</div>
									</div>
							</div>
						</div>	
				</div><!-- inner content -->
			</div>
		</div><!-- guarantor detail -->

		<div class="col-sm-12 footer_content">
			<p class="footer_text">I/we declare that all the information provided is true and correct and hereby authorise ABWIN Group of Companies to process the loan application</p>

			<div class="col-sm-6" style="width:20%;text-align: center;">
				<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$customerdata->signof_hirer)); ?>" class="img-responsive" style="width:130px;height:50px;">

				
				<div class="footer_input_data">
					<span class="text_center">Signature of Hirer</span>
				</div>
			</div>
			<div class="col-sm-6" style="float: right;text-align: center;">
				<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$customerdata->signof_guarantor)); ?>" class="img-responsive" style="width:130px;height:40px;">

				
				<div class="footer_input_data">
					<span>Signature of Guarantor</span>
				</div>
			</div>
		</div><!-- footer content -->
			
		
	</div>

</div>

</body>
</html>