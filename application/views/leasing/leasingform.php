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
		
		#container{
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		}
		#body{
			color: #000 !important;
		}		
        table{
        	/*font-size: 11px;*/
        	text-align: center;        	
        	border-collapse: collapse;
        }
        table tr th{
        	font-size: 8px !important;
        	border: 1px solid #797777;
        }
        table tr td{
        	padding: 3px !important;
        	border: 1px solid #797777;
        	font-size: 9px !important;
        }
       
	</style>
</head>
<body>
<div id="container">
	<div id="body">
		<div class="col-sm-12">
			<table style="width: 100%;border:1px solid #797777;">
				<thead>
					<tr>
						<th>BROKER</th>
						<th>CAR PLATE</th>
						<th>MAKE/MODEL</th>
						<th>ROADTAX EXPIRY</th>
						<th>COE EXPIRY</th>
						<th>INSPECTION DATE</th>
						<th>OUT DATE</th>
						<th>IN DATE</th>
						<th>SALESMAN</th>
						<th>PAYMENT</th>
						<th>BOOKING DATE</th>
						<th>TENURE</th>
						<th>SALESMAN</th>
					</tr>
				</thead>
				<tbody>
					<?php
                        
                            foreach($leasing->result() as $row):
                        ?> 
					<tr>
						<td><?php echo $row->broker;?></td>
						<td><?php echo $row->car_plate;?></td>
						<td><?php echo $row->make;?>-<?php echo $row->model;?></td>
						<td><?php echo $row->roadtax_expiry;?></td>
						<td><?php echo $row->coe_expiry;?></td>
						<td><?php echo $row->inspection_date;?></td>
						<td><?php echo $row->out_date;?></td>
						<td><?php echo $row->in_date;?></td>
						<td><?php echo $row->salesman;?></td>
						<td><?php echo $row->payment;?></td>
						<td><?php echo $row->booking_date;?></td>
						<td><?php echo $row->tenure;?></td>
						<td><?php echo $row->salesman2;?></td>
					</tr>					
					<?php                    
                    endforeach; ?>  
				</tbody>
			</table>
		</div>
	</div>
</div>
</body>
</html>