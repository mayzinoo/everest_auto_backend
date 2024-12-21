<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 leasingtab">
          <div class="col-sm-6">
            <h1>Leasing</h1>
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
        <div class="tab-content clearfix">
            
            <div class="card-header" id="exTab3">
                <h3 class="card-title">List</h3>  
                
                    <div class="card-tools">
                        <ul class="nav nav-pills ml-auto">                    
                          <li class="nav-item">
                            <a class="nav-link" href="leasing/create_form" ><i class="fa fa-plus"></i> New</a>                        
                          </li>
                          <li>
                            <a class="nav-link" href="leasing/leasingform_pdf" target="_blank">
                                <i class="fa fa-file-pdf"></i> Pdf
                            </a>
                          </li>
                          <li>
                            <a class="nav-link" href="leasing/leasing_exportdata" target="_blank">
                                <i class="fa fa-file-excel"></i> Excel
                            </a>
                          </li>
                        </ul>
                    </div>             
            </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <table id="example2" class="display table table-bordered table-hover">
                              <thead>
                              
                                <tr>
                                    <th>#</th>
                                    <th>Broker</th>
                                    <th>Car Plate</th>
                                    <th>Make/Model</th>
                                    <th>Roadtax Expiry</th>
                                    <th>Coe Expiry</th>
                                    <th>Inspection Date</th>
                                    <th>Out Date</th>
                                    <th>In Date</th>
                                    <th>Saleman</th>
                                    <th>Payment</th>
                                    <th>Action</th>
                                </tr>
                              
                              </thead>
                              <tbody>
                                    <?php
                                        $i=1;
                                            foreach($leasing->result() as $row):
                                        ?> 
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row->broker; ?></td>
                                                <td><?php echo $row->car_plate; ?></td>
                                                <td><?php echo $row->make; ?> <?php echo $row->model; ?></td>
                                                <td><?php echo $row->roadtax_expiry; ?></td>
                                                <td><?php echo $row->coe_expiry; ?></td>
                                                <td><?php echo $row->inspection_date; ?></td>
                                                <td><?php echo $row->out_date; ?></td>
                                                <td><?php echo $row->in_date; ?></td>
                                                <td><?php echo $row->salesman; ?></td>
                                                <td><?php echo $row->payment; ?></td>
                                                <td>
                                                    <div class="dropdown">
                                                          <button class="btn btn-xs btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa fa-file-pdf"></i>
                                                          </button>

                                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                            <a class="dropdown-item" href="leasing/leasingrentalform_pdf/<?php echo $row->id; ?>" target="_blank">Rental Aggrement</a>
                                                            <a class="dropdown-item" href="leasing/leasingrentalform2_pdf/<?php echo $row->id; ?>" target="_blank">Undertaking Form</a>
                                                      </div>
                                                    </div>
                                                    <a href="<?php echo base_url() .'leasing/edit_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'leasing/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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
            
           
        </div><!-- end tab-content -->
        </div><!-- card -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>