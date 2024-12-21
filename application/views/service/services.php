<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Services</h1>
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
                      <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#modal-new-service"><i class="fa fa-plus"></i> New</a>
                        
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
                        <th>Name</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                            $i=1;
                                foreach($service->result() as $row):
                            ?> 
                                <tr>
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->name; ?></td>
                                    <td><?php echo $row->created_date; ?></td>
                                    <td>
                                        <a data-id="<?= $row->id ?>" type="button" href="javascript:void(0);" class="edit-services btn btn-primary btn-xs color-white">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'services/delete_services/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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


<!-- New Services -->
<div class="modal fade" id="modal-new-service" role="dialog">
    <div class="modal-dialog">
  
      <div class="modal-content">
         <form method="post">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Add Services</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">                        
                        <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="n_name" class="form-control" placeholder="Name" required="">
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
        </form>
      </div>
      
    </div>
</div>

<div class="modal fade" id="modal-edit-service" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
         <form method="post" action="<?php echo site_url('services/update_services') ?>">
                <div class="modal-header">
                  
                  <h4 class="modal-title">Edit Services</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                        <input type="hidden" value="" name="id"/> 
                        <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <div class="form-group">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </div>
        </form>
      </div>
      
    </div>
</div>
<!-- end services -->
