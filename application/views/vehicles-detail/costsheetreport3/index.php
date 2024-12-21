<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cost Sheet Report 3</h1>
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
                      <a class="nav-link" href="costsheetreport3/create_form" ><i class="fa fa-plus"></i> New</a>                        
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
                        <th>VEHICLE NUMBER</th>
                        <th>MAKE AND MODEL</th>
                        <th>BUY CODE</th>  
                        <th>SELL CODE</th>       
                        <th>PURCHASE DATE</th> 
                        <th>SALES BOOKING DATE</th>                
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($costsheet3_data->result() as $row):
                            ?> 
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td>
                                      <a href="costsheetreport3/detail/<?php echo $row->vehi_id; ?>"><?php echo $row->car_plate; ?></a>                                        
                                    </td>
                                    <td><?php echo $row->makemodel; ?></td>
                                    <td><?php echo $row->buycode; ?></td>
                                    <td><?php echo $row->sellcode; ?></td>
                                    <td><?php echo $row->purchase_date; ?></td>
                                    <td><?php echo $row->salesbooking_date; ?></td>
                                    <td>
                                      <a title="PDF" href="<?php echo base_url() .'costsheetreport3/costsheetreport_pdf/'.$row->vid;?>" type="button" target="_blank" class="btn btn-success btn-xs color-white">
                                            <i class="fa fa-file-pdf"></i>
                                        </a>
                                       <a title="Edit" href="<?php echo base_url() .'costsheetreport3/edit_form/'.$row->vid;?>" type="button" class="btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <!-- <a title="Delete" onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'costsheetreport3/delete/'.$row->vid;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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

