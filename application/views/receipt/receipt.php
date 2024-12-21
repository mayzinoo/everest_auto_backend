<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Purchase Receipt</h1>
            <?php message(); ?>
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
            <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">                    
                    <li class="nav-item">
                      <a class="nav-link" href="receipt/create_form" ><i class="fa fa-plus"></i> New</a>                        
                    </li>
                  </ul>
                </div>             
          </div>
          <!-- /.card-header -->
          <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <tr>
                        <th>#</th>
                        <th>Reference No</th>
                        <th>UEN / NRIC No</th>
                        <th>Vehicle No</th>
                        <th>Price</th>
                        <th>Paid Amount</th>
                        <th>Balance</th>
                        <th>Handover of Vehicle Date</th>
                        <th>Handover of Vehicle Time</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($receiptdata->result() as $row):
                            ?> 
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->reference_no; ?></td>
                                    <td><?php echo $row->uen_nric_no; ?></td>
                                    <td><?php echo $row->vehi_no; ?></td>
                                    <td><?php echo $row->price; ?></td>
                                    <td><?php echo $row->paid_price; ?></td>
                                    <td><?php echo $row->balance; ?></td>
                                    <td><?php echo $row->handover_date; ?></td>
                                    <td><?php echo $row->handover_time; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() .'receipt/receipt_pdf/'.$row->id;?>" target="_blank" type="button" class="btn btn-primary btn-xs color-white">
                                            <i class="fa fa-file-pdf"></i>
                                        </a>
                                        <a href="<?php echo base_url() .'receipt/edit_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'receipt/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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