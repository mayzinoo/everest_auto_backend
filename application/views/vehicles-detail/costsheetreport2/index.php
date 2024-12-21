<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cost Sheet Report 2</h1>
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
                      <a class="nav-link" href="costsheetreport2/create_form" ><i class="fa fa-plus"></i> New</a>                        
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
                        <th>Vehicle Number </th>
                        <th>Make/Model</th>
                        <th>Cost Details Total</th>  
                        <th>Commission Total</th>       
                        <th>Floor Stock Total</th> 
                        <th>Payout Total</th>                
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($costsheet2_data->result() as $row):
                            ?> 
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->car_plate; ?></td>
                                    <td><?php echo $row->makemodel; ?></td>
                                    <td><?php echo $row->cost_total; ?></td>
                                    <td><?php echo $row->commission_total; ?></td>
                                    <td><?php echo $row->floor_total; ?></td>
                                    <td><?php echo $row->broker_total; ?></td>
                                    <td>
                                      <a title="PDF" href="<?php echo base_url() .'costsheetreport2/costsheetreport_pdf/'.$row->vid;?>" type="button" target="_blank" class="btn btn-success btn-xs color-white">
                                            <i class="fa fa-file-pdf"></i>
                                        </a>
                                       <a title="Edit" href="<?php echo base_url() .'costsheetreport2/edit_form/'.$row->vid;?>" type="button" class="btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <!-- <a title="Delete" onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'costsheetreport2/delete/'.$row->vid;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
                                            <i class="fa fa-trash"></i>
                                        </a> -->

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

