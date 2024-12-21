<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Sale CRM</h1>
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
                      <a class="nav-link" href="sale_crm/create_form" ><i class="fa fa-plus"></i> New</a>                        
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
                        <th>System ID</th>
                        <th>Sales CRM No</th>
                        <th>Contact Source</th>
                        <th>Veh No</th>
                        <th>Veh Own</th>
                        <th>Veh Leave</th>
                        <th>Salesman</th>
                        <th>Entry Date</th>
                        <th>Created By</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($salecrm_list->result() as $row):
                            ?> 
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->system_id; ?></td>
                                    <td><?php echo $row->sale_crm_no; ?></td>
                                    <td><?php echo $row->csname; ?></td>
                                    <td><?php echo $row->vehiname; ?></td>
                                    <td><?php echo $row->vehi_own; ?></td>
                                    <td><?php echo $row->vehi_leave; ?></td>
                                    <td><?php echo $row->sale_man; ?></td>
                                    <td><?php echo $row->entry_date; ?></td>
                                    <td><?php echo $row->created_by; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() .'sale_crm/update_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'sale_crm/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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