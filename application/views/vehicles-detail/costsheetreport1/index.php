<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cost Sheet Report 1</h1>
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
                      <a class="nav-link" href="costsheetreport1/create_form" ><i class="fa fa-plus"></i> New</a>                        
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
                        <th>Broker 1</th>
                        <th>Broker 2</th>
                        <th>Broker 3</th>  
                        <th>Car Plate</th>    
                        <th>Make/Model</th>                  
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($costsheetreport1data->result() as $row):
                            ?> 
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->broker1; ?></td>
                                    <td><?php echo $row->broker2; ?></td>
                                    <td><?php echo $row->broker3; ?></td>
                                    <td><?php echo $row->car_plate; ?></td>
                                    <td><?php echo $row->makemodel; ?></td>
                                    <td>
                                      <a title="PDF" href="<?php echo base_url() .'costsheetreport1/costsheetreport1_pdf/'.$row->id;?>" type="button" target="_blank" class="btn btn-success btn-xs color-white">
                                            <i class="fa fa-file-pdf"></i>
                                        </a>
                                       <a title="Edit" href="<?php echo base_url() .'costsheetreport1/edit_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a title="Delete" onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'costsheetreport1/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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

