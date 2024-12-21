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
        	font-size: 12px;        	
        	border-collapse: collapse;
        }
        table tr td{
        	/*padding: 5px !important;*/
        	line-height: 25px;
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
		<div class="col-sm-12" style="text-align:center;font-weight: bold;">
			
				<img src="<?=base_url()?>/assets/images/abwin-logo.png" style="width: 170px;">
				<p style="font-size: 16px;">ACKNOWLEDGEMENT LETTER</p>
				<p style="font-size: 14px;">(For Commercial Vehicle Only)</p>
		</div>
		<div class="col-sm-12">
			<p>
				I/We <u><?php echo $acknowledgeforvehicle->name;?></u> acknowledged to the following as stated in the insurance policy terms and conditions for insured vehicle no <u><?php echo $acknowledgeforvehicle->vehiname;?></u>.
			</p>
		</div>
		<table style="width: 100%;">
				<tr>
					<td style="width:24px">
						□
					</td>
					<td style="font-size: 13px;">
						<b>NTUC</b>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">
						►
					</td>
					<td>
						Additional Own Damage Excess (Section I) $1,000 for any authorized driver who is below 27 years old and or has driving experience less than 2 years
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">
						►
					</td>
					<td>
						Third Party Working Risk (TPWR) Excess
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align: top;">
						An Additional Excess of $1,000 (above any other Excess under the policy) will apply to each and every claim arising out from using Tailgate or Crane
					</td>
				</tr>
		</table>
		<table style="width: 100%;margin-top: 30px;">
				<tr>
					<td style="width:24px">
						□
					</td>
					<td style="font-size: 13px;">
						<b>EQ Insurance</b>
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">
						►
					</td>
					<td>
						Additional All Claims Excess of $3,000 apply to any authorized driver who is below 26 years old and/or above 70 years old and/or Holder of a valid Singapore and/or Malaysia driving license of the relevant class of less than 2 year duration.
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">
						►
					</td>
					<td>
						Third Party Working Risk (TPWR) Excess
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align: top;">
						An Additional Excess of $1,500 (above any other Excess under the policy) will apply to each and every claim arising out from using Tailgate or Crane
					</td>
				</tr>
		</table>	

		<table style="width: 100%;margin-top: 30px;">
				<tr>
					<td style="width:24px">
						□
					</td>
					<td style="font-size: 13px;">
						<b>China Taiping Insurance</b>
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align: top;">
						NOTE: (ONLY APPLICABLE TO COMPREHENSIVE) – COMMERCIAL
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">
						►
					</td>
					<td>
						A FLAT Excess of $2,000 will be applied for unnamed driver(s) who is 66 years old and above
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">
						►
					</td>
					<td>
						Additional Own Damage Excess (Section I) $3,000 is applicable for authorised driver who is below the age of 22 or process a full driving license for Less than 1 year
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align: top;">
						*Age/ Driving Experience as at Date of Accident
					</td>
				</tr>
				<tr>
					<td style="vertical-align: top;">
						►
					</td>
					<td>
						Third Party Working Risk (TPWR) Excess
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="vertical-align: top;">
						Same as Own Damage Excess (Section I)
					</td>
				</tr>
		</table>
		<table style="width: 100%;margin-top: 30px;">
			<tr>
				<td style="vertical-align:bottom;height:100px;">
					<span style="text-align: center;"><?php echo $acknowledgeforvehicle->name;?></span><br/>
					<img src="<?php echo 'data:image/jpg;base64,'.base64_encode(file_get_contents('./upload/sign/'.$acknowledgeforvehicle->signof_proposal)); ?>" class="gg" style="width:100px;height: 30px;"><br/>
					<span style="border-top:1px dotted #000;: bottom;">Name & Signature of Proposer / Company Stamp</span>
				</td>
				<td style="vertical-align:bottom">
					<?php echo $acknowledgeforvehicle->proposalsign_date;?><br/>
					<span style="border-top:1px dotted #000">Date</span>
				</td>
			</tr>
		</table>	
	</div>
</div>
</body>
</html>
