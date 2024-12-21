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
        margin: 10mm 10mm 0mm 10mm;  /* this affects the margin in the printer settings */
    }
	body{
			background-color: #fff;
			margin: 0 auto;
			font-family: Arial;
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
        	padding: 3px !important;
        }
        .txtright{
        	text-align: right !important;
        }
        .txtleft{
        	text-align: left !important;
        }
	</style>
</head>
<body>
<div id="container">
	<div id="body">
		<div class="col-sm-12">
			<div class="col-sm-8" style="width:50%">
				<p style="font-size: 16px;"><b>Vehicle Detail/Cost Sheet Report</b></p>	
				<p>Company Name: Everest Auto Pte Ltd</p>			
			</div>
			<div class="col-sm-4" style="text-align: right;float: right">
				<img src="<?=base_url()?>/assets/images/logo.png" style="width:100px;height:auto;margin-top: -20px;">
			</div>
		</div>
		<div class="col-sm-12">
			<table width="100%">
				<tr>
					<td width="20%">BROKER 1 80% </td>
					<td>: <?php echo $vehiclesdetail->broker1;?></td>
				</tr>
                <tr>
                    <td width="20%">BROKER 2 20% </td>
                    <td>: <?php echo $vehiclesdetail->broker2;?></td>
                </tr>
                <tr>
                    <td width="20%">BROKER 3 0.00% </td>
                    <td>: <?php echo $vehiclesdetail->broker3;?></td>
                </tr>
                <tr>
                    <td>CAR PLATE</td>
                    <td>: <?php echo $vehiclesdetail->car_plate;?></td>
                </tr>
				<tr>
					<td>MAKE/MODEL</td>
					<td>: <?php echo $vehiclesdetail->makemodel;?></td>
				</tr>
			</table>
		</div>
		
    	<div class="col-md-12 smm_toppadding">
                <div class="row">
                    <table class="table-sm" style="width:100%;">
                          <thead>
                            <tr>                                      
                                  <td>Description 1</td>
                                  <td>Description 2</td>
                                  <td>Description 3</td>
                                  <td>Date</td>
                                  <td width="10%" class="txtright">Profits</td>
                                  <td width="10%" class="txtright">Costing</td>
                                  <td width="10%" class="txtright">Total</td>
                            </tr>
                          </thead>
                          <tbody>
                          	<?php                                
                                $costsheet = explode('}', $vehiclesdetail->costsheetdes);
                                for($i=1;$i<count($costsheet);$i++)
                                    {
                                      $costsheetdescri = explode(',',$costsheet[$i-1]);
                                    ?>
                            <tr>
                                <td><?php echo $costsheetdescri[0];?></td>
                                <td><?php echo $costsheetdescri[1];?></td>
                                <td><?php echo $costsheetdescri[2];?></td>
                                <td><?php echo $costsheetdescri[3];?></td>
                                <td class="txtright"><?php echo $costsheetdescri[4];?></td>
                                <td class="txtright"><?php echo $costsheetdescri[5];?></td>
                                <td class="txtright"><?php echo $costsheetdescri[6];?></td>
                            </tr>
                            <?php } ?>
                            
                            <tr>
                                <td colspan="4" style="border-top: 1px solid #aeacac;">TOTAL</td>
                                
                                <td class="txtright" style="border-top: 1px solid #aeacac;">SGD <?php echo $vehiclesdetail->profit_total;?></td>
                                <td class="txtright" style="border-top: 1px solid #aeacac;">SGD <?php echo $vehiclesdetail->costing_total;?></td>
                                <td class="txtright" style="border-top: 1px solid #aeacac;">SGD <?php echo $vehiclesdetail->totalamt;?></td>
                            </tr>
                          </tbody>
                    </table>
                </div>
        	</div>
	</div>
</div>
</body>
</html>