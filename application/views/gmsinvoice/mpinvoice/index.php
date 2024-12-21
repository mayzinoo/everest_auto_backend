<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MP Invoice</h1>
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
                      <a class="nav-link" href="mp_invoice/create_form" ><i class="fa fa-plus"></i> New</a>                        
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
                        <th>Bill To</th>
                        <th>Vehicle Reg No</th>
                        <th>Make/Model</th>
                        <th>Engine No</th>
                        <th>Chassis No</th>
                        <th>Loan Amount</th>
                        <th>Total Amt</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($mpinvoice->result() as $row):
                            ?> 
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->billto; ?></td>
                                    <td><?php echo $row->vehireg_no; ?></td>
                                    <td><?php echo $row->make; ?> <?php echo $row->model; ?></td>
                                    <td><?php echo $row->engine_no; ?></td>
                                    <td><?php echo $row->chassis_no; ?></td>
                                    <td><?php echo $row->loan_amt; ?></td>
                                    <td><?php echo $row->total_amt; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() .'mp_invoice/mpinvoice_pdf/'.$row->id;?>" target="_blank" type="button" class="btn btn-primary btn-xs color-white">
                                            <i class="fa fa-file-pdf"></i>
                                        </a>
                                        <a href="<?php echo base_url() .'mp_invoice/edit_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'mp_invoice/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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