<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Company</h1>
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
                      <a class="nav-link" href="company/create_form" ><i class="fa fa-plus"></i> New</a>
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
                        <th>Name</th>                        
                        <th>Address </th>                       
                        <th>Action</th>
                    </tr>
                  </tr>
                  </thead>
                  <tbody>
                        <?php
                        $i=1;
                            foreach($company->result() as $row):
                        ?> 
                            <tr>
                                <td><?php echo $row->cmy_name; ?></td>
                                <td><?php echo $row->address; ?></td>
                                <td>
                                    <a href="<?php echo base_url() .'company/edit_form/'.$row->id;?>" type="button" class="btn btn-primary btn-xs color-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a onclick="return confirm('Are you sure to delete?')" href="<?php echo base_url() .'company/delete/'.$row->id;?>" type="button" class="delete-asset btn btn-danger btn-xs color-white">
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
