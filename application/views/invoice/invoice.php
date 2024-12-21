<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoices List</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">List</h3>  
                   
          </div>
          <!-- /.card-header -->
          <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <tr>
                        <th>#</th>
                        <th>Invoice No</th>
                        <th>Total Amount (SGD) </th>
                        <th>Invoice Date</th>
                        <th>Delivery Date</th>
                        <th>Status</th>
                        <th width="200">Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
								$i=1;
				                    foreach($invoicelist->result() as $row):
				                  ?>  
				                <tr>
				                	<td><?php echo $i; ?></td>
				                	<td><?php echo $row->invoice_name; ?></td>					                	
									<td>$ <?php echo number_format($row->totalamt); ?></td>
									<td><?php echo $row->invoice_date; ?></td>
									<td><?php echo $row->delidate; ?></td>
									<td><b>Approved</b></td>
	                                <td>
	                                	<a href="invoice/generateinvoicepdf/<?php echo $row->ivoid; ?>/<?php echo $row->ivono; ?>" target="_blank" type="button" class="delete-asset btn btn-primary btn-xs color-white">
	                                        <i class="fa fa-file-pdf"></i>
	                                    </a>
	                                	
										<a onclick="return confirm('Are you sure to delete ?')" href="<?php echo base_url() .'invoice/delete_invoice/'.$row->ivoid;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
	                                        <i class="fa fa-trash"></i>
	                                    </a>

									</td>
								</tr> 
								 <?php
					                $i++;
					            	endforeach; ?>    
                        
                  </tbody>
                </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

